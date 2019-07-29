<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Job\Impl;


use Birjemin\LaravelHelper\Job\BaseJobInterface;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

/**
 * Class BaseJob
 * @package App\Base\Repository\Impl
 */
abstract class BaseJob implements ShouldQueue, BaseJobInterface
{
    use InteractsWithQueue, SerializesModels, Queueable;

    /**
     * Execute the job.
     *
     * @return mixed
     */
    public function handle()
    {
        return $this->doAction();
    }

    /**
     * @return mixed
     */
    abstract public function doAction();
}