<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Repository;


use Illuminate\Database\Eloquent\Model;

/**
 * Interface BaseRepositoryInterface
 * @package Birjemin\LaravelHelper\Repository
 */
interface BaseRepositoryInterface
{
    /**
     * get target model class
     * @return Model
     */
    public function targetModelClass();

    /**
     * get model object
     * @return object
     */
    public function model();

    /**
     * get info by id
     * @param $id
     *
     * @return Model
     */
    public function findById($id);

    /**
     * @param array $columns
     *
     * @return mixed
     */
    public function all($columns = ['*']);

    /**
     * paginate
     * @param int $perPage
     * @param array $columns
     *
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = ['*']);

    /**
     * 填充数据
     * @param array $attributes
     *
     * @return mixed
     */
    public function fill(array $attributes);
}