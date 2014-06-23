<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Add New Widget</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
            <?php echo form_open('ngadmin/widget/save'); ?>
                <form role="form">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Widget Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter ...">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label></label>
                        <textarea id="editor-widget" name="widget" class="form-control" rows="10" placeholder="Enter ..."></textarea>
                    </div>


                    <!-- select -->
                    <div class="form-group">
                        <label>Position</label>
                        <select class="form-control">
                            <option>-- Select Position</option>
                            <option>option 1</option>
                            <option>option 2</option>
                            <option>option 3</option>
                            <option>option 4</option>
                            <option>option 5</option>
                        </select>
                    </div>

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary">
                    </div>

                </form>
            </div><!-- /.box-body -->
        </div>
    </div>

    <div class="col-md-6">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab_1" data-toggle="tab">Widget 1</a></li>
                <li class=""><a href="#tab_2" data-toggle="tab">Widget 2</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab_1">
                    content 1 here
                </div><!-- /.tab-pane -->
                <div class="tab-pane" id="tab_2">
                    content 2 here
                </div><!-- /.tab-pane -->
            </div><!-- /.tab-content -->
        </div><!-- nav-tabs-custom -->
    </div>
</div>