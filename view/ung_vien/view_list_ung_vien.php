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
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách các yêu cầu tuyển dụng chưa được duyệt </h3>
                </div>
                <div class="box-header">
                    <a class="btn btn-primary" href="index.php?controller=add_edit_ung_vien&act=add">Thêm yêu cầu mới</a>
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Id
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Email ứng viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Tên ứng viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Chuyên môn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Kinh nghiệm
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Học vấn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số điện thoại
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
                                            <td><?php echo $item["email_ung_vien"] ?></td>
                                            <td><?php echo $item["ten_ung_vien"] ?></td>
                                            <td><?php echo $item["chuyen_mon"] ?></td>
                                            <td><?php echo $item["kinh_nghiem"] ?></td>
                                            <td><?php echo $item["hoc_van"] ?></td>
                                            <td><?php echo $item['so_dien_thoai'] ?></td>
                                            <td><a href="index.php?controller=ung_vien&act=delete&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">delete</button></a></td>
                                            <td><a href="index.php?controller=add_edit_ung_vien&act=edit&id=<?php echo $item["id"] ?>"><button class="btn btn-success">edit</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="example2_previous">
                                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                        </li>
                                        <?php for ($i = 1 ; $i <= $num_page ; $i++){ ?>
                                            <li class="paginate_button <?php if ($_GET['p'] == $i) echo "active"?>">
                                                <a href="index.php?controller=yeu_cau&p=<?php echo $i?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo $i?></a>
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
    <!-- /.row -->
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Danh sách các ứng viên hẹn lịch phỏng vấn</h3>
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
                                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-sort="ascending"
                                            aria-label="Rendering engine: activate to sort column descending">Id
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Email ứng viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Tên ứng viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Chuyên môn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Kinh nghiệm
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số điện thoại
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Người duyệt
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Gửi email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Chi tiết
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arr_status_1 as $item){?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["email_ung_vien"] ?></td>
                                            <td><?php echo $item["ten_ung_vien"] ?></td>
                                            <td><?php echo $item["chuyen_mon"] ?></td>
                                            <td><?php echo $item["kinh_nghiem"] ?></td>
                                            <td><?php echo $item['so_dien_thoai'] ?></td>
                                            <td><?php echo $item["email_admin"] ?></td>
                                            <td><?php echo $item['status_gui_mail'] = ($item["status_gui_mail"] == 1) ? "đã gửi" : "chưa gửi" ?></td>
                                            <td><a href="index.php?controller=add_edit_ung_vien&act=chitiet&id=<?php echo $item["id"]?>"><button class="btn btn-success">Chi tiết</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                            </div>
                            <div class="col-sm-7">
                                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                    <ul class="pagination">
                                        <li class="paginate_button previous disabled" id="example2_previous">
                                            <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a>
                                        </li>
                                        <?php for ($i = 1 ; $i <= $num_page ; $i++){ ?>
                                            <li class="paginate_button <?php if ($_GET['p'] == $i) echo "active"?>">
                                                <a href="index.php?controller=yeu_cau&p=<?php echo $i?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo $i?></a>
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
    <!-- /.row -->
</section>