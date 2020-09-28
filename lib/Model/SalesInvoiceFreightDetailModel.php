<?php
/**
 * SalesInvoiceFreightDetailModel
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
 * SalesInvoiceFreightDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesInvoiceFreightDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesInvoiceFreightDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'freightAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'freightCost' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'lineTotal' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'premiumFreightAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'shipmentNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shipmentType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'totalFreightAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'volume' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'weight' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'freightAmount' => null,
        'freightCost' => null,
        'lineTotal' => null,
        'premiumFreightAmount' => null,
        'shipmentNbr' => null,
        'shipmentType' => null,
        'totalFreightAmount' => null,
        'volume' => null,
        'weight' => null
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
        'description' => 'Description',
        'freightAmount' => 'FreightAmount',
        'freightCost' => 'FreightCost',
        'lineTotal' => 'LineTotal',
        'premiumFreightAmount' => 'PremiumFreightAmount',
        'shipmentNbr' => 'ShipmentNbr',
        'shipmentType' => 'ShipmentType',
        'totalFreightAmount' => 'TotalFreightAmount',
        'volume' => 'Volume',
        'weight' => 'Weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'freightAmount' => 'setFreightAmount',
        'freightCost' => 'setFreightCost',
        'lineTotal' => 'setLineTotal',
        'premiumFreightAmount' => 'setPremiumFreightAmount',
        'shipmentNbr' => 'setShipmentNbr',
        'shipmentType' => 'setShipmentType',
        'totalFreightAmount' => 'setTotalFreightAmount',
        'volume' => 'setVolume',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'freightAmount' => 'getFreightAmount',
        'freightCost' => 'getFreightCost',
        'lineTotal' => 'getLineTotal',
        'premiumFreightAmount' => 'getPremiumFreightAmount',
        'shipmentNbr' => 'getShipmentNbr',
        'shipmentType' => 'getShipmentType',
        'totalFreightAmount' => 'getTotalFreightAmount',
        'volume' => 'getVolume',
        'weight' => 'getWeight'
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

        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['freightAmount'] = isset($data['freightAmount']) ? $data['freightAmount'] : null;
        $this->container['freightCost'] = isset($data['freightCost']) ? $data['freightCost'] : null;
        $this->container['lineTotal'] = isset($data['lineTotal']) ? $data['lineTotal'] : null;
        $this->container['premiumFreightAmount'] = isset($data['premiumFreightAmount']) ? $data['premiumFreightAmount'] : null;
        $this->container['shipmentNbr'] = isset($data['shipmentNbr']) ? $data['shipmentNbr'] : null;
        $this->container['shipmentType'] = isset($data['shipmentType']) ? $data['shipmentType'] : null;
        $this->container['totalFreightAmount'] = isset($data['totalFreightAmount']) ? $data['totalFreightAmount'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
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
     * Gets freightAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getFreightAmount()
    {
        return $this->container['freightAmount'];
    }

    /**
     * Sets freightAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $freightAmount freightAmount
     *
     * @return $this
     */
    public function setFreightAmount($freightAmount)
    {
        $this->container['freightAmount'] = $freightAmount;

        return $this;
    }

    /**
     * Gets freightCost
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getFreightCost()
    {
        return $this->container['freightCost'];
    }

    /**
     * Sets freightCost
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $freightCost freightCost
     *
     * @return $this
     */
    public function setFreightCost($freightCost)
    {
        $this->container['freightCost'] = $freightCost;

        return $this;
    }

    /**
     * Gets lineTotal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getLineTotal()
    {
        return $this->container['lineTotal'];
    }

    /**
     * Sets lineTotal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $lineTotal lineTotal
     *
     * @return $this
     */
    public function setLineTotal($lineTotal)
    {
        $this->container['lineTotal'] = $lineTotal;

        return $this;
    }

    /**
     * Gets premiumFreightAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getPremiumFreightAmount()
    {
        return $this->container['premiumFreightAmount'];
    }

    /**
     * Sets premiumFreightAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $premiumFreightAmount premiumFreightAmount
     *
     * @return $this
     */
    public function setPremiumFreightAmount($premiumFreightAmount)
    {
        $this->container['premiumFreightAmount'] = $premiumFreightAmount;

        return $this;
    }

    /**
     * Gets shipmentNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShipmentNbr()
    {
        return $this->container['shipmentNbr'];
    }

    /**
     * Sets shipmentNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shipmentNbr shipmentNbr
     *
     * @return $this
     */
    public function setShipmentNbr($shipmentNbr)
    {
        $this->container['shipmentNbr'] = $shipmentNbr;

        return $this;
    }

    /**
     * Gets shipmentType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShipmentType()
    {
        return $this->container['shipmentType'];
    }

    /**
     * Sets shipmentType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shipmentType shipmentType
     *
     * @return $this
     */
    public function setShipmentType($shipmentType)
    {
        $this->container['shipmentType'] = $shipmentType;

        return $this;
    }

    /**
     * Gets totalFreightAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTotalFreightAmount()
    {
        return $this->container['totalFreightAmount'];
    }

    /**
     * Sets totalFreightAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $totalFreightAmount totalFreightAmount
     *
     * @return $this
     */
    public function setTotalFreightAmount($totalFreightAmount)
    {
        $this->container['totalFreightAmount'] = $totalFreightAmount;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


