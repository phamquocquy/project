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
                    <h3 class="box-title">Thêm đánh giá cho nhân viên: <strong><?php echo $nhan_vien['ten_nv']?></strong></h3>
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
                                <label for="ky_danh_gia">Kỳ đánh giá</label>
                                <input type="text" class="form-control" id="ky_danh_gia" placeholder="Enter kỳ đánh giá" name="ky_danh_gia" value="">
                            </div>
                            <div class="form-group">
                                <label for="xep_loai">Xếp loại</label>
                                <input type="text" class="form-control" id="xep_loai" placeholder="Enter xếp loại nhân viên" name="xep_loai" value="">
                            </div>
                            <div class="form-group">
                                <label for="nhan_xet">Nhận xêt nhân viên</label>
                                <textarea id="nhan_xet" name="nhan_xet" rows="10" cols="80"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Ngày đánh giá</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="ngay_danh_gia" name="ngay_danh_gia" value="">
                                </div>
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
            $( "#ngay_danh_gia" ).datepicker({ format: 'yyyy-mm-dd'}).datepicker("setDate",'now');
        } );
    </script>
    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('nhan_xet');
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>
    <!-- /.row -->
</section>