<?php
class controller_add_edit_danh_gia extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_danh_gia = $arr[0];
                $id_nv = $arr[1];
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = $id_nv");
                $danh_gia = $this->model->fetch_one("select * from qlns_danhgianv where id = '$id_danh_gia'");
                $form_action = "index.php?controller=add_edit_danh_gia&act=do_edit&id=$id";
                include "view/danh_gia/view_edit_danh_gia.php";
                break;
            case "do_edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_danh_gia = $arr[0];
                $id_nv = $arr[1];
                $ky_danh_gia = $_POST['ky_danh_gia'];
                $xep_loai = $_POST['xep_loai'];
                $nhan_xet = $_POST['nhan_xet'];
                $ngay_danh_gia = $_POST['ngay_danh_gia'];
                $this->model->execute("update qlns_danhgianv set ky_danh_gia='$ky_danh_gia',xep_loai='$xep_loai',nhan_xet='$nhan_xet',ngay_danh_gia='$ngay_danh_gia' where id = $id_danh_gia");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id_nv");
                exit;
                break;
            case "add":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = $id");
                $form_action = "index.php?controller=add_edit_danh_gia&act=do_add&id=$id";
                include "view/danh_gia/view_add_danh_gia.php";
                break;
            case "do_add":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $ma_nv = $_POST['ma_nv'];
                $ky_danh_gia = $_POST['ky_danh_gia'];
                $xep_loai = $_POST['xep_loai'];
                $nhan_xet = $_POST['nhan_xet'];
                $ngay_danh_gia = $_POST['ngay_danh_gia'];
                $this->model->execute("insert into qlns_danhgianv(ma_nv,ky_danh_gia,xep_loai,nhan_xet,ngay_danh_gia) values('$ma_nv','$ky_danh_gia','$xep_loai','$nhan_xet','$ngay_danh_gia')");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id");
                exit;
                break;
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_danh_gia = $arr[0];
                $id_nv = $arr[1];
                $this->model->execute("delete from qlns_danhgianv where id ='$id_danh_gia'");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id_nv");
                break;
        }
    }
}
new controller_add_edit_danh_gia();