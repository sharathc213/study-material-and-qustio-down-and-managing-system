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
                Add File Type
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form">
                            <div class="form-group">
                                <label>File Format</label>
                                <input class="form-control" id="file_type" style='text-transform:uppercase'>
                                <span class="help-block" id="file_type_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Max Size (in kb)</label>
                                <input type="number" class="form-control" id="file_size" style='text-transform:uppercase'>
                                <span class="help-block" id="file_size_error"></span>
                            </div>
                      


                            <button type="button" class="btn btn-primary" onclick="add_file();">Add file</button>
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