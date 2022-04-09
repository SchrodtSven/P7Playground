<?php declare(strict_types=1);
/**
 * TplParser
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Mvc
 * @version 0.1
 */


namespace P7Playground\Mvc;
use P7Playground\Config\Foundation;
use P7Playground\Frontend\Html\Element;

class TplParser
{

    private string | Element $content = 'Foo!';


    public function __construct(private Foundation $config)
    {

    }


    /**
     * @return string
     */
    public function getContent(): string|Element
    {
        return $this->content;
    }

    /**
     * @param string|Element $content
     * @return TplParser
     */
    public function setContent(string|Element $content): TplParser
    {
        $this->content = $content;
        return $this;
    }

    public function renderTemplate(string $path2Tpl)
    {
        ob_start();
        require_once $path2Tpl;
        $content =  ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function __toString(): string
    {
        return $this->render();
    }

}