<?=$this->extend('layout/user_layout.php')?>

<?=$this->section('title')?>
<title>Berhenti berlangganan | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<div class="container-fluid">
  <div class="page-header">
    <h3>Berhenti Berlangganan</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item">Berhenti Berlangganan</li>
    </ol>
  </div>
</div>

<div class="container-fluid">
<div class="card p-4">
    <div class="card-body">
      <form action="<?=base_url('user/unsubscribe')?>" method="post">
        <div class="form-group">
          <input type="text" name="user_id" value="<?=session()->get('user_id')?>" hidden>
          <label for="">Ijinkan kami tahu alasan anda kenapa berhenti berlangganan dengan kami:</label>
          <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button class="btn btn-primary shadow-sm" style="float: right;">Ajukan Permohonan Berhenti</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?=$this->endSection()?>