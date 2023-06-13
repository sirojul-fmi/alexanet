<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>Add Packet | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Add Packet</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Packet</li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <form action="<?=base_url()?>admin/packet/store" method="POST" class="theme-form">
          <div class="card-body">
            <div class="mb-3">
              <label for="packetCode" class="col-form-label">Packet Code</label>
              <input type="text" name="packetCode" class="form-control" id="packetCode" placeholder="Exp : R1">
            </div>
            <div class="mb-3">
              <label for="packetName" class="col-form-label">Packet</label>
              <input type="text" name="packetName" class="form-control" id="packetName" placeholder="Packet">
            </div>
            <div class="mb-3">
              <label for="packetBandwidth" class="col-form-label">Bandwidth</label>
              <input type="text" name="packetBandwidth" class="form-control" id="packetBandwidth" placeholder="Bandwidth">
            </div>
            <div class="mb-3">
              <label for="packetPrice" class="col-form-label">Price</label>
              <input type="number" name="packetPrice" class="form-control" id="packetPrice" placeholder="Price">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?=base_url()?>admin/packet" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>