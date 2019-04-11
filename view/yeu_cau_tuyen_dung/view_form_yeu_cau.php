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
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Form yêu cầu tuyển nhân viên mới</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="ma_chi_nhanh">Mã chi nhánh</label>
                            <select class="form-control ma_chi_nhanh" name="ma_chi_nhanh">
                                <?php foreach ($data_branch as $item){ ?>
                                    <option value="<?php echo $item['code']?>"><?php echo $item['name_branch']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ma_chi_nhanh">Mã bộ phận</label>
                            <select class="form-control ma_bo_phan" name="ma_bo_phan">
                                <?php foreach ($data_bophan as $item){ ?>
                                    <option value="<?php echo $item['ma_bp']?>"><?php echo $item['name_bp']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ma_nhan_vien">Nhân viên yêu cầu</label>
                            <select class="form-control ma_nhan_vien" name="ma_nhan_vien">
                                <?php foreach ($data_nhanvien as $item){ ?>
                                    <option value="<?php echo $item['ma_nv']?>"><?php echo $item['ten_nv']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="ly_do">Lý do yêu cầu tuyển dụng</label>
                            <input type="text" class="form-control" id="ly_do" placeholder="Enter lý do yêu cầu tuyển dụng" name="ly_do" value="">
                        </div>
                        <div class="form-group">
                            <label for="so_luong">Số lượng</label>
                            <input type="text" class="form-control" id="so_luong" placeholder="Enter nhập só lượng cần tuyển" name="so_luong" value="">
                        </div>
                        <div class="form-group">
                            <label for="chuyen_mon">Chuyên môn</label>
                            <input type="text" class="form-control" id="chuyen_mon" placeholder="Enter chuyên môn người cần tuyển" name="chuyen_mon" value="">
                        </div>
                        <div class="form-group">
                            <label>Ngày thực hiện yêu cầu</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker1" name="ngay_thuc_hien">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label>Ngày cần nhân viên</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="ngay_can">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="ghi_chu">Ghi chú</label>
                            <input type="text" class="form-control" id="ghi_chu" placeholder="Enter ghi chu" name="ghi_chu" value="">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="contact_action" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <script>
        $( function() {
            $( "#datepicker,#datepicker1" ).datepicker({ format: 'yyyy-mm-dd', setDat: new Date() });
        } );
    </script>
    <!-- /.row -->
</section>