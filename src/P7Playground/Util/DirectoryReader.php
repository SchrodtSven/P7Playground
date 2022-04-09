<?php declare(strict_types=1);
/**
 * DirectoryReader -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Util
 * @version 0.1
 */


namespace P7Playground\Util;
use P7Playground\Type\StringClass;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

class DirectoryReader
{
    private RecursiveIteratorIterator $iterator;

    public function __construct(string $path)
    {
        $directory = new \RecursiveDirectoryIterator($path);
        $this->iterator = new \RecursiveIteratorIterator($directory);

        return $this;
    }

    public function filterByFileType(string $type = 'php'): array
    {
        $files = [];
        foreach ($this->iterator  as $info) {

            if (str_ends_with($info->getPathname(), '.' . $type)) {
                $files[] = $info;
            }
        }
        return $files;
    }
}