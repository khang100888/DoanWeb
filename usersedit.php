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
                                  <h1><a href = "users.php" class = "btn btn-success" ><i class = "fa fa-undo"></i> Quay về</a>
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
                                        <li class="active">Edit User</li>
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
                                    <strong>Information User</strong>
                                </div>
                                <div class="card-body card-block">
                                    <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                            <div class="col-12 col-md-9"><input type="text" id="txt_username" name="txt_username"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Email</label></div>
                                            <div class="col-12 col-md-9"><input type="email" id="txt_email" name="txt_email"  class="form-control"></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                                            <div class="col-12 col-md-9"><input type="password" id="txt_password" name="txt_password"  class="form-control"></div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Bio</label></div>
                                            <div class="col-12 col-md-9"><textarea name="txt_bio" id="txt_bio" rows="9"  class="form-control"></textarea></div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="select" class=" form-control-label">Sex</label></div>
                                            <div class="col-12 col-md-9">
                                                <select name="select" id="cmb_sex" class="form-control">
                                                    <option value="0">Please select</option>
                                                    <option value="1" selected>Male</option>
                                                    <option value="2">Female</option>
                                                    <option value="3">Other</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Role</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="radio">
                                                        <label for="radio1" class="form-check-label ">
                                                            <input type="radio" id="rdg_male" name="rdg_role" checked value="option1" class="lbsRadio">User
                                                        </label>
                                                    </div>
                                                    <div class="radio">
                                                        <label for="radio2" class="form-check-label ">
                                                            <input type="radio" id="rdg_female" name="rdg_role" value="option2" class="lbsRadio">Admin
                                                        </label>
                                                    </div>
                                                   
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label class=" form-control-label">Prefer</label></div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="checkbox">
                                                        <label for="checkbox1" class="form-check-label ">
                                                            <input type="checkbox" id="chk_football" name="chk_football" value="option1" class="lbsCheck"> Football
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox2" class="form-check-label ">
                                                            <input type="checkbox" id="chk_swimming" name="chk_swimming" value="option2" class="lbsCheck"> Swimming
                                                        </label>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="checkbox3" class="form-check-label ">
                                                            <input type="checkbox" id="chk_walking" name="chk_walking" value="option3" class="lbsCheck"> Walking
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Avatar</label></div>
                                            <div class="col-12 col-md-9"><input type="file" id="file_avatar" name="file_avatar" class="form-control-file"></div>
                                        </div>
                                        <div>
                                            <button name="btn_create" type="submit" class="btn btn-primary btn-sm">
                                                <i class="fa fa-dot-circle-o"></i> Update
                                            </button>
                                            <button  name="btn_reset" type="reset" class="btn btn-danger btn-sm">
                                                <i class="fa fa-ban"></i> Reset
                                            </button>
                                        </div>
                                    </form>
                                </div>

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
