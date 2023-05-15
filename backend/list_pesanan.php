<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<?php include('plugins/header.php'); ?>
<?php include('config/dbkoneksi.php'); ?>
<?php
$sql = "SELECT * FROM pesanan";
$rs = $dbh->query($sql);
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

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Qty</th>
                                        <th>Total Harga</th>
                                        <th>Nama Pemesan</th>
                                        <th>Alamat</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 0;
                                    foreach ($rs as $row) {
                                        $nomor++
                                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $nomor; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['tanggal']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['qty']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['total_harga']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['nama_pemesan']; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['alamat']; ?>
                                            </td>
                                            <td>
                                                <!-- <a class="btn btn-primary" href="tambah_pesanan.php?id=<?= $row['id'] ?>">Beli</a> -->
                                                <a class="btn btn-success"
                                                    href="detail_pesanan.php?id=<?= $row['id'] ?>">Detail</a>
                                                <a class="btn btn-danger" href="edit/edit_pesanan.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                <a class="btn btn-warning" href="delete/delete_pesanan.php?iddelete=<?= $row['id'] ?>"
                                                    onclick="if(!confirm('Anda Yakin Hapus Data Pesanan <?= $row['nama_pemesan'] ?>?')) {return false}">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
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