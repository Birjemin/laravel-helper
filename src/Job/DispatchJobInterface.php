<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Job;


/**
 * Interface DispatchJobInterface
 * @package App\Base\Job
 *
 * usage:
 * dispatch(new Job);
 * class Job implements DispatchJobInterface
 *
 */
interface DispatchJobInterface
{
    /**
     * @return mixed
     */
    public function getJobName();
}