<?php
/**
 * Default Printer
 *
 * @author    SolveBeam <info@solvebeam.com>
 * @copyright 2005-2022 SolveBeam
 * @license   GPL-3.0-or-later
 * @package   SolveBeam\WordPress\Documentor
 */

namespace SolveBeam\WordPress\Documentor;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;

/**
 * Default Printer
 *
 * @link    https://symfony.com/doc/current/components/console/helpers/table.html
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class DefaultPrinter {
	/**
	 * Constrcuct default printer.
	 *
	 * @param Documentor      $documentor Documentor.
	 * @param OutputInterface $output     Output.
	 */
	public function __construct( Documentor $documentor, OutputInterface $output ) {
		$this->documentor = $documentor;
		$this->output     = $output;

		$this->table = new Table( $output );

		$this->table->setHeaders( [ 'File', 'Tag' ] );

		foreach ( $documentor->get_hooks() as $hook ) {
			$this->table->addRow(
				[
					$hook->get_file()->getPathname(),
					$hook->get_tag()->get_name(),
				]
			);
		}
	}

	/**
	 * Render.
	 *
	 * @return void
	 */
	public function render() {
		$this->table->render();
	}
}
