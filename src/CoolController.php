<?php

namespace CoolApplication;

use Coolframework\Component\Injector\CoolContainer;
use Coolframework\Component\Response\Response;

class CoolController
{
	private $container;
	private $template_engine;

	public function __construct(CoolContainer $container)
	{
		$this->container       = $container;
		$this->template_engine = $this->container->getService('smarty_templating');
	}

	public function index()
	{
		return new Response($this->template_engine->render('hello.tpl'));
	}

	public function pam()
	{
		return new Response('Que pim que pam');
	}
}