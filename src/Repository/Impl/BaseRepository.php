<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Repository\Impl;


use Birjemin\LaravelHelper\Repository\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BaseRepository
 * @package Birjemin\LaravelHelper\Repository\Impl
 */
abstract class BaseRepository implements BaseRepositoryInterface
{

    /**
     * @return mixed
     */
    abstract public function targetModelClass();

    /**
     * get model
     * @return Model
     */
    public function model()
    {
        $targetModel = $this->targetModelClass();
        return new $targetModel;
    }

    /**
     * find condition by id
     *
     * @param $id
     *
     * @return Model
     */
    public function findById($id)
    {
        return $this->model()->find($id);
    }

    /**
     * get all
     *
     * @param array $columns
     *
     * @return Model
     */
    public function all($columns = ['*'])
    {
        return $this->model()->get($columns);
    }

    /**
     * get paginate
     *
     * @param int $perPage
     * @param array $columns
     *
     * @return Model
     */
    public function paginate($perPage = 15, $columns = ['*'])
    {
        return $this->model()->paginate($perPage);
    }

    /**
     * 填充数据
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function fill(array $attributes)
    {
        // TODO: Implement fill() method.
        return $this->model()->fill();
    }
}