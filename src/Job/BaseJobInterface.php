<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Job;


/**
 * Interface BaseJobInterface
 * @package Birjemin\LaravelHelper\Job
 */
interface BaseJobInterface
{
    /**
     * handle
     * @return mixed
     */
    public function handle();
}