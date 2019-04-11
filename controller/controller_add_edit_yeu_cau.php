<?php
class controller_add_edit_yeu_cau extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = $this->model->fetch_one("select * from qlns_yeucautuyendung where id = $id");
                $form_action = "index.php?controller=add_edit_yeu_cau&act=do_edit&id=$id";
                include "view/yeu_cau_tuyen_dung/view_edit_yeu_cau.php";
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
                $form_action = "index.php?controller=add_edit_yeu_cau&act=do_add";
                $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
                $data_bophan = $this->model->fetch("SELECT * FROM qlns_bophan");
                $data_nhanvien = $this->model->fetch(" SELECT * FROM qlns_nhanvien");
                include "view/yeu_cau_tuyen_dung/view_form_yeu_cau.php";
                break;
            case "do_add":
                $ma_chi_nhanh = $_POST['ma_chi_nhanh'];
                $ma_bo_phan = $_POST['ma_bo_phan'];
                $ma_nhan_vien = $_POST['ma_nhan_vien'];
                $ly_do = $_POST['ly_do'];
                $so_luong = $_POST['so_luong'];
                $chuyen_mon = $_POST['chuyen_mon'];
                $ngay_thuc_hien = $_POST['ngay_thuc_hien'];
                $ngay_can = $_POST['ngay_can'];
                $ghi_chu = $_POST['ghi_chu'];
                $this->model->execute("insert into qlns_yeucautuyendung(ma_chi_nhanh,ma_bo_phan,ma_nv,ly_do,so_luong,chuyen_mon,ngay_thuc_hien,ngay_can_nhan_vien,ghi_chu) values('$ma_chi_nhanh','$ma_bo_phan','$ma_nhan_vien','$ly_do','$so_luong','$chuyen_mon','$ngay_thuc_hien','$ngay_can','$ghi_chu')");
                header("Location:index.php?controller=yeu_cau");
                exit;
                break;
        }
    }
}
new controller_add_edit_yeu_cau();