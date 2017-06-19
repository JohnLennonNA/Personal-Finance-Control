<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppControllers\Util;
use Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage');

$app->post('/addEvents', function (Request $request) use ($app) {

    try{

        $response = Util::CurlRequest(
            "http://localhost:9200/finance/events/",
            json_encode($request->request->get("data")),
            "POST"
        );

    }catch (Exception $e){
        
    }

    return JsonResponse::create($response);
});

$app->get('/listEvents', function () use ($app) {

    try{
        $response = Util::CurlRequest(
            "http://localhost:9200/finance/events/_search?pretty=true",
            "{\"from\" : 0, \"size\" : 100}"
        );

    }catch (Exception $e){

    }

    return JsonResponse::create($response);
});

$app->error(function (\Exception $e, Request $request, $code) use ($app) {
    if ($app['debug']) {
        return;
    }

    // 404.html, or 40x.html, or 4xx.html, or error.html
    $templates = array(
        'errors/'.$code.'.html.twig',
        'errors/'.substr($code, 0, 2).'x.html.twig',
        'errors/'.substr($code, 0, 1).'xx.html.twig',
        'errors/default.html.twig',
    );

    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
});