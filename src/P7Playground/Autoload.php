<?php declare(strict_types=1);
/**
 *  Autoload
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground
 * @version 0.1
 */


namespace P7Playground;

class Autoload
{


    public const NAMESPACE = 'P7Playground';

    public const LIB_PREFIX = 'src/';

    public const ERROR_FILE_MISSING = 'The class %s was not found -  file %s does not exists';



    public function registerAutoloader()
    {
        /**
         * Registering project specific auto loading
         */
        spl_autoload_register(callback: function ($className) {

            // Check if namespace of class to be instantiated belongs to us
            if (str_starts_with($className,  Autoload::NAMESPACE)) {
                $file = self::LIB_PREFIX. str_replace('\\', '/', $className) . '.php';

                // Check if destination class file exists  and include it, if so - do not throw \E*, because of AL chain!
                // @see https://www.php-fig.org/psr/psr-4/#2-specification : "4. Autoloader implementations MUST NOT throw exceptions,
                // MUST NOT raise errors of any level, and SHOULD NOT return a value."
                if (file_exists($file)) {
                    require_once $file;
                }
            }
        });
    }

    public static function run()
    {
        return new self();
    }
}

Autoload::run()->registerAutoloader();

