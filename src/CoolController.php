<?php

namespace CoolApplication;

use Coolframework\Component\Controller\CoolControllerBase;
use Coolframework\Component\Injector\CoolContainer;
use Coolframework\Component\Response\Response;

class CoolController extends CoolControllerBase
{
	private $template_engine;

	public function __construct(CoolContainer $container)
	{
		parent::__construct($container);
		$this->template_engine = $this->container->getService('smarty_templating');
	}

	public function index()
	{
		return Response::create($this->template_engine->render('hello.tpl'), Response::HTTP_ACCEPTED, ['Content-Type: text/html']);
	}

	public function pam()
	{
		return Response::create('Que pim que pam', Response::HTTP_ACCEPTED, ['Content-Type: text/html']);
	}
}