<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 17:25
 */

namespace Birjemin\LaravelHelper\Tests\Job;


use Birjemin\LaravelHelper\Job\Impl\DispatchJob;


/**
 * Usage:
 *      dispatch(new ExampleJob($id));
 *
 * Class ExampleJob
 * @package Birjemin\LaravelHelper\Tests\Job
 */
class ExampleJob extends DispatchJob
{
    /** @var int $id */
    private $id;

    /**
     * ExampleJob constructor.
     *
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }

    /**
     * defined job's name
     * @return string
     */
    public function getJobName()
    {
        return 'example_job';
    }

    /**
     * do something in job
     *
     * example:
     *      send mail,send message...
     *
     * @return mixed
     */
    public function doAction()
    {
        return 1 + $this->id;
    }
}
