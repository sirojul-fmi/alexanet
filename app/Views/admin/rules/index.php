<?=$this->extend('layout/admin_layout')?>

<?=$this->section('title')?>
<title>Rules | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<!-- container-fluid start -->
<div class="container-fluid">
  <div class="page-header">
    <h3>Data Rules</h3>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Master</li>
      <li class="breadcrumb-item">Rules</li>
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
          <a href="<?=base_url()?>admin/rules/add" class="btn btn-primary btn-sm">Tambah</a>
        </div>
        <div class="card-body">
          <div class="table-responsive mb-4">
            <table class="display datatables" id="packet-datatable">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>LOKASI</th>
                  <th>PERANGKAT</th>
                  <th>LUAS JANGKAUAN</th>
                  <th>KESIMPULAN</th>
                  <th>AKSI</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; foreach($rules as $data): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td>
                    <?php  
                      foreach ($premis as $lokasi) {
                        echo ($lokasi['premis_code'] == $data['rule1']) ? $lokasi['premis'] : '';
                      }
                    ?>
                  </td>
                  <td>
                    <?php  
                      foreach ($premis as $perangkat) {
                        echo ($perangkat['premis_code'] == $data['rule2']) ? $perangkat['premis'] : '';
                      }
                    ?>
                  </td>
                  <td>
                    <?php  
                      foreach ($premis as $jangkauan1) {
                        echo ($jangkauan1['premis_code'] == $data['rule3']) ? $jangkauan1['premis'] : '';
                      }
                    ?>
                    &
                    <?php  
                      foreach ($premis as $jangkauan2) {
                        echo ($jangkauan2['premis_code'] == $data['rule4']) ? $jangkauan2['premis'] : '';
                      }
                    ?>
                  </td>
                  <td>
                    <?php  
                      foreach($packet as $paket) {
                        echo ($paket['packet_code'] == $data['conclusion']) ? $paket['packet'] : '';
                      }
                    ?>
                  </td>
                  <td class="text-center">
                    <a href="<?=base_url()?>admin/rules/edit/<?=$data['id']?>" class="btn btn-warning btn-sm">edit</a>
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
                            <form action="rules/delete/<?=$data['id']?>" method="post">
                              <input type="text" name="rulesId" value="<?=$data['id']?>" hidden>
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
                  <th>LOKASI</th>
                  <th>PERANGKAT</th>
                  <th>LUAS JANGKAUAN</th>
                  <th>KESIMPULAN</th>
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