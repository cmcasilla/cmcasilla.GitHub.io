/*
MySQL Data Transfer
Source Host: localhost
Source Database: dbs
Target Host: localhost
Target Database: dbs
Date: 8/17/2016 12:12:20 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for tbl_msg
-- ----------------------------
CREATE TABLE `tbl_msg` (
  `msgfrom` varchar(255) DEFAULT NULL,
  `msgto` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
CREATE TABLE `tbl_user` (
  `email` varchar(255) DEFAULT NULL,
  `pword` varchar(255) DEFAULT NULL,
  `re-enter` varchar(255) DEFAULT NULL,
  `Fname` varchar(255) DEFAULT NULL,
  `Lname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `tbl_msg` VALUES ('', 'joseph', 'joseph gwapo');
INSERT INTO `tbl_user` VALUES ('09163693012', 'joseph', '09163693012', 'joseph', 'cruz');
INSERT INTO `tbl_user` VALUES ('joseph', 'joseph', 'joseph', 'joseph', 'joseph');
INSERT INTO `tbl_user` VALUES ('times ', 'times', 'times ', 'there ', 'are');
INSERT INTO `tbl_user` VALUES ('s', 's', 's', 's', 's');
INSERT INTO `tbl_user` VALUES ('q', 'q', 'q', 'q', 'q');
