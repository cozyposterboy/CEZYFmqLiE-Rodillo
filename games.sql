-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2019 at 06:55 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `ID` int(5) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `genre` text NOT NULL,
  `price` int(5) NOT NULL,
  `description` text NOT NULL,
   PRIMARY KEY ('id')
) ENGINE=InnoDB DEFAULT CHARSET=latin1; AUTO_INCREMENT=21;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`ID`, `name`, `genre`, `price`, `description`) VALUES
(1, 'Tekken 7', 'Fighting', 1280, 'Tekken 7 is a fighting game developed and published by Bandai Namco Entertainment. The game is an installment in the Tekken series, and was the first to make use of the Unreal Engine. Tekken 7 had a limited arcade release in March 2015.'),
(2, 'PUBG', 'Battle Royale', 849, 'PlayerUnknown\'s Battlegrounds (PUBG) is an online multiplayer battle royale game developed and published by PUBG Corporation BlueHole'),
(3, 'Dota 2', 'MOBA', 0, 'Dota 2 is a multiplayer online battle arena (MOBA) video game developed and published by Valve. The game is a sequel to Defense of the Ancients (DotA)'),
(4, 'Assassin\'s Creed Odyssey', 'Open World RPG', 1099, 'Assassin\'s Creed Odyssey is an action role-playing video game developed by Ubisoft Quebec and published by Ubisoft. It is the 11th major installment, and 21st overall, in the Assassin\'s Creed series and the successor to 2017\'s Assassin\'s Creed Origins.'),
(5, 'GTA 5', 'Open World RPG', 2000, 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the first main entry in the Grand Theft Auto series since 2008\'s Grand Theft Auto IV.'),
(6, 'Fortnite', 'Battle Royale', 0, 'Fortnite is an online video game developed by Epic Games and released in 2017.'),
(7, 'Minecraft', 'Sandbox', 500, 'Minecraft is a sandbox video game created by Swedish developer Markus Persson, released by Mojang in 2011 and purchased by Microsoft in 2014.'),
(8, 'Hitman ', 'Stealth Action RPG', 1200, 'Hitman is a stealth video game series developed by the Danish company IO Interactive, previously published by Eidos Interactive and Square Enix.'),
(9, 'Counter-Strike:Global Off', 'First Person Shooter', 499, 'Counter-Strike: Global Offensive (CS:GO) is a first-person shooter video game which is a part of the Counter-Strike series. It was announced to the public on August 12, 2011, and is developed by Valve Corporation and their partner, Hidden Path Entertainment.'),
(10, 'Fifa 19', 'Sports', 999, 'FIFA 19 is a football simulation video game developed by EA Vancouver as part of Electronic Arts\' FIFA series.'),
(11, 'Call Of Duty 4: MW', 'First Person Shooter', 800, 'Call of Duty 4: Modern Warfare is a 2007 first-person shooter developed by Infinity Ward and published by Activision.'),
(12, 'NBA 2K19', 'Sports', 1299, 'NBA 2K19 is a basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association'),
(13, 'WWE 2K19', 'Sports', 999, 'WWE 2K19 is a professional wrestling video game developed by Yuke\'s and published by 2K Sports. It was released worldwide on October 9, 2018.'),
(14, 'Mortal Kombat XL', 'Fighting', 1999, 'Mortal Kombat X (MKX) is a fighting video game developed by NetherRealm Studios and published by Warner Bros. Interactive Entertainment.'),
(15, 'Outlast', 'Horror', 399, 'Outlast is a first-person psychological horror survival video game developed and published by Red Barrels.'),
(16, 'Outlast 2', 'Horror', 699, 'Outlast 2 is a first-person psychological horror survival video game developed and published by Red Barrels. It is the sequel to the 2013 video game Outlast'),
(17, 'Apex Legends', 'Battle Royale', 0, 'Apex Legends is a free-to-play first-person shooter battle royale video game developed by Respawn Entertainment and published by EA.'),
(18, 'NBA 2K20', 'Sports', 1499, 'NBA 2K20 is a basketball simulation video game developed by Visual Concepts and published by 2K Sports, based on the National Basketball Association.'),
(19, 'Tom Clancy\'s Rainbow Six ', 'First Person Shooter', 599, 'Tom Clancy\'s Rainbow Six Siege is an online tactical shooter video game developed by Ubisoft Montreal and published by Ubisoft.'),
(20, 'Street Fighter V', 'Fighting', 1099, 'Street Fighter V[a] is a fighting game developed by Capcom and Dimps and published by Capcom for the PlayStation 4 and Microsoft Windows in 2016.'),
(NULL, 'asdasd', 'asdasda', 0, 'asdasda'),
(NULL, 'asd', 'asd', 1, 'asd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
