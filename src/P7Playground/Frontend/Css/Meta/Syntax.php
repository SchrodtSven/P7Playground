<?php declare(strict_types=1);
/**
 * Syntax -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Css\Meta
 * @version 0.1
 */


namespace P7Playground\Frontend\Css\Meta;


class Syntax
{

    /**
     * @var array|string[]
     */
    private array $functions = [
        'attr()', 'calc()', 'circle()', 'ellipse()', 'hsl()', 'hsla()', 'inset()', 'linear-gradient()',
        'matrix()', 'matrix3d()', 'polygon()', 'radial-gradient()', 'repeating-linear-gradient()',
        'repeating-radial-gradient()', 'rgb()', 'rgba()', 'rotate()', 'rotate3d()', 'rotateX()',
        'rotateY()', 'rotateZ()', 'scale()', 'scale3d()', 'scaleX()', 'scaleY()', 'scaleZ()', 'skew()',
        'skewX()', 'skewY()', 'translate()', 'translate3d()', 'translateX()', 'translateY()', 'translateZ()'
    ];

    /**
     * @var array|string[]
     */
    private array $pseudoClasses = [
        '::after', '::before', '::first-letter', '::first-line', '::placeholder', '::selection', ':active', ':blank',
        ':checked', ':default', ':dir()', ':disabled', ':empty', ':enabled', ':first', ':first-child', ':first-of-type',
        ':focus', ':fullscreen', ':hover', ':in-range', ':indeterminate', ':invalid', ':lang()', ':last-child',
        ':last-of-type', ':left', ':link', ':not()', ':nth-child()', ':nth-last-child()', ':nth-last-of-type()',
        ':nth-of-type()', ':only-child', ':only-of-type', ':optional', ':out-of-range', ':read-only', ':read-write',
        ':required', ':right', ':root', ':scope', ':target', ':valid', ':visited', 'content'
    ];

    /**
     * @var array|string[]
     */
    private array $dataTypes = [
        '<angle>', '<basic-shape>', '<blend-mode>', '<color>', '<frequency>', '<gradient>',
        '<image>', '<integer>', '<length>', '<number>', '<percentage>', '<position>', '<ratio>', '<resolution>',
        '<string>', '<time>', '<timing-function>', '<url>', '<user-ident>', 'inherit', 'initial', 'revert', 'unset'
    ];

    /**
     * @var array|string[]
     * @FIXME #hint: strpos(1) == @
     */
    private array $rules = [
        'charset','document','font-face','import','keyframes','media', 'namespace','page','supports'
    ];

    /**
     * @var array|string[]
     */
    private array $concepts = [
        'Attribute Selectors','Combinators','Counters','Custom Properties','Flexbox','Grid', 'Media Queries','Subgrid'
    ];

    /**
     * @return array
     */
    public function getFunctions(): array
    {
        return $this->functions;
    }

    /**
     * @return array
     */
    public function getPseudoClasses(): array
    {
        return $this->pseudoClasses;
    }

    /**
     * @return array
     */
    public function getDataTypes(): array
    {
        return $this->dataTypes;
    }

    /**
     * @return array
     */
    public function getRules(): array
    {
        return $this->rules;
    }

    /**
     * @return array
     */
    public function getConcepts(): array
    {
        return $this->concepts;
    }





}