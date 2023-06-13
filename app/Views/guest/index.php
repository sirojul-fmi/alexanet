<?=$this->extend('layout/guest_layout.php')?>

<?=$this->section('title')?>
<title>Index | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<div class="carousel-inner">
    <div class="carousel-item active">
        <img src="images/home2.webp" class="d-block w-100" alt="...">
        <div class="carousel-caption">
            <h5 class="text-dark">Alexa|net</h5>
            <p class="text-dark">Perusahaan penyedia jasa layanan wifi terbaik.</p>
        </div>
    </div>
</div>

<!-- profil section starts -->
<section id="profil" class="about section-padding">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12">
                <div class="about-img">
                    <img src="images/img/about.jpg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                <div class="about-text">
                    <h2>Selamat Datang<br/> Di Alexanet</h2>
                    <p>Era digital memberikan kita banyak kemudahan dalam aktivitas sehari-hari, seperti belajar secara online, belanja online, menonton tanyangan kesayangan kita, dan juga banyak hal lainnya.</p>
                    <p><b>Alexanet</b> hadir untuk menawarkan paket internet wifi yang ekonomis dan dapat dijangkau dari berbagai kalangan, dengan bermacam-macam pilihan paket yang dapat anda pilih, dan juga anda dapat mengupgrade-nya sewaktu-waktu jika anda membutuhkan bandwidth yang lebih besar.</p>
                    <a href="<?=base_url()?>detail-profile" class="btn btn-warning text-dark">Selengkapnya <i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- profil section Ends -->

<!-- Paket section Starts -->
<section class="services section-padding" id="paket">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Paket Wifi Yang Kami Tawarkan</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-12 col-md-12 col-lg-3">
            <div class="card text-white text-center bg-dark">
                <div class="card-body">
                    <img src="<?=base_url()?>/images/2mb.png" class="img-fluid card-img-top shadow" alt="">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-12 col-lg-3">
            <div class="card text-white text-center bg-dark">
                <div class="card-body">
                    <img src="<?=base_url()?>/images/4mb.png" class="img-fluid card-img-top shadow" alt="">
                </div>
            </div>
        </div>
            <div class="col-12 col-md-12 col-lg-3">
                <div class="card text-white text-center bg-dark">
                <div class="card-body">
                    <img src="<?=base_url()?>/images/6mb.png" class="img-fluid card-img-top shadow" alt="">
                </div>
            </div>
            </div>
            <div class="col-12 col-md-12 col-lg-3">
            <div class="card text-white text-center bg-dark">
                <div class="card-body">
                    <img src="<?=base_url()?>/images/10mbps.png" class="img-fluid card-img-top shadow" alt="">
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- Paket section Ends -->

<!-- Check section start -->
<section id="check" class="p-5">
<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col-lg-3 col-sm-12"></div>
        <div class="col-lg-6 col-sm-12">
            <div class="card p-4 border-0 rounded-2 shadow" >
                <div class="card-body text-center">
                    <h4>Temukan Paket WiFi<br>Sesuai Kebutuhanmu</h4><br>
                    <a href="<?=base_url()?>pemesanan" class="btn btn-warning">Berlangganan Sekarang</a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12"></div>
    </div>
</div>
</section>
<!-- Check section ends -->

<!-- Contact starts -->
<section id="contact" class="contact section-padding">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="section-header text-center pb-5">
                <h2>Informasi</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card text-center" style="min-height: 30vh;">
                        <div class="card-body">
                            <i class="bi bi-geo-alt" style="font-size: 2rem;"></i>
                            <p style="font-size: 14px;">
                                <b>Alamat</b> <br> Rt 001/Rw 001 dsn jabon, ds bawangan, kec ploso, kab jombang
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card text-center" style="min-height: 30vh;">
                        <div class="card-body">
                            <i class="bi bi-telephone" style="font-size: 2rem;"></i>
                            <p style="font-size: 14px;">
                                <span><b>Contact</b> <br> 0812 1633 8300</span>
                                <br>
                                <span>djandrewka90210@gmail.com</span>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-sm-12">
                    <a class="btn btn-warning text-dark mt-2 d-block" href="<?=base_url()?>detail-informasi">Selengkapnya <i data-feather="arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12"></div>
    </div>
</div>
</section>
<!-- contact ends -->
<?=$this->endSection()?>
