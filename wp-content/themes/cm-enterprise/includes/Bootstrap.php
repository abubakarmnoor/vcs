<?php
namespace Codemanas\CMEnterprise;

use Codemanas\CMEnterprise\ThemeInfo\ThemeSetting;

final class Bootstrap {
	public static ?Bootstrap $instance = null;

	public static function get_instance(): ?Bootstrap {
		return is_null( self::$instance ) ? self::$instance = new self() : self::$instance;
	}

	public function autoloader(): void {
		// Make sure to use the correct path for your autoloader
		require_once __DIR__ . '/../vendor/autoload.php';
	}

	public function initTheme(): void {
		ThemeSetting::get_instance();
		Setup::get_instance();
		AssetsHandler::get_instance();
		Blocks::get_instance();
	}

	public function __construct() {
		$this->autoloader();
		$this->initTheme();
	}
}

Bootstrap::get_instance();
