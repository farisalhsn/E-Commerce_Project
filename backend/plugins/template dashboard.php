<!DOCTYPE html>
<html lang="en">
<!-- HEADER -->
<?php include('plugins/header.php'); ?>
<?php include('dbkoneksi.php'); ?>
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
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <!-- DASHBOARD -->

                    <!-- MAIN KONTEN -->
                    <button type="button" class="btn btn-success data-toggle=" modal" data-target="#modal-default">
                        Tambah Data
                    </button>
                    <br>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            DataTable Example
                        </div>
                        <div class="card-body">

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Ukuran</th>
                                        <th>Warna</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                        <th>Tipe Pakaian</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 0;
                                    $query = mysqli_query($koneksi, "SELECT * FROM pakaian");
                                    while ($mhs = mysqli_fetch_array($query)) {
                                        $no++
                                            ?>
                                        <tr>
                                            <td>
                                                <?php echo $no; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['nama']; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['ukuran']; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['warna']; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['stok']; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['harga']; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['tipe_pakaian_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $mhs['action']; ?>
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

    <!-- MODAL -->
    <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
            <div class="modal-content bg-primary">
                <div class="modal-header">
                    <h4 class="modal-title">Primary Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-light">Save changes</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</body>

</html>