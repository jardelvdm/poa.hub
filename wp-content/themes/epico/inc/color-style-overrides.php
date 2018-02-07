<?php

/* Sobrescrevendo opcoes de cores a partir do customizer */
add_action( 'wp_enqueue_scripts', 'epico_main_color_override', 10 );

/* Cor de fundo geral do blog: ajustes */
add_action( 'wp_enqueue_scripts', 'epico_blog_background_color', 10 );

/* Cor de fundo da landing page */
add_action( 'wp_enqueue_scripts', 'epico_landing_page_background_color', 10 );

/* Imagem de fundo da landing page */
add_action( 'wp_enqueue_scripts', 'epico_landing_page_background_image', 10 );

/* Ajustes no CSS do botoes de compartilhamento de acordo com as opcoes ativadas  */
add_action( 'wp_enqueue_scripts', 'epico_social_total_parcial', 10 );

/* Ajustes no CSS do botoes de compartilhamento de acordo com as opcoes ativadas  */
add_action( 'wp_enqueue_scripts', 'epico_custom_typography', 10 );

/* Altera a cor do cabecalho do tema */
add_action( 'wp_enqueue_scripts', 'epico_custom_header_color', 10 );

/* Adiciona estilos do campo de codigo CSS personalizado no frontend */
add_action( 'wp_enqueue_scripts', 'epico_custom_css', 10 );

/**
 * Sobrescrevendo opcoes de cores a partir do customizer
 *
 * @since   1.0.0
 * @version 1.0.1
 * @return  string
 */
function epico_main_color_override() {

	$color_override_option = get_theme_mod( 'epico_color_override_option', 0 );

	$new_color_override = get_theme_mod( 'epico_color_override', '#81D742' );

	// Se o campo possui um valor definido
	if ( 1 == $color_override_option ) {

		// Define os estilos CSS customizados
		$custom_inline_style = '.epc-ovr #footer ::-moz-selection,.epc-ovr #sidebar-promo ::-moz-selection,.epc-ovr section[class*="pop-id"] ::-moz-selection,.epc-ovr .capture-wrap ::-moz-selection{background:' . $new_color_override . '}.epc-ovr #footer ::selection,.epc-ovr #sidebar-promo ::selection,section[class*="pop-id"] ::selection,.epc-ovr .capture-wrap ::selection{background:' . $new_color_override . '}.epc-ovr[class*="epc-"] #sidebar-primary section[class*="epico_pages"] a,.epc-ovr[class*="epc-"] #sidebar-primary section[class*="epico_links"] a,.epc-ovr .wp-calendar>caption,.epc-ovr input[type="submit"],.epc-ovr #nav input.search-submit[type="submit"],.epc-ovr .not-found input.search-submit[type="submit"],.epc-ovr.zen #sidebar-after-content .sb.capture-wrap form .uf-submit,.epc-ovr[class*="epc-"] .uberaviso,.epc-ovr[class*="epc-"] .fw.capture-wrap form .uf-submit,.epc-ovr[class*="epc-"] .sb.capture-wrap form .uf-submit,.epc-ovr[class*="epc-"] .sc.capture-wrap form .uf-submit,.epc-ovr[class*="epc-"] #sidebar-after-content .sb.capture-wrap form .uf-submit,.epc-ovr[class*="epc-"] .widget_epico_author-id a[class*="button"],.epc-ovr[class*="epc-"] input[type="submit"]{background:' . $new_color_override . '}.epc-ovr .pagination .page-numbers.current{background:' . $new_color_override . '!important}.epc-ovr #credits,.epc-ovr #footer .widget_tag_cloud a:hover,.epc-ovr .loop-meta,.epc-ovr #menu-primary-items .sub-menu li:hover,.epc-ovr .epc-button-border-primary,.epc-ovr #comments .comment-reply-link,.epc-ovr #footer .search-field:hover,.epc-ovr #footer .search-field:focus,.epc-ovr .author-profile,.epc-ovr.page-template-landing{border-color:' . $new_color_override . '!important}.epc-ovr[class*="epc-"] #sidebar-primary .widget_epico_pop-id,.epc-ovr[class*="epc-"] #footer .widget_social-id a:hover{border-color:' . $new_color_override . '}.epc-ovr .epc-button-border-primary,.epc-ovr #comments .comment-reply-link,.epc-ovr #footer .widget_social-id a:hover,.epc-ovr #sidebar-top li:hover:before,.epc-ovr #menu-primary .sub-menu li:hover:before,.epc-ovr #footer li:hover:before,.epc-ovr #menu-primary li.menu-item-has-children:hover:before,.epc-ovr #menu-secondary li:hover:before,.epc-ovr #search-toggle:hover:after,.epc-ovr .search-close .search-text,.epc-ovr #search-toggle:before,.epc-ovr #search-toggle:hover .search-text,.epc-ovr .search-text:hover,.epc-ovr #zen:hover i,.epc-ovr #zen.zen-active i,.epc-ovr #zen.zen-active:hover i,.epc-ovr.zen #footer a{color:' . epico_color_opacity( $new_color_override, .8 ) . '!important}.epc-ovr #sidebar-primary .widget_epico_pop-id h3[class*="title"]:before,.epc-ovr #sidebar-primary section[class*="epico_pages"] h3[class*="title"]:before{color:' . epico_color_opacity( $new_color_override, .8 ) . '}.epc-ovr[class*="epc-"] .fw.capture-wrap .uf-arrow svg polygon,.epc-ovr[class*="epc-"] .sb.capture-wrap .uf-arrow svg polygon,.epc-ovr[class*="epc-"] #sidebar-after-content .sb.capture-wrap .uf-arrow svg polygon,.epc-ovr.zen #sidebar-after-content .sb.capture-wrap .uf-arrow svg polygon{fill:' . $new_color_override . '}@media only screen and (max-width:680px){.epc-ovr #menu-primary>ul>li:hover:before,.epc-ovr #menu-primary li:hover:before,.epc-ovr #nav-toggle:hover .nav-text,.epc-ovr .nav-active #nav-toggle .nav-text{color:' . epico_color_opacity( $new_color_override, .8 ) . '!important}.epc-ovr #menu-primary-items>li:hover{border-color:' . epico_color_opacity( $new_color_override, .8 ) . '!important}.epc-ovr .nav-active #nav-toggle span:before,.epc-ovr .nav-active #nav-toggle span:after,.epc-ovr #nav-toggle:hover .screen-reader-text,.epc-ovr #nav-toggle:hover .screen-reader-text:after,.epc-ovr #nav-toggle:hover .screen-reader-text:before{background:' . $new_color_override . '!important}}@media only screen and (min-width:680px){.epc-ovr #header a{color:' . $new_color_override . '}}.epc-ovr #page #sidebar-primary .widget_epico_pop-id h3[class*="title"]:before,.epc-ovr #page #sidebar-primary .widget_epico_pop-id li:hover:before,.epc-ovr #page #sidebar-primary section[class*="epico_pages"] h3[class*="title"]:before,.epc-ovr #main-container a,.epc-ovr.plural .format-default .entry-author,.epc-ovr #breadcrumbs a,.epc-ovr #branding a,.epc-ovr #header #nav a:hover,.epc-ovr #footer .widget_tag_cloud a:hover:before,.epc-ovr #zen.zen-active:hover i,.epc-ovr.page-template-landing #footer a,.epc-ovr #main-container #sidebar-primary .widget_epico_pop-id a{color:' . $new_color_override . '}.epc-ovr .pagination .page-numbers,.epc-ovr[class*="epc-"].plural .format-default .entry-byline a,.epc-ovr[class*="epc-"].plural .format-default .entry-author,.epc-ovr[class*="epc-"] .widget_epico_author-id a[class*="button"]{color:#fff!important}.epc-ovr #footer ::-moz-selection,.epc-ovr #sidebar-promo ::-moz-selection,.epc-ovr section[class*="pop-id"] ::-moz-selection,.epc-ovr .capture-wrap ::-moz-selection,.epc-ovr #footer ::selection,.epc-ovr #sidebar-promo ::selection,.epc-ovr section[class*="pop-id"] ::selection,.epc-ovr .capture-wrap ::selection,.epc-ovr .widget_social-id a,.epc-ovr .widget_epico_author-id a[class*="button"]{color:#fff}.epc-ovr.epc-1 .uf_epicoepico_pop a,.epc-ovr.epc-2 .uf_epicoepico_pop a,.epc-ovr.epc-3 .uf_epicoepico_pop a{color:#aebbc2}.epc-ovr #main-container a:hover,.epc-ovr.page-template-landing #footer a:hover{color:#344146}.epc-ovr input[type="submit"]:hover,.epc-ovr #nav input.search-submit[type="submit"]:hover,.epc-ovr .not-found input.search-submit[type="submit"]:hover,.epc-ovr #nav input.search-submit[type="submit"]:active,.epc-ovr .not-found input.search-submit[type="submit"]:active,.epc-ovr.zen #sidebar-after-content .sb.capture-wrap form .uf-submit:hover,.epc-ovr .pagination .page-numbers.current:active,.epc-ovr .pagination .page-numbers.current:hover{background:' . epico_color_opacity( $new_color_override, .6 ) . '!important}.epc-ovr .fw.capture-wrap form .uf-submit:hover,.epc-ovr .sb.capture-wrap form .uf-submit:hover,.epc-ovr .sc.capture-wrap form .uf-submit:hover,.epc-ovr #sidebar-after-content .sb.capture-wrap form .uf-submit:hover,.epc-ovr .widget_epico_author-id a[class*="button"]:hover,.epc-ovr[class*="epc-"] #sidebar-primary section[class*="epico_pages"] a:hover,.epc-ovr[class*="epc-"] #sidebar-primary section[class*="epico_links"] a:hover{background:' . epico_color_opacity( $new_color_override, .6 ) . '}';


		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style );
	}
}

/**
 * Ativa ajustes de cor nos elementos de acordo com a luminosidade da cor de fundo
 *
 * @since   1.2.0
 * @version 1.0.1
 * @return  string
 */
function epico_blog_background_color() {

	$blog_bkg_color    = get_theme_mod( 'background_color', '#FFFFFF' );

	$element_color     = epico_readable_color( $blog_bkg_color );

	$element_color_alt = epico_readable_alt_color( $blog_bkg_color );

	if ( ! empty( $blog_bkg_color ) && ! in_array( $blog_bkg_color, array( '#FFFFFF','#ffffff' ) ) ) {

		$custom_inline_style_blog_bkg_color = '.breadcrumb-trail .trail-item:nth-child(n+4) span:before,.breadcrumb-trail .trail-end,.epico-related-posts > h3.epico-related-posts-title,#respond,.epico-related-posts .fa-plus-square-o:before,.comment-respond label[for="author"]:before,.comment-respond label[for="email"]:before,.comment-respond label[for="url"]:before,.comment-respond label[for="comment"]:before,ia-info-toggle:after{color:' . $element_color_alt . '}.epico-related-posts>h3.epico-related-posts-title{border-bottom: 1px solid ' . $element_color_alt . '}.logged-in-as{border: 1px solid ' . $element_color_alt . '}.breadcrumb-trail .trail-item a,[class*="epc-s"] .epico-related-posts a,[class*="epc-s"] #respond a,[class*="epc-s"] #respond a:hover,[class*="epc-s"] #respond .logged-in-as:before,[class*="epc-s"] #breadcrumbs a{color: ' . $element_color . '}.zen .breadcrumb-trail .trail-item:nth-child(n+4) span:before,.zen .breadcrumb-trail .trail-end,.zen .epico-related-posts > h3.epico-related-posts-title,.zen #respond,.zen .epico-related-posts .fa-plus-square-o:before,.zen .comment-respond label[for="author"]:before,.zen .comment-respond label[for="email"]:before,.zen .comment-respond label[for="url"]:before,.zen .comment-respond label[for="comment"]:before,.zen ia-info-toggle:after,.zen #comments-template label{color:#777}.zen .epico-related-posts>h3.epico-related-posts-title{border-bottom: 1px solid #e4e4e4}.zen .logged-in-as{border: 1px solid #A1A1A1}.zen .breadcrumb-trail .trail-item a,.zen[class*="epc-s"] .epico-related-posts a,.zen[class*="epc-s"] #respond a,.zen[class*="epc-s"] #respond a:hover,.zen[class*="epc-s"] #respond .logged-in-as:before{color:#777}';

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style_blog_bkg_color );
	}
}


/**
 * Ativa a cor de fundo da pagina landing
 *
 * @since   1.2.0
 * @version 1.0.1
 * @return  string
 */
function epico_landing_page_background_color() {

	$landing_bkg_color = get_theme_mod( 'epico_landing_bkg_color', '#FFFFFF' );

	if ( ! empty( $landing_bkg_color ) ) {

		$custom_inline_style_landing_color = '.page-template-landing[class*="epc-"]{background:' . $landing_bkg_color . ';}.page-template-landing[class*="epc-"] #page,.page-template-tpl-helper-min-pb[class*="epc-"] #page{border-top: none !important}';

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style_landing_color );
	}
}

/**
 * Ativa a imagem de fundo da pagina landing
 *
 * @since   1.2.0
 * @version 1.0.1
 * @return  string
 */
function epico_landing_page_background_image() {

	$landing_bkg_image = get_theme_mod( 'epico_landing_bkg_img' );

	if ( ! empty( $landing_bkg_image ) ) {

		$custom_inline_style_landing_image = '.page-template-landing[class*="epc-"]{background: url("' . $landing_bkg_image . '") repeat 0 0}';

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style_landing_image );
	}
}

/**
 * Corrige espacamentos dos botoes no mobile de acordo com as opcoes ativadas
 *
 * @since   1.5.0
 * @version 1.0.0
 * @return  string
 */
function epico_social_total_parcial() {

	$social_total         = get_theme_mod( 'epico_socialcounter', 1 );

	$social_parcial       = get_theme_mod( 'epico_socialpartialcount', 1 );

	$social_btn_facebook  = get_theme_mod( 'epico_socialfacebook', 1 );

	$social_btn_twitter   = get_theme_mod( 'epico_socialtwitter', 1 );

	$social_btn_google    = get_theme_mod( 'epico_socialgoogle', 1 );

	$social_btn_pinterest = get_theme_mod( 'epico_socialpinterest', 1 );

	$social_btn_linkedin  = get_theme_mod( 'epico_sociallinkedin', 1 );

	$social_btn_whatsapp  = get_theme_mod( 'epico_socialwhatsapp', 1 );

	// Soma a quantidade de botoes
	$social_button_sum = $social_btn_facebook + $social_btn_twitter + $social_btn_google + $social_btn_pinterest + $social_btn_linkedin + $social_btn_whatsapp;

	// Entre 3 e 4 botoes: ajusta espacamentos e mantem contadores parciais
	if ( 0 == $social_total && 1 == $social_parcial && $social_button_sum >= 2 && $social_button_sum <= 3 ) {

		$custom_inline_style_social_total_parcial = '@media screen and (max-width:420px){.social-bar{padding:1.6rem .5rem}.social-likes__counter{padding:0 .4em}.social-likes__button,.social-likes__icon{width:1.8em}.social-total-shares{right:-15px}.social-likes+.social-total-shares{margin:0;padding:0 5px}#social-bar-sticky #social-close{right:-23px;position:relative}.sticky-active .social-likes{position:relative;left:-20px}.sticky-active .social-total-shares{right:0}.sticky-active #social-bar-sticky #social-close{right:10px}}';

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style_social_total_parcial );

		// Entre 2 e 3 botoes: ajusta espacamentos e mantem contadores parciais + totais
	} else if ( 1 == $social_total && 1 == $social_parcial && $social_button_sum >= 2 && $social_button_sum <= 3 ) {

		$custom_inline_style_social_total_parcial = '@media screen and (max-width:420px){.social-bar{padding:1.6rem .5rem}.social-likes__counter{padding:0 .5em}.social-likes__button,.social-likes__icon{width:1.5em}.social-total-shares{right:-15px}.social-likes+.social-total-shares{margin:0;padding:0 5px}#social-bar-sticky #social-close{right:-23px;position:relative}.sticky-active .social-likes{position:relative;left:-20px}.sticky-active .social-total-shares{right:0}.sticky-active #social-bar-sticky #social-close{right:5px}}';

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style_social_total_parcial );

		// Remove contadores parciais se houver + de 3 botoes e mantem totais
	} else if ( ( 1 == $social_total || 0 == $social_total ) && 1 == $social_parcial && $social_button_sum > 3 ) {

		$custom_inline_style_social_total_parcial = '@media screen and (max-width:420px){.social-likes__counter{display:none}.sticky-active .social-total-shares{right:0}.sticky-active #social-bar-sticky #social-close{right:5px}}';

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custom_inline_style_social_total_parcial );
	}
}


/**
 * Adiciona estilos de tipografia de acordo com a selecao no painel
 *
 * @since   1.5.0
 * @version 1.0.0
 * @return  string
 */
function epico_custom_typography() {

	$title_font = get_theme_mod( 'epico_typography', 1 );
	$text_font  = get_theme_mod( 'epico_typography_text', 1 );

	// Fontes de titulo adicionais
	if ( 3 == $title_font ) {

		// Playfair
		$custom_inline_style_title_font = '.epc-pf h1,.epc-pf h2,.epc-pf h3,.epc-pf h4,.epc-pf h5,.epc-pf h6,.epc-pf #site-title,.epc-pf .widget-title,.epc-pf .widgettitle,.epc-pf .capture-title,.epc-pf #sidebar-primary section[class*="epico_pages"] a,.epc-pf #sidebar-primary section[class*="epico_links"] a{font-family:Playfair Display,Helvetica Neue,Helvetica,Arial,sans-serif;font-weight:300}.epc-pf h1{font-size:2.6rem}.epc-pf h2{font-size:1.9rem}.epc-pf h3{font-size:1.5rem}.epc-pf h4{font-size:1.3rem}.epc-pf h5{font-size:1.125rem}.epc-pf h6{font-size:.88889rem}.epc-pf .widget h3{font-size:1.42383rem}';

	} else if ( 4 == $title_font ) {

		// Roboto Sans
		$custom_inline_style_title_font = '.epc-bt h1,.epc-bt h2,.epc-bt h3,.epc-bt h4,.epc-bt h5,.epc-bt h6,.epc-bt #site-title,.epc-bt .widget-title,.epc-bt .widgettitle,.epc-bt .capture-title,.epc-bt #sidebar-primary section[class*="epico_pages"] a,.epc-bt #sidebar-primary section[class*="epico_links"] a{font-family:Bitter,Georgia,serif;font-weight:400}.epc-bt h1{font-size:2.4rem}.epc-bt h2{font-size:1.8rem}.epc-bt h3{font-size:1.4rem}.epc-bt h4{font-size:1.2rem}.epc-bt h5{font-size:1rem}.epc-bt h6{font-size:.8rem}.epc-bt .widget h3{font-size:1.42383rem}.epc-bt .epico-related-posts>h3.epico-related-posts-title,.epc-bt #respond #reply-title{font-size:1.60203rem}';

	} else if ( 5 == $title_font ) {

		// Noto Serif
		$custom_inline_style_title_font = '.epc-ns h1,.epc-ns h2,.epc-ns h3,.epc-ns h4,.epc-ns h5,.epc-ns h6,.epc-ns #site-title,.epc-ns .widget-title,.epc-ns .widgettitle,.epc-ns .capture-title,.epc-ns #sidebar-primary section[class*="epico_pages"] a,.epc-ns #sidebar-primary section[class*="epico_links"] a{font-family:Noto Serif,Georgia,serif;font-weight:300}.epc-ns h1{font-size:2.45rem}.epc-ns h2{font-size:1.8rem}.epc-ns h3{font-size:1.38rem}.epc-ns h4{font-size:1.22rem}.epc-ns h5{font-size:1rem}.epc-ns h6{font-size:.8rem}.epc-ns .widget h3{font-size:1.42383rem}.epc-ns .epico-related-posts>h3.epico-related-posts-title,.epc-ns #respond #reply-title{font-size:1.60203rem}@media only screen and (min-width:520px){.epc-ns #site-title{font-size:2.26578rem}}@media only screen and (min-width:1410px){.epc-ns .capture-wrap.fw .capture .capture-title{font-size:44px}}';
	} else {

		$custom_inline_style_title_font = NULL;
	}

	// Fontes de texto adicionais
	if ( 1 == $text_font ) {

		// Noto Serif
		$custom_inline_style_text_font = '.epc-nst,.epc-nst label,.epc-nst textarea,.epc-nst input:not([type=submit]):not([type=radio]):not([type=checkbox]):not([type=file]),.epc-nst select[multiple=multiple],.epc-nst.epc-button,.epc-nst input[type="submit"],.epc-nst a.uf-button,button.uf-button,.epc-nst .not-found input.search-submit[type="submit"],.epc-nst #nav input.search-submit[type="submit"],.epc-nst #comments .comment-reply-link,.epc-nst #comments .comment-reply-login,.epc-nst .widget_epico_author-id a[class*="button"],.epc-nst.wordpress div.uberaviso a[class*="button"],.epc-nst.wordpress .mejs-controls a:focus>.mejs-offscreen,.epc-nst .format-quote p:first-child:before,.epc-nst .format-quote p:first-child:after,.epc-nst .epico-related-posts h4.related-post-title,.epc-nst .placeholder,.epc-nst .editor-tag{font-family:Noto Serif,Georgia,serif}.epc-nst li.fa,.epc-nst li.fa:before,.epc-nst .fa,.epc-nst textarea.fa,.epc-nst input:not([type=submit]):not([type=radio]):not([type=checkbox]):not([type=file]).fa,.epc-nst .not-found input.search-submit[type="submit"],.epc-nst #search-wrap input.fa[type="search"],.epc-nst #nav input.search-submit[type="submit"],.epc-nst #respond #submit,.epc-nst .capture-wrap form input[class*="uf-"]{font-family:FontAwesome,Noto Serif,Georgia,serif!important}.epc-nst main{font-size:.9rem}.epc-nst #menu-primary li a,.epc-nst .author-profile,.epc-nst .nav-posts span,.epc-nst #sidebar-promo-inner .widget,.epc-nst #branding,.epc-nst #sidebar-footer .widget{font-size:.78889rem}.epc-nst .entry-byline>*,.epc-nst .entry-footer>*{font-size:.69012rem}.epc-nst #sidebar-primary section[class*="epico_pages"] li>a:first-child,.epc-nst #sidebar-primary section[class*="epico_links"] li>a:first-child{font-size:1.06563rem}.epc-nst .widget h3,.epc-nst .widget_social-id h3{font-size:1.30181rem}.epc-nst textarea,.epc-nst input:not([type=submit]):not([type=radio]):not([type=checkbox]):not([type=file]){font-size:.9rem}.epc-nst .nav-posts{font-size:1.025rem}.epc-nst #sidebar-top .widget,.epc-nst #breadcrumbs nav,.epc-nst .credit{font-size:.69012rem}.epc-nst .uberaviso{font-size:16px}@media only screen and (min-width:480px){.epc-nst .epico-related-posts h4.related-post-title{font-size:.9rem}}@media only screen and (min-width:680px){.epc-nst #sidebar-primary .widget,.epc-nst #after-primary,.epc-nst #sidebar-promo-home .widget,.epc-nst #sidebar-subsidiary .widget,.epc-nst #sidebar-before-content .widget,.epc-nst #after-primary .widget{font-size:.78889rem}.epc-nst #search-toggle:after{top:1px}}@media only screen and (min-width:1020px){.epc-nst.gecko #search-toggle::before,.epc-nst.ie #search-toggle::before{top:30px}.epc-nst .capture-wrap.fw .capture .capture-intro{font-size:19px}}@media only screen and (min-width:1410px){.epc-nst.gecko #search-toggle::before,.epc-nst.ie #search-toggle::before{top:33px}.epc-nst .capture-wrap.fw .capture .capture-notice{font-size:13px}.epc-nst .capture-wrap.fw.ip .capture .uf-fields .capture-notice{font-size:24px}.epc-nst #search-toggle:after{top:0}}@media only screen and (max-width:680px){.epc-nst #search-toggle:after{right:19px}.epc-nst #menu-primary li a{font-size:1.125rem}}@media only screen and (max-width:480px){.epc-nst #search-toggle:after{right:20px}}';

	} else if ( 2 == $text_font ) {

		// Proza Libre
		$custom_inline_style_text_font = '.epc-plt,.epc-plt label,.epc-plt textarea,.epc-plt input:not([type=submit]):not([type=radio]):not([type=checkbox]):not([type=file]),.epc-plt select[multiple=multiple],.epc-plt.epc-button,input[type="submit"],.epc-plt a.uf-button,button.uf-button,.epc-plt .not-found input.search-submit[type="submit"],.epc-plt #nav input.search-submit[type="submit"],.epc-plt #comments .comment-reply-link,.epc-plt #comments .comment-reply-login,.epc-plt .widget_epico_author-id a[class*="button"],.epc-plt.wordpress div.uberaviso a[class*="button"],.epc-plt.wordpress .mejs-controls a:focus>.mejs-offscreen,.epc-plt .format-quote p:first-child:before,.epc-plt .format-quote p:first-child:after,.epc-plt .epico-related-posts h4.related-post-title,.epc-plt .placeholder,.epc-plt .editor-tag,.comment-moderation{font-family:Proza Libre,Georgia,serif}.epc-plt li.fa,.epc-plt li.fa:before,.epc-plt .fa,.epc-plt textarea.fa,.epc-plt input:not([type=submit]):not([type=radio]):not([type=checkbox]):not([type=file]).fa,.epc-plt .not-found input.search-submit[type="submit"],.epc-plt #search-wrap input.fa[type="search"],.epc-plt #nav input.search-submit[type="submit"],.epc-plt #respond #submit,.epc-plt .capture-wrap form input[class*="uf-"]{font-family:FontAwesome,Proza Libre,Georgia,serif!important}.epc-plt main{font-size:.9rem}.epc-plt #menu-primary li a,.epc-plt .author-profile,.epc-plt .nav-posts span,.epc-plt #sidebar-promo-inner .widget,.epc-plt #branding,.epc-plt #sidebar-footer .widget{font-size:.78889rem}.epc-plt .entry-byline>*,.epc-plt .entry-footer>*{font-size:.69012rem}.epc-plt #sidebar-primary section[class*="epico_pages"] li>a:first-child,.epc-plt #sidebar-primary section[class*="epico_links"] li>a:first-child{font-size:1.06563rem}.epc-plt .widget h3,.epc-plt .widget_social-id h3{font-size:1.30181rem}.epc-plt textarea,.epc-plt input:not([type=submit]):not([type=radio]):not([type=checkbox]):not([type=file]){font-size:.9rem}.epc-plt .nav-posts{font-size:1.025rem}.epc-plt #sidebar-top .widget,.epc-plt #breadcrumbs nav,.epc-plt .credit{font-size:.69012rem}.epc-plt .uberaviso{font-size:16px}@media only screen and (min-width:480px){.epc-plt .epico-related-posts h4.related-post-title{font-size:.9rem}}@media only screen and (min-width:680px){.epc-plt #sidebar-primary .widget,.epc-plt #after-primary,.epc-plt #sidebar-promo-home .widget,.epc-plt #sidebar-subsidiary .widget,.epc-plt #sidebar-before-content .widget,.epc-plt #after-primary .widget{font-size:.78889rem}.epc-plt #search-toggle:after{top:-1px}}@media only screen and (min-width:1020px){.epc-plt.gecko #search-toggle::before,.epc-plt.ie #search-toggle::before{top:30px}.epc-plt .capture-wrap.fw .capture .capture-intro{font-size:19px}}@media only screen and (min-width:1410px){.epc-plt.gecko #search-toggle::before,.epc-plt.ie #search-toggle::before{top:31px}.epc-plt .capture-wrap.fw .capture .capture-notice{font-size:13px}.epc-plt .capture-wrap.fw.ip .capture .uf-fields .capture-notice{font-size:24px}.epc-plt #search-toggle:after{top:-2px}}@media only screen and (max-width:680px){.epc-plt #menu-primary li a{font-size:1.125rem}.epc-plt #search-toggle:after{right:22px}}@media only screen and (max-width:480px){.epc-plt #search-toggle:after{right:23px}}';
	} else {

		$custom_inline_style_text_font = NULL;
	}

	// Adiciona os estilos de tipografia inline (depende da folha de estilos principal ter sido carregada)

	if ( ! empty( $custom_inline_style_title_font ) ) {

		wp_add_inline_style( 'style', $custom_inline_style_title_font );
	}

	if ( ! empty( $custom_inline_style_text_font ) ) {

		wp_add_inline_style( 'style', $custom_inline_style_text_font );
	}
}

/**
 * Adiciona os estilos CSS personalizados do painel
 *
 * @since   1.7.12
 * @version 1.0.0
 * @return  string
 */
function epico_custom_header_color() {

	// Cores do cabecalho

	$header_color        = get_theme_mod( 'epico_header_bkg_color', '#FFFFFF' );

	$header_text         = epico_readable_color( $header_color );

	$header_subdued      = epico_readable_alt_color( $header_color );

	$header_menu         = epico_color_lightness( $header_color, 0 );

	$header_menu_hover   = epico_color_lightness( $header_color, 2 );

	$header_menu_active  = epico_color_lightness( $header_color, 4 );

	$header_border       = epico_color_lightness( $header_color, 7 );

	$header_border_hover = epico_color_lightness( $header_color, 3 );


	// Cores do rodape

	$footer_color        = get_theme_mod( 'epico_footer_bkg_color', '#344146' );

	$footer_text         = epico_readable_color( $footer_color );

	$footer_subdued      = epico_color_opacity( $footer_text, .6 );

	$footer_subdued_aux  = epico_color_opacity( $footer_text, .2 );

	$footer_icon         = epico_readable_alt_color( $footer_color );


	// Estilos inline

	$custon_header_styles = '#header #nav>a,#search-toggle,#header,#menu-primary-items a:hover{background-color: ' . $header_color . '}[class*="epc-"] #header #menu-primary li.menu-item-has-children li a{background: ' . $header_menu . '}[class*="epc-"] #header #menu-primary li.menu-item-has-children li a:hover{background: ' . $header_menu_hover . '}[class*="epc-"] #header #menu-primary .sub-menu li a:active{background:  ' . $header_menu_active . ' !important}[class*="epc-"] .zen #header #nav .sub-menu a{border-top-color: ' . $header_color . '}#header #nav a:hover,#header #nav a,#site-title a,#menu-primary .sub-menu li:hover:before,#menu-secondary li:hover:before,#footer li:hover:before,[class*="epc-"] #menu-primary>ul>li:hover:before,[class*="epc-"] #menu-primary li.menu-item-has-children:hover:before,[class*="epc-"] #menu-primary>ul>li.menu-item-has-children:hover>a:hover:after,[class*="epc-"] #menu-primary>ul>li:hover a,[class*="epc-"] #menu-primary .sub-menu li:hover:before,.zen[class*="epc-"] #menu-primary .sub-menu li:hover:before,[class*="epc-"] #menu-secondary li:hover:before,[class*="epc-"] #search-toggle:after,[class*="epc-"] #search-toggle:before,[class*="epc-"] #search-toggle:hover .search-text,[class*="epc-"] .search-text,[class*="epc-"] .search-text:hover,[class*="epc-"] .search-close .search-text,[class*="epc-"] #header #nav-toggle .nav-text,[class*="epc-"] #header .nav-active #nav-toggle span:before,[class*="epc-"] #header .nav-active #nav-toggle span:after,[class*="epc-"] #header #nav-toggle:hover .screen-reader-text,[class*="epc-"] #header #nav-toggle:hover .screen-reader-text:after,[class*="epc-"]  #header #nav-toggle:hover .screen-reader-text:before{color: ' . $header_text . ' !important}[class*="epc-"] #menu-primary>ul>li:before,[class*="epc-"] #search-toggle:after,#menu-primary .sub-menu li:before,#menu-secondary li:before,#header #search-toggle:after,#header #search-toggle,.zen[class*="epc-"] #menu-primary .sub-menu li:before{ color: ' . $header_subdued . ' !important}#nav-toggle span,#nav-toggle span:before,#nav-toggle span:after{background:' . $header_subdued . ' !important}.zen #nav-toggle span,.zen #nav-toggle span:before,.zen #nav-toggle span:after,.zen[class*="epc-"] #header #menu-primary #nav-toggle:hover .screen-reader-text,.zen[class*="epc-"] #header #menu-primary #nav-toggle:hover .screen-reader-text:after,.zen[class*="epc-"] #header #menu-primary #nav-toggle:hover .screen-reader-text:before{background:#ccc !important}[class*="epc-"] #menu-primary li.menu-item-has-children:hover,[class*="epc-"] #menu-primary>ul>li.menu-item-has-children:hover>a:hover:after,#nav-toggle .nav-text{background:none !important}#menu-primary>ul>li.menu-item-has-children:hover>a,#menu-primary>ul:not(:hover)>li.menu-item-has-children.active>a{box-shadow:none}.zen #header #nav .sub-menu a{border-top-style:solid;border-top-width:1px}.zen #header{border-top:10px solid #EDF1F2;background:#fff}.zen #header #nav a{color:#777;background:#fff}.zen #search-toggle:after,.zen #search-toggle:before{border-left:1px solid #ccc}.zen #menu-primary>a,.zen #search-toggle{border:1px solid #777 }.zen[class*="epc-"] #site-title a,.zen[class*="epc-"] #header #nav a{color:#777 !important}.zen[class*="epc-"] #header #menu-primary li.menu-item-has-children li a{color:' . $header_text . ' !important}.zen #menu-primary .sub-menu li:before,.zen[class*="epc-"] #menu-primary>ul>li:hover a,.zen[class*="epc-"] #header #search-toggle:after,.zen[class*="epc-"] #header #search-toggle:before,.zen[class*="epc-"] #header #search-toggle:hover .search-text,.zen[class*="epc-"] #header .search-text,.zen[class*="epc-"] #header .search-text:hover,.zen[class*="epc-"] #header #nav-toggle .nav-text{color:#ccc !important}.zen #nav-toggle .nav-text{background: none !important}@media only screen and (max-width:680px){.zen[class*="epc-"] #header #nav a{color:' . $header_text . ' !important}[class*="epc-"] #menu-primary-items a,[class*="epc-"] #menu-primary-items a:hover{border-bottom: 1px solid rgba(0,0,0,.2) !important;border-top:1px solid rgba(255,255,255,.2) !important}#header #menu-primary-items a,.zen #header #menu-primary-items a{background:#11242E}[class*="epc-"][class*="epc-"] #header #menu-primary-items a:hover{background: ' . $header_menu_hover . '}#header #nav a:active{background:' . $header_menu_active . ' !important}.zen #header #nav a:active{background:#fff !important}[class*="epc-"] #menu-primary-items>li:hover{border-left:5px solid ' . $header_border_hover . ' !important}[class*="epc-"] #menu-primary>a,[class*="epc-"] #search-toggle{border:1px solid ' . $header_subdued . ' !important}.zen[class*="epc-"] #menu-primary>ul>li:before{color:' . $header_subdued . ' !important}.zen[class*="epc-"] #menu-primary>a,.zen[class*="epc-"] #search-toggle{border:1px solid #d0d9dc !important}#menu-primary>a,#search-toggle{border:1px solid rgba(255,255,255,.7)}#menu-primary>ul:before{border-color:transparent transparent #11242E transparent}[class*="epc-"] #header #menu-primary .nav-active #nav-toggle span:before,[class*="epc-"] #header #menu-primary .nav-active #nav-toggle span:after,[class*="epc-"] #header #menu-primary #nav-toggle:hover .screen-reader-text,[class*="epc-"] #header #menu-primary #nav-toggle:hover .screen-reader-text:after,[class*="epc-"] #header #menu-primary #nav-toggle:hover .screen-reader-text:before{background:' . $header_subdued . '!important}.zen #search-toggle:after,.zen #search-toggle:before{border-left:0}.zen #menu-primary>ul:before{border-color:transparent transparent #11242E transparent}#menu-primary>a,.wordpress #header #menu-primary-items a,.wordpress #menu-primary-items a,wordpress #menu-primary-items a:hover{background-color:' . $header_color . '}.wordpress #menu-primary-items a{border-bottom:1px solid rgba(0,0,0,.2);border-top:1px solid rgba(255,255,255,.2)}.wordpress #menu-primary>ul:before{display:none}[class*="epc-"] #menu-primary-items>li{border-left:5px solid ' . $header_border . '!important}.wordpress #menu-primary>ul>li.menu-item-has-children{border-top-left-radius:0px;border-top-right-radius:0px}}@media only screen and (min-width:680px){[class*="epc-"] #menu-primary-items ul a{border-bottom: 1px solid rgba(0,0,0,.2) !important;border-top: 1px solid rgba(255,255,255,.2 ) !important}.zen[class*="epc-"] #menu-primary>ul>li:before{color:#ccc !important}.zen[class*="epc-"] #menu-primary>ul>li:hover:before,.zen[class*="epc-"] #menu-primary>ul>li.menu-item-has-children:hover>a:hover:after{color:#777 !important}[class*="epc-"] #menu-primary-items .sub-menu li{border-left:5px solid ' . $header_border . ' !important}[class*="epc-"] #menu-primary-items .sub-menu li:hover{border-left:5px solid ' . $header_border_hover . ' !important}[class*="epc-"] #search-toggle:after,[class*="epc-"] #search-toggle:before,[class*="epc-"] #menu-primary>a{border-left:1px solid ' . $header_subdued . '}#search-toggle{border:none}#search-toggle:after,#search-toggle:before,#menu-primary>a{border-left:1px solid ' . $header_subdued . '}.zen #search-toggle{border:none}.zen[class*="epc-"] #menu-primary>ul>li.menu-item-has-children>a{background:none !important}}';

	$custon_footer_styles = '.wordpress[class*="epc-"] #footer,[class*="epc-"] #footer .wrap .wp-calendar a{background:' . $footer_color . '}.wordpress[class*="epc-"] #credits{background:' . $footer_color . '}[class*="epc-"] #footer .wrap{color:' . $footer_subdued. ' !important}[class*="epc-"] #footer .wrap .menu li:before,[class*="epc-"] #footer .wrap .widget li:before{color:' . $footer_icon . ' !important}[class*="epc-"] #footer .wrap a,[class*="epc-"] #footer .wrap .menu li:hover:before,[class*="epc-"] #footer .wrap .widget li:hover:before,[class*="epc-"].zen #footer #menu-secondary a:hover,[class*="epc-"].zen #footer  #menu-secondary li:hover:before,[class*="epc-"].zen #menu-secondary li:hover:before{color:' . $footer_text . ' !important}[class*="epc-"] #footer .wrap .wp-calendar>caption{background-color:' . $footer_subdued_aux . '}[class*="epc-"] #footer .wrap td,[class*="epc-"] #footer .wrap th{border-bottom:1px solid ' . $footer_subdued_aux . '}[class*="epc-"] #footer .wrap .search-field{border:1px solid rgba(0,0,0,.2);background:#fff;box-shadow:0 0 0 0 ' . $footer_subdued_aux . '}[class*="epc-"] #footer .wrap .search-field:hover,[class*="epc-"] #footer .wrap .search-field:focus{border:1px solid rgba(0,0,0,.2);box-shadow:0 0 0 5px ' . $footer_subdued_aux . '}[class*="epc-"] #footer .widget_tag_cloud a{color:#fff !important}[class*="epc-"] #footer #sidebar-footer .widget_social-id a{background:' . $footer_subdued_aux . ';box-shadow: 0 0 0 10px ' . $footer_color . ';border: 1px solid ' . $footer_color . '}[class*="epc-"] #footer #sidebar-footer .widget_social-id a:hover{box-shadow: 0 0 0 10px ' . $footer_subdued . ';border: 1px solid ' . $footer_subdued . '}';

	if ( ! in_array( $header_color, array( '#FFFFFF','#ffffff' ) ) ) {

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custon_header_styles );
	}

	if ( '#344146' !== $footer_color ) {

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custon_footer_styles );
	}
}

/**
 * Adiciona os estilos CSS personalizados do painel
 *
 * @since   1.7.12
 * @version 1.0.0
 * @return  string
 */
function epico_custom_css() {

	$custon_css_styles = get_theme_mod( 'epico_custom_css' );

	if ( ! empty( $custon_css_styles ) ) {

		// Adiciona o estilo inline (depende da folha de estilos principal ter sido carregada)
		wp_add_inline_style( 'style', $custon_css_styles );
	}
}
