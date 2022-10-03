<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>

    <div class="col-md-8 pl-5 pb-4 pt-4">
        <form action="<?= base_url('form/insert')?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">NIK</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nik" aria-describedby="emailHelp"
                    placeholder="Masukan Nomor Induk Koperasi">
            </div>

            <div class="form-group row form-check pl-3">
                <label for="exampleInputEmail1">Form</label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="form" name="form">
                <label class="form-check-label" for="defaultCheck1">
                    Permohonan NIK/Sertifikat NIK
                </label>
                <br>
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" name="form">
                <label class="form-check-label" for="defaultCheck1">
                    Perubahan Data
                </label>
            </div>

            <p class="text-uppercase font-weight-bold pt-3">A. Identitas Koperasi</p>
            <div class="form-group">
                <label for="inputAddress">Nama Koperasi</label>
                <input type="text" class="form-control" id="namakoperasi" name="nama_koperasi" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Nomor Badan Hukum</label>
                <input type="text" class="form-control" id="nomorbadanhukum" name="nomor" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Tanggal Badan Hukum</label>
                <input type="date" class="form-control" id="tanggalbadanhukum" name="tanggal" placeholder="">
            </div>
            <div class="form-group row form-check pl-3 pt-1">
                <label for="exampleInputEmail1">Pengesahan Badan Hukum Koperasi</label>
                <br>
                <input class="form-check-input-inline" type="radio" name="pengesahan" id="exampleRadios2"
                    value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    1). Deputi Bidang Kelembagaan KUKM atas Nama Menteri
                </label>
                <br>
                <input class="form-check-input-inline" type="radio" name="pengesahan" id="exampleRadios2"
                    value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    2). Gubernur atas Nama Menteri
                </label>
                <br>
                <input class="form-check-input-inline" type="radio" name="pengesahan" id="exampleRadios2"
                    value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    3). Bupati/Walikota atas Nama Menteri
                </label>
                <br>
                <input class="form-check-input-inline" type="radio" name="pengesahan" id="exampleRadios2"
                    value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    0). Tidak Tahu
                </label>
            </div>
            <div class="form-group pt-2">
                <label for="inputAddress">Tempat Kedudukan Koperasi</label>
                <input type="text" class="form-control" id="tempatkedudukan" name="tempat_kedudukan" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Notaris/Camat Pembuat Akta Koperasi</label>
                <input type="text" class="form-control" id="notaris" name="notaris" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">NPWP Koperasi</label>
                <input type="text" class="form-control" id="npwp" name="npwp" placeholder="">
            </div>
            <p class="text-left pt-2 font-weight-bold">Alamat</p>
            <div class="form-group">
                <label for="inputAddress">Nama Jalan </label>
                <input type="text" class="form-control" id="alamat_jalan" name="alamat_jalan" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Kelurahan / Desa</label>
                <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Kecamatan</label>
                <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Kabupaten / Kota</label>
                <input type="text" class="form-control" id="kabupaten" name="kabupaten" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Provinsi / D.I</label>
                <input type="text" class="form-control" id="provinsi" nama="provinsi" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Kode POS</label>
                <input type="text" class="form-control" id="kodepos" name="kodepos" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">No. Selular (HP)</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">No. Telp. Kantor</label>
                <input type="text" class="form-control" id="no_kantor" name="no_kantor" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">No. Faximili</label>
                <input type="text" class="form-control" id="no_fax" name="no_fax" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                    placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Website</label>
                <input type="text" class="form-control" id="website" name="website" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Catatan</label>
                <input type="text" class="form-control" id="catatan" name="catatan" placeholder="">
            </div>
            <div class="form-group row form-check pl-3 pt-1">
                <label for="exampleInputEmail1">Status Koperasi</label>
                <br>
                <input class="form-check-input-inline" type="radio" name="status" id="status" value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    1). Aktif
                </label>
                <br>
                <input class="form-check-input-inline" type="radio" name="status" id="status" value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    2). Tidak Aktif
            </div>
            <div class="form-group row form-check pl-3 pt-1">
                <label for="exampleInputEmail1">Koperasi Skala Besar</label>
                <br>
                <input class="form-check-input-inline" type="radio" name="skalabesar" id="skalabesar" value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    1). Ya
                </label>
                <br>
                <input class="form-check-input-inline" type="radio" name="skalabesar" id="skalabesar" value="option2">
                <label class="form-check-label-inline" for="exampleRadios2">
                    2). Tidak
            </div>

            <div class="form-group">
                <label for="inputAddress">Nomor Sertifikat Dewan Syari'ah Nasional</label>
                <input type="text" class="form-control" id="nosertif_syariah" name="nosertif_syariah" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Tanggal Terbit</label>
                <input type="date" class="form-control" id="terbit_syariah" name="terbit_syariah" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Dikeluarkan oleh</label>
                <input type="text" class="form-control" id="dikeluarkan_syariah" name="dikeluarkan_syariah"
                    placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Masa Berlaku</label>
                <input type="date" class="form-control" id="berlaku_syariah" name="berlaku_syariah" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Nama Penanggungjawab</label>
                <input type="text" class="form-control" id="pjawab_syariah" name="pjawab_syariah" placeholder="">
            </div>

            <div class="form-group">
                <label for="inputAddress">Nomor Sertifikat Rekomendasi MUI</label>
                <input type="text" class="form-control" id="nosertif_mui" name="nosertif_mui" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Tanggal Terbit</label>
                <input type="date" class="form-control" id="terbit_mui" name="terbit_mui" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Dikeluarkan oleh</label>
                <input type="text" class="form-control" id="dikeluarkan_mui" name="dikeluarkan_mui" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Masa Berlaku</label>
                <input type="date" class="form-control" id="berlaku_mui" name="berlaku_mui" placeholder="">
            </div>
            <div class="form-group">
                <label for="inputAddress">Nama Penanggungjawab</label>
                <input type="text" class="form-control" id="pjawab_mui" name="pjawab_mui" placeholder="">
            </div>















            <button type="submit" class="btn btn-primary">Masukan</button>

        </form>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->