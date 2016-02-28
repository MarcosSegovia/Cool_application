<?php

namespace CoolApplication;

use Coolframework\Component\Controller\CoolControllerBase;
use Coolframework\Component\Injector\CoolContainer;
use Coolframework\Component\Response\Response;

class HomeController extends CoolControllerBase
{
	private $template_engine;

	public function __construct(CoolContainer $container)
	{
		parent::__construct($container);
		$this->template_engine = $this->container->getService('twig_templating');
	}

	public function index()
	{
		$this->template_engine->assign('user_name', 'Marcos');
		return Response::create($this->template_engine->render('hello.twig'), Response::HTTP_ACCEPTED, ['Content-Type: text/html']);
	}
}