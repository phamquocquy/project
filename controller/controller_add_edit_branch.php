<?php
class controller_add_edit_branch extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = $this->model->fetch_one("select * from qlns_chinhanh where id = $id");
                $form_action = "index.php?controller=add_edit_branch&act=do_edit&id=$id";
                include "view/view_edit_branch.php";
                break;
            case "do_edit":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $country = $_POST['country'];
                $name = $_POST['name_branch'];
                $address = $_POST['address'];
                $this->model->execute("UPDATE qlns_chinhanh set country='$country',name_branch='$name',address='$address' WHERE id =$id");
                header("Location:index.php?controller=branch");
                exit;
                break;
            case "add":
                $form_action = "index.php?controller=add_edit_branch&act=do_add";
                include "view/view_add_branch.php";
                break;
            case "do_add":
                $code = $_POST['code'];
                $country = $_POST['country'];
                $name = $_POST['name_branch'];
                $address = $_POST['address'];
                $this->model->execute("insert into qlns_chinhanh(code,country,name_branch,address) values('$code','$country','$name','$address')");
                header("Location:index.php?controller=branch");
                exit;
                break;
        }
    }
}
new controller_add_edit_branch();