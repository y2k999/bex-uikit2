<?php
/**
 * Since WordPress force us to use the header.php name to open the document, we add a header-partial.php template for the actual header.
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
	beans_open_markup_e('beans_header','header',array(
		'class' => 'tm-header uk-block',
		'role' => 'banner',
		'itemscope' => 'itemscope',
		'itemtype' => 'https://schema.org/WPHeader',
	));
		beans_open_markup_e('beans_fixed_wrap[_header]','div','class=uk-container uk-container-center');
			/**
			 * @reference (Beans)
			 * 	Fires in the header.
			 * 	https://www.getbeans.io/code-reference/hooks/beans_header/
			*/
			do_action('beans_header');

		beans_close_markup_e('beans_fixed_wrap[_header]','div');
	beans_close_markup_e('beans_header','header');
