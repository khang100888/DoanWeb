<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <?php include 'layout/headeradmin.php'; ?>
    </head>
    <body>
        <!-- Left Panel -->
        <?php include 'layout/menuadmin.php'; ?>
        <!-- /#left-panel -->

        <!-- Left Panel -->

        <!-- Right Panel -->

        <div id="right-panel" class="right-panel">

            <!-- Header-->
            <?php include 'layout/menutopadmin.php'; ?>
            <!-- /header -->
            <!-- Header-->

            <div class="breadcrumbs">
                <div class="breadcrumbs-inner">
                    <div class="row m-0">
                        <div class="col-sm-4">
                            <div class="page-header float-left">
                                <div class="page-title">
                                    <h1><a href = "userscreate.php" class = "btn btn-success" ><i class = "fa fa-edit"></i> Thêm mới</a>
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="page-header float-right">
                                <div class="page-title">
                                    <ol class="breadcrumb text-right">
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Users</a></li>
                                        <li class="active">User List</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content">
                <div class="animated fadeIn">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">User List</strong>
                                </div>
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th class="avatar">Avatar</th>
                                                <th>ID</th>
                                                <th>UserName</th>
                                                <th>Email</th>
                                                <th>Birthday</th>
                                                <th>Status</th>
                                                <th colspan="2">Action</th><!-- comment -->

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            for ($i = 0; $i < 5; $i++) {
                                                echo'<tr>';
                                                echo'<td class = "serial">' . ($i + 1) . '</td>';
                                                echo'<td class = "avatar">';
                                                echo'<div class = "round-img">';
                                                echo'<a href = "#"><img class = "rounded-circle" src = "images/avatar/1.jpg" alt = ""></a>';
                                                echo'</div>';
                                                echo'</td>';
                                                echo'<td> #5469 </td>';
                                                echo'<td> <span class = "name">Louis Stanley</span> </td>';
                                                echo'<td> <span class = "product">iMax</span> </td>';
                                                echo'<td><span class = "count">231</span></td>';
                                                echo'<td>';
                                                echo'<span class = "badge badge-complete">Complete</span>';
                                                echo'</td>';
                                                echo'<td width="50px">';
                                                echo'<a href="usersedit.php?id='.($i+1).'" class = "btn btn-success"><i class = "fa fa-edit"></i> Sửa</a>';

                                                echo'</td>';
                                                echo'<td width="50px">';

                                                echo'<button type = "button" class = "btn btn-danger"><i class = "fa fa-times"></i> Xóa</button>';
                                                echo'</td>';
                                                echo'</tr>';
                                            }
                                            ?>            
                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>

                        </div>
                    </div><!-- .animated -->
                </div><!-- .content -->

                <div class="clearfix"></div>

                <?php include 'layout/footeradmin.php'; ?>

            </div><!-- /#right-panel -->

            <!-- Right Panel -->

            <!-- Scripts -->

            <?php include 'layout/scriptsadmin.php'; ?>

    </body>
</html>
