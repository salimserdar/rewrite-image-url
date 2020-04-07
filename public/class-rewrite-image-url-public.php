<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/salimserdar
 * @since      1.0.0
 *
 * @package    Rewrite_Image_Url
 * @subpackage Rewrite_Image_Url/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Rewrite_Image_Url
 * @subpackage Rewrite_Image_Url/public
 * @author     Salim Serdar Koksal <salimserdar@gmail.com>
 */
class Rewrite_Image_Url_Public
{

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rewrite_Image_Url_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rewrite_Image_Url_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/rewrite-image-url-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Rewrite_Image_Url_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Rewrite_Image_Url_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script('rewrite_image_url', plugin_dir_url(__FILE__) . 'js/rewrite-image-url-public.js', array('jquery'), $this->version, true);

		// Localize the script with new data
		$translation_array = array(
			'rewrite_image_url_host_name' => get_option('rewrite_image_url_host_name'),
		);

		wp_localize_script('rewrite_image_url', 'ril_object', $translation_array);

		// Enqueued script with localized data.
		wp_enqueue_script('rewrite_image_url');
	}
}
