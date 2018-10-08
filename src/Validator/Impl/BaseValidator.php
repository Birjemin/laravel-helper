<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 15:27
 */
namespace Birjemin\LaravelHelper\Validator\Impl;


use Birjemin\LaravelHelper\Validator\ValidatorInterface;

/**
 * Class Validator
 * @package Birjemin\LaravelHelper\Validator\Impl
 */
abstract class BaseValidator implements ValidatorInterface
{
    /**
     * @param $attributes
     * @param bool $res
     *
     * @return bool|mixed
     * @throws \Exception
     */
    public function handle($attributes, $res = true)
    {
        $validator = \Validator::make($attributes, $this->getRules(), $this->getMsgs(), $this->getExtras());
        // $validator->errors()->first(); // 返回第一个错误消息
        // $validator->errors()->all(); // 返回全部错误消息，不带表单下标
        // $validator->errors(); // 返回全部错误消息，带表单下标
        if ($validator->fails()) {
            throw new \Exception('validator failed: ' . $validator->errors()->first());
        }
        return true;
    }

    /**
     * @return array
     */
    abstract protected function getRules();

    /**
     * @return array
     */
    abstract protected function getMsgs();

    /**
     * @return array
     */
    protected function getExtras()
    {
        return [];
    }
}