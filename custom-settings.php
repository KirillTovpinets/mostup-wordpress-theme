<?php
/**
 * @internal never define functions inside callbacks.
 * these functions could be run multiple times; this would result in a fatal error.
 */

/**
 * custom option and settings
 */
function mostup_settings_init() {
    require("custom/settings.php");
	// Register a new setting for "mostup" page.
	register_setting( 'mostup', 'mostup_options' );

    foreach ($sections as $section) {
        add_settings_section(
            $section["name"],
            __( $section["title"], 'mostup' ), null,
            'mostup'
        );

        foreach ($section["fields"] as $field) {
            add_settings_field(
                "mostup_" . $field["name"],
				$field["title"],
                "mostup_field_cb",
                'mostup',
                $section["name"],
                $field["meta"]
            );
        }
    }
}

/**
 * Register our mostup_settings_init to the admin_init action hook.
 */
add_action( 'admin_init', 'mostup_settings_init' );

/**
 * Add the top level menu page.
 */
function mostup_options_page() {
	add_menu_page(
		'Настройки сайта',
		'Настройки сайта',
		'manage_options',
		'mostup',
		'mostup_options_page_html'
	);
}


/**
 * Register our mostup_options_page to the admin_menu action hook.
 */
add_action( 'admin_menu', 'mostup_options_page' );


/**
 * Top level menu callback function
 */
function mostup_options_page_html() {
	// check user capabilities
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// add error/update messages

	// check if the user have submitted the settings
	// WordPress will add the "settings-updated" $_GET parameter to the url
	if ( isset( $_GET['settings-updated'] ) ) {
		// add settings saved message with the class of "updated"
		add_settings_error( 'mostup_messages', 'mostup_message', __( 'Settings Saved', 'mostup' ), 'updated' );
	}

	// show error/update messages
	settings_errors( 'mostup_messages' );
	?>
	<div class="wrap">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<form action="options.php" method="post">
			<?php
			// output security fields for the registered setting "mostup"
			settings_fields( 'mostup' );
			// output setting sections and their fields
			// (sections are registered for "mostup", each field is registered to a specific section)
			do_settings_sections( 'mostup' );
			// output save settings button
			submit_button( 'Save Settings' );
			?>
		</form>
	</div>
	<?php
}
