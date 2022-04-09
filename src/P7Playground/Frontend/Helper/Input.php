<?php declare(strict_types=1);
/**
 * Input
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Helper
 * @version 0.1
 */


namespace P7Playground\Frontend\Helper;

use P7Playground\Frontend\Html\Element;

class Input
{
    private Element $input;
    private ?Element $label = null;

    public function __construct(private string $name, private string $value = '', private string $type = 'text', string $label = '')
    {
        $this->input = new Element('input');
        $this->input->setAttribute('name', $name)
            ->setAttribute('type', $this->type)
            ->setAttribute('value', $value);
        if (!empty($label)) {
            $this->label = new Element('label', $label);
        }
    }


    public function setLabel(string $label): Input
    {
        $this->label = new Element('label', $label);
        return $this;
    }

    private function addLabel()
    {
        $label = $this->label;
        $label->appendChild($this->input);
        return $label;
    }

    public function getAttribute(string $name): ?string
    {
        return $this->input->getAttribute($name) ?? null;
    }

    public function setAttribute(string $name, string $value): Input
    {
        $this->input->setAttribute($name, $value);
        return $this;
    }

    public function __toString(): string
    {
        if (!is_null($this->label)) {
            return (string)$this->addLabel();
        }
        return $this->input->render();
    }

}