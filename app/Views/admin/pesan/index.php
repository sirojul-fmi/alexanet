<?= $this->extend('layout/admin_layout.php') ?>

<?= $this->section('title') ?>
<title>Pesan | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Pesan</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Admin</li>
      <li class="breadcrumb-item">Pesan</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="card">
    <div class="card-body" style="min-height:70vh;">
      <div class="card bg-light shadow">
        <div class="card-body p-4 text-dark"><h5>Pemasangan WiFi <span class="badge badge-dark" style="float: right;"><?=$pasang[0]['pesan']?> Pesan Tersedia</span></h5><a href="<?=base_url('admin/pesan/list/pemasangan')?>" class="float-right">Detail</a></div>
      </div>
      <div class="card bg-warning shadow">
        <div class="card-body p-4 text-dark"><h5>Upgrade WiFi <span class="badge badge-dark" style="float: right;"><?=$upgrade[0]['pesan']?> Pesan Tersedia</span></h5><a href="<?=base_url('admin/pesan/list/upgrade')?>" class="float-right">Detail</a></div>
      </div>
      <div class="card bg-danger shadow">
        <div class="card-body p-4"><h5>Pencopotan WiFi <span class="badge badge-dark" style="float: right;"><?=$stop[0]['pesan']?> Pesan Tersedia</span></h5><a href="<?=base_url('admin/pesan/list/pencopotan')?>" class=" text-white">Detail</a></div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>