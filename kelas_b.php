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

// Mengambil data dari tabel kelas_b
$sql = "SELECT id, jabatan, nama, no_induk FROM kelas_b";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Kelas B</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="nav">
    <div class="nav-title">Sistem Kelas</div>
    <div class="nav-page">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About</a></li>
        </ul>
    </div>
</div>

<div class="block">
    <div class="block-judul">Kelas B</div>
    <form action="submit_data.php?kelas=kelas_b" method="POST">
        <div class="block-isi-data">
            <div class="block-jabatan">
                <label for="jabatan">Jabatan:</label><br>
                <input type="text" id="jabatan" name="jabatan" class="input-text" required>
            </div>
            <div class="block-nama">
                <label for="nama">Nama:</label><br>
                <input type="text" id="nama" name="nama" class="input-text" required>
            </div>
            <div class="block-nomor">
                <label for="no_induk">Nomor Induk:</label><br>
                <input type="number" id="no_induk" name="no_induk" class="input-number" required>
            </div>
            <button type="submit" class="submit-button">Submit</button>
        </div>
    </form>
</div>

<div id="resultContainer">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='block'>";
            echo "<div class='block-judul'>Data yang diinput:</div>";
            echo "<div class='block-isi-data'>";
            echo "<div class='block-jabatan'>Jabatan: <br>" . $row["jabatan"] . "</div>";
            echo "<div class='block-nama'>Nama: <br>" . $row["nama"] . "</div>";
            echo "<div class='block-nomor'>Nomor Induk: <br>" . $row["no_induk"] . "</div>";
            echo "<form action='delete_data.php' method='POST' style='display:inline;'>";
            echo "<input type='hidden' name='id' value='" . $row["id"] . "'>";
            echo "<input type='hidden' name='kelas' value='kelas_b'>";
            echo "<button type='submit' class='delete-button'>Delete</button>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "<div class='block'>Tidak ada data</div>";
    }
    $conn->close();
    ?>
</div>

</body>
</html>
