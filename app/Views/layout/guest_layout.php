<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=base_url()?>/images/icon-alexanet.png" type="image/x-icon">
    
    <?=$this->renderSection('title')?>
    
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>admin/css/feather-icon.css">
    
    <!-- All CSS -->
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?=base_url('bootstrap/css/style.css')?>">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand m-0 p-0" href="#"><img style="max-height:50px;" src="<?=base_url()?>/images/logo-alexanet.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>#profil">Profil</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>#paket">Paket</a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url()?>#contact">Informasi</a>
                    </li>
                    <li class="nav-item me-4">
                        <a class="nav-link" href="<?=base_url()?>pemesanan">Berlangganan</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?=base_url()?>login"
                        class="btn btn-success btn-sm mt-1" 
                        style="border-radius:50px; width: 90px; font-size: 12px;" >Login</a>
                    </li>        
                </ul>
            </div>
        </div>
    </nav>
       
    <?=$this->renderSection('content')?>

      <!-- footer starts --> 
      <footer class="bg-dark p-2 text-center"> 
          <div class="container">
              <p class="text-white">&copy <?=date('Y')?> Alexanet</p>
          </div>
      </footer>
      <!-- footer ends -->

    <!-- All Js -->
    <script src="<?=base_url()?>admin/js/jquery-3.5.1.min.js"></script>
    <script src="<?=base_url('bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- feather icon js-->
    <script src="<?=base_url()?>admin/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?=base_url()?>admin/js/icons/feather-icon/feather-icon.js"></script>

    <!-- myjs -->
    <script src="<?=base_url('bootstrap/js/pemesanan.js')?>"></script>
    <script>
        const navEL = document.querySelector('.navbar');

        window.addEventListener('load', () => {
            // if (window.scrollY >= 81) {
                navEL.classList.add('navbar-scrolled');
            // } else if(window.scrollY < 81) {
            //     navEL.classList.remove('navbar-scrolled');
            // }
        });
    </script>
</body>
</html>
