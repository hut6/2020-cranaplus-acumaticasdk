<?php
/**
 * EmailProcessingRowModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Crana/17.200.001
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.22
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hut6\CranaplusAcumaticaSdk\Model;
use \Hut6\CranaplusAcumaticaSdk\ObjectSerializer;

/**
 * EmailProcessingRowModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailProcessingRowModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EmailProcessingRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'emailAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'from' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'mailStatus' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'owner' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'selected' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'startDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'subject' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'to' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'emailAccount' => null,
        'from' => null,
        'mailStatus' => null,
        'owner' => null,
        'selected' => null,
        'startDate' => null,
        'subject' => null,
        'to' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'emailAccount' => 'EmailAccount',
        'from' => 'From',
        'mailStatus' => 'MailStatus',
        'owner' => 'Owner',
        'selected' => 'Selected',
        'startDate' => 'StartDate',
        'subject' => 'Subject',
        'to' => 'To'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emailAccount' => 'setEmailAccount',
        'from' => 'setFrom',
        'mailStatus' => 'setMailStatus',
        'owner' => 'setOwner',
        'selected' => 'setSelected',
        'startDate' => 'setStartDate',
        'subject' => 'setSubject',
        'to' => 'setTo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emailAccount' => 'getEmailAccount',
        'from' => 'getFrom',
        'mailStatus' => 'getMailStatus',
        'owner' => 'getOwner',
        'selected' => 'getSelected',
        'startDate' => 'getStartDate',
        'subject' => 'getSubject',
        'to' => 'getTo'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['emailAccount'] = isset($data['emailAccount']) ? $data['emailAccount'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['mailStatus'] = isset($data['mailStatus']) ? $data['mailStatus'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['selected'] = isset($data['selected']) ? $data['selected'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets emailAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getEmailAccount()
    {
        return $this->container['emailAccount'];
    }

    /**
     * Sets emailAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $emailAccount emailAccount
     *
     * @return $this
     */
    public function setEmailAccount($emailAccount)
    {
        $this->container['emailAccount'] = $emailAccount;

        return $this;
    }

    /**
     * Gets from
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets mailStatus
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getMailStatus()
    {
        return $this->container['mailStatus'];
    }

    /**
     * Sets mailStatus
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $mailStatus mailStatus
     *
     * @return $this
     */
    public function setMailStatus($mailStatus)
    {
        $this->container['mailStatus'] = $mailStatus;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets selected
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getSelected()
    {
        return $this->container['selected'];
    }

    /**
     * Sets selected
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $selected selected
     *
     * @return $this
     */
    public function setSelected($selected)
    {
        $this->container['selected'] = $selected;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


