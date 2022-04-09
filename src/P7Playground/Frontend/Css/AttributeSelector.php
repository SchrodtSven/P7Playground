<?php declare(strict_types=1);
/**
 * AttributeSelector
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Css
 * @version 0.1
 */


namespace P7Playground\Frontend\Css;


class AttributeSelector
{

    /**
     * [attrOPERATORvalue] generic attribute selector
     *@var string [%s%s%s]
     */
    public const SELECTOR_PATTERN_GENERIC = '[%s%s%s]';

    /**
     * [attr] Represents elements with an attribute name of attr.
     *
     *@var string [%s]
     */
    public const SELECTOR_PATTERN_HAS_ATTRIBUTE = '[%s]';

    /**
     * [attr=value] Represents elements with an attribute name of attr whose value is exactly value.
     *
     *@var string [%s=%s]
     */
    public const SELECTOR_PATTERN_ATTR_EQ_VALUE = '[%s=%s]';

    /**
     * [attr~=value] Represents elements with an attribute name of attr whose value is a whitespace-separated list of words, one of which is exactly value.
     *
     *@var string [%s~=%s]
     */
    public const SELECTOR_PATTERN_ATTR_CONTAINS_VALUE = '[%s~=%s]';

    /**
     * [attr|=value] Represents elements with an attribute name of attr whose value can be exactly value or can begin with value immediately followed by a hyphen, - (U+002D). It is often used for language subcode matches.
     *
     *@var string [%s|=%s]
     */
    public const SELECTOR_PATTERN_ATTR_VALUE_BEGINS_HYPHEN = '[%s|=%s]';

    /**
     * [attr^=value] Represents elements with an attribute name of attr whose value is prefixed (preceded) by value.
     *
     *@var string [%s^=%s]
     */
    public const SELECTOR_PATTERN_ATTR_VALUE_BEGINS = '[%s^=%s]';

    /**
     * [attr$=value] Represents elements with an attribute name of attr whose value is suffixed (followed) by value.
     *
     *@var string [%s$=%s]
     */
    public const SELECTOR_PATTERN_ATTR_VALUE_ENDS = '[%s$=%s]';

    /**
     * [attr*=value] Represents elements with an attribute name of attr whose value contains at least one occurrence of value within the string.
     *
     *@var string [%s*=%s]
     */
    public const SELECTOR_PATTERN_ATTR_VALUE_CONTAINS_LEAST = '[%s*=%s]';


    /**
     * Selector for existing $attribute
     * @param string $attribute
     * @return string
     */
    public function has(string $attribute): string
    {
        return sprintf(self::SELECTOR_PATTERN_HAS_ATTRIBUTE, $attribute);
    }

    /**
     * Selector for existing $attribute with value equal to $value
     * @param string $attribute
     * @param string $value
     * @return string
     */
    public function equals(string $attribute, string $value): string
    {
        return sprintf(self::SELECTOR_PATTERN_ATTR_EQ_VALUE, $attribute, $value);
    }

    /**
     * Selector for existing $attribute with value containing $value
     *
     * @param string $attribute
     * @param string $value
     * @return string
     */
    public function contains(string $attribute, string $value): string
    {
        return sprintf(self::SELECTOR_PATTERN_ATTR_CONTAINS_VALUE, $attribute, $value);
    }

    /**
     * Selector for existing $attribute with value starting with $value
     *
     * @param string $attribute
     * @param string $value
     * @return string
     */
    public function begins(string $attribute, string $value): string
    {
        return sprintf(self::SELECTOR_PATTERN_ATTR_VALUE_BEGINS, $attribute, $value);
    }

    /**
     * Selector for existing $attribute with value ending with $value
     *
     * @param string $attribute
     * @param string $value
     * @return string
     */
    public function ends(string $attribute, string $value): string
    {
        return sprintf(self::SELECTOR_PATTERN_ATTR_VALUE_ENDS, $attribute, $value);
    }

    /**
     * Generic selector
     *
     * @param string $attribute
     * @param string $operator
     * @param string $value
     * @return string
     */
    public function generic(string $attribute, string $operator, string $value): string
    {
        return sprintf(self::SELECTOR_PATTERN_GENERIC, $attribute, $value);
    }

}