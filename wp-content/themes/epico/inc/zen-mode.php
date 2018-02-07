<?php

/**
 * Opcoes do customizador para o modo zen
 *
 * @package	    Epico
 * @subpackage  Zen Mode
 * @version     1.0.0
 * @since       1.0.0
 *
 */
?>

<?php if ( is_singular() ) { ?>

		<?php  // Opcoes do customizador para o zen mode

			$zen_mode = get_theme_mod( 'epico_zenmode', 1 );

			$zen_modetext = get_theme_mod( 'epico_zenmode_text', __( 'Focused reading', 'epico' ) ); ?>

		<?php if ( $zen_mode == 1 ) { ?>

			<span id="zen" aria-hidden="true">

					<span class="zen-text">

						<?php if ( isset( $zen_modetext ) ) {

							echo esc_html( $zen_modetext );
						} ?>

					</span>

					<i class="fa fa-power-off fadein"></i>

			</span>

		<?php } ?>

	<?php } ?>
