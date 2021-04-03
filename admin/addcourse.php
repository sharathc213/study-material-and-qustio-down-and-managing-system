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
                Insert Course
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>Course Code</label>
                                <input class="form-control" id="course_code" style='text-transform:uppercase'>
                                <span class="help-block" id="course_code_error"></span>
                            </div>
                            <div class="form-group">
                                <label>course Name</label>
                                <input class="form-control" id="course_name" style='text-transform:uppercase'>
                                <span class="help-block" id="course_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label>course catagery</label>
                                <select id="course_cat" class="form-control" id="course_cat">
                                    <option selected disabled>Please Select a Course Catagory</option>
                                    <?php

                                    $get_cat = "select * from course_cat  order by cat_code desc";
                                    $run_cat = mysqli_query($con, $get_cat);

                                    while ($row_cat = mysqli_fetch_array($run_cat)) {

                                        $cat_name = $row_cat['cat_name'];

                                        $cat_code = $row_cat['cat_code'];
                                        $data = '';
                                        $data .= '
               <option value=' . $cat_code . ' >' . $cat_name . '</option>';
                                        echo $data;
                                    }   ?>
                                </select>
                                <span class="help-block" id="course_cat_error"></span>
                            </div>
                            <div class="form-group">
                                <label>course Duration</label>
                                <select name="course_year" class="form-control" id="course_year">
                                    <option selected disabled>Please Select the Course Duration</option>
                                   
                                    <option value="2">2 Year</option>
                                    <option value="3">3 Year</option>
                                    
                                </select>
                                <span class="help-block" id="course_year_error"></span>
                            </div>


                            <button type="button" class="btn btn-primary" onclick="add_course();">Insert course</button>
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