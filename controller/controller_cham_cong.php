<?php
class controller_cham_cong extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'delete':
                $id = isset($_GET['id']) ? $_GET['id'] : 0;
                $this->model->execute("delete from qlns_chinhanh where id = $id");
                header("location:index.php?controller=branch");
                break;
            case 'importfilecsv':
                $message = '';
                if(isset($_POST['import'])){
                    if($_FILES["file"]["name"]){
                        $fileName = explode('.',$_FILES["file"]["name"]);
                        if(end($fileName) == "csv"){
                            $handle = fopen($_FILES["file"]["tmp_name"], "r");
                            $row = 1;
                            while ($column = fgetcsv($handle,1000,",")) {
                                if($row == 1){ $row++; continue; }
                                $this->model->execute("insert into qlns_chamcong(ma_nv,ngay_lay_cong_thang_truoc,ngay_lay_cong_hien_tai,so_ngay_di_lam,so_gio_nghi) values ('".$column[0]."','".$column[1]."','".$column[2]."','".$column[3]."','".$column[4]."')");
                            }
                        }
                        else{
                            $message = "<lable class='text-danger'>Please select file .csv</lable>";
                        }
                    }
                    else{
                        $message = "<lable class='text-danger'>Please select file .csv</lable>";
                    }

                }
                header("location:index.php?controller=cham_cong");
                break;
        }
        //tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_chamcong");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $cham_congs = $this->model->fetch("select * from qlns_chamcong order by id desc limit $from,$record_per_page");
        include "view/cham_cong/view_danh_sach_cham_cong.php";
    }
}
new controller_cham_cong();