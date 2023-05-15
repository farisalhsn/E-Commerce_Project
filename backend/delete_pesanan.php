<?php

include('config/dbkoneksi.php');

$id = $_GET['iddelete'];
$dbh->query("DELETE FROM pesanan WHERE id=$id");

header('location:list_pesanan.php');
?>