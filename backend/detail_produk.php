<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<?php include('plugins/header.php'); ?>
<?php include('config/dbkoneksi.php'); ?>
<?php
    $_id = $_GET['id'];
    // select * from pelanggan where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pelanggan a
    //INNER JOIN jenis_pelanggan b ON a.jenis_pelanggan_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
    //echo 'NAMA pelanggan ' . $row['nama'];
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
                    <h1 class="mt-4">Detail Produk</h1>
                    <!-- DASHBOARD -->

                    <!-- MAIN KONTEN -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>
                                            <?= $row['id'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kode</td>
                                        <td>
                                            <?= $row['kode'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Produk</td>
                                        <td>
                                            <?= $row['nama'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ukuran</td>
                                        <td>
                                            <?= $row['ukuran'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Warna</td>
                                        <td>
                                            <?= $row['warna'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>
                                            <?= $row['harga'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>
                                            <?= $row['stok'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>
                                        <?php if ($row['jenis_produk_id'] == "1") {
                                                    echo "Jaket";
                                                } elseif ($row['jenis_produk_id'] == "2") {
                                                    echo "Kaos";
                                                } else {
                                                    echo "Celana";
                                                } ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <a class="btn btn-primary" href="tambah_pesanan.php?id=<?= $row['id'] ?>">Checkout</a>
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