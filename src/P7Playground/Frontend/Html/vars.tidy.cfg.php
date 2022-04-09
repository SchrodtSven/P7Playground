<?php

$a = [];
foreach (file('tidy.cfg') as $line ) {
$sep = '	';
$tmp =  (new StringClass($line))->trim()->splitBy($sep);
$tmp->set(4, $tmp->get(0));
$tmp->set(0, StringClass::f($tmp->get(0))->camelize('-')->upperFirst());
$a [] = $tmp;
}

foreach($a as $i) {
$type = $i->get(1);
$dft = $i->get(2);

$var = (string)$i->get(0)->lowerFirst();
$key = $i->get(4);


echo "

/**
* @var $type
*/
private {$type} \${$var}";

if($dft === '-') {
echo ';' . PHP_EOL . PHP_EOL;
} else {

if($type ==='bool') {
$dft = ($dft =='yes') ? 'true' : 'false';
}
if($type ==='string') {
$dft = "'{$dft}'";
}

echo " = {$dft};\n\n";
}

}