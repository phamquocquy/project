<?php
class controller_nhan_vien extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("delete from qlns_nhanvien where id = $id");
                header("location:index.php?controller=nhan_vien");
                break;
        }
//        tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_nhanvien");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $arr = $this->model->fetch("select * from qlns_nhanvien order by id desc limit $from,$record_per_page");
        $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
        $data_bophan = $this->model->fetch("SELECT * FROM qlns_bophan");
        include "view/nhanvien/view_list_nhan_vien.php";
    }
}
new controller_nhan_vien();