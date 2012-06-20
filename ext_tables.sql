#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
	tx_hypegrid_element_width tinyint(2) DEFAULT '0' NOT NULL,
	tx_hypegrid_image_width tinyint(2) DEFAULT '0' NOT NULL,
	tx_hypegrid_image_margin tinyint(2) DEFAULT '0' NOT NULL,
	tx_hypegrid_text_columns tinyint(2) DEFAULT '0' NOT NULL,
	tx_hypegrid_hide_desktop tinyint(1) DEFAULT '0' NOT NULL,
	tx_hypegrid_hide_tablet tinyint(1) DEFAULT '0' NOT NULL,
	tx_hypegrid_hide_phone tinyint(1) DEFAULT '0' NOT NULL
);