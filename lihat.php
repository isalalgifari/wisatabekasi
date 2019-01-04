<?php
include"konek/konek.php";

$as=mysql_query("select * from komen order by id desc");
while($sr=mysql_fetch_array($as)) {
	?>
	<hr>
	<p><?=$sr['tanggal'];?>
	<br><?=$sr['nama'];?>
	<br><?=$sr['email'];?>
	<br><?=$sr['komentar'];?>
	<?php
}
?>
<hr>