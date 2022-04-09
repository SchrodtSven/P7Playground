<?php declare(strict_types=1);
/**
 * FileParser -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Util
 * @version 0.1
 */


namespace P7Playground\Util;
use P7Playground\Type\ArrayClass;
use P7Playground\Type\StringClass;

class FileParser
{
    private const ERROR_FILE_NOT_EXISTING = 'The file %s does not exist!';

    private ArrayClass $fileContent;

    private ArrayClass $parsedContent;

    private ArrayClass $fileWalkerCallables;

    public function __construct(private string $file, bool $autoTrim = true)
    {
        if(!file_exists($this->file)) {
            throw new \InvalidArgumentException(
              sprintf(self::ERROR_FILE_NOT_EXISTING, $this->file)
            );
        }

        $this->fileContent = ArrayClass::f(file($this->file));
        if($autoTrim) {
            $this->trimLines();
        }

        $this->parsedContent = ArrayClass::f([]);
    }

    public static function f(string $file, bool $autoTrim = true)
    {
        return new self($file, $autoTrim);
    }

    public function trimLines(): FileParser
    {
        $this->fileContent->walk(
            callback: function(&$item) {
                $item = StringClass::f($item)->trim();
            }
        );
        return $this;
    }

    /**
     * @return ArrayClass|StringClass
     */
    public function getFileContent(): ArrayClass|StringClass
    {
        return $this->fileContent;
    }

    /**
     * @param ArrayClass|StringClass $fileContent
     * @return FileParser
     */
    public function setFileContent(ArrayClass|StringClass $fileContent): FileParser
    {
        $this->fileContent = $fileContent;
        return $this;
    }

    /**
     * @return ArrayClass
     */
    public function getFileWalkerCallables(): ArrayClass
    {
        return $this->fileWalkerCallables;
    }

    /**
     * @param ArrayClass $fileWalkerCallables
     * @return FileParser
     */
    public function setFileWalkerCallables(ArrayClass $fileWalkerCallables): FileParser
    {
        $this->fileWalkerCallables = $fileWalkerCallables;
        return $this;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @param string $file
     * @return FileParser
     */
    public function setFile(string $file): FileParser
    {
        $this->file = $file;
        return $this;
    }

    /**
     * @return ArrayClass|StringClass
     */
    public function getParsedContent(): ArrayClass|StringClass
    {
        return $this->parsedContent;
    }

   public function walkParsed(callable $callback)
   {
       array_walk($this->parsedContent, $callback);
   }



    public function splitLinesBy(string $glue = "\t"): FileParser
    {
        $this->fileContent->walk(
            callback: function($item) use($glue) {
                    $this->parsedContent->push($item->splitBy($glue));
            }
        );
        return $this;
    }

}