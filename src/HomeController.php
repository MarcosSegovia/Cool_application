<?php

namespace CoolApplication;

use Coolframework\Component\Injector\CoolContainer;
use Coolframework\Component\Response\Response;

class HomeController
{
	private $container;
	private $template_engine;

	public function __construct(CoolContainer $container)
	{
		$this->container       = $container;
		$this->template_engine = $this->container->getService('twig_templating');
	}

	public function index()
	{
		return new Response($this->template_engine->render('hello.twig'));
	}
}