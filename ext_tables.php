<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# TYPOSCRIPT

# Extension
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Hype Grid');


# TABLES

# SysDomain
$columns = array(
	'tx_hypegrid_columns' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_columns',
		'config' => array(
			'type' => 'select',
			'size' => 1,
			'maxitems' => 1,
			'items' => array(
				array('Automatic', 0),
				array('1 - 10%', 1),
				array('2 - 15%', 2),
				array('3 - 25%', 3),
				array('4 - 33%', 4),
				array('5 - 40%', 5),
				array('6 - 50%', 6),
				array('7 - 60%', 7),
				array('8 - 66%', 8),
				array('9 - 75%', 9),
				array('10 - 85%', 10),
				array('11 - 90%', 11),
				array('12 - 100%', 12),
			),
		),
	),
);

t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content', $columns, 1);
t3lib_extMgm::addFieldsToPalette('tt_content', 'imageblock', 'tx_hypegrid_columns');

?>