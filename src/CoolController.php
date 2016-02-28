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
		$my_pdo_service = $this->container->getService('pdo_client');

		$my_pdo_service->insert('User', ['email'=> 'velozmarkdrea@gmail.com', 'name' => 'Marcos']);
		$result_set = $my_pdo_service->select('User', ['name' => 'Marcos']);
		$this->template_engine->assign('user', $result_set[0]);

		return Response::create($this->template_engine->render('hello.tpl'), Response::HTTP_ACCEPTED, ['Content-Type: text/html']);
	}

	public function pam()
	{
		return Response::create('Que pim que pam', Response::HTTP_ACCEPTED, ['Content-Type: text/html']);
	}
}