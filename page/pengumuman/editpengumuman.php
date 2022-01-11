<?php

$id = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM tb_pengumuman WHERE id='$id'");

$tampil = $sql->fetch_assoc();

?>

<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Pengumuman</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Menu</a></li>
                            <li class="breadcrumb-item"><a href="?page=pengumuman">Pengumuman</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pengeditan Pengumuman</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Pengeditan Pengumuman</h3>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header border-0">
                                    <h4 class="mb-0">Silahkan Edit Data Pengumuman Yang Telah Anda Kirimkan</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Judul</label>
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-align-center"></i></span>
                                                </div>
                                                <input name="judul" class="form-control" value="<?= $tampil['judul']; ?>" type="text" required autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Isi Pengumuman</label>
                                            <div class="input-group input-group-merge input-group-alternative mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-notification-70"></i></span>
                                                </div>
                                                <textarea name="isi_pengumuman" class="form-control" rows="10" required><?= $tampil['isi_pengumuman']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="text-right">
                                            <a href="?page=pengumuman" class="btn btn-danger mt-4">Batal</a>
                                            <button type="submit" name="edit" class="btn btn-success mt-4">Edit Pengumuman</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<?php

if (isset($_POST['edit'])) {

    $judul = $_POST['judul'];
    $isi_pengumuman = $_POST['isi_pengumuman'];

    $sql = $koneksi->query("UPDATE tb_pengumuman SET judul='$judul', isi_pengumuman='$isi_pengumuman' WHERE id='$id'");

    if ($sql) {
?>
        <script>
            alert('Pengumuman Berhasil Diedit !');
            window.location.href = "?page=pengumuman";
        </script>
<?php
    }
}

?>