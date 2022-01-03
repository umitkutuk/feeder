<?php

namespace Feeder\FeederService\Adapters;

interface AdapterInterface 
{
	public function getData();

    public function AAdapterWrapper(array $data): array;
}