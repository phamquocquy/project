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
                    <h3 class="box-title">Edit user</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="<?php echo $form_action; ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group has-error">
                            <label for="exampleInputEmail1">User name</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php echo isset($arr['ctn_username'])? $arr['ctn_username'] : ""?>">
<!--                            <span class="help-block">--><?php //echo isset($error['username']) ? $error['username'] : ""?><!--</span>-->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="email" <?php echo isset($arr['ctn_email'])? "disabled" : ""?> placeholder="Enter email" name="email" value="<?php echo isset($arr['ctn_email'])? $arr['ctn_email'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputEmail1">Confirm password</label>-->
<!--                            <input type="password" class="form-control" id="confirm_password" placeholder="Enter confirm password" name="confirm_password">-->
<!--                        </div>-->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone" value="<?php echo isset($arr['ctn_phone'])? $arr['ctn_phone'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Content</label>
                            <input type="text" class="form-control" id="content" placeholder="Enter content" name="content" value="<?php echo isset($arr['ctn_content'])? $arr['ctn_content'] : ""?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">level</label>
                            <input type="text" class="form-control" id="level" placeholder="Enter level" name="level" value="<?php echo isset($arr['ctn_level'])? $arr['ctn_level'] : ""?>">
                        </div>
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputFile">File input</label>-->
<!--                            <input type="file" id="exampleInputFile">-->
<!---->
<!--                            <p class="help-block">Example block-level help text here.</p>-->
<!--                        </div>-->
<!--                        <div class="checkbox">-->
<!--                            <label>-->
<!--                                <input type="checkbox"> Check me out-->
<!--                            </label>-->
<!--                        </div>-->
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