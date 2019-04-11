<?php
class controller_lap_bang_luong extends controller{
    public function __construct()
    {
        parent::__construct();
        //list user
        $act = isset($_GET['act']) ? $_GET['act'] : "";
        switch ($act) {
            case 'tinh_luong':
                require "sendmail.php";
                $danh_sach_luongs = $this->model->fetch("SELECT qlns_nhanvien.ma_nv,qlns_nhanvien.ten_nv,qlns_nhanvien.email_nv,qlns_nhanvien.he_so_luong,qlns_nhanvien.muc_luong_co_ban,qlns_nhanvien.phu_cap,qlns_nhanvien.bao_hiem,qlns_nhanvien.thue,DATEDIFF(qlns_chamcong.ngay_lay_cong_hien_tai,qlns_chamcong.ngay_lay_cong_thang_truoc)-8 AS ngay_cong_dinh_muc,qlns_chamcong.ngay_lay_cong_thang_truoc,qlns_chamcong.ngay_lay_cong_hien_tai,qlns_chamcong.so_ngay_di_lam,qlns_chamcong.so_gio_nghi,
                nghiphep.thoi_gian_nghi_phep
                FROM qlns_nhanvien 
                INNER JOIN qlns_chamcong on qlns_nhanvien.ma_nv=qlns_chamcong.ma_nv
                INNER JOIN (SELECT qlns_nghiphep.ma_nv ,SEC_TO_TIME(SUM(TIME_TO_SEC(TIMEDIFF(qlns_nghiphep.thoi_gian_ket_thuc,qlns_nghiphep.thoi_gian_bat_dau)))) as thoi_gian_nghi_phep FROM qlns_nghiphep WHERE status=1 GROUP BY ma_nv) as nghiphep on qlns_nhanvien.ma_nv=nghiphep.ma_nv WHERE qlns_chamcong.status=0");
                foreach ($danh_sach_luongs as $danh_sach_luong){
                    $ma_nv = $danh_sach_luong['ma_nv'];
                    $ten_nv = $danh_sach_luong['ten_nv'];
                    $email_nv = $danh_sach_luong['email_nv'];
                    $he_so_luong = $danh_sach_luong['he_so_luong'];
                    $muc_luong_co_ban = $danh_sach_luong['muc_luong_co_ban'];
                    $phu_cap = $danh_sach_luong['phu_cap'];
                    $bao_hiem = $danh_sach_luong['bao_hiem'];
                    $thue = $danh_sach_luong['thue'];
                    $ngay_cong_dinh_muc = $danh_sach_luong['ngay_cong_dinh_muc'];
                    $ngay_lay_cong_thang_truoc = $danh_sach_luong['ngay_lay_cong_thang_truoc'];
                    $ngay_lay_cong_hien_tai = $danh_sach_luong['ngay_lay_cong_hien_tai'];
                    $so_ngay_di_lam = $danh_sach_luong['so_ngay_di_lam'];
                    $so_gio_nghi = $danh_sach_luong['so_gio_nghi'];
                    $thoi_gian_nghi_phep = explode(':', $danh_sach_luong['thoi_gian_nghi_phep']);
                    $cong_theo_gio = ($danh_sach_luong['he_so_luong'] + $danh_sach_luong['muc_luong_co_ban'] + $danh_sach_luong['phu_cap'])/($danh_sach_luong['ngay_cong_dinh_muc']*8);
                    if($thoi_gian_nghi_phep[0] <= 8){
                        $luong_thuc_linh = ($cong_theo_gio * ($danh_sach_luong['ngay_cong_dinh_muc']*8 - $thoi_gian_nghi_phep[0])) + ($cong_theo_gio * $thoi_gian_nghi_phep[0]) - $danh_sach_luong['bao_hiem'] - $danh_sach_luong['thue'];
                    }
                    else{
                        $luong_thuc_linh = $cong_theo_gio * ($danh_sach_luong['ngay_cong_dinh_muc']*8 - $thoi_gian_nghi_phep[0]) - $cong_theo_gio * $thoi_gian_nghi_phep[0] - $danh_sach_luong['bao_hiem'] - $danh_sach_luong['thue'];

                    }
                    $this->model->execute("insert into qlns_luong(ma_nv,ten_nv,email_nv,he_so_luong,muc_luong_co_ban,phu_cap,bao_hiem,thue,ngay_cong_dinh_muc,ngay_lay_cong_thang_truoc,ngay_lay_cong_hien_tai,so_ngay_di_lam,so_gio_nghi,thoi_gian_nghi_phep,luong_thuc_linh) values('$ma_nv','$ten_nv','$email_nv','$he_so_luong','$muc_luong_co_ban','$phu_cap','$bao_hiem','$thue','$ngay_cong_dinh_muc','$ngay_lay_cong_thang_truoc','$ngay_lay_cong_hien_tai','$so_ngay_di_lam','$so_gio_nghi','$thoi_gian_nghi_phep','$luong_thuc_linh')");
                    $this->model->execute("update qlns_chamcong set status=1 where ma_nv='$ma_nv'");
                    $this->model->execute("update qlns_nghiphep set status=2 where ma_nv='$ma_nv'");
                    $body_luong ="<table width=\"100%\">
    <tbody><tr>
        <td align=\"center\">
            <table width=\"100%\" style=\"max-width:600px\">
                <tbody><tr>
                    <td class=\"\" valign=\"top\" style=\"padding-left:9px;padding-top:0;padding-bottom:0\">
                        <div style=\"background-color: #1c160d; height: 75px; width: 100%\">
                        <h2 style=\"color: white;font-family: Arial,'Helvetica Neue',Helvetica,sans-serif; text-align: center; line-height: 75px\">Công ty cổ phần Nal Việt Nam</h2>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td align=\"center\">
            <table width=\"100%\" style=\"max-width:600px\">
                <tbody style='color: black'><tr>
                    <td style=\"padding:20px 18px;font-family:Helvetica;font-size:14px;text-align:left;line-height:200%\">
                    <span style='text-align: center'>Bảng lương</span><br>
                    <span style='font-size:14px'><b>Xin chào bạn,</b>
                               </span><br>
                    <span style='font - size:14px'>Mã nhân viên :</span>$ma_nv
                    <br>
                     <span style='font - size:14px'>Tên nhân viên :</span>$ten_nv
                    <br>
                     <span style='font - size:14px'>Hệ số lương :</span>$he_so_luong
                    <br>
                    <span style='font - size:14px'>Mức lương cơ bản :</span>$muc_luong_co_ban
                    <br>
                     <span style='font - size:14px'>Phụ cấp :</span>$phu_cap
                    <br>
                    <span style='font - size:14px'>Bảo hiểm:</span>$bao_hiem
                    <br>
                     <span style='font - size:14px'>Thuế :</span>$thue
                    <br>
                     <span style='font - size:14px'>Ngày công định mức :</span>$ngay_cong_dinh_muc
                    <br>
                    <span style='font - size:14px'>Số ngày đi làm :</span>$so_ngay_di_lam
                    <br>
                     <span style='font - size:14px'>Số giờ nghỉ :</span>$so_gio_nghi
                    <br>
                     <span style='font - size:14px'>Ngày lấy công tháng trước :</span>$ngay_lay_cong_thang_truoc
                    <br>
                     <span style='font - size:14px'>Ngày lấy công hiện tại :</span>$ngay_lay_cong_hien_tai
                    <br>
                     <span style='font - size:14px'>Thời gian nghỉ phép :</span>$thoi_gian_nghi_phep[0]
                    <br>
                     <span style='font - size:14px'>Lương thực lĩnh :</span>$luong_thuc_linh
                    <br>
                    <span style=\"font-size:12px;\">Trân trọng,<br>Bộ phận nhân sự<br></span>
                    </td>
                </tr>
                </tbody></table>
        </td>
    </tr>
    <tr>
        <td style=\"background-color:#fafafa;padding:18px 0px\">
        <table align=\"center\" width=\"100%\">
            <tbody><tr>
                <td align=\"center\" style=\"padding:9px 0px\">
                <table style=\"display:inline\">
                    <tbody><tr>
                        <td>
                            <table align=\"left\">
                                <tbody><tr>
                                    <td align=\"center\" style=\"padding-right:10px;padding-bottom:9px\">
                                        <a href=\"https://www.facebook.com/vimomo/\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.facebook.com/vimomo/&amp;source=gmail&amp;ust=1552982573100000&amp;usg=AFQjCNFTzOb4RiuqY6oFPNNruragQvt88A\"><img src=\"https://ci5.googleusercontent.com/proxy/KLWDyxU_2JT5nOGTE6_NSp-hT37kpCU8B8HLih6GyBnhKJEvCDQsIeq4uLfJ7CQWsSCfpfcbCXVh74IrAuFYiXcU4R2sPN1CInMYwE7DpPIiYM9dGmBbl7FrtmeFZ6I=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/color-facebook-48.png\" height=\"24\" width=\"24\" class=\"CToWUd\"></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
                <table style=\"display:inline\">
                    <tbody><tr>
                        <td>
                            <table align=\"left\">
                                <tbody><tr>
                                    <td align=\"center\" style=\"padding-right:10px;padding-bottom:9px\">
                                        <a href=\"https://momo.vn/\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://momo.vn/&amp;source=gmail&amp;ust=1552982573100000&amp;usg=AFQjCNES1wzY2xdB8AvuzhjpPfXGq2RNEQ\"><img src=\"https://ci5.googleusercontent.com/proxy/FR4I0VM10pxcUwbQ63iIF6cAOqyzEbM1yC4ru84XQ1cT1RbvvmtJzUt4RdH1WUB452ecisGFRwh877ppJp5BhUmQhUWIABs5JUY80JFlBF08huivKdmS6R-dPg=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/color-link-48.png\" height=\"24\" width=\"24\" class=\"CToWUd\"></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
                <table style=\"display:inline\">
                    <tbody><tr>
                        <td>
                            <table align=\"left\">
                                <tbody><tr>
                                    <td align=\"center\" style=\"padding-right:10px;padding-bottom:9px\">
                                        <a href=\"mailto:hotro@momo.vn\" target=\"_blank\"><img src=\"https://ci4.googleusercontent.com/proxy/CN2TGY41iQ8-JlJusCJqa9ZgFzIbwDfrZalQQwICUriegku1Wn699FFjD8P16f7TcJfMjs2079iiaNHlTMEB_ycokWszqlIE6C2ARHGgBzltagK-BZ2ZBFztsd76V5Eq0fLlG4R8=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/color-forwardtofriend-48.png\" height=\"24\" width=\"24\" class=\"CToWUd\"></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>
                <table style=\"display:inline\">
                    <tbody><tr>
                        <td>
                            <table align=\"left\">
                                <tbody><tr>
                                    <td align=\"center\" style=\"padding-right:10px;padding-bottom:9px\">
                                        <a href=\"https://www.youtube.com/channel/UCKHHW-qL2JoZqcSNm1jPlqw\" target=\"_blank\" data-saferedirecturl=\"https://www.google.com/url?q=https://www.youtube.com/channel/UCKHHW-qL2JoZqcSNm1jPlqw&amp;source=gmail&amp;ust=1552982573100000&amp;usg=AFQjCNHGz_iAnJ1dNNoaKErjsNi7ztrwhw\"><img src=\"https://ci3.googleusercontent.com/proxy/UZmsqbR0YicV2Dut8L3zgzEo4jupJEoo_M2eyGVoTUqJ8TC_2hipkr2l-JV-uTKoVQAGjTEuVd_3mFGuOKWqoj2ji0OjjHB1ShyYPzqUidP9s75s194CW40mMOmhPw=s0-d-e1-ft#https://cdn-images.mailchimp.com/icons/social-block-v2/color-youtube-48.png\" height=\"24\" width=\"24\" class=\"CToWUd\"></a>
                                    </td>
                                </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    </tbody></table>

                </td>
            </tr>
            <tr>
                <td style=\"padding:0px 18px 9px 18px;color:#8f8e94;font-family:Helvetica;font-size:10px;text-align:center;text-decoration:none;line-height:150%;max-width:600px\">
                <span>Email này được gửi từ công ty cổ phần NAL Việt Nam <strong>0941884530 </strong><br>Tầng 3 - số 84 Duy Tân - Cầu Giấy - Hà Nội - Việt Nam</span>
                </td>
            </tr>
            </tbody></table>
        </td>
    </tr>
    </tbody>
</table>";
                    sendmail($body_luong,$email_nv);
                }
                header("location:index.php?controller=lap_bang_luong");
                break;
        }
        $danh_sach_luongs = $this->model->fetch("SELECT qlns_nhanvien.ma_nv,qlns_nhanvien.ten_nv,qlns_nhanvien.email_nv,qlns_nhanvien.he_so_luong,qlns_nhanvien.muc_luong_co_ban,qlns_nhanvien.phu_cap,qlns_nhanvien.bao_hiem,qlns_nhanvien.thue,DATEDIFF(qlns_chamcong.ngay_lay_cong_hien_tai,qlns_chamcong.ngay_lay_cong_thang_truoc)-8 AS ngay_cong_dinh_muc,qlns_chamcong.ngay_lay_cong_thang_truoc,qlns_chamcong.ngay_lay_cong_hien_tai,qlns_chamcong.so_ngay_di_lam,qlns_chamcong.so_gio_nghi,
        nghiphep.thoi_gian_nghi_phep
        FROM qlns_nhanvien 
        INNER JOIN qlns_chamcong on qlns_nhanvien.ma_nv=qlns_chamcong.ma_nv
        INNER JOIN (SELECT qlns_nghiphep.ma_nv ,SEC_TO_TIME(SUM(TIME_TO_SEC(TIMEDIFF(qlns_nghiphep.thoi_gian_ket_thuc,qlns_nghiphep.thoi_gian_bat_dau)))) as thoi_gian_nghi_phep FROM qlns_nghiphep WHERE status=1 GROUP BY ma_nv) as nghiphep on qlns_nhanvien.ma_nv=nghiphep.ma_nv WHERE qlns_chamcong.status=0");
        //tong so ban ghi
        $total_record = $this->model->num_row("select * from qlns_luong");
        //so ban ghi moi trang
        $record_per_page = 5;
        //tinh so trang = tong so ban ghi / so ban ghi moi trang
        $num_page = ceil($total_record/$record_per_page);
        //lay bien p tu url
        $p = isset($_GET['p']) && is_numeric($_GET['p']) && $_GET['p'] > 0 ? ($_GET['p']-1) : 0;
        //lay tu ban ghi nao de hien thi
        $from = $p * $record_per_page;
        $luongs = $this->model->fetch("select * from qlns_luong LIMIT $from,$record_per_page");
        include "view/luong/view_danh_sach_bang_luong.php";
    }
}
new controller_lap_bang_luong();