<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Helper;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class CollectionHelper
 * @package App\Support
 */
class CollectionHelper
{
    /**
     * 对collections -> array，而且是以collections的每一个子集的 键名为key的键值 作为键名的array
     * @param Collection $collection
     * @param null $key
     *
     * @return array
     */
    public static function collection2Array(Collection $collection, $key = null)
    {
        return $collection->reduce(function ($carry, Model $model) use ($key) {
            $k         = $key ? $model->$key : $model->getKeyName();
            $carry[$k] = $model->getAttributes();
            return $carry;
        }, []);
    }

    /**
     * 以二维关联数据中的某值作为键名
     * @param array $arr
     * @param $key
     *
     * @return array
     */
    public static function arrayKey(array $arr, $key)
    {
        return array_reduce($arr, function (array $carry, $item) use ($key) {
            $carry[$item[$key]] = $item;
            return $carry;
        }, []);
    }

    /**
     * 过滤二维数据(当keys为字符串时，直接返回键值，反之数组)
     * @param array $arr
     * @param string|array $keys
     *
     * @return array
     */
    public static function arrayOnly(array $arr, $keys)
    {
        return array_map(function ($carry) use ($keys) {
            return is_array($keys) ? array_only($carry, $keys) : array_get($carry, $keys, '');
        }, $arr);
    }
}