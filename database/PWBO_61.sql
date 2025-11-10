-- Database schema and sample data for PWBO_61 application
-- Import this file using phpMyAdmin or the MySQL client

CREATE DATABASE IF NOT EXISTS `PWBO_61`
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `PWBO_61`;

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(100) NOT NULL,
  `nim` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `jurusan` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_mahasiswa_nim` (`nim`),
  UNIQUE KEY `uniq_mahasiswa_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `mahasiswa` (`nama`, `nim`, `email`, `jurusan`) VALUES
  ('Galih Havid Pramana', '211050001', 'galih.pramana@example.com', 'Teknik Informatika'),
  ('Galih Havid Pramana', '211050002', 'galih.pramana@example.com', 'Sistem Informasi'),
  ('Nadia Permata', '211050003', 'nadia.permata@example.com', 'Bisnis Digital');

DROP TABLE IF EXISTS `matakuliah`;
CREATE TABLE `matakuliah` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `kode_mk` VARCHAR(20) NOT NULL,
  `nama_mk` VARCHAR(120) NOT NULL,
  `jns_mk` VARCHAR(50) NOT NULL,
  `sks` TINYINT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_matakuliah_kode` (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `matakuliah` (`kode_mk`, `nama_mk`, `jns_mk`, `sks`) VALUES
  ('PWBO101', 'Pemrograman Web Berorientasi Objek', 'Wajib', 3),
  ('BD202', 'Basis Data Lanjut', 'Wajib', 3),
  ('UIUX115', 'Perancangan UI/UX', 'Pilihan', 2);

