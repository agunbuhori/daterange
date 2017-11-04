<?php

namespace Daterange;

class DateRange
{
	
	/**
	 * Get date range
	 *
	 * @param string
	 * @return array
	 */
	public function dateRange($data, $step = '+1 day', $format = 'Y-m-d') 
	{

		if (array_key_exists('start', $data) && array_key_exists('end', $data)) {
			$first = $data['start'];
			$last = $data['end'];
		} else {
			throw new \Exception("Minimum has start and end date");
		}

		if (array_key_exists('step', $data)) {
			$step = $data['step'];
		}

		if (array_key_exists('format', $data)) {
			$format = $data['format'];
		}

	    $current = strtotime($first);
	    $last = strtotime($last);
	    $dates = [];

	    while ($current <= $last) {
	        $dates[] = date($format, $current);
	        $current = strtotime($step, $current);
	    }

	    return $dates;
	}
}