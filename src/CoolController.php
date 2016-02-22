<?php

namespace CoolApplication;

use Coolframework\Component\Response\Response;
use Coolframework\Component\Templating\TwigTemplating;

class CoolController
{
	private $template_engine;

	public function __construct()
	{
		$this->template_engine = new TwigTemplating();
	}

	public function index()
	{
		return new Response($this->template_engine->render('hello.twig'));
	}

	public function pam()
	{
		return new Response('Que pim que pam');
	}
}