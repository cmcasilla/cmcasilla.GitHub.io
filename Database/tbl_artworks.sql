/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_online_gallery
Target Host: localhost
Target Database: db_online_gallery
Date: 10/2/2016 09:54:50
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
