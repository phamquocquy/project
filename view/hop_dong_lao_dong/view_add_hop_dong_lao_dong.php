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
                    <h3 class="box-title">Thêm hợp đồng lao động của nhân viên: <strong><?php echo $nhan_vien['ten_nv']?></strong></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="ma_nv">Mã nhân viên</label>
                                <input type="text" class="form-control" id="ma_nv" placeholder="Enter mã nhân viên" name="ma_nv" readonly value="<?php echo $nhan_vien['ma_nv']?>">
                            </div>
                            <div class="form-group">
                                <label for="ten_nv">Tên nhân viên</label>
                                <input type="text" class="form-control" id="ten_nv" placeholder="Enter tên nhân viên" name="ten_nv" readonly value="<?php echo $nhan_vien['ten_nv']?>">
                            </div>
                            <div class="form-group">
                                <label for="ma_hop_dong">Mã hợp đông</label>
                                <input type="text" class="form-control" id="ma_hop_dong" placeholder="Enter mã hợp đồng lao động" name="ma_hop_dong" value="">
                            </div>
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label>Ngày bắt đầu hợp đồng</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_bat_dau" name="ngay_bat_dau" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-4">
                            <label>Ngày kết thúc hợp đồng</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_ket_thuc" name="ngay_ket_thuc" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="noi_dung">Nội dung hợp đồng</label>
                                <textarea id="noi_dung" name="noi_dung" rows="10" cols="80"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="ghi_chu">Ghi chú</label>
                                <input type="text" class="form-control" id="ghi_chu" placeholder="Enter ghi chú" name="ghi_chu" value="">
                            </div>
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
            $( "#ngay_bat_dau,#ngay_ket_thuc" ).datepicker({ format: 'yyyy-mm-dd'}).datepicker("setDate",'now');
        } );
    </script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('noi_dung');
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
    <!-- /.row -->
</section>