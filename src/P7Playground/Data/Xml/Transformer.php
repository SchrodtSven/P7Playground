<?php declare(strict_types=1);
/**
 * Transformer -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Data\Xml
 * @version 0.1
 */


namespace P7Playground\Data\Xml;

use DOMDocument;
use DOMElement;

class Transformer
{
    public function toXml(array $data, string $root): string
    {

        $doc = new DOMDocument();
        // we want a nice output
        $doc->formatOutput = true;
        $root = new DOMElement($root);
        $doc->appendChild($root);
        foreach ($data as $item) {

            foreach ($item as $k => $v) {

                $root->appendChild(new DOMElement($k, htmlspecialchars($v, ENT_XML1, 'UTF-8')));
            }

        }

        // $doc->save('bofh_episodes.xml');
        return $doc->saveXML();
    }
}