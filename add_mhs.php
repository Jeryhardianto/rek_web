<?php
header('Content-Type:text/xml');
if (isset($_POST['simpan'])) {
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$jurusan = $_POST['jurusan'];
	$semester = $_POST['semester'];
	$jenis = $_POST['jenis'];
	$nilai = $_POST['nilai'];


	include_once("koneksi.php");
	$result = mysqli_query($mysqli, "INSERT INTO t_mhs(nim,nama,jurusan,semester,jenis,nilai) 
	VALUES('$nim','$nama','$jurusan','$semester','$jenis','$nilai')");

	if ($result) {

		echo '<xml>';
		echo '<data>';
		echo '<status>1</status><message>data Insert</message>';
		echo '</data>';
		echo '</xml>';
	}
} else {
	echo '<xml><error><no>404</no><message>one or more parameter needed</message></error></xml>';
}