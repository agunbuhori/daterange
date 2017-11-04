<?php

require "daterange/daterange.php";

$date = new Daterange\DateRange;

print_r($date->dateRange(['start' => '1998-03-31', 'end' => date('Y-m-d'), 'step' => '+1 year']));