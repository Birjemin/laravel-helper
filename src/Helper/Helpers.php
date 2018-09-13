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
            'code'      => $code,
            'msg'       => $message,
            'data'      => $data,
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
    function isDev() {
        return config('app.env') === BIR_PRODUCTION ? false : true;
    }
}

/**
 *
 */
if (!function_exists('array_get_int')) {
    function array_get_int($params, $key) {
        return intval(array_get($params, $key, 0));
    }
}