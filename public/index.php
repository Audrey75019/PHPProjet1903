<?php
use Generic\App;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Psr7\ServerRequest;

//chargement de l'autoloader
require_once dirname(__DIR__) . '/vendor/autoload.php';
// la constante DIR sert a revenir dans le dossier parent
//avec dirname on remonte d'un niveau supplementaire



//creation de la requête
$request = ServerRequest::fromGlobals();
//creation de la reponse, c'est une variable qui existe deja dans php.
$app = new App();
$response = $app->handle($request);
//renvoie de la requete au navigateur
\Http\Response\send($response);
