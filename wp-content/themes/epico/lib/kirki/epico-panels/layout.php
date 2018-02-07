<?php

/*
 * Cria a secao, configuracoes e campos da secao `Design e layout`
 */
if ( class_exists( 'Kirki' ) ) {

    // Adiciona a seção `Design e Layout`
    Kirki::add_section( 'design_layout', array(
        'title'          => esc_attr__( 'Design and layout', 'epico' ),
        'priority'       => 20,
        'capability'     => 'edit_theme_options',
        )
    );

    // CAMPOS

    // Paletas de cor
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio-image',
        'settings'    => 'epico_color_palettes',
        'label'       => esc_attr__( 'Color palettes', 'epico' ),
        'tooltip'     => esc_attr__( 'Customize your site colors with one of these color palletes. To see all the variations between the palette options, first add some widgets from the Epico plugin.', 'epico' ),
        'section'     => 'design_layout',
        'priority'    => 10,
        'default'     => '0',
        'choices'     => array(
            '0' => get_template_directory_uri() . '/img/icons/pallete01.png',
            '1' => get_template_directory_uri() . '/img/icons/pallete02.png',
            '2' => get_template_directory_uri() . '/img/icons/pallete03.png',
            '3' => get_template_directory_uri() . '/img/icons/pallete04.png',
            '4' => get_template_directory_uri() . '/img/icons/pallete05.png',
            '5' => get_template_directory_uri() . '/img/icons/pallete06.png',
            '6' => get_template_directory_uri() . '/img/icons/pallete07.png',
            '7' => get_template_directory_uri() . '/img/icons/pallete08.png',
            '8' => get_template_directory_uri() . '/img/icons/pallete09.png',
            )
        )
    );

    // Sobrescrever cor principal
    Kirki::add_field( 'epico_config', array(
        'type'        => 'switch',
        'settings'    => 'epico_color_override_option',
        'label'       => esc_attr__( 'Override style main color', 'epico' ),
        'tooltip'     => esc_attr__( 'Check this if you want to override the pallete accent color and define a new custom color.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 0,
        'priority'    => 20,
        )
    );

    // Cor principal
    Kirki::add_field( 'epico_config', array(
        'type'        => 'color',
        'settings'    => 'epico_color_override',
        'label'       => esc_attr__( 'New main color', 'epico' ),
        'description' => esc_attr__( 'Choose a value to automatically override the pallete\'s main color.', 'epico' ),
        'tooltip'     => esc_attr__( 'Here you can specify a custom color for the main elements of the template, overriding the chosen pallete. The neutral tones will remain the same.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => '#81D742',
        'priority'    => 30,
        'active_callback' => array(
            array(
                'setting'  => 'epico_color_override_option',
                'value'    => '1',
                'operator' => '==',
                ),
            ),
        )
    );

    // Cor de fundo do cabecalho
    Kirki::add_field( 'epico_config', array(
        'type'        => 'color',
        'settings'    => 'epico_header_bkg_color',
        'description' => esc_attr__( 'Header background color', 'epico' ),
        'section'     => 'design_layout',
        'default'     => '#FFFFFF',
        'priority'    => 36, // prioridade 35 ocupada pela cor de fundo - epico.php - funcao `epico_customizer_remove`
        )
    );

    // Cor de fundo do rodape
    Kirki::add_field( 'epico_config', array(
        'type'        => 'color',
        'settings'    => 'epico_footer_bkg_color',
        'description' => esc_attr__( 'Footer background color', 'epico' ),
        'section'     => 'design_layout',
        'default'     => '#344146',
        'priority'    => 37,
        )
    );

    // Cor de fundo da barra de enderecos do navegador (mobile apenas)
    Kirki::add_field( 'epico_config', array(
        'type'        => 'color',
        'settings'    => 'epico_address_bar_color',
        'description' => esc_attr__( 'Browser address bar color (mobile)', 'epico' ),
        'tooltip'     => esc_attr__( 'This only affects the browser address bar on mobile. The mobile browsers affected are: Chrome, Safari, Firefox OS, Opera, Windows Phone browser and Vivaldi.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => NULL,
        'priority'    => 39,
        )
    );

    // Cor de fundo da landing page
    Kirki::add_field( 'epico_config', array(
        'type'        => 'color',
        'settings'    => 'epico_landing_bkg_color',
        'description' => esc_attr__( 'Landing background color', 'epico' ),
        'tooltip'     => esc_attr__( 'This only affects the pages in which the native landing page templates from Epico were applied.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => '#FFFFFF',
        'priority'    => 40,
        'transport' => 'postMessage',
        'js_vars'   => array(
            array(
                'element'  => '.page-template-landing[class*="epc-"]',
                'type'     => 'css',
                'property' => 'background',
                ),
            array(
                'element'  => '.page-template-landing[class*="epc-"] #page',
                'type'     => 'css',
                'property' => 'border-top',
                ),
            )
        )
    );

    // Imagem de fundo da landing page
    Kirki::add_field( 'epico_config', array(
        'type'        => 'image',
        'settings'    => 'epico_landing_bkg_img',
        'description' => esc_attr__( 'Landing background image', 'epico' ),
        'section'     => 'design_layout',
        'default'     => NULL,
        'priority'    => 50, // prioridade 45 ocupada pela imagem de fundo padrao - epico.php - funcao `epico_customizer_remove`
        )
    );

    // Posicao da sidebar
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio-image',
        'settings'    => 'epico_sidebar_layout',
        'label'       => esc_attr__( 'Site layout', 'epico' ),
        'tooltip'     => esc_attr__( 'Choose a layout for your content: sidebar on the left or sidebar on the right.', 'epico' ),
        'section'     => 'design_layout',
        'priority'    => 60,
        'default'     => '1',
        'choices'     => array(
            '0' => get_template_directory_uri() . '/img/icons/sidebar-left.png',
            '1' => get_template_directory_uri() . '/img/icons/sidebar-right.png',
            )
        )
    );

    // Tipografia dos titulos
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio-image',
        'settings'    => 'epico_typography',
        'label'       => esc_attr__( 'Header font', 'epico' ),
        'tooltip'     => esc_attr__( 'Choose one typographic style to use with the site headers.', 'epico' ),
        'section'     => 'design_layout',
        'priority'    => 70,
        'default'     => '0',
        'choices'     => array(
            '0' => get_template_directory_uri() . '/img/icons/header-default-font.png',
            '1' => get_template_directory_uri() . '/img/icons/header-alt-font-1.png',
            '2' => get_template_directory_uri() . '/img/icons/header-alt-font-2.png',
            '3' => get_template_directory_uri() . '/img/icons/header-alt-font-3.png',
            '4' => get_template_directory_uri() . '/img/icons/header-alt-font-4.png',
            '5' => get_template_directory_uri() . '/img/icons/header-alt-font-5.png',
            )
        )
    );

    // Tipografia dos textos
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio-image',
        'settings'    => 'epico_typography_text',
        'label'       => esc_attr__( 'Text font', 'epico' ),
        'tooltip'     => esc_attr__( 'Choose one typographic style for the text of your articles.', 'epico' ),
        'section'     => 'design_layout',
        'priority'    => 80,
        'default'     => '0',
        'choices'     => array(
            '0' => get_template_directory_uri() . '/img/icons/text-default-font.png',
            '1' => get_template_directory_uri() . '/img/icons/text-alt-font-1.png',
            '2' => get_template_directory_uri() . '/img/icons/text-alt-font-2.png',
            )
        )
    );

    // Listagem compacta de posts
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_compact_loop',
        'label'       => esc_attr__( 'Compact listing of posts', 'epico' ),
        'tooltip'     => esc_attr__( 'This will enable a more compact display of posts in various listings: archives, blogs, categories, tags and taxonomies.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 90,
        )
    );

    // Estilo de metadata dos posts na listagem compacta
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio-image',
        'settings'    => 'epico_icon_meta_style',
        'label'       => esc_attr__( 'Post metadata layout in compact listing', 'epico' ),
        'tooltip'     => esc_attr__( 'Choose a style for the post metadata the appears in the compact listing of posts.', 'epico' ),
        'section'     => 'design_layout',
        'active_callback' => array(
            array(
                'setting'  => 'epico_compact_loop',
                'value'    => '1',
                'operator' => '==',
            ),
        ),
        'default'     => 'icons',
        'priority'    => 95,
        'choices'     => array(
            'icons' => get_template_directory_uri() . '/img/icons/metadata-icons.png',
            'text'  => get_template_directory_uri() . '/img/icons/metadata-text.png',
            'none'  => get_template_directory_uri() . '/img/icons/metadata-none.png',
            )
        )
    );

    // Tempo de leitura
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_reading_time',
        'label'       => esc_attr__( 'Estimated reading time of posts', 'epico' ),
        'tooltip'     => esc_attr__( 'A small notice with the estimated reading time of the post will appear right above the post\'s text. After activating this, you must resave your old posts to calculate the reading time for them.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 100,
        )
    );

    // Excluir tempo de leitura de paginas
    Kirki::add_field( 'epico_config', array(
        'type'        => 'select',
        'settings'    => 'epico_reading_time_exclude',
        'label'       => esc_attr__( 'Ignore reading time in pages', 'epico' ),
        'description' => esc_attr__( 'If you want to remove the reading time from certain pages, select them below.', 'epico' ),
        'tooltip'     => esc_attr__( 'The reading time does not make sense in some page types. Pages with contact forms or with video only will not benefit for this information. To correct this behavior, this option will remove the reading time only from the pages you select in the text field. This setting works only for pages, not posts.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => NULL,
        'priority'    => 110,
        'multiple'    => 999,
        'active_callback' => array(
            array(
                'setting'  => 'epico_reading_time',
                'value'    => '1',
                'operator' => '==',
            ),
        ),
        'choices'     => Kirki_Helper::get_posts( array( 'post_type' => 'page', 'orderby' => 'modified', 'posts_per_page' => 50 ) ),
        )
    );

    // Modo Zen
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_zenmode',
        'label'       => esc_attr__( 'Zen mode (focused reading)', 'epico' ),
        'tooltip'     => esc_attr__( 'This will add a small icon for the Zen mode (or focused reading mode), right above the post or page title. The Zen mode will allow the site visitor to temporally remove all layout distractions from the site\'s interface, like sidebars, widgets and background colors or images.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 120,
        )
    );

    // Texto do link de ativacao do modo Zen
    Kirki::add_field( 'epico_config', array(
        'type'        => 'text',
        'settings'    => 'epico_zenmode_text',
        'label'       => esc_attr__( 'Zen mode button text', 'epico' ),
        'tooltip'     => esc_attr__( 'Specify the text that will show when the mouse is hovering over the Zen mode icon.', 'epico' ),
        'section'     => 'design_layout',
        'active_callback' => array(
            array(
                'setting'  => 'epico_zenmode',
                'value'    => '1',
                'operator' => '==',
            ),
        ),
        'default'     => esc_attr__( 'Focused reading', 'epico' ),
        'priority'    => 130,
        )
    );

    // Apresentacao da caixa do autor
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_author_box_switch',
        'label'       => esc_attr__( 'Author box', 'epico' ),
        'description' => esc_attr__( 'Enable or disable the author box below posts.', 'epico' ),
        'tooltip'     => esc_attr__( 'Uncheck to remove the author box feature from articles, located at the end of the post content. Pages are automatically ignored by default.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 140,
        )
    );

    // Apresentacao dos artigos relacionados
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_related_posts_switch',
        'label'       => esc_attr__( 'Related posts', 'epico' ),
        'description' => esc_attr__( 'Enable or disable the automatic related posts feature.', 'epico' ),
        'tooltip'     => esc_attr__( 'Uncheck to remove the related posts feature from articles. Pages are automatically ignored by default.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 150,
        )
    );

    // Apresentacao da navegacao de posts
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_post_nav_switch',
        'label'       => esc_attr__( 'Post navigation', 'epico' ),
        'description' => esc_attr__( 'Enable or disable the automatic post navigation feature.', 'epico' ),
        'tooltip'     => esc_attr__( 'Uncheck to remove the navigation posts feature from articles, before the comment form. Pages are automatically ignored by default.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 160,
        )
    );

    // Apresentacao das colunas da sidebar no mobile
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_mobile_columns_switch',
        'label'       => esc_attr__( 'Sidebar columns in mobile', 'epico' ),
        'description' => esc_attr__( 'Enable or disable the multiple column sidebar on mobile.', 'epico' ),
        'tooltip'     => esc_attr__( 'Uncheck to let the sidebar widgets span across the entire sidebar in resolutions below 1020 pixels wide. The default behavior is a sidebar with two columns in tablets and smartphones.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 1,
        'priority'    => 170,
        )
    );


    // Apresentacao de tags
    Kirki::add_field( 'epico_config', array(
        'type'        => 'checkbox',
        'settings'    => 'epico_display_tags',
        'label'       => esc_attr__( 'Display tags', 'epico' ),
        'description' => esc_attr__( 'Check this to display post tags at the end of your content.', 'epico' ),
        'tooltip'     => esc_attr__( 'Keep this unchecked if you wish to remove tags from your posts.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 0,
        'priority'    => 180,
        )
    );


    // Controle do numero de comentarios
    Kirki::add_field( 'epico_config', array(
        'type'        => 'number',
        'settings'    => 'epico_comment_threshold',
        'label'       => esc_attr__( 'Threshold for number of comments', 'epico' ),
        'description' => esc_attr__( 'Choose a threshold from which the number of comments will appear in your content.', 'epico' ),
        'tooltip'     => esc_attr__( 'Here you can choose to display the number of comments in your posts only after a certain threshold is reached. Note: this does not work with the Facebook Comments WordPress plugin.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 0,
        'priority'    => 190,
        'choices'     => array(
            'min'  => '0',
            'max'  => '30',
            'step' => '1',
            )
        )
    );

    // Mostrar a data de atualização no lugar da data de publicacao
    Kirki::add_field( 'epico_config', array(
        'type'        => 'radio',
        'settings'    => 'epico_date_type',
        'label'       => esc_attr__( 'Type of date to display', 'epico' ),
        'description' => esc_attr__( 'Select the type of date you want do display in your posts.', 'epico' ),
        'tooltip'     => esc_attr__( 'The date is displayed right below the post title. The published date is the date when the post was first published in WordPress. The modified date is the date when the post was updated in WordPress after the first publication.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 'published',
        'priority'    => 200,
        'choices'     => array(
            'published'  => esc_attr__( 'Published date', 'epico' ),
            'modified'   => esc_attr__( 'Modified date (if available)', 'epico' ),
            'both'       => esc_attr__( 'Display both dates', 'epico' ),
            'none'       => esc_attr__( 'Hide dates', 'epico' ),
            )
        )
    );

    // Remover data de publicacao a partir de determinada data
    Kirki::add_field( 'epico_config', array(
        'type'        => 'number',
        'settings'    => 'epico_date_threshold',
        'label'       => esc_attr__( 'Remove date on older posts', 'epico' ),
        'description' => esc_attr__( 'This will remove the published date from posts older than the number of days specified below.', 'epico' ),
        'tooltip'     => esc_attr__( 'Here you can choose to display the date in your posts for fresh articles only. Posts older than the days specified here will have the date automatically removed.', 'epico' ),
        'section'     => 'design_layout',
        'default'     => 0,
        'priority'    => 210,
        'choices'     => array(
            'min'  => '0',
            'max'  => '3000',
            'step' => '1',
            ),
        'active_callback' => array(
            array(
                'setting'  => 'epico_date_type',
                'value'    => array(
                    'published',
                    'modified',
                    'both'
                    ),
                'operator' => 'contains',
                )
            )
        )
    );
}
