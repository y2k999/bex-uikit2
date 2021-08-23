<?php
/**
 * Since WordPress force us to use the footer.php name to close the document, we add a footer-partial.php template for the actual footer.
 * @package Beans Extension Uikit2
 * @since 1.5.1
*/

/**
 * Inspired by Beans Framework WordPress Theme
 * @link https://www.getbeans.io
 * @author Thierry Muller
 * 
 * Inspired by Beans Frontend Framework, using UiKit3 Plugin
 * @link https://bowriverstudio.com
 * @author Maurice Tadros, Yaidel Ferralize, Disnel Rodriguez
*/


	/**
	 * @reference (Beans)
	 * 	HTML markup.
	 * 	https://www.getbeans.io/code-reference/functions/beans_open_markup_e/
	 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
	*/
	beans_open_markup_e('beans_footer','footer',array(
		'class' => 'tm-footer uk-block',
		'role' => 'contentinfo',
		'itemscope' => 'itemscope',
		'itemtype' => 'https://schema.org/WPFooter',
	));
		beans_open_markup_e('beans_fixed_wrap[_footer]','div','class=uk-container uk-container-center');
			/**
			 * @reference (Beans)
			 * 	Fires in the footer.
			 * 	This hook fires in the footer HTML section, not in wp_footer().
			 * 	https://www.getbeans.io/code-reference/hooks/beans_footer/
			*/
			do_action('beans_footer');

		beans_close_markup_e('beans_fixed_wrap[_footer]','div');
	beans_close_markup_e('beans_footer','footer');
