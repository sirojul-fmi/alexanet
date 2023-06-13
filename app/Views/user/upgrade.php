<?=$this->extend('layout/user_layout.php')?>

<?=$this->section('title')?>
<title>Upgrade | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<div class="container-fluid">
  <div class="page-header">
    <h3>Upgrade</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">User</li>
      <li class="breadcrumb-item">Upgrade</li>
    </ol>
  </div>
</div>

<div class="container-fluid">
  <div class="card p-4">
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <h6>Detail Paket WiFi Anda yang Sekarang</h6>
          <div class="form-group mt-4">
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
        </div>
        <div class="col-lg-6 col-sm-12">
          <h6>Form Upgrade Paket WiFi</h6>
          <form action="<?=base_url('user/upgrade/store')?>" method="post" class="mt-4">
            <div class="form-group">
              <input type="text" name="user_id" value="<?=session()->get('user_id')?>" hidden>
              <label for="">Pilih Paket Anda</label>
              <select id="select_paket" name="select_packet" class="form-control select_packet" required>
                <option value=0>Pilih</option>
                <?php foreach($paket as $data):?>
                <option value="<?=$data['packet_code']?>" <?=(($user[0]['packet_code'] == $data['packet_code']) ? 'hidden' : '')?>><?=$data['packet']?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div id="detail_packet" hidden> 
              <div class="form-group">
                <label for="">Bandwidth</label>
                <input id="detail_packet_band" type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" readonly>
              </div>
              <div class="form-group">
                <label for="">Harga</label>
                <input id="detail_packet_price" type="text" class="form-control rounded-0 bg-white border-0 shadow-sm" readonly>
              </div>
              <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" name="keterangan" id="" class="form-control">
              </div>
              <div class="form-group">
                <button id="btn-batal-upgrade" type="button" class="btn btn-danger shadow-sm" >Batal</button>
                <button type="submit" class="btn btn-primary shadow-sm" style="float: right;">Ajukan Upgrade</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?=$this->endSection()?>