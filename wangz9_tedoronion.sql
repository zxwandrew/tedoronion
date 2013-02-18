-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 18, 2013 at 01:29 PM
-- Server version: 5.0.96-community
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wangz9_tedoronion`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL auto_increment,
  `answer` tinyint(1) NOT NULL,
  `source` text NOT NULL,
  `title` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `source`, `title`) VALUES
(1, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/aO0TUI9r-So" frameborder="0" allowfullscreen></iframe>', 'What Is The Biggest Rock? - Onion Talks - Ep. 4'),
(2, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/CK62I-4cuSY" frameborder="0" allowfullscreen></iframe>', 'Using Social Media To Cover For Lack Of Original Thought - Onion Talks - Ep. 6'),
(3, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/yeqwDLsZJn8" frameborder="0" allowfullscreen></iframe>', 'Quit Whining And Put On A Goddamn Coat: My Journey - Onion Talks - Ep. 8 '),
(4, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/yeqwDLsZJn8" frameborder="0" allowfullscreen></iframe>', 'Quit Whining And Put On A Goddamn Coat: My Journey - Onion Talks - Ep. 8 '),
(5, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/yeqwDLsZJn8" frameborder="0" allowfullscreen></iframe>', 'Quit Whining And Put On A Goddamn Coat: My Journey - Onion Talks - Ep. 8 '),
(6, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/aO0TUI9r-So" frameborder="0" allowfullscreen></iframe>', 'What Is The Biggest Rock? - Onion Talks - Ep. 4'),
(7, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/rZFGz7sxxBo" frameborder="0" allowfullscreen></iframe>\n', 'Stabbing Ignorance With Glass Ceiling Shards - Onion Talks '),
(8, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/w8c_m6U1f9o" frameborder="0" allowfullscreen></iframe>', 'The Power Of Selling Out: Your Customers As Political Capital - Onion Talks - Ep. 9 '),
(9, 0, '<iframe width="560" height="315" src="http://www.youtube.com/embed/w8c_m6U1f9o" frameborder="0" allowfullscreen></iframe>', 'The Power Of Selling Out: Your Customers As Political Capital - Onion Talks - Ep. 9 '),
(10, 1, '<iframe src="http://embed.ted.com/talks/molly_crockett_beware_neuro_bunk.html" width="560" height="315" frameborder="0" scrolling="no" allowFullScreen></iframe> ', 'Molly Crockett: Beware neuro-bunk'),
(11, 1, '<iframe src="http://embed.ted.com/talks/molly_crockett_beware_neuro_bunk.html" width="560" height="315" frameborder="0" scrolling="no" allowFullScreen></iframe> ', 'Molly Crockett: Beware neuro-bunk'),
(12, 1, '<iframe width="560" height="315" src="http://www.youtube.com/embed/chXsLtHqfdM" frameborder="0" allowfullscreen></iframe>', 'Ernesto Sirolli: Want to help someone? Shut up and listen!'),
(13, 1, '<iframe width="560" height="315" src="http://www.youtube.com/embed/chXsLtHqfdM" frameborder="0" allowfullscreen></iframe>', 'Ernesto Sirolli: Want to help someone? Shut up and listen!'),
(14, 1, '<iframe width="560" height="315" src="http://www.youtube.com/embed/chXsLtHqfdM" frameborder="0" allowfullscreen></iframe>', 'Ernesto Sirolli: Want to help someone? Shut up and listen!'),
(15, 1, '<iframe width="560" height="315" src="http://www.youtube.com/embed/chXsLtHqfdM" frameborder="0" allowfullscreen></iframe>', 'Ernesto Sirolli: Want to help someone? Shut up and listen!');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
  `id` int(11) NOT NULL auto_increment,
  `quote` text NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`),
  KEY `id_3` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `quote`) VALUES
(1, 'What is the biggest rock'),
(2, 'Companies do not care if their followers are human or not, they will pay you either way'),
(3, 'I wasn''t getting any work done, and the reason was I was cold all the time'),
(4, 'The answer came later when i realized that i can just shut the fuck up about it and put on a goddamn coat if I was so cold'),
(5, 'Instead of getting frustrated, hunting for answers, sometimes the best thing is to close your fucking mouth and let the person who know what the fuck he''s talking about show you the answers'),
(6, 'You have to go places and ask, it isn''t easy. Most local people will lie'),
(7, 'We need to shatter the glass ceiling in such a way that millions of glittering shards, surge upwards, slashing the faces of regressive thinkers, opening their throats, murdering them as they scream and choke to death on their own blood'),
(8, 'We realized that we were being asked to betray the people who made our site what it was in the first place, and we thought this is an incredible opportunity'),
(9, 'Building an audience is only half of the battle. In order to monetize your work, you need to monetize your audience, and figure out who you can sell them to'),
(10, 'I am here to tell you the secret to successful decision making. A cheese sandwich'),
(11, 'Do you want to sell it? Put a brain on it'),
(12, 'Want to help someone? Shut up and listen!'),
(13, 'After seeing what they were doing, I became quite proud of our project in Zambia, because at least we fed the hippos'),
(14, 'So what you do, you shut up, you never arrive at any community with any ideas'),
(15, 'The manure created by 6 million horses would be impossible to deal with. they will be drowning in manure');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE IF NOT EXISTS `response` (
  `id` int(11) NOT NULL auto_increment,
  `total` bigint(20) NOT NULL,
  `TED` bigint(20) NOT NULL,
  `Onion` bigint(20) NOT NULL,
  `Correct` bigint(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `total`, `TED`, `Onion`, `Correct`) VALUES
(1, 5, 1, 4, 4),
(2, 6, 2, 4, 4),
(3, 5, 0, 5, 5),
(4, 5, 2, 3, 3),
(5, 5, 1, 4, 4),
(6, 4, 0, 4, 4),
(7, 6, 2, 4, 4),
(8, 5, 2, 3, 3),
(9, 6, 3, 3, 3),
(10, 7, 5, 2, 5),
(11, 6, 4, 2, 4),
(12, 4, 2, 2, 2),
(13, 3, 2, 1, 2),
(14, 3, 1, 2, 1),
(15, 7, 5, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

CREATE TABLE IF NOT EXISTS `submission` (
  `index` int(11) NOT NULL auto_increment,
  `quote` text,
  `source` text,
  `time` text NOT NULL,
  `answer` tinyint(1) default NULL,
  `datetime` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`index`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`index`, `quote`, `source`, `time`, `answer`, `datetime`) VALUES
(48, 'ayyooo', 'youtube', '23', 1, '2012-12-20 23:41:21'),
(49, 'hihihi', 'hihihi', 'hihihi', 1, '2012-12-21 00:04:07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
