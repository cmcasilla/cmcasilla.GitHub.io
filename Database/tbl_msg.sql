/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_online_gallery
Target Host: localhost
Target Database: db_online_gallery
Date: 10/2/2016 09:55:00
*/

SET FOREIGN_KEY_CHECKS=0;
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
-- Records 
-- ----------------------------
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
