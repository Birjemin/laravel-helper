<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 16:10
 */
namespace Birjemin\LaravelHelper\Validator;


use Birjemin\LaravelHelper\Validator\Impl\DispatchValidator;

/**
 * Trait Validator
 * @package Birjemin\LaravelHelper\Validator
 */
trait Validator
{
    /** @var  */
    protected $validator;

    /**
     * Usage:
     *      $this->handleValidator($params, $rules, $msgs, $extras)
     * @param $params
     * @param $rules
     * @param $msgs
     * @param array $extras
     *
     * @return bool|mixed
     * @throws \Exception
     */
    protected function handleValidator($params, $rules, $msgs, $extras = [])
    {
        return (new DispatchValidator($rules, $msgs, $extras))->handle($params);
    }
}