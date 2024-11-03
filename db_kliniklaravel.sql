/*
SQLyog Professional v12.5.1 (64 bit)
MySQL - 8.0.30 : Database - db_kliniklaravel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_kliniklaravel` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `db_kliniklaravel`;

/*Table structure for table `administrasis` */

DROP TABLE IF EXISTS `administrasis`;

CREATE TABLE `administrasis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_administrasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `pasien_id` int NOT NULL,
  `dokter_id` int NOT NULL,
  `poli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` int NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci,
  `diagnosis` text COLLATE utf8mb4_unicode_ci,
  `biaya_tambahan` int DEFAULT NULL,
  `total_biaya` int DEFAULT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT 'baru',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `administrasis` */

insert  into `administrasis`(`id`,`kode_administrasi`,`tanggal`,`pasien_id`,`dokter_id`,`poli`,`biaya`,`keluhan`,`diagnosis`,`biaya_tambahan`,`total_biaya`,`status`) values 
(14,'ADM0001','2024-08-04',12,6,'Umum',50000,'Skripsi pasien buat sakit kepala','acc',100000,150000,'selesai');

/*Table structure for table `dokters` */

DROP TABLE IF EXISTS `dokters`;

CREATE TABLE `dokters` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `kode_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `dokters` */

insert  into `dokters`(`id`,`user_id`,`kode_dokter`,`nama_dokter`,`foto`,`spesialis`,`nomor_hp`,`twitter`,`facebook`,`instagram`,`tiktok`,`created_at`,`updated_at`) values 
(4,5,'D0001','drg. Agnes Trinovin','public/foto_dokter/xWRUFFNXTEwu6LcNpAwzQ70SmpPorPgFllrOk6NL.png','mata','08123456789','#agness','#agness','#agness','#agness','2024-08-04 09:02:47','2024-08-04 09:02:47'),
(5,6,'D0005','Marisa Lisfiyanti Amd.Keb','public/foto_dokter/dfWc7dFODFRKoJtKGDVDxi9qjin30ygbEQrYJnHV.png','paru','08214567321','#Marisa','#Marisa','#Marisa','#Marisa','2024-08-04 09:03:43','2024-08-04 09:03:43'),
(6,7,'D0006','dr. Rafki Aftia Pratama','public/foto_dokter/016fyoSS8qN4zeKrYAUWJBmGhlrzDzklxH5Nhcq6.png','tht','12312312312','#rafkiii','#rafkiii','#rafkiii','#rafkiii','2024-08-04 09:07:13','2024-08-04 09:07:13');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `jadwals` */

DROP TABLE IF EXISTS `jadwals`;

CREATE TABLE `jadwals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `poli_id` bigint unsigned NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jadwals_poli_id_foreign` (`poli_id`),
  CONSTRAINT `jadwals_poli_id_foreign` FOREIGN KEY (`poli_id`) REFERENCES `polis` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jadwals` */

insert  into `jadwals`(`id`,`poli_id`,`hari`,`jam_mulai`,`jam_selesai`,`created_at`,`updated_at`) values 
(5,7,'Senin','08:00:00','14:00:00','2024-08-04 09:08:38','2024-08-04 09:08:38'),
(6,7,'Selasa','08:00:00','14:00:00','2024-08-04 09:08:38','2024-08-04 09:08:38'),
(7,7,'Rabu','08:00:00','14:00:00','2024-08-04 09:08:38','2024-08-04 09:08:38'),
(8,7,'Jumat','08:00:00','13:00:00','2024-08-04 09:08:38','2024-08-04 09:08:38'),
(9,8,'Senin','08:00:00','14:00:00','2024-08-04 09:09:26','2024-08-04 09:09:26'),
(10,8,'Kamis','08:00:00','14:00:00','2024-08-04 09:09:26','2024-08-04 09:09:26'),
(11,8,'Jumat','08:00:00','13:00:00','2024-08-04 09:09:26','2024-08-04 09:09:26'),
(12,9,'Senin','08:00:00','14:00:00','2024-08-04 09:10:34','2024-08-04 09:10:34'),
(13,9,'Selasa','08:00:00','14:00:00','2024-08-04 09:10:34','2024-08-04 09:10:34'),
(14,9,'Rabu','08:00:00','14:00:00','2024-08-04 09:10:34','2024-08-04 09:10:34'),
(15,9,'Kamis','08:00:00','14:00:00','2024-08-04 09:10:34','2024-08-04 09:10:34'),
(16,9,'Jumat','08:00:00','15:00:00','2024-08-04 09:10:34','2024-08-04 09:10:34');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2014_10_12_100000_create_password_resets_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1),
(5,'2019_12_14_000001_create_personal_access_tokens_table',1),
(6,'2023_12_04_024701_create_administrasis_table',1),
(7,'2023_12_04_024701_create_dokters_table',1),
(8,'2023_12_04_024701_create_pasiens_table',1),
(9,'2023_12_04_024701_create_polis_table',1),
(10,'2023_12_04_025030_add_role_to_users',1),
(11,'2024_01_08_051411_create_obats_table',1),
(12,'2024_08_04_080955_create_jadwals_table',2);

/*Table structure for table `obat` */

DROP TABLE IF EXISTS `obat`;

CREATE TABLE `obat` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kode_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` int NOT NULL,
  `harga_jual` int NOT NULL,
  `qty` int NOT NULL,
  `tanggal_expired` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `obat_kode_obat_unique` (`kode_obat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `obat` */

insert  into `obat`(`id`,`created_at`,`updated_at`,`kode_obat`,`nama_obat`,`deskripsi`,`satuan`,`tipe`,`harga_beli`,`harga_jual`,`qty`,`tanggal_expired`) values 
(1,'2024-07-17 15:07:36','2024-07-17 15:07:36','k-001','Sinte',NULL,'botol','tablet',15000,20000,2,'2024-07-31'),
(2,'2024-07-18 10:26:37','2024-07-18 10:26:37','123','123',NULL,'kapsul','botol',123,123,123,'2024-07-11');

/*Table structure for table `pasiens` */

DROP TABLE IF EXISTS `pasiens`;

CREATE TABLE `pasiens` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_hp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pasiens` */

insert  into `pasiens`(`id`,`kode_pasien`,`nama_pasien`,`jenis_kelamin`,`nomor_hp`,`status`,`alamat`,`created_at`,`updated_at`) values 
(12,'P0001','Febrian Maulana','Laki-laki','12312312312','Sudah Menikah','padang','2024-08-04 09:50:15','2024-08-04 09:50:15');

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `polis` */

DROP TABLE IF EXISTS `polis`;

CREATE TABLE `polis` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dokter_id` bigint unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biaya` double NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `polis_dokter_id_index` (`dokter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `polis` */

insert  into `polis`(`id`,`dokter_id`,`nama`,`biaya`,`deskripsi`,`created_at`,`updated_at`) values 
(7,6,'Umum',50000,'untuk umum','2024-08-04 09:08:38','2024-08-04 09:08:38'),
(8,4,'Gigi',150000,'Untuk Gigi','2024-08-04 09:09:26','2024-08-04 09:09:26'),
(9,5,'Kia',100000,'Untuk Ibu dan Anak','2024-08-04 09:10:34','2024-08-04 09:10:34');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`,`role`) values 
(1,'admin','superadmin@admin.com','2024-06-25 19:58:59','$2y$10$JnbLc9bCOtaJeEECikgn4OCiTcGv.2vC16bIHCGDE2gayCjInKNI.','qgSb5EZNPxiSndNN6Cz92wLg1QPRNPt9Ke9N4HxQMNzQXdpFrv2FIXD0p7od','2024-06-25 19:58:59','2024-07-21 10:44:23','admin'),
(5,'drg. Agnes Trinovin','agnes@dokter.com',NULL,'$2y$10$AmLjSFL7mZFQgibmt0akNO/iDtqRw.uWaMNZZLnEoFwVe0qVozas.',NULL,'2024-08-04 09:02:47','2024-08-04 09:02:47','dokter'),
(6,'Marisa Lisfiyanti Amd.Keb','marisa@dokter.com',NULL,'$2y$10$7mWiA5Wf5y3xjypLtXTK1.xgHqDF7hU71x.Mrb0Oc8nm2ewaWOkQm',NULL,'2024-08-04 09:03:43','2024-08-04 09:03:43','dokter'),
(7,'dr. Rafki Aftia Pratama','rafki@dokter.com',NULL,'$2y$10$E9I4.yHJosLqAF1FWNtvZeiA106MnmnP4vum.U0SI5ohXrO5YW22S',NULL,'2024-08-04 09:07:13','2024-08-04 09:07:13','dokter'),
(8,'Pimpinan','pimpinan@gmail.com',NULL,'$2y$10$EN7rvCR0dkkLY0T.r1MX/eXOEpbcvRi2ZM4MeA/trFxACJJpLiojW',NULL,'2024-08-04 09:27:14','2024-08-04 09:27:14','operator');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
