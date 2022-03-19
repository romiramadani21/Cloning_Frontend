 <?php $this->load->view('layout/header'); ?>
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

       <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                    $koneksi = new mysqli ("localhost","root","","erp_c");
                    $sql = $koneksi->query("SELECT (SUM(debet)- SUM(kredit)) as total  from laporan ");
                    while ($data= $sql->fetch_assoc()) {
                  ?>      
               <h3><?php echo 'Rp. '. $data['total']; }?></h3>

                <p>Saldo</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                    $koneksi = new mysqli ("localhost","root","","erp_c");
                    $sql = $koneksi->query("SELECT COUNT(id) as total  from supplier ");
                    while ($data= $sql->fetch_assoc()) {
                  ?>
                <h3>  <?php echo ''. $data['total']; }?></h3>
                <p>Supplier</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                    $koneksi = new mysqli ("localhost","root","","erp_c");
                    $sql = $koneksi->query("SELECT COUNT(nama) as total  from user ");
                    while ($data= $sql->fetch_assoc()) {
                  ?>       
                <h3>  <?php echo ''. $data['total']; }?></h3>
                <p>User</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                    $koneksi = new mysqli ("localhost","root","","erp_c");
                    $sql = $koneksi->query("SELECT COUNT(id) as total  from product ");
                    while ($data= $sql->fetch_assoc()) {
                  ?>
                <h3>  <?php echo ''. $data['total']; }?></h3>
                <p>Product</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

  
             <img src="<?php echo base_url('assets')?>/dist/img/farma.jpg" height="450px" width="1315px" alt="">
 
        

    </section>
    <!-- /.content -->
	<?php $this->load->view('layout/footer'); ?>