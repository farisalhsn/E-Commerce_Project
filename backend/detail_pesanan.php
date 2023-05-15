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
    $sql = "SELECT * FROM pesanan WHERE id=?";
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
                    <h1 class="mt-4">Detail Pesanan</h1>
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
                                        <td>Tanggal</td>
                                        <td>
                                            <?= $row['tanggal'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Quantity</td>
                                        <td>
                                            <?= $row['qty'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Total Harga</td>
                                        <td>
                                            <?= $row['total_harga'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nama Pemesan</td>
                                        <td>
                                            <?= $row['nama_pemesan'] ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>
                                            <?= $row['alamat'] ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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