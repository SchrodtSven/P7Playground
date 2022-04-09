<?php declare(strict_types=1);
/**
 * RuleSet -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Css
 * @version 0.1
 *
 * @FIXME - read https://tympanus.net/codrops/css_reference/
 */


namespace P7Playground\Frontend\Css;

use P7Playground\Type\StringClass;
use P7Playground\Type\ArrayClass;
use P7Playground\Frontend\Css\Declaration;

class RuleSet
{
    private ArrayClass $selectors;
    private ArrayClass $declarations;

    public function __construct()
    {
        $this->selectors = new ArrayClass();
        $this->declarations = new ArrayClass();
    }

    public function addSelector(string $selector): RuleSet
    {
        $this->selectors->push($selector);
        return $this;
    }

    public function addDeclaration(Declaration $declaration): RuleSet
    {
        $this->declarations->push($declaration);
        return $this;
    }

    public function getSelectorList(): string
    {
        return (string) $this->selectors->join(', ');
    }

    public function getDeclarationList(): string
    {
        return (string) $this->declarations->join(';' . PHP_EOL);
    }

    public function __toString(): string
    {
        return sprintf(
            '%s {%s%s%s}%s',
            $this->getSelectorList(),
            PHP_EOL,
            $this->getDeclarationList(),
            PHP_EOL,
            PHP_EOL
        );
    }
}