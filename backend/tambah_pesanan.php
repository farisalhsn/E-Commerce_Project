<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<?php include('plugins/header.php'); ?>
<?php include('config/dbkoneksi.php'); ?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);

$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>
<!-- HEADER END -->

<body class="sb-nav-fixed">
    <!-- NAVBAR -->
    <?php include('plugins/navbar.php'); ?>
    <!-- NAVBAR END -->
    <div id="layoutSidenav">
        <!-- SIDEBAR -->
        <?php include('plugins/sidebar.php'); ?>
        <!-- SIDEBAR END -->
        <div id="layoutSidenav_content">
            <main>
                <!-- DASHBOARD -->
                <div class="container-fluid px-4">
                    <h1 class="mt-4">List Pesanan</h1>

                    <!-- DASHBOARD -->

                    <!-- MAIN KONTEN -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel
                        </div>
                        <div class="card-body">

                            <form method="POST" action="proses_pesanan.php">
                                <div class="form-group row">
                                    <label for="nama_produk" class="col-4 col-form-label">Nama Produk</label>
                                    <div class="col-8">
                                        <div class="input-group">

                                            <input name="nama_produk" value="<?= $row['nama'] ?>" class="form-control"
                                                readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="harga" class="col-4 col-form-label">Harga</label>
                                    <div class="col-8">
                                        <div class="input-group">

                                            <input id="harga" name="harga" type="number" class="form-control"
                                                value="<?= $row['harga'] ?>" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="qty" class="col-4 col-form-label">Quantity</label>
                                    <div class="col-8">
                                        <div class="input-group">

                                            <input id="qty" name="qty" type="number" class="form-control" value=""
                                                placeholder="Masukkan Jumlah Pesanan">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                    <div class="col-8">
                                        <div class="input-group">

                                            <input id="tanggal" name="tanggal" value="<?php echo date('20y-m-d'); ?>"
                                                type="date" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
                                    <div class="col-8">
                                        <div class="input-group">

                                            <input id="nama_pemesan" name="nama_pemesan" value="" type="text"
                                                class="form-control" placeholder="Masukkan Nama Pemesan">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
                                    <div class="col-8">
                                        <div class="input-group">

                                            <input id="alamat_pemesan" name="alamat_pemesan" value="" type="text"
                                                class="form-control" placeholder="Masukkan Alamat Pemesan">
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="offset-4 col-8">
                                        <input type="submit" name="proses" type="submit" class="btn btn-primary"
                                            value="Simpan" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- MAIN KONTEN END -->
                </div>
            </main>
            <!-- FOOTER -->
            <?php include('plugins/footer.php'); ?>
            <!-- FOOTER END -->
        </div>
    </div>


</body>

</html>