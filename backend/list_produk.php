<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<?php include('plugins/header.php'); ?>
<?php include('config/dbkoneksi.php'); ?>
<?php
$sql = "SELECT * FROM produk";
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
                    <h1 class="mt-4">List Produk</h1>
                    
                    <!-- DASHBOARD -->

                    <!-- MAIN KONTEN -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Tabel
                        </div>

                        <div class="card-body">
                        <a class="btn btn-primary" href="tambah_produk.php?id=<?= $row['id'] ?>">Tambahkan Data</a>
                            <br></br>
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Ukuran</th>
                                        <th>Warna</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Jenis Produk</th>
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
                                            <td><?php echo $nomor; ?></td>
                                            <td><?php echo $row['kode']; ?></td>
                                            <td><?php echo $row['nama']; ?></td>
                                            <td><?php echo $row['ukuran']; ?></td>
                                            <td><?php echo $row['warna']; ?></td>
                                            <td><?php echo $row['stok']; ?></td>
                                            <td><?php echo $row['harga']; ?></td>
                                            <td>
                                                <?php if ($row['jenis_produk_id'] == "1") {
                                                    echo "Jaket";
                                                } elseif ($row['jenis_produk_id'] == "2") {
                                                    echo "Kaos";
                                                } else {
                                                    echo "Celana";
                                                } ?>
                                            </td>
                                            <td>
                                                <!-- <a class="btn btn-primary" href="tambah_pesanan.php?id=<?= $row['id'] ?>">Beli</a> -->
                                                <a class="btn btn-success"
                                                    href="detail_produk.php?id=<?= $row['id'] ?>">Detail</a>
                                                <a class="btn btn-danger" href="edit/edit_produk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                <a class="btn btn-warning" href="delete/delete_produk.php?iddelete=<?= $row['id'] ?>"
                                                    onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <div class="modal fade" id="modal-default">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Default Modal</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>One fine body&hellip;</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
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