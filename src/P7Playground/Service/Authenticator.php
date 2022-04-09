<?php declare(strict_types=1);
/**
 * Authenticator -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Service
 * @version 0.1
 */


namespace P7Playground\Service;
use P7Playground\Service\Logger;

class Authenticator
{

    public function __construct(private Logger $logger = new Logger())
    {

    }
}