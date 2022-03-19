  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('assets') ?>/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <strong > KIMIA FARMA</strong>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="<?=site_url('/Welcome/');?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
        </ul>
          
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
       
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
  

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Manufacturing
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('/Manufactur/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Management Manufactur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Bom/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Bill Of Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Produksi/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Penjadwalan Produksi</p>
                </a>
              </li>
            </ul>


            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Purchase
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('/Supplier/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Gudang/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Gudang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Alamat/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Alamat Tujuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Product/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Product</p>
                </a>
              </li>
            </ul>


            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                CRM-Sales
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('/Sales/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Sales Order Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Price/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Multi Price List</p>
                </a>
              </li>
            </ul>


              <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Inventory
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('/Multi/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Manajemen Multi <br/>Gudang dan Lokasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Seri/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Manajemen Nomor Seri <br/> dan Batch Number</p>
                </a>
              </li>
            </ul>

            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Accounting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=site_url('/Anggaran/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Anggaran Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Financial/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Financial</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Kalkulasi/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Kalkulasi Penyusutan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Probabilitas/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Probabilitas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=site_url('/Laporan/');?>" class="nav-link">
                  <i class="fas fa-check-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
            </ul>

        
          <li class="nav-item has-treeview">
            <a href="<?=site_url('/Pengguna/');?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User
              </p>
            </a>
            </li>
        
            
          </li>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
