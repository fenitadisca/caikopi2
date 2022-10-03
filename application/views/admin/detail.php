<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        <?= $title; ?>
    </h1>


</div>
<!-- /.container-fluid -->
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Data User</h2>
        <li> NIK : <?= $data_form->nik;?> </li>
        <h2> A. IDENTITAS KOPERASI</h2>
        <li> Nama Koperasi : <?= $data_form->nama_koperasi;?> </li>
        <li> Nomor Badan Hukum : <?= $data_form->nomor;?> </li>
        <li> Tanggal Badan Hukum : <?= $data_form->tanggal;?> </li>
        <li> Pengesahan Badan Hukum Koperasi : <?= $data_form->pengesahan;?> </li>
        <li> Tempat Kedudukan Koperasi : <?= $data_form->tempat_kedudukan;?> </li>
        <li> Notaris/Camat Pembuat Akta Koperasi : <?= $data_form->notaris;?> </li>
        <li> NPWP Koperasi : <?= $data_form->npwp;?> </li>

        <h2> Alamat</h2>
        <li> Nama Jalan : <?= $data_form->alamat_jalan;?> </li>
        <li> Kelurahan/Desa : <?= $data_form->kelurahan;?> </li>
        <li> Kecamatan : <?= $data_form->kecamatan;?> </li>
        <li> Kabupaten/Kota : <?= $data_form->kabupaten;?> </li>
        <li> Provinsi/D.I : <?= $data_form->provinsi;?> </li>
        <li> Kode Pos : <?= $data_form->kodepos;?> </li>
        <li> No. Selular (HP) : <?= $data_form->no_hp;?> </li>
        <li> No. Telp. Kantor : <?= $data_form->no_kantor;?> </li>
        <li> No. Faximili : <?= $data_form->no_fax;?> </li>
        <li> E-mail : <?= $data_form->email;?> </li>
        <li> Website : <?= $data_form->website;?> </li>
        <li> Catatan : <?= $data_form->catatan;?> </li>
        <li> Status Koperasi : <?= $data_form->status;?> </li>
        <li> Koperasi Skala Besar : <?= $data_form->skalabesar;?> </li>

        <h2> B.DATA LAINNYA</h2>
        <li> Status Koperasi : ?<?= $data_form->nik;?> </li>
        <li> Bentuk Koperasi : <?= $data_form->bentuk_koperasi;?> </li>
        <li> Jenis Koperasi : <?= $data_form->jenis_koperasi;?> </li>
        <li> Kelompok Koperasi : <?= $data_form->kelompok;?> </li>
        <li> Sektor Usaha : <?= $data_form->sektor;?> </li>
        <li> Koperasi Binaan : <?= $data_form->koperasi_binaan;?> </li>

        <h2>C. DATA PERUBAHAN ANGGARAN DASAR (PAD)</h2>
        <li> Pengesahan Badan Hukum Koperasi (oleh) : <?= $data_form->pengesahan_badan;?> </li>
        <li> Tempat Kedudukan Koperasi : <?= $data_form->tempatkedudukan2;?> </li>
        <li> Notaris/Camat Pembuat Akta Koperasi : <?= $data_form->notaris_koperasi;?> </li>
        <li> Nomor PAD (jika ada) : <?= $data_form->nomor_pad;?> </li>
        <li> Tanggal PAD (jika ada) : <?= $data_form->tanggal_pad;?> </li>
        <li> Notaris/Camat Pembuat Akta PAD : <?= $data_form->notaris_pad;?> </li>
        <li> Jangka Waktu Pendirian : <?= $data_form->jangka_waktu;?> </li>
        <li> Alasan PAD : <?= $data_form->alasan;?> </li>

        <h2> D. DATA PERIZINAN</h2>
        <h3> 1. Surat Izin Usaha Perdagangan</h3>
        <li> Nomor : <?= $data_form->nomor_usaha;?> </li>
        <li> Tanggal Terbit : <?= $data_form->terbit_usaha;?> </li>
        <li> Dikeluarkan oleh : <?= $data_form->dikeluarkan_usaha;?> </li>
        <li> Nama Penanggungjawab : <?= $data_form->pjawab_usaha;?> </li>

        <h3> 2. Surat Izin Tempat Usaha</h3>
        <li> Nomor : <?= $data_form->nomor_tempat;?> </li>
        <li> Tanggal Terbit : <?= $data_form->terbit_tempat;?> </li>
        <li> Dikeluarkan oleh : <?= $data_form->dikeluarkan_tempat;?> </li>
        <li> Masa Berlaku : <?= $data_form->berlaku_tempat;?> </li>
        <li> Nama Penanggungjawab : <?= $data_form->pjawab_tempat;?> </li>

        <h2> D. DATA PERIZINAN</h2>
        <li> Nomor Rekening Bank 1 : <?= $data_form->norek_1;?> </li>
        <li> Nama Pemilik Rekening : <?= $data_form->pemilik_norek1;?> </li>
        <li> Nama Bank/Cabang : <?= $data_form->bank_norek1;?> </li>
        <li> Nomor Rekening Bank 2 : <?= $data_form->norek_2;?> </li>
        <li> Nama Pemilik Rekening : <?= $data_form->pemilik_norek2;?> </li>
        <li> Nama Bank/Cabang : <?= $data_form->bank_norek2;?> </li>

        <h2> E. DATA UNIT SIMPAN PINJAM(USP)</h2>
        <li> Apakah koperasi memiliki Usaha Simpan Pinjam(USP)? : <?= $data_form->usp;?> </li>
        <!--usp/jikaiya-->
        <li> Nomor Surat Izin Simpan Pinjam : <?= $data_form->noizin_simpanpinjam;?> </li>
        <li> Tanggal Terbit : <?= $data_form->terbit_simpanpinjam;?> </li>
        <li> Dikeluarkan oleh : <?= $data_form->dikeluarkan_simpanpinjam;?> </li>
        <li> Masa Berlaku : <?= $data_form->berlaku_simpanpinjam;?> </li>
        <li> Nama Penanggungjawab : <?= $data_form->pjawab_simpanpinjam;?> </li>
        <li> Nomor Sertifikat Dewan Syari'ah Nasional : <?= $data_form->nosertif_syariah;?> </li>
        <li> Tanggal Terbit : <?= $data_form->terbit_syariah;?> </li>
        <li> Dikeluarkan oleh : <?= $data_form->dikeluarkan_syariah;?> </li>
        <li> Masa Berlaku : <?= $data_form->berlaku_syariah;?> </li>
        <li> Nama Penanggungjawab : <?= $data_form->pjawab_syariah;?> </li>
        <li> Nomor Sertifikat Rekomendasi MUI : <?= $data_form->nosertif_mui;?> </li>
        <li> Tanggal Terbit : <?= $data_form->terbit_mui;?> </li>
        <li> Dikeluarkan oleh : <?= $data_form->dikeluarkan_mui;?> </li>
        <li> Masa Berlaku : <?= $data_form->berlaku_mui;?> </li>
        <li> Nama Penanggungjawab : <?= $data_form->pjawab_mui;?> </li>
    </div>
</body>

</html>

<!-- End of Main Content -->