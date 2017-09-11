/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_online_gallery
Target Host: localhost
Target Database: db_online_gallery
Date: 10/2/2016 09:54:56
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_comment
-- ----------------------------
DROP TABLE IF EXISTS `tbl_comment`;
CREATE TABLE `tbl_comment` (
  `commentID` varchar(8) NOT NULL,
  `Name` varchar(100) default NULL,
  `cmtContent` varchar(1000) default NULL,
  `Time` varchar(20) default NULL,
  `Date` varchar(20) default NULL,
  `postID` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`commentID`,`postID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_comment` VALUES ('A21M0JUI', 'Cereno, Jose Angelito', 'asdasdasdasd', '0:00:00', '01-01-16', 'G0FCEjNo');
INSERT INTO `tbl_comment` VALUES ('98ASD712', 'Cereno, Jose Angelito', 'QWERYQTWE', '0:00:01', '01-02-16', 'G0FCEjNo');
