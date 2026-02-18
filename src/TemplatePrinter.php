<?php
/**
 * Template Printer
 *
 * @author    SolveBeam <info@solvebeam.com>
 * @copyright 2005-2022 SolveBeam
 * @license   GPL-3.0-or-later
 * @package   SolveBeam\WordPress\Documentor
 */

namespace SolveBeam\WordPress\Documentor;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Template Printer
 *
 * @link    https://symfony.com/doc/current/components/console/helpers/table.html
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class TemplatePrinter {
	/**
	 * Documentor.
	 *
	 * @var Documentor
	 */
	public $documentor;

	/**
	 * Output.
	 *
	 * @var OutputInterface
	 */
	public $output;

	/**
	 * Template file.
	 *
	 * @var string
	 */
	public $template;

	/**
	 * Constrcuct default printer.
	 *
	 * @param Documentor      $documentor Documentor.
	 * @param OutputInterface $output     Output.
	 * @param string          $template   Template file.
	 */
	public function __construct( Documentor $documentor, OutputInterface $output, $template ) {
		$this->documentor = $documentor;
		$this->output     = $output;
		$this->template   = $template;
	}

	/**
	 * Render.
	 *
	 * @return void
	 */
	public function render() {
		$documentor = $this->documentor;

		\ob_start();

		include $this->template;

		$output = \ob_get_clean();

		$this->output->writeln( $output );
	}
}
