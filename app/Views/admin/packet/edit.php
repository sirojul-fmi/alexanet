<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>Edit Packet | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Edit Packet</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Packet</li>
      <li class="breadcrumb-item">Edit</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <form action="<?=base_url()?>admin/packet/update" method="POST" class="theme-form">
          <div class="card-body">
            <div class="mb-3" hidden>
              <label for="packetId" class="col-form-label">Id</label>
              <input type="text" name="packetId" class="form-control" id="packetId" value="<?=$packet['id']?>" readonly>
            </div>
            <div class="mb-3">
              <label for="packetCode" class="col-form-label">Packet Code</label>
              <input type="text" name="packetCode" class="form-control" id="packetCode" value="<?=$packet['packet_code']?>" readonly>
            </div>
            <div class="mb-3">
              <label for="packetName" class="col-form-label">Packet</label>
              <input type="text" name="packetName" class="form-control" id="packetName" value="<?=$packet['packet']?>">
            </div>
            <div class="mb-3">
              <label for="packetBandwidth" class="col-form-label">Bandwidth</label>
              <input type="text" name="packetBandwidth" class="form-control" id="packetBandwidth" value="<?=$packet['bandwidth']?>">
            </div>
            <div class="mb-3">
              <label for="packetPrice" class="col-form-label">Price</label>
              <input type="number" name="packetPrice" class="form-control" id="packetPrice" value="<?=$packet['price']?>">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?=base_url()?>admin/packet" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>