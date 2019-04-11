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
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="ma_chi_nhanh">Mã chi nhánh</label>
                                <select class="form-control ma_chi_nhanh" name="ma_chi_nhanh">
                                    <?php foreach ($data_branch as $item){ ?>
                                        <option value="<?php echo $item['code']?>" <?php if($item['code'] == $nhan_vien['ma_chi_nhanh']) echo "selected"?>><?php echo $item['name_branch']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ma_chi_nhanh">Mã bộ phận</label>
                                <select class="form-control ma_bo_phan" name="ma_bo_phan">
                                    <?php foreach ($data_bo_phan as $item){ ?>
                                        <option value="<?php echo $item['ma_bp']?>" <?php if($item['ma_bp'] == $nhan_vien['ma_bo_phan']) echo "selected"?>><?php echo $item['name_bp']?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ma_nv">Mã nhân viên</label>
                                <input type="text" class="form-control" id="ma_nv" placeholder="Enter mã nhân viên" name="ma_nv" readonly value="<?php echo $nhan_vien['ma_nv']?>">
                            </div>
                            <div class="form-group">
                                <label for="ten_nv">Tên nhân viên</label>
                                <input type="text" class="form-control" id="ten_nv" placeholder="Enter tên nhân viên" name="ten_nv" value="<?php echo $nhan_vien['ten_nv']?>">
                            </div>
                            <div class="form-group">
                                <label for="email_nv">Email nhân viên</label>
                                <input type="email" class="form-control" id="email_nv" placeholder="Enter email nhân viên" name="email_nv" readonly value="<?php echo $nhan_vien['email_nv']?>">
                            </div>
                            <div class="form-group">
                                <label for="password_nv">Password nhân viên</label>
                                <input type="password" class="form-control" id="password_nv" placeholder="Enter password nhân viên" name="password_nv" value="">
                            </div>
                            <div class="form-group">
                                <label for="chuc_vu">Chức vự nhân viên</label>
                                <input type="text" class="form-control" id="chuc_vu" placeholder="Enter chức vụ nhân viên" name="chuc_vu" value="<?php echo $nhan_vien['chuc_vu']?>">
                            </div>
                            <div class="form-group">
                                <label for="so_dien_thoai">Số điện thoại nhân viên</label>
                                <input type="text" class="form-control" id="so_dien_thoai" placeholder="Enter số điện thoại nhân viên" name="so_dien_thoai" value="<?php echo $nhan_vien['so_dien_thoai']?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label for="he_so_luong">Hệ số lương</label>
                            <input type="text" class="form-control" id="he_so_luong" placeholder="Enter hệ số lương" name="he_so_luong" value="<?php echo $nhan_vien['he_so_luong']?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="muc_luong_co_ban">Mức lương cơ bản</label>
                            <input type="text" class="form-control" id="muc_luong_co_ban" placeholder="Enter mức lương cơ bản" name="muc_luong_co_ban" value="<?php echo $nhan_vien['muc_luong_co_ban']?>">
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label>Ngày sinh nhân viên</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_sinh" name="ngay_sinh" value="<?php echo $ho_so['ngay_sinh']?>">
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
                                <input type="text" class="form-control" id="tam_tru" placeholder="Enter địa chỉ nơi ở hiện nay" name="tam_tru" value="<?php echo $ho_so['tam_tru']?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label for="cmnd">Chứng minh nhân dân</label>
                            <input type="text" class="form-control" id="cmnd" placeholder="Enter số chứng minh nhân dân" name="cmnd" value="<?php echo $ho_so['cmnd']?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Ngày cấp</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_cap_cmnd" name="ngay_cap_cmnd" value="<?php echo $ho_so['ngay_cap']?>">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="noi_cap_cmnd">Nơi cấp chứng minh nhân dân</label>
                                <input type="text" class="form-control" id="noi_cap_cmnd" placeholder="Enter nơi cấp chứng minh nhân dân" name="noi_cap_cmnd" value="<?php echo $ho_so['noi_cap']?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="noi_sinh">Nơi sinh</label>
                                <input type="text" class="form-control" id="noi_sinh" placeholder="Enter nơi sinh của nhân viên" name="noi_sinh" value="<?php echo $ho_so['noi_sinh']?>">
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label for="dan_toc">Dân tộc</label>
                            <input type="text" class="form-control" id="dan_toc" placeholder="Enter dân tộc" name="dan_toc" value="<?php echo $ho_so['dan_toc']?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="ton_giao">Tôn giáo</label>
                            <input type="text" class="form-control" id="ton_giao" placeholder="Enter tôn giáo" name="ton_giao" value="<?php echo $ho_so['ton_giao']?>">
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
            $( "#ngay_sinh,#ngay_cap_cmnd" ).datepicker({ format: 'yyyy-mm-dd'});
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
    <!-- /.row -->
</section>
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách quá trình công tác của nhân viên:  <strong><?php echo $nhan_vien['ten_nv']?></strong></h3>
                </div>
                <div class="box-header">
                    <a class="btn btn-primary" href="index.php?controller=add_edit_qua_trinh_cong_tac&act=add&id=<?php echo $nhan_vien['id']?>">Thêm mới quá trình công tác</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Id
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã nhân viên
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Tên nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Mã chi nhánh
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Mã bộ phận
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Chức vụ
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Mã bộ phận
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Chức vụ
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            delete
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            edit
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($data_qua_trinh_cong_tac as $qua_trinh){?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $qua_trinh["id"] ?></td>
                                            <a><td><?php echo $qua_trinh["ma_nv"] ?></td></a>
                                            <td><?php echo $qua_trinh["don_vi"] ?></td>
                                            <td><?php echo $qua_trinh["bo_phan"] ?></td>
                                            <td><?php echo $qua_trinh["chuc_vu"] ?></td>
                                            <td><?php echo $qua_trinh["ngay_bat_dau"] ?></td>
                                            <td><?php echo $qua_trinh["ngay_ket_thuc"] ?></td>
                                            <td><?php echo $qua_trinh["ghi_chu"] ?></td>
                                            <td><a href="index.php?controller=add_edit_qua_trinh_cong_tac&act=delete&id=<?php echo $qua_trinh["id"].'-'.$nhan_vien['id']?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">delete</button></a></td>
                                            <td><a href="index.php?controller=add_edit_qua_trinh_cong_tac&act=edit&id=<?php echo $qua_trinh["id"].'-'.$nhan_vien['id']?>"><button class="btn btn-success">edit</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<section class="content-header">
    <h1>
        Data Tables
        <small>advanced tables</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách hợp đồng lao động của nhân viên của nhân viên:  <strong><?php echo $nhan_vien['ten_nv']?></strong></h3>
                </div>
                <div class="box-header">
                    <a class="btn btn-primary" href="index.php?controller=add_edit_hop_dong_lao_dong&act=add&id=<?php echo $nhan_vien['id']?>">Thêm mới hợp đồng lao động</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã nhân viên
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Mã hợp đồng lao động
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Ngày bắt đầu
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày kết thúc
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Hình thức hợp đồng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 300px">
                                            Nội dung
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 200px">
                                            Ghi chú
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            delete
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            edit
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($hop_dong_lao_dong as $hop_dong){?>
                                        <tr role="row" class="odd">
                                            <a><td><?php echo $hop_dong["ma_nv"] ?></td></a>
                                            <td><?php echo $hop_dong["ma_hop_dong"] ?></td>
                                            <td><?php echo $hop_dong["ngay_bat_dau"] ?></td>
                                            <td><?php echo $hop_dong["ngay_ket_thuc"] ?></td>
                                            <td><?php echo $hop_dong["hinh_thuc"] ?></td>
                                            <td><?php echo $hop_dong["noi_dung"] ?></td>
                                            <td><?php echo $hop_dong["ghi_chu"] ?></td>
                                            <td><a href="index.php?controller=add_edit_hop_dong_lao_dong&act=delete&id=<?php echo $hop_dong["id"].'-'.$nhan_vien['id']?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">delete</button></a></td>
                                            <td><a href="index.php?controller=add_edit_hop_dong_lao_dong&act=edit&id=<?php echo $hop_dong["id"].'-'.$nhan_vien['id']?>"><button class="btn btn-success">edit</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách những lần đánh giá của nhân viên của nhân viên:  <strong><?php echo $nhan_vien['ten_nv']?></strong></h3>
                </div>
                <div class="box-header">
                    <a class="btn btn-primary" href="index.php?controller=add_edit_danh_gia&act=add&id=<?php echo $nhan_vien['id']?>">Thêm mới đánh giá cho nhân viên</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                                       aria-describedby="example2_info">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã nhân viên
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Kỳ đánh giá
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Xếp loại
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Nhận xét
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày đánh giá
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            delete
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            edit
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($đanh_gia_nhan_vien as $danh_gia){?>
                                        <tr role="row" class="odd">
                                            <a><td><?php echo $danh_gia["ma_nv"] ?></td></a>
                                            <td><?php echo $danh_gia["ky_danh_gia"] ?></td>
                                            <td><?php echo $danh_gia["xep_loai"] ?></td>
                                            <td><?php echo $danh_gia["nhan_xet"] ?></td>
                                            <td><?php echo $danh_gia["ngay_danh_gia"] ?></td>
                                            <td><a href="index.php?controller=add_edit_danh_gia&act=delete&id=<?php echo $danh_gia["id"].'-'.$nhan_vien['id']?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">delete</button></a></td>
                                            <td><a href="index.php?controller=add_edit_danh_gia&act=edit&id=<?php echo $danh_gia["id"].'-'.$nhan_vien['id']?>"><button class="btn btn-success">edit</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>