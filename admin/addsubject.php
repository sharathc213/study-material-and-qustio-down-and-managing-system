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
                Add Subject
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                        <div class="form-group">
                                <label>Subject Code</label>
                                <input class="form-control" id="subject_code" style='text-transform:uppercase'>
                                <span class="help-block" id="subject_code_error"></span>
                            </div>
                            <div class="form-group">
                                <label>subject Name</label>
                                <input class="form-control" id="subject_name" style='text-transform:uppercase'>
                                <span class="help-block" id="subject_name_error"></span>
                            </div>
                            
                      


                            <button type="button" class="btn btn-primary" onclick="add_subject();">Add subject</button>
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