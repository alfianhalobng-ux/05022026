<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Santri</title>
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
.btn-success{background:#16a34a}
.btn-secondary{background:#6b7280}
.btn:hover{opacity:.85}
</style>
</head>
<body>

<div class="card">
<h2>Tambah Data Santri</h2>

<form method="post">
<label>Nama</label>
<input type="text" name="nama" required><br><br>

<label>Kelas</label>
<input type="text" name="kelas" required><br><br>

<label>Alamat</label>
<textarea name="alamat" required></textarea><br><br>

<label>Nilai</label>
<input type="number" name="nilai" required><br><br>

<button name="simpan" class="btn btn-success">Simpan</button>
<a href="index.php" class="btn btn-secondary">Kembali</a>
</form>
</div>

<?php
if(isset($_POST['simpan'])){
mysqli_query($conn,"INSERT INTO santri VALUES(
'',
'$_POST[nama]',
'$_POST[kelas]',
'$_POST[alamat]',
'$_POST[nilai]'
)");
header("location:index.php");
}
?>

</body>
</html>
