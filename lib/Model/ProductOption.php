<?php
/**
 * ProductOption
 *
 * PHP version 5
 *
 * @category Class
 * @package  CollingMedia\Infusionsoft
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infusionsoft
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: V1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CollingMedia\Infusionsoft\Model;

use \ArrayAccess;

/**
 * ProductOption Class Doc Comment
 *
 * @category    Class
 * @package     CollingMedia\Infusionsoft
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductOption implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductOption';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allow_spaces' => 'bool',
        'can_contain_character' => 'bool',
        'can_contain_number' => 'bool',
        'can_end_with_character' => 'bool',
        'can_end_with_number' => 'bool',
        'can_start_with_character' => 'bool',
        'can_start_with_number' => 'bool',
        'display_index' => 'int',
        'id' => 'int',
        'label' => 'string',
        'max_chars' => 'int',
        'min_chars' => 'int',
        'name' => 'string',
        'required' => 'bool',
        'text_message' => 'string',
        'type' => 'string',
        'values' => '\CollingMedia\Infusionsoft\Model\InlineResponse20012Values[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allow_spaces' => null,
        'can_contain_character' => null,
        'can_contain_number' => null,
        'can_end_with_character' => null,
        'can_end_with_number' => null,
        'can_start_with_character' => null,
        'can_start_with_number' => null,
        'display_index' => 'int32',
        'id' => 'int64',
        'label' => null,
        'max_chars' => 'int32',
        'min_chars' => 'int32',
        'name' => null,
        'required' => null,
        'text_message' => null,
        'type' => null,
        'values' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'allow_spaces' => 'allow_spaces',
        'can_contain_character' => 'can_contain_character',
        'can_contain_number' => 'can_contain_number',
        'can_end_with_character' => 'can_end_with_character',
        'can_end_with_number' => 'can_end_with_number',
        'can_start_with_character' => 'can_start_with_character',
        'can_start_with_number' => 'can_start_with_number',
        'display_index' => 'display_index',
        'id' => 'id',
        'label' => 'label',
        'max_chars' => 'max_chars',
        'min_chars' => 'min_chars',
        'name' => 'name',
        'required' => 'required',
        'text_message' => 'text_message',
        'type' => 'type',
        'values' => 'values'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'allow_spaces' => 'setAllowSpaces',
        'can_contain_character' => 'setCanContainCharacter',
        'can_contain_number' => 'setCanContainNumber',
        'can_end_with_character' => 'setCanEndWithCharacter',
        'can_end_with_number' => 'setCanEndWithNumber',
        'can_start_with_character' => 'setCanStartWithCharacter',
        'can_start_with_number' => 'setCanStartWithNumber',
        'display_index' => 'setDisplayIndex',
        'id' => 'setId',
        'label' => 'setLabel',
        'max_chars' => 'setMaxChars',
        'min_chars' => 'setMinChars',
        'name' => 'setName',
        'required' => 'setRequired',
        'text_message' => 'setTextMessage',
        'type' => 'setType',
        'values' => 'setValues'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'allow_spaces' => 'getAllowSpaces',
        'can_contain_character' => 'getCanContainCharacter',
        'can_contain_number' => 'getCanContainNumber',
        'can_end_with_character' => 'getCanEndWithCharacter',
        'can_end_with_number' => 'getCanEndWithNumber',
        'can_start_with_character' => 'getCanStartWithCharacter',
        'can_start_with_number' => 'getCanStartWithNumber',
        'display_index' => 'getDisplayIndex',
        'id' => 'getId',
        'label' => 'getLabel',
        'max_chars' => 'getMaxChars',
        'min_chars' => 'getMinChars',
        'name' => 'getName',
        'required' => 'getRequired',
        'text_message' => 'getTextMessage',
        'type' => 'getType',
        'values' => 'getValues'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_FIXED_LIST = 'FixedList';
    const TYPE_VARIABLE = 'Variable';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_FIXED_LIST,
            self::TYPE_VARIABLE,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['allow_spaces'] = isset($data['allow_spaces']) ? $data['allow_spaces'] : null;
        $this->container['can_contain_character'] = isset($data['can_contain_character']) ? $data['can_contain_character'] : null;
        $this->container['can_contain_number'] = isset($data['can_contain_number']) ? $data['can_contain_number'] : null;
        $this->container['can_end_with_character'] = isset($data['can_end_with_character']) ? $data['can_end_with_character'] : null;
        $this->container['can_end_with_number'] = isset($data['can_end_with_number']) ? $data['can_end_with_number'] : null;
        $this->container['can_start_with_character'] = isset($data['can_start_with_character']) ? $data['can_start_with_character'] : null;
        $this->container['can_start_with_number'] = isset($data['can_start_with_number']) ? $data['can_start_with_number'] : null;
        $this->container['display_index'] = isset($data['display_index']) ? $data['display_index'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['max_chars'] = isset($data['max_chars']) ? $data['max_chars'] : null;
        $this->container['min_chars'] = isset($data['min_chars']) ? $data['min_chars'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['text_message'] = isset($data['text_message']) ? $data['text_message'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets allow_spaces
     * @return bool
     */
    public function getAllowSpaces()
    {
        return $this->container['allow_spaces'];
    }

    /**
     * Sets allow_spaces
     * @param bool $allow_spaces
     * @return $this
     */
    public function setAllowSpaces($allow_spaces)
    {
        $this->container['allow_spaces'] = $allow_spaces;

        return $this;
    }

    /**
     * Gets can_contain_character
     * @return bool
     */
    public function getCanContainCharacter()
    {
        return $this->container['can_contain_character'];
    }

    /**
     * Sets can_contain_character
     * @param bool $can_contain_character
     * @return $this
     */
    public function setCanContainCharacter($can_contain_character)
    {
        $this->container['can_contain_character'] = $can_contain_character;

        return $this;
    }

    /**
     * Gets can_contain_number
     * @return bool
     */
    public function getCanContainNumber()
    {
        return $this->container['can_contain_number'];
    }

    /**
     * Sets can_contain_number
     * @param bool $can_contain_number
     * @return $this
     */
    public function setCanContainNumber($can_contain_number)
    {
        $this->container['can_contain_number'] = $can_contain_number;

        return $this;
    }

    /**
     * Gets can_end_with_character
     * @return bool
     */
    public function getCanEndWithCharacter()
    {
        return $this->container['can_end_with_character'];
    }

    /**
     * Sets can_end_with_character
     * @param bool $can_end_with_character
     * @return $this
     */
    public function setCanEndWithCharacter($can_end_with_character)
    {
        $this->container['can_end_with_character'] = $can_end_with_character;

        return $this;
    }

    /**
     * Gets can_end_with_number
     * @return bool
     */
    public function getCanEndWithNumber()
    {
        return $this->container['can_end_with_number'];
    }

    /**
     * Sets can_end_with_number
     * @param bool $can_end_with_number
     * @return $this
     */
    public function setCanEndWithNumber($can_end_with_number)
    {
        $this->container['can_end_with_number'] = $can_end_with_number;

        return $this;
    }

    /**
     * Gets can_start_with_character
     * @return bool
     */
    public function getCanStartWithCharacter()
    {
        return $this->container['can_start_with_character'];
    }

    /**
     * Sets can_start_with_character
     * @param bool $can_start_with_character
     * @return $this
     */
    public function setCanStartWithCharacter($can_start_with_character)
    {
        $this->container['can_start_with_character'] = $can_start_with_character;

        return $this;
    }

    /**
     * Gets can_start_with_number
     * @return bool
     */
    public function getCanStartWithNumber()
    {
        return $this->container['can_start_with_number'];
    }

    /**
     * Sets can_start_with_number
     * @param bool $can_start_with_number
     * @return $this
     */
    public function setCanStartWithNumber($can_start_with_number)
    {
        $this->container['can_start_with_number'] = $can_start_with_number;

        return $this;
    }

    /**
     * Gets display_index
     * @return int
     */
    public function getDisplayIndex()
    {
        return $this->container['display_index'];
    }

    /**
     * Sets display_index
     * @param int $display_index
     * @return $this
     */
    public function setDisplayIndex($display_index)
    {
        $this->container['display_index'] = $display_index;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets label
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets max_chars
     * @return int
     */
    public function getMaxChars()
    {
        return $this->container['max_chars'];
    }

    /**
     * Sets max_chars
     * @param int $max_chars
     * @return $this
     */
    public function setMaxChars($max_chars)
    {
        $this->container['max_chars'] = $max_chars;

        return $this;
    }

    /**
     * Gets min_chars
     * @return int
     */
    public function getMinChars()
    {
        return $this->container['min_chars'];
    }

    /**
     * Sets min_chars
     * @param int $min_chars
     * @return $this
     */
    public function setMinChars($min_chars)
    {
        $this->container['min_chars'] = $min_chars;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets required
     * @return bool
     */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
     * Sets required
     * @param bool $required
     * @return $this
     */
    public function setRequired($required)
    {
        $this->container['required'] = $required;

        return $this;
    }

    /**
     * Gets text_message
     * @return string
     */
    public function getTextMessage()
    {
        return $this->container['text_message'];
    }

    /**
     * Sets text_message
     * @param string $text_message
     * @return $this
     */
    public function setTextMessage($text_message)
    {
        $this->container['text_message'] = $text_message;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets values
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20012Values[]
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse20012Values[] $values
     * @return $this
     */
    public function setValues($values)
    {
        $this->container['values'] = $values;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CollingMedia\Infusionsoft\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CollingMedia\Infusionsoft\ObjectSerializer::sanitizeForSerialization($this));
    }
}


