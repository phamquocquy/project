<?php
class controller_department extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("delete from qlns_bophan where id = $id");
                header("location:index.php?controller=department");
                break;
        }
        //tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_bophan");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $arr = $this->model->fetch("SELECT qlns_bophan.id,qlns_bophan.ma_bp,qlns_bophan.ma_chi_nhanh,qlns_bophan.name_bp,qlns_chinhanh.name_branch FROM qlns_bophan INNER JOIN qlns_chinhanh on qlns_bophan.ma_chi_nhanh=qlns_chinhanh.code WHERE qlns_bophan.ma_chi_nhanh=qlns_chinhanh.code order by qlns_bophan.id desc limit $from,$record_per_page");
        if(isset($_POST['branch']))
        {
            $code = $_POST['branch'];
            $arr = $this->model->fetch("SELECT qlns_bophan.id,qlns_bophan.ma_bp,qlns_bophan.ma_chi_nhanh,qlns_bophan.name_bp,qlns_chinhanh.name_branch FROM qlns_bophan INNER JOIN qlns_chinhanh on qlns_bophan.ma_chi_nhanh=qlns_chinhanh.code WHERE qlns_bophan.ma_chi_nhanh='$code' order by qlns_bophan.id desc limit $from,$record_per_page");
        }
        $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
        include "view/department/view_department.php";
    }
}
new controller_department();