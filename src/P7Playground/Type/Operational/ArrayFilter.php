<?php declare(strict_types=1);
/**
 * ArrayFilter -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Type\Operational
 * @version 0.1
 */


namespace P7Playground\Type\Operational;

use P7Playground\Type\ArrayClass;
use P7Playground\Data\StringFilter;

class ArrayFilter
{
    private ArrayClass $filtered;

    public function __construct(private ArrayClass $content)
    {
        $this->filtered = new ArrayClass([]);
    }

    /**
     * @param callable $callback
     * @return $this
     */
    public function byCallable(callable $callback): ArrayFilter
    {
        $this->filtered = new ArrayClass(
            array_filter(
                $this->content->getContent(),
                $callback
            )
        );
        return $this;
    }

    /**
     * @return ArrayClass
     */
    public function getFiltered(): ArrayClass
    {
        return $this->filtered;
    }

    /**
     * @param ArrayClass $filtered
     * @return ArrayFilter
     */
    public function setFiltered(ArrayClass $filtered): ArrayFilter
    {
        $this->filtered = $filtered;
        return $this;
    }

    /**
     * @return ArrayClass
     */
    public function getContent(): ArrayClass
    {
        return $this->content;
    }

    /**
     * @param ArrayClass $content
     * @return ArrayFilter
     */
    public function setContent(ArrayClass $content): ArrayFilter
    {
        $this->content = $content;
        return $this;
    }



    /**
     * Filtering array elements being only whitespace
     *
     * @return $this
     */
    public function notWhitespaceOnly(): ArrayFilter
    {
        $this->notMatchesRegEx(StringFilter::WHITESPACE_ONLY);
        return $this;
    }

    public function matchesRegEx(string $regEx): ArrayFilter
    {
        $this->genericMatchesRegEx($regEx);
        return $this;
    }

    public function notMatchesRegEx(string $regEx): ArrayFilter
    {
        $this->genericMatchesRegEx($regEx, true);
        return $this;
    }


    private function genericMatchesRegEx(string $regEx, bool $inverse = false): ArrayFilter
    {
        $this->filter(
            function ($item) use ($regEx, $inverse) {
                if (preg_match($regEx, $item)) {
                    return !$inverse;
                }
                return $inverse;
            }
        );
        return $this;
    }



    private function filter(callable $callback)
    {
        $tmp = array_filter(
            $this->content->getContent(),
            $callback
        );

        $this->content = new ArrayClass($tmp);

    }
}