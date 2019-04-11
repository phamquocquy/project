<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tuyển dụng</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=yeu_cau"><i class="fa fa-circle-o"></i>Danh sách đơn yêu cầu</a></li>
                    <li><a href="index.php?controller=add_edit_yeu_cau&act=add"><i class="fa fa-circle-o"></i>Thêm mới đơn yêu cầu</a></li>
                    <li><a href="index.php?controller=ung_vien"><i class="fa fa-circle-o"></i>Danh sách ứng viên</a></li>
                    <li><a href="index.php?controller=add_edit_ung_vien&act=add"><i class="fa fa-circle-o"></i>Thêm mới ứng viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Nghỉ phép</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=nghi_phep"><i class="fa fa-circle-o"></i>Xin nghỉ phép</a></li>
                </ul>
            </li>
            <li class="header">Quản trị</li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Tuyển dụng</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=duyet_yeu_cau"><i class="fa fa-circle-o"></i>Yêu cầu tuyển dụng</a></li>
                    <li><a href="index.php?controller=duyet_ung_vien"><i class="fa fa-circle-o"></i>Duyệt ứng viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Nghỉ phép</span>
                    <span class="pull-right-container">
                           <i class="fa fa-angle-left pull-right"></i>
                       </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=duyet_nghi_phep"><i class="fa fa-circle-o"></i>Duyệt nghỉ phép</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Chấm công</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=cham_cong"><i class="fa fa-circle-o"></i>Danh sách chấm công</a></li>
                    <li><a href="index.php?controller=duyet_ung_vien"><i class="fa fa-circle-o"></i>Duyệt ứng viên</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Lập bảng lương</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=lap_bang_luong"><i class="fa fa-circle-o"></i>Danh sách bảng lương</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Quản lý hồ sơ nhân viên</span>
                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=nhan_vien"><i class="fa fa-circle-o"></i>Danh sách nhân viên</a></li>
                    <li><a href="index.php?controller=add_edit_nhan_vien"><i class="fa fa-circle-o"></i>Thêm mới nhân viên</a></li>
                </ul>
            </li>
<!--            <li class="treeview">-->
<!--                <a href="#">-->
<!--                    <i class="fa fa-pie-chart"></i>-->
<!--                    <span>Quản lý Admin</span>-->
<!--                    <span class="pull-right-container">-->
<!--                            <i class="fa fa-angle-left pull-right"></i>-->
<!--                        </span>-->
<!--                </a>-->
<!--                <ul class="treeview-menu">-->
<!--                    <li><a href="index.php?controller=user"><i class="fa fa-circle-o"></i> Danh sách Admin</a></li>-->
<!--                    <li><a href="index.php?controller=add_edit_user&act=add"><i class="fa fa-circle-o"></i> Thêm Admin</a></li>-->
<!--                </ul>-->
<!--            </li>-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Chi nhánh</span>
                    <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=branch"><i class="fa fa-circle-o"></i> Dánh sách chi nhanh</a></li>
                    <li><a href="index.php?controller=add_edit_branch&act=add"><i class="fa fa-circle-o"></i> Thêm chi nhanh</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Phòng ban</span>
                    <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="index.php?controller=department"><i class="fa fa-circle-o"></i> Danh sách phòng ban</a></li>
                    <li><a href="index.php?controller=add_edit_department&act=add"><i class="fa fa-circle-o"></i> Thêm phòng ban</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>