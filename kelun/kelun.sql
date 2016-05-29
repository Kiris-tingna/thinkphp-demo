-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 09 月 01 日 06:57
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `kelun`
--
CREATE DATABASE IF NOT EXISTS `kelun` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `kelun`;

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group`
--

CREATE TABLE IF NOT EXISTS `think_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `think_auth_group`
--

INSERT INTO `think_auth_group` (`id`, `title`, `status`, `rules`) VALUES
(1, '管理员', 1, '1,2,3,4,5'),
(2, '编辑', 1, '1,2,3,4,5,6');

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_group_access`
--

CREATE TABLE IF NOT EXISTS `think_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `think_auth_group_access`
--

INSERT INTO `think_auth_group_access` (`uid`, `group_id`) VALUES
(1, 1),
(2, 1),
(9, 1),
(10, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_auth_rule`
--

CREATE TABLE IF NOT EXISTS `think_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `think_auth_rule`
--

INSERT INTO `think_auth_rule` (`id`, `name`, `title`, `type`, `status`, `condition`) VALUES
(1, 'Admin/Index/index', '后台首页', 1, 1, ''),
(2, 'Admin/Auth/index', '权限管理', 1, 1, ''),
(3, 'Admin/Auth/addCate', '添加栏目', 1, 1, ''),
(4, 'Admin/Auth/addGroup', '添加用户组', 1, 1, ''),
(5, 'Admin/Auth/groupList', '用户组列表', 1, 1, ''),
(6, 'Admin/Auth/addRule', '添加权限', 1, 1, ''),
(8, 'Admin/Auth/userList', '用户列表', 1, 1, ''),
(9, 'Admin/Auth/addUser', '添加用户', 1, 1, ''),
(10, 'Admin/Auth/addCateHandle', '添加栏目表单处理', 1, 1, ''),
(11, 'Admin/Auth/addGroupHandle', '添加用户组表单处理', 1, 1, ''),
(12, 'Admin/Auth/addRuleHandle', '添加权限表单处理', 1, 1, ''),
(13, 'Admin/Auth/setRuleHandle', '更新权限表单处理', 1, 1, ''),
(14, 'Admin/Auth/addUserHandle', '添加用户表单处理', 1, 1, '');

-- --------------------------------------------------------

--
-- 表的结构 `think_cate`
--

CREATE TABLE IF NOT EXISTS `think_cate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `catename` char(20) NOT NULL DEFAULT '',
  `alink` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `think_cate`
--

INSERT INTO `think_cate` (`id`, `catename`, `alink`) VALUES
(1, '添加栏目', 'Auth/addCate'),
(2, '添加用户组', 'Auth/addGroup'),
(3, '用户组列表', 'Auth/groupList'),
(4, '添加权限', 'Auth/addRule'),
(8, '用户列表', 'Auth/userList'),
(7, '添加用户', 'Auth/addUser');

-- --------------------------------------------------------

--
-- 表的结构 `think_order`
--

CREATE TABLE IF NOT EXISTS `think_order` (
  `oid` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单主键',
  `name` varchar(32) DEFAULT NULL,
  `passport_id` varchar(18) DEFAULT NULL,
  `ship_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `is_baoxian` tinyint(1) DEFAULT NULL,
  `state` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`oid`),
  KEY `fk_os` (`ship_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `think_order`
--

INSERT INTO `think_order` (`oid`, `name`, `passport_id`, `ship_id`, `date`, `is_baoxian`, `state`) VALUES
(1, '我打打', '12312321421', 1, '2015-06-08', 1, 1),
(2, '1231', '312', 1, '2015-06-02', 1, 1),
(3, '213', '31231231', 0, '2015-06-02', 1, 1),
(4, '132', '1321', 2, '2015-06-01', 1, 1),
(5, '3123', '312312', 3, '2015-06-07', 1, 1),
(6, 'yyy', '1123213', 4, '0000-00-00', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_ship`
--

CREATE TABLE IF NOT EXISTS `think_ship` (
  `ship_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '客轮主键',
  `ship_num` varchar(6) NOT NULL,
  `start` varchar(32) DEFAULT NULL COMMENT '起点',
  `end` varchar(32) DEFAULT NULL COMMENT '终点',
  `date` datetime DEFAULT NULL COMMENT '日期',
  `begin` date DEFAULT NULL COMMENT '开出时间',
  `arrival` date DEFAULT NULL,
  `level` char(1) DEFAULT NULL,
  `price` smallint(6) DEFAULT NULL,
  `intiliaze_num` smallint(6) DEFAULT NULL,
  `remain_num` smallint(6) DEFAULT NULL,
  `state` tinyint(1) NOT NULL,
  PRIMARY KEY (`ship_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `think_ship`
--

INSERT INTO `think_ship` (`ship_id`, `ship_num`, `start`, `end`, `date`, `begin`, `arrival`, `level`, `price`, `intiliaze_num`, `remain_num`, `state`) VALUES
(1, 'ZX1001', '起点7', '终点7', '2015-06-29 16:08:01', '2015-06-24', '2015-06-29', 'B', 22, 1231, 1230, 0),
(2, 'ZX1002', '起点6', '终点6', '2015-06-29 18:27:45', '2015-06-24', '2015-06-29', 'A', 11, 1111, 0, 1),
(3, 'ZX1003', '起点5', '终点5', '2015-06-29 22:12:57', '2015-06-24', '2015-06-29', 'C', 1231, 21312, 21311, 0),
(4, 'ZX1005', '起点1', '终点2', '2015-06-30 15:34:30', '2015-06-24', '2015-06-29', 'A', 110, 25, 24, 1),
(5, 'ZX1006', '起点2', '终点2', '2015-06-30 15:38:33', '1970-01-01', '1970-01-01', 'C', 100, 30, 30, 1),
(6, 'ZX1007', '起点3', '终点3', '2015-06-30 15:41:17', '2015-06-12', '2015-06-13', 'B', 150, 100, 100, 1);

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`, `create_time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 'lcy', '4607e782c4d86fd5364d7e4508bb10d9', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
