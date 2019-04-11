<section class="content-header">
    <h1>
        General Form Elements
        <small>Preview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary col-md-6">
                <div class="box-header with-border">
                    <h3 class="box-title">Thêm ứng viên mới</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST" id="form_add_nhan_vien">
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="ma_chi_nhanh">Mã chi nhánh</label>
                                <select class="form-control ma_chi_nhanh" name="ma_chi_nhanh">
                                    <option>Tên chi nhánh</option>
                                    <?php foreach ($data_branch as $item){ ?>
                                        <option value="<?php echo $item['code']?>"><?php echo $item['name_branch']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ma_chi_nhanh">Mã bộ phận</label>
                                <select class="form-control ma_bo_phan" name="ma_bo_phan">
                                    <option>Tên bộ phân</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ma_nv">Mã nhân viên</label>
                                <input type="text" class="form-control" id="ma_nv" placeholder="Enter mã nhân viên" name="ma_nv" value="">
                                <span class="text-danger ma_nv"></span>
                            </div>
                            <div class="form-group">
                                <label for="ten_nv">Tên nhân viên</label>
                                <input type="text" class="form-control" id="ten_nv" placeholder="Enter tên nhân viên" name="ten_nv" value="">
                                <span class="text-danger ten_nv"></span>
                            </div>
                            <div class="form-group">
                                <label for="email_nv">Email nhân viên</label>
                                <input type="email" class="form-control" id="email_nv" placeholder="Enter email nhân viên" name="email_nv" value="">
                                <span class="text-danger email_nv"></span>
                            </div>
                            <div class="form-group">
                                <label for="password_nv">Password nhân viên</label>
                                <input type="password" class="form-control" id="password_nv" placeholder="Enter password nhân viên" name="password_nv" value="">
                                <span class="text-danger password_nv"></span>
                            </div>
                            <div class="form-group">
                                <label for="chuc_vu">Chức vự nhân viên</label>
                                <input type="text" class="form-control" id="chuc_vu" placeholder="Enter chức vụ nhân viên" name="chuc_vu" value="">
                                <span class="text-danger chuc_vu"></span>
                            </div>
                            <div class="form-group">
                                <label for="so_dien_thoai">Số điện thoại nhân viên</label>
                                <input type="text" class="form-control" id="so_dien_thoai" placeholder="Enter số điện thoại nhân viên" name="so_dien_thoai" value="">
                                <span class="text-danger so_dien_thoai"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label for="he_so_luong">Hệ số lương</label>
                            <input type="text" class="form-control" id="he_so_luong" placeholder="Enter hệ số lương" name="he_so_luong" value="">
                            <span class="text-danger he_so_luong"></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="muc_luong_co_ban">Mức lương cơ bản</label>
                            <input type="text" class="form-control" id="muc_luong_co_ban" placeholder="Enter mức lương cơ bản" name="muc_luong_co_ban" value="">
                            <span class="text-danger muc_luong_co_ban"></span>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label>Ngày sinh nhân viên</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_sinh" name="ngay_sinh" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-4">
                            <label for="gioi_tinh">Giới tính nhân viên</label>
                            <select class="form-control gioi_tinh" name="gioi_tinh">
                                <option value="0">Nam</option>
                                <option value="1">Nữ</option>
                            </select>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="tam_tru">Địa chỉ nơi ở hiện nay</label>
                                <input type="text" class="form-control" id="tam_tru" placeholder="Enter địa chỉ nơi ở hiện nay" name="tam_tru" value="">
                                <span class="text-danger tam_tru"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label for="cmnd">Chứng minh nhân dân</label>
                            <input type="text" class="form-control" id="cmnd" placeholder="Enter số chứng minh nhân dân" name="cmnd" value="">
                            <span class="text-danger cmnd"></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Ngày cấp</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_cap_cmnd" name="ngay_cap_cmnd" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="noi_cap_cmnd">Nơi cấp chứng minh nhân dân</label>
                                <input type="text" class="form-control" id="noi_cap_cmnd" placeholder="Enter nơi cấp chứng minh nhân dân" name="noi_cap_cmnd" value="">
                                <span class="text-danger noi_cap_cmnd"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="noi_sinh">Nơi sinh</label>
                                <input type="text" class="form-control" id="noi_sinh" placeholder="Enter nơi sinh của nhân viên" name="noi_sinh" value="">
                                <span class="text-danger noi_sinh"></span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label for="dan_toc">Dân tộc</label>
                            <input type="text" class="form-control" id="dan_toc" placeholder="Enter dân tộc" name="dan_toc" value="">
                            <span class="text-danger dan_toc"></span>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ton_giao">Tôn giáo</label>
                            <input type="text" class="form-control" id="ton_giao" placeholder="Enter tôn giáo" name="ton_giao" value="">
                            <span class="text-danger ton_giao"></span>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer col-md-12">
                        <div class="col-md-4 col-md-offset-2">
                            <button type="submit" name="contact_action" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <script>
        $( function() {
            $( "#ngay_sinh,#ngay_cap_cmnd" ).datepicker({ format: 'yyyy-mm-dd'}).datepicker("setDate",'now');;
        } );
    </script>
    <script>
        $(document).ready(function () {
            $( ".ma_chi_nhanh" ).change(function() {
                var ma_chi_nhanh = $(".ma_chi_nhanh").val();
                $.get(
                    "ajax.php",
                    {
                        ma_chi_nhanh : ma_chi_nhanh
                    },
                    function (data) {
                        $(".ma_bo_phan").html(data);
                    }
                )
            });
        })
    </script>
    <script>
        $(document).ready(function () {
            $( "#form_add_nhan_vien" ).submit(function( event ) {
                var ma_nv = $("#ma_nv").val();
                var ten_nv = $("#ten_nv").val();
                var password_nv = $("#password_nv").val();
                var chuc_vu = $("#chuc_vu").val();
                var so_dien_thoai = $("#so_dien_thoai").val();
                var he_so_luong = $("#he_so_luong").val();
                var muc_luong_co_ban = $("#muc_luong_co_ban").val();
                var tam_tru = $("#tam_tru").val();
                var cmnd = $("#cmnd").val();
                var noi_cap_cmnd = $("#noi_cap_cmnd").val();
                var noi_sinh = $("#noi_sinh").val();
                var dan_toc = $("#dan_toc").val();
                var ton_giao = $("#ton_giao").val();
                var email_nv = $("#email_nv").val();
                if(ma_nv == ''){
                    $("span.ma_nv").html('Bạn chưa nhập mã nhân viên');
                    event.preventDefault();
                }
                if(ten_nv == ''){
                    $("span.ten_nv").html('Bạn chưa nhập tên nhân viên');
                    event.preventDefault();
                }
                if(email_nv == ''){
                    $("span.email_nv").html('Bạn chưa nhập tên nhân viên');
                    event.preventDefault();
                }
                if(password_nv == ''){
                    $("span.password_nv").html('Bạn chưa nhập password');
                    event.preventDefault();
                }
                if(chuc_vu == ''){
                    $("span.chuc_vu").html('Bạn chưa nhập chức vụ nhân viên');
                    event.preventDefault();
                }
                if(so_dien_thoai == ''){
                    $("span.so_dien_thoai").html('Bạn chưa nhập số điện thoại nhân viên');
                    event.preventDefault();
                }
                if(he_so_luong == ''){
                    $("span.he_so_luong").html('Bạn chưa nhập hệ số lương');
                    event.preventDefault();
                }
                if(muc_luong_co_ban == ''){
                    $("span.muc_luong_co_ban").html('Bạn chưa nhập mức lương cơ bản');
                    event.preventDefault();
                }
                if(tam_tru == ''){
                    $("span.tam_tru").html('Bạn chưa nhập tạm trú');
                    event.preventDefault();
                }
                if(cmnd == ''){
                    $("span.cmnd").html('Bạn chưa nhập số chứng minh nhân dân');
                    event.preventDefault();
                }
                if(noi_cap_cmnd == ''){
                    $("span.noi_cap_cmnd").html('Bạn chưa nhập nơi cấp chứng mình nhân dân');
                    event.preventDefault();
                }
                if(noi_sinh == ''){
                    $("span.noi_sinh").html('Bạn chưa nhập nơi sinh nhân viên');
                    event.preventDefault();
                }
                if(dan_toc == ''){
                    $("span.dan_toc").html('Bạn chưa dân tộc');
                    event.preventDefault();
                }
                if(ton_giao == ''){
                    $("span.ton_giao").html('Bạn chưa tôn giáo');
                    event.preventDefault();
                }
                return true;
            });
        })
    </script>
    <!-- /.row -->
</section>