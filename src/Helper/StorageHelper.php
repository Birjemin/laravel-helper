<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Helper;


/**
 * Class StorageHelper
 * @package App\Support
 */
class StorageHelper
{
    /**
     * set user's info
     * @param $key
     * @param $val
     * @return bool
     */
    private function put($key, $val)
    {
        session([$key => $val]);
        return true;
    }

    /**
     * get value of given key
     * @param $key
     * @param null $default
     * @return bool
     */
    private function get($key, $default = null)
    {
        return session($key, $default);
    }

    /**
     * clear the value of given key
     * @param $key
     * @return bool
     */
    private function clr($key)
    {
        session([$key => null]);
        return true;
    }

    /**
     * __call
     * @param $name
     * @param $params
     *
     * @return bool
     */
    public function __call($name, $params)
    {
        if (starts_with($name, 'get')) {
            return $this->get(substr($name, 3), ...$params);
        }
        if (starts_with($name, 'put')) {
            return $this->put(substr($name, 3), reset($params));
        }
        if (starts_with($name, 'clr')) {
            return $this->clr(substr($name, 3), ...$params);
        }

        throw new \BadMethodCallException("Unknown method {$name}");
    }
}