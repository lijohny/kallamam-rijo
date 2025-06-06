<?php

if ( ! class_exists( 'acf_field_password' ) ) :

	class acf_field_password extends acf_field {


		/**
		 * This function will setup the field type data
		 *
		 * @type    function
		 * @date    5/03/2014
		 * @since   ACF 5.0.0
		 *
		 * @param   n/a
		 * @return  n/a
		 */
		function initialize() {

			// vars
			$this->name          = 'password';
			$this->label         = __( 'Password', 'secure-custom-fields' );
			$this->description   = __( 'An input for providing a password using a masked field.', 'secure-custom-fields' );
			$this->preview_image = acf_get_url() . '/assets/images/field-type-previews/field-preview-password.png';
			$this->doc_url       = 'https://developer.wordpress.org/secure-custom-fields/features/fields/password/';
			$this->tutorial_url  = 'https://developer.wordpress.org/secure-custom-fields/features/fields/password/password-tutorial/';
			$this->defaults      = array(
				'placeholder' => '',
				'prepend'     => '',
				'append'      => '',
			);
		}


		/**
		 * Create the HTML interface for your field
		 *
		 * @param   $field - an array holding all the field's data
		 *
		 * @type    action
		 * @since   ACF 3.6
		 * @date    23/01/13
		 */
		function render_field( $field ) {

			acf_get_field_type( 'text' )->render_field( $field );
		}

		/**
		 * Create extra options for your field. This is rendered when editing a field.
		 * The value of $field['name'] can be used (like bellow) to save extra data to the $field
		 *
		 * @type    action
		 * @since   ACF 3.6
		 * @date    23/01/13
		 *
		 * @param   $field  - an array holding all the field's data
		 */
		function render_field_settings( $field ) {
			// TODO: Delete this method?
		}

		/**
		 * Renders the field settings used in the "Presentation" tab.
		 *
		 * @since ACF 6.0
		 *
		 * @param array $field The field settings array.
		 * @return void
		 */
		function render_field_presentation_settings( $field ) {
			acf_render_field_setting(
				$field,
				array(
					'label'        => __( 'Placeholder Text', 'secure-custom-fields' ),
					'instructions' => __( 'Appears within the input', 'secure-custom-fields' ),
					'type'         => 'text',
					'name'         => 'placeholder',
				)
			);

			acf_render_field_setting(
				$field,
				array(
					'label'        => __( 'Prepend', 'secure-custom-fields' ),
					'instructions' => __( 'Appears before the input', 'secure-custom-fields' ),
					'type'         => 'text',
					'name'         => 'prepend',
				)
			);

			acf_render_field_setting(
				$field,
				array(
					'label'        => __( 'Append', 'secure-custom-fields' ),
					'instructions' => __( 'Appears after the input', 'secure-custom-fields' ),
					'type'         => 'text',
					'name'         => 'append',
				)
			);
		}
	}


	// initialize
	acf_register_field_type( 'acf_field_password' );
endif; // class_exists check
