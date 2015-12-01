<?php
/**
 * Created by PhpStorm.
 * User: n0impossible
 * Date: 6/13/15
 * Time: 11:35 AM
 */

namespace Jomar\Timezones;
use Carbon\Carbon;
 
class Timezones {
    public function get($timezone = NULL)
    {
        return $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();
    }
}