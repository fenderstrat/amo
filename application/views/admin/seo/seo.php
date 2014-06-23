<div class="row">
    <div class="col-md-6">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">SEO Settings</h3>
            </div><!-- /.box-header -->
            <div class="box-body">
                <?php echo form_open('ngadmin/seo/save');  ?>
                    <!-- text input -->
                    <div class="form-group">
                        <label></label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Website Title Here...">
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                        <label></label>
                        <textarea class="form-control" name="description" rows="10" placeholder="Enter Description Here..."></textarea>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <input type="text" class="form-control" name="keyword" placeholder="Enter Keywords Here...">
                    </div>

                    <div class="box-footer">
                        <input type="submit" class="btn btn-primary" value="Save">
                    </div>

                <?php echo form_close(); ?>
            </div><!-- /.box-body -->
        </div>
    </div>
</div>