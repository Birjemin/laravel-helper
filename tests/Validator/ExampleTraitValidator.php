<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 16:35
 */
namespace Birjemin\LaravelHelper\Tests\Validator;

use Birjemin\LaravelHelper\Validator\Validator;


/**
 * Usage:
 *      $this->handleValidator(['id' => 1], ['id' => [
 *          'required', function ($attribute, $value, $fail) {
 *              $res = User::whereId($value)->exists();
 *              if (!$res) {
 *                $fail('没有该用户');
 *                return;
 *              }
 *          }]
 *       ], ['id.required' => 'bucunzai']
 *      );
 *
 * Class ExampleValidator
 * @package Birjemin\LaravelHelper\Test\Validator
 */
class ExampleTraitValidator
{

    use Validator;

    public function doAction()
    {
        return $this->handleValidator([], [], []);
    }
}