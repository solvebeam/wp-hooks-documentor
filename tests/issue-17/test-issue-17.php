<?php
/**
 * Test for issue 17.
 *
 * @author    SolveBeam <info@pronamic.eu>
 * @copyright 2005-2022 SolveBeam
 * @license   GPL-3.0-or-later
 * @package   SolveBeam\WordPress\Documentor
 */

/**
 * Test issue 17.
 *
 * @link https://github.com/pronamic/wp-documentor/issues/17
 * @param bool  $some_condition       Condition.
 * @param mixed $some_other_parameter Other parameter.
 * @return bool
 */
if ( apply_filters( 'some_condition_filter', $some_condition, $some_other_parameter ) ) {
    do_something();
}
