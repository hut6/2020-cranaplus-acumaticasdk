<?php
/**
 * VendorPriceDetailModel
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
 * VendorPriceDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VendorPriceDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VendorPriceDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'breakQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'effectiveDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'expirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'inventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'price' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'promotional' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'recordID' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vendor' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vendorName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'breakQty' => null,
        'createdDateTime' => null,
        'currencyID' => null,
        'description' => null,
        'effectiveDate' => null,
        'expirationDate' => null,
        'inventoryID' => null,
        'lastModifiedDateTime' => null,
        'price' => null,
        'promotional' => null,
        'recordID' => null,
        'uOM' => null,
        'vendor' => null,
        'vendorName' => null
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
        'breakQty' => 'BreakQty',
        'createdDateTime' => 'CreatedDateTime',
        'currencyID' => 'CurrencyID',
        'description' => 'Description',
        'effectiveDate' => 'EffectiveDate',
        'expirationDate' => 'ExpirationDate',
        'inventoryID' => 'InventoryID',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'price' => 'Price',
        'promotional' => 'Promotional',
        'recordID' => 'RecordID',
        'uOM' => 'UOM',
        'vendor' => 'Vendor',
        'vendorName' => 'VendorName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'breakQty' => 'setBreakQty',
        'createdDateTime' => 'setCreatedDateTime',
        'currencyID' => 'setCurrencyID',
        'description' => 'setDescription',
        'effectiveDate' => 'setEffectiveDate',
        'expirationDate' => 'setExpirationDate',
        'inventoryID' => 'setInventoryID',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'price' => 'setPrice',
        'promotional' => 'setPromotional',
        'recordID' => 'setRecordID',
        'uOM' => 'setUOM',
        'vendor' => 'setVendor',
        'vendorName' => 'setVendorName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'breakQty' => 'getBreakQty',
        'createdDateTime' => 'getCreatedDateTime',
        'currencyID' => 'getCurrencyID',
        'description' => 'getDescription',
        'effectiveDate' => 'getEffectiveDate',
        'expirationDate' => 'getExpirationDate',
        'inventoryID' => 'getInventoryID',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'price' => 'getPrice',
        'promotional' => 'getPromotional',
        'recordID' => 'getRecordID',
        'uOM' => 'getUOM',
        'vendor' => 'getVendor',
        'vendorName' => 'getVendorName'
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

        $this->container['breakQty'] = isset($data['breakQty']) ? $data['breakQty'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['inventoryID'] = isset($data['inventoryID']) ? $data['inventoryID'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['promotional'] = isset($data['promotional']) ? $data['promotional'] : null;
        $this->container['recordID'] = isset($data['recordID']) ? $data['recordID'] : null;
        $this->container['uOM'] = isset($data['uOM']) ? $data['uOM'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['vendorName'] = isset($data['vendorName']) ? $data['vendorName'] : null;
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
     * Gets breakQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getBreakQty()
    {
        return $this->container['breakQty'];
    }

    /**
     * Sets breakQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $breakQty breakQty
     *
     * @return $this
     */
    public function setBreakQty($breakQty)
    {
        $this->container['breakQty'] = $breakQty;

        return $this;
    }

    /**
     * Gets createdDateTime
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getCreatedDateTime()
    {
        return $this->container['createdDateTime'];
    }

    /**
     * Sets createdDateTime
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $createdDateTime createdDateTime
     *
     * @return $this
     */
    public function setCreatedDateTime($createdDateTime)
    {
        $this->container['createdDateTime'] = $createdDateTime;

        return $this;
    }

    /**
     * Gets currencyID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCurrencyID()
    {
        return $this->container['currencyID'];
    }

    /**
     * Sets currencyID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $currencyID currencyID
     *
     * @return $this
     */
    public function setCurrencyID($currencyID)
    {
        $this->container['currencyID'] = $currencyID;

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
     * Gets effectiveDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $effectiveDate effectiveDate
     *
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;

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
     * Gets lastModifiedDateTime
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['lastModifiedDateTime'];
    }

    /**
     * Sets lastModifiedDateTime
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $lastModifiedDateTime lastModifiedDateTime
     *
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->container['lastModifiedDateTime'] = $lastModifiedDateTime;

        return $this;
    }

    /**
     * Gets price
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets promotional
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getPromotional()
    {
        return $this->container['promotional'];
    }

    /**
     * Sets promotional
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $promotional promotional
     *
     * @return $this
     */
    public function setPromotional($promotional)
    {
        $this->container['promotional'] = $promotional;

        return $this;
    }

    /**
     * Gets recordID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getRecordID()
    {
        return $this->container['recordID'];
    }

    /**
     * Sets recordID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $recordID recordID
     *
     * @return $this
     */
    public function setRecordID($recordID)
    {
        $this->container['recordID'] = $recordID;

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
     * Gets vendor
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $vendor vendor
     *
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets vendorName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getVendorName()
    {
        return $this->container['vendorName'];
    }

    /**
     * Sets vendorName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $vendorName vendorName
     *
     * @return $this
     */
    public function setVendorName($vendorName)
    {
        $this->container['vendorName'] = $vendorName;

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


