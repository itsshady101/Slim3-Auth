<?php

namespace App\Controllers;

use App\Models\User;
use Slim\Views\Twig as View;

class HomeController extends Controller
{

	public function index($request, $response) 
	{
		User::create([
			'name' => 'Mia',
			'email' => 'mia@bangbros.com'
		])
		return $this->view->render($response, 'home.twig');
	}
}
