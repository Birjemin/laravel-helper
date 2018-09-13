<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Support;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

/**
 * Class CollectionHelper
 * @package App\Support
 */
class CollectionHelper
{
    /**
     * @param Collection $collection
     * @param null $key
     *
     * @return mixed
     */
    public static  function makeKeyArray(Collection $collection, $key = null)
    {
        /**  */
        return $collection->reduce(function ($result, Model $model) use ($key) {
            $k          = $key ? $model->$key : $model->getKeyName();
            $result[$k] = array_except($model->getAttributes(), $key);
            return $result;
        }, []);
    }
}