<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url()?>/images/icon-alexanet.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?=base_url()?>/images/icon-alexanet.png" type="image/x-icon">
    
    <?=$this->renderSection('title')?>

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/feather-icon.css">
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/datatables.css">
    
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/sweetalert2.css">
    <!-- Plugins css Ends -->
    
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/style.css">
    <link id="color" rel="stylesheet" href="<?=base_url()?>admin/css/color-1.css" media="screen">
    
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/responsive.css">  
</head>
  <body>

  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
          <div class="main-header-left">
            <div class="logo-wrapper"></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="align-center" id="sidebar-toggle">    </i></div>
          </div>
          
          <div class="nav-right col pull-right right-menu p-0">
            <ul class="nav-menus">
              <li class="onhover-dropdown p-0">
                <a class="btn btn-primary-light" href="<?=base_url('logout')?>"><i data-feather="log-out"></i>Log out</a>
              </li>
            </ul>
          </div>

          <div class="d-lg-none mobile-toggle pull-right w-auto"><i data-feather="more-horizontal"></i></div>
        </div>
      </div>
      <!-- Page Header Ends -->
      
    <!-- Page Body Start-->
    <div class="page-body-wrapper sidebar-icon">
        
        <!-- body start -->
        <?= $this->renderSection('body'); ?>
        <!-- body ends -->

        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright <?=date('Y')?> © Alexanet.</p>
              </div>
            </div>
          </div>
        </footer>

      </div>
      <!-- page body ends -->
  </div>
  <!-- page wrapper ends -->

  <!-- latest jquery-->
  <script src="<?=base_url()?>admin/js/jquery-3.5.1.min.js"></script>
  
  <!-- feather icon js-->
  <script src="<?=base_url()?>admin/js/icons/feather-icon/feather.min.js"></script>
  <script src="<?=base_url()?>admin/js/icons/feather-icon/feather-icon.js"></script>
  
  <!-- Sidebar jquery-->
  <script src="<?=base_url()?>admin/js/sidebar-menu.js"></script>
  
  <!-- Bootstrap js-->
  <script src="<?=base_url()?>admin/js/bootstrap/popper.min.js"></script>
  <script src="<?=base_url()?>admin/js/bootstrap/bootstrap.min.js"></script>
  
  <!-- Plugins JS start-->
  <script src="<?=base_url()?>admin/js/datatable/datatables/datatable.custom.js"></script>
  <script src="<?=base_url()?>admin/js/datatable/datatables/jquery.dataTables.min.js"></script>
  
  <script src="<?=base_url()?>admin/js/sweet-alert/sweetalert.min.js"></script>
  <!-- Plugins JS Ends-->

  <!-- Theme js-->
  <script src="<?=base_url()?>admin/js/script.js"></script>
  <!-- Plugin used-->  

  <!-- my script -->
  <script src="<?=base_url()?>admin/js/paket.js"></script>


  </body>
</html>