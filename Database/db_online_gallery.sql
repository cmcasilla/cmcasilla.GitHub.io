/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_online_gallery
Target Host: localhost
Target Database: db_online_gallery
Date: 10/2/2016 09:55:09
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_artworks
-- ----------------------------
DROP TABLE IF EXISTS `tbl_artworks`;
CREATE TABLE `tbl_artworks` (
  `postID` varchar(8) NOT NULL default '',
  `Username` varchar(25) default NULL,
  `RealName` varchar(255) default NULL,
  `Image` varchar(225) default NULL,
  `Title` varchar(25) default NULL,
  `Description` varchar(500) default NULL,
  `Category` varchar(50) default NULL,
  `SubCategory` varchar(50) default NULL,
  `Time` varchar(20) default NULL,
  `Date` varchar(25) default NULL,
  PRIMARY KEY  (`postID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
-- Table structure for tbl_msg
-- ----------------------------
DROP TABLE IF EXISTS `tbl_msg`;
CREATE TABLE `tbl_msg` (
  `msgfrom` varchar(255) default NULL,
  `msgto` varchar(255) default NULL,
  `msg` varchar(255) default NULL,
  `msgsbj` varchar(20) default NULL,
  `view` enum('No','Yes') default 'No',
  `msgID` varchar(8) default NULL,
  `msgTime` varchar(20) default NULL,
  `msgDate` varchar(20) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
INSERT INTO `tbl_artworks` VALUES ('ARHUzMry', '', '', '../../Images/Gallery/All/16.jpg', 'asdaasda', 'asdqs', 'Photography', 'trial', '05:02:32am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('G0FCEjNo', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/16.jpg', 'asda', 'asdasd', 'Digital Art', 'trial', '05:03:20am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('W2THz7bY', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/2.jpg', 'tessst', 'asdaaa', 'Traditional Art', '', '05:08:23am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('AKW3VmO1', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/2.jpg', 'adsfgb', 'weds', 'Artisan Crafts', '', '05:09:41am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('I23JKqqQ', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/16.jpg', 'zxcz', '12ewasdzczxc', 'Manga & Anime', '', '05:10:06am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('83XQjvFZ', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/8.jpg', 'dxvfbgn', 'asdfgh', 'Traditional Art', '', '05:16:53am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('OFJ8loi7', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/10.jpg', 'dsfgf', 'asdxcvxcv', 'Cartoons & Comics', '', '05:20:27am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('K7PJgAUI', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/12.jpg', '1asd', '23asd', 'Designs & Interfaces', '', '05:20:36am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('FA3CTele', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/2.jpg', '134354', 'adsfxcv', 'Artisan Crafts', '', '05:20:44am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('LQRHZ4Yi', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/1.jpg', '1231', 'asda', 'Artisan Crafts', '', '05:20:53am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('9Q1ByT9s', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/10.jpg', 'a1sad', 'asd', 'Cartoons & Comics', '', '05:21:06am', '09/28/16');
INSERT INTO `tbl_artworks` VALUES ('3BXY6KmI', 'jace', 'Cereno, Jose Angelito', '../../Images/Gallery/All/16.jpg', 'ftyasdgufknm,./', 'qwrty<>?', 'Artisan Crafts', '', '01:07:01pm', '09/28/16');
INSERT INTO `tbl_comment` VALUES ('A21M0JUI', 'Cereno, Jose Angelito', 'asdasdasdasd', '0:00:00', '01-01-16', 'G0FCEjNo');
INSERT INTO `tbl_comment` VALUES ('98ASD712', 'Cereno, Jose Angelito', 'QWERYQTWE', '0:00:01', '01-02-16', 'G0FCEjNo');
INSERT INTO `tbl_msg` VALUES ('1111', 'Mark Almazan', 'Message Test!', 'Test to 0000', 'Yes', 'VFT0BAg8', '06:58:56am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('1111', 'Mark Almazan', 'asdkjla', 'Test # 2', 'Yes', 'G7IXx6VA', '06:59:13am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'abcdefghijklmnopqrstuvwxyz', 'Test Message', 'Yes', 'IFKBGyO3', '04:17:48am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Mark Almazan', 'abcdefghijklmnopqrstuvwxyz', 'Test to self', 'Yes', '917WeSWQ', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'Test1', 'TestMessage', 'Yes', 'AQ565JIG', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'Test2', 'TestMessage', 'Yes', 'IW8312JG', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'Test3', 'TestMessage', 'Yes', 'MN4N523A', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'Test4', 'TestMessage', 'Yes', 'UWH2985W', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'Test5', 'TestMessage', 'Yes', 'YIZM5236', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('0000', 'Cereno, Jose Angelito', 'Test6', 'TestMessage', 'Yes', 'MNZU781U', '04:18:08am', '09/18/16');
INSERT INTO `tbl_msg` VALUES ('jace', 'Cereno, Jose Angelito', 'OLLA KAMUSTA ', 'AY OH!', 'Yes', 'U6B7pfEp', '01:33:05pm', '09/23/16');
INSERT INTO `tbl_msg` VALUES ('jace', 'Cruz, Joseph', 'jasdakjsdhakjshdkajsd', 'asdjasd', 'No', 'HE51p537', '02:13:40pm', '09/23/16');
INSERT INTO `tbl_msg` VALUES ('jace', 'Cereno,Jose Angelito', 'abcdefghijklmnopqrstuvwxyz', 'ajsd', 'No', '0M6COwWn', '01:59:53pm', '09/23/16');
INSERT INTO `tbl_msg` VALUES ('jace', 'Cruz, Joseph', 'IJSKDHAKSJDHKAJSD', 'ASDKAJSHDA', 'Yes', 'Z4AHnWso', '02:13:49pm', '09/23/16');
INSERT INTO `tbl_msg` VALUES ('jace', 'Cruz, Joseph', 'aoisjdlaksjda', 'ajsdakjsd', 'No', '31H64EZ4', '02:13:58pm', '09/23/16');
INSERT INTO `tbl_msg` VALUES ('jace', 'Cereno, Jose Angelito', 'jakahskdjhasd', 'KJHASD', 'Yes', 'BKSMFF0t', '03:03:26pm', '09/23/16');
INSERT INTO `tbl_users` VALUES ('H8NBtTBY', 'jace', 'jace@gmail.com', 'jace125', '2006-08-07', 'Male', 'Cereno, Jose Angelito', 'Philippines', 'BIOneasda', 'Student', 'FAST SKETCH');
INSERT INTO `tbl_users` VALUES ('BPNLJebq', 'asda', 'asda', 'asda123', '1999-12-18', 'Male', 'RealName', 'Philippines', 'Bio', 'lvlArtist', 'Specialty');
INSERT INTO `tbl_users` VALUES ('QS4Ik08B', 'seph', 'sephaaa', 'seph', '2004-04-10', 'Male', 'Cruz, Joseph', 'Philippines', 'IT', 'Student', 'Charcoal');
INSERT INTO `tbl_users` VALUES ('J5L9xKhh', 'asda123', 'asdasd', 'asda123', '2010-03-04', 'Male', 'RealName', 'Location', 'Bio', 'lvlArtist', 'Specialty');
INSERT INTO `tbl_users` VALUES ('V5752fHj', 'asda123', 'a', 'asda', '2010-03-04', 'Male', 'RealName', 'Location', 'Bio', 'lvlArtist', 'Specialty');
