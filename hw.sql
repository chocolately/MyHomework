-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 06 月 06 日 08:48
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hw`
--

-- --------------------------------------------------------

--
-- 表的结构 `gourp_user`
--

CREATE TABLE IF NOT EXISTS `gourp_user` (
  `gid` int(8) NOT NULL,
  `uid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `gourp_user`
--

INSERT INTO `gourp_user` (`gid`, `uid`) VALUES
(1, 9388337);

-- --------------------------------------------------------

--
-- 表的结构 `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `gid` int(8) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(25) NOT NULL,
  `admin_id` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `group`
--

INSERT INTO `group` (`gid`, `group_name`, `admin_id`) VALUES
(1, 'hello', '09388312');

-- --------------------------------------------------------

--
-- 表的结构 `homework`
--

CREATE TABLE IF NOT EXISTS `homework` (
  `hid` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `author` varchar(25) CHARACTER SET utf8 NOT NULL,
  `create-time` date NOT NULL,
  `edit_time` date NOT NULL,
  `deadline` date NOT NULL,
  `content` varchar(250) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `homework`
--

INSERT INTO `homework` (`hid`, `title`, `author`, `create-time`, `edit_time`, `deadline`, `content`) VALUES
(1, 'h1', 'ly', '2012-06-06', '2012-06-06', '2012-06-21', 'hw1');

-- --------------------------------------------------------

--
-- 表的结构 `hw_user`
--

CREATE TABLE IF NOT EXISTS `hw_user` (
  `hid` int(8) NOT NULL,
  `uid` int(8) NOT NULL,
  `link` varchar(50) DEFAULT NULL,
  `src` varchar(50) DEFAULT NULL,
  `grade` int(3) DEFAULT NULL,
  `group-rank` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `hw_user`
--

INSERT INTO `hw_user` (`hid`, `uid`, `link`, `src`, `grade`, `group-rank`) VALUES
(1, 9388337, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `user_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `password` varchar(8) CHARACTER SET utf8mb4 NOT NULL,
  `role` varchar(25) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `user_name`, `password`, `role`) VALUES
('09388312', 'ly', '09388312', 'ta'),
('09388313', '杨帆', '09388313', 'ta'),
('09388314', '14', '09388314', 'student'),
('09388335', '嘉靖', '09388335', 'teacher'),
('09388337', 'jh', '09388337', 'student'),
('09388555', 'chocolate', '09388555', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
