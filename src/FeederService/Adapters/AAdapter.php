<?php

namespace Feeder\FeederService\Adepters;

require_once dirname(__DIR__).'/vendor/autoload.php';

class AAdapter implements AdapterInterface
{
	public function getData()
	{
		return [
			'id' => 123
		];
	}
}