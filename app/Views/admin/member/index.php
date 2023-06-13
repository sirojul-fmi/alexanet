<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>Member | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Data Members</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Member</li>
      <li class="breadcrumb-item">Index</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header" hidden>
          <a href="<?=base_url()?>admin/member/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
          <div class="table-responsive mb-4">
            <table class="display datatables" id="premis-datatable">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NO HP</th>
                  <th>PAKET</th>
                  <th>STATUS</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($member as $data): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['nohp'] ?></td>
                  <td><?= $data['packet'] ?></td>
                  <td><?= $data['status'] ?></td>
                  <td class="text-center">
                    <a href="<?=base_url()?>admin/premis/edit/<?=$data['id']?>" class="btn btn-warning btn-sm">edit</a>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?=$data['id']?>" class="btn btn-primary btn-sm btnHapus">
                      detail
                    </a>
                    <!-- modal konfirmasi hapus -->
                    <div class="modal fade" id="modalDetail<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Detail Data</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-lg-6 col-sm-12 mt-2">
                                <table class="table-responsive border-0">
                                    <tbody>
                                      <tr>
                                        <td>Nama</td>
                                        <td class="w-100"><?=$data['nama']?></td>
                                      </tr>
                                      <tr>
                                        <td>No Hp</td>
                                        <td><?=$data['nohp']?></td>
                                      </tr>
                                      <tr>
                                        <td>Alamat</td>
                                        <td><?=$data['alamat']?></td>
                                      </tr>
                                      <tr>
                                        <td>Status</td>
                                        <td><?=$data['status']?></td>
                                      </tr>
                                    </tbody>
                                </table>
                              </div>
                              <div class="col-lg-6 col-sm-12 mt-2">
                                <table border="0" class="table-responsive border-0">
                                    <tbody>
                                      <tr>
                                        <td>Paket</td>
                                        <td class="w-100"><?=$data['packet']?></td>
                                      </tr>
                                      <tr <?=($data['status']=='new')? '' : 'hidden' ?> >
                                        <td>Generate</td>
                                        <td>
                                          <form action="<?=base_url()?>admin/member/generate-user" method="post">
                                            <input type="text" name="user_id" value="<?=$data['user_id']?>" hidden>
                                            <input type="text" name="member_id" value="<?=$data['id']?>" hidden>
                                            <input type="text" name="nama" value="<?=$data['nama']?>" hidden>
                                            <button class="btn btn-info" type="submit">Generate User</button>
                                          </form>
                                        </td>
                                      </tr>
                                      <?php 
                                        $pass = explode('@',$data['username']);
                                        $pass = $pass[0];
                                        if($data['status'] == 'active'){ 
                                      ?>
                                        <tr>
                                          <td colspan="2"><strong>Data Login</strong></td>
                                        </tr>
                                        <tr>
                                          <td>Username</td>
                                          <td class="w-100"><?=($data['username']==null) ? 'Username belum digenerate' : $data['username'] ?></td>
                                        </tr>
                                        <tr>
                                          <td>Password</td>
                                          <td><?=($data['password']==null) ? 'Password belum digenerate' : $pass ?></td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <form action="premis/delete/<?=$data['id']?>" method="post">
                              <input type="text" name="premisId" value="<?=$data['id']?>" hidden>
                              <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Batal</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>NO</th>
                  <th>NAMA</th>
                  <th>NO HP</th>
                  <th>PAKET</th>
                  <th>STATUS</th>
                  <th>AKSI</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>