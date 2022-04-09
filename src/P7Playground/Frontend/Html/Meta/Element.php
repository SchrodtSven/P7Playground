<?php declare(strict_types=1);
/**
 * Element -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Html\Meta
 * @version 0.1
 */


namespace P7Playground\Frontend\Html\Meta;


class Element
{
    private static array $globalAttributes = [
        'accesskey', 'autocapitalize', 'autofocus', 'class', 'contenteditable',
        'contextmenu', 'data-*', 'dir', 'draggable', 'enterkeyhint',
        'hidden', 'id', 'inputmode', 'is', 'itemid', 'itemprop', 'itemref',
        'itemscope', 'itemtype', 'lang', 'nonce', 'part', 'slot',
        'spellcheck', 'style', 'tabindex', 'title'
    ];

    public static function isGlobalAttribute(string $attribute): bool
    {
        return in_array($attribute, self::$globalAttributes);
    }

    public static function getGlobalAttributes(): array
    {
        return self::$globalAttributes;
    }


}