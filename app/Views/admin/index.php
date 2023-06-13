<?= $this->extend('layout/admin_layout.php') ?>

<?= $this->section('title') ?>
<title>Dashboard | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
  <!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Dashboard</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Admin</li>
      <li class="breadcrumb-item">Dashboard</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-7 col-sm-12">
      <div class="row">
        <div class="col-lg-6 col-sm-12">
          <div class="card bg-info shadow">
            <div class="container">
              <div class="card-body text-center">
                  <h6>Member</h6>
                  <h3><?=$member[0]['member']?></h3>
              </div>
              <div class="card-footer p-1 text-center"><a class="text-white" href="<?=base_url('admin/member')?>">Detail</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-sm-12">
          <div class="card bg-secondary shadow">
            <div class="container">
              <div class="card-body text-center">
                  <h6>Paket</h6>
                  <h3><?=$paket[0]['paket']?></h3>
              </div>
              <div class="card-footer p-1 text-center"><a class="text-white" href="<?=base_url('admin/packet')?>">Detail</a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-sm-12">
          <div class="card bg-primary shadow">
            <div class="card-header bg-light pb-0">
              <h5 class="pull-left" >Pesan</h5>
            </div>
            <div class="card-body">
              <div class="tabbed-card">
                <ul class="pull-right nav nav-pills nav-" id="pills-clrtabinfo" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="pills-clrhome-tabinfo" data-bs-toggle="pill" href="#pills-clrhomeinfo" role="tab" aria-controls="pills-clrhome" aria-selected="true">Pemasangan</a></li>
                  <li class="nav-item"><a class="nav-link" id="pills-clrprofile-tabinfo" data-bs-toggle="pill" href="#pills-clrprofileinfo" role="tab" aria-controls="pills-clrprofile" aria-selected="false">Upgrade</a></li>
                  <li class="nav-item"><a class="nav-link" id="pills-clrcontact-tabinfo" data-bs-toggle="pill" href="#pills-clrcontactinfo" role="tab" aria-controls="pills-clrcontact" aria-selected="false">Pencopotan</a></li>
                </ul>
                <div class="tab-content" id="pills-clrtabContentinfo">
                  <div class="tab-pane fade show active text-center" id="pills-clrhomeinfo" role="tabpanel" aria-labelledby="pills-clrhome-tabinfo">
                    <h1><?=$pasang[0]['pesan']?></h1>
                    <i class=""><a class="decoration-0 text-white" href="<?=base_url('admin/pesan/list/pemasangan')?>">pesan</a></i>
                  </div>
                  <div class="tab-pane fade text-center" id="pills-clrprofileinfo" role="tabpanel" aria-labelledby="pills-clrprofile-tabinfo">
                    <h1><?=$upgrade[0]['pesan']?></h1>
                    <i class=""><a class="decoration-0 text-white" href="<?=base_url('admin/pesan/list/upgrade')?>">pesan</a></i>
                  </div>
                  <div class="tab-pane fade text-center" id="pills-clrcontactinfo" role="tabpanel" aria-labelledby="pills-clrcontact-tabinfo">
                    <h1><?=$stop[0]['pesan']?></h1>
                    <i class=""><a class="decoration-0 text-white" href="<?=base_url('admin/pesan/list/pencopotan')?>">pesan</a></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-5 col-sm-12">
      <!-- Container-fluid starts-->
      <!-- <div class="calendar-basic">
         <div class="card">
          <div id="menu">
              <div id="menu-navi">
                <div id="menu-navi-left" class="pt-3 ps-3">
                  <button class="btn btn-primary move-today" type="button" data-action="move-today">Calendar</button>
                </div>
              </div>
          </div>
          <div class="card-body p-2">
            <div id="right">
              <div id="calendar"></div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- Container-fluid Ends-->
    </div>
  </div>
</div>
<?= $this->endSection() ?>