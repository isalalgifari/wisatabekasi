<?php
include"konek/konek.php";
$nama=addslashes($_POST['nama']);
$email=addslashes($_POST['email']);
$komentar=addslashes($_POST['komen']);
$tanggal=gmdate("d/m/y", time()+60*60*7);
$post = $_POST['post'];

if($_POST['post']){
	$as =mysql_query("insert into komen values ('','$nama','$email','$komentar','$tanggal')");
	if($as){
		?>
			<script>
				document.location="pura agung tirta bhuana.php";
			</script>
		<?php
	} else {
		?>
			<script>
				alert('gagal posting');
				document.location="pura agung tirta bhuana.php";
			</script>
		<?php
	}
}
?>
<hr>