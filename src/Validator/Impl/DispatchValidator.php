<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2018/10/8
 * Time: 16:48
 */

namespace Birjemin\LaravelHelper\Validator\Impl;


use Birjemin\LaravelHelper\Validator\DispatchValidatorInterface;

/**
 * Class DispatchValidator
 * @package Birjemin\LaravelHelper\Validator\Impl
 */
class DispatchValidator extends BaseValidator implements DispatchValidatorInterface
{
    /** @var array $rules */
    protected $rules = [];

    /** @var array $msgs */
    protected $msgs = [];

    /** @var array $extras */
    protected $extras = [];

    /**
     * DispatchValidator constructor.
     *
     * @param array $rules
     * @param array $msgs
     * @param array $extras
     *
     */
    public function __construct($rules = [], $msgs = [], $extras = [])
    {
        $this->rules  = $rules;
        $this->msgs   = $msgs;
        $this->extras = $extras;
    }

    protected function getRules()
    {
        return $this->rules;
    }

    protected function getMsgs()
    {
        return $this->msgs;
    }

    protected function getExtras()
    {
        return $this->extras;
    }
}