<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Job\Impl;


use Birjemin\LaravelHelper\Job\DispatchJobInterface;

/**
 * Class DispatchJob
 * @package App\Base\Repository\Impl
 */
class DispatchJob extends BaseJob implements DispatchJobInterface
{
    /**
     * DispatchJob constructor.
     *
     * dispatch(new DispatchJob)->onQueue('name')
     */
    public function __construct()
    {
        // 调用handle
        $this->onQueue($this->getJobName());
    }

    /**
     * @return string
     */
    public function getJobName()
    {
        // TODO: Implement getJobName() method.
        return 'defaultJobName';
    }

    /**
     * @return bool|mixed
     */
    public function doAction()
    {
        // TODO: Implement doAction() method.
        return false;
    }
}