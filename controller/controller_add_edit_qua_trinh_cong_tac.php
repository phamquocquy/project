<?php
class controller_add_edit_qua_trinh_cong_tac extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_qua_trinh_cong_tac = $arr[0];
                $id_nv = $arr[1];
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = $id_nv");
                $qua_trinh_cong_tac = $this->model->fetch_one("select * from qlns_quatrinhcongtac where id = $id_qua_trinh_cong_tac");
                $form_action = "index.php?controller=add_edit_qua_trinh_cong_tac&act=do_edit&id=$id";
                include "view/qua_trinh_cong_tac/view_edit_qua_trinh_cong_tac.php";
                break;
            case "do_edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_qua_trinh_cong_tac = $arr[0];
                $id_nv = $arr[1];
                $don_vi_cong_tac = $_POST['dơn_vi_cong_tac'];
                $dia_chi = $_POST['dia_chi'];
                $bo_phan = $_POST['bo_phan'];
                $chuc_vu = $_POST['chuc_vu'];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $ghi_chu = $_POST['ghi_chu'];
                $this->model->execute("update qlns_quatrinhcongtac set don_vi='$don_vi_cong_tac',dia_chi='$dia_chi',bo_phan='$bo_phan',chuc_vu='$chuc_vu',ngay_bat_dau='$ngay_bat_dau',ngay_ket_thuc='$ngay_ket_thuc',ghi_chu='$ghi_chu' where id = $id_qua_trinh_cong_tac");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id_nv");
                exit;
                break;
            case "add":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = '$id'");
                $form_action = "index.php?controller=add_edit_qua_trinh_cong_tac&act=do_add&id=$id";
                include "view/qua_trinh_cong_tac/view_add_qua_trinh_cong_tac.php";
                break;
            case "do_add":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $ma_nv = $_POST['ma_nv'];
                $don_vi_cong_tac = $_POST['dơn_vi_cong_tac'];
                $dia_chi = $_POST['dia_chi'];
                $bo_phan = $_POST['bo_phan'];
                $chuc_vu = $_POST['chuc_vu'];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $ghi_chu = $_POST['ghi_chu'];
                $this->model->execute("insert into qlns_quatrinhcongtac(ma_nv,don_vi,dia_chi,bo_phan,chuc_vu,ngay_bat_dau,ngay_ket_thuc,ghi_chu) values('$ma_nv','$don_vi_cong_tac','$dia_chi','$bo_phan','$chuc_vu','$ngay_bat_dau','$ngay_ket_thuc','$ghi_chu')");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id");
                exit;
                break;
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_qua_trinh_cong_tac = $arr[0];
                $id_nv = $arr[1];
                $this->model->execute("delete from qlns_quatrinhcongtac where id ='$id_qua_trinh_cong_tac'");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id_nv");
                break;
        }
    }
}
new controller_add_edit_qua_trinh_cong_tac();