-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: algostudio
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `master_barang`
--

DROP TABLE IF EXISTS `master_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `master_barang` (
  `kode_barang` int unsigned NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) DEFAULT NULL,
  `harga_jual` decimal(10,0) DEFAULT NULL,
  `harga_beli` decimal(10,0) DEFAULT NULL,
  `stok` int unsigned DEFAULT NULL,
  `kategori` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`kode_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `master_barang`
--

LOCK TABLES `master_barang` WRITE;
/*!40000 ALTER TABLE `master_barang` DISABLE KEYS */;
INSERT INTO `master_barang` VALUES (1,'Asus Laptop',5000,2000,102,'Komputer'),(2,'Realmi',1000,500,100,'Handphone'),(3,'Lenovo',5000,2000,120,'Komputer'),(4,'Nokia',1000,500,100,'Handphone'),(5,'Samsung',1000,500,100,'Handphone');
/*!40000 ALTER TABLE `master_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penjualan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal_penjualan` date DEFAULT NULL,
  `nama_konsumen` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan`
--

LOCK TABLES `penjualan` WRITE;
/*!40000 ALTER TABLE `penjualan` DISABLE KEYS */;
INSERT INTO `penjualan` VALUES (1,'2021-04-01','Fulan','Malang'),(2,'2021-04-01','Alan','Surabaya'),(3,'2021-04-01','dede','Bogor'),(4,'2021-04-02','lukman','Jakarta'),(5,'2021-04-02','Asep','Malang'),(6,'2021-04-03','karman','Surabaya'),(7,'2021-04-03','dede','Bogor'),(8,'2021-04-04','lukman','Jakarta'),(9,'2021-04-05','Fulan','Malang'),(10,'2021-04-05','Alan','Surabaya'),(11,'2021-04-06','dede','Bogor'),(12,'2021-04-06','lukman','Jakarta');
/*!40000 ALTER TABLE `penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penjualan_detail`
--

DROP TABLE IF EXISTS `penjualan_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penjualan_detail` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_penjualan` int DEFAULT NULL,
  `kode_barang` int unsigned DEFAULT NULL,
  `jumlah` int DEFAULT NULL,
  `harga_satuan` decimal(10,0) DEFAULT NULL,
  `harga_total` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index2` (`id_penjualan`),
  KEY `index3` (`kode_barang`),
  CONSTRAINT `FK_2` FOREIGN KEY (`kode_barang`) REFERENCES `master_barang` (`kode_barang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `fk_penjualan_detail_1` FOREIGN KEY (`id_penjualan`) REFERENCES `penjualan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penjualan_detail`
--

LOCK TABLES `penjualan_detail` WRITE;
/*!40000 ALTER TABLE `penjualan_detail` DISABLE KEYS */;
INSERT INTO `penjualan_detail` VALUES (1,1,1,4,5000,20000),(2,1,2,5,1000,5000),(3,2,1,10,5000,50000),(4,2,2,20,1000,20000),(5,1,3,4,5000,20000),(6,1,4,5,1000,5000),(7,2,3,10,5000,50000),(8,2,5,20,1000,20000),(9,3,1,4,5000,20000),(10,3,2,5,1000,5000),(11,3,3,10,5000,50000),(12,3,5,20,1000,20000),(13,4,3,4,5000,20000),(14,4,4,5,1000,5000),(15,4,2,10,5000,50000),(16,4,5,20,1000,20000),(17,5,1,4,5000,20000),(18,5,2,5,1000,5000),(19,5,3,10,5000,50000),(20,5,5,20,1000,20000),(21,6,3,4,5000,20000),(22,6,4,5,1000,5000),(23,6,2,10,5000,50000),(24,6,5,20,1000,20000),(25,7,1,4,5000,20000),(26,7,2,5,1000,5000),(27,7,3,10,5000,50000),(28,7,5,20,1000,20000),(29,8,3,4,5000,20000),(30,8,4,5,1000,5000),(31,8,2,10,5000,50000),(32,8,5,20,1000,20000),(33,9,1,4,5000,20000),(34,9,2,5,1000,5000),(35,9,3,10,5000,50000),(36,9,5,20,1000,20000),(37,10,3,4,5000,20000),(38,10,4,5,1000,5000),(39,10,2,10,5000,50000),(40,10,5,20,1000,20000),(41,11,1,4,5000,20000),(42,11,2,5,1000,5000),(43,11,3,10,5000,50000),(44,11,5,20,1000,20000),(45,12,3,4,5000,20000),(46,12,4,5,1000,5000),(47,12,2,10,5000,50000),(48,12,5,20,1000,20000);
/*!40000 ALTER TABLE `penjualan_detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-06 21:11:58
