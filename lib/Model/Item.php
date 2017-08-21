<?php
/**
 * Item
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
 * Item Class Doc Comment
 *
 * @category    Class
 * @package     CollingMedia\Infusionsoft
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Item implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'next_item_id' => 'int',
        'previous_item_id' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'next_item_id' => 'int64',
        'previous_item_id' => 'int64',
        'type' => null
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
        'id' => 'id',
        'name' => 'name',
        'next_item_id' => 'next_item_id',
        'previous_item_id' => 'previous_item_id',
        'type' => 'type'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'next_item_id' => 'setNextItemId',
        'previous_item_id' => 'setPreviousItemId',
        'type' => 'setType'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'next_item_id' => 'getNextItemId',
        'previous_item_id' => 'getPreviousItemId',
        'type' => 'getType'
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

    const TYPE_NULL = 'NULL';
    const TYPE_START = 'Start';
    const TYPE_WAIT = 'Wait';
    const TYPE_DELAY_TIMER = 'DelayTimer';
    const TYPE_CONTACT_TIMER = 'ContactTimer';
    const TYPE_DATE_TIMER = 'DateTimer';
    const TYPE_EMAIL = 'Email';
    const TYPE_BARD_EMAIL = 'BardEmail';
    const TYPE_EMAIL_CONFIRM = 'EmailConfirm';
    const TYPE_VOICE = 'Voice';
    const TYPE_FAX = 'Fax';
    const TYPE_LETTER = 'Letter';
    const TYPE_TAG = 'Tag';
    const TYPE_OPPORTUNITY = 'Opportunity';
    const TYPE_NOTE = 'Note';
    const TYPE_TASK = 'Task';
    const TYPE_APPOINTMENT = 'Appointment';
    const TYPE_ASSIGN_OWNER = 'AssignOwner';
    const TYPE_FIELD_VALUE = 'FieldValue';
    const TYPE_FULFILLMENT = 'Fulfillment';
    const TYPE_HTTP = 'Http';
    const TYPE_CUSTOMER_HUB = 'CustomerHub';
    const TYPE_ACTION_SET = 'ActionSet';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NULL,
            self::TYPE_START,
            self::TYPE_WAIT,
            self::TYPE_DELAY_TIMER,
            self::TYPE_CONTACT_TIMER,
            self::TYPE_DATE_TIMER,
            self::TYPE_EMAIL,
            self::TYPE_BARD_EMAIL,
            self::TYPE_EMAIL_CONFIRM,
            self::TYPE_VOICE,
            self::TYPE_FAX,
            self::TYPE_LETTER,
            self::TYPE_TAG,
            self::TYPE_OPPORTUNITY,
            self::TYPE_NOTE,
            self::TYPE_TASK,
            self::TYPE_APPOINTMENT,
            self::TYPE_ASSIGN_OWNER,
            self::TYPE_FIELD_VALUE,
            self::TYPE_FULFILLMENT,
            self::TYPE_HTTP,
            self::TYPE_CUSTOMER_HUB,
            self::TYPE_ACTION_SET,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['next_item_id'] = isset($data['next_item_id']) ? $data['next_item_id'] : null;
        $this->container['previous_item_id'] = isset($data['previous_item_id']) ? $data['previous_item_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets next_item_id
     * @return int
     */
    public function getNextItemId()
    {
        return $this->container['next_item_id'];
    }

    /**
     * Sets next_item_id
     * @param int $next_item_id
     * @return $this
     */
    public function setNextItemId($next_item_id)
    {
        $this->container['next_item_id'] = $next_item_id;

        return $this;
    }

    /**
     * Gets previous_item_id
     * @return int
     */
    public function getPreviousItemId()
    {
        return $this->container['previous_item_id'];
    }

    /**
     * Sets previous_item_id
     * @param int $previous_item_id
     * @return $this
     */
    public function setPreviousItemId($previous_item_id)
    {
        $this->container['previous_item_id'] = $previous_item_id;

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


