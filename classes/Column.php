<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACA_Genesis_Column extends AC_Column_Meta
{
	public $meta_key = '';

	/**
	 * @inheritdoc
	 * @see  AC_Column_Meta::__construct()
	 */
	public function __construct( $data = array() ) {
		$this->set_group( 'genesis' );
	}

	/**
	 * @return  string
	 */
	public function get_meta_key() {
		return $this->meta_key;
	}

	/**
	 * @param   string  $val
	 * @return  $this
	 */
	public function set_meta_key( $val ) {
		$this->meta_key = $val;

		return $this;
	}

	/**
	 * @inheritdoc
	 * @see  AC_Column::get_value()
	 */
	public function get_value( $id ) {
		$value = $this->get_raw_value( $id );

		if ( ! $value ) {
			return false;
		}

		return $value;
	}

	/**
	 * @return string
	 */
	public function get_field() {
		return $this->get_meta_key();
	}

}
