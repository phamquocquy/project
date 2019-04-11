<?php
class controller_add_edit_hop_dong_lao_dong extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_hop_dong_lao_dong = $arr[0];
                $id_nv = $arr[1];
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = $id_nv");
                $hop_dong_lao_dong = $this->model->fetch_one("select * from qlns_hopdonglaodong where id = $id_hop_dong_lao_dong");
                $form_action = "index.php?controller=add_edit_hop_dong_lao_dong&act=do_edit&id=$id";
                include "view/hop_dong_lao_dong/view_edit_hop_dong_lao_dong.php";
                break;
            case "do_edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_hop_dong_lao_dong = $arr[0];
                $id_nv = $arr[1];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $hinh_thuc = $_POST['hinh_thuc'];
                $noi_dung = $_POST['noi_dung'];
                $ghi_chu = $_POST['ghi_chu'];
                $this->model->execute("update qlns_hopdonglaodong set ngay_bat_dau='$ngay_bat_dau',ngay_ket_thuc='$ngay_ket_thuc',hinh_thuc='$hinh_thuc',noi_dung='$noi_dung',ghi_chu='$ghi_chu' where id = $id_hop_dong_lao_dong");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id_nv");
                exit;
                break;
            case "add":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = '$id'");
                $form_action = "index.php?controller=add_edit_hop_dong_lao_dong&act=do_add&id=$id";
                include "view/hop_dong_lao_dong/view_add_hop_dong_lao_dong.php";
                break;
            case "do_add":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $ma_nv = $_POST['ma_nv'];
                $ma_hop_dong = $_POST['ma_hop_dong'];
                $ngay_bat_dau = $_POST['ngay_bat_dau'];
                $ngay_ket_thuc = $_POST['ngay_ket_thuc'];
                $hinh_thuc = $_POST['hinh_thuc'];
                $noi_dung = $_POST['noi_dung'];
                $ghi_chu = $_POST['ghi_chu'];
                $this->model->execute("insert into qlns_hopdonglaodong(ma_nv,ma_hop_dong,ngay_bat_dau,ngay_ket_thuc,hinh_thuc,noi_dung,ghi_chu) values('$ma_nv','$ma_hop_dong','$ngay_bat_dau','$ngay_ket_thuc','$hinh_thuc','$noi_dung','$ghi_chu')");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id");
                exit;
                break;
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $arr = explode('-',$id);
                $id_hop_dong_lao_dong = $arr[0];
                $id_nv = $arr[1];
                $this->model->execute("delete from qlns_hopdonglaodong where id ='$id_hop_dong_lao_dong'");
                header("Location:index.php?controller=add_edit_nhan_vien&act=chitiet&id=$id_nv");
                break;
        }
    }
}
new controller_add_edit_hop_dong_lao_dong();