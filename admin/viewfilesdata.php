<?php



if (!isset($_SESSION['admin'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
    $username = $_SESSION['username'];

?>
<script src="./js/jquery.min.js"></script>

<script src="./view/view.js"></script>
<script src="./eddit/eddit.js"></script>

    <!-- <script>
       viewfiledata();
    </script> -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    View Files
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                <div class="form-group">
                                <label>Subject</label>
                                <select class="form-control" id="sub_code" onchange="viewfiledata(this.value);">
                                <option selected disabled>Please Select a subject</option>
                                    <?php

                                    $get_sub = "select * from subject ";
                                    $run_sub = mysqli_query($con, $get_sub);

                                    while ($row_sub = mysqli_fetch_array($run_sub)) {

                                        $sub_name = $row_sub['subject_name'];

                                        $subject_code = $row_sub['subject_code'];
                                        $data = '';
                                        $data .= '
               <option value=' . $subject_code . ' >' . $sub_name . ' (' . $subject_code . ')</option>';
                                        echo $data;
                                    }   ?></select>
                                <span class="help-block" id="sub_code_error"></span>
                            </div>
                            <div class="panel-body-table">
                            </div>                   
                    <!-- /.table-responsive -->

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->




    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
   


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->

<?php } ?>