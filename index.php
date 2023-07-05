<?php

require_once __DIR__.'/vendor/autoload.php';

use app\controllers\HomeController;

$url = parse_url($_SERVER['REQUEST_URI']);
$request_method = $_SERVER['REQUEST_METHOD'];

/*
 * Get the query "id=2" and split this string to get an array
 *array(1) { ["id"]=> string(1) "2" }
 */
$queryString = [];
parse_str($url['query'],$queryString);

// The router
switch ($url['path'])
{
    // Warning: the / is important
    case '/posts':
        if($request_method === 'GET')
            (new HomeController())->index();
        break;

    case '/post':
        if($request_method === 'GET')
        {
            $id = $queryString['id'] ?? null;
            (new HomeController())->show($id);
        }
        break;
    /*
     * Warning, the name must be different
     * /post/create => to show the form
     * /post/store => to store a new post
     */
    case '/post/create':
        if($request_method === "GET")
            (new HomeController())->create();
        break;

    case '/post/store':
            if($request_method === "POST")
                (new HomeController())->store($_POST);
        break;

    case '/post/edit':
        if($request_method === 'GET')
        {
            $id = $queryString['id'] ?? null;
            (new HomeController())->edit($id);
        }
        break;

    case '/post/update':
            if($_POST['_METHOD'] == 'PUT' && $request_method == "POST")
                (new HomeController())->update($_POST);
        break;

    // Continue ... with PATCH and DELETE
    default:
        http_response_code(404);
        echo '404';
        break;
}

