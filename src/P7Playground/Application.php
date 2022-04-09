<?php declare(strict_types=1);
/**
 * Application
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground
 * @version 0.1
 */


namespace P7Playground;

use P7Playground\Config\Foundation;
use P7Playground\Mvc\DocumentParser;
use P7Playground\Frontend\Html\Element;

class Application
{

    private DocumentParser $documentParser;

    public function __construct(private Foundation $config)
    {
        $this->documentParser = new DocumentParser($this->config);
    }

    public static function run(): Application
    {
            return new self(
                new Foundation()
            );
    }

    /**
     * @return Foundation
     */
    public function getConfig(): Foundation
    {
        return $this->config;
    }

    /**
     * @param Foundation $config
     * @return Application
     */
    public function setConfig(Foundation $config): Application
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return DocumentParser
     */
    public function getParser(): DocumentParser
    {
        return $this->parser;
    }

    /**
     * @param DocumentParser $parser
     * @return Application
     */
    public function setParser(DocumentParser $parser): Application
    {
        $this->parser = $parser;
        return $this;
    }

    /**
     * @return DocumentParser
     */
    public function getDocumentParser(): DocumentParser
    {
        return $this->documentParser;
    }

    /**
     * @param DocumentParser $documentParser
     * @return Application
     */
    public function setDocumentParser(DocumentParser $documentParser): Application
    {
        $this->documentParser = $documentParser;
        return $this;
    }



}