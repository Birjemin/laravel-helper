<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Transformer;


/**
 * Interface BaseTransformerInterface
 * @package Birjemin\LaravelHelper\Transformer
 */
interface BaseTransformerInterface
{
    /**
     * @param $data
     * @param array $keys
     *
     * @return mixed
     */
    public function transformer($data, $keys = []);
}