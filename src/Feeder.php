<?php

namespace Feeder;

require_once dirname(__DIR__).'/vendor/autoload.php';

use Feeder\FeederService\Adepters\AAdapter;
use Feeder\FeederService\Adapter;

$feeder = new Adapter(new AAdapter());


var_dump($feeder->getData());
