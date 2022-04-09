<?php declare(strict_types=1);
/**
 * InputAttribute -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Html\Meta\Entity
 * @version 0.1
 */


namespace P7Playground\Frontend\Html\Meta\Entity;


class InputAttribute
{

    public function __construct(private string $name, private string $description, private string $forType='')
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return InputAttribute
     */
    public function setName(string $name): InputAttribute
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getForType(): string
    {
        return $this->forType;
    }

    /**
     * @param string $forType
     * @return InputAttribute
     */
    public function setForType(string $forType): InputAttribute
    {
        $this->forType = $forType;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return InputAttribute
     */
    public function setDescription(string $description): InputAttribute
    {
        $this->description = $description;
        return $this;
    }

    public function __toString(): string
    {
        return implode(' :: ', [$this->name, $this->description, $this->forType]);
    }

}