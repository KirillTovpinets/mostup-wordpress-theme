<?php 

$sections = [
    array(
        "name" => "mostup_section_developers",
        "title" => "Контактные данные",
        "fields" => [
            array(
                "name" => "phone",
                "title" => "Номер телефона",
                "meta" => array(
                    'label_for'         => 'mostup_phone',
                    'class'             => 'mostup_row',
                )
            ),
            array(
                "name" => "email",
                "type" => "email",
                "title" => "Email",
                "meta" => array(
                    'label_for'         => 'mostup_email',
                    'class'             => 'mostup_row',
                )
            ),
            array(
                "name" => "vk",
                "title" => "Ссылка на vk.com",
                "meta" => array(
                    'label_for'         => 'mostup_vk',
                    'class'             => 'mostup_row',
                )
            ),
            array(
                "name" => "facebook",
                "title" => "Ссылка на facebook.com",
                "meta" => array(
                    'label_for'         => 'mostup_facebook',
                    'class'             => 'mostup_row',
                )
            ),
            array(
                "name" => "instagram",
                "title" => "Ссылка на instagram.com",
                "meta" => array(
                    'label_for'         => 'mostup_instagram',
                    'class'             => 'mostup_row',
                )
            ),
        ]
    )
];


function mostup_field_cb( $args ) {
	// Get the value of the setting we've registered with register_setting()
	$options = get_option( 'mostup_options' );
    $inputType = isset($args['type']) ? $args['type'] : 'text';
    $inputValue = isset($options[ $args['label_for'] ]) ? $options[ $args['label_for'] ] : null;
	?>
    <input type="<?php echo $inputType  ?>" value="<?php echo $inputValue; ?>" name="mostup_options[<?php echo esc_attr( $args['label_for'] ); ?>]" />
	<?php
}
?>
