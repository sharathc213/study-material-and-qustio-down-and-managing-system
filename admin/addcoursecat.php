<script src="./js/jquery.min.js"></script>

<script src="./view/view.js"></script>
<script src="./eddit/eddit.js"></script>
<script>
       viewcoursecat();
    </script>
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
                Add Course catogory
            </div>
            <div class="panel-body panel-bodymain">
                <div class="row">
                    <div class="col-lg-12 updatecat">
                        <form role="form">
                          
                            <div class="form-group">
                                <label>Course Cattogory Name</label>
                                <input class="form-control" id="cat_name" style='text-transform:uppercase'>
                                <span class="help-block" id="cat_name_error"></span>
                            </div>
                      


                            <button type="button" class="btn btn-primary" onclick="add_course_cat();">Add admin</button>
                            <button type="reset" class="btn btn-warning">Reset Button</button>
                        </form>
                    </div>
                    <!-- /.col-lg-6 (nested) -->

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <div class="panel panel-default">
        
           
            <div class="panel-body panel-bodya">
               
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>