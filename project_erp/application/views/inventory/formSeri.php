<?php $this->load->view('layout/header'); ?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form</h1>
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
      <div class="card ">
     
        <div class="card-header">
          <h3 class="card-title">Data Manajemen Nomor Seri dan Batch Number</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <form class="form-horizontal" method="post" action="<?=$url_aksi;?>">
        <input type="hidden" name="id" value="<?=$id?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk" name="nama_produk" value="<?=$nama_produk?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nomor_seri" class="col-sm-2 col-form-label">Nomor Seri</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomor_seri" placeholder="Nomor Seri" name="nomor_seri" value="<?=$nomor_seri?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="batch_number" class="col-sm-2 col-form-label">Batch Number</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="batch_number" placeholder="Batch Number" name="batch_number" value="<?=$batch_number?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" value="<?=$jumlah?>">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Simpan</button>
                  <button type="reset" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a href="<?=site_url('/Seri/');?>"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>