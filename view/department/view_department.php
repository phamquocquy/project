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
                    <h3 class="box-title">Danh sách phòng ban công ty cổ phần Nal Việt Nam</h3>
                </div>
                <div class="col-md-4 col-md-offset-7">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Tìm theo chi nhanh</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form class="form_submit" role="form" action="" method="POST">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>Chi nhánh</label>
                                    <select class="form-control chi_nhanh" name="branch">
                                        <?php foreach ($data_branch as $item){ ?>
                                            <option value="<?php echo $item['code']?>"><?php echo $item['name_branch']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.box-header -->
                <div class="box-header col-md-12">
                    <a class="btn btn-primary" href="index.php?controller=add_edit_department&act=add">Add</a>
                </div>
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
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã phòng ban
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Mã chi nhánh
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Name phòng ban
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
                                    <?php foreach ($arr as $item){?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["ma_bp"] ?></td>
                                            <td><?php echo $item["ma_chi_nhanh"] ?></td>
                                            <td><?php echo $item["name_bp"] ?></td>
                                            <td><?php echo $item["name_branch"] ?></td>
                                            <td><a href="index.php?controller=department&act=delete&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">delete</button></a></td>
                                            <td><a href="index.php?controller=add_edit_department&act=edit&id=<?php echo $item["id"] ?>"><button class="btn btn-success">edit</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing
                                    1 to 10 of 57 entries
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="example2_previous">
                                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                        </li>
                                        <?php for ($i = 1 ; $i <= $num_page ; $i++){ ?>
                                            <li class="paginate_button <?php if ($_GET['p'] == $i) echo "active"?>">
                                                <a href="index.php?controller=department&p=<?php echo $i?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo $i?></a>
                                            </li>
                                        <?php } ?>
                                        <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a>
                                        </li>
                                    </ul>
                                </div>
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
    <script>
        // $( document ).ready(function() {
            // $( ".chi_nhanh" ).change(function() {
                // var branch = $(".chi_nhanh").val();
                // $.ajax({
                //     url: "abc.php",
                //     type: "GET",
                //     success: function(result){
                //         console.log(result);
                //     }
                // });
                //var branch = '<?php //echo $item['code']; ?>//';
                // $(".form_submit").attr('action','index.php?controller=department&branch='+branch)
            // });
        // });
    </script>
    <!-- /.row -->
</section>
