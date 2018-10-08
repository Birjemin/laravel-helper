<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 18:35
 */
namespace Birjemin\LaravelHelper\Tests\Repository;


use App\User;
use Birjemin\LaravelHelper\Repository\Impl\BaseRepository;

/**
 * Usage:
 *      app(UserRepository::class)->findById(1);
 *
 * Class UserRepository
 * @package Birjemin\LaravelHelper\Tests\Repository
 */
class UserRepository extends BaseRepository
{
    public function targetModelClass()
    {
        // TODO: Implement targetModelClass() method.
        return User::class;
    }
}