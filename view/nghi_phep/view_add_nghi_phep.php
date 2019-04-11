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
            <div class="box-header with-border">
                <h3 class="box-title">Thêm đơn nghỉ phép mới</h3>
            </div>
            <!-- general form elements -->
            <div class="box box-primary col-md-6">
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label>Từ Ngày</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_bat_dau" name="ngay_bat_dau" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-4">
                            <label>Giờ</label>

                            <div class="input-group">
                                <input type="text" class="form-control" id="starttime" name="gio_bat_dau">

                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="form-group col-md-4 col-md-offset-2">
                            <label>Đến ngày</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="ngay_ket_thuc" name="ngay_ket_thuc" value="">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group col-md-4">
                            <label>Giờ</label>

                            <div class="input-group">
                                <input type="text" class="form-control" id="endtime" name="gio_ket_thuc">

                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="box-body col-md-12">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="form-group">
                                <label for="ly_do">Lý do</label>
                                <input type="text" class="form-control" id="ly_do" placeholder="Enter lý do nghỉ" name="ly_do" value="">
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer col-md-12">
                        <div class="col-md-4 col-md-offset-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
            $("#starttime,#endtime").timepicker({
                showInputs: false,
                showSeconds: true,
                showMeridian: false
            });
        } );
    </script>
    <!-- /.row -->
</section>