<?php $this->load->view('layout/header'); ?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
      <?php
			  if($this->session->userdata('message') !="") {
				?>
				<div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i>Informasi</h5>
            <?=$this->session->userdata('message')?>
        </div>
				<?php
			}
			?> 
        <div class="card-header">
          <h3 class="card-title"> <?=$judul?></h3>

          <div class="card-tools">
          <a href="<?=site_url('/User/form')?>"> <small class="badge badge-primary"><i class="fa fa-plus"></i>Tambah Data</small>
          </a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Prodi</th>
                    <th>Password</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($users as $key => $value){?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value->nama?>
                    </td>
                    <td><?=$value->email?></td>
                    <td><?=$value->prodi?></td>
                    <td><?=$value->password?></td>
                    <td>
                    <a href="<?=site_url('User/hapus/').$value->id;?>"><small class="badge badge-danger"><i class="fa fa-trash"></i></small></a>
                    <a href="<?=site_url('User/form/').$value->id;?>"><small class="badge badge-warning"><i class="fa fa-edit text-white"></i></small></a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
            
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>