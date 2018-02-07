<?php

/*
 * Cria a secao, configuracoes e campos da secao `Botoes de compatilhamento`
 */
if ( class_exists( 'Kirki' ) ) {

	// Adiciona a seção `social`
	Kirki::add_section( 'social', array(
		'title'      => esc_attr__( 'Social sharing buttons', 'epico' ),
		'priority'   => 30,
		'capability' => 'edit_theme_options',
		)
	);

	// CAMPOS

	// Habilitar em paginas
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialpages',
		'label'    => esc_attr__( 'Enable in pages', 'epico' ),
		'tooltip'  => esc_attr__( 'Control the display of the social buttons in pages. You can also specify below the pages from which you would like to remove the buttons from.', 'epico' ),
		'section'  => 'social',
		'default'  => 0,
		'priority' => 10,
		)
	);

	// Excluir botoes de paginas especificas
	Kirki::add_field( 'epico_config', array(
		'type'        => 'select',
		'settings'    => 'epico_socialpages_exclude',
		'description' => esc_attr__( 'Select specific pages you want to remove the sharing buttons from.', 'epico' ),
		'section'     => 'social',
		'default'     => NULL,
		'priority'    => 20,
		'multiple'    => 999,
		'choices'     => Kirki_Helper::get_posts( array( 'post_type' => 'page', 'orderby' => 'modified', 'posts_per_page' => 50 ) ),
        'active_callback' => array(
            array(
                'setting'  => 'epico_socialpages',
                'value'    => '1',
                'operator' => '==',
                )
            )
		)
	);

	// Habilitar em posts
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialposts',
		'label'    => esc_attr__( 'Enable in posts', 'epico' ),
		'tooltip'  => esc_attr__( 'Control the display of the social buttons in posts. You can also specify below the posts from which you would like to remove the buttons from.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 30,
		)
	);

	// Excluir botoes de posts especificos
	Kirki::add_field( 'epico_config', array(
		'type'        => 'select',
		'settings'    => 'epico_socialposts_exclude',
		'description' => esc_attr__( 'Select specific post you want to remove the sharing buttons from.', 'epico' ),
		'section'     => 'social',
		'default'     => NULL,
		'priority'    => 40,
		'multiple'    => 999,
		'choices'     => Kirki_Helper::get_posts( array( 'post_type' => 'post', 'orderby' => 'modified', 'posts_per_page' => 50 ) ),
        'active_callback' => array(
            array(
                'setting'  => 'epico_socialposts',
                'value'    => '1',
                'operator' => '==',
                )
            )
		)
	);

	// Fixar barra
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialstickybox',
		'label'    => esc_attr__( 'Sticky share box', 'epico' ),
		'tooltip'  => esc_attr__( 'By default the box remains fixed when the page scrolls. You can control this behavior here.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 50,
		)
	);

	// Botao de fechar
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialclose',
		'label'    => esc_attr__( 'Close button', 'epico' ),
		'tooltip'  => esc_attr__( 'A close button to dismiss the social button bar. For this feature to work, you must have installed the theme\'s funcionality plugin.' , 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 60,
		)
	);

	// Numero total de compartilhamentos
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialcounter',
		'label'    => esc_attr__( 'Total number of shares', 'epico' ),
		'tooltip'  => esc_attr__( 'The total number of shares for all social networks shown.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 70,
		)
	);

	// Compartilhamentos por rede social
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialpartialcount',
		'label'    => esc_attr__( 'Shares per social network', 'epico' ),
		'tooltip'  => esc_attr__( 'Individual number or shares for each social network.', 'epico' ),
		'section'  => 'social',
		'default'  => 0,
		'priority' => 80,
		)
	);

	// Estilos dos botoes
	Kirki::add_field( 'epico_config', array(
		'type'     => 'radio-image',
		'settings' => 'epico_socialstyles',
		'label'    => esc_attr__( 'Button styles', 'epico' ),
		'section'  => 'social',
		'priority' => 100,
		'default'  => '0',
		'choices'  => array(
			'0' => get_template_directory_uri() . '/img/icons/social-colorful.png',
			'1' => get_template_directory_uri() . '/img/icons/social-minimal.png',
			),
		)
	);

	// Botao do Facebook
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialfacebook',
		'label'    => esc_attr__( 'Facebook button', 'epico' ),
		'tooltip'  => esc_attr__( 'Display the Facebook button.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 104,
		)
	);

	// ID da App do Facebook
	Kirki::add_field( 'epico_config', array(
		'type'        => 'text',
		'settings'    => 'epico_fb_app_id',
		'label'       => esc_attr__( 'Facebook App ID', 'epico' ),
		'description' => esc_attr__( 'How do I get this? See http://ubr.link/botoes', 'epico' ),
		'tooltip'     => esc_attr__( 'Please enter your Facebook App ID to authorize the buttons to collect the number of shares. This step is necessary to authenticate the requests made by your sharing buttons to the Facebook API, and will allow the number of shares to appear properly beside your buttons.', 'epico' ),
		'section'     => 'social',
		'default'     => NULL,
		'priority'    => 106,
		'active_callback' => array(
		    array(
		        'setting'  => 'epico_socialfacebook',
		        'value'    => '1',
		        'operator' => '==',
		        ),
		    )
		)
	);

	// Secret ID da App do Facebook
	Kirki::add_field( 'epico_config', array(
		'type'        => 'text',
		'settings'    => 'epico_fb_app_secret',
		'label'       => esc_attr__( 'Facebook App Secret', 'epico' ),
		'description' => esc_attr__( 'How do I get this? See http://ubr.link/botoes', 'epico' ),
		'tooltip'     => esc_attr__( 'Please enter your Facebook App Secret to authorize the buttons to collect the number of shares. This step is necessary to authenticate the requests made by your sharing buttons to the Facebook API, and will allow the number of shares to appear properly beside your buttons.', 'epico' ),
		'section'     => 'social',
		'default'     => NULL,
		'priority'    => 108,
		'active_callback' => array(
		    array(
		        'setting'  => 'epico_socialfacebook',
		        'value'    => '1',
		        'operator' => '==',
		        ),
		    ),
		)
	);

	// Versão da App do Facebook
	Kirki::add_field( 'epico_config', array(
		'type'        => 'select',
		'settings'    => 'epico_fb_app_version',
		'description' => esc_attr__( 'Select the API version used by your Facebook App.', 'epico' ),
		'tooltip'     => esc_attr__( 'If your Facebook app was created after April 18th, 2017, select version 2.9 for the API. You can also check the API version in the App dashboard on developers.facebook.com/apps/.', 'epico' ),
		'section'     => 'social',
		'default'     => 'v2.8',
		'priority'    => 110,
		'multiple'    => 1,
		'choices'     => array(
			'v2.8' => esc_attr__( 'Version 2.8 or lower', 'epico' ),
			'v2.9' => esc_attr__( 'Version 2.9 or higher', 'epico' ),
			),
		'active_callback' => array(
		    array(
		        'setting'  => 'epico_socialfacebook',
		        'value'    => '1',
		        'operator' => '==',
		        ),
		    ),
		)
	);

	// Botao do Twitter
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialtwitter',
		'label'    => esc_attr__( 'Twitter button', 'epico' ),
		'tooltip'  => esc_attr__( 'Display the Twitter button.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 120,
		)
	);

	// Cadastro no New Share Counts (Twitter)
	Kirki::add_field( 'epico_config', array(
		'type'     => 'custom',
		'settings' => 'epico_share_count_warning',
		'section'  => 'social',
		'default'  => esc_attr__( 'Important: to automatically get your Twitter\'s share count, register your site in http://newsharecounts.com/', 'epico' ),
		'priority' => 125,
		'sanitize_callback' => 'wp_kses_post',
		'active_callback' => array(
		    array(
		        'setting'  => 'epico_socialtwitter',
		        'value'    => '1',
		        'operator' => '==',
		        ),
		    ),
		)
	);

	// Botao do Google
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialgoogle',
		'label'    => esc_attr__( 'Google+ button', 'epico' ),
		'tooltip'  => esc_attr__( 'Display the Google Plus button. Note: this button does not display numbers of shares.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 130,
		)
	);

	// Botao do Pinterest
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialpinterest',
		'label'    => esc_attr__( 'Pinterest button', 'epico' ),
		'tooltip'  => esc_attr__( 'Display the Pinterest button.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 140,
		)
	);

	// Botao do Linkedin
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_sociallinkedin',
		'label'    => esc_attr__( 'LinkedIn button', 'epico' ),
		'tooltip'  => esc_attr__( 'Display the LinkedIn button.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 150,
		)
	);

	// Botao do Whatsapp
	Kirki::add_field( 'epico_config', array(
		'type'     => 'checkbox',
		'settings' => 'epico_socialwhatsapp',
		'label'    => esc_attr__( 'WhatsApp button', 'epico' ),
		'tooltip'  => esc_attr__( 'Display the WhatsApp button. Notice: this button does not display numbers of shares.', 'epico' ),
		'section'  => 'social',
		'default'  => 1,
		'priority' => 160,
		)
	);

    // Botão do Whatsapp no Desktop
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio',
        'settings'    => 'epico_whatsapp_desktop',
        'label'       => esc_attr__( 'Where do you want do display the button?', 'epico' ),
        'tooltip'     => esc_attr__( 'Select where do you want to display the button. The desktop version will use the Web version of WhatsApp to share the post link.', 'epico' ),
        'section'     => 'social',
        'default'     => 'mobile',
        'priority'    => 170,
		'choices'     => array(
			'mobile'         => esc_attr__( 'Cell Phones only', 'epico' ),
			'mobile_desktop' => esc_attr__( 'Cell Phones and desktops', 'epico' ),
			),
        'active_callback' => array(
            array(
                'setting'  => 'epico_socialwhatsapp',
                'value'    => '1',
                'operator' => '==',
            	),
        	),
        )
    );
}
