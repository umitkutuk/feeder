<?php

namespace Feeder\FeederService\Adapters;

class AAdapter implements AdapterInterface
{
	public function getData()
	{
        //A adapter'in base URL idir ve env dosyasından alınmalıdır.
        $AUrl = __DIR__.'/../../Data/A.json';

        return $this->AAdapterWrapper(json_decode(file_get_contents($AUrl), true));
	}

    public function AAdapterWrapper(array $data): array
    {
        $wrapper = [];
        foreach ($data as $item) {
            $wrapper[] = [
                'id' => $item['ID'],
                'name' => $item['NAME'],
                'price' => $item['PRICE'],
                'category' => $item['CATEGORY']
            ];
        }

        return $wrapper;
    }
}