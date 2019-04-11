<?php
class controller_nghi_phep extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("delete from qlns_nghiphep where id = $id");
                header("location:index.php?controller=nghi_phep");
                break;
        }
//        tong so ban ghi
        $email_nv = $_SESSION['email_nv'];
        $ma_nv = $this->model->fetch_one("select ma_nv from qlns_nhanvien where email_nv='$email_nv'");
        $ma_nv = $ma_nv['ma_nv'];
        $total_record = $this->model->num_row("select * from qlns_nghiphep where ma_nv='$ma_nv'");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $nghi_phep = $this->model->fetch("select * from qlns_nghiphep where ma_nv='$ma_nv' and status=0 order by id desc limit $from,$record_per_page");
        $nghi_phep_duyet = $this->model->fetch("select * from qlns_nghiphep where ma_nv='$ma_nv' and status=1 order by id desc limit $from,$record_per_page");
        include "view/nghi_phep/view_list_nghi_phep.php";
    }
}
new controller_nghi_phep();