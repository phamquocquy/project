<?php
class controller_add_edit_ung_vien extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = $this->model->fetch_one("select * from qlns_yeucautuyendung where id = $id");
                $form_action = "index.php?controller=add_edit_yeu_cau&act=do_edit&id=$id";
                include "view/ung_vien/view_edit_ung_vien.php";
                break;
            case "do_edit":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $ly_do = $_POST['ly_do'];
                $so_luong = $_POST['so_luong'];
                $chuyen_mon = $_POST['chuyen_mon'];
                $ngay_thuc_hien = $_POST['ngay_thuc_hien'];
                $ngay_can = $_POST['ngay_can'];
                $ghi_chu = $_POST['ghi_chu'];
                $this->model->execute("UPDATE qlns_yeucautuyendung set ly_do='$ly_do',so_luong='$so_luong',chuyen_mon='$chuyen_mon',ngay_thuc_hien='$ngay_thuc_hien',ngay_can_nhan_vien='$ngay_can',ghi_chu='$ghi_chu' WHERE id =$id");
                header("Location:index.php?controller=yeu_cau");
                exit;
                break;
            case "add":
                $form_action = "index.php?controller=add_edit_ung_vien&act=do_add";
                include "view/ung_vien/view_add_ung_vien.php";
                break;
            case "do_add":
                $email_ung_vien = $_POST['email_ung_vien'];
                $ten_ung_vien = $_POST['ten_ung_vien'];
                $chuyen_mon = $_POST['chuyen_mon'];
                $kinh_nghiem = $_POST['kinh_nghiem'];
                $hoc_van = $_POST['hoc_van'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $this->model->execute("insert into qlns_ungvien(email_ung_vien,ten_ung_vien,chuyen_mon,kinh_nghiem,hoc_van,so_dien_thoai,status) values('$email_ung_vien','$ten_ung_vien','$chuyen_mon','$kinh_nghiem','$hoc_van','$so_dien_thoai','0')");
                header("Location:index.php?controller=ung_vien");
                exit;
                break;
            case "chitiet":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = $this->model->fetch_one("select * from qlns_ungvien where id = $id and status=1");
                $form_action = "index.php?controller=add_edit_ung_vien&act=do_chitiet&id=$id";
                $data_nhanvien = $this->model->fetch(" SELECT * FROM qlns_nhanvien");
                include "view/ung_vien/view_chi_tiet_ung_vien.php";
                break;
            case "do_chitiet":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $email_uv = $_POST['email_ung_vien'];
                $manv = $_POST['ma_nhan_vien'];
                $thoi_gian = $_POST['ngay_phong_van'];
                $email_nv = $this->model->fetch_one("select email_nv from qlns_nhanvien where ma_nv = '$manv'")['email_nv'];
                $this->model->execute("update qlns_ungvien set nguoi_phong_van='$email_nv',status_gui_mail='1' where id=$id");
                $arrmail = array(
                    '0' => $email_uv,
                    '1' => $email_nv,
                );
                require "sendmail.php";
                sendmail($body_email_hen_phong_van,$arrmail);
                header("Location:index.php?controller=ung_vien");
                break;
        }
    }
}
new controller_add_edit_ung_vien();