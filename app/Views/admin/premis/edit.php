<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>Edit Premis | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Edit Premis</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Premis</li>
      <li class="breadcrumb-item">Edit</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <form action="<?=base_url()?>admin/premis/update" method="POST" class="theme-form">
          <div class="card-body">
            <div class="mb-3" hidden>
              <label for="premisId" class="col-form-label">id</label>
              <input type="text" name="premisId" class="form-control" id="premisId" value="<?=$premis['id']?>" readonly>
            </div>
            <div class="mb-3">
              <label for="premisCode" class="col-form-label">Premis Code</label>
              <input type="text" name="premisCode" class="form-control" id="premisCode" value="<?=$premis['premis_code']?>" readonly>
            </div>
            <div class="mb-3">
              <label for="premisName" class="col-form-label">Premis</label>
              <input type="text" name="premisName" class="form-control" id="premisName"  value="<?=$premis['premis']?>">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?=base_url()?>admin/premis" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>