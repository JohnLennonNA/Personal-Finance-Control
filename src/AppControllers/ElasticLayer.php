<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 20/05/17
 * Time: 23:53
 */

namespace AppControllers;

use AppControllers\Util;
use Symfony\Component\Config\Definition\Exception\Exception;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ElasticLayer implements ServiceProviderInterface
{
    private $uri = "http://localhost:9200/";
    private $db = "finance";

    public function register(Container $app)
    {
        $app['elastic'] = "elstic teste";
    }





    public function defineMethod($ref, $tipo ,$data){
        $methods = array();
//        $methods["insert"] = $this->insertAction();
        $methods["list"] = $this->listAction($data, $tipo);

        return $methods[$ref];
    }

//    public function insertAction(){
//        return "insert";
//    }

    public function listAction($data, $tipo){

//        "{$this->uri}{$this->db}/{$tipo}/_search?pretty=true",

        $response = Util::CurlRequest(
            "{$this->uri}{$this->db}/{$tipo}/_search",
            $data
        );

        return $response;
    }


}