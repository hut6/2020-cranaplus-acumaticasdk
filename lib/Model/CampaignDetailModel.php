<?php
/**
 * CampaignDetailModel
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
 * CampaignDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'campaignID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'campaignName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'contactID' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'stage' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'campaignID' => null,
        'campaignName' => null,
        'contactID' => null,
        'stage' => null
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
        'campaignID' => 'CampaignID',
        'campaignName' => 'CampaignName',
        'contactID' => 'ContactID',
        'stage' => 'Stage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignID' => 'setCampaignID',
        'campaignName' => 'setCampaignName',
        'contactID' => 'setContactID',
        'stage' => 'setStage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignID' => 'getCampaignID',
        'campaignName' => 'getCampaignName',
        'contactID' => 'getContactID',
        'stage' => 'getStage'
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

        $this->container['campaignID'] = isset($data['campaignID']) ? $data['campaignID'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['contactID'] = isset($data['contactID']) ? $data['contactID'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
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
     * Gets campaignID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCampaignID()
    {
        return $this->container['campaignID'];
    }

    /**
     * Sets campaignID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $campaignID campaignID
     *
     * @return $this
     */
    public function setCampaignID($campaignID)
    {
        $this->container['campaignID'] = $campaignID;

        return $this;
    }

    /**
     * Gets campaignName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $campaignName campaignName
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets contactID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getContactID()
    {
        return $this->container['contactID'];
    }

    /**
     * Sets contactID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $contactID contactID
     *
     * @return $this
     */
    public function setContactID($contactID)
    {
        $this->container['contactID'] = $contactID;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $stage stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

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


