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
          <h3 class="card-title">Data Supplier</h3>

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
                    <label for="nama_perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_perusahaan" placeholder="Nama Perusahaan" name="nama_perusahaan" value="<?=$nama_perusahaan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_perusahaan" class="col-sm-2 col-form-label">Kode Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="kode_perusahaan" placeholder="Kode Perusahaan" name="kode_perusahaan" value="<?=$kode_perusahaan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat_perusahaan" class="col-sm-2 col-form-label">Alamat Perusahaan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="alamat_perusahaan" placeholder="Alamat Perusahaan" name="alamat_perusahaan" value="<?=$alamat_perusahaan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="no_hp" placeholder="No HP" name="no_hp" value="<?=$no_hp?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="kode_pos" placeholder="Kode Pos" name="kode_pos" value="<?=$kode_pos?>">
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
        <a href="<?=site_url('/Supplier/');?>"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>