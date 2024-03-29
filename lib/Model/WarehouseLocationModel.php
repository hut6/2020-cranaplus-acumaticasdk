<?php
/**
 * WarehouseLocationModel
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
 * WarehouseLocationModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WarehouseLocationModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WarehouseLocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'assemblyAllowed' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'locationID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'pickPriority' => '\Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel',
        'receiptsAllowed' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'salesAllowed' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'transfersAllowed' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'assemblyAllowed' => null,
        'description' => null,
        'locationID' => null,
        'pickPriority' => null,
        'receiptsAllowed' => null,
        'salesAllowed' => null,
        'transfersAllowed' => null
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
        'active' => 'Active',
        'assemblyAllowed' => 'AssemblyAllowed',
        'description' => 'Description',
        'locationID' => 'LocationID',
        'pickPriority' => 'PickPriority',
        'receiptsAllowed' => 'ReceiptsAllowed',
        'salesAllowed' => 'SalesAllowed',
        'transfersAllowed' => 'TransfersAllowed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'assemblyAllowed' => 'setAssemblyAllowed',
        'description' => 'setDescription',
        'locationID' => 'setLocationID',
        'pickPriority' => 'setPickPriority',
        'receiptsAllowed' => 'setReceiptsAllowed',
        'salesAllowed' => 'setSalesAllowed',
        'transfersAllowed' => 'setTransfersAllowed'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'assemblyAllowed' => 'getAssemblyAllowed',
        'description' => 'getDescription',
        'locationID' => 'getLocationID',
        'pickPriority' => 'getPickPriority',
        'receiptsAllowed' => 'getReceiptsAllowed',
        'salesAllowed' => 'getSalesAllowed',
        'transfersAllowed' => 'getTransfersAllowed'
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

        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['assemblyAllowed'] = isset($data['assemblyAllowed']) ? $data['assemblyAllowed'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['locationID'] = isset($data['locationID']) ? $data['locationID'] : null;
        $this->container['pickPriority'] = isset($data['pickPriority']) ? $data['pickPriority'] : null;
        $this->container['receiptsAllowed'] = isset($data['receiptsAllowed']) ? $data['receiptsAllowed'] : null;
        $this->container['salesAllowed'] = isset($data['salesAllowed']) ? $data['salesAllowed'] : null;
        $this->container['transfersAllowed'] = isset($data['transfersAllowed']) ? $data['transfersAllowed'] : null;
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
     * Gets active
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets assemblyAllowed
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getAssemblyAllowed()
    {
        return $this->container['assemblyAllowed'];
    }

    /**
     * Sets assemblyAllowed
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $assemblyAllowed assemblyAllowed
     *
     * @return $this
     */
    public function setAssemblyAllowed($assemblyAllowed)
    {
        $this->container['assemblyAllowed'] = $assemblyAllowed;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets locationID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLocationID()
    {
        return $this->container['locationID'];
    }

    /**
     * Sets locationID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $locationID locationID
     *
     * @return $this
     */
    public function setLocationID($locationID)
    {
        $this->container['locationID'] = $locationID;

        return $this;
    }

    /**
     * Gets pickPriority
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel
     */
    public function getPickPriority()
    {
        return $this->container['pickPriority'];
    }

    /**
     * Sets pickPriority
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel $pickPriority pickPriority
     *
     * @return $this
     */
    public function setPickPriority($pickPriority)
    {
        $this->container['pickPriority'] = $pickPriority;

        return $this;
    }

    /**
     * Gets receiptsAllowed
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getReceiptsAllowed()
    {
        return $this->container['receiptsAllowed'];
    }

    /**
     * Sets receiptsAllowed
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $receiptsAllowed receiptsAllowed
     *
     * @return $this
     */
    public function setReceiptsAllowed($receiptsAllowed)
    {
        $this->container['receiptsAllowed'] = $receiptsAllowed;

        return $this;
    }

    /**
     * Gets salesAllowed
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getSalesAllowed()
    {
        return $this->container['salesAllowed'];
    }

    /**
     * Sets salesAllowed
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $salesAllowed salesAllowed
     *
     * @return $this
     */
    public function setSalesAllowed($salesAllowed)
    {
        $this->container['salesAllowed'] = $salesAllowed;

        return $this;
    }

    /**
     * Gets transfersAllowed
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getTransfersAllowed()
    {
        return $this->container['transfersAllowed'];
    }

    /**
     * Sets transfersAllowed
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $transfersAllowed transfersAllowed
     *
     * @return $this
     */
    public function setTransfersAllowed($transfersAllowed)
    {
        $this->container['transfersAllowed'] = $transfersAllowed;

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


