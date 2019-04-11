<?php
class controller_login extends controller {
    public function __construct()
    {
        parent::__construct();
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $ctn_email = $_POST["email_nhan_vien"];
            $ctn_password = $_POST["password_nhan_vien"];
            $ctn_password = md5($ctn_password);
            $check = $this->model->fetch_one("SELECT email_nv,password_nv from qlns_nhanvien where email_nv ='$ctn_email' and password_nv ='$ctn_password'");
            if(isset($check['email_nv']) == true){
                if($check["password_nv"] == $ctn_password){
                    $_SESSION['email_nv'] = $ctn_email;
                    header("location:index.php?controller=user");
                }
                else{
                    header('location:index?error=1');
                    exit;
                }
            }
            else{

            }
        }
        include "view/view_login.php";
    }
}
new controller_login();