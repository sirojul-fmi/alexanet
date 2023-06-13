<?=$this->extend('layout/guest_layout.php')?>

<?=$this->section('title')?>
<title>Detail Informasi | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<section id="contact" class="contact section-padding">
  <div class="container">
      <div class="row">
          <div class="col-md-12">
              <div class="section-header text-center pb-5 mt-4">
                  <h2>Detail Informasi</h2>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="col-lg-6 col-sm-12">
              <div class="row">
                  <div class="col-12 col-md-12 col-lg-6">
                      <div class="card text-center" style="min-height: 30vh;">
                          <div class="card-body">
                              <i class="bi bi-geo-alt" style="font-size: 2rem;"></i>
                              <p style="font-size: 14px;">
                                  <b>Alamat</b> <br> <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="https://goo.gl/maps/jQ3uUBpom3QaQnP27"> Rt 001/Rw 001 dsn jabon, ds bawangan, kec ploso, kab jombang</a>
                              </p>
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-6">
                      <div class="card text-center" style="min-height: 30vh;">
                          <div class="card-body">
                              <i class="bi bi-telephone" style="font-size: 2rem;"></i>
                              <p style="font-size: 14px;">
                                  <span><b>Contact</b> <br> <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="https://wa.me/85655681174?text=Halo%20alexanet">0812 1633 8300</a></span>
                                  <br>
                                  <span> <a class="link-underline link-underline-opacity-0 link-opacity-75-hover" href="mailto:djandrewka90210@gmail.com">djandrewka90210@gmail.com</a></span>
                              </p>
                              
                          </div>
                      </div>
                  </div>
                  <div class="col-12 col-md-12 col-lg-6">
                    <div class="card mt-4" style="min-width:fit-content; min-height:fit-content;">
                        <div class="card-body">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1978.1069309802926!2d112.21560293671791!3d-7.44157416374611!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e783dee3e98870b%3A0x237b17bb91da42dd!2sAlexa%20Internet%20Service!5e0!3m2!1sid!2sid!4v1685285212655!5m2!1sid!2sid" width="514vh" height="189vh" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card text-center" style="min-height: 30vh;">
                        <div class="card-body">
                            <img src="<?=base_url()?>/images/info1.jpeg" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="card text-center" style="min-height: 30vh;">
                        <div class="card-body">
                            <img src="<?=base_url()?>/images/info2.jpeg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
</div>
</section>
<?=$this->endSection()?>