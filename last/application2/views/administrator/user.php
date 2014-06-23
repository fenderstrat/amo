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
        <li class="active"><?php echo $title; ?></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="box box-primary">
		    <div class="box-header">
		        <h3 class="box-title">Tambah User</h3>
		    </div><!-- /.box-header -->
		    <!-- form start -->
		    <form role="form">
		        <div class="box-body">
		            <div class="form-group">
		                <label for="nama">Username</label>
		                <input type="text" class="form-control" id="nama" placeholder="Masukan Username">
		            </div>
		            <div class="form-group">
		                <label for="lengkap">Nama Lengkap</label>
		                <input type="text" class="form-control" id="lengkap" placeholder="Masukan Nama Lengkap Untuk Username">
		            </div>
		            <div class="form-group">
		                <label for="email">Email</label>
		                <input type="email" class="form-control" id="email" placeholder="Masukan Email">
		            </div>
		            <div class="form-group">
		                <label for="exampleInputPassword1">Password</label>
		                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		            </div>
		            <div class="form-group">
		                <label for="exampleInputPassword2"> Konfirmasi Password</label>
		                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
		            </div>
		            <div class="form-group">
                    	<div class="row">
	                        <div class="col-xs-5">
	                           <label>Level User</label>
		                        <select class="form-control">
		                            <option>Pilih Level</option>
		                            <option>Super User</option>
		                        </select>
	                        </div>
                    	</div>
                    </div>
		            <div class="form-group">
		                <label for="exampleInputFile">File input</label>
		                <input type="file" id="exampleInputFile">
		                <p class="help-block">File Harus Bertipe PNG/JPEG/GIF</p>
		            </div>
		        </div><!-- /.box-body -->

		        <div class="box-footer">
		            <button type="submit" class="btn btn-primary">Simpan</button>
		        </div>
		    </form>
		</div><!-- /.box -->
	</div>
	<div class="col-md-6">
		<!-- general form elements -->
		<div class="box box-success">
		    <div class="box-header">
                <h3 class="box-title">Data User</h3>
            </div>
            <div class="box-body no-padding">
			    <table class="table table-striped">
			        <tr>
			            <th style="width: 10px">No</th>
			            <th>Image</th>
			            <th>Username</th>
			            <th>Level</th>
			            <th>Action</th>
			        </tr>
			        <tr>
			            <td>1.</td>
			            <td class="user-panel">
			            	<div class="pull-left image">
			            		<img src="<?php echo base_url().'assets/admin/theme/' ?>img/avatar3.png" class="img-circle" alt="User Image">
			            	</div>
			            </td>
			            <td>Update software</td>
			            <td>Super Admin</td>
			            <td>
			            	<div class="box-tools">
                                <a href="<?php echo base_url().'ad_user/edit'; ?>"class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                <a href="<?php echo base_url().'ad_user/edit'; ?>"class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
                            </div>
                        </td>
			        </tr>
			    </table>
			</div><!-- /.box-body -->
        </div><!-- /.box -->
	</div>
</section><!-- /.content -->
</aside><!-- /.right-side -->


