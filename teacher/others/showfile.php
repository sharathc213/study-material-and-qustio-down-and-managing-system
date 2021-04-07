<?php

if (isset($_POST['sub_code'])&&isset($_POST['teacher_code'])&&isset($_POST['type_code'])) {
    include("../../db.php");
    $sub_code = $_POST['sub_code'];
    $teacher_code = $_POST['teacher_code'];
    $type_code = $_POST['type_code'];
    // $get_course = "select * from course where course_code='$code'";
    // $run_course = mysqli_query($con, $get_course);
    // $row_course = mysqli_fetch_array($run_course);
    // $course_year = $row_course['year'];
    // $k=1;
    $data='

                            <div class="form-group">
                                <label>Select File</label>
                               <input  class="form-control" id="filedata" type="file"></input>
                                <span class="help-block" id="filedata_error"></span>
                            </div>
                            <div class="form-group">
                            <label>File Description</label>
                           <textarea  class="form-control" id="filedesc"></textarea>
                            <span class="help-block" id="filedesc_error"></span>
                        </div>
                            <button type="button" class="btn btn-primary" onclick="add_file(`'.$sub_code.'`,'.$teacher_code.','.$type_code.');">Add File</button>

                       
                    </div>
     
   ';
    echo $data;
}
