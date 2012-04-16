<?php

class ux_tx_gridelements_pi1 extends tx_gridelements_pi1 {

	public function renderColumns($columns = array(), $setup = array()) {

		$layoutSetup = t3lib_div::makeInstance('tx_gridelements_layoutsetup', $this->cObj->data['pid']);
		$layout = $layoutSetup->getSetup($this->cObj->data['tx_gridelements_backend_layout']);
		$config = $layout['config'];

		//var_dump($config);
		//var_dump($this->cObj->data);
		//var_dump($columns);

		# loop thru columns
		foreach($columns as $key => $content) {

			$index = (int)$key;

			if($content) {

				# get column width
				foreach($config['rows.'] as $rowNumber => $row) {



					foreach($row['columns.'] as $columnNumber => $column) {


						//var_dump($column);

						if($column['colPos'] == $index) {
							$currentColumn = $column;
							$currentColumn['row'] = $rowNumber;
							$currentColumn['column'] = $columnNumber;

							break;
						}
					}
				}

				if(!$currentColumn['width']) {
					$currentColumn['width'] = floor(12 / $config['colCount']);
				}

				# define wrap
				$wrap = '<div class="csc-span-' . $currentColumn['width'] . '">|</div>';

				# add row wrap
				if((int)$currentColumn['column'] == $config['colCount']) {
					$wrap .= '</div>';
				} else if((int)$currentColumn['column'] == 1) {
					$wrap = '<div class="csc-row">' . $wrap;
				}

				$configuration = array(
					'stdWrap.' => array(
						'wrap' => $wrap
					)
				);

				# wrap column
				$columns[$key] = $this->cObj->stdWrap($content, $configuration);
			}
		}

		return parent::renderColumns($columns, $setup);
	}
}

?>