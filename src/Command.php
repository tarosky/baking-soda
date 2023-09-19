<?php
namespace Tarosky\BakingSoda;

/**
 * Command utiliby for Baking Soda.
 *
 * This command will make a aig WordPress site with fake contents.
 *
 */
class Command extends \WP_CLI_Command {

	/**
	 * Generate fake contents.
	 *
	 * @param array $args  Command arguments.
	 * @param array $assoc Command options.
	 * @return void
	 */
	public function expand($args, $assoc ) {
		// Check to run the command.
		\WP_CLI::confirm( __( 'This command will generate fake contents, users, and comments on your WordPress. It is totally for development use. Are you sure?', 'baking-soda' ) );

		\WP_CLI::success( 'done' );
	}
}
