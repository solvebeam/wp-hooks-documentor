<?php
/**
 * Test for issue 18.
 *
 * @author    SolveBeam <info@pronamic.eu>
 * @copyright 2005-2022 SolveBeam
 * @license   GPL-3.0-or-later
 * @package   SolveBeam\WordPress\Documentor
 */

/**
 * Test issue 18.
 *
 * @link https://github.com/pronamic/wp-documentor/issues/17
 * @param bool  $some_condition       Condition.
 * @param mixed $some_other_parameter Other parameter.
 * @return bool
 */
if ( (bool) apply_filters( 'some_condition_filter', $some_condition, $some_other_parameter ) ) {
    do_something();
}
