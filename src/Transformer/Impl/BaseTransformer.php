<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Transformer\Impl;


use Birjemin\LaravelHelper\Transformer\BaseTransformerInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 * Class BaseTransformer
 * @package Birjemin\Transformer\Impl
 */
abstract class BaseTransformer implements BaseTransformerInterface
{
    // 暂定
    protected $baseKeys = [];

    public function transformer($data, $keys = [])
    {
        $keys = $keys ?: $this->baseKeys;
        // 映射
        $result = array_map(function ($model) use ($keys) {
            return $this->doTransformer($model, $keys);

        }, $this->getRealData($data));
        // 返回
        if ($data instanceof LengthAwarePaginator || $data instanceof Paginator) {
            $data->setCollection(Collection::make($result));
            return $data;
        }
        // 单个模型
        if ($data instanceof Model) {
            return reset($result);
        }

        return $result;
    }

    /**
     * @param $data
     *
     * @return array
     */
    protected function getRealData($data)
    {
        if ($data instanceof LengthAwarePaginator || $data instanceof Paginator) {
            return $data->items();
        } elseif ($data instanceof Model) {
            return [$data];
        } elseif ($data instanceof Collection) {
            return $data->all();
        } elseif ($data instanceof Arrayable) {
            return $data->toArray();
        }

        return (array) $data;
    }

    /**
     * @param Model $model
     * @param array $keys
     *
     * @return array
     */
    abstract protected function doTransformer($model, $keys);
}
