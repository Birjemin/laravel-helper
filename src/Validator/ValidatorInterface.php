<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 15:29
 */

namespace Birjemin\LaravelHelper\Validator;


/**
 * Interface ValidatorInterface
 * @package Birjemin\LaravelHelper\Validator\Impl
 */
interface ValidatorInterface
{
    /**
     * @param $attributes
     * @param bool $res
     *
     * @return mixed
     */
    public function handle($attributes, $res = true);
}