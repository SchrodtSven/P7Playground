<?php declare(strict_types=1);
/**
 * Input -
 * @author Sven Schrodt<sven@schrodt.club>
 * @package P7Playground\Frontend\Html\Meta
 * @version 0.1
 */


namespace P7Playground\Frontend\Html\Meta;
use P7Playground\Type\ArrayClass;
use P7Playground\Frontend\Html\Meta\Entity\InputAttribute;
use P7Playground\Frontend\Html\Meta\Element as MetaElement;

class Input
{
    private static array $attributes = [
        ['accept', 'file', 'Hint for expected file type in file upload controls'],
        ['alt', 'image', 'alt attribute for the image type. Required for accessibility'],
        ['autocomplete', 'all', 'Hint for form autofill feature'],
        ['autofocus', 'all', 'Automatically focus the form control when the page is loaded'],
        ['capture', 'file', 'Media capture input method in file upload controls'],
        ['checked', 'radio, checkbox', 'Whether the command or control is checked'],
        ['dirname', 'text, search', 'Name of form field to use for sending the element`s directionality in form submission'],
        ['disabled', 'all', 'Whether the form control is disabled'],
        ['form', 'all', 'Associates the control with a form element'],
        ['formaction', 'image, submit', 'URL to use for form submission'],
        ['formenctype', 'image, submit', 'Form data set encoding type to use for form submission'],
        ['formmethod', 'image, submit', 'HTTP method to use for form submission'],
        ['formnovalidate', 'image, submit', 'Bypass form control validation for form submission'],
        ['formtarget', 'image, submit', 'Browsing context for form submission'],
        ['height', 'image', 'Same as height attribute for <img>; vertical dimension'],
        ['list', 'almost all', 'Value of the id attribute of the <datalist> of autocomplete options'],
        ['max', 'numeric types', 'Maximum value'],
        ['maxlength', 'password, search, tel, text, url', 'Maximum length (number of characters) of value'],
        ['min', 'numeric types', 'Minimum value'],
        ['minlength', 'password, search, tel, text, url', 'Minimum length (number of characters) of value'],
        ['multiple', 'email, file', 'Boolean. Whether to allow multiple values'],
        ['name', 'all', 'Name of the form control. Submitted with the form as part of a name/value pair.'],
        ['pattern', 'password, text, tel', 'Pattern the value must match to be valid'],
        ['placeholder', 'password, search, tel, text, url', 'Text that appears in the form control when it has no value set'],
        ['readonly', 'almost all', 'Boolean. The value is not editable'],
        ['required', 'almost all', 'Boolean. A value is required or must be check for the form to be submittable'],
        ['size', 'email, password, tel, text, url', 'Size of the control'],
        ['src', 'image', 'Same as src attribute for <img>; address of image resource'],
        ['step', 'numeric types', 'Incremental values that are valid.'],
        ['type', 'all', 'Type of form control'],
        ['value', 'all', 'The initial value of the control.'],
        ['width', 'image', 'Same as width attribute for <img>']
    ];

    private static ?ArrayClass $attributeItems = null;

    /**
     * Getting list of attributes
     *
     * @param bool
     * @return ArrayClass
     */
    public static function getAttributeItems(bool $withGlobal = false): ArrayClass
    {
        if(is_null(self::$attributeItems)) {
            self::$attributeItems = new ArrayClass();
            foreach (self::$attributes as $line) {
                $entity = new InputAttribute($line[0],
                    $line[2],
                    $line[1]);
                self::$attributeItems->setByKey($line[0], $entity);
            }
            if($withGlobal) {
                foreach(MetaElement::getGlobalAttributes() as $line) {
                    $entity = new InputAttribute($line,
                        'Global attribute');
                    self::$attributeItems->setByKey($line, $entity);
                }
            }
        }
        return self::$attributeItems;
    }

}