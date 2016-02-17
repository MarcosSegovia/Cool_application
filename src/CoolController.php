<?php

namespace CoolApplication;

use Coolframework\Component\Response\Response;

class CoolController
{
	public function index()
	{
		return new Response('index from CoolController !');
	}

	public function pam()
	{
		return new Response('Que pim que pam');
	}
}