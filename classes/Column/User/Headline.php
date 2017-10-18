<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACA_Genesis_Column_User_Headline extends ACA_Genesis_Column
{
	/**
	 * @inheritdoc
	 * @see  ACA_Genesis_Column::__construct()
	 */
	public function __construct() {
		parent::__construct();
		$this->set_type( 'genesis-headline' );
		$this->set_label( __( 'Archive Headline', 'codepress-admin-columns' ) );
		$this->set_meta_key( 'headline' );
	}

}
