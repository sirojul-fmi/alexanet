<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>List Pesan | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>List Pesan Pengajuan Update Paket</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Pesan</li>
      <li class="breadcrumb-item">List</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <a href="<?=base_url()?>admin/pesan" class="btn btn-primary btn-sm">Kembali</a>
        </div>
        <div class="card-body">
          <div class="table-responsive mb-4">
            <table class="display datatables" id="premis-datatable">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>PELANGGAN</th>
                  <th>PAKET</th>
                  <th>STATUS</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $db = db_connect(); $no = 1; foreach($upgrade as $data): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['nama'] ?></td>
                  <td><?= $data['packet'] ?></td>
                  <td class="text-center"><span class="badge <?=($data['status']=='finish')? 'badge-success' : (($data['status']=='pending')? 'badge-warning': 'badge-danger')?>"><?= $data['status'] ?></span></td>
                  <td class="text-center">
                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalDetail<?=$data['id']?>" class="btn btn-primary btn-sm">detail</a>
                    <!-- modal detail -->
                    <div class="modal fade" id="modalDetail<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Detail Data</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="<?=base_url()?>admin/pesan/konfirmasi/update" method="post">
                              <div class="row">
                                <div class="col-lg-6 col-sm-12 mt-2">
                                  <table class="table-responsive border-0">
                                      <tbody>
                                        <tr>
                                          <td colspan="2"><h6>Data Member</h6></td>
                                        </tr>
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
                                <table class="table-responsive border-0">
                                    <tbody>
                                      <tr>
                                        <td colspan="2"><h6>Paket Saat Ini:</h6></td>
                                      </tr>
                                      <tr>
                                        <td>Paket</td>
                                        <td class="w-100"><?=$data['packet']?></td>
                                      </tr>
                                      <tr>
                                        <td>Bandwidth</td>
                                        <td><?=$data['bandwidth']?></td>
                                      </tr>
                                      <tr>
                                        <td>Harga</td>
                                        <td><?=$data['price']?></td>
                                      </tr>
                                      <tr>
                                        <td colspan="2"><h6>Mengajukan Update Ke:</h6></td>
                                      </tr>
                                      <?php
                                          $packet_code = $data['up_paket'];
                                          $result = $db->query("SELECT * FROM packets WHERE packet_code='$packet_code'");
                                          $result = $result->getResultArray();
                                      ?>
                                      <tr>
                                        <td>Paket</td>
                                        <td><?=$result[0]['packet']?></td>
                                      </tr>
                                      <tr>
                                        <td>Bandwidth</td>
                                        <td><?=$result[0]['bandwidth']?></td>
                                      </tr>
                                      <tr>
                                        <td>Harga</td>
                                        <td><?=$result[0]['price']?></td>
                                      </tr>
                                    </tbody>
                                </table>
                              </div class="card-footer">
                                <div class="col-lg-12 col-sm-12">
                                  <input hidden type="text" name="id" value="<?=$data['id']?>">
                                  <input hidden type="text" name="user_id" value="<?=$data['user_id']?>">
                                  <input hidden type="text" name="packet_id" value="<?=$result[0]['packet_code']?>">
                                  <button type="submit" class="btn btn-primary btn-sm mt-3">Tandai Selesai</button>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                    <a hidden type="button" data-bs-toggle="modal" data-bs-target="#modalHapus<?=$data['id']?>" class="btn btn-danger btn-sm btnHapus">
                      batal
                    </a>
                    <!-- modal konfirmasi hapus -->
                    <div class="modal fade modalHapus" id="modalHapus<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Hapus Data</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <p>Apa anda yakin ingin menghapus data ?</p>
                          </div>
                          <div class="modal-footer">
                            <form action="pesan/delete/<?=$data['id']?>" method="post">
                              <input type="text" name="premisId" value="<?=$data['id']?>" hidden>
                              <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal">Batal</button>
                              <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
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
                  <th>PELANGGAN</th>
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