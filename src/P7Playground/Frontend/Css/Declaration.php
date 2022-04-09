<?php declare(strict_types=1);
/**
 * Declaration - class representing a single CSS declaration <property>:<value> - e.g:
 *
 * font-family:Comic sans
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Css
 * @version 0.1
 */


namespace P7Playground\Frontend\Css;


use P7Playground\Type\StringClass;

class Declaration
{
    /**
     * @var StringClass
     */
    private StringClass $property;

    /**
     * @var StringClass
     */
    private StringClass $value;

    /**
     * @param string $property
     * @param string $value
     */
    public function __construct(string $property, string $value)
    {
        $this->property = new StringClass ($property);
        $this->value = new StringClass($value);
    }

    /**
     * @return string
     */
    public function getProperty(): StringClass
    {
        return $this->property;
    }

    /**
     * @param string $property
     * @return Declaration
     */
    public function setProperty(string $property): Declaration
    {
        $this->property = $property;
        return $this;
    }

    /**
     * @return StringClass
     */
    public function getValue(): StringClass
    {
        return $this->value;
    }

    /**
     * @param StringClass $value
     * @return Declaration
     */
    public function setValue(StringClass $value): Declaration
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return sprintf('%s:%s', (string) $this->property, (string) $this->value);
    }
}