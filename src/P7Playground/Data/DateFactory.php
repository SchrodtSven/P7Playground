<?php declare(strict_types=1);
/**
 * DateFactory -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Data
 * @version 0.1
 */


namespace P7Playground\Data;
use DateTime;
use DateInterval;
use DateTimeZone;

class DateFactory
{
    /**
     *
     */
    protected const DEFAULT_ATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * @var bool
     */
    protected bool $foo;

    public static function fromString(
        string $format = self::DEFAULT_ATE_FORMAT,
        string $dateTime='', ?DateTimeZone $timeZone = null
    ): DateTime
    {
        if(empty($dateTime)) {
            $dateTime=date($format);
        }
        return DateTime::createFromFormat($format,  $dateTime, $timeZone);
    }
}