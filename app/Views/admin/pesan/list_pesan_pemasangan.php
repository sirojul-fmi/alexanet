<?= $this->extend('layout/admin_layout.php'); ?>

<?= $this->section('title'); ?>
<title>List Pesan | Alexanet</title>
<?= $this->endSection() ?>

<?= $this->section('content'); ?>

<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>List Pesan Pemasangan Baru</h3>
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
                  <th>NO REG</th>
                  <th>PELANGGAN</th>
                  <th>PAKET</th>
                  <th>STATUS</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($pemasangan as $data): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['invoice'] ?></td>
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
                            <form action="<?=base_url()?>admin/pesan/konfirmasi" method="post">
                              <div class="row">
                                <div class="col-12">
                                  <h6 class="mb-3">Nomor Registrasi : <?=$data['invoice']?></h6>
                                </div>
                                <div class="col-lg-6 col-sm-12  text-start">
                                    <div class="mb-3 row">
                                      <span  class="col-sm-4">Nama</span>
                                      <span class="col-sm-8 fw-bolder">: <?=$data['nama']?></span>
                                    </div>
                                    <div class="mb-3 row">
                                      <span  class="col-sm-4">No Hp</span>
                                      <span class="col-sm-8 fw-bolder">: <?=$data['nohp']?></span>
                                    </div>
                                    <div class="mb-3 row">
                                      <span  class="col-sm-4">Alamat</span>
                                      <span class="col-sm-8 fw-bolder">: <?=$data['alamat']?></span>
                                    </div>
                                    <div class="mb-3 row">
                                      <span  class="col-sm-4">Keterangan</span>
                                      <span class="col-sm-8 fw-bolder">: <?=$data['keterangan']?></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 text-start">
                                    <div class="mb-3 row">
                                      <span  class="col-sm-6">Paket</span>
                                      <span class="col-sm-6 fw-bolder">: <?=$data['packet']?></span>
                                    </div>
                                    <div class="mb-3 row">
                                      <span  class="col-sm-6">Bandwidth</span>
                                      <span class="col-sm-6 fw-bolder">: <?=$data['bandwidth']?></span>
                                    </div>
                                    <div class="mb-3 row">
                                      <span  class="col-sm-6">Harga</span>
                                      <span class="col-sm-6 fw-bolder">: <?=$data['price']?></span>
                                    </div>
                                    <div class="mb-3 row">
                                      <span  class="col-sm-6">Status Pemasangan</span>
                                      <span class="col-sm-6 p-2 fw-bolder badge badge-warning"><?=$data['status']?></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                  <input hidden type="text" name="id" value="<?=$data['id']?>">
                                  <input hidden type="text" name="customer_id" value="<?=$data['customer_id']?>">
                                  <input hidden type="text" name="packet_id" value="<?=$data['packet_id']?>">
                                  <button type="submit" class="btn btn-primary btn-sm">Konfirmasi Selesai</button>
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
                  <th>NO REG</th>
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