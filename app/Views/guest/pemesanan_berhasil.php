<?=$this->extend('layout/guest_layout.php')?>

<?=$this->section('title')?>
<title>Pesan | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<section class="section-padding mt-3">
  <div class="container">
      <div class="card p-5">
        <div class="card-title text-center"><h4>Pengajuan Pemasangan WiFi Berhasil</h4></div>
        <div class="card-body text-center">
          <h6 class="mb-4">Pengajuan pemasangan WiFi anda dengan nomor registrasi <b><?=$_GET['reg']?></b> berhasil diajukan.</h6>
          <h6>Team kami akan menghubungi anda untuk informasi lebih lanjut paling lambat 1x24 jam kerja. </h6>
          <h6>Jika dalam kurun waktu tersebut kami belum menghubungi anda silahkan menghubungi nomor berikut <a href="https://wa.me/85655681174?text=Halo%20alexanet">0812 1633 8300</a></h6>
          <h6 class="mb-3">Atau anda bisa juga menghubungi kami melewati alamat surel kami <a href="mailto:djandrewka90210@gmail.com">djandrewka90210@gmail.com</a></h6>
          <h6>Jika dirasa anda sudah memahami dengan informasi diatas silahkan klik tombol berikut</h6>
          <a href="<?=base_url()?>" class="btn btn-warning" >Kembali</a>
        </div>
      </div>
  </div>
</section>
<?=$this->endSection()?>