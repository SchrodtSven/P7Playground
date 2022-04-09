<?php
chdir('../');
require_once 'functions.php';
require_once 'src/P7Playground/Autoload.php';
//require_once 'src/P7Playground/Frontend/Css/Meta/functions.txt'
use P7Playground\Type\StringClass;
use P7Playground\Frontend\Css\AttributeSelector;

$as = new AttributeSelector();
$providerList = [];
$meth = (new ReflectionClass($as::class))->getMethods();
foreach ($meth as $m) {
    $tst = new StringClass('testAttributeSelector') . ucfirst($m->name);
    $provider = 'getDataFor' . $tst;


    $testSig = "/**
     * @dataProvider $provider
     *
     * @param string \$a
     * @param string \$b
     * @param string \$c
     * @return void
     */
    public function $tst(string \$a, string \$b, string \$c): void
    {
        \$this->assertTrue();
    }
    
    ";

    echo $testSig;

    $providerList[] = "
    /**
     * @return array
     */
     public function $provider(): array
     {
    
      }";

}

echo implode(PHP_EOL.PHP_EOL, $providerList);