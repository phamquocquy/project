<?php
class controller_yeu_cau extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("delete from qlns_yeucautuyendung where id = $id");
                header("location:index.php?controller=yeu_cau");
                break;
            case 'huy':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("update qlns_yeucautuyendung set status=3 where id = $id");
                header("location:index.php?controller=yeu_cau");
                break;
        }
//        tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_yeucautuyendung where status =0");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $arr = $this->model->fetch("select * from qlns_yeucautuyendung where status =0 order by id desc limit $from,$record_per_page");
        $arr_status_1 = $this->model->fetch("select * from qlns_yeucautuyendung where status =1 order by id desc");
        $arr_status_2 = $this->model->fetch("select * from qlns_yeucautuyendung where status in (2,3,4) order by id desc");
        $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
        $data_bophan = $this->model->fetch("SELECT * FROM qlns_bophan");
        $data_nhanvien = $this->model->fetch(" SELECT * FROM qlns_nhanvien");
        include "view/yeu_cau_tuyen_dung/view_list_yeu_cau.php";
    }
}
new controller_yeu_cau();