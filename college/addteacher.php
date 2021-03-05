<?php



if (!isset($_SESSION['college'])  || !isset($_SESSION['username'])) {

    echo "<script>window.open('../../index.php#login','_self')</script>";
} else {
    $username = $_SESSION['username'];
    $get_college="select college_code from college where email='$username'";
    $run_college = mysqli_query($con,$get_college);
    $row_college=mysqli_fetch_array($run_college);
    $college_code=$row_college['college_code'];
    

?>
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
                Insert teacher 
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                         
                            <div class="form-group">
                                <label>teacher Name</label>
                                <input class="form-control" id="teacher_name" style='text-transform:uppercase'>
                                <span class="help-block" id="teacher_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label>teacher E-mail</label>
                                <input id="teacher_email" class="form-control"  id="teacher_email">
                                <span class="help-block" id="teacher_email_error"></span>
                            </div>


                            <button type="button" class="btn btn-primary" onclick="add_teacher('<?php echo $college_code; ?>');">Insert teacher</button>
                            <button type="reset" class="btn btn-warning">Reset Button</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<?php } ?>