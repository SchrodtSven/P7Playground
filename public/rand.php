<?php
$sum = [];
for($i=0;$i<100;$i++) {
    $a = rand(0,1000);
    $b= rand(0,1000);
    $c = $a + $b;
    $sum[] = "[{$a}, {$b}, {$c}]";
}
echo '[
';
echo implode(','. PHP_EOL, $sum);

echo "
];";
