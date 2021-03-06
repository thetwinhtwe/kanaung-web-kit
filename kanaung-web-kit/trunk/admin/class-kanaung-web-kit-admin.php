<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.thwin.net
 * @since      1.0.0
 *
 * @package    Kanaung_Web_Kit
 * @subpackage Kanaung_Web_Kit/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Kanaung_Web_Kit
 * @subpackage Kanaung_Web_Kit/admin
 * @author     Sithu Thwin <sithu@thwin.net>
 */
class Kanaung_Web_Kit_Admin {

        /**
	 * The converter that's responsible for encoding convertor
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Converter    $converter Convert encoding
	 */
	protected $converter;
        
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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Kanaung_Web_Kit_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Kanaung_Web_Kit_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/kanaung-web-kit-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Kanaung_Web_Kit_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Kanaung_Web_Kit_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/kanaung-web-kit-admin.js', array( 'jquery' ), $this->version, false );

	}
        
        private function callback($buffer) {
          // modify buffer here, and then return the updated code
          $converter = new Converter();
          $options = ['input_font' => 'Myanmar3', 'output' => 'Zawgyi-One'];
          $buffer = $converter->convert($buffer,$options);
          return $buffer;
        }

        public function buffer_start() {
          ob_start(array( $this, 'callback'));
        }

        public function buffer_end() {
          ob_end_flush();
        }

}
