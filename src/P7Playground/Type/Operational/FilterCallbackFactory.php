<?php declare(strict_types=1);
/**
 * FilterCallbackFactory -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Type\Operational
 * @version 0.1
 */


namespace P7Playground\Type\Operational;

use Closure;

class FilterCallbackFactory
{
    /**
     * @param string $attribute
     * @param string $like
     * @return Closure
     */
    public static function getByAttributeLike(string $attribute, string $like): Closure
    {
        return function ($item) use ($attribute, $like) {
            if (str_contains($item[$attribute], $like)) {
                return true;
            }
            return false;
        };
    }


    public static function getByStringFunctionSimple(string $attribute, string $like, callable $function): Closure
    {
        return function ($item) use ($attribute, $like, $function) {
            if ($function($item[$attribute], $like)) {
                return true;
            }
            return false;
        };
    }

}