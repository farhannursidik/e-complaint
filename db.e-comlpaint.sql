/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.1.37-MariaDB : Database - db_complaint
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_complaint` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_complaint`;

/*Table structure for table `akun` */

DROP TABLE IF EXISTS `akun`;

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `akun` */

insert  into `akun`(`id_akun`,`username`,`password`,`role`,`created_at`) values 
(3,'admin','admin','Admin','2021-01-16 09:47:03'),
(4,'anursidik17@gmail.com','12345','Mahasiswa','2021-01-16 09:47:25'),
(5,'ketua','ketua','Pimpinan','2021-01-16 09:47:46');

/*Table structure for table `bagian` */

DROP TABLE IF EXISTS `bagian`;

CREATE TABLE `bagian` (
  `id_bagian` int(11) NOT NULL AUTO_INCREMENT,
  `bagian` varchar(50) NOT NULL,
  `created_at` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `bagian` */

insert  into `bagian`(`id_bagian`,`bagian`,`created_at`) values 
(22,'SDM/Kepegawaian',NULL),
(23,'Keuangan',NULL),
(24,'Kelengkapan/Fasilitas',NULL),
(25,'Tata Usaha/Umum',NULL),
(26,'Akademik',NULL),
(27,'Sistem Informasi',NULL),
(28,'kemahasiswaan',NULL);

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `id_complaint` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `unitkerja` varchar(50) NOT NULL,
  `subjek` text NOT NULL,
  `uraian` text NOT NULL,
  `saransolusi` text NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'belum ditanggapi',
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_complaint`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`id_complaint`,`username`,`unitkerja`,`subjek`,`uraian`,`saransolusi`,`status`,`created_at`) values 
(10,'anursidik17@gmail.com','Keuangan','SKS','mahal','gratis','Diterima',NULL),
(11,'mail.smkpemindosumedang@gmail.com','Kemahasiswaan','kehadiran','tidak memadai','perbaikan','Diterima',NULL);

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(3,'Pimpinan','pimpinan@gmail.com',NULL,'$2y$10$WGsHXX/l5B3W1xfzI0a/r.FbnI5j0plyqHnmqKWPJZfhe.0jCVIqe',NULL,'2021-01-17 16:03:00','2021-01-17 16:03:00'),
(4,'admin','admin@gmail.com',NULL,'$2y$10$zD8AZoAUMjnA7dZrIt3hieMblphOD.qNnMXD.Ox3M8MYAbh.SCEu6',NULL,'2021-01-17 16:05:13','2021-01-17 16:05:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
