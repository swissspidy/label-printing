<?php
/**
 * Figuren_Theater label_printing.
 *
 * @package figuren-theater/label-printing
 */

namespace Figuren_Theater\Label_Printing;

/**
 * Register module.
 *
 * @return void
 */
function register() :void {
	Blocks\register();
	Block_Styles\register();
	Block_Variations\register();
	Patterns\register();
}

/**
 * Bootstrap module, when enabled.
 *
 * @return void
 */
function bootstrap() :void {

	/**
	 * Automatically load Plugins.
	 *
	 * @example NameSpace\bootstrap();
	 */

	/**
	 * Load 'Best practices'.
	 *
	 * @example NameSpace\bootstrap();
	 */
}
