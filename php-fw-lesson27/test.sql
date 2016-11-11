-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 04, 2016 at 11:05 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `test`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `test`
-- 

CREATE TABLE `test` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `message` varchar(140) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Dumping data for table `test`
-- 

INSERT INTO `test` VALUES (1, 'hi');
INSERT INTO `test` VALUES (2, 'hey');
INSERT INTO `test` VALUES (3, 'How are you?');
INSERT INTO `test` VALUES (4, 'I am fine');
INSERT INTO `test` VALUES (5, 'good');
INSERT INTO `test` VALUES (6, 'How about you?');
INSERT INTO `test` VALUES (7, 'I am great');
INSERT INTO `test` VALUES (8, 'great!');
INSERT INTO `test` VALUES (9, 'wanna go dinner?');
INSERT INTO `test` VALUES (10, 'sure');
INSERT INTO `test` VALUES (11, 'what time you will be free?');
INSERT INTO `test` VALUES (12, '7?');
INSERT INTO `test` VALUES (13, 'ok.');
INSERT INTO `test` VALUES (14, 'see you at 7');
INSERT INTO `test` VALUES (15, 'bye');
