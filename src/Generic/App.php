<?php
// Handler permet d'appeler les middleware
namespace Generic;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Appli\HomeController;

class App implements RequestHandlerInterface
{
	public function handle(ServerRequestInterface $request): ResponseInterface
	{
		$controller = new HomeController();
		return $controller->process($request, $this);
	}
}
// app c'est un gestionnaire de requête 