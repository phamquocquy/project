<?php
class controller_add_edit_nghi_phep extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nghi_phep = $this->model->fetch_one("select * from qlns_nghiphep where id = $id");
                $thoi_gian_bat_dau = explode(' ',$nghi_phep['thoi_gian_bat_dau']);
                $thoi_gian_ket_thuc = explode(' ',$nghi_phep['thoi_gian_ket_thuc']);
                $ngay_bat_dau = $thoi_gian_bat_dau[0];
                $gio_bat_dau = $thoi_gian_bat_dau[1];
                $ngay_ket_thuc = $thoi_gian_ket_thuc[0];
                $gio_ket_thuc = $thoi_gian_ket_thuc[1];
                $form_action = "index.php?controller=add_edit_nghi_phep&act=do_edit&id=$id";
                include "view/nghi_phep/view_edit_nghi_phep.php";
                break;
            case "do_edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $gio_bat_dau = $_POST['gio_bat_dau'];
                $gio_ket_thuc = $_POST['gio_ket_thuc'];
                $thoi_gian_bat_dau = ($ngay_bat_dau. ' ' .$gio_bat_dau);
                $thoi_gian_ket_thuc = ($ngay_ket_thuc. ' ' .$gio_ket_thuc);
                $ly_do = $_POST['ly_do'];
                $this->model->execute("update qlns_nghiphep set thoi_gian_bat_dau='$thoi_gian_bat_dau',thoi_gian_ket_thuc='$thoi_gian_ket_thuc',ly_do='$ly_do' where id=$id");
                header("Location:index.php?controller=nghi_phep");
                exit;
                break;
            case "add":
                $form_action = "index.php?controller=add_edit_nghi_phep&act=do_add";
                include "view/nghi_phep/view_add_nghi_phep.php";
                break;
            case "do_add":
                $email_nv = $_SESSION['email_nv'];
                $ma_nv = $this->model->fetch_one("select ma_nv from qlns_nhanvien where email_nv='$email_nv'");
                $ma_nv = $ma_nv['ma_nv'];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $gio_bat_dau = $_POST['gio_bat_dau'];
                $gio_ket_thuc = $_POST['gio_ket_thuc'];
                $thoi_gian_bat_dau = ($ngay_bat_dau. ' ' .$gio_bat_dau);
                $thoi_gian_ket_thuc = ($ngay_ket_thuc. ' ' .$gio_ket_thuc);
                $ly_do = $_POST['ly_do'];
                $this->model->execute("insert into qlns_nghiphep(ma_nv,thoi_gian_bat_dau,thoi_gian_ket_thuc,ly_do) values('$ma_nv','$thoi_gian_bat_dau','$thoi_gian_ket_thuc','$ly_do')");
                header("Location:index.php?controller=nghi_phep");
                exit;
                break;
        }
    }
}
new controller_add_edit_nghi_phep();