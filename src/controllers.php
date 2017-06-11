<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppControllers\Classes\Util;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

//Request::setTrustedProxies(array('127.0.0.1'));

$app->get('/', function () use ($app) {
    return $app['twig']->render('index.html.twig', array());
})
->bind('homepage');

$app->post('/addEvents', function (Request $request) use ($app) {

    $payload = json_encode( $request->request->all() );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:9200/finance/events/");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $payload );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $output = curl_exec($ch);
    curl_close($ch);

    return JsonResponse::create($output);
});

$app->get('/listEvents', function () use ($app) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://localhost:9200/finance/events/_search?pretty=true");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
    $output = curl_exec($ch);
    curl_close($ch);

    return JsonResponse::create($output);
});


//curl -XGET 'http://localhost:9200/twitter/tweet/_search?pretty=true' -d '
//{
//  "query" : {
//    "match" : { "user": "tasafo" }
//  }
//}'



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

//$app->post('/teste', function (Request $request) use ($app) {
//
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_URL, "http://localhost:9200/?pretty");
//    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//    $output = curl_exec($ch);
//    curl_close($ch);
//
//    return JsonResponse::create($output);
//
//});
