<?php
/**
 * InlineResponse2008Opportunities
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
 * InlineResponse2008Opportunities Class Doc Comment
 *
 * @category    Class
 * @package     CollingMedia\Infusionsoft
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2008Opportunities implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_8_opportunities';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact' => '\CollingMedia\Infusionsoft\Model\InlineResponse2008Contact',
        'date_created' => '\DateTime',
        'estimated_close_date' => '\DateTime',
        'id' => 'int',
        'include_in_forecast' => 'int',
        'last_updated' => '\DateTime',
        'next_action_date' => '\DateTime',
        'next_action_notes' => 'string',
        'opportunity_notes' => 'string',
        'opportunity_title' => 'string',
        'projected_revenue_high' => 'double',
        'projected_revenue_low' => 'double',
        'stage' => '\CollingMedia\Infusionsoft\Model\InlineResponse2008Stage',
        'user' => '\CollingMedia\Infusionsoft\Model\InlineResponse2008User'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact' => null,
        'date_created' => 'date-time',
        'estimated_close_date' => 'date-time',
        'id' => 'int64',
        'include_in_forecast' => 'int32',
        'last_updated' => 'date-time',
        'next_action_date' => 'date-time',
        'next_action_notes' => null,
        'opportunity_notes' => null,
        'opportunity_title' => null,
        'projected_revenue_high' => 'double',
        'projected_revenue_low' => 'double',
        'stage' => null,
        'user' => null
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
        'contact' => 'contact',
        'date_created' => 'date_created',
        'estimated_close_date' => 'estimated_close_date',
        'id' => 'id',
        'include_in_forecast' => 'include_in_forecast',
        'last_updated' => 'last_updated',
        'next_action_date' => 'next_action_date',
        'next_action_notes' => 'next_action_notes',
        'opportunity_notes' => 'opportunity_notes',
        'opportunity_title' => 'opportunity_title',
        'projected_revenue_high' => 'projected_revenue_high',
        'projected_revenue_low' => 'projected_revenue_low',
        'stage' => 'stage',
        'user' => 'user'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
        'date_created' => 'setDateCreated',
        'estimated_close_date' => 'setEstimatedCloseDate',
        'id' => 'setId',
        'include_in_forecast' => 'setIncludeInForecast',
        'last_updated' => 'setLastUpdated',
        'next_action_date' => 'setNextActionDate',
        'next_action_notes' => 'setNextActionNotes',
        'opportunity_notes' => 'setOpportunityNotes',
        'opportunity_title' => 'setOpportunityTitle',
        'projected_revenue_high' => 'setProjectedRevenueHigh',
        'projected_revenue_low' => 'setProjectedRevenueLow',
        'stage' => 'setStage',
        'user' => 'setUser'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
        'date_created' => 'getDateCreated',
        'estimated_close_date' => 'getEstimatedCloseDate',
        'id' => 'getId',
        'include_in_forecast' => 'getIncludeInForecast',
        'last_updated' => 'getLastUpdated',
        'next_action_date' => 'getNextActionDate',
        'next_action_notes' => 'getNextActionNotes',
        'opportunity_notes' => 'getOpportunityNotes',
        'opportunity_title' => 'getOpportunityTitle',
        'projected_revenue_high' => 'getProjectedRevenueHigh',
        'projected_revenue_low' => 'getProjectedRevenueLow',
        'stage' => 'getStage',
        'user' => 'getUser'
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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['estimated_close_date'] = isset($data['estimated_close_date']) ? $data['estimated_close_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['include_in_forecast'] = isset($data['include_in_forecast']) ? $data['include_in_forecast'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['next_action_date'] = isset($data['next_action_date']) ? $data['next_action_date'] : null;
        $this->container['next_action_notes'] = isset($data['next_action_notes']) ? $data['next_action_notes'] : null;
        $this->container['opportunity_notes'] = isset($data['opportunity_notes']) ? $data['opportunity_notes'] : null;
        $this->container['opportunity_title'] = isset($data['opportunity_title']) ? $data['opportunity_title'] : null;
        $this->container['projected_revenue_high'] = isset($data['projected_revenue_high']) ? $data['projected_revenue_high'] : null;
        $this->container['projected_revenue_low'] = isset($data['projected_revenue_low']) ? $data['projected_revenue_low'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['opportunity_title'] === null) {
            $invalid_properties[] = "'opportunity_title' can't be null";
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

        if ($this->container['opportunity_title'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets contact
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2008Contact $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets date_created
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['date_created'];
    }

    /**
     * Sets date_created
     * @param \DateTime $date_created
     * @return $this
     */
    public function setDateCreated($date_created)
    {
        $this->container['date_created'] = $date_created;

        return $this;
    }

    /**
     * Gets estimated_close_date
     * @return \DateTime
     */
    public function getEstimatedCloseDate()
    {
        return $this->container['estimated_close_date'];
    }

    /**
     * Sets estimated_close_date
     * @param \DateTime $estimated_close_date
     * @return $this
     */
    public function setEstimatedCloseDate($estimated_close_date)
    {
        $this->container['estimated_close_date'] = $estimated_close_date;

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
     * Gets include_in_forecast
     * @return int
     */
    public function getIncludeInForecast()
    {
        return $this->container['include_in_forecast'];
    }

    /**
     * Sets include_in_forecast
     * @param int $include_in_forecast
     * @return $this
     */
    public function setIncludeInForecast($include_in_forecast)
    {
        $this->container['include_in_forecast'] = $include_in_forecast;

        return $this;
    }

    /**
     * Gets last_updated
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     * @param \DateTime $last_updated
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets next_action_date
     * @return \DateTime
     */
    public function getNextActionDate()
    {
        return $this->container['next_action_date'];
    }

    /**
     * Sets next_action_date
     * @param \DateTime $next_action_date
     * @return $this
     */
    public function setNextActionDate($next_action_date)
    {
        $this->container['next_action_date'] = $next_action_date;

        return $this;
    }

    /**
     * Gets next_action_notes
     * @return string
     */
    public function getNextActionNotes()
    {
        return $this->container['next_action_notes'];
    }

    /**
     * Sets next_action_notes
     * @param string $next_action_notes
     * @return $this
     */
    public function setNextActionNotes($next_action_notes)
    {
        $this->container['next_action_notes'] = $next_action_notes;

        return $this;
    }

    /**
     * Gets opportunity_notes
     * @return string
     */
    public function getOpportunityNotes()
    {
        return $this->container['opportunity_notes'];
    }

    /**
     * Sets opportunity_notes
     * @param string $opportunity_notes
     * @return $this
     */
    public function setOpportunityNotes($opportunity_notes)
    {
        $this->container['opportunity_notes'] = $opportunity_notes;

        return $this;
    }

    /**
     * Gets opportunity_title
     * @return string
     */
    public function getOpportunityTitle()
    {
        return $this->container['opportunity_title'];
    }

    /**
     * Sets opportunity_title
     * @param string $opportunity_title
     * @return $this
     */
    public function setOpportunityTitle($opportunity_title)
    {
        $this->container['opportunity_title'] = $opportunity_title;

        return $this;
    }

    /**
     * Gets projected_revenue_high
     * @return double
     */
    public function getProjectedRevenueHigh()
    {
        return $this->container['projected_revenue_high'];
    }

    /**
     * Sets projected_revenue_high
     * @param double $projected_revenue_high
     * @return $this
     */
    public function setProjectedRevenueHigh($projected_revenue_high)
    {
        $this->container['projected_revenue_high'] = $projected_revenue_high;

        return $this;
    }

    /**
     * Gets projected_revenue_low
     * @return double
     */
    public function getProjectedRevenueLow()
    {
        return $this->container['projected_revenue_low'];
    }

    /**
     * Sets projected_revenue_low
     * @param double $projected_revenue_low
     * @return $this
     */
    public function setProjectedRevenueLow($projected_revenue_low)
    {
        $this->container['projected_revenue_low'] = $projected_revenue_low;

        return $this;
    }

    /**
     * Gets stage
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008Stage
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2008Stage $stage
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

        return $this;
    }

    /**
     * Gets user
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2008User $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

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

