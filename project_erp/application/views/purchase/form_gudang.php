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
          <h3 class="card-title">Data Gudang</h3>

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
                    <label for="nama_gudang" class="col-sm-2 col-form-label">Nama Gudang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_gudang" placeholder="Nama Gudang" name="nama_gudang" value="<?=$nama_gudang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_gudang" class="col-sm-2 col-form-label">Kode Gudang</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="kode_gudang" placeholder="Kode Gudang" name="kode_gudang" value="<?=$kode_gudang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat_gudang" class="col-sm-2 col-form-label">Alamat Gudang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat_gudang" placeholder="Alamat Gudang" name="alamat_gudang" value="<?=$alamat_gudang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_gudang" class="col-sm-2 col-form-label">Jenis Gudang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jenis_gudang" placeholder="Jenis Gudang" name="jenis_gudang" value="<?=$jenis_gudang?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jadwal_gudang" class="col-sm-2 col-form-label">Jadwal Gudang</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="jadwal_gudang" placeholder="Jadwal Gudang" name="jadwal_gudang" value="<?=$jadwal_gudang?>">
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
        <a href="<?=site_url('/Gudang/');?>"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>