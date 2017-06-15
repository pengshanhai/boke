-- MySQL dump 10.13  Distrib 5.5.47, for Win32 (x86)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.47

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `flag` varchar(10) DEFAULT '超级管理员',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'rmc001','admin001','齐天大圣'),(3,'admin','admin001','斗战圣佛'),(4,'超级管理员','admin','斗战圣佛'),(5,'cs9332','6880944','黑风双煞'),(8,'hello','000000','黄梅老祖'),(9,'pppp','64613','风之力');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `content` text,
  `intime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `view` int(11) DEFAULT '0',
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (1,'上海编制首个共享单车标准',1,'RC','　　上海已在全国率先完成共享单车团体标准编制工作，规定要求，单车必须要有GPS定位，方便企业管理，连续使用三年强制报废；报废车辆不允许进行拼装、修理后再投入市场；不允许社会车辆进入共享自行车服务。押金退回的时效应不超过7天。满12岁才能骑。\r\n\r\n　　共享单车团体标准将公开征求意见\r\n\r\n　　作为解决市民出行“最后一公里”的交通工具，共享单车一推出就广受欢迎。但随着投放量增加，五颜六色的共享单车铺满街头，产品安全与服务质量等问题逐渐显现。','2017-03-20 03:44:20',22,'20170321153633-846.jpg'),(15,'中国运营商年内取消国内长途漫游费',8,'RM','　　而在国家新闻办公室举行的新闻发布会上，针对“取消手机漫游费”这一计划，也最终有了具体的时间表。三大运营商在本次会议上，正式宣布2017年10月1日起将全面取消手机漫游费。\r\n\r\n　　三家运营商在响应“提速降费”议题上，提出了如下的具体实施方案。\r\n\r\n　　中国移动再次提速降费','2017-03-21 00:27:53',245,'20170321082838-687.jpg'),(3,'为什么你的产品促成转率低？',2,'iyi','　　所有的网站运营工作都只有一个目的——促成转化！转化不行，所有的工作都是白搭。很多新手甚至有几年工作经验的朋友，可能都曾经遇到下面的难题：\r\n\r\n　　1、引流、用户互动做的都还不错，但是就是没什么转化！\r\n\r\n　　2、用户老是犹豫不定，担心这个，担心那个，在成交的边缘徘徊！\r\n\r\n　　3、为什么别人包装的产品宣传文案真没容易成交？','2017-03-20 04:35:36',8,'20170320123536-395.jpg'),(4,'java函数使用',4,'MMP','你好，这里是hello java的世界','2017-03-20 04:39:14',220,'20170321153740-567.jpg'),(9,'AlphaGo为何缺席计算机围棋赛',4,'新浪体育','　　3月19日，在第10届UEC杯世界计算机围棋赛上，决赛中由腾讯AI Lab（腾讯人工智能实验室）研发的围棋人工智能程序“绝艺”（Fine Art）击败日本开发的“DeepZenGo”（天顶），以11战全胜的战绩夺冠。\r\n\r\n　　今年共有30支软件参加此次大赛。继18日的循环积分赛中，“绝艺”以七局全胜战绩进入16强后，在今天决赛又以四连胜战绩夺得本届UEC杯冠军，日本“DeepZenGo”获亚军。','2017-03-20 08:13:13',6,'20170320161313-873.jpg'),(10,'是不是你的错',8,'POLO','书读百遍其义自见','2017-03-20 09:10:01',10,'20170320171001-218.jpg'),(13,'小米发布松果处理器',7,'月光博客','　　2月28日下午，小米在北京国家中心举行松果芯片发布会，正式发布了小米自研的松果澎湃S1手机芯片，这是继华为海思麒麟芯片之后的又一家国产手机厂商的自研手机芯片，一起发布的还有搭载松果澎湃S1芯片的小米5c。\r\n\r\n　　松果澎湃S1是一款定位中端的手机芯片，采用台积电半导体工艺，采用4+4大小核心全A53架构，大核主频2.2GHz，小核主频1.4GHz，GPU为ARM Mali T860 MP4，基带为可升级设计，通过OTA算法升级。澎湃S1安兔兔跑分64817分。','2017-03-20 09:29:11',352,'20170320235328-388.jpg'),(14,'这是文章2！！！',8,'222','这是文章2！！！这是文章2！！！这是文章2！！！这是文章2！！！这是文章2！！！这是文章2！！！\r\n这是文章2！！！这是文章2！！！这是文章2！！！这是文章2！！！这是文章2！！！这是文章2！！！\r\n这是文章2！！！这是文章2！！！这是文章2！！！','2017-03-20 11:17:46',44,'20170320235254-449.jpg'),(12,'电视购物t',6,'BVC','SDDGSDGSGSDGSS','2017-03-20 09:28:49',1,'20170320172849-527.jpg'),(16,'今天星期2',9,'小李','    今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷。\r\n    今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷。\r\n    今天是星期2，天气阴，不冷。今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷今天是星期2，天气阴，不冷\r\n    今天是星期2，天气阴，不冷。','2017-03-21 05:10:49',27,'20170321131049-264.jpg'),(17,'百度移动搜索故障被工信部约谈',4,'月光博客','　　工信部网站发布新闻称，针对日前百度移动搜索出现的故障，督促百度等重点互联网企业做好信息服务运行安全保障，防止类似问题再次发生。\r\n\r\n　　据工信部称，2月28日晚8点39分，百度移动端搜索发生故障，搜索请求无法显示结果，至晚9点21分恢复，历时42分钟。据估计，故障期间导致手机用户上亿次的搜索受到影响。3月1日工信部相关司局立即紧急约谈百度公司，了解相关情况。据初步分析，故障原因是由于百度公司的软件更新中存在BUG（漏洞），导致服务器停止服务。故障发生后，百度公司紧急处置并恢复服务，目前该软件问题已得到修复。','2017-03-21 10:46:38',4,'20170321184638-331.jpg'),(18,'李彦宏：因医疗事件一个季度砍掉20亿收入',9,'月光博客','　　9月4日播出的央视专访中，李彦宏坦陈医疗事件(魏则西事件)对百度的收入产生了比较大的影响，“我们其实一个季度砍掉了20个亿的收入。”他也强调这种措施对百度未来有益，百度需要在做事情上要更加地去考虑社会效益，而不仅仅是一个经济效益。\r\n\r\n　　采访中，李彦宏用了很大一部分篇幅讲述人工智能，他对记者说，“我们也认为移动互联网之后，下一个时代就是人工智能的时代，在大的方向上，我估计这个判断是不会错的。”','2017-03-23 02:16:54',5,'20170323101653-651.jpg');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(50) DEFAULT NULL,
  `order_no` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'html',1),(2,'css',2),(4,'javascript',10),(6,'php',8),(7,'web前端',3),(8,'UI设计',4),(9,'关于我',5),(11,'服务器',61),(12,'cisco交换机',62),(13,'防火墙',63),(14,'路由器',68);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guestbook`
--

DROP TABLE IF EXISTS `guestbook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `art_id` int(11) DEFAULT NULL,
  `content` text,
  `intime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `flag` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=gbk;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guestbook`
--

LOCK TABLES `guestbook` WRITE;
/*!40000 ALTER TABLE `guestbook` DISABLE KEYS */;
INSERT INTO `guestbook` VALUES (1,'张帆',16,'文章写的好','2017-03-21 05:28:48',1),(12,'力度',16,'所发生的快乐还是代理开户送','2017-03-21 09:22:07',1),(3,'aaop',13,'dafafafafa','2017-03-21 08:37:44',1),(4,'dsgssp',12,'ewrewtewfddvafafafa','2017-03-21 08:37:57',1),(5,'dsgssp',14,'2352362fsdfsddvafafafa','2017-03-21 08:38:06',1),(6,'fffff',15,'fffff','2017-03-21 09:05:32',1),(7,'hello',1,'hello Tuesrday!!','2017-03-21 09:09:21',1),(8,'vvvvv',14,'vvvv','2017-03-21 09:15:00',1),(9,'eeee',14,'eeeee','2017-03-21 09:16:09',1),(10,'ccc',14,'cccc','2017-03-21 09:16:24',1),(11,'asfa',3,'asfafa','2017-03-21 09:16:41',1),(13,'反反复复',13,'反反复复','2017-03-21 10:26:16',1),(14,' 该好好干',13,'孤鸿寡鹄','2017-03-21 10:40:13',1),(15,'哎哎哎',1,'哎哎哎','2017-03-21 10:41:34',1),(26,'aaaa',3,'aaaaaaaaaa','2017-03-23 09:17:41',1),(18,'啦啦',4,'哈哈','2017-03-21 11:26:20',1),(19,'三个傻瓜',4,'爱谁谁','2017-03-22 14:37:14',1),(20,'大幅度发给',1,'电饭锅电话','2017-03-23 01:23:30',1),(21,'很好',18,'测试一下\r\n','2017-03-23 02:20:29',1),(22,'收到货都是',4,'大叔大婶','2017-03-23 02:56:43',1),(23,'法法',4,'发发发吖','2017-03-23 04:51:10',1),(24,'法国恢复',15,'符合法规','2017-03-23 05:15:13',0),(25,'也一样',1,'也一样','2017-03-23 08:18:28',1);
/*!40000 ALTER TABLE `guestbook` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-03-25  8:54:39
