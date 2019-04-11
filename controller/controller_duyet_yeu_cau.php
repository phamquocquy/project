<?php
class controller_duyet_yeu_cau extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'khong':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $email_admin = $_SESSION['ctn_email'];
                $this->model->execute("update qlns_yeucautuyendung set status=2,email_admin='$email_admin' where id = $id");
                header("location:index.php?controller=duyet_yeu_cau");
                break;
            case 'co':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $email_admin = $_SESSION['ctn_email'];
                $this->model->execute("update qlns_yeucautuyendung set status=1,email_admin='$email_admin' where id = $id");
                header("location:index.php?controller=duyet_yeu_cau");
                break;
            case 'khong_duyet_huy':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $email_admin = $_SESSION['ctn_email'];
                $this->model->execute("update qlns_yeucautuyendung set status=1,email_admin='$email_admin' where id = $id");
                header("location:index.php?controller=duyet_yeu_cau");
                break;
            case 'co_duyet_huy':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $email_admin = $_SESSION['ctn_email'];
                $this->model->execute("update qlns_yeucautuyendung set status=4,email_admin='$email_admin' where id = $id");
                header("location:index.php?controller=duyet_yeu_cau");
                break;
            case 'huy_duyet':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $email_admin = $_SESSION['ctn_email'];
                $this->model->execute("update qlns_yeucautuyendung set status=0,email_admin='$email_admin' where id = $id");
                header("location:index.php?controller=duyet_yeu_cau");
                break;
        }
//        tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_yeucautuyendung where status in (0,3)");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $arr = $this->model->fetch("select * from qlns_yeucautuyendung where status in (0,3)order by id desc limit $from,$record_per_page");
        $arr_status_1 = $this->model->fetch("select * from qlns_yeucautuyendung where status =1 order by id desc");
        $arr_status_2 = $this->model->fetch("select * from qlns_yeucautuyendung where status in (2,3,4) order by id desc");
        $data_branch = $this->model->fetch("SELECT * FROM qlns_chinhanh");
        $data_bophan = $this->model->fetch("SELECT * FROM qlns_bophan");
        $data_nhanvien = $this->model->fetch(" SELECT * FROM qlns_nhanvien");
        include "view/yeu_cau_tuyen_dung/view_list_yeu_cau_admin.php";
    }
}
new controller_duyet_yeu_cau();