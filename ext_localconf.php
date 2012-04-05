<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# HOOKS

# Frontend
if(TYPO3_MODE == 'FE') {

	# Page Renderer
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Hook/class.user_hypegrid_t3lib_pagerenderer.php:user_hypegrid_t3lib_pagerenderer->renderPreProcess';
}

?>