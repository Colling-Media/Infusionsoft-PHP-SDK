<?php
/**
 * CustomFieldMetaData
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
 * CustomFieldMetaData Class Doc Comment
 *
 * @category    Class
 * @package     CollingMedia\Infusionsoft
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class CustomFieldMetaData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CustomFieldMetaData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'field_type' => 'string',
        'id' => 'int',
        'label' => 'string',
        'options' => '\CollingMedia\Infusionsoft\Model\ContactCustomFieldsOptions[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'field_type' => null,
        'id' => 'int64',
        'label' => null,
        'options' => null
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
        'field_type' => 'field_type',
        'id' => 'id',
        'label' => 'label',
        'options' => 'options'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'field_type' => 'setFieldType',
        'id' => 'setId',
        'label' => 'setLabel',
        'options' => 'setOptions'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'field_type' => 'getFieldType',
        'id' => 'getId',
        'label' => 'getLabel',
        'options' => 'getOptions'
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

    const FIELD_TYPE_CURRENCY = 'Currency';
    const FIELD_TYPE_DATE = 'Date';
    const FIELD_TYPE_DATE_TIME = 'DateTime';
    const FIELD_TYPE_DAY_OF_WEEK = 'DayOfWeek';
    const FIELD_TYPE_DRILLDOWN = 'Drilldown';
    const FIELD_TYPE_EMAIL = 'Email';
    const FIELD_TYPE_MONTH = 'Month';
    const FIELD_TYPE_LIST_BOX = 'ListBox';
    const FIELD_TYPE_NAME = 'Name';
    const FIELD_TYPE_WHOLE_NUMBER = 'WholeNumber';
    const FIELD_TYPE_DECIMAL_NUMBER = 'DecimalNumber';
    const FIELD_TYPE_PERCENT = 'Percent';
    const FIELD_TYPE_PHONE_NUMBER = 'PhoneNumber';
    const FIELD_TYPE_RADIO = 'Radio';
    const FIELD_TYPE_DROPDOWN = 'Dropdown';
    const FIELD_TYPE_SOCIAL_SECURITY_NUMBER = 'SocialSecurityNumber';
    const FIELD_TYPE_STATE = 'State';
    const FIELD_TYPE_TEXT = 'Text';
    const FIELD_TYPE_TEXT_AREA = 'TextArea';
    const FIELD_TYPE_USER = 'User';
    const FIELD_TYPE_USER_LIST_BOX = 'UserListBox';
    const FIELD_TYPE_WEBSITE = 'Website';
    const FIELD_TYPE_YEAR = 'Year';
    const FIELD_TYPE_YES_NO = 'YesNo';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getFieldTypeAllowableValues()
    {
        return [
            self::FIELD_TYPE_CURRENCY,
            self::FIELD_TYPE_DATE,
            self::FIELD_TYPE_DATE_TIME,
            self::FIELD_TYPE_DAY_OF_WEEK,
            self::FIELD_TYPE_DRILLDOWN,
            self::FIELD_TYPE_EMAIL,
            self::FIELD_TYPE_MONTH,
            self::FIELD_TYPE_LIST_BOX,
            self::FIELD_TYPE_NAME,
            self::FIELD_TYPE_WHOLE_NUMBER,
            self::FIELD_TYPE_DECIMAL_NUMBER,
            self::FIELD_TYPE_PERCENT,
            self::FIELD_TYPE_PHONE_NUMBER,
            self::FIELD_TYPE_RADIO,
            self::FIELD_TYPE_DROPDOWN,
            self::FIELD_TYPE_SOCIAL_SECURITY_NUMBER,
            self::FIELD_TYPE_STATE,
            self::FIELD_TYPE_TEXT,
            self::FIELD_TYPE_TEXT_AREA,
            self::FIELD_TYPE_USER,
            self::FIELD_TYPE_USER_LIST_BOX,
            self::FIELD_TYPE_WEBSITE,
            self::FIELD_TYPE_YEAR,
            self::FIELD_TYPE_YES_NO,
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
        $this->container['field_type'] = isset($data['field_type']) ? $data['field_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getFieldTypeAllowableValues();
        if (!in_array($this->container['field_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'field_type', must be one of '%s'",
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

        $allowed_values = $this->getFieldTypeAllowableValues();
        if (!in_array($this->container['field_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets field_type
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     * @param string $field_type
     * @return $this
     */
    public function setFieldType($field_type)
    {
        $allowed_values = $this->getFieldTypeAllowableValues();
        if (!is_null($field_type) && !in_array($field_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'field_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['field_type'] = $field_type;

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
     * Gets options
     * @return \CollingMedia\Infusionsoft\Model\ContactCustomFieldsOptions[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     * @param \CollingMedia\Infusionsoft\Model\ContactCustomFieldsOptions[] $options
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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


