<?php

class user_hypegrid_t3lib_pagerenderer {

	/**
	 * @var array Holds the extension's configuration.
	 */
	protected $settings;

	/**
	 *
	 */
	public function __construct() {
		$this->settings = $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_hypegrid.'];
	}

	/**
	 * Adds CSS and JS files
	 *
	 * @param array $parameters
	 * @param t3lib_PageRenderer $renderer
	 * @return void
	 */
	public function renderPreProcess($parameters, $renderer) {

		# add grid.css and responsive.css
		if($this->settings['common.']['enableGrid']) {

			# add files
			$extensionStyles = array(
				'typo3conf/ext/hype_grid/Resources/Public/Media/Style/grid.css' => array(
					'rel' => 'stylesheet',
					'media' => 'all',
					'title' => '',
					'compress' => TRUE,
					'forceOnTop' => FALSE,
					'allWrap' => ''
				),
			);

			# reorder files
			$defaultStyles = array_slice($parameters['cssFiles'], 0, 1, TRUE);
			$parameters['cssFiles'] = $defaultStyles + $extensionStyles + $parameters['cssFiles'];

			unset($defaultStyles, $extensionStyles);
		}

		# add jquery.fitvids.js
		if($this->settings['common.']['enableFitVids']) {
			$parameters['jsLibs']['fitvids'] = array(
				'file' => 'typo3conf/ext/hype_grid/Resources/Public/Media/Script/jquery.fitvids.js',
				'type' => 'text/javascript',
				'section' => 2,
				'compress' => TRUE,
				'forceOnTop' => FALSE,
				'external' => FALSE,
				'excludeFromConcatenation' => FALSE,
				'disableCompression' => FALSE,
			);
		}

		# add jquery.fittext.js
		if($this->settings['common.']['enableFitText']) {
			$parameters['jsLibs']['fittext'] = array(
				'file' => 'typo3conf/ext/hype_grid/Resources/Public/Media/Script/jquery.fittext.js',
				'type' => 'text/javascript',
				'section' => 2,
				'compress' => TRUE,
				'forceOnTop' => FALSE,
				'external' => FALSE,
				'excludeFromConcatenation' => FALSE,
				'disableCompression' => FALSE,
			);
		}
	}
}

?>