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
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã bộ phận
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Mã nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Lý do
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số Lượng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Chuyên Môn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày yêu cầu tuyển dụng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày cần nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Trạng thái
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Không duyệt
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Duyệt
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arr as $item){
                                        if($item['status'] ==0){
                                        ?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["ma_bo_phan"] ?></td>
                                            <td><?php echo $item["ma_nv"] ?></td>
                                            <td><?php echo $item["ly_do"] ?></td>
                                            <td><?php echo $item["so_luong"] ?></td>
                                            <td><?php echo $item["chuyen_mon"] ?></td>
                                            <td><?php echo $item["ngay_thuc_hien"] ?></td>
                                            <td><?php echo $item["ngay_can_nhan_vien"] ?></td>
                                            <td><?php echo $item['status'] = ($item["status"] == 0) ? "chưa duyệt" : "yêu cầu hủy" ?></td>
                                            <td><a href="index.php?controller=duyet_yeu_cau&act=khong&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">Không duyệt</button></a></td>
                                            <td><a href="index.php?controller=duyet_yeu_cau&act=co&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-success">Duyệt</button></a></td>
                                        </tr>
                                    <?php } elseif ($item['status'] ==3){?>
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><?php echo $item["id"] ?></td>
                                                <td><?php echo $item["ma_bo_phan"] ?></td>
                                                <td><?php echo $item["ma_nv"] ?></td>
                                                <td><?php echo $item["ly_do"] ?></td>
                                                <td><?php echo $item["so_luong"] ?></td>
                                                <td><?php echo $item["chuyen_mon"] ?></td>
                                                <td><?php echo $item["ngay_thuc_hien"] ?></td>
                                                <td><?php echo $item["ngay_can_nhan_vien"] ?></td>
                                                <td><?php echo $item['status'] = ($item["status"] == 0) ? "chưa duyệt" : "yêu cầu hủy" ?></td>
                                                <td><a href="index.php?controller=duyet_yeu_cau&act=khong_duyet_huy&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">Không duyệt</button></a></td>
                                                <td><a href="index.php?controller=duyet_yeu_cau&act=co_duyet_huy&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-success">Duyệt</button></a></td>
                                            </tr>
                                    <?php }} ?>
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
                    <h3 class="box-title">Danh sách các yêu cầu tuyển dụng đã được duyệt</h3>
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
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã bộ phận
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Mã nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Lý do
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số Lượng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Chuyên Môn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày yêu cầu tuyển dụng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày cần nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Trạng thái
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Người duyệt
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Hủy duyệt
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arr_status_1 as $item){?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["ma_bo_phan"] ?></td>
                                            <td><?php echo $item["ma_nv"] ?></td>
                                            <td><?php echo $item["ly_do"] ?></td>
                                            <td><?php echo $item["so_luong"] ?></td>
                                            <td><?php echo $item["chuyen_mon"] ?></td>
                                            <td><?php echo $item["ngay_thuc_hien"] ?></td>
                                            <td><?php echo $item["ngay_can_nhan_vien"] ?></td>
                                            <td><?php echo $item['status'] = ($item["status"] == 0) ? "chưa duyệt" : "đã duyệt" ?></td>
                                            <td><?php echo $item["email_admin"] ?></td>
                                            <td><a href="index.php?controller=duyet_yeu_cau&act=huy_duyet&id=<?php echo $item["id"]?>" onclick="return window.confirm('Are you sure');"><button class="btn btn-danger">Hủy duyệt</button></a></td>
                                        </tr>
                                    <?php }?>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rendering engine</th>
                                        <th rowspan="1" colspan="1">Browser</th>
                                        <th rowspan="1" colspan="1">Platform(s)</th>
                                        <th rowspan="1" colspan="1">Engine version</th>
                                        <th rowspan="1" colspan="1">CSS grade</th>
                                        <th rowspan="1" colspan="1">delete</th>
                                        <th rowspan="1" colspan="1">edit</th>
                                        <th rowspan="1" colspan="1">Engine version</th>
                                        <th rowspan="1" colspan="1">CSS grade</th>
                                    </tr>
                                    </tfoot>
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
                                                <a href="index.php?controller=user&p=<?php echo $i?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo $i?></a>
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
                    <h3 class="box-title">Danh sách các yêu cầu tuyển dụng không được Admin duyệt hoặc đã bị người yêu cầu hủy</h3>
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
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Mã bộ phận
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                            Mã nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="Engine version: activate to sort column ascending">
                                            Lý do
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Số Lượng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Chuyên Môn
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày yêu cầu tuyển dụng
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Ngày cần nhân viên
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                                 colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Trạng thái
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                            colspan="1" aria-label="CSS grade: activate to sort column ascending">
                                            Người duyệt
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($arr_status_2 as $item){?>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1"><?php echo $item["id"] ?></td>
                                            <td><?php echo $item["ma_bo_phan"] ?></td>
                                            <td><?php echo $item["ma_nv"] ?></td>
                                            <td><?php echo $item["ly_do"] ?></td>
                                            <td><?php echo $item["so_luong"] ?></td>
                                            <td><?php echo $item["chuyen_mon"] ?></td>
                                            <td><?php echo $item["ngay_thuc_hien"] ?></td>
                                            <td><?php echo $item["ngay_can_nhan_vien"] ?></td>
                                            <td><?php if($item['status'] == 2) echo "không được duyệt"; elseif ($item['status'] == 3) echo "yêu cầu hủy"; else echo "bị hủy";?></td>
                                            <td><?php echo $item["email_admin"] ?></td>
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
                                                <a href="index.php?controller=user&p=<?php echo $i?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo $i?></a>
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
