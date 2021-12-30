<?php

namespace Feeder\FeederService;

use Feeder\FeederService\Adapters\AdapterInterface;

class Adapter
{
	/**
	 * AdapterInterface $adaptee
	 */
	private $adaptee;

	public function __construct(AdapterInterface $adaptee) 
	{
        $this->adaptee = $adaptee;
    }

    public function getData()
    {
    	return $this->adaptee->getData();
    }
}