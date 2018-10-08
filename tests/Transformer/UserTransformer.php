<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 18:39
 */

namespace Birjemin\LaravelHelper\Tests\Transformer;


use Birjemin\LaravelHelper\Transformer\Transformer\Impl\BaseTransformer;

/**
 * Usage:
 *      app(UserTransformer::class)->transformer(User::all());
 *
 * @package Birjemin\LaravelHelper\Tests\Transformer
 */
class UserTransformer extends BaseTransformer
{
    public function doTransformer($model, $keys)
    {
        // TODO: Implement doTransformer() method.
        return [
            'id' => $model->id,
            'type' => $model->age > 18 ? '大人' : '小人',
        ];
    }
}