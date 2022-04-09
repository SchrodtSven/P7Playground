<?php declare(strict_types=1);
/**
 *  Foundation
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Config
 * @version 0.1
 */


namespace P7Playground\Config;


class Foundation
{
    private string $basePath;

    private string $lang = 'DE-de';

    private string $dateFormat = 'Y-m-d H.i:s';

    public function __construct()
    {
        $this->basePath = implode( DIRECTORY_SEPARATOR, [getcwd(), 'src', 'P7Playground']);
    }

    /**
     * @return false|string
     */
    public function getBasePath(): bool|string
    {
        return $this->basePath;
    }

    /**
     * @param false|string $basePath
     * @return Foundation
     */
    public function setBasePath(bool|string $basePath): Foundation
    {
        $this->basePath = $basePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getLang(): string
    {
        return $this->lang;
    }

    /**
     * @param string $lang
     * @return Foundation
     */
    public function setLang(string $lang): Foundation
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * @return string
     */
    public function getDateFormat(): string
    {
        return $this->dateFormat;
    }

    /**
     * @param string $dateFormat
     * @return Foundation
     */
    public function setDateFormat(string $dateFormat): Foundation
    {
        $this->dateFormat = $dateFormat;
        return $this;
    }


}