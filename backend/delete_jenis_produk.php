<?php

include('config/dbkoneksi.php');

$id = $_GET['iddelete'];
$dbh->query("DELETE FROM jenis_produk WHERE id=$id");

header('location:list_jenis_produk.php');
?>