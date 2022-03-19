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
          <h3 class="card-title">Data Financial</h3>

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
                    <label for="pendapatan" class="col-sm-2 col-form-label">Pendapatan</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="pendapatan" placeholder="Pendapatan" name="pendapatan" value="<?=$pendapatan?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="accounts_receivable" class="col-sm-2 col-form-label">Accounts Receivable</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="accounts_receivable" placeholder="Accounts Receivable" name="accounts_receivable" value="<?=$accounts_receivable?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="accounts_payable" class="col-sm-2 col-form-label">Accounts Payable</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="accounts_payable" placeholder="Accounts Payable" name="accounts_payable" value="<?=$accounts_payable?>">
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
        <a href="<?=site_url('/Financial/');?>"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>