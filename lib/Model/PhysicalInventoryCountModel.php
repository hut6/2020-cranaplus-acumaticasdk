<?php
/**
 * PhysicalInventoryCountModel
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
 * PhysicalInventoryCountModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhysicalInventoryCountModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhysicalInventoryCount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryCountDetailModel[]',
        'inventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'location' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lotSerialNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subitem' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'details' => null,
        'inventoryID' => null,
        'location' => null,
        'lotSerialNbr' => null,
        'referenceNbr' => null,
        'subitem' => null
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
        'details' => 'Details',
        'inventoryID' => 'InventoryID',
        'location' => 'Location',
        'lotSerialNbr' => 'LotSerialNbr',
        'referenceNbr' => 'ReferenceNbr',
        'subitem' => 'Subitem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'details' => 'setDetails',
        'inventoryID' => 'setInventoryID',
        'location' => 'setLocation',
        'lotSerialNbr' => 'setLotSerialNbr',
        'referenceNbr' => 'setReferenceNbr',
        'subitem' => 'setSubitem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'details' => 'getDetails',
        'inventoryID' => 'getInventoryID',
        'location' => 'getLocation',
        'lotSerialNbr' => 'getLotSerialNbr',
        'referenceNbr' => 'getReferenceNbr',
        'subitem' => 'getSubitem'
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

        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['inventoryID'] = isset($data['inventoryID']) ? $data['inventoryID'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['lotSerialNbr'] = isset($data['lotSerialNbr']) ? $data['lotSerialNbr'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['subitem'] = isset($data['subitem']) ? $data['subitem'] : null;
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
     * Gets details
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryCountDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryCountDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets inventoryID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getInventoryID()
    {
        return $this->container['inventoryID'];
    }

    /**
     * Sets inventoryID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $inventoryID inventoryID
     *
     * @return $this
     */
    public function setInventoryID($inventoryID)
    {
        $this->container['inventoryID'] = $inventoryID;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets lotSerialNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLotSerialNbr()
    {
        return $this->container['lotSerialNbr'];
    }

    /**
     * Sets lotSerialNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $lotSerialNbr lotSerialNbr
     *
     * @return $this
     */
    public function setLotSerialNbr($lotSerialNbr)
    {
        $this->container['lotSerialNbr'] = $lotSerialNbr;

        return $this;
    }

    /**
     * Gets referenceNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReferenceNbr()
    {
        return $this->container['referenceNbr'];
    }

    /**
     * Sets referenceNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $referenceNbr referenceNbr
     *
     * @return $this
     */
    public function setReferenceNbr($referenceNbr)
    {
        $this->container['referenceNbr'] = $referenceNbr;

        return $this;
    }

    /**
     * Gets subitem
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubitem()
    {
        return $this->container['subitem'];
    }

    /**
     * Sets subitem
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subitem subitem
     *
     * @return $this
     */
    public function setSubitem($subitem)
    {
        $this->container['subitem'] = $subitem;

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


