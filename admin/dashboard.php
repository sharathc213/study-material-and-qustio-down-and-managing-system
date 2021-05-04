<?php 

$teacher = "select * from teacher ";
$rteacher= mysqli_query($con, $teacher);
$teacherno=mysqli_num_rows($rteacher);


$college = "select * from college ";
$rcollege= mysqli_query($con, $college);
$collegeno=mysqli_num_rows($rcollege);


$subject = "select * from subject ";
$rsubject= mysqli_query($con, $subject);
$subjectno=mysqli_num_rows($rsubject);


$file = "select * from files ";
$rfile= mysqli_query($con, $file);
$fileno=mysqli_num_rows($rfile);
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
                                            <i class="fa fa-university fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $collegeno; ?></div>
                                            <div>College's</div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $teacherno; ?></div>
                                            <div>Teacher's</div>
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
                                            <i class="fa fa-book fa-5x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"><?php echo $subjectno; ?></div>
                                            <div>Subject's</div>
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
                    </div>
                    <!-- /.row -->
                