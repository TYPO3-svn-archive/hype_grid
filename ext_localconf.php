<?php

if(!defined('TYPO3_MODE'))
	die('Access denied.');



# HOOKS

# Frontend
if(TYPO3_MODE == 'FE') {

	# Page Renderer
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][$_EXTKEY] = 'EXT:' . $_EXTKEY . '/Classes/Hook/class.user_hypegrid_t3lib_pagerenderer.php:user_hypegrid_t3lib_pagerenderer->renderPreProcess';

	# CSS Styled Content
	$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['css_styled_content']['pi1_hooks']['render_textpic'] = t3lib_extMgm::extPath('hype_grid', 'Classes/Utility/class.user_tx_hypegrid_content.php:user_tx_hypegrid_content');
}

# XCLASS

# Frontend
if(TYPO3_MODE == 'FE') {
	
	# Grid Elements
	$GLOBALS['TYPO3_CONF_VARS']['FE']['XCLASS']['ext/gridelements/pi1/class.tx_gridelements_pi1.php'] = t3lib_extMgm::extPath('hype_grid', 'Classes/XClass/class.ux_tx_gridelements_pi1.php');
}

?>