<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem ERP Kimia Farma</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/daterangepicker/daterangepicker.css">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/fullcalendar/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/fullcalendar-daygrid/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/fullcalendar-timegrid/main.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets')?>/plugins/fullcalendar-bootstrap/main.min.css">

   <!-- Theme style -->
   <link rel="stylesheet" href="<?php echo base_url('assets')?>/dist/css/adminlte.min.css">

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
   
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
   
      <!-- Notifications Dropdown Menu -->
   
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!--
      memanggil file sidebar
  -->
<?php $this->load->view('layout/sidebar'); ?> 



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">