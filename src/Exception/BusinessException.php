<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

namespace Birjemin\LaravelHelper\Exception;

/**
 * Class BusinessException
 * @package App\Exceptions
 */
class BusinessException extends \Exception
{
    const ERROR_CODE = 100001;
    const ERROR_MSG  = 'businessException';

    private $data = [];

    /**
     * BusinessException constructor.
     *
     * @param string $info
     * @param array $data
     * @param \Exception|null $previous
     */
    public function __construct(string $info, $data = [], \Exception $previous = null)
    {
        $arr  = explode('|', $info);
        $code = isset($arr[0]) ? $arr[0] : self::ERROR_CODE;
        $msg  = isset($arr[1]) ? $arr[1] : self::ERROR_MSG;
        $this->data = $data;
        parent::__construct($msg, $code, $previous);
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}