# Host: localhost  (Version 5.5.5-10.4.28-MariaDB)
# Date: 2023-09-25 19:48:50
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "carabayar"
#

DROP TABLE IF EXISTS `carabayar`;
CREATE TABLE `carabayar` (
  `id_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `carabayar` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "carabayar"
#

INSERT INTO `carabayar` VALUES (1,'Bayar Di Tempat','Well then get your shit together. Get it all together and put it in a backpack, all your shit, so it\'s together. …and if you gotta take it somewhere, take it somewhere ya know? Take it to the shit store and sell it, or put it in a shit museum. I don\'t care what you do, you just gotta get it together… Get your shit together. I don\'t discuss problems. I incinerate them! Aids! Don\'t break an arm jerking yourself off Morty.\n',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(2,'BCA','afegssea',NULL,NULL,'2023-08-16 12:54:40',NULL,NULL,'syarhabil','Y'),(3,'tes','123','2023-08-15 13:09:28',NULL,'2023-08-15 13:12:44','syarhabil',NULL,'syarhabil','Y'),(4,'BCA','That\'s why I\'ve been fighting to expand the Earned Income Tax Credit and the minimum wage. When I listen to another worker tell me that his factory has shut down, I remember all those men and women on the South Side of Chicago who I stood by and fought for two decades ago after the local steel plant closed. Together, you represent the harmony between tradition and progress. Too much blood has been shed.','2023-09-07 13:06:02',NULL,NULL,'syarhabil',NULL,NULL,'N');

#
# Structure for table "contact"
#

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "contact"
#

INSERT INTO `contact` VALUES (1,'Farrel Nathanael','c@c.com','tes1','2023-08-07 13:31:08','2023-08-07 13:39:16','syarhabil','syarhabil','N');

#
# Structure for table "customers"
#

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id_customers` int(11) NOT NULL AUTO_INCREMENT,
  `pp` varchar(255) DEFAULT NULL,
  `customers_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_customers`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "customers"
#

INSERT INTO `customers` VALUES (1,'robert.jpeg','Robert Downey Jr.','Imronman','They\'re not infinite universes left in sync with the show. We don\'t whitewash it either, Morty. I mean, the pirates are really rapey. Ew, Grandpa, so gross! You\'re talking about my mom! Life is effort and I\'ll stop when I die!',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(2,'tom.jpeg','Tom Holland','Spiderman','If I\'ve learned one thing, it\'s that before you get anywhere in life, you gotta stop listening to yourself. I couldn\'t hear you over my own screaming. We\'ve talked about this! Whose kidneys are these? Nice, Mrs Pancakes. Real nice.',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(3,'robbie.jpeg','Margot Robbie','Harley Quinn','Ut sibi fuerat socius sagittis. Ego intervenerit. Vere quia a te nuper iratus occidit illos undecim annorum puer. Deinde, si hoc forte qui fuit imperavit. ',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(4,'carti.jpeg','Playboi Carti','Rapper','Aids! I\'m your worst nightmare, bitch! Oh, that\'s Million Ants. I can\'t see the ants from over here, I just assumed that was um.. Turd Man, Wiggly Turd Man. Hi! I\'m Mr Meeseeks! Look at me!',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(5,'char.jpeg','Char Aznable','Neo Zeon Mobile Suit Pilot','It is where our union grows stronger. She\'s the one who put off buying a new car or a new dress for herself so that I could have a better life. For many years, Iran has defined itself in part by its opposition to my country, and there is indeed a tumultuous history between us.\n\nGod bless you.',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(6,NULL,NULL,NULL,NULL,NULL,'2023-08-03 11:22:25',NULL,NULL,NULL,'syarhabil','Y'),(7,NULL,NULL,NULL,NULL,NULL,'2023-08-03 11:22:28',NULL,NULL,NULL,'syarhabil','Y'),(8,'230807061555.jpg','Sultan','Ketos','I\'d like to order one large sofa chair with extra chair please. high chair, no no no recliner... and wheelchair on half. Your blood will be my lotion! Since we\'re fighting, if you ever have an affair with that guy, I will come to the hotel room and blow my brains out all over your naked bodies. A price for everything.','2023-08-03 11:21:43',NULL,'syarhabil','2023-08-07 13:15:55','syarhabil',NULL,'N'),(9,'230807054904.jpg',NULL,'Ketos','qdedfesa','2023-08-07 12:49:04','2023-08-07 12:50:00','syarhabil',NULL,NULL,'syarhabil','Y'),(10,'230807055020.jpg','Ramon','Ketos','qdedfesa','2023-08-07 12:50:20',NULL,'syarhabil',NULL,NULL,NULL,'N');

#
# Structure for table "failed_jobs"
#

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "failed_jobs"
#


#
# Structure for table "home"
#

DROP TABLE IF EXISTS `home`;
CREATE TABLE `home` (
  `id_home` int(11) NOT NULL AUTO_INCREMENT,
  `subheading` varchar(255) DEFAULT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `weekday_opening` time DEFAULT NULL,
  `weekday_closing` time DEFAULT NULL,
  `weekend_opening` time DEFAULT NULL,
  `weekend_closing` time DEFAULT NULL,
  `content_title` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `customers` int(11) DEFAULT NULL,
  `travel_held` int(11) DEFAULT NULL,
  `team_title` varchar(255) DEFAULT NULL,
  `team_content` text DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_home`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "home"
#

INSERT INTO `home` VALUES (1,'lets travel with us','Let your travel bussines with our service and relax enjoying your trip','08:00:00','22:00:00','10:00:00','00:00:00','We Are Travelsite.com','What? Hey Marty, I\'m not your answering service, but you\'re outside pouting about the car, Jennifer Parker called you twice. Brown, Brown, Brown, Brown, Brown, great, you\'re alive. Do you know where 1640 Riverside- Don\'t stop, Wilbert, drive. It\'s cold, damn cold. Ha, ha, ha, Einstein, you little devil. Einstein\'s clock is exactly one minute behind mine, it\'s still ticking.',8,1234,135,'Our Best Team','Yeah, exactly. What Lorraine, what? Okay, alright, I\'ll prove it to you. Look at my driver\'s license, expires 1987. Look at my birthday, for crying out load I haven\'t even been born yet. And, look at this picture, my brother, my sister, and me. Look at the sweatshirt, Doc, class of 1984. Go. That\'s him.','syarhabil','2023-07-31 14:23:10');

#
# Structure for table "lokasi"
#

DROP TABLE IF EXISTS `lokasi`;
CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,
  `namalokasi` varchar(255) DEFAULT NULL,
  `ket` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_lokasi`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "lokasi"
#

INSERT INTO `lokasi` VALUES (1,'Jawa','jl. Jendral Sudirman',NULL,'2023-07-31 12:52:09','2023-07-29 09:41:55',NULL,'syarhabil','syarhabil','Y'),(2,'Jakarta','Jl. Pangeran Antasari',NULL,'2023-07-31 12:54:56','2023-07-29 09:09:46',NULL,'syarhabil','syarhabil','N'),(3,'Kab. Tangerang','Citra Raya Cikupa','2023-07-29 09:08:37','2023-07-31 12:55:36',NULL,'syarhabil','syarhabil',NULL,'N'),(4,'Kota Tangerang','Pondok Aren','2023-07-29 09:41:15','2023-07-31 12:55:56',NULL,'syarhabil','syarhabil',NULL,'N'),(5,'Bandung','Jl. Braga','2023-07-31 12:44:55','2023-07-31 12:56:15',NULL,'syarhabil','syarhabil',NULL,'N'),(6,'Yogyakarta','jl. Malioboro','2023-09-06 11:32:01',NULL,NULL,'syarhabil',NULL,NULL,'N');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#


#
# Structure for table "perjalanan"
#

DROP TABLE IF EXISTS `perjalanan`;
CREATE TABLE `perjalanan` (
  `id_perjalanan` int(11) NOT NULL AUTO_INCREMENT,
  `id_lok_berangkat` int(11) DEFAULT NULL,
  `id_lok_tujuan` int(11) DEFAULT NULL,
  `hari` varchar(255) DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `id_unit` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_perjalanan`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "perjalanan"
#

INSERT INTO `perjalanan` VALUES (1,1,2,'SENIN','09:00:00',1,NULL,NULL,'2023-08-23 14:08:58',NULL,NULL,'syarhabil','Y',100000),(2,3,5,'SENIN','10:00:00',2,'2023-08-23 14:07:32',NULL,NULL,'syarhabil',NULL,NULL,'N',250000),(3,1,3,'JUMAT','12:00:00',1,'2023-08-25 09:57:51','2023-08-25 10:18:05',NULL,'syarhabil','syarhabil',NULL,'N',250000),(4,3,5,'SENIN','07:00:00',1,'2023-08-28 13:05:30',NULL,NULL,'syarhabil',NULL,NULL,'N',250000),(5,3,6,'RABU','05:00:00',2,'2023-09-06 11:32:58',NULL,NULL,'syarhabil',NULL,NULL,'N',400000),(6,2,6,'MINGGU','06:30:00',1,'2023-09-07 11:37:12',NULL,NULL,'syarhabil',NULL,NULL,'N',700000);

#
# Structure for table "personal_access_tokens"
#

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "personal_access_tokens"
#


#
# Structure for table "project"
#

DROP TABLE IF EXISTS `project`;
CREATE TABLE `project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `project_img` varchar(255) DEFAULT NULL,
  `project_logo` varchar(255) DEFAULT NULL,
  `project_title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "project"
#

INSERT INTO `project` VALUES (1,'airbus.jpeg','fa-solid fa-plane','Airplane Schedule',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(2,'van.jpeg','fa-solid fa-van-shuttle','Shuttle Van Travel',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(3,'bus.jpeg','fa-solid fa-bus','Bus Travel',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(4,'truck.jpeg','fa-solid fa-truck','Container Shipping',NULL,NULL,NULL,NULL,NULL,NULL,'N'),(5,'230803061432.png','fa-solid fa-van-shuttle','Testooo','2023-08-03 12:07:19','2023-08-03 13:14:32','2023-08-03 13:25:00','syarhabil','syarhabil','syarhabil','Y'),(6,'230805022655.jpg','fa-solid fa-truck','Cargo Shipping','2023-08-05 09:26:55',NULL,NULL,'syarhabil',NULL,NULL,'N');

#
# Structure for table "team"
#

DROP TABLE IF EXISTS `team`;
CREATE TABLE `team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `staff_img` varchar(255) DEFAULT NULL,
  `staff_name` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "team"
#

INSERT INTO `team` VALUES (1,'230802072326.jpg','Karen Felippe','Best General Manager',NULL,'2023-08-02 14:23:26','2023-08-02 14:05:23',NULL,'syarhabil','syarhabil','N'),(4,'230802070057.jpg','William Heisenberg','Best Courrier','2023-08-02 14:00:57',NULL,NULL,'syarhabil',NULL,NULL,'N'),(5,'230805022318.png','Anggun Permata','Best Office Girl','2023-08-05 09:23:18',NULL,NULL,'syarhabil',NULL,NULL,'N');

#
# Structure for table "transaksi"
#

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_perjalanan` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_bayar` int(11) DEFAULT NULL,
  `nama_penumpang` varchar(255) DEFAULT NULL,
  `nama_pemesan` varchar(255) DEFAULT NULL,
  `email_pemesan` varchar(255) DEFAULT NULL,
  `notelp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  `isPaid` varchar(1) DEFAULT NULL,
  `paid_at` timestamp NULL DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `img_bukti` varchar(255) DEFAULT NULL,
  `nomor_perjalanan` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "transaksi"
#

INSERT INTO `transaksi` VALUES (1,2,2,4,'asdwaf','asdwaf','bananacreamy08@gmail.com','085715302338','2023-09-08 16:09:16',NULL,'sultan',NULL,'N','Y','2023-09-08 16:10:12',250000,'230908090940.jpg','TRVL-5GSd-1','Jl. Mampang Prapatan XVI, Jl. H. Ibrahim RT 014/005 No.54'),(2,5,3,1,'jljijiji','asdafw','bananacreamy08@gmail.com','085715302338','2023-09-08 16:12:09',NULL,'Nopal',NULL,'N','Y','2023-09-08 16:23:04',400000,NULL,'TRVL-d3lb-1','Jl. Mampang Prapatan XVI, Jl. H. Ibrahim RT 014/005 No.54'),(3,6,4,1,'safwjaugj','ioehifuabjf','bananacreamy08@gmail.com','085715302338','2023-09-08 16:25:27',NULL,'fu',NULL,'N','Y','2023-09-08 16:32:16',700000,NULL,'TRVL-q6Oy-3','Jl. Mampang Prapatan XVI, Jl. H. Ibrahim RT 014/005 No.54');

#
# Structure for table "unit"
#

DROP TABLE IF EXISTS `unit`;
CREATE TABLE `unit` (
  `id_unit` int(11) NOT NULL AUTO_INCREMENT,
  `codename` varchar(255) DEFAULT NULL,
  `merk` varchar(255) DEFAULT NULL,
  `plat` varchar(255) DEFAULT NULL,
  `seat` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_unit`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "unit"
#

INSERT INTO `unit` VALUES (1,'CRD-01','Toyota Minibus','B 1975 XYZ',9,NULL,'2023-08-16 13:49:27',NULL,NULL,'syarhabil',NULL,'N'),(2,'CRD-02','Toyota Alphard','B 1975 CAS',5,'2023-08-16 13:13:11',NULL,'2023-08-16 13:56:56','syarhabil',NULL,'syarhabil','N');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `jenkel` varchar(10) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `level` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'syarhabil','a@a.com',NULL,'$2y$10$T1re71U5YE1uoJuJAXrh2Oyh2BKC7UmtJbOw7mcwsJt7C8ESTqBhi',NULL,'2023-06-16 06:56:25','2023-06-16 06:56:25','laki-laki','Tangerang','1234','ADMIN'),(2,'sultan','b@b.com',NULL,'$2y$10$rljejcejhd9r1ceIybuREujpJ7WM9a.pMKeMsbo2cOvgBZyGhtsVq',NULL,'2023-07-28 04:16:13','2023-07-28 04:16:13','Laki-laki','jakarta','0973845','USER'),(3,'Nopal','xx@xx.com',NULL,'$2y$10$XhvDFMQCONz2IdlSPAyhrOosooK6a0sY4jY3m/wS/U97yo98jI.qe',NULL,'2023-08-22 04:37:18','2023-08-22 04:37:18','Lainnya','Curug','0813423589','USER'),(4,'fu','farrel@gmail.com',NULL,'$2y$10$cxl1pDzmeqbbwEUmuffFc.vfwsZHJe3wUW7fXy/mqg6MK4ct847BK',NULL,'2023-09-07 02:06:24','2023-09-07 02:06:24','Lainnya','curug','089534','USER');

#
# Structure for table "works"
#

DROP TABLE IF EXISTS `works`;
CREATE TABLE `works` (
  `id_works` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `deleted_by` varchar(255) DEFAULT NULL,
  `isDeleted` varchar(1) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `work_title` varchar(255) DEFAULT NULL,
  `work_content` text DEFAULT NULL,
  PRIMARY KEY (`id_works`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

#
# Data for table "works"
#

INSERT INTO `works` VALUES (1,NULL,'2023-08-01 13:44:42','2023-08-01 13:06:18',NULL,'syarhabil','syarhabil','N','fa-solid fa-plane','Airplane','I love morty and i hope morty loves me. I want to wrap my arms around him and feel him deep inside me. Sum-Sum, let’s go! Grandpa’s concern for your safety is fleeting!'),(2,'2023-08-01 12:22:52','2023-08-05 09:17:26',NULL,'syarhabil','syarhabil',NULL,'N','fa-solid fa-boxes-stacked','Package','I going to daughter your brains out.'),(3,'2023-08-05 09:21:01',NULL,NULL,'syarhabil',NULL,NULL,'N','fa-solid fa-van-shuttle','Shuttle van','wkajfehafiuw'),(4,'2023-08-05 09:22:08',NULL,NULL,'syarhabil',NULL,NULL,'N','fa-solid fa-motorcycle','Motorcycle','awenfaj');
