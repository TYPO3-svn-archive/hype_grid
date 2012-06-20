<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# TYPOSCRIPT

# Extension
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'Hype Grid');


# TABLES

# Content
$columns = array(
	'tx_hypegrid_element_width' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_element_width',
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
	'tx_hypegrid_image_width' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_image_width',
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
	'tx_hypegrid_image_margin' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_image_margin',
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
	'tx_hypegrid_text_columns' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_text_columns',
		'config' => array(
			'type' => 'select',
			'size' => 1,
			'maxitems' => 1,
			'items' => array(
				array('Default', 0),
				array('1', 1),
				array('2', 2),
				array('3', 3),
				array('4', 4),
				array('5', 5),
				array('6', 6),
				array('7', 7),
				array('8', 8),
				array('9', 9),
				array('10', 10),
				array('11', 11),
				array('12', 12),
			),
		),
	),
	'tx_hypegrid_hide_desktop' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_hide_desktop',
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_hypegrid_hide_tablet' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_hide_tablet',
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
	'tx_hypegrid_hide_phone' => array(
		'exclude' => 1,
		'label' => 'LLL:EXT:hype_grid/Resources/Private/Language/locallang_db.xml:tt_content.tx_hypegrid_hide_phone',
		'config' => array(
			'type' => 'check',
			'items' => array(
				'1'	=> array(
					'0' => 'LLL:EXT:lang/locallang_core.xml:labels.enabled',
				),
			),
		),
	),
);

t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content', $columns, 1);
t3lib_extMgm::addToAllTCAtypes('tt_content', 'tx_hypegrid_text_columns', '', 'after:rte_enabled');
t3lib_extMgm::addFieldsToPalette('tt_content', 'imageblock', '--linebreak--,tx_hypegrid_image_width,tx_hypegrid_image_margin');
t3lib_extMgm::addFieldsToPalette('tt_content', 'visibility', '--linebreak--,tx_hypegrid_hide_desktop,tx_hypegrid_hide_tablet,tx_hypegrid_hide_phone');
//t3lib_extMgm::addFieldsToPalette('tt_content', 'frames', 'imagecols,tx_hypegrid_element_width');

?>