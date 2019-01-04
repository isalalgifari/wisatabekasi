<?php
include"../../konek/konek.php";
$as	= $_GET['as'];

$sql 	= 'delete from komen where komentar="'.$as.'"';
$sr	= mysql_query($sql, $koneksi);
header("location: index.php");
?>