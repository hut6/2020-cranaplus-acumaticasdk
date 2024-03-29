<?php
/**
 * ShipmentDetailAllocationModel
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
 * ShipmentDetailAllocationModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentDetailAllocationModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentDetailAllocation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'expirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'inventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'locationID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lotSerialNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'orderNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'orderType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'qty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'subitem' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'expirationDate' => null,
        'inventoryID' => null,
        'locationID' => null,
        'lotSerialNbr' => null,
        'orderNbr' => null,
        'orderType' => null,
        'qty' => null,
        'subitem' => null,
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
        'description' => 'Description',
        'expirationDate' => 'ExpirationDate',
        'inventoryID' => 'InventoryID',
        'locationID' => 'LocationID',
        'lotSerialNbr' => 'LotSerialNbr',
        'orderNbr' => 'OrderNbr',
        'orderType' => 'OrderType',
        'qty' => 'Qty',
        'subitem' => 'Subitem',
        'uOM' => 'UOM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'expirationDate' => 'setExpirationDate',
        'inventoryID' => 'setInventoryID',
        'locationID' => 'setLocationID',
        'lotSerialNbr' => 'setLotSerialNbr',
        'orderNbr' => 'setOrderNbr',
        'orderType' => 'setOrderType',
        'qty' => 'setQty',
        'subitem' => 'setSubitem',
        'uOM' => 'setUOM'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'expirationDate' => 'getExpirationDate',
        'inventoryID' => 'getInventoryID',
        'locationID' => 'getLocationID',
        'lotSerialNbr' => 'getLotSerialNbr',
        'orderNbr' => 'getOrderNbr',
        'orderType' => 'getOrderType',
        'qty' => 'getQty',
        'subitem' => 'getSubitem',
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

        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['inventoryID'] = isset($data['inventoryID']) ? $data['inventoryID'] : null;
        $this->container['locationID'] = isset($data['locationID']) ? $data['locationID'] : null;
        $this->container['lotSerialNbr'] = isset($data['lotSerialNbr']) ? $data['lotSerialNbr'] : null;
        $this->container['orderNbr'] = isset($data['orderNbr']) ? $data['orderNbr'] : null;
        $this->container['orderType'] = isset($data['orderType']) ? $data['orderType'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['subitem'] = isset($data['subitem']) ? $data['subitem'] : null;
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
     * Gets expirationDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $expirationDate expirationDate
     *
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

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
     * Gets orderNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOrderNbr()
    {
        return $this->container['orderNbr'];
    }

    /**
     * Sets orderNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $orderNbr orderNbr
     *
     * @return $this
     */
    public function setOrderNbr($orderNbr)
    {
        $this->container['orderNbr'] = $orderNbr;

        return $this;
    }

    /**
     * Gets orderType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $orderType orderType
     *
     * @return $this
     */
    public function setOrderType($orderType)
    {
        $this->container['orderType'] = $orderType;

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


