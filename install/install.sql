DROP TABLE IF EXISTS `web_config`;
create table `web_config` (
`k` varchar(32) NOT NULL,
`v` text NULL,
PRIMARY KEY  (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `web_config` VALUES ('cache', '');
INSERT INTO `web_config` VALUES ('version', '1025');
INSERT INTO `web_config` VALUES ('admin_user', 'xiaodao');
INSERT INTO `web_config` VALUES ('admin_pwd', 'x6d.com');
INSERT INTO `web_config` VALUES ('style', '1');
INSERT INTO `web_config` VALUES ('sitename', '小刀娱乐网');
INSERT INTO `web_config` VALUES ('title', '学习技术 从这里开始');
INSERT INTO `web_config` VALUES ('keywords', '奶茶云导航,导航天下,技术导航,娱乐网,小刀娱乐网,爱Q,QQ技术,QQ导航');
INSERT INTO `web_config` VALUES ('description', '国内首屈一指的技术教程活动导航分类平台。');
INSERT INTO `web_config` VALUES ('anounce', '');
INSERT INTO `web_config` VALUES ('kfqq', '3011031314');
INSERT INTO `web_config` VALUES ('yzf', '37ef9b97d47357977415cde818b3b233388936c1fefe27ed7b804725a1db1a33c900c02498303a9900250da27a53e109b55685b2');
INSERT INTO `web_config` VALUES ('icp', '陕ICP备19011946号-2');
INSERT INTO `web_config` VALUES ('modal', '');
INSERT INTO `web_config` VALUES ('gg', '奶茶云导航，国内首屈一指的技术教程活动导航分类平台。');
INSERT INTO `web_config` VALUES ('music', '9f6326a075884243a0d33c732d566f76');
INSERT INTO `web_config` VALUES ('url', 'http://www.x6d.com/');
INSERT INTO `web_config` VALUES ('bottom', '');

DROP TABLE IF EXISTS `web_dh`;
create table `web_dh` (
`id` int(1) NOT NULL AUTO_INCREMENT,
`url` varchar(255) NULL,
`name` text NULL,
`active` int(11) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
