<?php declare(strict_types=1);
/**
 * Container -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Data
 * @version 0.1
 */


namespace P7Playground\Data;


class ArrayAccessContainer implements \ArrayAccess
{
    private array $data = [];

    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->data[] = $value;
        } else {
            $this->data[$offset] = $value;
        }
    }

    public function offsetExists($offset): bool
    {
        return isset($this->data[$offset]);
    }

    public function offsetUnset($offset): void
    {
        unset($this->data[$offset]);
    }

    public function offsetGet($offset): mixed
    {
        return $this->data[$offset] ?? null;
    }

}