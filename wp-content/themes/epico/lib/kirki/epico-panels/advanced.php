<?php

/*
 * Cria a secao, configuracoes e campos da secao `Avancado`
 */
if ( class_exists( 'Kirki' ) ) {

	// Adiciona a seção `Avancado`
	Kirki::add_section( 'advanced', array(
		'title'      => esc_attr__( 'Advanced', 'epico' ),
		'priority'   => 50,
		'capability' => 'edit_theme_options',
		)
	);

	// CAMPOS

	// Campo de codigo CSS personalizado
	Kirki::add_field( 'epico_config', array(
		'type'        => 'code',
		'settings'    => 'epico_custom_css',
		'label'       => esc_attr__( 'Custom CSS', 'epico' ),
		'description' => esc_attr__( 'Add custom CSS styles if needed.', 'epico' ),
		// 'tooltip'     => esc_attr__( 'These styles will be included in the Head tag in your HTML.', 'epico' ),
		'section'     => 'advanced',
		'default'     => '',
		'priority'    => 10,
		'choices'     => array(
			'language' => 'css',
			'theme'    => 'elegant',
			'height'   => 250,
			),
		)
	);

	// Campo de codigo JS personalizado
	Kirki::add_field( 'epico_config', array(
		'type'        => 'code',
		'settings'    => 'epico_custom_js',
		'label'       => esc_attr__( 'Custom Javascript', 'epico' ),
		'description' => esc_attr__( 'Add custom Javascript if needed.', 'epico' ),
		// 'tooltip'     => esc_attr__( 'The Javascript snippet will be included before the end of the Body tag in your HTML.', 'epico' ),
		'section'     => 'advanced',
		'default'     => '',
		'priority'    => 20,
		'choices'     => array(
			'language' => 'js',
			'theme'    => 'elegant',
			'height'   => 250,
			),
		)
	);

	// Campo para ignorar estilos do Epico em paginas
	Kirki::add_field( 'epico_config', array(
		'type'        => 'select',
		'settings'    => 'epico_page_ids',
		'label'       => esc_attr__( 'Ignore styles in pages', 'epico' ),
		'description' => esc_attr__( 'If you want to remove theme styles from certain pages to avoid conflicts with page builder plugins, select below the pages that should be ignored by the Epico theme.', 'epico' ),
		'tooltip'     => esc_attr__( 'If you use some kind of page builder plugin to create pages, please identify this pages here. This will remove all Epico styles in these pages. This setting works only for pages, not posts.', 'epico' ),
		'section'     => 'advanced',
		'default'     => null,
		'priority'    => 30,
		'multiple'    => 999,
		'choices'     => Kirki_Helper::get_posts(
			array(
				'post_type'      => 'page',
				'orderby'        => 'modified',
				'posts_per_page' => 50
				)
			),
		)
	);

	// Campo Google Tag Manager
	Kirki::add_field( 'epico_config', array(
		'type'              => 'text',
		'settings'          => 'epico_gtm',
		'label'             => esc_attr__( 'Google Tag Manager', 'epico' ),
		'description'       => esc_attr__( 'If you want to track user behaviour in your website using the free Google Tag Manager, paste your GTM ID in the field below, in the following format: GTM-AB123CD.', 'epico' ),
		'tooltip'           => esc_attr__( 'The Google Tag Manager is a free tool from Google that allows digital marketing professionals manage their campaigns with more independence from developers, offering powerful tools to track user behaviour in your website.', 'epico' ),
		'section'           => 'advanced',
		'sanitize_callback' => 'wp_kses_post',
		'default'           => '',
		'priority'          => 40,
		)
	);
}
