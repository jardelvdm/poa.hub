<?php
/**
 * Template Name: Auxiliar (page builders)
 * Template Post Type: post, page
 *
 * @package Epico
 * @since   1.7.16
 */
?>
<!DOCTYPE html>

<html <?php language_attributes( 'html' ); ?> class="no-js">

<head>
	<?php wp_head(); // wp_head ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>

	<?php uberfacil_after_body(); // Hook personalizado - utilizado por padrao para o GTM ?>

	<div id="page">

	<?php if ( ! is_404() ) {  // Checar se NAO e pagina 404 ?>

		<?php hybrid_get_sidebar( 'top' ); // Mostra a sidebar do topo. ?>

	<?php } ?>

		<header <?php hybrid_attr( 'header' ); ?>>

			<div class="wrap">

				<div id="branding">

				<?php  // Opcoes do customizador para a area de branding

				$site_name  = get_theme_mod( 'epico_site_name', get_bloginfo( 'name', 'epico' ) );

				$logo_id    = get_theme_mod( 'epico_logo_upload' );

				$logo_width = get_theme_mod( 'epico_logo_width', 280 ); ?>

				<?php if ( $logo_id ) { // Utiliza o logotipo se estiver configurado. Caso contrario, usa o titulo do site. ?>

					<p id="site-title" itemscope itemtype="http://schema.org/Organization">

						<a itemprop="url" href="<?php echo esc_url( home_url() ); ?>" rel="home" title="Homepage">

							<meta itemprop="name" content="<?php echo esc_attr( $site_name ); ?>">

							<img style="width: <?php echo esc_attr( $logo_width ); ?>px" id="logo" itemprop="image logo" src="<?php echo esc_url( $logo_id ); ?>" alt="<?php echo esc_attr( $site_name ); ?>" />

						</a>

					</p>

				<?php } else { ?>

					<p id="site-title" itemscope itemtype="http://schema.org/Organization">

						<a itemprop="url" href="<?php echo esc_url( home_url() ); ?>" rel="home" title="Homepage">

							<span itemprop="name"><?php echo esc_attr( $site_name ); ?></span>

						</a>

					</p>

				<?php } ?>

				</div><!-- #branding -->

				<div class="nav" id="nav">

					<?php hybrid_get_menu( 'primary' ); // Carrega o template em menu/primary.php. ?>

				<div id="search-wrap">

					<a id="search-toggle" href="#" title="<?php _e( 'Search', 'epico' ); ?>"><span class="search-text"><?php _e( 'Search', 'epico' ); ?></span></a>

					<?php get_search_form(); ?>

				</div>

				</div>

			</div><!-- .wrap -->

		</header><!-- #header -->

		<div id="main-container">

			<div class="wrap">

				<main id="content" class="content" role="main" itemprop="mainContentOfPage" itemscope itemtype="http://schema.org/Blog">

					<?php if ( have_posts() ) : // Checa se algum post foi encontrado. ?>

						<?php while ( have_posts() ) : // Inicia o loop para os posts encontrados. ?>

							<?php the_post(); // Carrega o template post data. ?>

								<article <?php hybrid_attr( 'post' ); ?>>

										<div <?php hybrid_attr( 'entry-content' ); ?>>

											<?php the_content(); ?>

										</div><!-- .entry-content -->

								</article><!-- .entry -->

						<?php endwhile; // Finaliza o loop com os posts encontrados. ?>

					<?php endif; // Finaliza a checagem por posts. ?>

				</main><!-- #content -->

			</div><!-- .wrap -->

		</div><!-- #main-conteiner -->

	</div><!-- #page -->

	<footer <?php hybrid_attr( 'footer' ); ?>>

		<div id="credits">

			<div class="wrap">

				<div class="credit">

					<p>
						<?php

						$footerText = get_theme_mod( 'epico_footer_txt', __( 'All rights reserved', 'epico' ) );

						$siteDate = get_theme_mod( 'epico_date' );

						$site_nameFooter = get_theme_mod( 'epico_site_name', get_bloginfo( 'name', 'epico' ) );

						$logoFooter = get_theme_mod( 'epico_logo_image_footer' ); ?>

						<?php if ( $logoFooter ) { // Usa o logo se estiver configurado. ?>

							<span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" id="footer-logo-img">

								<meta itemprop="name" content="<?php echo esc_attr( $site_nameFooter ); ?>">

								<a href="<?php echo esc_url( home_url() ); ?>" rel="home" title=" __( 'Homepage', 'epico' )">

									<img id="footer-logo" src="<?php echo esc_url( $logoFooter ); ?>" itemprop="contentURL" alt="<?php the_title() ?>" />

								</a>

							</span>

						<?php } ?>

						<span id="credit-text"><a href="<?php echo esc_url( home_url() ); ?>" rel="home" title="<?php echo esc_attr( $site_nameFooter ); ?>"><?php echo esc_attr( $site_nameFooter ); ?></a> &#183; <?php epico_copyright_footer( esc_attr( $siteDate ) ); ?>

							<?php if ( $footerText ) { ?>

								<?php echo esc_attr( $footerText ); ?>

							<?php } ?>

							</span>

					</p>

					<?php hybrid_get_menu( 'secondary' ); // Carrega o template menu/social.php. ?>

				</div>

			</div>

		</div>

	</footer><!-- #footer -->

	</div><!-- #page -->

	<?php wp_footer(); // Hook do WordPress para carregar estilos e javascript ao fim do HTML. ?>

</body>

</html>