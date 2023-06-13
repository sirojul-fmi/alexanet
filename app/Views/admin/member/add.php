<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>Add Member | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>
<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Add Member</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Member</li>
      <li class="breadcrumb-item">Add</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <form action="<?=base_url()?>admin/member/store" method="POST" class="theme-form">
          <div class="card-body">
            <div class="mb-3">
              <label for="premisCode" class="col-form-label">Premis Code</label>
              <input type="text" name="premisCode" class="form-control" id="premisCode" placeholder="Exp : G1">
            </div>
            <div class="mb-3">
              <label for="premisName" class="col-form-label">Premis</label>
              <input type="text" name="premisName" class="form-control" id="premisName" placeholder="Masukkan premis...">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?=base_url()?>admin/member" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>