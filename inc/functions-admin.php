<?php
function currency_application_metaboxes() {
	if ( isset( $_GET['post'] ) ) {
		$post_id = $_GET['post'];
	} else {
		if ( isset( $_POST['post_ID'] ) ) {
			$post_id = $_POST['post_ID'];
		} else {
			$post_id = '';
		}
	}
	if ( ! isset( $post_id ) ) {
		return;
	}
	$currency_metaboxes = array(
		array(
			'id'       => 'page_options',
			'title'    => 'Currency converter homepage options',
			'pages'    => 'page',
			'context'  => 'normal',
			'priority' => 'low',
			'fields'   => array(
				array(
					'name' => 'Currency converter application H2',
					'desc' => '',
					'id'   => 'currency_application_h2',
					'type' => 'text',
					'std'  => ''
				),
				array(
					'name' => 'Currency converter application disclaimer',
					'desc' => '',
					'id'   => 'currency_application_disclaimer',
					'type' => 'text',
					'std'  => ''
				)
			)
		),
		array(
			'id'       => 'page_options',
			'title'    => 'Currency converter century page options',
			'pages'    => 'page',
			'context'  => 'normal',
			'priority' => 'low',
			'fields'   => array(
				array(
					'name' => 'Century',
					'desc' => '',
					'id'   => 'currency_century',
					'type' => 'text',
					'std'  => ''
				)
			)
		)
	);

	$template_file      = get_post_meta( $post_id, '_wp_page_template', true );
	if ( $template_file == 'page-home.php' ) {
		$currency_application_metabox = new CreateMetaBox( $currency_metaboxes[0] );
	}
	else {
		$currency_century = new CreateMetaBox( $currency_metaboxes[1] );
	}

}