<?php
/**
 * Created by PhpStorm.
 * User: n0impossible
 * Date: 6/14/15
 * Time: 1:47 PM
 */

namespace Jomar\Timezones\Facades;
use Illuminate\Support\Facades\Facade;

class Timezones extends Facade{
    protected static function getFacadeAccessor() { return 'timezones'; }
}