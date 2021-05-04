

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="http://localhost/studentscorner/">TEACHER'S PANEL</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> -->

              <ul class="nav navbar-right navbar-top-links">
                   
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php echo $_SESSION['username']; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="index.php?changepass"><i class="fa fa-user fa-fw"></i> Change Password</a>
                            </li>
                        <!--    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                   
                            <li>
                                <a href="index.php?dashboard" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa fas fa-users"></i> Teacher<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addteacher">Add Teacher</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewteacher">View Teachers</a>
                                    </li>
                                </ul>
                               /.nav-second-level
                            </li> -->
                            <li>
                                <a href="#"><i class="fa fa-file fa-fw"></i>File<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addfile">Add File</a>
                                    </li>
                                    <li>
                                        <a href="index.php?viewfile">View File</a>
                                    </li>
                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                            <!-- <li>
                                <a href="#"><i class="fa fas fa-users"></i> Subject<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="index.php?addsub">Assign subject</a>
                                    </li>
                                  
                                    <li>
                                        <a href="index.php?viewsub">View Subject</a>
                                    </li>
                                  
                                </ul>
                               
                            </li> -->
                          
                           
                        </ul>
                    </div>
                </div>
            </nav>

