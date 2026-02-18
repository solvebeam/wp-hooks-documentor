<?php
/**
 * Test for issue 16.
 *
 * @author    SolveBeam <info@solvebeam.com>
 * @copyright 2005-2022 SolveBeam
 * @license   GPL-3.0-or-later
 * @package   SolveBeam\WordPress\Documentor
 */

/**
 * Test issue 16
 */
$test = apply_filters(
	'dynamic-filter-' . strval( 'test' ),
	'test'
);

class Test {
	public function get_value() {
		return 'test';
	}

	public function test() {
		return apply_filters( 'dynamic-filter-' . $this->get_value() );
	}
}
