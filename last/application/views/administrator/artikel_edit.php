<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo $title; ?>
        <small>aNPanel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url().'administrator' ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li>Article</li>
        <li class="active"><?php echo $title; ?></li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <!-- <div class="col-md-8">
        
    </div> -->
    <form action="<?php echo base_url().'ad_artikel/edit/'.$this->uri->segment(3) ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
    <div class='row'>
        <div class='col-md-8'>
            <div class='box box-info'>
                <div class='box-header'>
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                    <?php if (validation_errors()): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('success')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif ?>
                    <?php if ($this->session->flashdata('error')): ?>
                        <div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                           <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif ?>
                    <input type="hidden" value="<?= $id ?>" name="iduri">
                     <div class="form-group">
                        <label for="nama">Judul Artikel</label>
                        <input type="text" name="jd" value="<?= $row->judul; ?>" class="form-control" id="nama" placeholder="Masukan Judul Artikel">
                    </div>
                    <textarea id="editor1" name="isi" rows="10" cols="80" >
                       <?=$row->artikel ?>
                    </textarea>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col-->
        <div class='col-md-4'>
            <div class='box box-info'>
                <div class='box-header'>
                </div><!-- /.box-header -->
                <div class='box-body pad'>
                        <!-- Date and time range -->
                        <div class="form-group">
                            <label>Tanggal Publish:</label>
                            <div id="datetimepicker1" class="input-append date">
                                <div class="form-group">
                                    <div class='col-md-8 input-group date' id='datetimepicker1'>
                                        <?php 
                                            $string = $row->tanggal;
                                            $dt = explode("-", $string);
                                            $a = explode(" ", $dt[2]);
                                            $tgl = $a[0].'/'.$dt[1].'/'.$dt[0].' '.$a[1];
                                         ?>
                                        <input value="<?= $tgl; ?>"  type='text' name="tgl" class="form-control" />
                                        <span value="" class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.form group -->
                         <div class="form-group">
                            <label>Status Publish:</label>
                            <div class='col-md-8 input-group'>
                                <select name="sts" class="form-control">
                                    <? if($row->status == 'publish'): ?>
                                    <option value="publish" selected="selected">Publish</option>
                                    <option value="draft">Draft</option>
                                    <? else : ?>
                                    <option value="publish">Publish</option>
                                    <option value="draft"  selected="selected">Draft</option>
                                    <? endif ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Fitur Image</label>
                            <?php if ($row->image !=''): ?>
                                <div class="feature-img">
                                    <img src="<?php echo base_url().'assets/admin/images/'.$row->image ?>" alt="">
                                </div>
                            <?php endif ?>
                            <input value="<?= $row->image; ?>" type="file" name="ico" id="exampleInputFile">
                            <p class="help-block">Pilih File jika ingin Mengganti Icon dan File Harus Bertipe PNG/JPEG/GIF</p>
                        </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </div><!-- /.box -->
        </div><!-- /.col-->
    </div><!-- ./row -->
    </form>


</section><!-- /.content -->
</aside><!-- /.right-side -->

<!-- Page script -->
<script type="text/javascript">
    $(function() {
         $('#datetimepicker1').datetimepicker({
            //useCurrent: true, 
            language: 'id',
            useSeconds: true,  
         });
    });
</script>