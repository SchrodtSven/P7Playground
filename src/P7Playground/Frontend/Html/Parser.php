<?php declare(strict_types=1);
/**
 * Parser -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Html
 * @version 0.1
 */


namespace P7Playground\Frontend\Html;
use P7Playground\Frontend\Html\Meta\Entity\TidyConfig;
use tidy;
use P7Playground\Type\StringClass;

class Parser
{
    /**
     * Tidy instance
     * @see https://api.html-tidy.org/
     * @var tidy
     */
    private tidy $tidy;

    /**
     * Tidy configuration
     *
     * @var TidyConfig
     */
    private TidyConfig $tidyCfg;

    /**
     * Parsed content
     *
     * @var StringClass
     */
    private StringClass $parsed;

    private string $encoding = 'utf8';

    /**
     * Constructor function
     *
     * @param string $html
     * @param TidyConfig|null $config
     */
    public function __construct(private string $html, ?TidyConfig $config)
    {
        if(!class_exists('\tidy')) exit('Extension tidy needed');

        // No config set -> use defaults
        if(is_null($config)) {
            $this->tidyCfg = new TidyConfig();
            $this->tidyCfg->setIndent(true)->setOutputXhtml(false)->setWrap(120)->setTidyMark(false);
        } else {
            $this->tidyCfg = $config;
        }

        $this->init();
    }

    /**
     * Static factory building instance with given file name and read its contents
     *
     * @param string $file
     * @return Parser
     */
    public static function fromFile(string $file): Parser
    {
       return new self(file_get_contents($file));
    }

    /**
     * Init configuration  and pre parse
     *
     * @return void
     */
    public function init(): void
    {
        $this->tidy = new tidy();
        $this->tidy->parseString($this->html, $this->tidyCfg->getConfig(), $this->encoding);
        $this->tidy->cleanRepair();
    }

    /**
     * Getting content between two tags - e.G:
     *
     * $foo->grabBetweenTags('title', '\/title)
     *
     * @param string $tagOne
     * @param string $tagTwo
     * @return Parser
     */
    public function grabBetweenTags(string $tagOne, string $tagTwo): Parser
    {

        preg_match_all(
            "=<{$tagOne}[^>]*>(.*)<{$tagTwo}>=siU",(string) $this->tidy, $a);

        $this->parsed = new StringClass($a[1][0]);
        return $this;
    }

    /**
     * Strip html elements from content
     *
     * @return $this
     */
    public function stripHtml():Parser
    {
        $this->parsed->stripHtml();
        return $this;
    }

    /**
     * Get parsed content
     *
     * @return StringClass
     */
    public function get(): StringClass
    {
        return $this->parsed;
    }

    /**
     * Get tidy instance
     *
     * @return tidy
     */
    public function getTidy()
    {
        return $this->tidy;
    }

    /**
     * Original html content
     *
     * @return string
     */
    public function getHtml(): string
    {
        return $this->html;
    }

    /**
     * Set new html content
     *
     * @param string $html
     * @return Parser
     */
    public function setHtml(string $html): Parser
    {
        $this->html = $html;
        $this->init();
        return $this;
    }


}