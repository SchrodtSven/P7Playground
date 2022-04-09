<?php declare(strict_types=1);
/**
 *  StringClass
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Type
 * @version 0.1
 */


namespace P7Playground\Type;
use P7Playground\Type\ArrayClass;

class StringClass
{
    public function __construct(private string $content = '')
    {
        return $this;
    }

    public static function f(string $content = '')
    {
        return new self($content);
        
    }

    public function toUpper()
    {
        $this->content = mb_strtoupper($this->content);
        return $this;
    }

    public function toLower()
    {
        $this->content = mb_strtolower($this->content);
        return $this;
    }

    public function upperFirst()
    {
        $this->content = ucfirst($this->content);
        return $this;
    }

    public function lowerFirst()
    {
        $this->content = lcfirst($this->content);
        return $this;
    }
    public function concat(StringClass $string): StringClass
    {
        $this->content .= (string) $string;
        return $this;
    }

    public function length(): int
    {
        return mb_strlen($this->content);
    }

    public function split(int $length = 1): ArrayClass
    {
        return ArrayClass::f(mb_str_split($this->content, $length));
    }

    public function splitBy(string $separator = ' '): ArrayClass
    {
        return ArrayClass::f(explode($separator, $this->content));
    }

    public function count(): int
    {
        return $this->length();
    }

    public function contains(string $needle): bool
    {
        return str_contains($this->content, $needle);
    }

    public function startsWith(string $needle): bool
    {
        return str_starts_with($this->content, $needle);
    }


    public function endsWith(string $needle): bool
    {
        return str_ends_with($this->content, $needle);
    }

    public function border(string $text = '|'): StringClass
    {
        return $this->embrace($text, $text);
        return $this;
    }

    public function embrace(string $start, string $end): StringClass
    {
        return $this->prepend($start)->append($end);
    }
    public function prepend(string $text): StringClass
    {
        $this->content = $text . $this->content;
        return $this;
    }


    public function append(string $text): StringClass
    {
        $this->content .= $text;
        return $this;
    }

    public function __toString(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return StringClass
     */
    public function setContent(string $content): StringClass
    {
        $this->content = $content;
        return $this;
    }

    public function replace(string $needle, string $replacement = ''): StringClass
    {
        $this->content = str_replace($needle, $replacement, $this->content);
        return $this;
    }

    public function replaceArray(array $needle, array $replacement): StringClass
    {

        if (count($replacement) == 1) {
            $replacement = $replacement[0];
        }
        $this->content = str_replace($needle, $replacement, $this->content);
        return $this;
    }

    public function pregReplace(string $regEx, string $replace): StringClass
    {
        $this->content = preg_replace($regEx, $replace, $this->content);
        return $this;
    }

    public function trim(): StringClass
    {
        $this->content = trim($this->content);
        return $this;
    }


    /**
     * Quoting special characters for usage within PCRE-functions
     *
     * @param string $delimiter
     * @return $this
     */
    public function pregQuote(string $delimiter = "/"): StringClass
    {
        $this->content = preg_quote($this->content, $delimiter);
        return $this;
    }

    public function padLeft(int $length, string $padString = ' '): StringClass
    {
        return $this->pad($length, $padString, \STR_PAD_LEFT);
    }

    public function padRight(int $length, string $padString = ' '): StringClass
    {
        return $this->pad($length, $padString, \STR_PAD_RIGHT);
    }

    public function padBoth(int $length, string $padString = ' '): StringClass
    {
        return $this->pad($length, $padString, \STR_PAD_BOTH);
    }


    public function pad(int $length, string $padString = ' ', int $padType = \STR_PAD_RIGHT): StringClass
    {
        $this->content = str_pad($this->content, $length, $padString, $padType);
        return $this;
    }



    public function mirror(): StringClass
    {
        $this->content = strrev($this->content);
        return $this;
    }

    public function stripHtml(): StringClass
    {
        $this->content = strip_tags($this->content);
        return $this;
    }

    public function countWords(): int
    {
        return str_word_count($this->content);
    }

    public function camelize(string $separator = '_'): StringClass
    {
        $a = $this->splitBy($separator);
        $a->walk(function (string &$item) {
            $item = ucfirst(strtolower($item)
            );
        }
        );

        $this->content = lcfirst($a->join('')->getContent());
        return $this;
    }

    public function grabBetween(string $start, string $end, $greedy = true): ?StringClass
    {
        $pos1 = strpos($this->content, $start);
        $pos2 = strpos($this->content, $end);
        if($pos1===false || $pos2===false) {
            return null;
        }
        if($greedy) {
            $pos1++;
            $pos2--;
        }
       return new StringClass(substr($this->content, $pos1, $pos2-$pos1+1));
    }

    public function castAs(string $type = 'int'): int|float
    {
        return match ($type) {
            'int' => (int)$this->content,
            'float' => (float)$this->content,
            default => throw new \Exception('Unexpected value'),
        };
    }
}