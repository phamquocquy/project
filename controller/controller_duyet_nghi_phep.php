<?php
class controller_duyet_nghi_phep extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'duyet':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nghi_phep = $this->model->fetch_one("select * from qlns_nghiphep where  id=$id");
                $ma_nv = $nghi_phep['ma_nv'];
                $thoi_gian_bat_dau = $nghi_phep['thoi_gian_bat_dau'];
                $thoi_gian_ket_thuc = $nghi_phep['thoi_gian_ket_thuc'];
                $ly_do = $nghi_phep['ly_do'];
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where ma_nv='$ma_nv'");
                require "sendmail.php";
                sendmail($body_email_duyet_nghi_phep,$nhan_vien['email_nv']);
                $this->model->execute("update qlns_nghiphep set status=1 where id = $id");
                header("location:index.php?controller=duyet_nghi_phep");
                break;
            case 'khong_duyet':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nghi_phep = $this->model->fetch_one("select * from qlns_nghiphep where  id=$id");
                $ma_nv = $nghi_phep['ma_nv'];
                $thoi_gian_bat_dau = $nghi_phep['thoi_gian_bat_dau'];
                $thoi_gian_ket_thuc = $nghi_phep['thoi_gian_ket_thuc'];
                $ly_do = $nghi_phep['ly_do'];
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where ma_nv='$ma_nv'");
                require "sendmail.php";
                sendmail($body_email_khong_duyet_nghi_phep,$nhan_vien['email_nv']);
                $this->model->execute("update qlns_nghiphep set status=2 where id = $id");
                header("location:index.php?controller=duyet_nghi_phep");
                break;
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("delete from qlns_nghiphep where id = $id");
                header("location:index.php?controller=duyet_nghi_phep");
                break;
        }
//        tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_nghiphep");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $nghi_phep = $this->model->fetch("select * from qlns_nghiphep where status=0 order by id desc limit $from,$record_per_page");
        $nghi_phep_duyet = $this->model->fetch("select * from qlns_nghiphep where status in (1,2) order by id desc limit $from,$record_per_page");
        include "view/nghi_phep/view_list_nghi_phep_admin.php";
    }
}
new controller_duyet_nghi_phep();
