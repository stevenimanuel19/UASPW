CREATE DATABASE db_kelas;
USE db_kelas;

-- Membuat tabel kelas_a
CREATE TABLE kelas_a (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jabatan VARCHAR(50),
    nama VARCHAR(50),
    no_induk VARCHAR(20)
);

CREATE TABLE kelas_b (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jabatan VARCHAR(50),
    nama VARCHAR(50),
    no_induk VARCHAR(20)
);

CREATE TABLE kelas_c (
    id INT AUTO_INCREMENT PRIMARY KEY,
    jabatan VARCHAR(50),
    nama VARCHAR(50),
    no_induk VARCHAR(20)
);
