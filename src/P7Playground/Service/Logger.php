<?php declare(strict_types=1);
/**
 * Logger -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Service
 * @version 0.1
 */


namespace P7Playground\Service;


class Logger
{
    public const LEVEL_DEBUG = 'debug';
    public const LEVEL_INFO = 'info';
    public const LEVEL_WARN = 'warn';
    public const LEVEL_ERROR = 'error';
    public const LEVEL_CRITICAL = 'critical';

    public const TIMESTAMP_FORMAT = 'Y-m-d H:i:s';

    private string $logfilePrefix = '/var/log/php/log_';
    private string $filePattern = 'Ymd';
    private string $suffix = '.log';

    public function debug(string $message): bool
    {
        return $this->log($message, self::LEVEL_DEBUG);
    }

    public function info(string $message): bool
    {
        return $this->log($message, self::LEVEL_INFO);
    }

    public function warn(string $message): bool
    {
        return $this->log($message, self::LEVEL_WARN);
    }

    public function error(string $message): bool
    {
        return $this->log($message, self::LEVEL_ERROR);
    }

    public function critical(string $message): bool
    {
        return $this->log($message, self::LEVEL_CRITICAL);
    }

    public function log(string $message, string $level = self::LEVEL_DEBUG)
    {
        return error_log($this->sanitizeMessage($message, $level), 3, $this->getLogfile());
    }

    private function getLogfile(): string
    {
        return implode('', [$this->logfilePrefix, date($this->filePattern), $this->suffix]);
    }

    public function sanitizeMessage(string $message, string $level): string
    {
        return implode(' - ', [date(self::TIMESTAMP_FORMAT), $level, $message, PHP_EOL]);
    }
}