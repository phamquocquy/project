<?php
class controller_add_edit_department extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = $this->model->fetch_one("select * from qlns_bophan where id = $id");
                $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
                $form_action = "index.php?controller=add_edit_department&act=do_edit&id=$id";
                include "view/department/view_edit_department.php";
                break;
            case "do_edit":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $ma_nhanh = $_POST['branch'];
                $name_bo_phan = $_POST['name_bp'];
                $this->model->execute("UPDATE qlns_bophan set ma_chi_nhanh='$ma_nhanh',name_bp='$name_bo_phan' WHERE id =$id");
                header("Location:index.php?controller=department");
                exit;
                break;
            case "add":
                $form_action = "index.php?controller=add_edit_department&act=do_add";
                $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
                include "view/department/view_add_department.php";
                break;
            case "do_add":
                $ma_bp = $_POST['ma_bp'];
                $ma_nhanh = $_POST['branch'];
                $name_bo_phan = $_POST['name_bp'];
                $this->model->execute("insert into qlns_bophan(ma_bp,ma_chi_nhanh,name_bp) values('$ma_bp','$ma_nhanh','$name_bo_phan')");
                header("Location:index.php?controller=department");
                exit;
                break;
        }
    }
}
new controller_add_edit_department();