<?php
/**
 * P7TypeHelper
 *
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7TypeHelper
 * @since 2022-03-28
 * @link https://github.com/svenschrodt/PetP7TypeHelperite
 * @link https://travis-ci.org/svenschrodt/P7TypeHelper
 * @license https://github.com/svenschrodt/P7TypeHelper/blob/master/LICENSE.md
 * @copyright Sven Schrodt<sven@schrodt.club>
 * @version 0.1
 */

namespace P7Playground\Frontend\Helper;

use P7Playground\Frontend\Html\Element;
use DOMException;

class DataList
{

    /**
     * @var Element
     */
    private Element $dataList;

    /**
     * @param string $id
     * @param array $data
     * @param array $attributes
     * @throws DOMException
     */
    public function __construct(private string $id, private array $data, private array $attributes = [])
    {
        $this->dataList = new Element('datalist', null, $this->attributes);
        $this->dataList->setAttribute('id', $this->id);
        if(count($this->data)) {
            foreach ($this->data as $value) {
                $option = new Element('option');
                $option->setAttribute('value', (string) $value);
                $this->dataList->appendChild($option);
            }
        }
    }

    public function __toString(): string
    {
        return (string) $this->dataList;
    }
}