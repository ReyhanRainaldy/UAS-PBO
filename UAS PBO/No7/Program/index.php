<?php
include "hewan.php";
include "jenis.php";
include "kucing.php";
include "anjing.php";
include "burung.php";
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>UAS PBO Nomor 7</title>
    <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-utilities.css">
	<nav class="navbar navbar-expand" style="background-color: #dc3545;">
        <div class="container-fluid">
			<span class="navbar-brand mb-0 h1">Tabel Data Hewan</span>
		</div>
	</nav>
</head>

<br>
<div class="container">
	<div class="row">
		<div class="col-md-6 text-left">
		</div>
		<div class="col-md-10">
			<button onclick="location.href='tambahhewan.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br>
	<table table class="table table-bordered table-hover" width="50%">
		<thead>
			<tr class="table-info" style="text-align:center">
                <th>Nama</th>
                <th>Jenis</th>
                <th>Warna</th>
				<th>Jumlah Kaki</th>
                <th>Keluarga</th>
				<th>Aktivitas</th>
                <th>Suara</th>
                <th>Aksi</th>
			</tr>	
		</thead>
<tbody>
<?php
$query = "SELECT * FROM hewan";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_assoc($result)) {
    if ($row['jenis'] == "Kucing") {
        $hewan = new Kucing($row['nama'], $row['jenis'], $row['warna'], $row['kaki']);
    } elseif ($row['jenis'] == "Anjing") {
        $hewan = new Anjing($row['nama'], $row['jenis'], $row['warna'], $row['kaki']);
    } elseif ($row['jenis'] == "Burung") {
        $hewan = new Burung($row['nama'], $row['jenis'], $row['warna'], $row['kaki']);
    }
?>
            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['jenis'] ?></td>
                <td><?php echo $row['warna'] ?></td>
				<td><?php echo $hewan->jumlah_kaki() ?></td>
				<td><?php echo $hewan->jenis_keluarga() ?></td>
                <td><?php echo $hewan->jenis_aktivitas() ?></td>
                <td><?php echo $hewan->bersuara() ?></td>
                <td class="text-center">
					<a href="hapushewan.php?id=<?php echo $row['id'] ?>" onclick="return confirm('Hapus Data?')" class="btn btn-danger">Hapus</a>
			    </td>
            </tr>
<?php
}
?>