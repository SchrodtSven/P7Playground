<?php declare(strict_types=1);
/**
 * Factory -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Data\Xml
 * @version 0.1
 */


namespace P7Playground\Data\Xml;
use DOMDocument;
use DOMElement;

class Factory
{
    public static function getDocument(string $root = 'root')
    {
        $doc = new DOMDocument('1.0', 'utf-8');
        $root = new DOMElement($root);
        $doc->appendChild($root);
        return $doc;
    }
}