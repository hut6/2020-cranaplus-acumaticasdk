<?php
/**
 * KitAssemblyNonStockComponentModel
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
 * KitAssemblyNonStockComponentModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class KitAssemblyNonStockComponentModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'KitAssemblyNonStockComponent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'componentQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'nonStockInventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'qty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'reasonCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'unitCost' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'componentQty' => null,
        'lineNbr' => null,
        'nonStockInventoryID' => null,
        'qty' => null,
        'reasonCode' => null,
        'unitCost' => null,
        'uOM' => null
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
        'componentQty' => 'ComponentQty',
        'lineNbr' => 'LineNbr',
        'nonStockInventoryID' => 'NonStockInventoryID',
        'qty' => 'Qty',
        'reasonCode' => 'ReasonCode',
        'unitCost' => 'UnitCost',
        'uOM' => 'UOM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'componentQty' => 'setComponentQty',
        'lineNbr' => 'setLineNbr',
        'nonStockInventoryID' => 'setNonStockInventoryID',
        'qty' => 'setQty',
        'reasonCode' => 'setReasonCode',
        'unitCost' => 'setUnitCost',
        'uOM' => 'setUOM'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'componentQty' => 'getComponentQty',
        'lineNbr' => 'getLineNbr',
        'nonStockInventoryID' => 'getNonStockInventoryID',
        'qty' => 'getQty',
        'reasonCode' => 'getReasonCode',
        'unitCost' => 'getUnitCost',
        'uOM' => 'getUOM'
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

        $this->container['componentQty'] = isset($data['componentQty']) ? $data['componentQty'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['nonStockInventoryID'] = isset($data['nonStockInventoryID']) ? $data['nonStockInventoryID'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['unitCost'] = isset($data['unitCost']) ? $data['unitCost'] : null;
        $this->container['uOM'] = isset($data['uOM']) ? $data['uOM'] : null;
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
     * Gets componentQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getComponentQty()
    {
        return $this->container['componentQty'];
    }

    /**
     * Sets componentQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $componentQty componentQty
     *
     * @return $this
     */
    public function setComponentQty($componentQty)
    {
        $this->container['componentQty'] = $componentQty;

        return $this;
    }

    /**
     * Gets lineNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getLineNbr()
    {
        return $this->container['lineNbr'];
    }

    /**
     * Sets lineNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $lineNbr lineNbr
     *
     * @return $this
     */
    public function setLineNbr($lineNbr)
    {
        $this->container['lineNbr'] = $lineNbr;

        return $this;
    }

    /**
     * Gets nonStockInventoryID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getNonStockInventoryID()
    {
        return $this->container['nonStockInventoryID'];
    }

    /**
     * Sets nonStockInventoryID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $nonStockInventoryID nonStockInventoryID
     *
     * @return $this
     */
    public function setNonStockInventoryID($nonStockInventoryID)
    {
        $this->container['nonStockInventoryID'] = $nonStockInventoryID;

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
     * Gets reasonCode
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReasonCode()
    {
        return $this->container['reasonCode'];
    }

    /**
     * Sets reasonCode
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $reasonCode reasonCode
     *
     * @return $this
     */
    public function setReasonCode($reasonCode)
    {
        $this->container['reasonCode'] = $reasonCode;

        return $this;
    }

    /**
     * Gets unitCost
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getUnitCost()
    {
        return $this->container['unitCost'];
    }

    /**
     * Sets unitCost
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $unitCost unitCost
     *
     * @return $this
     */
    public function setUnitCost($unitCost)
    {
        $this->container['unitCost'] = $unitCost;

        return $this;
    }

    /**
     * Gets uOM
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getUOM()
    {
        return $this->container['uOM'];
    }

    /**
     * Sets uOM
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $uOM uOM
     *
     * @return $this
     */
    public function setUOM($uOM)
    {
        $this->container['uOM'] = $uOM;

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


