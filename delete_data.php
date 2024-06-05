<?php
$servername = "localhost"; // atau IP server database
$username = "root";    // ganti dengan username database Anda
$password = "";    // ganti dengan password database Anda
$dbname = "db_kelas";      // nama database Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengambil ID dan kelas dari form
$id = $_POST['id'];
$kelas = $_POST['kelas'];

// Menghapus data dari tabel yang sesuai
$sql = "DELETE FROM $kelas WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi
$conn->close();

// Redirect kembali ke halaman kelas yang sesuai setelah menghapus data
header("Location: " . $kelas . ".php");
exit();
?>
