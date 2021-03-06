<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACA_Genesis_Pro_Column_User_Layout extends ACA_Genesis_Column_User_Layout
	implements ACP_Column_EditingInterface, ACP_Column_SortingInterface, ACP_Column_FilteringInterface
{
	// Pro

	public function editing() {
		return new ACA_Genesis_Pro_Editing_Layout( $this );
	}

	public function sorting() {
		return new ACA_Genesis_Pro_Sorting( $this );
	}

	public function filtering() {
		return new ACA_Genesis_Pro_Filtering( $this );
	}

	public function scripts() {
		parent::scripts();
		wp_enqueue_script( 'aca-genesis-xeditable-input-genesis_layout' );
	}

}
