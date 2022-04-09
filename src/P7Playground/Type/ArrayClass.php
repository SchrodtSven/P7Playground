<?php declare(strict_types=1);
/**
 * ArrayClass -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Type
 * @version 0.1
 */


namespace P7Playground\Type;

use P7Playground\Type\Operational\ArrayFilter;
use P7Playground\Type\StringClass;

class ArrayClass
{
    private array $content = [];

    public function __construct(array $content = [])
    {
        if (count($content)) {
            $this->content = $content;
        }
    }

    /**
     * Factory method
     *
     * @param string $content
     * @return StringClass
     */
    public static function f(array $content = []): ArrayClass
    {
        return new self($content);
    }


    public static function factoryFromFile(string $filename)
    {
        if (!file_exists($filename)) {
            throw new \InvalidArgumentException('404!!');
        }
        $tmp = new self(file($filename));
        $tmp->walk(function (&$item) {

            $item = (string)StringClass::f($item)->trim()->replace("\n", '');

        });
        return $tmp;
    }

    public function push($item): ArrayClass
    {
        $this->content[] = $item;
        return $this;
    }

    public function pop(): mixed
    {
        return array_pop($this->content);
    }

    public function shift(): mixed
    {
        return array_shift($this->content);
    }

    public function unshift(): ArrayClass
    {
        array_unshift($this->content);
        return $this;
    }

    public function getContent(): array
    {
        return $this->content;
    }

    public function getInstance(): ArrayClass
    {
        return $this;
    }

    public function get(int $index): mixed
    {
        return $this->content[$index] ?? null;
    }

    public function set(int $index, mixed $value): ArrayClass
    {
        $this->content[$index] = $value;
        return $this;
    }

    public function getKeys(): array
    {
        return array_keys($this->content);
    }

    public function hasKey(string $key): bool
    {
        return array_key_exists($key, $this->content);
    }

    public function setByKey(string $key, $value)
    {
        $this->content[$key] = $value;
        return $this;
    }

    public function getByKey(string $key)
    {
        return $this->content[$key] ?? null;
    }

    public function join(string $separator): StringClass
    {
        return StringClass::f(implode($separator, $this->content));
    }

    public function hasIndex(int $index): bool
    {
        return array_key_exists($index, $this->content);
    }

    public function contains($value): bool
    {
        return in_array($value, $this->content);
    }

    public function getAsJson(): string
    {
        return json_encode($this->content);
    }

    public function count(): int
    {
        return count($this->content);
    }


    public function walk(callable $callback)
    {
        $tmp = $this->getContent();
        array_walk($tmp, $callback);
        $this->content = $tmp;
    }

    public function map(callable $callback)
    {
        $tmp = $this->getContent();
        return array_walk($tmp, $callback);
    }

    // The following functions implement interface \Iterator making it possible
    // to iterate container objects with foreach

    /**
     * Resetting pointer to first array element
     *
     * @return ArrayClass
     */
    public function rewind(): void
    {
        reset($this->content);
    }

    /**
     * Getting current element
     *
     */
    public function current(): mixed
    {
        return current($this->content);
    }

    /**
     * Getting key of current element
     * @return string
     */
    public function key(): mixed
    {
        return key($this->content);
    }

    /**
     * @return mixed|void
     */
    public function next(): void
    {
        next($this->content);
    }

    /**
     * Returning if current element is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
        return ($this->current() !== false);
    }

    public function cleanUpFirstIfEmpty(): ArrayClass
    {
        if (!count($this)) {
            return $this;
        } elseif (empty($this->get(0))) {
            $this->shift();
        }
        return $this;
    }


    public function pad(int $length, mixed $value)
    {
        $this->content = array_pad($this->content, $length, $value);
        return $this;
    }

    public function unique(): ArrayClass
    {
        $this->content = array_unique($this->content);
        return $this;
    }

    public function copy(): ArrayClass
    {
        return clone $this;
    }

    public function sort(): ArrayClass
    {
        //@TODO -> diff. sorting
        sort($this->content);
        return $this;
    }

    public function trim()
    {
        $this->content = array_map('trim', $this->getContent());
        return $this;
    }

    public function getFilter(): ArrayFilter
    {
        return new ArrayFilter($this);
    }

    public function merge(ArrayClass $data): ArrayClass
    {
        $this->mergeInto($data->getContent());
        return $this;
    }

    public function mergeInto(array $data) : ArrayClass
    {
        $this->content = array_merge_recursive(
            $this->getContent(),
            $data
        );
        return $this;
    }
}