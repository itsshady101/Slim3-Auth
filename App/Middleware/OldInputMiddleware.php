<?php

namespace App\Middleware;

class ValidationErrorsMiddleware extends Middleware
{
	public function __invoke($request, $response, $next)
	{
		$this->container->setEnvironment()->setGlobal('old', $_SESSION['old']);

		$response = $next($request, $response);
		return $response;
	}
}