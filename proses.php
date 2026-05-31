<!DOCTYPE html>
<html>
<head>
    <title>Proses Pemesanan</title>
</head>
<body bgcolor="#E9F2FC">

<?php

$nama = $_POST['nama'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];
$frame = $_POST['frame'];
$bayar = $_POST['bayar'];
$tanggal = $_POST['tanggal'];
$catatan = $_POST['catatan'];

if(
    empty($nama) ||
    empty($jk) ||
    empty($alamat) ||
    empty($hp) ||
    empty($email) ||
    empty($produk) ||
    empty($jumlah) ||
    empty($frame) ||
    empty($bayar) ||
    empty($tanggal) ||
    empty($catatan)
)
{
    echo "<center>";
    echo "<h2>Data belum lengkap!</h2>";
    echo "<p>Semua data wajib diisi.</p>";
    echo "<a href='javascript:history.back()'>Kembali ke Form</a>";
    echo "</center>";
}
else
{
    echo "<center>";

    echo "<h1>DATA PEMESANAN SEDANG DIPROSES</h1>";
    echo "<hr width='50%'>";

    echo "<h3>Detail Pemesanan</h3>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";

    echo "<tr><td>Nama</td><td>$nama</td></tr>";
    echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
    echo "<tr><td>Alamat</td><td>$alamat</td></tr>";
    echo "<tr><td>No HP</td><td>$hp</td></tr>";
    echo "<tr><td>Email</td><td>$email</td></tr>";
    echo "<tr><td>Produk</td><td>$produk</td></tr>";
    echo "<tr><td>Jumlah</td><td>$jumlah</td></tr>";
    echo "<tr><td>Ukuran Frame</td><td>$frame</td></tr>";
    echo "<tr><td>Pembayaran</td><td>$bayar</td></tr>";

    if(isset($_POST['aksesoris']))
    {
        $aksesoris = implode(", ", $_POST['aksesoris']);
    }
    else
    {
        $aksesoris = "Tidak Ada";
    }

    echo "<tr><td>Aksesoris</td><td>$aksesoris</td></tr>";

    echo "<tr><td>Tanggal Pengiriman</td><td>$tanggal</td></tr>";
    echo "<tr><td>Catatan</td><td>$catatan</td></tr>";

    echo "</table>";

    echo "<br>";
    echo "<h2>Terima kasih telah melakukan pemesanan.</h2>";
    echo "<h3>Pesanan Anda sedang diproses.</h3>";

    echo "</center>";
}

?>

</body>
</html>