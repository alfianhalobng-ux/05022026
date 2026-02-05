<?php
include 'koneksi.php';
$id=$_GET['id'];
$data=mysqli_query($conn,"SELECT * FROM santri WHERE id='$id'");
$d=mysqli_fetch_array($data);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Santri</title>
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
    max-width:500px;
    margin:auto;
}
h2{color:#333}
label{font-weight:bold}
input,textarea{
    width:100%;
    padding:8px;
    margin-top:5px;
    border-radius:6px;
    border:1px solid #ccc;
}
textarea{height:80px;resize:none}
.btn{
    padding:8px 14px;
    border-radius:6px;
    color:#fff;
    text-decoration:none;
    border:none;
}
.btn-warning{background:#f59e0b}
.btn-secondary{background:#6b7280}
.btn:hover{opacity:.85}
</style>
</head>
<body>

<div class="card">
<h2>Edit Data Santri</h2>

<form method="post">
<label>Nama</label>
<input type="text" name="nama" value="<?= $d['nama'] ?>" required><br><br>

<label>Kelas</label>
<input type="text" name="kelas" value="<?= $d['kelas'] ?>" required><br><br>

<label>Alamat</label>
<textarea name="alamat" required><?= $d['alamat'] ?></textarea><br><br>

<label>Nilai</label>
<input type="number" name="nilai" value="<?= $d['nilai'] ?>" required><br><br>

<button name="update" class="btn btn-warning">Update</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php
if(isset($_POST['update'])){
mysqli_query($conn,"UPDATE santri SET
nama='$_POST[nama]',
kelas='$_POST[kelas]',
alamat='$_POST[alamat]',
nilai='$_POST[nilai]'
WHERE id='$id'");
header("location:index.php");
}
?>

</body>
</html>
