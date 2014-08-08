<?php

$installer = $this;
$installer->startSetup();
$installer->run("
 
-- DROP TABLE IF EXISTS {$this->getTable('news')};
CREATE TABLE {$this->getTable('news')} (
  `news_id` int(11) unsigned NOT NULL auto_increment,
  `title` varchar(255) NOT NULL default '',
  `main` text NOT NULL default '',
  `description` text NOT NULL default '',
  `author` text NOT NULL default '',
  `created_time` datetime NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  ");
 $installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('authors')};
CREATE TABLE {$this->getTable('authors')} (
  `author_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `annotation` text NOT NULL default '',
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


    ");
 
$installer->endSetup();
