<?php

namespace Codemanas\CMEnterprise\ThemeInfo;

class ThemeSetting {
	private static $_instance = null;
	public static function get_instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	public function __construct() {
		// Hooks to create theme info page inside the appearance menu
		add_action( 'admin_menu', [ $this, 'cm_enterprise_menu' ] );

		//hooks to redirect to the theme info page when theme is activated
		add_action( 'after_switch_theme',
			[ $this, 'redirect_to_cm_enterprise_info_page' ] );

		// AJAX handler for plugin installation
		add_action( 'wp_ajax_cm_admin_install_plugin', [$this, 'install_plugin_callback'] );
		add_action( 'wp_ajax_nopriv_cm_admin_install_plugin', [$this, 'install_plugin_callback'] );

		//register theme info assets
		add_action( 'admin_enqueue_scripts', array( $this, 'cm_themeInfo_scripts' ) );
	}

	public function cm_themeInfo_scripts( $hook ): void {
		// Correct the hook comparison and use get_template_directory_uri() for consistency
		if ( 'appearance_page_cm-enterprise-info' !== $hook ) {
			return;
		}

		$path = get_template_directory_uri() . '/includes/ThemeInfo/css/themeInfo-style.css';
		$deps = array();
		wp_enqueue_style( 'cm-enterprise-themeInfo-styles', $path, $deps, '1.0.5',
			'all' );
		wp_enqueue_script( 'cm_enterprise_themeInfo_script',
			get_template_directory_uri() . '/includes/ThemeInfo/js/ThemeInfo.js', array(),
			'1.0' );
	}


	function cm_enterprise_menu(): void {
		add_theme_page( esc_html__( 'CM Enterprise', 'cm-enterprise' ),
			esc_html__( 'CM Enterprise', 'cm-enterprise' ),
			'edit_theme_options',
			'cm-enterprise-info',
			[ $this, 'enterprise_theme_page_display' ],
		);
	}

	function enterprise_theme_page_display(): void {
		$theme = wp_get_theme();
		include_once 'templates/theme-info.php';
	}

	function redirect_to_cm_enterprise_info_page(): void {
		if ( isset( $_GET['activated'] ) && $_GET['activated'] === 'true' ) {
			wp_redirect( admin_url( 'themes.php?page=cm-enterprise-info' ) );
			exit;
		}
	}

	// AJAX handler for plugin installation
	function install_plugin_callback(): void {
		$plugin_slug = isset( $_POST['plugin_slug'] ) ? sanitize_text_field( $_POST['plugin_slug'] ) : '';
		$filename = isset( $_POST['filename'] ) ? sanitize_text_field( $_POST['filename'] ) : '';

		if ( empty( $plugin_slug ) ) {
			wp_send_json_error( array( 'message' => 'Invalid plugin slug.' ) );
		}

		$installer = new PluginInstaller( $plugin_slug, $filename );
		$result    = $installer->installAndActivate();
		if ($result instanceof WP_Error) {
			if ( is_wp_error( $result ) ) {
				wp_send_json_error( array( 'message' => $result->get_error_message() ) );
			}
		}

		wp_send_json_success( array( 'message' => $result ) );

	}

	public function codemanas_get_plugin_file( $plugin_slug ) {
		require_once ABSPATH . '/wp-admin/includes/plugin.php';
		$plugins = get_plugins();

		foreach ( $plugins as $plugin_file => $plugin_info ) {
			$slug = dirname( plugin_basename( $plugin_file ) );

			if ( $slug && $slug == $plugin_slug ) {
				return $plugin_file;
			}
		}

		return null;
	}
}
