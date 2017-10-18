<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACA_Genesis_Pro_Column_Post_BodyClass extends ACA_Genesis_Column_Post_BodyClass
	implements ACP_Column_EditingInterface, ACP_Column_SortingInterface, ACP_Column_FilteringInterface
{
	// Pro

	public function editing() {
		return new ACA_Genesis_Pro_Editing( $this );
	}

	public function sorting() {
		return new ACA_Genesis_Pro_Sorting( $this );
	}

	public function filtering() {
		return new ACA_Genesis_Pro_Filtering( $this );
	}

}
