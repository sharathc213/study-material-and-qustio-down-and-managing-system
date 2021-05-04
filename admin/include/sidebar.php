

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://localhost/studentscorner/">ADMIN'S PANEL</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!-- 
                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> -->

                <ul class="nav navbar-right navbar-top-links">
                    <!-- <li class="dropdown navbar-inverse">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div> -->
                                        <!-- <i class="fa fa-comment fa-fw"></i> New Comment -->
                                        <!-- <span class="pull-right text-muted small">4 minutes ago</span> -->
                                    <!-- </div>
                                </a>
                            </li> -->
                            <!-- <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li> -->
                                <!-- <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li> -->
                      
                            <!-- <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li> -->
                            <!-- <li class="divider"></li> -->
                            <!-- <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li> -->
                        <!-- </ul>
                    </li> -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index.php?changepass"><i class="fa fa-user fa-fw"></i> Change Password</a>
                            </li>
                            <!-- <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li> -->
                            <li class="divider"></li>
                            <li><a href="../logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <!-- <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                </span>
                                </div>
                               
                            </li> -->
                            <li>
                                <a href="index.php?dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fas fa-university"></i> Colleage<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addcolleages">Add colleage</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewcolleages">View Colleages</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            
                            <li>
                                <a href="#"><i class="fa fa-user-plus fa-fw"></i>Admins<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addadmin">Add Admins</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewadmin">View Admins</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="index.php?addcat"><i class="fa fa-table fa-fw"></i>Course Cattogory</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i>Course<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addcourse">Add course</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewcourse">View course</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-list fa-fw"></i>Subject<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addsubject">Add Subject</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewsubject">View Subject</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-laptop fa-fw"></i>Create Course<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addsubc">Add Course</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewsubc">View Course</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>

                            <li>
                                <a href="#"><i class="fa  fa-book fa-fw"></i>Books<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addbooks">Add Books</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewbooks">View Books</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <li>
                                <a href="#"><i class="fa   fa-question fa-fw"></i>Question<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addquestion">Add Questions</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewquestion">View Questions</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa   fa-question fa-fw"></i>File Size<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addfile">Add file</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewfile">View file</a>
                                    </li>
                                </ul>
                          
                            </li> -->
                              <li>
                                <a href="index.php?viewdata"><i class="fa   fa-file fa-fw"></i>File</a>
                                <!-- <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addfile">Add file</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewfile">View file</a>
                                    </li>
                                </ul> -->
                          
                            </li>
                    
                    
                           
                        </ul>
                    </div>
                </div>
            </nav>

