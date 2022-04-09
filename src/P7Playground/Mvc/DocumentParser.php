<?php declare(strict_types=1);
/**
 *  TplParser
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Mvc
 * @version 0.1
 */


namespace P7Playground\Mvc;

use P7Playground\Config\Foundation;
use P7Playground\Mvc\TplParser;

class DocumentParser extends TplParser
{
    private const TPL_DOCLET_SFX = '/Tpl/Doclet/';

    private const TPL_DOCUMENT_SFX = '/Tpl/Document/';

    private string $document = 'Html5_raw.phtml';

    private string $title = 'Test::';

    private string $path2Doc;

    public function __construct(private Foundation $config)
    {
        parent::__construct($config);
        $this->path2Doc = $this->config->getBasePath() . self::TPL_DOCUMENT_SFX . $this->document;
    }

    /**
     * @return string
     */
    public function getDocument(): string
    {
        return $this->document;
    }

    /**
     * @param string $document
     * @return TplParser
     */
    public function setDoc(string $document): TplParser
    {
        $this->document = $document;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return TplParser
     */
    public function setTitle(string $title): TplParser
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function render(): string
    {
        return parent::renderTemplate($this->path2Doc);
    }

}