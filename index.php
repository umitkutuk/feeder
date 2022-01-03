<?php
require_once 'vendor/autoload.php';

use Feeder\FeederService\Adapters\AAdapter;
use Feeder\FeederService\Adapter;

$ac = new AAdapter();
$a = new Adapter($ac);

var_dump($a->getData());

