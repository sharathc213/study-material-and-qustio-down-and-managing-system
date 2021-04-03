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
                Insert Book
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" enctype="multipart/form-data" id="addbook" >
                            <div class="form-group">
                                <label>Subject</label>
                                <select class="form-control" id="sub_code">
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
                            <div class="form-group">
                                <label>Year</label>
                                <input type="month" class="form-control" id="year" style='text-transform:uppercase'>
                                <span class="help-block" id="year_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Question (in PDF format)</label>
                                <input type="file" id="question" class="form-control" >
                                <span class="help-block" id="question_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Answer (in PDF format)</label>
                                <input type="file" id="answer" class="form-control" >
                                <span class="help-block" id="answer_error"></span>
                            </div>


                            <button type="button" class="btn btn-primary" onclick="addquestion();">Add Question</button>
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