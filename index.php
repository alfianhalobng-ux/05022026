<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Data Santri</title>
<style>
*{box-sizing:border-box}
body{
    font-family:Arial,Helvetica,sans-serif;
    background:#eef2f7;
    padding:20px;
}
.card{
    background:#fff;
    padding:20px;
    border-radius:10px;
    box-shadow:0 6px 12px rgba(0,0,0,.1);
    max-width:1000px;
    margin:auto;
}
h2{color:#333}
table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}
th{
    background:#2563eb;
    color:#fff;
    padding:10px;
}
td{
    padding:10px;
    border-bottom:1px solid #ddd;
    text-align:center;
}
tr:hover{background:#f1f5f9}
.btn{
    padding:7px 14px;
    border-radius:6px;
    color:#fff;
    text-decoration:none;
    font-size:14px;
}
.btn-primary{background:#2563eb}
.btn-warning{background:#f59e0b}
.btn-danger{background:#dc2626}
.btn:hover{opacity:.85}
.actions a{margin:0 3px}
</style>
</head>
<body>

<div class="card">
<h2>Data Santri</h2>

<a href="tambah.php" class="btn btn-primary">+ Tambah Santri</a>

<table>
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Alamat</th>
    <th>Nilai</th>
    <th>Aksi</th>
</tr>

<?php
$no=1;
$data=mysqli_query($conn,"SELECT * FROM santri");
while($d=mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $d['nama'] ?></td>
    <td><?= $d['kelas'] ?></td>
    <td><?= $d['alamat'] ?></td>
    <td><?= $d['nilai'] ?></td>
    <td class="actions">
        <a href="edit.php?id=<?= $d['id'] ?>" class="btn btn-warning">Edit</a>
        <a href="hapus.php?id=<?= $d['id'] ?>" class="btn btn-danger"
           onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>
</div>

</body>
</html>
