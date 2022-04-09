<?php declare(strict_types=1);
/**
 * UserStatus -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Service\Entity
 * @version 0.1
 */


namespace P7Playground\Service\Entity;


enum UserStatus: string
{
    case Pending = 'P';
    case Active = 'A';
    case Suspended = 'S';
    case CanceledByUser = 'C';

    public function label(): string
    {
        return match($this) {
            self::Pending => 'Pending',
            self::Active => 'Active',
            self::Suspended => 'Suspended',
            self::CanceledByUser => 'Canceled by user',
        };
    }
}
