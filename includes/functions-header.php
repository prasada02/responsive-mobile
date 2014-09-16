<?php
/**
 * Header items
 *
 * Hook into the header to add theme logo/blog title and secondary header area
 *
 * @package      ${PACKAGE}
 * @license      license.txt
 * @copyright    ${YEAR} ${COMPANY}
 * @since        ${VERSION}
 *
 * Please do not edit this file. This file is part of the ${PACKAGE} Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Adds header logo or site name to header
 */
function responsive_II_header_branding() {
	if ( get_header_image() ) : ?>
		<div id="logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url" title="<?php echo esc_attr( get_bloginfo( 'title' ) ) ?>">
				<img src="<?php header_image(); ?>"  alt="<?php echo esc_attr( get_bloginfo( 'title' ) ) ?>" itemprop="image">
			</a>
		</div>
	<?php else : ?>
		<div id="site-header-text">
			<?php if ( 'blank' != get_theme_mod( 'header_textcolor' ) ) : ?>
				<h1 class="site-name" itemprop="headline">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" itemprop="url"><?php bloginfo( 'name' ); ?></a>
				</h1>
				<h2 class="site-description" itemprop="description"><?php bloginfo( 'description' ); ?></h2>
			<?php endif; // End header text check. ?>
		</div>
	<?php endif; // End header image check.
}
add_action( 'responsive_II_header_one', 'responsive_II_header_branding' );

/**
 * Adds sidebar-top to header
 */
function responsive_II_sidebar_top() {
	get_sidebar( 'top' );
}

add_action( 'responsive_II_header_two', 'responsive_II_sidebar_top' );