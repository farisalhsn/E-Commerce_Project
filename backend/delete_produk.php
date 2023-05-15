<?php

include('config/dbkoneksi.php');

$id = $_GET['iddelete'];
$dbh->query("DELETE FROM produk WHERE id=$id");

header('location:list_produk.php');
?>