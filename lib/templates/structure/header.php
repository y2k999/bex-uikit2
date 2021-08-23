<?php
/**
 * Despite its name, this template echos between the opening HTML markup and the opening primary markup.
 * This template must be called using get_header().
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
	 * 	https://www.getbeans.io/code-reference/functions/beans_output_e/
	 * 	https://www.getbeans.io/code-reference/functions/beans_close_markup_e/
	*/
	beans_output_e('beans_doctype','<!DOCTYPE html>');

	beans_open_markup_e('beans_html','html',str_replace(' ','&',str_replace('"','',beans_render_function('language_attributes'))));

		beans_open_markup_e('beans_head','head');
			/**
			 * @reference (Beans)
			 * 	Fires in the head.
			 * 	This hook fires in the head HTML section, not in wp_header().
			 * 	https://www.getbeans.io/code-reference/hooks/beans_head/
			*/
			do_action('beans_head');

			/**
			 * @reference (WP)
			 * 	Fire the wp_head action.
			 * 	https://developer.wordpress.org/reference/functions/wp_head/
			*/
			wp_head();
		beans_close_markup_e('beans_head','head');

		/**
		 * @reference
		 * 	[Plugin]/beans_extension/asset/accessibility.php
		*/
		beans_build_skip_links();

		beans_open_markup_e('beans_body','body',array(
			'class' => implode(' ',get_body_class('uk-form no-js')),
			'itemscope' => 'itemscope',
			'itemtype' => 'https://schema.org/WebPage',
		));

		/**
		 * @reference (WP)
		 * 	Fire the wp_body_open action.
		 * 	https://developer.wordpress.org/reference/functions/wp_body_open/
		*/
		wp_body_open();

			beans_open_markup_e('beans_site','div',array('class' => 'tm-site'));
				beans_open_markup_e('beans_main','main',array('class' => 'tm-main uk-block'));
					beans_open_markup_e('beans_fixed_wrap[_main]','div','class=uk-container uk-container-center');
						beans_open_markup_e('beans_main_grid','div',array(
							'class' => 'uk-grid',
							'data-uk-grid-margin' => '',
						));
							beans_open_markup_e('beans_primary','div',array('class' => 'tm-primary ' . beans_get_layout_class('content')));

