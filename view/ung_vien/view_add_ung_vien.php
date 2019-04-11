/<section class="content-header">
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
                    <div class="box-body col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <label for="email_ung_vien">Email ứng viên</label>
                            <input type="email" class="form-control" id="email_ung_vien" placeholder="Enter email người ứng tuyển" name="email_ung_vien" value="">
                        </div>
                        <div class="form-group">
                            <label for="ten_ung_vien">Tên ứng viên</label>
                            <input type="text" class="form-control" id="ten_ung_vien" placeholder="Enter tên ứng viên" name="ten_ung_vien" value="">
                        </div>
                        <div class="form-group">
                            <label for="chuyen_mon">Chuyên môn</label>
                            <input type="text" class="form-control" id="chuyen_mon" placeholder="Enter chuyên môn người cần tuyển" name="chuyen_mon" value="">
                        </div>
                        <div class="form-group">
                            <label for="kinh_nghiem">Kinh nghiệm</label>
                            <input type="text" class="form-control" id="kinh_nghiem" placeholder="Enter kinh nghiệm ứng viên" name="kinh_nghiem" value="">
                        </div>
                        <div class="form-group">
                            <label for="hoc_van">Học vấn ứng viên</label>
                            <input type="text" class="form-control" id="hoc_van" placeholder="Enter học vấn ứng viên" name="hoc_van" value="">
                        </div>
                        <div class="form-group">
                            <label for="so_dien_thoai">Số điện thoại ứng viên</label>
                            <input type="text" class="form-control" id="so_dien_thoai" placeholder="Enter số điện thoại ứng viên" name="so_dien_thoai" value="">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer col-md-6 col-md-offset-3">
                        <button type="submit" name="contact_action" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (left) -->
    </div>
    <!-- /.row -->
</section>