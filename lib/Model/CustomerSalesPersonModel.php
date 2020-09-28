<?php
/**
 * CustomerSalesPersonModel
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
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hut6\CranaplusAcumaticaSdk\Model;
use \Hut6\CranaplusAcumaticaSdk\ObjectSerializer;

/**
 * CustomerSalesPersonModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerSalesPersonModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerSalesPerson';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'commission' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'default' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'locationID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'locationName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'name' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'salespersonID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'commission' => null,
        'default' => null,
        'locationID' => null,
        'locationName' => null,
        'name' => null,
        'salespersonID' => null
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
        'commission' => 'Commission',
        'default' => 'Default',
        'locationID' => 'LocationID',
        'locationName' => 'LocationName',
        'name' => 'Name',
        'salespersonID' => 'SalespersonID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'commission' => 'setCommission',
        'default' => 'setDefault',
        'locationID' => 'setLocationID',
        'locationName' => 'setLocationName',
        'name' => 'setName',
        'salespersonID' => 'setSalespersonID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'commission' => 'getCommission',
        'default' => 'getDefault',
        'locationID' => 'getLocationID',
        'locationName' => 'getLocationName',
        'name' => 'getName',
        'salespersonID' => 'getSalespersonID'
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

        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['locationID'] = isset($data['locationID']) ? $data['locationID'] : null;
        $this->container['locationName'] = isset($data['locationName']) ? $data['locationName'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['salespersonID'] = isset($data['salespersonID']) ? $data['salespersonID'] : null;
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
     * Gets commission
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $commission commission
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

        return $this;
    }

    /**
     * Gets default
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

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
     * Gets locationName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLocationName()
    {
        return $this->container['locationName'];
    }

    /**
     * Sets locationName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $locationName locationName
     *
     * @return $this
     */
    public function setLocationName($locationName)
    {
        $this->container['locationName'] = $locationName;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets salespersonID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSalespersonID()
    {
        return $this->container['salespersonID'];
    }

    /**
     * Sets salespersonID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $salespersonID salespersonID
     *
     * @return $this
     */
    public function setSalespersonID($salespersonID)
    {
        $this->container['salespersonID'] = $salespersonID;

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


