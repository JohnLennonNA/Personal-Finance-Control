<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 20/05/17
 * Time: 23:53
 */

namespace AppControllers;


use Symfony\Component\Config\Definition\Exception\Exception;

class Util
{
    static function CurlRequest($url, $body = false, $method = "GET"){

        try{

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);

            if( $body != false ){
                curl_setopt( $ch, CURLOPT_POSTFIELDS, $body );
            }

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
            curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            $output = curl_exec($ch);
            curl_close($ch);

            return $output;

        }catch (Exception $e){

        }
    }

    static function normalizeData($data){

    }

}