<?= $this->extend('layout/user_layout.php') ?>

<?= $this->section('title') ?>
<title>Dashboard | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-fluid">
  <div class="page-header">
    <h3>Dashboard</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item">Dashboard</li>
    </ol>
  </div>
</div>

<div class="container-fluid">
  <div class="card p-4">
    <div class="card-title text-center">
      <h4>Informasi Member</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <div class="form-group">
            <label for="">Nama</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="<?=$user[0]['nama']?>" readonly>
          </div>
          <div class="form-group">
            <label for="">No Hp</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="<?=$user[0]['nohp']?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="<?=$user[0]['alamat']?>" readonly>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="form-group">
            <label for="">Paket Berlangganan</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="<?=$user[0]['packet']?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Bandwidth</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="<?=$user[0]['bandwidth']?>" readonly>
          </div>
          <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="Rp.<?=$user[0]['price']?>,- per bulan" readonly>
          </div>
          <div class="form-group">
            <label for="">Status Member</label>
            <input type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" value="<?=$user[0]['status']?>" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>