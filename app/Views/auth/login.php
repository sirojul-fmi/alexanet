<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url()?>/images/icon-alexanet.png" type="image/x-icon">
    <title>Alexanet</title>
    
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
    <section>         
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card">
              <form class="theme-form login-form" method="post" action="<?=base_url()?>/login/auth">
                <h4>Login</h4>
                <h6>Selamat datang kembali. Silahkan login menggunakan akun anda!.</h6>
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group"><span class="input-group-text"><i data-feather="user"></i></span>
                    <input class="form-control" type="text" name="username" required="" placeholder="username">
                  </div>
                  <?php if((session('user_error')) !== null){ ?>
                  <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                    <?=session('user_error')?>
                    <button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group"><span class="input-group-text"><i data-feather="lock"></i></span>
                    <input class="form-control" type="password" name="password" required="" placeholder="*********">
                  </div>
                  <?php if((session('pass_error')) !== null){ ?>
                  <div class="alert alert-danger alert-dismissible fade show p-1" role="alert">
                    <?=session('pass_error')?>
                    <button type="button" class="btn-close p-2" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php } ?>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block" type="submit">Masuk</button>
                </div>
                <div class="login-social-title">                
                  <h5>Login</h5>
                </div>
                <div class="form-group">
                  <p><a class="btn btn-primary-light" href="<?=base_url()?>">Kembali</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

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
  <!-- Plugins JS Ends-->

  <!-- Theme js-->
  <script src="<?=base_url()?>admin/js/script.js"></script>
  <!-- Plugin used-->  
</body>
</html>
