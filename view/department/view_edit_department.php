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
        <div class="col-md-6 col-md-offset-3">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Sửa thông tin phòng ban công ty</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="ma_bp">Mã phòng ban</label>
                            <input type="text" class="form-control" id="ma_bp" <?php echo isset($arr['ma_bp'])? "disabled" : ""?> placeholder="Enter mã phòng ban" name="ma_bp" value="<?php echo isset($arr['ma_bp'])? $arr['ma_bp'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="ma_chi_nhanh">Mã chi nhánh</label>
                            <select class="form-control chi_nhanh" name="branch">
                                <?php foreach ($data_branch as $item){ ?>
                                    <option <?php if($item['code'] == $arr['ma_chi_nhanh']) echo "selected"?> value="<?php echo $item['code']?>"><?php echo $item['name_branch']?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name_bp">Tên phòng ban</label>
                            <input type="text" class="form-control" id="name_bp" placeholder="Enter tên chi nhánh" name="name_bp" value="<?php echo isset($arr['name_bp'])? $arr['name_bp'] : ""?>">
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
    <!-- /.row -->
</section>