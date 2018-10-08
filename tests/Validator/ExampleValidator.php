<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 16:35
 */
namespace Birjemin\LaravelHelper\Tests\Validator;

use App\User;
use Birjemin\LaravelHelper\Validator\Impl\DispatchValidator;


/**
 *  Usage:
 *      app(ExampleValidator::class)->handle($params);
 *
 * Class ExampleValidator
 * @package Birjemin\LaravelHelper\Test\Validator
 */
class ExampleValidator extends DispatchValidator
{
    /**
     * app(ExampleValidator::class)->handle($params)
     *
     * @return array
     */
    protected function getRules()
    {
        return [
            'nickname' => 'required|max:8|string',
            'password' => 'string|max:4',
            'height'   => 'digits_between:50,300',
            'number'   => 'integer|min:2|max:3',
            'user'     => ['required', function ($attribute, $value, $fail) {
                $res = User::whereId($value)->exists();
                if (!$res) {
                    $fail('没有该用户');
                    return;
                }
            }],
        ];
    }

    /**
     * @return array
     */
    protected function getMsg()
    {
        return [
            'nickname.required' => '昵称不存在',
        ];
    }

    /**
     * @return array
     */
    protected function getExtraAttributes()
    {
        return [
            'password' => '密码错误',
        ];
    }
}