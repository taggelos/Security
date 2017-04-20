<?
$eclass_version = '2.3';
$version = 2;
$encoding = 'UTF-8';
course_details('TMC107',	// Course code
	'greek',	// Language
	'new',	// Title
	'',	// Description
	'Τμήμα 3',	// Faculty
	'2',	// Visible?
	'Διαχειριστής Πλατφόρμας',	// Professor
	'pre');	// Type
course_units('SDF', 'SDF

', 'v', '1', array());
course_units('SDF', 'SDF

', 'v', '2', array());
user('1', 'Πλατφόρμας', 'Διαχειριστής', 'drunkadmin', 'f5b587d821394672df13480ae92d4c05', 'webmaster@localhost.com', '1', '', '', '1492010509', '1632010509');
query("DROP TABLE IF EXISTS `accueil`");
query("CREATE TABLE `accueil` (
  `id` int(11) NOT NULL auto_increment,
  `rubrique` varchar(100) default NULL,
  `lien` varchar(255) default NULL,
  `image` varchar(100) default NULL,
  `visible` tinyint(4) default NULL,
  `admin` varchar(200) default NULL,
  `address` varchar(120) default NULL,
  `define_var` varchar(50) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8");
query("INSERT INTO `accueil` (`id`, `rubrique`, `lien`, `image`, `visible`, `admin`, `address`, `define_var`) VALUES
	('1', 'Ατζέντα', '../../modules/agenda/agenda.php', 'calendar', '1', '0', '', 'MODULE_ID_AGENDA'),
	('2', 'Σύνδεσμοι', '../../modules/link/link.php', 'links', '1', '0', '', 'MODULE_ID_LINKS'),
	('3', 'Έγγραφα', '../../modules/document/document.php', 'docs', '1', '0', '', 'MODULE_ID_DOCS'),
	('4', 'Βίντεο', '../../modules/video/video.php', 'videos', '0', '0', '', 'MODULE_ID_VIDEO'),
	('5', 'Εργασίες', '../../modules/work/work.php', 'assignments', '0', '0', '', 'MODULE_ID_ASSIGN'),
	('7', 'Ανακοινώσεις', '../../modules/announcements/announcements.php', 'announcements', '1', '0', '', 'MODULE_ID_ANNOUNCE'),
	('9', 'Περιοχές Συζητήσεων', '../../modules/phpbb/index.php', 'forum', '0', '0', '', 'MODULE_ID_FORUM'),
	('10', 'Ασκήσεις', '../../modules/exercice/exercice.php', 'exercise', '0', '0', '', 'MODULE_ID_EXERCISE'),
	('15', 'Ομάδες Χρηστών', '../../modules/group/group.php', 'groups', '0', '0', '', 'MODULE_ID_GROUPS'),
	('16', 'Ανταλλαγή Αρχείων', '../../modules/dropbox/index.php', 'dropbox', '0', '0', '', 'MODULE_ID_DROPBOX'),
	('19', 'Τηλεσυνεργασία', '../../modules/conference/conference.php', 'conference', '0', '0', '', 'MODULE_ID_CHAT'),
	('20', 'Περιγραφή Μαθήματος', '../../modules/course_description/', 'description', '1', '0', '', 'MODULE_ID_DESCRIPTION'),
	('21', 'Ερωτηματολόγια', '../../modules/questionnaire/questionnaire.php', 'questionnaire', '0', '0', '', 'MODULE_ID_QUESTIONNAIRE'),
	('23', 'Γραμμή Μάθησης', '../../modules/learnPath/learningPathList.php', 'lp', '0', '0', '', 'MODULE_ID_LP'),
	('25', 'Ενεργοποίηση Εργαλείων', '../../modules/course_tools/course_tools.php', 'tooladmin', '0', '1', '', 'MODULE_ID_TOOLADMIN'),
	('26', 'Σύστημα Wiki', '../../modules/wiki/wiki.php', 'wiki', '0', '0', '', 'MODULE_ID_WIKI'),
	('8', 'Διαχείριση Χρηστών', '../../modules/user/user.php', 'users', '0', '1', '', 'MODULE_ID_USERS'),
	('14', 'Διαχείριση Μαθήματος', '../../modules/course_info/infocours.php?', 'course_info', '0', '1', '', 'MODULE_ID_COURSEINFO'),
	('24', 'Στατιστικά Χρήσης', '../../modules/usage/usage.php', 'usage', '0', '1', '', 'MODULE_ID_USAGE'),
	('27', 'Θεματικές ενότητες μαθήματος', '../../modules/units/index.php', 'description', '2', '0', '', 'MODULE_ID_UNITS')
");
query("DROP TABLE IF EXISTS `action_types`");
query("CREATE TABLE `action_types` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
query("INSERT INTO `action_types` (`id`, `name`) VALUES
	('1', 'access'),
	('2', 'exit')
");
query("DROP TABLE IF EXISTS `actions`");
query("CREATE TABLE `actions` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `module_id` int(11) NOT NULL default '0',
  `action_type_id` int(11) NOT NULL default '0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `duration` int(11) NOT NULL default '900',
  PRIMARY KEY  (`id`),
  KEY `actionsindex` (`module_id`,`date_time`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
query("INSERT INTO `actions` (`id`, `user_id`, `module_id`, `action_type_id`, `date_time`, `duration`) VALUES
	('1', '1', '27', '1', '2017-04-19 05:29:24', '500'),
	('2', '1', '27', '2', '2017-04-19 05:37:44', '0'),
	('3', '1', '27', '2', '2017-04-19 05:44:15', '0'),
	('4', '1', '27', '2', '2017-04-19 06:05:28', '0'),
	('5', '1', '27', '1', '2017-04-19 06:05:30', '3'),
	('6', '1', '27', '2', '2017-04-19 06:05:33', '0'),
	('7', '1', '27', '2', '2017-04-19 06:06:49', '0'),
	('8', '1', '27', '1', '2017-04-19 06:06:55', '121'),
	('9', '1', '27', '2', '2017-04-19 06:08:56', '0'),
	('10', '1', '27', '1', '2017-04-19 06:08:59', '329'),
	('11', '1', '27', '1', '2017-04-19 06:14:28', '3'),
	('12', '1', '27', '1', '2017-04-19 06:14:31', '4'),
	('13', '1', '27', '1', '2017-04-19 06:14:35', '14'),
	('14', '1', '27', '1', '2017-04-19 06:14:49', '11'),
	('15', '1', '27', '1', '2017-04-19 06:15:00', '61'),
	('16', '1', '27', '2', '2017-04-19 06:16:01', '0'),
	('17', '1', '27', '1', '2017-04-19 06:16:43', '81'),
	('18', '1', '27', '2', '2017-04-19 06:18:04', '0')
");
query("DROP TABLE IF EXISTS `actions_summary`");
query("CREATE TABLE `actions_summary` (
  `id` int(11) NOT NULL auto_increment,
  `module_id` int(11) NOT NULL default '0',
  `visits` int(11) NOT NULL default '0',
  `start_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `duration` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `agenda`");
query("CREATE TABLE `agenda` (
  `id` int(11) NOT NULL auto_increment,
  `titre` varchar(200) default NULL,
  `contenu` text,
  `day` date NOT NULL default '0000-00-00',
  `hour` time NOT NULL default '00:00:00',
  `lasting` varchar(20) default NULL,
  `visibility` char(1) NOT NULL default 'v',
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `agenda` (`titre`,`contenu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `assignment_submit`");
query("CREATE TABLE `assignment_submit` (
  `id` int(11) NOT NULL auto_increment,
  `uid` int(11) NOT NULL default '0',
  `assignment_id` int(11) NOT NULL default '0',
  `submission_date` date NOT NULL default '0000-00-00',
  `submission_ip` varchar(16) NOT NULL default '',
  `file_path` varchar(200) NOT NULL default '',
  `file_name` varchar(200) NOT NULL default '',
  `comments` text NOT NULL,
  `grade` varchar(50) NOT NULL default '',
  `grade_comments` text NOT NULL,
  `grade_submission_date` date NOT NULL default '0000-00-00',
  `grade_submission_ip` varchar(16) NOT NULL default '',
  `group_id` int(11) default NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `assignments`");
query("CREATE TABLE `assignments` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(200) NOT NULL default '',
  `description` text NOT NULL,
  `comments` text NOT NULL,
  `deadline` date NOT NULL default '0000-00-00',
  `submission_date` date NOT NULL default '0000-00-00',
  `active` char(1) NOT NULL default '1',
  `secret_directory` varchar(30) NOT NULL default '',
  `group_submissions` char(1) NOT NULL default '0',
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `catagories`");
query("CREATE TABLE `catagories` (
  `cat_id` int(10) NOT NULL auto_increment,
  `cat_title` varchar(100) default NULL,
  `cat_order` varchar(10) default NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
query("INSERT INTO `catagories` (`cat_id`, `cat_title`, `cat_order`) VALUES
	('2', 'Αρχή', '')
");
query("DROP TABLE IF EXISTS `course_description`");
query("CREATE TABLE `course_description` (
  `id` tinyint(3) unsigned NOT NULL default '0',
  `title` varchar(255) default NULL,
  `content` text,
  `upDate` datetime NOT NULL default '0000-00-00 00:00:00',
  UNIQUE KEY `id` (`id`),
  FULLTEXT KEY `course_description` (`title`,`content`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `document`");
query("CREATE TABLE `document` (
  `id` int(4) NOT NULL auto_increment,
  `path` varchar(255) NOT NULL default '',
  `filename` text,
  `visibility` char(1) NOT NULL default 'v',
  `comment` varchar(255) default NULL,
  `category` text,
  `title` text,
  `creator` text,
  `date` datetime default NULL,
  `date_modified` datetime default NULL,
  `subject` text,
  `description` text,
  `author` text,
  `format` text,
  `language` text,
  `copyrighted` text,
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `document` (`filename`,`comment`,`title`,`creator`,`subject`,`description`,`author`,`language`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `dropbox_file`");
query("CREATE TABLE `dropbox_file` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `uploaderId` int(11) unsigned NOT NULL default '0',
  `filename` varchar(250) NOT NULL default '',
  `filesize` int(11) unsigned NOT NULL default '0',
  `title` varchar(250) default '',
  `description` varchar(250) default '',
  `author` varchar(250) default '',
  `uploadDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `lastUploadDate` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `UN_filename` (`filename`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `dropbox_person`");
query("CREATE TABLE `dropbox_person` (
  `fileId` int(11) unsigned NOT NULL default '0',
  `personId` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`fileId`,`personId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `dropbox_post`");
query("CREATE TABLE `dropbox_post` (
  `fileId` int(11) unsigned NOT NULL default '0',
  `recipientId` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`fileId`,`recipientId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `exercice_question`");
query("CREATE TABLE `exercice_question` (
  `question_id` int(11) NOT NULL default '0',
  `exercice_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`question_id`,`exercice_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `exercices`");
query("CREATE TABLE `exercices` (
  `id` tinyint(4) NOT NULL auto_increment,
  `titre` varchar(250) default NULL,
  `description` text,
  `type` tinyint(4) unsigned NOT NULL default '1',
  `StartDate` date default NULL,
  `EndDate` date default NULL,
  `TimeConstrain` int(11) default '0',
  `AttemptsAllowed` int(11) default '0',
  `random` smallint(6) NOT NULL default '0',
  `active` tinyint(4) default NULL,
  `results` tinyint(1) NOT NULL default '1',
  `score` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `exercices` (`titre`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `exercise_user_record`");
query("CREATE TABLE `exercise_user_record` (
  `eurid` int(11) NOT NULL auto_increment,
  `eid` tinyint(4) NOT NULL default '0',
  `uid` mediumint(8) NOT NULL default '0',
  `RecordStartDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `RecordEndDate` datetime NOT NULL default '0000-00-00 00:00:00',
  `TotalScore` int(11) NOT NULL default '0',
  `TotalWeighting` int(11) default '0',
  `attempt` int(11) NOT NULL default '0',
  PRIMARY KEY  (`eurid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `forums`");
query("CREATE TABLE `forums` (
  `forum_id` int(10) NOT NULL auto_increment,
  `forum_name` varchar(150) default NULL,
  `forum_desc` text,
  `forum_access` int(10) default '1',
  `forum_moderator` int(10) default NULL,
  `forum_topics` int(10) NOT NULL default '0',
  `forum_posts` int(10) NOT NULL default '0',
  `forum_last_post_id` int(10) NOT NULL default '0',
  `cat_id` int(10) default NULL,
  `forum_type` int(10) default '0',
  PRIMARY KEY  (`forum_id`),
  KEY `forum_last_post_id` (`forum_last_post_id`),
  FULLTEXT KEY `forums` (`forum_name`,`forum_desc`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
query("INSERT INTO `forums` (`forum_id`, `forum_name`, `forum_desc`, `forum_access`, `forum_moderator`, `forum_topics`, `forum_posts`, `forum_last_post_id`, `cat_id`, `forum_type`) VALUES
	('1', 'Γενικές συζητήσεις', 'Περιοχή συζητήσεων για κάθε θέμα που αφορά το μάθημα', '2', '1', '0', '0', '0', '2', '0')
");
query("DROP TABLE IF EXISTS `group_documents`");
query("CREATE TABLE `group_documents` (
  `id` int(4) NOT NULL auto_increment,
  `path` varchar(255) default NULL,
  `filename` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `group_properties`");
query("CREATE TABLE `group_properties` (
  `id` tinyint(4) NOT NULL auto_increment,
  `self_registration` tinyint(4) default '1',
  `private` tinyint(4) default '0',
  `forum` tinyint(4) default '1',
  `document` tinyint(4) default '1',
  `wiki` tinyint(4) default '0',
  `agenda` tinyint(4) default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
query("INSERT INTO `group_properties` (`id`, `self_registration`, `private`, `forum`, `document`, `wiki`, `agenda`) VALUES
	('1', '1', '0', '1', '1', '0', '0')
");
query("DROP TABLE IF EXISTS `liens`");
query("CREATE TABLE `liens` (
  `id` int(11) NOT NULL auto_increment,
  `url` varchar(255) default NULL,
  `titre` varchar(255) default NULL,
  `description` text,
  `category` int(4) NOT NULL default '0',
  `ordre` mediumint(8) NOT NULL default '0',
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `liens` (`url`,`titre`,`description`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
query("INSERT INTO `liens` (`id`, `url`, `titre`, `description`, `category`, `ordre`) VALUES
	('1', 'http://www.google.com', 'Google', 'Γρήγορη και Πανίσχυρη μηχανής αναζήτησης', '0', '0')
");
query("DROP TABLE IF EXISTS `link_categories`");
query("CREATE TABLE `link_categories` (
  `id` int(6) NOT NULL auto_increment,
  `categoryname` varchar(255) default NULL,
  `description` text,
  `ordre` mediumint(8) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `logins`");
query("CREATE TABLE `logins` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL default '0',
  `ip` char(16) NOT NULL default '0.0.0.0',
  `date_time` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8");
query("INSERT INTO `logins` (`id`, `user_id`, `ip`, `date_time`) VALUES
	('1', '1', '2.87.22.155', '2017-04-19 05:29:24'),
	('2', '1', '2.87.22.155', '2017-04-19 06:05:30'),
	('3', '1', '2.87.22.155', '2017-04-19 06:06:55'),
	('4', '1', '2.87.22.155', '2017-04-19 06:08:59'),
	('5', '1', '2.87.22.155', '2017-04-19 06:14:28'),
	('6', '1', '2.87.22.155', '2017-04-19 06:14:31'),
	('7', '1', '2.87.22.155', '2017-04-19 06:14:35'),
	('8', '1', '2.87.22.155', '2017-04-19 06:14:49'),
	('9', '1', '2.87.22.155', '2017-04-19 06:15:00'),
	('10', '1', '2.87.22.155', '2017-04-19 06:16:43')
");
query("DROP TABLE IF EXISTS `lp_asset`");
query("CREATE TABLE `lp_asset` (
  `asset_id` int(11) NOT NULL auto_increment,
  `module_id` int(11) NOT NULL default '0',
  `path` varchar(255) NOT NULL default '',
  `comment` varchar(255) default NULL,
  PRIMARY KEY  (`asset_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `lp_learnPath`");
query("CREATE TABLE `lp_learnPath` (
  `learnPath_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `comment` text NOT NULL,
  `lock` enum('OPEN','CLOSE') NOT NULL default 'OPEN',
  `visibility` enum('HIDE','SHOW') NOT NULL default 'SHOW',
  `rank` int(11) NOT NULL default '0',
  PRIMARY KEY  (`learnPath_id`),
  UNIQUE KEY `rank` (`rank`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `lp_module`");
query("CREATE TABLE `lp_module` (
  `module_id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `comment` text NOT NULL,
  `accessibility` enum('PRIVATE','PUBLIC') NOT NULL default 'PRIVATE',
  `startAsset_id` int(11) NOT NULL default '0',
  `contentType` enum('CLARODOC','DOCUMENT','EXERCISE','HANDMADE','SCORM','SCORM_ASSET','LABEL','COURSE_DESCRIPTION','LINK') NOT NULL default 'CLARODOC',
  `launch_data` text NOT NULL,
  PRIMARY KEY  (`module_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `lp_rel_learnPath_module`");
query("CREATE TABLE `lp_rel_learnPath_module` (
  `learnPath_module_id` int(11) NOT NULL auto_increment,
  `learnPath_id` int(11) NOT NULL default '0',
  `module_id` int(11) NOT NULL default '0',
  `lock` enum('OPEN','CLOSE') NOT NULL default 'OPEN',
  `visibility` enum('HIDE','SHOW') NOT NULL default 'SHOW',
  `specificComment` text NOT NULL,
  `rank` int(11) NOT NULL default '0',
  `parent` int(11) NOT NULL default '0',
  `raw_to_pass` tinyint(4) NOT NULL default '50',
  PRIMARY KEY  (`learnPath_module_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `lp_user_module_progress`");
query("CREATE TABLE `lp_user_module_progress` (
  `user_module_progress_id` int(22) NOT NULL auto_increment,
  `user_id` mediumint(9) NOT NULL default '0',
  `learnPath_module_id` int(11) NOT NULL default '0',
  `learnPath_id` int(11) NOT NULL default '0',
  `lesson_location` varchar(255) NOT NULL default '',
  `lesson_status` enum('NOT ATTEMPTED','PASSED','FAILED','COMPLETED','BROWSED','INCOMPLETE','UNKNOWN') NOT NULL default 'NOT ATTEMPTED',
  `entry` enum('AB-INITIO','RESUME','') NOT NULL default 'AB-INITIO',
  `raw` tinyint(4) NOT NULL default '-1',
  `scoreMin` tinyint(4) NOT NULL default '-1',
  `scoreMax` tinyint(4) NOT NULL default '-1',
  `total_time` varchar(13) NOT NULL default '0000:00:00.00',
  `session_time` varchar(13) NOT NULL default '0000:00:00.00',
  `suspend_data` text NOT NULL,
  `credit` enum('CREDIT','NO-CREDIT') NOT NULL default 'NO-CREDIT',
  PRIMARY KEY  (`user_module_progress_id`),
  KEY `optimize` (`user_id`,`learnPath_module_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `pages`");
query("CREATE TABLE `pages` (
  `id` int(11) NOT NULL auto_increment,
  `url` varchar(200) default NULL,
  `titre` varchar(200) default NULL,
  `description` text,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `poll`");
query("CREATE TABLE `poll` (
  `pid` int(11) NOT NULL auto_increment,
  `creator_id` mediumint(8) unsigned NOT NULL default '0',
  `course_id` varchar(20) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `creation_date` date NOT NULL default '0000-00-00',
  `start_date` date NOT NULL default '0000-00-00',
  `end_date` date NOT NULL default '0000-00-00',
  `active` int(11) NOT NULL default '0',
  PRIMARY KEY  (`pid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `poll_answer_record`");
query("CREATE TABLE `poll_answer_record` (
  `arid` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `qid` int(11) NOT NULL default '0',
  `aid` int(11) NOT NULL default '0',
  `answer_text` varchar(255) NOT NULL default '',
  `user_id` int(11) NOT NULL default '0',
  `submit_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`arid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `poll_question`");
query("CREATE TABLE `poll_question` (
  `pqid` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `question_text` varchar(250) NOT NULL default '',
  `qtype` enum('multiple','fill') NOT NULL default 'multiple',
  PRIMARY KEY  (`pqid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `poll_question_answer`");
query("CREATE TABLE `poll_question_answer` (
  `pqaid` int(11) NOT NULL auto_increment,
  `pqid` int(11) NOT NULL default '0',
  `answer_text` text NOT NULL,
  PRIMARY KEY  (`pqaid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `posts`");
query("CREATE TABLE `posts` (
  `post_id` int(10) NOT NULL auto_increment,
  `topic_id` int(10) NOT NULL default '0',
  `forum_id` int(10) NOT NULL default '0',
  `poster_id` int(10) NOT NULL default '0',
  `post_time` varchar(20) default NULL,
  `poster_ip` varchar(16) default NULL,
  `nom` varchar(30) default NULL,
  `prenom` varchar(30) default NULL,
  PRIMARY KEY  (`post_id`),
  KEY `post_id` (`post_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_id` (`poster_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `posts_text`");
query("CREATE TABLE `posts_text` (
  `post_id` int(10) NOT NULL default '0',
  `post_text` text,
  PRIMARY KEY  (`post_id`),
  FULLTEXT KEY `posts_text` (`post_text`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `questions`");
query("CREATE TABLE `questions` (
  `id` int(11) NOT NULL auto_increment,
  `question` text,
  `description` text,
  `ponderation` float(11,2) default NULL,
  `q_position` int(11) default '1',
  `type` int(11) default '2',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `reponses`");
query("CREATE TABLE `reponses` (
  `id` int(11) NOT NULL default '0',
  `question_id` int(11) NOT NULL default '0',
  `reponse` text,
  `correct` int(11) default NULL,
  `comment` text,
  `ponderation` float(5,2) default NULL,
  `r_position` int(11) default NULL,
  PRIMARY KEY  (`id`,`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `student_group`");
query("CREATE TABLE `student_group` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) default NULL,
  `description` text,
  `tutor` int(11) default NULL,
  `forumId` int(11) default NULL,
  `maxStudent` int(11) NOT NULL default '0',
  `secretDirectory` varchar(30) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `survey`");
query("CREATE TABLE `survey` (
  `sid` bigint(14) NOT NULL auto_increment,
  `creator_id` mediumint(8) unsigned NOT NULL default '0',
  `course_id` varchar(20) NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `creation_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `start_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `end_date` datetime NOT NULL default '0000-00-00 00:00:00',
  `type` int(11) NOT NULL default '0',
  `active` int(11) NOT NULL default '0',
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `survey_answer`");
query("CREATE TABLE `survey_answer` (
  `aid` bigint(12) NOT NULL default '0',
  `creator_id` mediumint(8) unsigned NOT NULL default '0',
  `sid` bigint(12) NOT NULL default '0',
  `date` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `survey_answer_record`");
query("CREATE TABLE `survey_answer_record` (
  `arid` int(11) NOT NULL auto_increment,
  `aid` bigint(12) NOT NULL default '0',
  `question_text` varchar(250) NOT NULL default '',
  `question_answer` varchar(250) NOT NULL default '',
  PRIMARY KEY  (`arid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `survey_question`");
query("CREATE TABLE `survey_question` (
  `sqid` bigint(12) NOT NULL default '0',
  `sid` bigint(12) NOT NULL default '0',
  `question_text` varchar(250) NOT NULL default '',
  PRIMARY KEY  (`sqid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `survey_question_answer`");
query("CREATE TABLE `survey_question_answer` (
  `sqaid` int(11) NOT NULL auto_increment,
  `sqid` bigint(12) NOT NULL default '0',
  `answer_text` varchar(250) default NULL,
  PRIMARY KEY  (`sqaid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `topics`");
query("CREATE TABLE `topics` (
  `topic_id` int(10) NOT NULL auto_increment,
  `topic_title` varchar(100) default NULL,
  `topic_poster` int(10) default NULL,
  `topic_time` varchar(20) default NULL,
  `topic_views` int(10) NOT NULL default '0',
  `topic_replies` int(10) NOT NULL default '0',
  `topic_last_post_id` int(10) NOT NULL default '0',
  `forum_id` int(10) NOT NULL default '0',
  `topic_status` int(10) NOT NULL default '0',
  `topic_notify` int(2) default '0',
  `nom` varchar(30) default NULL,
  `prenom` varchar(30) default NULL,
  PRIMARY KEY  (`topic_id`),
  KEY `topic_id` (`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_last_post_id` (`topic_last_post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `user_group`");
query("CREATE TABLE `user_group` (
  `id` int(11) NOT NULL auto_increment,
  `user` int(11) NOT NULL default '0',
  `team` int(11) NOT NULL default '0',
  `status` int(11) NOT NULL default '0',
  `role` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `users`");
query("CREATE TABLE `users` (
  `user_id` int(10) NOT NULL auto_increment,
  `username` varchar(40) NOT NULL default '',
  `user_regdate` varchar(20) NOT NULL default '',
  `user_password` varchar(32) NOT NULL default '',
  `user_email` varchar(50) default NULL,
  `user_icq` varchar(15) default NULL,
  `user_website` varchar(100) default NULL,
  `user_occ` varchar(100) default NULL,
  `user_from` varchar(100) default NULL,
  `user_intrest` varchar(150) default NULL,
  `user_sig` varchar(255) default NULL,
  `user_viewemail` tinyint(2) default NULL,
  `user_theme` int(10) default NULL,
  `user_aim` varchar(18) default NULL,
  `user_yim` varchar(25) default NULL,
  `user_msnm` varchar(25) default NULL,
  `user_posts` int(10) default '0',
  `user_attachsig` int(2) default '0',
  `user_desmile` int(2) default '0',
  `user_html` int(2) default '0',
  `user_bbcode` int(2) default '0',
  `user_rank` int(10) default '0',
  `user_level` int(10) default '1',
  `user_lang` varchar(255) default NULL,
  `user_actkey` varchar(32) default NULL,
  `user_newpasswd` varchar(32) default NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
query("INSERT INTO `users` (`user_id`, `username`, `user_regdate`, `user_password`, `user_email`, `user_icq`, `user_website`, `user_occ`, `user_from`, `user_intrest`, `user_sig`, `user_viewemail`, `user_theme`, `user_aim`, `user_yim`, `user_msnm`, `user_posts`, `user_attachsig`, `user_desmile`, `user_html`, `user_bbcode`, `user_rank`, `user_level`, `user_lang`, `user_actkey`, `user_newpasswd`) VALUES
	('1', 'Πλατφόρμας Διαχειριστής', '2017-04-19 05:19:31', 'password', 'webmaster@localhost.com', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '1', '', '', ''),
	('-1', 'Ανώνυμος', '2017-04-19 05:19:31', 'password', '', '', '', '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '1', '', '', '')
");
query("DROP TABLE IF EXISTS `video`");
query("CREATE TABLE `video` (
  `id` int(11) NOT NULL auto_increment,
  `path` varchar(255) default NULL,
  `url` varchar(200) default NULL,
  `titre` varchar(200) default NULL,
  `description` text,
  `creator` varchar(200) default NULL,
  `publisher` varchar(200) default NULL,
  `date` datetime default NULL,
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `video` (`url`,`titre`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `videolinks`");
query("CREATE TABLE `videolinks` (
  `id` int(11) NOT NULL auto_increment,
  `url` varchar(200) default NULL,
  `titre` varchar(200) default NULL,
  `description` text,
  `creator` varchar(200) default NULL,
  `publisher` varchar(200) default NULL,
  `date` datetime default NULL,
  PRIMARY KEY  (`id`),
  FULLTEXT KEY `videolinks` (`url`,`titre`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `wiki_acls`");
query("CREATE TABLE `wiki_acls` (
  `wiki_id` int(11) unsigned NOT NULL default '0',
  `flag` varchar(255) NOT NULL default '',
  `value` enum('false','true') NOT NULL default 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `wiki_pages`");
query("CREATE TABLE `wiki_pages` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `wiki_id` int(11) unsigned NOT NULL default '0',
  `owner_id` int(11) unsigned NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `ctime` datetime NOT NULL default '0000-00-00 00:00:00',
  `last_version` int(11) unsigned NOT NULL default '0',
  `last_mtime` datetime NOT NULL default '0000-00-00 00:00:00',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `wiki_pages_content`");
query("CREATE TABLE `wiki_pages_content` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `pid` int(11) unsigned NOT NULL default '0',
  `editor_id` int(11) NOT NULL default '0',
  `mtime` datetime NOT NULL default '0000-00-00 00:00:00',
  `content` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
query("DROP TABLE IF EXISTS `wiki_properties`");
query("CREATE TABLE `wiki_properties` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `description` text,
  `group_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
?>
