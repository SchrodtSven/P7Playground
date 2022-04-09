<?php declare(strict_types=1);
/**
 *  ${NAME}
 * @author Sven Schrodt<sven@schrodt.club>
 *  * @version 0.1
 */
chdir('../');
require_once 'src/P7Playground/Autoload.php';
require_once 'functions.php';
use P7Playground\Frontend\Html\Meta\Input as MetaInput;

$foo = MetaInput::getAttributeItems(true);
echo $foo->getByKey('size')->getDescription();
nl();
echo $foo->getByKey('size')->getForType();
