<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_kelas";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jabatan = $_POST["jabatan"];
    $nama = $_POST["nama"];
    $no_induk = $_POST["no_induk"];
    $kelas = $_GET["kelas"];

    $sql = "INSERT INTO $kelas (jabatan, nama, no_induk) VALUES ('$jabatan', '$nama', '$no_induk')";

    if ($conn->query($sql) === TRUE) {
        // Redirect ke halaman kelas yang sesuai
        header("Location: " . $kelas . ".php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
