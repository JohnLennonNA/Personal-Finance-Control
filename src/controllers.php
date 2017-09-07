<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

$app->get('/', function () use ($app) {

    $dateValue = explode("-", date("Y-m"));

    return $app['twig']->render('index.html.twig',
        array(
            "year" => $dateValue[0],
            "month" => $dateValue[1]
        )
    );
})->bind('homepage');

$app->get('/list_events', function (Request $request) use ($app) {

    try{
        $data = '
        {"sort" : [ { "date" : {"order" : "asc"}} ],
        "query": {"bool": {"must": [' . json_encode($request->get("data")) . ']}}}';

        $result = $app['elastic']->defineMethod("listAction", "events", $data);

        return JsonResponse::create([
            "code" => "200",
            "message" => "Executado com sucesso",
            "data" => $result
        ]);

    }catch (Exception $e){
        return JsonResponse::create(["code" => "500","message" => $app['elastic']]);
    }

});

$app->post('/add_events', function (Request $request) use ($app) {

    try{

        $data = [
            'description' => $request->request->get("description"),
            'value' => $request->request->get("value"),
            'date' => $request->request->get("date"),
            'type' => $request->request->get("type"),
            'payed' => 0
        ];

        $app['elastic']->defineMethod("insertAction", "events", json_encode($data));
        return JsonResponse::create(["code" => "200","message" => "Cadastrado com sucesso"]);

    }catch (Exception $e){
        return JsonResponse::create(["code" => $e->getCode(),"message" => $e->getMessage()]);
    }

});

$app->put('/payed_bill', function (Request $request) use ($app) {

    try{

        $data = [
            'description' => $request->request->get("description"),
            'value' => $request->request->get("value"),
            'date' => $request->request->get("date"),
            'type' => $request->request->get("type"),
            'payed' => $request->request->get("payed"),
        ];

        $app['elastic']->defineMethod("updateAction", "events/" . $request->request->get("id"), json_encode($data));
        return JsonResponse::create(["code" => "200","message" => "Atualizado com sucesso"]);

    }catch (Exception $e){
        return JsonResponse::create(["code" => $e->getCode(),"message" => $e->getMessage()]);
    }

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