<?php
/**
 * InventoryAllocationRowModel
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
 * InventoryAllocationRowModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InventoryAllocationRowModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InventoryAllocationRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'allocationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'allocationType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'docType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'expired' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'location' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lotSerialNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'module' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'qty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'allocationDate' => null,
        'allocationType' => null,
        'docType' => null,
        'expired' => null,
        'location' => null,
        'lotSerialNbr' => null,
        'module' => null,
        'qty' => null
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
        'allocationDate' => 'AllocationDate',
        'allocationType' => 'AllocationType',
        'docType' => 'DocType',
        'expired' => 'Expired',
        'location' => 'Location',
        'lotSerialNbr' => 'LotSerialNbr',
        'module' => 'Module',
        'qty' => 'Qty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allocationDate' => 'setAllocationDate',
        'allocationType' => 'setAllocationType',
        'docType' => 'setDocType',
        'expired' => 'setExpired',
        'location' => 'setLocation',
        'lotSerialNbr' => 'setLotSerialNbr',
        'module' => 'setModule',
        'qty' => 'setQty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allocationDate' => 'getAllocationDate',
        'allocationType' => 'getAllocationType',
        'docType' => 'getDocType',
        'expired' => 'getExpired',
        'location' => 'getLocation',
        'lotSerialNbr' => 'getLotSerialNbr',
        'module' => 'getModule',
        'qty' => 'getQty'
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

        $this->container['allocationDate'] = isset($data['allocationDate']) ? $data['allocationDate'] : null;
        $this->container['allocationType'] = isset($data['allocationType']) ? $data['allocationType'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['expired'] = isset($data['expired']) ? $data['expired'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['lotSerialNbr'] = isset($data['lotSerialNbr']) ? $data['lotSerialNbr'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
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
     * Gets allocationDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getAllocationDate()
    {
        return $this->container['allocationDate'];
    }

    /**
     * Sets allocationDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $allocationDate allocationDate
     *
     * @return $this
     */
    public function setAllocationDate($allocationDate)
    {
        $this->container['allocationDate'] = $allocationDate;

        return $this;
    }

    /**
     * Gets allocationType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAllocationType()
    {
        return $this->container['allocationType'];
    }

    /**
     * Sets allocationType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $allocationType allocationType
     *
     * @return $this
     */
    public function setAllocationType($allocationType)
    {
        $this->container['allocationType'] = $allocationType;

        return $this;
    }

    /**
     * Gets docType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDocType()
    {
        return $this->container['docType'];
    }

    /**
     * Sets docType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $docType docType
     *
     * @return $this
     */
    public function setDocType($docType)
    {
        $this->container['docType'] = $docType;

        return $this;
    }

    /**
     * Gets expired
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getExpired()
    {
        return $this->container['expired'];
    }

    /**
     * Sets expired
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $expired expired
     *
     * @return $this
     */
    public function setExpired($expired)
    {
        $this->container['expired'] = $expired;

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
     * Gets module
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getModule()
    {
        return $this->container['module'];
    }

    /**
     * Sets module
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $module module
     *
     * @return $this
     */
    public function setModule($module)
    {
        $this->container['module'] = $module;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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


