<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 20/05/17
 * Time: 23:53
 */

namespace AppControllers\Classes;


class Util
{

    static function CurlRequest($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        curl_close($ch);

        return $output;
    }

}