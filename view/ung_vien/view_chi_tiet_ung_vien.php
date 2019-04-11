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
                    <h3 class="box-title">Form chi tiết ứng viên hẹn lịch phỏng vấn</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="email_ung_vien">Email ứng viên</label>
                            <input type="email" class="form-control" <?php echo isset($arr['email_ung_vien'])? "readonly" : ""?> id="email_ung_vien" name="email_ung_vien" value="<?php echo $arr['email_ung_vien']?>">
                        </div>
                        <div class="form-group">
                            <label for="ten_ung_vien">Tên ứng viên</label>
                            <input type="text" class="form-control" <?php echo isset($arr['ten_ung_vien'])? "readonly" : ""?> id="ten_ung_vien" name="ten_ung_vien" value="<?php echo $arr['ten_ung_vien']?>">
                        </div>
                        <div class="form-group">
                            <label for="chuyen_mon">Chuyên môn của ứng viên</label>
                            <input type="text" class="form-control" <?php echo isset($arr['chuyen_mon'])? "readonly" : ""?> id="chuyen_mon" name="chuyen_mon" value="<?php echo $arr['chuyen_mon']?>">
                        </div>
                    </div>
                    <div class="box-body col-md-6">
                        <div class="form-group">
                            <label for="kinh_nghiem">Kinh nghiệm làm việc</label>
                            <input type="text" class="form-control" <?php echo isset($arr['kinh_nghiem'])? "readonly" : ""?> id="kinh_nghiem" placeholder="Enter kinh nghiệm làm việc" name="kinh_nghiem" value="<?php echo $arr['kinh_nghiem']?>">
                        </div>
                        <div class="form-group">
                            <label for="so_dien_thoai">Số điện thoại ứng viên</label>
                            <input type="text" class="form-control" <?php echo isset($arr['so_dien_thoai'])? "readonly" : ""?> id="so_dien_thoai" placeholder="Enter số điện thoại ứng viên" name="so_dien_thoai" value="<?php echo $arr['so_dien_thoai']?>">
                        </div>
                        <div class="form-group">
                            <label for="email_admin">Email người duyệt ứng viên</label>
                            <input type="text" class="form-control" <?php echo isset($arr['email_admin'])? "readonly" : ""?> id="email_admin" placeholder="Enter người duyệt ứng viên" name="email_admin" value="<?php echo $arr['email_admin']?>">
                        </div>
                        <div class="form-group">
                            <label>Ngày hẹn phỏng vấn</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker1" name="ngay_phong_van" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="ma_nhan_vien">Người phỏng vấn</label>
                            <select class="form-control ma_nhan_vien" name="ma_nhan_vien">
                                <?php foreach ($data_nhanvien as $item){ ?>
                                    <option value="<?php echo $item['ma_nv']?>"><?php echo $item['ten_nv']?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="chitietungvien" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <script>
        $( function() {
            $( "#datepicker1" ).datepicker({ format: 'yyyy-mm-dd'}).datepicker("setDate",'now');
        } );
    </script>
    <!-- /.row -->
</section>