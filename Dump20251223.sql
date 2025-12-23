-- MySQL dump 10.13  Distrib 8.0.44, for Win64 (x86_64)
--
-- Host: localhost    Database: users
-- ------------------------------------------------------
-- Server version	8.0.44

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `tel` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (7,'ირაკლი','ბაშელეიშვილი','123456','irakli','123456',NULL),(8,'giorgi','gogia','456123','giorgi','$2y$10$cDXyzTMMXUq8VhvYR79NU.ZKLCtpixRMYLXi7h11SpKKGKa2E2EvS',NULL),(9,'admin','user','123456','user','$2y$10$o3KsCOpNdxXGE8kL/LNS4.YwJT9I4yaxYQpEMBxJjIO75HtsOgK9u',NULL),(10,'admn','gvari','aaaa','user1','$2y$10$yWm8/vkZNnpel0IcWwCD4e2BAeCOMo2nZVLBVVZzpY4zAx8gGsQuG',NULL),(11,'gadsahdgs','asdasdaa','sdadadssda','user','$2y$10$GkkX0TAC/YVql4XmYX6x6.D.THH5do.0dwMIZdUo59cc6pz93L/5y','img/img.webp'),(12,'ldsldfgdnfjdgndfkdj','sdads','ასდსა','user5','$2y$10$L3YEGO.g2004sf2/eWtYFODUp/eoAJ4T9TpWzIENTBj42dsHx7qyK','img/online-store.png'),(13,'სახელი','გვარი','123456','php','$2y$10$tdGc.9ePrNxYS9gb8JFKne/5BkiH87BgRahkmyHnvOMYPTmKzwm5a','img/delete (3).png'),(14,'სახელი','გვარი','სდას','java','$2y$10$tzDsctXwtsIjz.DTcylLkemuFnkuWdVOb3GZIHuD1p7siI8y7bNMW','img/img.webp'),(15,'სახელი','გვარი','სდას','java','$2y$10$IX5TzXoZaqRT2eg7MsZXPuviZscl9gAy1YE80dqa9StR3EY5tq.Ye','img/img.webp'),(16,'სახელი','გვარი','სდას','java','$2y$10$n4UFQA/fRqxzLjyVP8YkIe7eteYGp4Anz/A3i8sC6fq.IkODpNBly','img/img.webp'),(17,'სახელი','გვარი','სდას','java','$2y$10$5TD05YIxpJog.wHYqAwLmeMUGppIHTRR6zhAQDx4q7o.JQlNJEiVG','img/img.webp'),(18,'სახელი','გვარი','სდას','java','$2y$10$vK7BK1ILI.XB/2Et61NpC.ExWJfXQRdCNzEBcxiAtUE2T7LFGyjKO','img/img.webp'),(19,'სახელი','გვარი','სდას','java','$2y$10$kERnEOTi231DOOkZMa1zBOeaYtxjbdOzqEHz9O5abdiJ6q0cn7txe','img/img.webp'),(20,'სახელი','გვარი','სდას','java','$2y$10$vLemzpRfd4hbxC8gHBo.EeM/ME39CETbyUXfAsnbZikGfg2YaCxIa','img/img.webp'),(21,'dasdda','asdasd','aad','addmin','$2y$10$TKz.hlw069XXoIWf/FZa2.nnEMBkBDsHRyZsLQGLcfpxHknsAdHGm','img/price-list.png'),(22,'sda','adsda','sdafs','user123','$2y$10$z4e2HQMQ4/LfKsxkAfihC.Ox3UkU0mA6oUGpig8p0bEPVx53DWflC','img/img.webp'),(23,'aaaa','ksdskjn','wdmwelm','admin1','$2y$10$K6pnDuNRuYDh6ejGV4zwP.hOgwhzlmJULYQrylcpf.n72di1aNLjK','img/grayscale_img.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-23 10:06:26
