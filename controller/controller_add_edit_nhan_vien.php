<?php
class controller_add_edit_nhan_vien extends controller{
    public function __construct()
    {
        parent::__construct();
        $act = isset($_GET['act']) ? $_GET['act'] : 0;
        switch ($act){
            case "edit":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = $id");
                $ma_nhan_vien = $nhan_vien['ma_nv'];
                $ho_so = $this->model->fetch_one("select * from qlns_hoso where ma_nv = '$ma_nhan_vien'");
                $form_action = "index.php?controller=add_edit_nhan_vien&act=do_edit&id=$id";
                $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
                $data_bo_phan = $this->model->fetch("SELECT * FROM qlns_bophan");
                include "view/nhanvien/view_edit_nhan_vien.php";
                break;
            case "do_edit":
                $id = isset($_GET['id'])? $_GET['id'] : 0;
                $ma_chi_nhanh = $_POST['ma_chi_nhanh'];
                $ma_bo_ohan = $_POST['ma_bo_phan'];
                $ma_nv = $_POST['ma_nv'];
                $ten_nv = $_POST['ten_nv'];
                $password_nv = $_POST['password_nv'];
                $password_nv = md5($password_nv);
                $chuc_vu = $_POST['chuc_vu'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $he_so_luong = $_POST['he_so_luong'];
                $muc_luong_co_ban = $_POST['muc_luong_co_ban'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $tam_tru = $_POST['tam_tru'];
                $cmnd = $_POST['cmnd'];
                $ngay_cap_cmnd = $_POST['ngay_cap_cmnd'];
                $noi_cap_cmnd = $_POST['noi_cap_cmnd'];
                $noi_sinh = $_POST['noi_sinh'];
                $dan_toc = $_POST['dan_toc'];
                $ton_giao = $_POST['ton_giao'];
                if($password_nv == null){
                    $this->model->execute("update qlns_nhanvien set ma_chi_nhanh='$ma_chi_nhanh',ma_bo_phan='$ma_bo_ohan',ten_nv='$ten_nv',chuc_vu='$chuc_vu',so_dien_thoai='$so_dien_thoai',he_so_luong='$he_so_luong',muc_luong_co_ban='$muc_luong_co_ban' where id=$id");
                }
                else{
                    $this->model->execute("update qlns_nhanvien set ma_chi_nhanh='$ma_chi_nhanh',ma_bo_phan='$ma_bo_ohan',ten_nv='$ten_nv',password_nv='$password_nv',chuc_vu='$chuc_vu',so_dien_thoai='$so_dien_thoai',he_so_luong='$he_so_luong',muc_luong_co_ban='$muc_luong_co_ban' where id=$id");
                }
                $this->model->execute("update qlns_hoso set ngay_sinh='$ngay_sinh',gioi_tinh='$gioi_tinh',tam_tru='$tam_tru',cmnd='$cmnd',ngay_cap='$ngay_cap_cmnd',noi_cap='$noi_cap_cmnd',noi_sinh='$noi_sinh',dan_toc='$dan_toc',ton_giao='$ton_giao' where ma_nv='$ma_nv'");
                header("Location:index.php?controller=nhan_vien");
                exit;
                break;
            case "chitiet":
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $nhan_vien = $this->model->fetch_one("select * from qlns_nhanvien where id = $id");
                $ma_nhan_vien = $nhan_vien['ma_nv'];
                $ho_so = $this->model->fetch_one("select * from qlns_hoso where ma_nv = '$ma_nhan_vien'");
                $form_action = "index.php?controller=add_edit_nhan_vien&act=do_edit&id=$id";
                $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
                $data_bo_phan = $this->model->fetch("SELECT * FROM qlns_bophan");
                $data_qua_trinh_cong_tac = $this->model->fetch("select * from qlns_quatrinhcongtac where ma_nv= '$ma_nhan_vien'");
                $hop_dong_lao_dong = $this->model->fetch("select * from qlns_hopdonglaodong where ma_nv= '$ma_nhan_vien'");
                $đanh_gia_nhan_vien = $this->model->fetch("select * from qlns_danhgianv where ma_nv = '$ma_nhan_vien'");
                include "view/nhanvien/view_chi_tiet_nhan_vien.php";
                break;
            case "add":
                $form_action = "index.php?controller=add_edit_nhan_vien&act=do_add";
                $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
                include "view/nhanvien/view_add_nhan_vien.php";
                break;
            case "do_add":
                $ma_chi_nhanh = $_POST['ma_chi_nhanh'];
                $ma_bo_ohan = $_POST['ma_bo_phan'];
                $ma_nv = $_POST['ma_nv'];
                $ten_nv = $_POST['ten_nv'];
                $email_nv = $_POST['email_nv'];
                $password_nv = $_POST['password_nv'];
                $password_nv = md5($password_nv);
                $chuc_vu = $_POST['chuc_vu'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $he_so_luong = $_POST['he_so_luong'];
                $muc_luong_co_ban = $_POST['muc_luong_co_ban'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $tam_tru = $_POST['tam_tru'];
                $cmnd = $_POST['cmnd'];
                $ngay_cap_cmnd = $_POST['ngay_cap_cmnd'];
                $noi_cap_cmnd = $_POST['noi_cap_cmnd'];
                $noi_sinh = $_POST['noi_sinh'];
                $dan_toc = $_POST['dan_toc'];
                $ton_giao = $_POST['ton_giao'];
                $this->model->execute("insert into qlns_nhanvien(ma_chi_nhanh,ma_bo_phan,ma_nv,ten_nv,email_nv,password_nv,chuc_vu,so_dien_thoai,he_so_luong,muc_luong_co_ban) values('$ma_chi_nhanh','$ma_bo_ohan','$ma_nv','$ten_nv','$email_nv','$password_nv','$chuc_vu','$so_dien_thoai','$he_so_luong',$muc_luong_co_ban)");
                $this->model->execute("insert into qlns_hoso(ma_nv,ngay_sinh,gioi_tinh,tam_tru,cmnd,ngay_cap,noi_cap,noi_sinh,dan_toc,ton_giao) values('$ma_nv','$ngay_sinh','$gioi_tinh','$tam_tru','$cmnd','$ngay_cap_cmnd','$noi_cap_cmnd','$noi_sinh','$dan_toc','$ton_giao')");
                $_SESSION['add_nhan_vien'] = true;
                header("Location:index.php?controller=nhan_vien");
                exit;
                break;
        }
    }
}
new controller_add_edit_nhan_vien();