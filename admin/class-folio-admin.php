<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       pootlepress.com
 * @since      1.0.0
 *
 * @package    Folio
 * @subpackage Folio/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Folio
 * @subpackage Folio/admin
 * @author     PootlePress <nick@pootlepress.co.uk>
 */
class Folio_Admin {

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

		global $post;

		if ( isset( $post ) && 'page' == $post->post_type ) {

			wp_enqueue_style( $this->plugin_name . '-meta-styles', plugin_dir_url( __FILE__ ) . 'css/folio-admin-meta.css', array(), $this->version, 'all' );

		}

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/folio-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		global $post;

		if ( isset( $post ) && 'page' == $post->post_type ) {

			wp_enqueue_script( $this->plugin_name . '-meta-script', plugin_dir_url( __FILE__ ) . 'js/folio-admin-meta.js', array( 'jquery' ), $this->version, false );
			wp_enqueue_script(
				$this->plugin_name . '-meta-dnd',
				plugin_dir_url( __FILE__ ) . 'js/folio-admin-dnd.js',
				array(
					'jquery-ui-draggable',
					'jquery-ui-droppable',
					'jquery-ui-resizable',
				),
				$this->version,
				false
			);

		}

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/folio-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Registers the meta box
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function folio_meta_box() {

		add_meta_box(
			'folio',
			__( 'Folio', 'folio' ),
			array( $this, 'folio_meta_callback' ),
			'page'
		);

	}

	/**
	 * The meta box call back
	 *
	 * @since    1.0.0
	 * @access   public
	 */
	public function folio_meta_callback(){

		include 'partials/folio-admin-display.php';

	}

	public function folio_after_title(){

		global $post;

		if ( isset( $post ) && 'page' == $post->post_type ) {
		?>
		<a id="use-folio" class="button button-primary button-large" href="#">Use Folio</a>
		<a id="use-default" class="button button-large" href="#">Switch to editor</a>
		<?php
		}
	}
}
