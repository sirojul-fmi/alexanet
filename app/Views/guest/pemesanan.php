<?=$this->extend('layout/guest_layout.php')?>

<?=$this->section('title')?>
<title>Pemesanan | Alexanet</title>
<?=$this->endSection()?>

<?=$this->section('content')?>
<section class="section-padding">
    <div class="container">
        <div class="page-header">
            <h3>Formulir Pelanggan</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Isi Data Diri</li>
                <li class="breadcrumb-item">Pilih Rekomendasi Paket</li>
            </ol>
        </div>
    </div>

    <div class="container">
        <div class="card p-4 shadow border-0">
            <div class="card-body">
                <form action="<?=base_url()?>pemesanan/store" method="post">
                <div class="row">
                    <h5>Form Biodata Diri</h5>
                    <div class="col-lg-6 col-sm-12">
                        <div class="form-group mt-4 mb-3">
                            <label for="namaPelanggan" class="">Nama Lengkap</label>
                            <input type="text" class="form-control" name="namaPelanggan" placeholder="nama lengkap" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nphp" class="">No.Hp</label>
                            <input type="text" class="form-control" name="nohp" placeholder="No hp" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="alamat" class="">Alamat(Harap menuliskan alamat selengkap mungkin)</label>
                            <textarea rows="4" name="alamat" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mt-4">
                        <div class="form-group mb-3">
                            <label for="fotoRumah" class="">Foto Rumah(Optional)</label>
                            <input type="file" class="form-control" name="fotoRumah">
                        </div>
                        <div class="form-group mb-3">
                            <label for="paket" class="">Klik tombol dibawah untuk memilih paket</label>
                            <button type="button" class="btn btn-warning border-0 rounded-0 shadow" data-bs-toggle="modal" data-bs-target="#modalQ1">Cek Kebutuhan WiFi Anda</button>
                        </div>
                        <div id="data-paket">
                            <div class="form-group mb-2">
                                <label for="paket" class="">Paket WiFi</label>
                                <input type="text" name="paket" id="paketWifi" class="form-control" readonly>
                                <input type="text" name="kodePaket" id="paketCode" class="form-control" hidden>
                            </div>
                            <div class="form-group mb-2">
                                <label for="keterangan" class="">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-success rounded-1 shadow float-end" type="submit">Simpan</button>
                            </div>
                        </div>
                        <!-- modal start -->
                        <div class="modal modal-lg fade border" id="modalQ1" aria-hidden="true" aria-labelledby="modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalQ1">Pertanyaan 1</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5">
                                        <div class="form-group">
                                            <label for="">Dimana anda akan memasang WiFi anda ?</label>
                                            <select name="q1" id="q1" class="form-control" required>
                                                <!-- <option value="">Pilih...</option> -->
                                                <?php 
                                                    foreach ($premis as $data) : 
                                                        if ($data['category_code'] == 'C1') {
                                                ?>
                                                    <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                                                <?php 
                                                        } 
                                                    endforeach; 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 m-0">
                                        <button type="button" id="btn-q1" class="btn btn-primary btn-sm" data-bs-target="#modalQ2" data-bs-toggle="modal" data-bs-dismiss="modal"><i data-feather="arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal modal-lg fade" id="modalQ2" aria-hidden="true" aria-labelledby="modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalQ2">Pertanyaan 2</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5">
                                        <div class="form-group">
                                            <label for="">Berapa banyak perangkat yang akan tersambung WiFi anda ? ?</label>
                                            <select name="q2" id="q2" class="form-control">
                                                <!-- <option value="">Pilih...</option> -->
                                                <?php 
                                                    foreach ($premis as $data) : 
                                                        if ($data['category_code'] == 'C2') {
                                                ?>
                                                    <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                                                <?php 
                                                        } 
                                                    endforeach; 
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 m-0">
                                        <button type="button" id="btn-q2" class="btn btn-primary btn-sm" data-bs-target="#modalQ3" data-bs-toggle="modal" data-bs-dismiss="modal"><i data-feather="arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal modal-lg fade" id="modalQ3" aria-hidden="true" aria-labelledby="modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="modalQ3">Pertanyaan 3</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-5">
                                        <div class="form-group">
                                            <label for="">Seberapa luas jangkauan jangkauan WiFi yang anda perlukan ?</label>
                                            <div class="row">
                                                <div class="col">
                                                    <select name="q3" id="q3" class="form-control">
                                                        <!-- <option value="">Pilih...</option> -->
                                                        <?php 
                                                            foreach ($premis as $data) : 
                                                                if ($data['category_code'] == 'C3') {
                                                        ?>
                                                            <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                                                        <?php 
                                                                } 
                                                            endforeach; 
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col">
                                                    <select name="q4" id="q4" class="form-control">
                                                        <!-- <option value="">Pilih...</option> -->
                                                        <?php 
                                                            foreach ($premis as $data) : 
                                                                if ($data['category_code'] == 'C4') {
                                                        ?>
                                                            <option value="<?=$data['premis_code']?>"><?=$data['premis']?></option>
                                                        <?php 
                                                                } 
                                                            endforeach; 
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 m-0">
                                        <button type="button" type="button" class="btn btn-primary btn-sm" id="btn-selesai" data-bs-target="#result" data-bs-toggle="modal" data-bs-dismiss="modal">Check</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal modal-lg fade" id="result" aria-hidden="true" aria-labelledby="modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="result">Hasil</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-4">
                                        <h6>Paket WiFi yang kami rekomendasikan adalah sebagai berikut :</h6>
                                        <div class="row mt-3 mb-3">
                                            <div class="col-lg-4">Paket</div>
                                            <div class="col-lg-1">:</div>
                                            <div class="col-lg-7" id="result-paket"></div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-lg-4">Bandwidth</div>
                                            <div class="col-lg-1">:</div>
                                            <div class="col-lg-7" id="result-bandwidth"></div>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-lg-4">Harga</div>
                                            <div class="col-lg-1">:</div>
                                            <div class="col-lg-7" id="result-harga"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 m-0">
                                        <button type="button" id="btn-simpan" data-url="<?=base_url('check/')?>" class="btn btn-primary btn-sm" data-bs-target="#result" data-bs-toggle="modal" data-bs-dismiss="modal">Selesai</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal ends -->
                    </div>
                </div> <!-- end row -->
                </form>
            </div>
        </div>
    </div>
</section>
<?=$this->endSection()?>