<?php
/**
 * FullContact
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
 * FullContact Class Doc Comment
 *
 * @category    Class
 * @package     CollingMedia\Infusionsoft
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class FullContact implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'FullContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'addresses' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004Addresses[]',
        'birthday' => '\DateTime',
        'company' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004Company',
        'contact_type' => 'string',
        'custom_fields' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004CustomFields[]',
        'date_created' => '\DateTime',
        'email_addresses' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004EmailAddresses[]',
        'family_name' => 'string',
        'fax_numbers' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004FaxNumbers[]',
        'given_name' => 'string',
        'job_title' => 'string',
        'last_updated' => '\DateTime',
        'lead_source_id' => 'int',
        'middle_name' => 'string',
        'notes' => 'string',
        'opt_in_reason' => 'string',
        'owner_id' => 'int',
        'phone_numbers' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004PhoneNumbers[]',
        'preferred_locale' => 'string',
        'preferred_name' => 'string',
        'prefix' => 'string',
        'relationships' => '\CollingMedia\Infusionsoft\Model\InlineResponse2004Relationships[]',
        'source_type' => 'string',
        'suffix' => 'string',
        'tag_ids' => 'int[]',
        'time_zone' => 'string',
        'website' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'addresses' => null,
        'birthday' => 'date-time',
        'company' => null,
        'contact_type' => null,
        'custom_fields' => null,
        'date_created' => 'date-time',
        'email_addresses' => null,
        'family_name' => null,
        'fax_numbers' => null,
        'given_name' => null,
        'job_title' => null,
        'last_updated' => 'date-time',
        'lead_source_id' => 'int64',
        'middle_name' => null,
        'notes' => null,
        'opt_in_reason' => null,
        'owner_id' => 'int64',
        'phone_numbers' => null,
        'preferred_locale' => null,
        'preferred_name' => null,
        'prefix' => null,
        'relationships' => null,
        'source_type' => null,
        'suffix' => null,
        'tag_ids' => 'int64',
        'time_zone' => null,
        'website' => null
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
        'addresses' => 'addresses',
        'birthday' => 'birthday',
        'company' => 'company',
        'contact_type' => 'contact_type',
        'custom_fields' => 'custom_fields',
        'date_created' => 'date_created',
        'email_addresses' => 'email_addresses',
        'family_name' => 'family_name',
        'fax_numbers' => 'fax_numbers',
        'given_name' => 'given_name',
        'job_title' => 'job_title',
        'last_updated' => 'last_updated',
        'lead_source_id' => 'lead_source_id',
        'middle_name' => 'middle_name',
        'notes' => 'notes',
        'opt_in_reason' => 'opt_in_reason',
        'owner_id' => 'owner_id',
        'phone_numbers' => 'phone_numbers',
        'preferred_locale' => 'preferred_locale',
        'preferred_name' => 'preferred_name',
        'prefix' => 'prefix',
        'relationships' => 'relationships',
        'source_type' => 'source_type',
        'suffix' => 'suffix',
        'tag_ids' => 'tag_ids',
        'time_zone' => 'time_zone',
        'website' => 'website'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'addresses' => 'setAddresses',
        'birthday' => 'setBirthday',
        'company' => 'setCompany',
        'contact_type' => 'setContactType',
        'custom_fields' => 'setCustomFields',
        'date_created' => 'setDateCreated',
        'email_addresses' => 'setEmailAddresses',
        'family_name' => 'setFamilyName',
        'fax_numbers' => 'setFaxNumbers',
        'given_name' => 'setGivenName',
        'job_title' => 'setJobTitle',
        'last_updated' => 'setLastUpdated',
        'lead_source_id' => 'setLeadSourceId',
        'middle_name' => 'setMiddleName',
        'notes' => 'setNotes',
        'opt_in_reason' => 'setOptInReason',
        'owner_id' => 'setOwnerId',
        'phone_numbers' => 'setPhoneNumbers',
        'preferred_locale' => 'setPreferredLocale',
        'preferred_name' => 'setPreferredName',
        'prefix' => 'setPrefix',
        'relationships' => 'setRelationships',
        'source_type' => 'setSourceType',
        'suffix' => 'setSuffix',
        'tag_ids' => 'setTagIds',
        'time_zone' => 'setTimeZone',
        'website' => 'setWebsite'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'addresses' => 'getAddresses',
        'birthday' => 'getBirthday',
        'company' => 'getCompany',
        'contact_type' => 'getContactType',
        'custom_fields' => 'getCustomFields',
        'date_created' => 'getDateCreated',
        'email_addresses' => 'getEmailAddresses',
        'family_name' => 'getFamilyName',
        'fax_numbers' => 'getFaxNumbers',
        'given_name' => 'getGivenName',
        'job_title' => 'getJobTitle',
        'last_updated' => 'getLastUpdated',
        'lead_source_id' => 'getLeadSourceId',
        'middle_name' => 'getMiddleName',
        'notes' => 'getNotes',
        'opt_in_reason' => 'getOptInReason',
        'owner_id' => 'getOwnerId',
        'phone_numbers' => 'getPhoneNumbers',
        'preferred_locale' => 'getPreferredLocale',
        'preferred_name' => 'getPreferredName',
        'prefix' => 'getPrefix',
        'relationships' => 'getRelationships',
        'source_type' => 'getSourceType',
        'suffix' => 'getSuffix',
        'tag_ids' => 'getTagIds',
        'time_zone' => 'getTimeZone',
        'website' => 'getWebsite'
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

    const SOURCE_TYPE_WEBFORM = 'WEBFORM';
    const SOURCE_TYPE_LANDINGPAGE = 'LANDINGPAGE';
    const SOURCE_TYPE_IMPORT = 'IMPORT';
    const SOURCE_TYPE_MANUAL = 'MANUAL';
    const SOURCE_TYPE_API = 'API';
    const SOURCE_TYPE_OTHER = 'OTHER';
    const SOURCE_TYPE_UNKNOWN = 'UNKNOWN';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getSourceTypeAllowableValues()
    {
        return [
            self::SOURCE_TYPE_WEBFORM,
            self::SOURCE_TYPE_LANDINGPAGE,
            self::SOURCE_TYPE_IMPORT,
            self::SOURCE_TYPE_MANUAL,
            self::SOURCE_TYPE_API,
            self::SOURCE_TYPE_OTHER,
            self::SOURCE_TYPE_UNKNOWN,
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
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['contact_type'] = isset($data['contact_type']) ? $data['contact_type'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['date_created'] = isset($data['date_created']) ? $data['date_created'] : null;
        $this->container['email_addresses'] = isset($data['email_addresses']) ? $data['email_addresses'] : null;
        $this->container['family_name'] = isset($data['family_name']) ? $data['family_name'] : null;
        $this->container['fax_numbers'] = isset($data['fax_numbers']) ? $data['fax_numbers'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['lead_source_id'] = isset($data['lead_source_id']) ? $data['lead_source_id'] : null;
        $this->container['middle_name'] = isset($data['middle_name']) ? $data['middle_name'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['opt_in_reason'] = isset($data['opt_in_reason']) ? $data['opt_in_reason'] : null;
        $this->container['owner_id'] = isset($data['owner_id']) ? $data['owner_id'] : null;
        $this->container['phone_numbers'] = isset($data['phone_numbers']) ? $data['phone_numbers'] : null;
        $this->container['preferred_locale'] = isset($data['preferred_locale']) ? $data['preferred_locale'] : null;
        $this->container['preferred_name'] = isset($data['preferred_name']) ? $data['preferred_name'] : null;
        $this->container['prefix'] = isset($data['prefix']) ? $data['prefix'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['suffix'] = isset($data['suffix']) ? $data['suffix'] : null;
        $this->container['tag_ids'] = isset($data['tag_ids']) ? $data['tag_ids'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getSourceTypeAllowableValues();
        if (!in_array($this->container['source_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'source_type', must be one of '%s'",
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

        $allowed_values = $this->getSourceTypeAllowableValues();
        if (!in_array($this->container['source_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets addresses
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004Addresses[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004Addresses[] $addresses
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets birthday
     * @return \DateTime
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     * @param \DateTime $birthday
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets company
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004Company $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets contact_type
     * @return string
     */
    public function getContactType()
    {
        return $this->container['contact_type'];
    }

    /**
     * Sets contact_type
     * @param string $contact_type
     * @return $this
     */
    public function setContactType($contact_type)
    {
        $this->container['contact_type'] = $contact_type;

        return $this;
    }

    /**
     * Gets custom_fields
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004CustomFields[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004CustomFields[] $custom_fields
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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
     * Gets email_addresses
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004EmailAddresses[]
     */
    public function getEmailAddresses()
    {
        return $this->container['email_addresses'];
    }

    /**
     * Sets email_addresses
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004EmailAddresses[] $email_addresses
     * @return $this
     */
    public function setEmailAddresses($email_addresses)
    {
        $this->container['email_addresses'] = $email_addresses;

        return $this;
    }

    /**
     * Gets family_name
     * @return string
     */
    public function getFamilyName()
    {
        return $this->container['family_name'];
    }

    /**
     * Sets family_name
     * @param string $family_name
     * @return $this
     */
    public function setFamilyName($family_name)
    {
        $this->container['family_name'] = $family_name;

        return $this;
    }

    /**
     * Gets fax_numbers
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004FaxNumbers[]
     */
    public function getFaxNumbers()
    {
        return $this->container['fax_numbers'];
    }

    /**
     * Sets fax_numbers
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004FaxNumbers[] $fax_numbers
     * @return $this
     */
    public function setFaxNumbers($fax_numbers)
    {
        $this->container['fax_numbers'] = $fax_numbers;

        return $this;
    }

    /**
     * Gets given_name
     * @return string
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     * @param string $given_name
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets job_title
     * @return string
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     * @param string $job_title
     * @return $this
     */
    public function setJobTitle($job_title)
    {
        $this->container['job_title'] = $job_title;

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
     * Gets lead_source_id
     * @return int
     */
    public function getLeadSourceId()
    {
        return $this->container['lead_source_id'];
    }

    /**
     * Sets lead_source_id
     * @param int $lead_source_id
     * @return $this
     */
    public function setLeadSourceId($lead_source_id)
    {
        $this->container['lead_source_id'] = $lead_source_id;

        return $this;
    }

    /**
     * Gets middle_name
     * @return string
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     * @param string $middle_name
     * @return $this
     */
    public function setMiddleName($middle_name)
    {
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets notes
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     * @param string $notes
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets opt_in_reason
     * @return string
     */
    public function getOptInReason()
    {
        return $this->container['opt_in_reason'];
    }

    /**
     * Sets opt_in_reason
     * @param string $opt_in_reason
     * @return $this
     */
    public function setOptInReason($opt_in_reason)
    {
        $this->container['opt_in_reason'] = $opt_in_reason;

        return $this;
    }

    /**
     * Gets owner_id
     * @return int
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     * @param int $owner_id
     * @return $this
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets phone_numbers
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004PhoneNumbers[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phone_numbers'];
    }

    /**
     * Sets phone_numbers
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004PhoneNumbers[] $phone_numbers
     * @return $this
     */
    public function setPhoneNumbers($phone_numbers)
    {
        $this->container['phone_numbers'] = $phone_numbers;

        return $this;
    }

    /**
     * Gets preferred_locale
     * @return string
     */
    public function getPreferredLocale()
    {
        return $this->container['preferred_locale'];
    }

    /**
     * Sets preferred_locale
     * @param string $preferred_locale
     * @return $this
     */
    public function setPreferredLocale($preferred_locale)
    {
        $this->container['preferred_locale'] = $preferred_locale;

        return $this;
    }

    /**
     * Gets preferred_name
     * @return string
     */
    public function getPreferredName()
    {
        return $this->container['preferred_name'];
    }

    /**
     * Sets preferred_name
     * @param string $preferred_name
     * @return $this
     */
    public function setPreferredName($preferred_name)
    {
        $this->container['preferred_name'] = $preferred_name;

        return $this;
    }

    /**
     * Gets prefix
     * @return string
     */
    public function getPrefix()
    {
        return $this->container['prefix'];
    }

    /**
     * Sets prefix
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->container['prefix'] = $prefix;

        return $this;
    }

    /**
     * Gets relationships
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2004Relationships[]
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     * @param \CollingMedia\Infusionsoft\Model\InlineResponse2004Relationships[] $relationships
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets source_type
     * @return string
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     * @param string $source_type
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $allowed_values = $this->getSourceTypeAllowableValues();
        if (!is_null($source_type) && !in_array($source_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets suffix
     * @return string
     */
    public function getSuffix()
    {
        return $this->container['suffix'];
    }

    /**
     * Sets suffix
     * @param string $suffix
     * @return $this
     */
    public function setSuffix($suffix)
    {
        $this->container['suffix'] = $suffix;

        return $this;
    }

    /**
     * Gets tag_ids
     * @return int[]
     */
    public function getTagIds()
    {
        return $this->container['tag_ids'];
    }

    /**
     * Sets tag_ids
     * @param int[] $tag_ids
     * @return $this
     */
    public function setTagIds($tag_ids)
    {
        $this->container['tag_ids'] = $tag_ids;

        return $this;
    }

    /**
     * Gets time_zone
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     * @param string $time_zone
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     * @param string $website
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

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


