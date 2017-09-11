/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_online_gallery
Target Host: localhost
Target Database: db_online_gallery
Date: 10/2/2016 09:55:04
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `userID` varchar(8) NOT NULL default '',
  `Username` varchar(25) default NULL,
  `Email` varchar(50) default NULL,
  `Password` varchar(50) default NULL,
  `Birthday` date default NULL,
  `Sex` varchar(10) default NULL,
  `Realname` varchar(255) default NULL,
  `Location` varchar(255) default NULL,
  `Bio` varchar(255) default NULL,
  `lvlArtis` varchar(255) default NULL,
  `Specialty` varchar(255) default NULL,
  PRIMARY KEY  (`userID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_users` VALUES ('H8NBtTBY', 'jace', 'jace@gmail.com', 'jace125', '2006-08-07', 'Male', 'Cereno, Jose Angelito', 'Philippines', 'BIOneasda', 'Student', 'FAST SKETCH');
INSERT INTO `tbl_users` VALUES ('BPNLJebq', 'asda', 'asda', 'asda123', '1999-12-18', 'Male', 'RealName', 'Philippines', 'Bio', 'lvlArtist', 'Specialty');
INSERT INTO `tbl_users` VALUES ('QS4Ik08B', 'seph', 'sephaaa', 'seph', '2004-04-10', 'Male', 'Cruz, Joseph', 'Philippines', 'IT', 'Student', 'Charcoal');
INSERT INTO `tbl_users` VALUES ('J5L9xKhh', 'asda123', 'asdasd', 'asda123', '2010-03-04', 'Male', 'RealName', 'Location', 'Bio', 'lvlArtist', 'Specialty');
INSERT INTO `tbl_users` VALUES ('V5752fHj', 'asda123', 'a', 'asda', '2010-03-04', 'Male', 'RealName', 'Location', 'Bio', 'lvlArtist', 'Specialty');
