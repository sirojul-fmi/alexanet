<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>Add Rules | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Add Rules</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Rules</li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <form action="<?=base_url()?>admin/rules/store" method="POST" class="theme-form">
          <div class="card-body">
            <div class="mb-3">
              <label for="lokasi" class="col-form-label">Lokasi</label>
              <select name="lokasi" id="lokasi" class="form-control">
                <option value="">Pilih lokasi</option>
                <?php foreach($lokasi as $data): ?>
                <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="perangkat" class="col-form-label">Jumlah Perangkat</label>
              <select name="perangkat" id="perangkat" class="form-control">
                <option value="">Pilih Jumlah Perangkat</option>
                <?php foreach($perangkat as $data): ?>
                <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="mb-3">
              <label class="col-form-label">Luas Jangkauan</label>
              <div class="row">
                <div class="col-lg-6 col-sm12">
                  <select name="jangkauan1" id="jangkauan1" class="form-control">
                    <option value="">Pilih Jangkauan</option>
                    <?php foreach($jangkauan1 as $data): ?>
                    <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-lg-6 col-sm12">
                  <select name="jangkauan2" id="jangkauan2" class="form-control">
                    <option value="">Pilih Jangkauan</option>
                    <?php foreach($jangkauan2 as $data): ?>
                    <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label for="kesimpulan" class="col-form-label">Kesimpulan</label>
                <select name="kesimpulan" id="kesimpulan" class="form-control">
                  <option value="">Pilih Paket Yang Sesuai</option>
                  <?php foreach($kesimpulan as $data): ?>
                  <option value="<?=$data['packet_code']?>"><?=$data['packet']?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?=base_url()?>admin/rules" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>