<?php $this->load->view('layout/header'); ?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Management Priceing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
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
          <a href="<?=site_url('/Price/form')?>" class="btn btn-primary btn-sm active" role="button" aria-pressed="true"><i class="fa fa-plus"></i> Tambah Data</a>
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
          </div>
        </div>
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>            
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $key => $value){?>
                  <tr>
                    <td><?=$key+1?></td>
                    <td><?=$value->nama_barang?></td>               
                    <td><?=$value->harga?></td>
                    <td><?=$value->diskon?></td>
                    <td>
                    <a href="<?=site_url('Price/hapus/').$value->id;?>"><small class="badge badge-danger"><i class="fa fa-trash"></i></small></a>
                    <a href="<?=site_url('Price/form/').$value->id;?>"><small class="badge badge-warning"><i class="fa fa-edit text-white"></i></small></a>
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