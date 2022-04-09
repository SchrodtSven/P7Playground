<?php declare(strict_types=1);
/**
 * Select -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Helper
 * @version 0.1
 */


namespace P7Playground\Frontend\Helper;
use P7Playground\Frontend\Html\Element;

class Select
{
    private Element $select;

    public function __construct(private string $name, private array $data, private string $selected, private array $attributes = [])
    {
        $this->select = new Element('select', null, $this->attributes );
        $this->select->setAttribute('name', $this->name);
        if(count($this->data)) {
            foreach ($this->data as $key => $value) {
                $option = new Element('option', $value);
                $option->setAttribute('value', $key);
                if($key === $this->selected) {
                    $option->setAttribute('selected', 'selected');
                }
                $this->select->appendChild($option);
            }
        }
    }

    public function __toString(): string
    {
        return (string) $this->select;
    }

}