<?=$this->extend('layout/admin_layout')?>

<?=$this->section('title')?>
<title>Packet | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Data Packet</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Packet</li>
      <li class="breadcrumb-item">Index</li>
    </ol>
  </div>
</div>
<!-- container fluid start -->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <a href="<?=base_url()?>admin/packet/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
          <div class="table-responsive mb-4">
            <table class="display datatables" id="packet-datatable">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>PACKET CODE</th>
                  <th>PACKET</th>
                  <th>BANDWIDTH</th>
                  <th>PRICE</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($packet as $data): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $data['packet_code'] ?></td>
                  <td><?= $data['packet'] ?></td>
                  <td><?= $data['bandwidth'] ?></td>
                  <td><?= $data['price'] ?></td>
                  <td class="text-center">
                    <a href="<?=base_url()?>admin/packet/edit/<?=$data['id']?>" class="btn btn-warning btn-sm">edit</a>
                    <a type="button" data-bs-toggle="modal" data-bs-target="#modalHapus<?=$data['id']?>" class="btn btn-danger btn-sm btnHapus">
                      hapus
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
                            <form action="packet/delete/<?=$data['id']?>" method="post">
                              <input type="text" name="packetId" value="<?=$data['id']?>" hidden>
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
                  <th>PACKET CODE</th>
                  <th>PACKET</th>
                  <th>BANDWIDTH</th>
                  <th>PRICE</th>
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
<?=$this->endSection()?>