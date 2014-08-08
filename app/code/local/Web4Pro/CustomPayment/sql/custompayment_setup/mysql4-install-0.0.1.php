<?php

$installer = $this;
$installer->startSetup();
$installer->run("
 
DROP TABLE IF EXISTS {$this->getTable('custompayment')};
CREATE TABLE {$this->getTable('custompayment')} (
  `custompayment_id` int(11) unsigned NOT NULL auto_increment,
  `value` varchar(255) NOT NULL default '',
  `user_id` text NOT NULL default '',
  PRIMARY KEY (`custompayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
  ");
 
$installer->endSetup();
