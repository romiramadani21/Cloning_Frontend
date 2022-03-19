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
     
        <div class="card-header">
          <h3 class="card-title">Data User</h3>

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
                    <label for="nama_prodi" class="col-sm-2 col-form-label">Nama Prodi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_prodi" placeholder="ex:Hacker" name="nama_prodi" value="<?=$nama_prodi?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="jurusan" placeholder="ex: peretasan" name="jurusan" value="<?=$jurusan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="akreditasi" class="col-sm-2 col-form-label">Akreditasi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="akreditasi" placeholder="ex:A" name="akreditasi" value="<?=$akreditasi?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nama_kaprodi" class="col-sm-2 col-form-label">Nama Kaprodi</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_kaprodi" placeholder="ex:annonymous" name="nama_kaprodi" value="<?=$nama_kaprodi?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="output_lulusan" class="col-sm-2 col-form-label">Output Lulusan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="output_lulusan" placeholder="hacker" name="output_lulusan" value="<?=$output_lulusan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tahun_berdiri" class="col-sm-2 col-form-label">Tahun Berdiri</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tahun_berdiri" placeholder="ex:1999" name="tahun_berdiri" value="<?=$tahun_berdiri?>">
                    </div>
                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Tambah Data</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
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