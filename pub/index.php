<?php declare(strict_types=1);
chdir('../');

require_once 'src/P7Playground/Autoload.php';
use P7Playground\Frontend\Css\AttributeSelector;

$as = new AttributeSelector();

var_dump($as);
