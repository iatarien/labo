-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 25, 2024 at 02:47 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labo`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

DROP TABLE IF EXISTS `activity`;
CREATE TABLE IF NOT EXISTS `activity` (
  `id_activity` int(11) NOT NULL AUTO_INCREMENT,
  `type_activity` varchar(50) NOT NULL,
  `niveau` int(11) DEFAULT NULL,
  `module` int(11) DEFAULT NULL,
  `teacher` int(11) NOT NULL,
  `sujet_trav` text,
  PRIMARY KEY (`id_activity`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id_activity`, `type_activity`, `niveau`, `module`, `teacher`, `sujet_trav`) VALUES
(3, 'عمل تطبيقي', 1, 1, 1, NULL),
(2, 'عمل تطبيقي', 2, 2, 1, 'cours d\'algebre super cool'),
(4, 'عمل تطبيقي', 1, 1, 1, NULL),
(5, 'عمل تطبيقي', 1, 1, 1, 'aaaaaaaaaaaa'),
(6, 'عمل تطبيقي', 1, 1, 1, 'abc'),
(7, 'عمل تطبيقي', 1, 1, 1, 'aaa'),
(8, 'عمل تطبيقي', 2, 2, 1, 'lol'),
(9, 'عمل تطبيقي', 2, 2, 1, 'la'),
(10, 'عمل تطبيقي', 1, 1, 1, 'aaaaa'),
(11, 'عمل تطبيقي', 1, 1, 1, 'z'),
(12, 'عمل تطبيقي', 1, 1, 1, '&&&&&&&&'),
(13, 'عمل تطبيقي', 2, 2, 1, 'aaaaaaaaaaaaaa'),
(14, 'عمل تطبيقي', 1, 1, 1, 'h'),
(15, 'عمل تطبيقي', 1, 1, 1, 'TP\r\n$'),
(16, 'عمل تطبيقي', 1, 1, 1, 'l'),
(17, 'عمل تطبيقي', 1, 1, 1, 'lll'),
(19, 'عمل تطبيقي', 1, 1, 1, 'TP LOL'),
(20, 'عمل تطبيقي', 1, 1, 1, 'TP'),
(22, 'عمل تطبيقي', 1, 1, 1, 'TP Analyse'),
(23, 'عمل تطبيقي', 2, 2, 2, 'TP Algebre'),
(24, 'عمل تطبيقي', 2, 1, 2, 'TP Analyse'),
(25, 'عمل تطبيقي', 2, 2, 1, 'lol'),
(26, 'عمل تطبيقي', 1, 1, 1, 'lalala');

-- --------------------------------------------------------

--
-- Table structure for table `bloc`
--

DROP TABLE IF EXISTS `bloc`;
CREATE TABLE IF NOT EXISTS `bloc` (
  `bloc_name` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bloc`
--

INSERT INTO `bloc` (`bloc_name`) VALUES
('C');

-- --------------------------------------------------------

--
-- Table structure for table `chemical`
--

DROP TABLE IF EXISTS `chemical`;
CREATE TABLE IF NOT EXISTS `chemical` (
  `id_chemical` int(11) NOT NULL AUTO_INCREMENT,
  `name_chemical` text NOT NULL,
  `quantity` double NOT NULL,
  `unity` varchar(50) NOT NULL,
  `expiration` date DEFAULT NULL,
  PRIMARY KEY (`id_chemical`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chemical`
--

INSERT INTO `chemical` (`id_chemical`, `name_chemical`, `quantity`, `unity`, `expiration`) VALUES
(3, 'H20', 870, 'ml', NULL),
(4, 'CO2', 0, 'm3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chemicals`
--

DROP TABLE IF EXISTS `chemicals`;
CREATE TABLE IF NOT EXISTS `chemicals` (
  `id_chemicals` int(11) NOT NULL AUTO_INCREMENT,
  `id_rapport` int(11) NOT NULL,
  `id_chemical` int(11) NOT NULL,
  `qty` double NOT NULL,
  `quantity_now` double NOT NULL,
  PRIMARY KEY (`id_chemicals`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chemicals`
--

INSERT INTO `chemicals` (`id_chemicals`, `id_rapport`, `id_chemical`, `qty`, `quantity_now`) VALUES
(1, 12, 3, 2, 0),
(2, 12, 4, 1, 0),
(4, 16, 4, 50, 10),
(5, 18, 3, 120, 870);

-- --------------------------------------------------------

--
-- Table structure for table `labos`
--

DROP TABLE IF EXISTS `labos`;
CREATE TABLE IF NOT EXISTS `labos` (
  `id_labo` int(11) NOT NULL AUTO_INCREMENT,
  `name_labo` text NOT NULL,
  PRIMARY KEY (`id_labo`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `labos`
--

INSERT INTO `labos` (`id_labo`, `name_labo`) VALUES
(1, 'labo 1'),
(2, 'labo 2');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id_module` int(11) NOT NULL AUTO_INCREMENT,
  `name_module` text NOT NULL,
  PRIMARY KEY (`id_module`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id_module`, `name_module`) VALUES
(1, 'Analyse'),
(2, 'Algebre');

-- --------------------------------------------------------

--
-- Table structure for table `niveau`
--

DROP TABLE IF EXISTS `niveau`;
CREATE TABLE IF NOT EXISTS `niveau` (
  `id_niveau` int(11) NOT NULL AUTO_INCREMENT,
  `name_niveau` text NOT NULL,
  PRIMARY KEY (`id_niveau`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `niveau`
--

INSERT INTO `niveau` (`id_niveau`, `name_niveau`) VALUES
(1, 'L1'),
(2, 'L2');

-- --------------------------------------------------------

--
-- Table structure for table `outils`
--

DROP TABLE IF EXISTS `outils`;
CREATE TABLE IF NOT EXISTS `outils` (
  `id_outils` int(11) NOT NULL AUTO_INCREMENT,
  `id_rapport` int(11) NOT NULL,
  `id_outil` int(11) NOT NULL,
  `type_outil` varchar(100) NOT NULL,
  `charge` varchar(100) NOT NULL,
  `state_av` varchar(100) NOT NULL,
  `avis` varchar(100) NOT NULL,
  `state_after` varchar(100) NOT NULL,
  PRIMARY KEY (`id_outils`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outils`
--

INSERT INTO `outils` (`id_outils`, `id_rapport`, `id_outil`, `type_outil`, `charge`, `state_av`, `avis`, `state_after`) VALUES
(1, 11, 1, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(2, 11, 1, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(3, 11, 2, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(4, 11, 2, 'جهاز', 'تكفل خارجي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(11, 12, 4, 'أداة', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(10, 12, 3, 'أداة', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(9, 12, 1, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(17, 16, 3, 'أداة', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(16, 16, 1, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(18, 18, 1, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(19, 18, 3, 'أداة', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(20, 18, 3, 'أداة', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بدون تحفظ'),
(21, 28, 1, 'جهاز', 'تكفل داخلي', 'في طور الصيانة', 'بدون تحفظ', 'بتحفظ'),
(22, 28, 2, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بتحفظ', 'بدون تحفظ'),
(23, 28, 1, 'جهاز', 'تكفل داخلي', 'في طور الصيانة', 'بدون تحفظ', 'بتحفظ'),
(24, 28, 2, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بتحفظ', 'بدون تحفظ'),
(25, 29, 1, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بتحفظ', 'بدون تحفظ'),
(26, 29, 2, 'جهاز', 'تكفل داخلي', 'حالة جيدة', 'بدون تحفظ', 'بتحفظ');

-- --------------------------------------------------------

--
-- Table structure for table `rapport`
--

DROP TABLE IF EXISTS `rapport`;
CREATE TABLE IF NOT EXISTS `rapport` (
  `id_rapport` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL,
  `labo` int(11) NOT NULL,
  `activite` int(11) NOT NULL,
  `ze_activity` varchar(100) NOT NULL,
  `engineer` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id_rapport`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rapport`
--

INSERT INTO `rapport` (`id_rapport`, `date`, `time`, `labo`, `activite`, `ze_activity`, `engineer`, `user_id`) VALUES
(12, '2024-04-11', '11:00 - 12:30', 1, 10, 'نشاط بيداغوجي', 'all', 1),
(16, '2024-04-11', '12:30 - 14:00', 1, 12, 'نشاط بيداغوجي', 'all', 1),
(29, '2024-06-24', '8:00 - 9:30', 1, 25, 'نشاط بيداغوجي', 'all', 1),
(30, '2024-06-24', '8:00 - 9:30', 1, 0, 'لا شيئ', 'all', 1),
(31, '2024-06-24', '8:00 - 9:30', 1, 26, 'نشاط بيداغوجي', 'all', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

DROP TABLE IF EXISTS `reserves`;
CREATE TABLE IF NOT EXISTS `reserves` (
  `id_reserve` int(11) NOT NULL AUTO_INCREMENT,
  `num_reserve` int(11) NOT NULL,
  `rapport` int(11) NOT NULL,
  `outil` int(11) NOT NULL,
  `state` text NOT NULL,
  `html` text NOT NULL,
  `user` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  PRIMARY KEY (`id_reserve`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id_reserve`, `num_reserve`, `rapport`, `outil`, `state`, `html`, `user`, `year`) VALUES
(1, 1, 21, 1, 'avis', '', 1, 2024),
(9, 12, 27, 2, 'avis', '<head><style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style></head><body contenteditable=\"true\" dir=\"rtl\" style=\"\"><input type=\"hidden\" id=\"id_reserve\" value=\"9\">\n\n	  <!-- Bootstrap CSS -->\n	  <link href=\"http://localhost:8000/css/bootstrap.min.css\" rel=\"stylesheet\">\n	  <!-- bootstrap theme -->\n	<title></title>\n<style type=\"text/css\">\n	@page  {\n	    size: auto;   /* auto is the initial value */\n		size: portrait;\n	    margin: 0;  /* this affects the margin in the printer settings */\n	}\n	@media  print {\n		html,body{\n			height:297mm;\n	    	width:210mm;\n			overflow-y : hidden !important;\n		}\n		\n	}\n	html,body{\n	    height:287mm;\n	    width:210mm;\n	    margin: auto;\n	    line-height: 1.6;\n	    -webkit-print-color-adjust: exact !important;\n	}\n\n\n</style>\n\n<style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style>\n\n<section style=\"background-color: white; text-align: center; font-size: 13.5px; margin: 45px;\" id=\"fiche\">\n	<div id=\"fiche_top\">\n        <div style=\"  display: inline-block; width : 100%\">\n			<img src=\"/header.png\" style=\"width : 100%\">\n		</div>\n		<hr>\n		<div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : left;\">\n            Faculty of Science and technology<br>\n			Laboratory of chemistry, biology, geology\n			</h3><h3>\n		</h3></div>\n		<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <h3 style=\"text-align : right;\">\n            كلية العلوم والتكنولوجيا <br>\n			مخابر الكيمياء البيولوجيا الجيولوجيا\n			</h3>\n		</div>\n		<br><br><br><br><hr>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : center;\">\n            : تامنغست في  \n			</h3><h3>\n		</h3></div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\" contenteditable=\"false\">\n            <h3 style=\"text-align : right;\">\n            رقم القيــــد: <span id=\"num\" contenteditable=\"true\">12</span> ك ع ت / م ك ب ج/ 2024 \n			</h3>\n		</div>\n        <br><br><br><br>\n		<div align=\"center\" dir=\"rtl\">\n			<h1 style=\"margin : 0; width : 40%; text-underline-offset: 10px;\"> \n			تحفظ الأستاذ المستلم قبل النشاط التطبيقي\n            </h1>\n            <br>\n            <p style=\"font-size : 5mm; text-align : justify;\"> \n			يؤسفنا أن نعلمكم انه بتاريخ 2024-06-23 \n			عند استلام الحاجيات الخاصة بالعمل التطبيقي\n			لمقياس Algebre ، مستوى : L2\n			تم تسجيل التحفظات التالية : <br>1 - مشاكل 01<br>2 - مشاكل 20<br>3 - مشاكل 30<br>\n         	</p>\n            <span style=\"font-size : 5mm; text-align : center;\">\n			وعليه نطلب منكم التدخل لرفع الملاحظات السابقة. <br>\n           	وفي الأخير تقبلوا منا فائق التقدير والاحترام.\n			</span>\n		</div>\n		<br><br><br><br>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <p style=\"text-align : center; font-size : 5mm; font-weight : bold;\">\n			رئيس المخابر \n			</p>\n		</div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <p style=\"text-align : right; font-size : 5mm;\">\n			<strong> الأستاذ : </strong> <br>الأستاذ 02  \n			</p>\n		</div>\n	</div>\n</section>\n\n<br><br><br><br>\n<div align=\"center\">\n<button id=\"bouton\" style=\"\n	  background-color: lightgray; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"printdiv(\'fiche\')\"> طباعة </button>\n<button id=\"bouton_2\" style=\"\n	  background-color: lightgreen; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"window.close()\"> رجوع </button>\n<span id=\"btn_div\"><button id=\"bouton_save\" style=\"background-color: lightblue; /* Green */border: none;color: black;cursor: pointer;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" onclick=\"update_reserve()\"> حفظ </button></span>\n\n\n <br><br><br><br>\n</div>\n<script src=\"http://localhost:8000/js/jquery.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-ui-1.10.4.min.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-1.8.3.min.js\"></script>\n<script src=\"http://localhost:8000/js/tagfeet.js\"></script>\n<script type=\"text/javascript\">\nwindow.onload = function(){\n	str = \'<button id=\"bouton_save\" style=\"\'+\n	  \'background-color: lightblue; /* Green */\'+\n	  \'border: none;\'+\n	  \'color: black;\'+\n	  \'cursor: pointer;\'+\n	  \'padding: 15px 32px;\'+\n	  \'text-align: center;\'+\n	  \'text-decoration: none;\'+\n	  \'display: inline-block;\'+\n	  \'font-size: 16px;\"\';\n	if(document.getElementById(\'id_reserve\')){\n  	  	str+= \'onclick=\"update_reserve()\"> حفظ </button>\';\n	}else{\n  	  	str+= \'onclick=\"save()\"> حفظ </button>\';\n	}\n	if(document.getElementById(\'not_user\')){\n		document.getElementsByTagName(\'body\')[0].contentEditable  = \"false\";\n	}\n\n	btn = document.getElementById(\'btn_div\').innerHTML = str;\n\n};\nfunction update_reserve(){\n\n	id_reserve = document.getElementById(\'id_reserve\').value;\n\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n	url = \"/update_reserve\";\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"num\" : num,\n			\"id_reserve\":id_reserve,\n			\"_token\" : \"11uQrX3wRchY54UOukrlf5Msjq5Fmx9WWTIjTm5P\"},\n		success:function(response) {\n			console.log(response);\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction save(){\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n		rapport = \"27\";\n	outil = \"2\";\n	state = \"avis\";\n	year = \"2024\";\n	\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	url = \"/insert_reserve/\";\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"rapport\":rapport,\n			\"outil\":outil,\n			\"state\":state,\n			\"year\":year,\n			\"num\":num,\n			\"_token\" : \"11uQrX3wRchY54UOukrlf5Msjq5Fmx9WWTIjTm5P\"},\n		success:function(response) {\n			console.log(response);\n			window.close();\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction PrintElem(elem)\n{\n    var mywindow = window.open(\'\', \'PRINT\', \'height=400,width=600\');\n\n    mywindow.document.write(\'<html><head><title>\' + document.title  + \'</title>\');\n    mywindow.document.write(\'</head><body >\');\n    mywindow.document.write(\'<h1>\' + document.title  + \'</h1>\');\n    mywindow.document.write(document.getElementById(elem).innerHTML);\n    mywindow.document.write(\'</body></html>\');\n\n    mywindow.print();\n\n\n    return true;\n}\nfunction printdiv(printdivname) {\n	document.getElementById(\'bouton\').style.display = \"none\";\n	document.getElementById(\'bouton_2\').style.display = \"none\";\n   /* var footstr = \"</body>\";\n    var newstr = document.getElementById(printdivname).innerHTML;\n    var oldstr = document.body.innerHTML;\n    document.body.innerHTML = \"\"+newstr+footstr;\n    window.print();\n    document.body.innerHTML = oldstr;*/\n    print();\n    document.getElementById(\'bouton\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_2\').style.display = \"inline-block\";\n	\n    return false;\n}\njQuery(document).bind(\" keydown\", function(e){\n    if(e.ctrlKey && e.keyCode == 80){\n		printdiv(\'fiche\');\n		return false;\n    }\n	\n});\n</script>\n\n\n\n\n\n</body>', 1, 2024),
(10, 15, 28, 1, 'after', '<head>\n	  <!-- Bootstrap CSS -->\n	  <link href=\"http://localhost:8000/css/bootstrap.min.css\" rel=\"stylesheet\">\n	  <!-- bootstrap theme -->\n	<title></title>\n<style type=\"text/css\">\n	@page  {\n	    size: auto;   /* auto is the initial value */\n		size: portrait;\n	    margin: 0;  /* this affects the margin in the printer settings */\n	}\n	@media  print {\n		html,body{\n			height:297mm;\n	    	width:210mm;\n			overflow-y : hidden !important;\n		}\n		\n	}\n	html,body{\n	    height:287mm;\n	    width:210mm;\n	    margin: auto;\n	    line-height: 1.6;\n	    -webkit-print-color-adjust: exact !important;\n	}\n\n\n</style>\n\n<style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style></head>\n<body contenteditable=\"true\" style=\"\">\n<section style=\"background-color: white; text-align: center; font-size: 13.5px; margin: 45px;\" id=\"fiche\">\n	<div id=\"fiche_top\">\n        <div style=\"  display: inline-block; width : 100%\">\n			<img src=\"/header.png\" style=\"width : 100%\">\n		</div>\n		<hr>\n		<div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : left;\">\n            Faculty of Science and technology<br>\n			Laboratory of chemistry, biology, geology\n			</h3><h3>\n		</h3></div>\n		<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <h3 style=\"text-align : right;\">\n            كلية العلوم والتكنولوجيا <br>\n			مخابر الكيمياء البيولوجيا الجيولوجيا\n			</h3>\n		</div>\n		<br><br><br><br><hr>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : center;\">\n            : تامنغست في  \n			</h3><h3>\n		</h3></div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\" contenteditable=\"false\">\n            <h3 style=\"text-align : right;\">\n            رقم القيــــد: <span id=\"num\" contenteditable=\"true\">015</span> ك ع ت / م ك ب ج/ 2024 \n			</h3>\n		</div>\n        <br><br><br><br>\n		<div align=\"center\" dir=\"rtl\">\n			<h1 style=\"margin : 0; width : 60%; text-underline-offset: 10px;\"> \n			تحفظات مهندسو المخابر بعد مزاولة النشاط التطبيقي\n            </h1>\n            <br>\n            <p style=\"font-size : 5mm; text-align : justify;\"> \n			يؤسفنا أن نعلمكم نبلغكم انه وبتاريخ 2024-06-24  \n            بعد الحصة التطبيقية الخاصة بـــــ: <br>\n            المقياس: Analyse <br>\n            الأستاذ: الأستاذ 02 <br>\n            المستوى: L2 <br>\n            الفترة الزمنية للنشاط التطبيقي: 8:00 - 9:30 <br>\n            تم استلام الحاجيات الخاصة بالتحفظات التالية:<br>\n\n			1 - كارثة<br>\n			2 - يجب تدارك الأمر<br>\n			3 - مقزز<br>\n         	</p>\n            <span style=\"font-size : 5mm; text-align : center;\">\n            تــم تقديم هذا التقرير للغاية المرجوة. <br>\n            وفي الأخير تقبلوا منا فائق التقدير والاحترام.\n\n			</span>\n		</div>\n		<br><br><br><br>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <p style=\"text-align : center; font-size : 5mm;\">\n			رئيس المخابر \n			</p>\n		</div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <p style=\"text-align : right; font-size : 5mm;\">\n			: المهندس المتابع للعمل التطبيقي <br>\n						جميع المهندسين\n						</p>\n		</div>\n	</div>\n</section>\n\n<br><br><br><br>\n<div align=\"center\">\n	<button id=\"bouton\" style=\"\n	  background-color: lightgray; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"printdiv(\'fiche\')\"> طباعة </button>\n\n<button id=\"bouton_2\" style=\"\n	  background-color: skyblue; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"window.close()\"> رجوع </button>\n\n<span id=\"btn_div\"><button id=\"bouton_save\" style=\"background-color: lightblue; /* Green */border: none;color: black;cursor: pointer;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" onclick=\"save()\"> حفظ </button></span>\n\n <br><br><br><br>\n</div>\n<script src=\"http://localhost:8000/js/jquery.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-ui-1.10.4.min.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-1.8.3.min.js\"></script>\n<script src=\"http://localhost:8000/js/tagfeet.js\"></script>\n<script type=\"text/javascript\">\nwindow.onload = function(){\n	str = \'<button id=\"bouton_save\" style=\"\'+\n	  \'background-color: lightblue; /* Green */\'+\n	  \'border: none;\'+\n	  \'color: black;\'+\n	  \'cursor: pointer;\'+\n	  \'padding: 15px 32px;\'+\n	  \'text-align: center;\'+\n	  \'text-decoration: none;\'+\n	  \'display: inline-block;\'+\n	  \'font-size: 16px;\"\';\n	if(document.getElementById(\'id_reserve\')){\n  	  	str+= \'onclick=\"update_reserve()\"> حفظ </button>\';\n	}else{\n  	  	str+= \'onclick=\"save()\"> حفظ </button>\';\n	}\n	if(document.getElementById(\'not_user\')){\n		document.getElementsByTagName(\'body\')[0].contentEditable  = \"false\";\n	}\n\n	btn = document.getElementById(\'btn_div\').innerHTML = str;\n\n};\nfunction update_reserve(){\n\n	id_reserve = document.getElementById(\'id_reserve\').value;\n\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n	url = \"/update_reserve\";\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"num\" : num,\n			\"id_reserve\":id_reserve,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction save(){\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n		rapport = \"28\";\n	outil = \"1\";\n	state = \"after\";\n	year = \"2024\";\n	\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	url = \"/insert_reserve/\";\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"rapport\":rapport,\n			\"outil\":outil,\n			\"state\":state,\n			\"year\":year,\n			\"num\":num,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n			window.close();\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction PrintElem(elem)\n{\n    var mywindow = window.open(\'\', \'PRINT\', \'height=400,width=600\');\n\n    mywindow.document.write(\'<html><head><title>\' + document.title  + \'</title>\');\n    mywindow.document.write(\'</head><body >\');\n    mywindow.document.write(\'<h1>\' + document.title  + \'</h1>\');\n    mywindow.document.write(document.getElementById(elem).innerHTML);\n    mywindow.document.write(\'</body></html>\');\n\n    mywindow.print();\n\n\n    return true;\n}\nfunction printdiv(printdivname) {\n	document.getElementById(\'bouton\').style.display = \"none\";\n	document.getElementById(\'bouton_save\').style.display = \"none\";\n	document.getElementById(\'bouton_2\').style.display = \"none\";\n   /* var footstr = \"</body>\";\n    var newstr = document.getElementById(printdivname).innerHTML;\n    var oldstr = document.body.innerHTML;\n    document.body.innerHTML = \"\"+newstr+footstr;\n    window.print();\n    document.body.innerHTML = oldstr;*/\n    print();\n    document.getElementById(\'bouton\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_2\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_save\').style.display = \"inline-block\";\n	\n    return false;\n}\njQuery(document).bind(\" keydown\", function(e){\n    if(e.ctrlKey && e.keyCode == 80){\n		printdiv(\'fiche\');\n		return false;\n    }\n	\n});\n</script>\n\n\n\n\n</body>', 1, 2024),
(11, 16, 28, 1, 'avis', '<head>\n	  <!-- Bootstrap CSS -->\n	  <link href=\"http://localhost:8000/css/bootstrap.min.css\" rel=\"stylesheet\">\n	  <!-- bootstrap theme -->\n	<title></title>\n<style type=\"text/css\">\n	@page  {\n	    size: auto;   /* auto is the initial value */\n		size: portrait;\n	    margin: 0;  /* this affects the margin in the printer settings */\n	}\n	@media  print {\n		html,body{\n			height:297mm;\n	    	width:210mm;\n			overflow-y : hidden !important;\n		}\n		\n	}\n	html,body{\n	    height:287mm;\n	    width:210mm;\n	    margin: auto;\n	    line-height: 1.6;\n	    -webkit-print-color-adjust: exact !important;\n	}\n\n\n</style>\n\n<style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style></head>\n<body contenteditable=\"true\" dir=\"rtl\" style=\"\">\n<section style=\"background-color: white; text-align: center; font-size: 13.5px; margin: 45px;\" id=\"fiche\">\n	<div id=\"fiche_top\">\n        <div style=\"  display: inline-block; width : 100%\">\n			<img src=\"/header.png\" style=\"width : 100%\">\n		</div>\n		<hr>\n		<div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : left;\">\n            Faculty of Science and technology<br>\n			Laboratory of chemistry, biology, geology\n			</h3><h3>\n		</h3></div>\n		<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <h3 style=\"text-align : right;\">\n            كلية العلوم والتكنولوجيا <br>\n			مخابر الكيمياء البيولوجيا الجيولوجيا\n			</h3>\n		</div>\n		<br><br><br><br><hr>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : center;\">\n            : تامنغست في  \n			</h3><h3>\n		</h3></div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\" contenteditable=\"false\">\n            <h3 style=\"text-align : right;\">\n            رقم القيــــد: <span id=\"num\" contenteditable=\"true\">016</span> ك ع ت / م ك ب ج/ 2024 \n			</h3>\n		</div>\n        <br><br><br><br>\n		<div align=\"center\" dir=\"rtl\">\n			<h1 style=\"margin : 0; width : 40%; text-underline-offset: 10px;\"> \n			تحفظ الأستاذ المستلم قبل النشاط التطبيقي\n            </h1>\n            <br>\n            <p style=\"font-size : 5mm; text-align : justify;\"> \n			يؤسفنا أن نعلمكم انه بتاريخ 2024-06-24 \n			عند استلام الحاجيات الخاصة بالعمل التطبيقي\n			لمقياس Analyse ، مستوى : L2\n			تم تسجيل التحفظات التالية : <br>\n			1 - لا يعمل<br><br>\n         	</p>\n            <span style=\"font-size : 5mm; text-align : center;\">\n			وعليه نطلب منكم التدخل لرفع الملاحظات السابقة. <br>\n           	وفي الأخير تقبلوا منا فائق التقدير والاحترام.\n			</span>\n		</div>\n		<br><br><br><br>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <p style=\"text-align : center; font-size : 5mm; font-weight : bold;\">\n			رئيس المخابر \n			</p>\n		</div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <p style=\"text-align : right; font-size : 5mm;\">\n			<strong> الأستاذ : </strong> <br>الأستاذ 02  \n			</p>\n		</div>\n	</div>\n</section>\n\n<br><br><br><br>\n<div align=\"center\">\n<button id=\"bouton\" style=\"\n	  background-color: lightgray; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"printdiv(\'fiche\')\"> طباعة </button>\n<button id=\"bouton_2\" style=\"\n	  background-color: lightgreen; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"window.close()\"> رجوع </button>\n<span id=\"btn_div\"><button id=\"bouton_save\" style=\"background-color: lightblue; /* Green */border: none;color: black;cursor: pointer;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" onclick=\"save()\"> حفظ </button></span>\n\n\n <br><br><br><br>\n</div>\n<script src=\"http://localhost:8000/js/jquery.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-ui-1.10.4.min.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-1.8.3.min.js\"></script>\n<script src=\"http://localhost:8000/js/tagfeet.js\"></script>\n<script type=\"text/javascript\">\nwindow.onload = function(){\n	str = \'<button id=\"bouton_save\" style=\"\'+\n	  \'background-color: lightblue; /* Green */\'+\n	  \'border: none;\'+\n	  \'color: black;\'+\n	  \'cursor: pointer;\'+\n	  \'padding: 15px 32px;\'+\n	  \'text-align: center;\'+\n	  \'text-decoration: none;\'+\n	  \'display: inline-block;\'+\n	  \'font-size: 16px;\"\';\n	if(document.getElementById(\'id_reserve\')){\n  	  	str+= \'onclick=\"update_reserve()\"> حفظ </button>\';\n	}else{\n  	  	str+= \'onclick=\"save()\"> حفظ </button>\';\n	}\n	if(document.getElementById(\'not_user\')){\n		document.getElementsByTagName(\'body\')[0].contentEditable  = \"false\";\n	}\n\n	btn = document.getElementById(\'btn_div\').innerHTML = str;\n\n};\nfunction update_reserve(){\n\n	id_reserve = document.getElementById(\'id_reserve\').value;\n\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n	url = \"/update_reserve\";\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"num\" : num,\n			\"id_reserve\":id_reserve,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction save(){\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n		rapport = \"28\";\n	outil = \"1\";\n	state = \"avis\";\n	year = \"2024\";\n	\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	url = \"/insert_reserve/\";\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"rapport\":rapport,\n			\"outil\":outil,\n			\"state\":state,\n			\"year\":year,\n			\"num\":num,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n			window.close();\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction PrintElem(elem)\n{\n    var mywindow = window.open(\'\', \'PRINT\', \'height=400,width=600\');\n\n    mywindow.document.write(\'<html><head><title>\' + document.title  + \'</title>\');\n    mywindow.document.write(\'</head><body >\');\n    mywindow.document.write(\'<h1>\' + document.title  + \'</h1>\');\n    mywindow.document.write(document.getElementById(elem).innerHTML);\n    mywindow.document.write(\'</body></html>\');\n\n    mywindow.print();\n\n\n    return true;\n}\nfunction printdiv(printdivname) {\n	document.getElementById(\'bouton\').style.display = \"none\";\n	document.getElementById(\'bouton_save\').style.display = \"none\";\n	document.getElementById(\'bouton_2\').style.display = \"none\";\n   /* var footstr = \"</body>\";\n    var newstr = document.getElementById(printdivname).innerHTML;\n    var oldstr = document.body.innerHTML;\n    document.body.innerHTML = \"\"+newstr+footstr;\n    window.print();\n    document.body.innerHTML = oldstr;*/\n    print();\n    document.getElementById(\'bouton\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_2\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_save\').style.display = \"inline-block\";\n	\n    return false;\n}\njQuery(document).bind(\" keydown\", function(e){\n    if(e.ctrlKey && e.keyCode == 80){\n		printdiv(\'fiche\');\n		return false;\n    }\n	\n});\n</script>\n\n\n\n\n</body>', 1, 2024),
(12, 17, 28, 2, 'avis', '<head>\n	  <!-- Bootstrap CSS -->\n	  <link href=\"http://localhost:8000/css/bootstrap.min.css\" rel=\"stylesheet\">\n	  <!-- bootstrap theme -->\n	<title></title>\n<style type=\"text/css\">\n	@page  {\n	    size: auto;   /* auto is the initial value */\n		size: portrait;\n	    margin: 0;  /* this affects the margin in the printer settings */\n	}\n	@media  print {\n		html,body{\n			height:297mm;\n	    	width:210mm;\n			overflow-y : hidden !important;\n		}\n		\n	}\n	html,body{\n	    height:287mm;\n	    width:210mm;\n	    margin: auto;\n	    line-height: 1.6;\n	    -webkit-print-color-adjust: exact !important;\n	}\n\n\n</style>\n\n<style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style></head>\n<body contenteditable=\"true\" dir=\"rtl\" style=\"\">\n<section style=\"background-color: white; text-align: center; font-size: 13.5px; margin: 45px;\" id=\"fiche\">\n	<div id=\"fiche_top\">\n        <div style=\"  display: inline-block; width : 100%\">\n			<img src=\"/header.png\" style=\"width : 100%\">\n		</div>\n		<hr>\n		<div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : left;\">\n            Faculty of Science and technology<br>\n			Laboratory of chemistry, biology, geology\n			</h3><h3>\n		</h3></div>\n		<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <h3 style=\"text-align : right;\">\n            كلية العلوم والتكنولوجيا <br>\n			مخابر الكيمياء البيولوجيا الجيولوجيا\n			</h3>\n		</div>\n		<br><br><br><br><hr>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : center;\">\n            : تامنغست في  \n			</h3><h3>\n		</h3></div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\" contenteditable=\"false\">\n            <h3 style=\"text-align : right;\">\n            رقم القيــــد: <span id=\"num\" contenteditable=\"true\">017</span> ك ع ت / م ك ب ج/ 2024 \n			</h3>\n		</div>\n        <br><br><br><br>\n		<div align=\"center\" dir=\"rtl\">\n			<h1 style=\"margin : 0; width : 40%; text-underline-offset: 10px;\"> \n			تحفظ الأستاذ المستلم قبل النشاط التطبيقي\n            </h1>\n            <br>\n            <p style=\"font-size : 5mm; text-align : justify;\"> \n			يؤسفنا أن نعلمكم انه بتاريخ 2024-06-24 \n			عند استلام الحاجيات الخاصة بالعمل التطبيقي\n			لمقياس Analyse ، مستوى : L2\n			تم تسجيل التحفظات التالية : <br>\n			1 - لا يوجد حبر<br><br>\n         	</p>\n            <span style=\"font-size : 5mm; text-align : center;\">\n			وعليه نطلب منكم التدخل لرفع الملاحظات السابقة. <br>\n           	وفي الأخير تقبلوا منا فائق التقدير والاحترام.\n			</span>\n		</div>\n		<br><br><br><br>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <p style=\"text-align : center; font-size : 5mm; font-weight : bold;\">\n			رئيس المخابر \n			</p>\n		</div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <p style=\"text-align : right; font-size : 5mm;\">\n			<strong> الأستاذ : </strong> <br>الأستاذ 02  \n			</p>\n		</div>\n	</div>\n</section>\n\n<br><br><br><br>\n<div align=\"center\">\n<button id=\"bouton\" style=\"\n	  background-color: lightgray; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"printdiv(\'fiche\')\"> طباعة </button>\n<button id=\"bouton_2\" style=\"\n	  background-color: lightgreen; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"window.close()\"> رجوع </button>\n<span id=\"btn_div\"><button id=\"bouton_save\" style=\"background-color: lightblue; /* Green */border: none;color: black;cursor: pointer;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" onclick=\"save()\"> حفظ </button></span>\n\n\n <br><br><br><br>\n</div>\n<script src=\"http://localhost:8000/js/jquery.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-ui-1.10.4.min.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-1.8.3.min.js\"></script>\n<script src=\"http://localhost:8000/js/tagfeet.js\"></script>\n<script type=\"text/javascript\">\nwindow.onload = function(){\n	str = \'<button id=\"bouton_save\" style=\"\'+\n	  \'background-color: lightblue; /* Green */\'+\n	  \'border: none;\'+\n	  \'color: black;\'+\n	  \'cursor: pointer;\'+\n	  \'padding: 15px 32px;\'+\n	  \'text-align: center;\'+\n	  \'text-decoration: none;\'+\n	  \'display: inline-block;\'+\n	  \'font-size: 16px;\"\';\n	if(document.getElementById(\'id_reserve\')){\n  	  	str+= \'onclick=\"update_reserve()\"> حفظ </button>\';\n	}else{\n  	  	str+= \'onclick=\"save()\"> حفظ </button>\';\n	}\n	if(document.getElementById(\'not_user\')){\n		document.getElementsByTagName(\'body\')[0].contentEditable  = \"false\";\n	}\n\n	btn = document.getElementById(\'btn_div\').innerHTML = str;\n\n};\nfunction update_reserve(){\n\n	id_reserve = document.getElementById(\'id_reserve\').value;\n\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n	url = \"/update_reserve\";\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"num\" : num,\n			\"id_reserve\":id_reserve,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction save(){\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n		rapport = \"28\";\n	outil = \"2\";\n	state = \"avis\";\n	year = \"2024\";\n	\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	url = \"/insert_reserve/\";\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"rapport\":rapport,\n			\"outil\":outil,\n			\"state\":state,\n			\"year\":year,\n			\"num\":num,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n			window.close();\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction PrintElem(elem)\n{\n    var mywindow = window.open(\'\', \'PRINT\', \'height=400,width=600\');\n\n    mywindow.document.write(\'<html><head><title>\' + document.title  + \'</title>\');\n    mywindow.document.write(\'</head><body >\');\n    mywindow.document.write(\'<h1>\' + document.title  + \'</h1>\');\n    mywindow.document.write(document.getElementById(elem).innerHTML);\n    mywindow.document.write(\'</body></html>\');\n\n    mywindow.print();\n\n\n    return true;\n}\nfunction printdiv(printdivname) {\n	document.getElementById(\'bouton\').style.display = \"none\";\n	document.getElementById(\'bouton_save\').style.display = \"none\";\n	document.getElementById(\'bouton_2\').style.display = \"none\";\n   /* var footstr = \"</body>\";\n    var newstr = document.getElementById(printdivname).innerHTML;\n    var oldstr = document.body.innerHTML;\n    document.body.innerHTML = \"\"+newstr+footstr;\n    window.print();\n    document.body.innerHTML = oldstr;*/\n    print();\n    document.getElementById(\'bouton\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_2\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_save\').style.display = \"inline-block\";\n	\n    return false;\n}\njQuery(document).bind(\" keydown\", function(e){\n    if(e.ctrlKey && e.keyCode == 80){\n		printdiv(\'fiche\');\n		return false;\n    }\n	\n});\n</script>\n\n\n\n\n</body>', 1, 2024),
(13, 18, 29, 1, 'avis', '<head><style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style></head><body contenteditable=\"true\" dir=\"rtl\" style=\"\"><input type=\"hidden\" id=\"id_reserve\" value=\"13\">\n\n	  <!-- Bootstrap CSS -->\n	  <link href=\"http://localhost:8000/css/bootstrap.min.css\" rel=\"stylesheet\">\n	  <!-- bootstrap theme -->\n	<title></title>\n<style type=\"text/css\">\n	@page  {\n	    size: auto;   /* auto is the initial value */\n		size: portrait;\n	    margin: 0;  /* this affects the margin in the printer settings */\n	}\n	@media  print {\n		html,body{\n			height:297mm;\n	    	width:210mm;\n			overflow-y : hidden !important;\n		}\n		\n	}\n	html,body{\n	    height:287mm;\n	    width:210mm;\n	    margin: auto;\n	    line-height: 1.6;\n	    -webkit-print-color-adjust: exact !important;\n	}\n\n\n</style>\n\n<style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style>\n\n<section style=\"background-color: white; text-align: center; font-size: 13.5px; margin: 45px;\" id=\"fiche\">\n	<div id=\"fiche_top\">\n        <div style=\"  display: inline-block; width : 100%\">\n			<img src=\"/header.png\" style=\"width : 100%\">\n		</div>\n		<hr>\n		<div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : left;\">\n            Faculty of Science and technology<br>\n			Laboratory of chemistry, biology, geology\n			</h3><h3>\n		</h3></div>\n		<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <h3 style=\"text-align : right;\">\n            كلية العلوم والتكنولوجيا <br>\n			مخابر الكيمياء البيولوجيا الجيولوجيا\n			</h3>\n		</div>\n		<br><br><br><br><hr>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : center;\">\n            : تامنغست في  \n			</h3><h3>\n		</h3></div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\" contenteditable=\"false\">\n            <h3 style=\"text-align : right;\">\n            رقم القيــــد: <span id=\"num\" contenteditable=\"true\">018</span> ك ع ت / م ك ب ج/ 2024 \n			</h3>\n		</div>\n        <br><br><br><br>\n		<div align=\"center\" dir=\"rtl\">\n			<h1 style=\"margin : 0; width : 40%; text-underline-offset: 10px;\"> \n			تحفظ الأستاذ المستلم قبل النشاط التطبيقي\n            </h1>\n            <br>\n            <p style=\"font-size : 5mm; text-align : justify;\"> \n			يؤسفنا أن نعلمكم انه بتاريخ 2024-06-24 \n			عند استلام الحاجيات الخاصة بالعمل التطبيقي\n			لمقياس Algebre ، مستوى : L2\n			تم تسجيل التحفظات التالية : <br>\n			1 - لا يعمل<br>\n         	</p>\n            <span style=\"font-size : 5mm; text-align : center;\">\n			وعليه نطلب منكم التدخل لرفع الملاحظات السابقة. <br>\n           	وفي الأخير تقبلوا منا فائق التقدير والاحترام.\n			</span>\n		</div>\n		<br><br><br><br>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <p style=\"text-align : center; font-size : 5mm; font-weight : bold;\">\n			رئيس المخابر \n			</p>\n		</div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <p style=\"text-align : right; font-size : 5mm;\">\n			<strong> الأستاذ : </strong> <br>الأستاذ 01  \n			</p>\n		</div>\n	</div>\n</section>\n\n<br><br><br><br>\n<div align=\"center\">\n<button id=\"bouton\" style=\"\n	  background-color: lightgray; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"printdiv(\'fiche\')\"> طباعة </button>\n<button id=\"bouton_2\" style=\"\n	  background-color: lightgreen; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"window.close()\"> رجوع </button>\n<span id=\"btn_div\"><button id=\"bouton_save\" style=\"background-color: lightblue; /* Green */border: none;color: black;cursor: pointer;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" onclick=\"update_reserve()\"> حفظ </button></span>\n\n\n <br><br><br><br>\n</div>\n<script src=\"http://localhost:8000/js/jquery.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-ui-1.10.4.min.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-1.8.3.min.js\"></script>\n<script src=\"http://localhost:8000/js/tagfeet.js\"></script>\n<script type=\"text/javascript\">\nwindow.onload = function(){\n	str = \'<button id=\"bouton_save\" style=\"\'+\n	  \'background-color: lightblue; /* Green */\'+\n	  \'border: none;\'+\n	  \'color: black;\'+\n	  \'cursor: pointer;\'+\n	  \'padding: 15px 32px;\'+\n	  \'text-align: center;\'+\n	  \'text-decoration: none;\'+\n	  \'display: inline-block;\'+\n	  \'font-size: 16px;\"\';\n	if(document.getElementById(\'id_reserve\')){\n  	  	str+= \'onclick=\"update_reserve()\"> حفظ </button>\';\n	}else{\n  	  	str+= \'onclick=\"save()\"> حفظ </button>\';\n	}\n	if(document.getElementById(\'not_user\')){\n		document.getElementsByTagName(\'body\')[0].contentEditable  = \"false\";\n	}\n\n	btn = document.getElementById(\'btn_div\').innerHTML = str;\n\n};\nfunction update_reserve(){\n\n	id_reserve = document.getElementById(\'id_reserve\').value;\n\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n	url = \"/update_reserve\";\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"num\" : num,\n			\"id_reserve\":id_reserve,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction save(){\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n		rapport = \"29\";\n	outil = \"1\";\n	state = \"avis\";\n	year = \"2024\";\n	\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	url = \"/insert_reserve/\";\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"rapport\":rapport,\n			\"outil\":outil,\n			\"state\":state,\n			\"year\":year,\n			\"num\":num,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n			window.close();\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction PrintElem(elem)\n{\n    var mywindow = window.open(\'\', \'PRINT\', \'height=400,width=600\');\n\n    mywindow.document.write(\'<html><head><title>\' + document.title  + \'</title>\');\n    mywindow.document.write(\'</head><body >\');\n    mywindow.document.write(\'<h1>\' + document.title  + \'</h1>\');\n    mywindow.document.write(document.getElementById(elem).innerHTML);\n    mywindow.document.write(\'</body></html>\');\n\n    mywindow.print();\n\n\n    return true;\n}\nfunction printdiv(printdivname) {\n	document.getElementById(\'bouton\').style.display = \"none\";\n	document.getElementById(\'bouton_save\').style.display = \"none\";\n	document.getElementById(\'bouton_2\').style.display = \"none\";\n   /* var footstr = \"</body>\";\n    var newstr = document.getElementById(printdivname).innerHTML;\n    var oldstr = document.body.innerHTML;\n    document.body.innerHTML = \"\"+newstr+footstr;\n    window.print();\n    document.body.innerHTML = oldstr;*/\n    print();\n    document.getElementById(\'bouton\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_2\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_save\').style.display = \"inline-block\";\n	\n    return false;\n}\njQuery(document).bind(\" keydown\", function(e){\n    if(e.ctrlKey && e.keyCode == 80){\n		printdiv(\'fiche\');\n		return false;\n    }\n	\n});\n</script>\n\n\n\n\n\n</body>', 1, 2024),
(14, 19, 29, 2, 'after', '<head>\n	  <!-- Bootstrap CSS -->\n	  <link href=\"http://localhost:8000/css/bootstrap.min.css\" rel=\"stylesheet\">\n	  <!-- bootstrap theme -->\n	<title></title>\n<style type=\"text/css\">\n	@page  {\n	    size: auto;   /* auto is the initial value */\n		size: portrait;\n	    margin: 0;  /* this affects the margin in the printer settings */\n	}\n	@media  print {\n		html,body{\n			height:297mm;\n	    	width:210mm;\n			overflow-y : hidden !important;\n		}\n		\n	}\n	html,body{\n	    height:287mm;\n	    width:210mm;\n	    margin: auto;\n	    line-height: 1.6;\n	    -webkit-print-color-adjust: exact !important;\n	}\n\n\n</style>\n\n<style type=\"text/css\" id=\"operaUserStyle\"></style><style type=\"text/css\"></style></head>\n<body contenteditable=\"true\" style=\"\">\n<section style=\"background-color: white; text-align: center; font-size: 13.5px; margin: 45px;\" id=\"fiche\">\n	<div id=\"fiche_top\">\n        <div style=\"  display: inline-block; width : 100%\">\n			<img src=\"/header.png\" style=\"width : 100%\">\n		</div>\n		<hr>\n		<div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : left;\">\n            Faculty of Science and technology<br>\n			Laboratory of chemistry, biology, geology\n			</h3><h3>\n		</h3></div>\n		<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <h3 style=\"text-align : right;\">\n            كلية العلوم والتكنولوجيا <br>\n			مخابر الكيمياء البيولوجيا الجيولوجيا\n			</h3>\n		</div>\n		<br><br><br><br><hr>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <h3 style=\"text-align : center;\">\n            : تامنغست في  \n			</h3><h3>\n		</h3></div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\" contenteditable=\"false\">\n            <h3 style=\"text-align : right;\">\n            رقم القيــــد: <span id=\"num\" contenteditable=\"true\">019</span> ك ع ت / م ك ب ج/ 2024 \n			</h3>\n		</div>\n        <br><br><br><br>\n		<div align=\"center\" dir=\"rtl\">\n			<h1 style=\"margin : 0; width : 60%; text-underline-offset: 10px;\"> \n			تحفظات مهندسو المخابر بعد مزاولة النشاط التطبيقي\n            </h1>\n            <br>\n            <p style=\"font-size : 5mm; text-align : justify;\"> \n			يؤسفنا أن نعلمكم نبلغكم انه وبتاريخ 2024-06-24  \n            بعد الحصة التطبيقية الخاصة بـــــ: <br>\n            المقياس: Algebre <br>\n            الأستاذ: الأستاذ 01 <br>\n            المستوى: L2 <br>\n            الفترة الزمنية للنشاط التطبيقي: 8:00 - 9:30 <br>\n            تم استلام الحاجيات الخاصة بالتحفظات التالية:<br>\n\n			1 - تم كسرها<br>\n         	</p>\n            <span style=\"font-size : 5mm; text-align : center;\">\n            تــم تقديم هذا التقرير للغاية المرجوة. <br>\n            وفي الأخير تقبلوا منا فائق التقدير والاحترام.\n\n			</span>\n		</div>\n		<br><br><br><br>\n        <div style=\"  display: inline-block; float: left; width : 45%;\" dir=\"ltr\">\n            <p style=\"text-align : center; font-size : 5mm;\">\n			رئيس المخابر \n			</p>\n		</div>\n				<div style=\"  display: inline-block; float: right; width : 45%;\">\n            <p style=\"text-align : right; font-size : 5mm;\">\n			: المهندس المتابع للعمل التطبيقي <br>\n						جميع المهندسين\n						</p>\n		</div>\n	</div>\n</section>\n\n<br><br><br><br>\n<div align=\"center\">\n	<button id=\"bouton\" style=\"\n	  background-color: lightgray; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"printdiv(\'fiche\')\"> طباعة </button>\n\n<button id=\"bouton_2\" style=\"\n	  background-color: skyblue; /* Green */\n	  border: none;\n	  color: black;\n	  cursor: pointer;\n	  padding: 15px 32px;\n	  text-align: center;\n	  text-decoration: none;\n	  display: inline-block;\n	  font-size: 16px;\" onclick=\"window.close()\"> رجوع </button>\n\n<span id=\"btn_div\"><button id=\"bouton_save\" style=\"background-color: lightblue; /* Green */border: none;color: black;cursor: pointer;padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;font-size: 16px;\" onclick=\"save()\"> حفظ </button></span>\n\n <br><br><br><br>\n</div>\n<script src=\"http://localhost:8000/js/jquery.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-ui-1.10.4.min.js\"></script>\n<script src=\"http://localhost:8000/js/jquery-1.8.3.min.js\"></script>\n<script src=\"http://localhost:8000/js/tagfeet.js\"></script>\n<script type=\"text/javascript\">\nwindow.onload = function(){\n	str = \'<button id=\"bouton_save\" style=\"\'+\n	  \'background-color: lightblue; /* Green */\'+\n	  \'border: none;\'+\n	  \'color: black;\'+\n	  \'cursor: pointer;\'+\n	  \'padding: 15px 32px;\'+\n	  \'text-align: center;\'+\n	  \'text-decoration: none;\'+\n	  \'display: inline-block;\'+\n	  \'font-size: 16px;\"\';\n	if(document.getElementById(\'id_reserve\')){\n  	  	str+= \'onclick=\"update_reserve()\"> حفظ </button>\';\n	}else{\n  	  	str+= \'onclick=\"save()\"> حفظ </button>\';\n	}\n	if(document.getElementById(\'not_user\')){\n		document.getElementsByTagName(\'body\')[0].contentEditable  = \"false\";\n	}\n\n	btn = document.getElementById(\'btn_div\').innerHTML = str;\n\n};\nfunction update_reserve(){\n\n	id_reserve = document.getElementById(\'id_reserve\').value;\n\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n	url = \"/update_reserve\";\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"num\" : num,\n			\"id_reserve\":id_reserve,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction save(){\n	num = document.getElementById(\'num\').innerHTML.replace(/\\D/g,\'\');\n		rapport = \"29\";\n	outil = \"2\";\n	state = \"after\";\n	year = \"2024\";\n	\n	const html = document.getElementsByTagName(\'html\')[0].innerHTML;\n	url = \"/insert_reserve/\";\n	$.ajax({\n	    url: url,\n	    type:\"POST\", \n	    cache: false,\n		data : {\n			\"html\":html,\n			\"rapport\":rapport,\n			\"outil\":outil,\n			\"state\":state,\n			\"year\":year,\n			\"num\":num,\n			\"_token\" : \"LdGM6FWWxj6EEzA5op9q7WMMRbJCCOPCkkNu204h\"},\n		success:function(response) {\n			console.log(response);\n			window.close();\n		},\n		error:function(response) {\n			console.log(response);\n		},\n	});\n}\n\nfunction PrintElem(elem)\n{\n    var mywindow = window.open(\'\', \'PRINT\', \'height=400,width=600\');\n\n    mywindow.document.write(\'<html><head><title>\' + document.title  + \'</title>\');\n    mywindow.document.write(\'</head><body >\');\n    mywindow.document.write(\'<h1>\' + document.title  + \'</h1>\');\n    mywindow.document.write(document.getElementById(elem).innerHTML);\n    mywindow.document.write(\'</body></html>\');\n\n    mywindow.print();\n\n\n    return true;\n}\nfunction printdiv(printdivname) {\n	document.getElementById(\'bouton\').style.display = \"none\";\n	document.getElementById(\'bouton_save\').style.display = \"none\";\n	document.getElementById(\'bouton_2\').style.display = \"none\";\n   /* var footstr = \"</body>\";\n    var newstr = document.getElementById(printdivname).innerHTML;\n    var oldstr = document.body.innerHTML;\n    document.body.innerHTML = \"\"+newstr+footstr;\n    window.print();\n    document.body.innerHTML = oldstr;*/\n    print();\n    document.getElementById(\'bouton\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_2\').style.display = \"inline-block\";\n	document.getElementById(\'bouton_save\').style.display = \"inline-block\";\n	\n    return false;\n}\njQuery(document).bind(\" keydown\", function(e){\n    if(e.ctrlKey && e.keyCode == 80){\n		printdiv(\'fiche\');\n		return false;\n    }\n	\n});\n</script>\n\n\n\n\n</body>', 1, 2024);

-- --------------------------------------------------------

--
-- Table structure for table `safe`
--

DROP TABLE IF EXISTS `safe`;
CREATE TABLE IF NOT EXISTS `safe` (
  `id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `safe`
--

INSERT INTO `safe` (`id`, `password`) VALUES
(1, 'admin'),
(2, '0505'),
(46, '010203'),
(47, '456789'),
(48, '012345'),
(49, '2023'),
(50, '1989');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id_teacher` int(11) NOT NULL AUTO_INCREMENT,
  `name_teacher` text NOT NULL,
  PRIMARY KEY (`id_teacher`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name_teacher`) VALUES
(1, 'الأستاذ 01'),
(2, 'الأستاذ 02');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

DROP TABLE IF EXISTS `tools`;
CREATE TABLE IF NOT EXISTS `tools` (
  `id_tool` int(11) NOT NULL AUTO_INCREMENT,
  `name_tool` varchar(50) NOT NULL,
  `inventaire` text NOT NULL,
  `type` varchar(50) NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tool`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id_tool`, `name_tool`, `inventaire`, `type`, `state`) VALUES
(1, 'حاسوب', '01/2023', 'جهاز', NULL),
(2, 'طابعة', '02/2023', 'جهاز', NULL),
(3, 'أنبوب', '03/2024', 'مادة', NULL),
(4, 'مسطرة', '016/2024', 'مادة', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `service` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` text,
  `chapitre` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `position`, `service`, `password`, `photo`, `chapitre`) VALUES
(1, 'admin', 'Ingenieur 0123', 'Admin', 'Ingenieur', '$2y$10$QUvbulG1G1XJbKL9SznJD.Lz.gVdoXaKPWtqVCnSHztVnoW0mcqZ.', 'uploads/users/1_user_avatar.jpg', NULL),
(2, 'mehdi', 'Mehdi', 'Employé', 'Chef des Labos', '$2y$10$4HZ1pVMOEwe9ilvNpc0Xx.bZY106oa1CdqThqJLodCldccQQZVxAG', 'uploads/users/1_user_avatar.jpg', '622,302-089-002'),
(50, 'raouf', 'Raouf', 'Employé', 'Ingenieur', '$2y$10$UCmq1DgifkvBCgV91YCm1ODbPWjcsr.KS30H7jDfwbbexG58dSD.W', 'img/user_avatar.jpg', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
