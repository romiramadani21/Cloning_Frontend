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
      <div class="card">
     
        <div class="card-header">
          <h3 class="card-title">Data Manajemen Anggaran</h3>

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
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_barang" placeholder="Nama Barang" name="nama_barang" value="<?=$nama_barang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah_barang" class="col-sm-2 col-form-label">Jumlah Barang</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="jumlah_barang" placeholder="Jumlah Barang" name="jumlah_barang" value="<?=$jumlah_barang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="harga_barang" class="col-sm-2 col-form-label">Harga Barang</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="harga_barang" placeholder="Harga Barang" name="harga_barang" value="<?=$harga_barang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="modal" class="col-sm-2 col-form-label">Modal</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="modal" placeholder="Modal" name="modal" value="<?=$modal?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="keuntungan" class="col-sm-2 col-form-label">Keuntungan</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="keuntungan" placeholder="Keuntungan" name="keuntungan" value="<?=$keuntungan?>">
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
        <a href="<?=site_url('/Anggaran/');?>"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>