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
   <div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Artikel</h3>                                    
            </div>
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
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif ?>
            <div class="box-body table-responsive">
             
                    <table id="artikel" class="table table-bordered table-hover">
                        <thead>
                            <th>No</th>
                            <th>Judul Artikel</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </thead>
                        <tbody>
                        <?php $i=1; foreach ($isi as $row):  ?>
                        <tr>
                            <td><?php echo $i ?></td>
                            <td>
                                <?php echo $row->judul ?>
                               <!--  <div class="row-actions">
                                    <?= anchor(base_url('ad_artikel/edit/'.$row->idArtikel), 'Edit', array('title' => 'Edit', 'class'=>'text-primary')); ?>
                                    <?= anchor(base_url('ad_artikel/delete/'.$row->idArtikel), 'Delete', array('title' => 'Delete', 'class'=>'confirm text-danger')); ?>
                                </div> -->
                            </td>
                            <?php 
                                $string = $row->tanggal;
                                $dt = explode("-", $string);
                                $a = explode(" ", $dt[2]);
                                $tgl = $a[0].'/'.$dt[1].'/'.$dt[0].' '.$a[1];
                             ?>
                            <td><?= $tgl; ?></td>
                            <td>
                                <a href="<?php echo base_url('ad_artikel/edit/'.$row->idArtikel); ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a target="_blank" href="<?php echo base_url().'welcome/artikel/'.$row->idArtikel.'/'.url_title($row->judul); ?>" class="btn btn-sm btn-success">Lihat</a>
                                <a href="<?php echo base_url('ad_artikel/delete/'.$row->idArtikel); ?>" class="btn btn-sm btn-danger confirm">Sampah</a>
                            </td>
                        </tr>
                        <?php $i++; endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                        </table>
            </div>
        

    </div>
</div>

<script src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/admin/theme/'; ?>js/plugins/confirm/jquery.confirm.js"></script>

<!-- page script -->
<script type="text/javascript">
    $(function() {
        $("#artikel").dataTable({
            "aoColumns": [
           null,null, null,
          { "bSortable": false }
        ] } );
        $(".confirm").confirm();
    });
</script>



</section><!-- /.content -->
</aside><!-- /.right-side -->