<?php
class controller_add_edit_user extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = $this->model->fetch_one("select * from qlns_administrator where ctn_id = $id");
                $form_action = "index.php?controller=add_edit_user&act=do_edit&id=$id";
                include "view/view_add_edit_user.php";
                break;
            case "do_edit":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $username = $_POST['username'];
                $password = $_POST['password'];
//                $confirm_password = $_POST['confirm_password'];
                $phone = $_POST['phone'];
                $content = $_POST['content'];
                $level = $_POST['level'];
                $this->model->execute("UPDATE qlns_administrator set ctn_username='$username',ctn_phone='$phone',ctn_content='$content',ctn_level=$level WHERE ctn_id =$id");
                if($password != ""){
                    $password = md5($password);
                    $this->model->execute("update qlns_administrator set ctn_password='$password' where ctn_id=$id");
                }
                header("Location:index.php?controller=user");
                exit;
                break;
            case "add":
                $form_action = "index.php?controller=add_edit_user&act=do_add";
                include "view/view_add_user.php";
                break;
            case "do_add":
                $username = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
//                $confirm_password = $_POST['confirm_password'];
                $phone = $_POST['phone'];
                $content = $_POST['content'];
                $level = $_POST['level'];
                $this->model->execute("insert into qlns_administrator(ctn_username,ctn_password,ctn_email,ctn_phone,ctn_content,ctn_level) values('$username','$password','$email','$phone','$content',$level)");
                header("Location:index.php?controller=user");
                exit;
                break;
        }
    }
}
new controller_add_edit_user();