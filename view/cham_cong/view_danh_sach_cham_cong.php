<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách những lần đánh giá của nhân viên của nhân viên</h3>
                </div>
                <div class="box-header">
                    <form action="index.php?controller=cham_cong&act=importfilecsv" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="file"><h3>Input file chấm công cho nhân viên</h3></label>
                            <input type="file" id="file" name="file"><br>
                            <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
                            <p class="help-block">Chú ý file được nhập phải có đuôi .csv</p
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" name="import" value="submit">
                        </div>
                    </form>
                </div>
                <!-- /.box-header -->
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
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã nhân viên
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Ngày lấy công tháng trước
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Ngày lấy công hiện tại
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số ngày đi làm
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số giờ nghỉ
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
                                    <?php foreach ($cham_congs as $cham_cong){?>
                                        <tr role="row" class="odd">
                                            <a><td><?php echo $cham_cong["ma_nv"] ?></td></a>
                                            <td><?php echo $cham_cong["ngay_lay_cong_thang_truoc"] ?></td>
                                            <td><?php echo $cham_cong["ngay_lay_cong_hien_tai"] ?></td>
                                            <td><?php echo $cham_cong["so_ngay_di_lam"] ?></td>
                                            <td><?php echo $cham_cong["so_gio_nghi"] ?></td>
                                            <td><a href="index.php?controller=add_edit_danh_gia&act=delete&id=<?php echo $danh_gia["id"].'-'.$nhan_vien['id']?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">delete</button></a></td>
                                            <td><a href="index.php?controller=add_edit_danh_gia&act=edit&id=<?php echo $danh_gia["id"].'-'.$nhan_vien['id']?>"><button class="btn btn-success">edit</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="row">
                    <div class="col-sm-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination">
                                <li class="paginate_button previous disabled" id="example2_previous">
                                    <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                </li>
                                <?php for ($i = 1 ; $i <= $num_page ; $i++){ ?>
                                    <li class="paginate_button <?php if ($_GET['p'] == $i) echo "active"?>">
                                        <a href="index.php?controller=cham_cong&p=<?php echo $i?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo $i?></a>
                                    </li>
                                <?php } ?>
                                <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>