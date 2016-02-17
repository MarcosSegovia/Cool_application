<?php

namespace CoolApplication;

use Coolframework\Component\Response\Response;

class HomeController
{
	public function index()
	{
		return new Response('First Controller !');
	}
}