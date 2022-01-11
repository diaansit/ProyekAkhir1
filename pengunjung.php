<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Creative Tim">
        <title>Karya Ilmiah</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
        <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
    </head>
<?php

// $sql1 = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE nim='$nim_user' AND status='Diterima'");
// $karyailmiahditerima = mysqli_num_rows($sql1);

// $sql2 = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE nim='$nim_user' AND status='Ditolak'");
// $karyailmiahditolak = mysqli_num_rows($sql2);

// $sql3 = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE nim='$nim_user' AND status='Menunggu'");
// $karyailmiahmenunggu = mysqli_num_rows($sql3);
$koneksi = new mysqli("localhost", "root", "", "klubkarya");
$sql4 = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE status='Diterima'");
$karyailmiah1 = mysqli_num_rows($sql4);

// $sql5 = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE status='Ditolak'");
// $karyailmiah2 = mysqli_num_rows($sql5);

// $sql6 = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE status='Menunggu'");
// $karyailmiah3 = mysqli_num_rows($sql6);

// $sql7 = $koneksi->query("SELECT * FROM tb_user WHERE username != '' AND role='Mahasiswa'");
// $jumlahanggota = mysqli_num_rows($sql7);

//?>
<body>


    <div class="header bg-primary pb-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Selamat Datang di  Sistem Klub Karya Ilmiah!!!!!!</h6>
                        <br>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="registrasi.php">Berniat Bergabung?</a></li>
                                
                            </ol>
                        </nav>
                    </div>

                    <div class="col-lg-6 col-5 text-right">
                        <a href="login.php" class="btn btn-default">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card bg-default shadow">
                    <div class="card-header bg-transparent border-0">
                        <h3 class="text-white mb-0">Berikut Karya Ilmiah Yang Diterima Untuk Ditampilkan Di Website Ini</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-dark table-flush">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col" class="text-center">Judul</th>
                                    <th scope="col" class="text-center">Foto & Nama Pengirim</th>
                                    <th scope="col" class="text-center">NIM Pengirim</th>
                                    <th scope="col" class="text-center">Prodi Pengirim</th>
                                    <th scope="col" class="text-center">File</th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php
                                $no = 1;

                                $sql = $koneksi->query("SELECT * FROM tb_karyailmiah WHERE status='Diterima'");

                                while ($data = $sql->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td class="text-center">
                                            <?= $no++; ?>
                                        </td>
                                        <td>
                                            <?= $data['judul']; ?>
                                        </td>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <a href="#" class="avatar rounded-circle mr-3">
                                                    <img src="profileimages/<?= $data['avatar']; ?>">
                                                </a>
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm"><?= $data['nama']; ?></span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="text-center">
                                            <?= $data['nim']; ?>
                                        </td>
                                        <td class="text-center">
                                            <?= $data['prodi']; ?>
                                        </td>
                                        <td>
                                            <a href="karyailmiah/<?= $data['file']; ?>" target="_blank"><?= $data['file']; ?></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Visi & Misi Klub Karya Ilmiah Institut Teknologi Del</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <img class="img-fluid" style="width:350px" src="img/karyailmiah.jpg">
                            </div>

                            <br>
                            <h3 class="profile-username text-center"><b>Klub Karya Ilmiah Institut Teknologi DEL</b></h3>
                            <br>

                            <p class="text-justify">
                            Klub penulisan karya ilmiah  beranggotakan mahasiswa IT Del yang terpanggil untuk meningkatkan kemampuannya dalam menulis karya ilmiah. Visi dan misi pembentukan klub ini adalah sebagai berikut:
                            </p>
                            <p class="text-justify">
                            Visi<br>
                            Meningkatkan kreativitas mahasiswa dalam menulis sehingga karya ilmiah mereka diakui pada tingkat provinsi dan nasional.
                            <br>
                            Misi<br>
                            1.	Membangkitkan kreativitas menulis dengan memberika  pelatihan dan seminar.
                            <br>
                            2. 	Memberikan bimbingan kepada mahasiswa yang akan mengikuti kompetisi baik lokal maupun nasional.
                            <br>
                            3.  Membangkitkan gairah menulis dengan melaksanakan kompetisi menulis karya ilmiah berhadiah.
                            <br>
                            </p>
                        </div>
                    </div>
                </div>
    

                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><b>Struktur Organisasi Klub Karya Ilmiah</b></h3>
                        </div>
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="elevation-3 img-fluid rounded" style="height:525px" src="img/hirarki.png">
                            </div>
                        </div>
                    </div>
                </div>

</body>





    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-12">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2020 <a href="#" class="font-weight-bold ml-1">Kelompok-09 PA 1 D3 TI</a>
                </div>
            </div>
        </div>
    </footer>
</div>