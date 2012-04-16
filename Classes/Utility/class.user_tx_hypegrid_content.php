<?php

class user_tx_hypegrid_content extends tx_cssstyledcontent_pi1 {

   var $width;

   public function __construct() {
	  $this->width = max($GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_hypegrid.']['grid.']['imageMinWidth'], 0);
   }

   public function render_textpic($content, $conf) {
	  $this->cObj = $this->pObj->cObj;
	  return parent::render_textpic($content, $conf);
   }

   public function render_grid($content, $conf) {
	  $this->cObj = $this->pObj->cObj;

	  return $content;
   }

   protected function getImgColumnWidths($conf, $colCount, $netW) {

	  $columnWidths = parent::getImgColumnWidths($conf, $colCount, $netW);

	  if($this->width > 0) {
		  foreach($columnWidths as $key => $width) {
			$columnWidths[$key] = max($width, $this->width);
		 }
	  }

	  return $columnWidths;
   }

   public function hookRequest($functionName) {
	  return FALSE;
   }
}

?>