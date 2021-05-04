<?php



if (!isset($_SESSION['teacher'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
    $username = $_SESSION['username'];
    $get_teacher="select teacher_code from teacher where email='$username'";
    $run_teacher = mysqli_query($con,$get_teacher);
    $row_teacher=mysqli_fetch_array($run_teacher);
    $teacher_code=$row_teacher['teacher_code'];
    $file = "select * from files where teacher_code='$teacher_code'";
$rfile= mysqli_query($con, $file);
$fileno=mysqli_num_rows($rfile);

    $verify = "select * from files where teacher_code='$teacher_code' and status=3 ";
$rverify= mysqli_query($con, $verify);
$verifyno=mysqli_num_rows($rverify);

$verifym = "select * from files where teacher_code='$teacher_code' and status=2 ";
$rverifym= mysqli_query($con, $verifym);
$verifynom=mysqli_num_rows($rverifym);

$verifyu = "select * from files where teacher_code='$teacher_code' and status=0 ";
$rverifyu= mysqli_query($con, $verifyu);
$verifynou=mysqli_num_rows($rverifyu);
    ?>
    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Dashboard</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-file fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $fileno; ?></div>
                                            <div>File's</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-check-circle fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $verifyno; ?></div>
                                            <div>Approved Files</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-exclamation-circle fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $verifynom; ?></div>
                                            <div>Need Modification Files</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-check fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $verifynou; ?></div>
                                            <div>Unreaded Files</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <a href="#">
                                    <div class="panel-footer">
                                        <span class="pull-left">View Details</span>
                                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                                        <div class="clearfix"></div>
                                    </div>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                <?php }?>