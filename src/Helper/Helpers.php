<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 13/09/2018
 * Time: 17:49
 */

if (!function_exists('responseJson')) {
    /**
     * @param array $data
     * @param int $code
     * @param string $message
     *
     * @return \Illuminate\Http\JsonResponse
     */
    function responseJson($data, $code = 0, $message = '')
    {
        return response()->json([
            'code' => $code,
            'msg'  => $message,
            'data' => $data,
        ]);
    }
}

/**
 *
 */
if (!function_exists('responseJson1')) {
    function responseJson1($data = [], string $info = '')
    {
        $arr  = explode('|', $info);
        $code = (isset($arr[0]) && !empty($arr[0])) ? $arr[0] : 0;
        $msg  = isset($arr[1]) ? $arr[1] : 'success';
        return responseJson($data, intval($code), $msg);
    }
}

/**
 * 环境变量
 */
if (!function_exists('isDev')) {
    function isDev()
    {
        return config('app.env') === BIR_PRODUCTION ? false : true;
    }
}

/**
 *
 */
if (!function_exists('array_get_int')) {
    function array_get_int($params, $key)
    {
        return intval(array_get($params, $key, 0));
    }
}

/**
 * 随机一个和时间相关的订单号（长度最好大于16位，因为有一个时间8位）
 */
if (!function_exists('randNum')) {
    function randNum($length = 18, $min = 16)
    {
        $length >= $min ?: $length = $min;
        return date('Ymd') . substr(implode(null, array_map('ord',
                    str_split(substr(uniqid(), 7, 13), 1))
            ), 0, $length - 8);
    }
}

/**
 * 根据所传的值进行hash分类（用于分表）
 */
if (!function_exists('hashDb')) {
    function hashDb($str, $max = 8)
    {
        return intval(fmod(sprintf("%u", crc32($str)), $max));
    }
}

/**
 * 判断是否为手机号
 */
if (!function_exists('isMobile')) {
    function isMobile($mobile)
    {
        return preg_match('#^1[3-9]\d{9}$#', $mobile) ? true : false;
    }
}

/**
 * 判断是否是email
 */
if (!function_exists('isEmail')) {
    function isEmail(string $email)
    {
        return preg_match(
            "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i",
            $email
        ) ? true : false;
    }
}