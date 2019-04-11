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
                    <h3 class="box-title">Sửa thông tin chi nhánh công ty</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="code">Mã chi nhánh</label>
                            <input type="text" class="form-control" id="code" <?php echo isset($arr['code'])? "disabled" : ""?> placeholder="Enter code" name="code" value="<?php echo isset($arr['code'])? $arr['code'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Quốc gia</label>
                            <input type="text" class="form-control" id="country" placeholder="Enter tên quốc gia" name="country" value="<?php echo isset($arr['country'])? $arr['country'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="name_branch">Tên chi nhánh</label>
                            <input type="text" class="form-control" id="name_branch" placeholder="Enter tên chi nhánh" name="name_branch" value="<?php echo isset($arr['name_branch'])? $arr['name_branch'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ chi nhánh</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter Địa chỉ chi nhánh" name="address" value="<?php echo isset($arr['address'])? $arr['address'] : ""?>">
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