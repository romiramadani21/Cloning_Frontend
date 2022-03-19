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
          <h3 class="card-title">Data Penjadwalan Produksi</h3>

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
                    <label for="nama_item" class="col-sm-2 col-form-label">Nama Item</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_item" placeholder="Nama Item" name="nama_item" value="<?=$nama_item?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah_produksi" class="col-sm-2 col-form-label">Jumlah Produksi</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="jumlah_produksi" placeholder="Jumlah Produksi" name="jumlah_produksi" value="<?=$jumlah_produksi?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai" name="tanggal_mulai" value="<?=$tanggal_mulai?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tanggal_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="tanggal_selesai" placeholder="Tanggal Selesai" name="tanggal_selesai" value="<?=$tanggal_selesai?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jumlah_produksi_gagal" class="col-sm-2 col-form-label">Jumlah Produksi Gagal</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="jumlah_produksi_gagal" placeholder="Jumlah Produksi Gagal" name="jumlah_produksi_gagal" value="<?=$jumlah_produksi_gagal?>">
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
        <a href="<?=site_url('/Produksi/');?>"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>