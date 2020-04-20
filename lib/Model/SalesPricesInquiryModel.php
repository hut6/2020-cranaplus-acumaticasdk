<?php
/**
 * SalesPricesInquiryModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Default/17.200.001
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hut6\CranaplusAcumaticaSdk\Model;

use \ArrayAccess;
use \Hut6\CranaplusAcumaticaSdk\ObjectSerializer;

/**
 * SalesPricesInquiryModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesPricesInquiryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesPricesInquiry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'rowNumber' => 'int',
        'note' => 'string',
        'custom' => 'map[string,map[string,\Hut6\CranaplusAcumaticaSdk\Model\CustomFieldModel]]',
        'files' => '\Hut6\CranaplusAcumaticaSdk\Model\FileLinkModel[]',
        'effectiveAsOf' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'inventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'itemClassID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceClass' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceManager' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceManagerIsMe' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'priceType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceWorkgroup' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceWorkgroupIsMine' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'salesPriceDetails' => '\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceDetailModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'rowNumber' => 'int64',
        'note' => null,
        'custom' => null,
        'files' => null,
        'effectiveAsOf' => null,
        'inventoryID' => null,
        'itemClassID' => null,
        'priceClass' => null,
        'priceCode' => null,
        'priceManager' => null,
        'priceManagerIsMe' => null,
        'priceType' => null,
        'priceWorkgroup' => null,
        'priceWorkgroupIsMine' => null,
        'salesPriceDetails' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'rowNumber' => 'rowNumber',
        'note' => 'note',
        'custom' => 'custom',
        'files' => 'files',
        'effectiveAsOf' => 'EffectiveAsOf',
        'inventoryID' => 'InventoryID',
        'itemClassID' => 'ItemClassID',
        'priceClass' => 'PriceClass',
        'priceCode' => 'PriceCode',
        'priceManager' => 'PriceManager',
        'priceManagerIsMe' => 'PriceManagerIsMe',
        'priceType' => 'PriceType',
        'priceWorkgroup' => 'PriceWorkgroup',
        'priceWorkgroupIsMine' => 'PriceWorkgroupIsMine',
        'salesPriceDetails' => 'SalesPriceDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rowNumber' => 'setRowNumber',
        'note' => 'setNote',
        'custom' => 'setCustom',
        'files' => 'setFiles',
        'effectiveAsOf' => 'setEffectiveAsOf',
        'inventoryID' => 'setInventoryID',
        'itemClassID' => 'setItemClassID',
        'priceClass' => 'setPriceClass',
        'priceCode' => 'setPriceCode',
        'priceManager' => 'setPriceManager',
        'priceManagerIsMe' => 'setPriceManagerIsMe',
        'priceType' => 'setPriceType',
        'priceWorkgroup' => 'setPriceWorkgroup',
        'priceWorkgroupIsMine' => 'setPriceWorkgroupIsMine',
        'salesPriceDetails' => 'setSalesPriceDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rowNumber' => 'getRowNumber',
        'note' => 'getNote',
        'custom' => 'getCustom',
        'files' => 'getFiles',
        'effectiveAsOf' => 'getEffectiveAsOf',
        'inventoryID' => 'getInventoryID',
        'itemClassID' => 'getItemClassID',
        'priceClass' => 'getPriceClass',
        'priceCode' => 'getPriceCode',
        'priceManager' => 'getPriceManager',
        'priceManagerIsMe' => 'getPriceManagerIsMe',
        'priceType' => 'getPriceType',
        'priceWorkgroup' => 'getPriceWorkgroup',
        'priceWorkgroupIsMine' => 'getPriceWorkgroupIsMine',
        'salesPriceDetails' => 'getSalesPriceDetails'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['rowNumber'] = isset($data['rowNumber']) ? $data['rowNumber'] : null;
        $this->container['note'] = isset($data['note']) ? $data['note'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['files'] = isset($data['files']) ? $data['files'] : null;
        $this->container['effectiveAsOf'] = isset($data['effectiveAsOf']) ? $data['effectiveAsOf'] : null;
        $this->container['inventoryID'] = isset($data['inventoryID']) ? $data['inventoryID'] : null;
        $this->container['itemClassID'] = isset($data['itemClassID']) ? $data['itemClassID'] : null;
        $this->container['priceClass'] = isset($data['priceClass']) ? $data['priceClass'] : null;
        $this->container['priceCode'] = isset($data['priceCode']) ? $data['priceCode'] : null;
        $this->container['priceManager'] = isset($data['priceManager']) ? $data['priceManager'] : null;
        $this->container['priceManagerIsMe'] = isset($data['priceManagerIsMe']) ? $data['priceManagerIsMe'] : null;
        $this->container['priceType'] = isset($data['priceType']) ? $data['priceType'] : null;
        $this->container['priceWorkgroup'] = isset($data['priceWorkgroup']) ? $data['priceWorkgroup'] : null;
        $this->container['priceWorkgroupIsMine'] = isset($data['priceWorkgroupIsMine']) ? $data['priceWorkgroupIsMine'] : null;
        $this->container['salesPriceDetails'] = isset($data['salesPriceDetails']) ? $data['salesPriceDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rowNumber
     *
     * @return int
     */
    public function getRowNumber()
    {
        return $this->container['rowNumber'];
    }

    /**
     * Sets rowNumber
     *
     * @param int $rowNumber rowNumber
     *
     * @return $this
     */
    public function setRowNumber($rowNumber)
    {
        $this->container['rowNumber'] = $rowNumber;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string $note note
     *
     * @return $this
     */
    public function setNote($note)
    {
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets custom
     *
     * @return map[string,map[string,\Hut6\CranaplusAcumaticaSdk\Model\CustomFieldModel]]
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     *
     * @param map[string,map[string,\Hut6\CranaplusAcumaticaSdk\Model\CustomFieldModel]] $custom custom
     *
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets files
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\FileLinkModel[]
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\FileLinkModel[] $files files
     *
     * @return $this
     */
    public function setFiles($files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets effectiveAsOf
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getEffectiveAsOf()
    {
        return $this->container['effectiveAsOf'];
    }

    /**
     * Sets effectiveAsOf
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $effectiveAsOf effectiveAsOf
     *
     * @return $this
     */
    public function setEffectiveAsOf($effectiveAsOf)
    {
        $this->container['effectiveAsOf'] = $effectiveAsOf;

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
     * Gets itemClassID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getItemClassID()
    {
        return $this->container['itemClassID'];
    }

    /**
     * Sets itemClassID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $itemClassID itemClassID
     *
     * @return $this
     */
    public function setItemClassID($itemClassID)
    {
        $this->container['itemClassID'] = $itemClassID;

        return $this;
    }

    /**
     * Gets priceClass
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriceClass()
    {
        return $this->container['priceClass'];
    }

    /**
     * Sets priceClass
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priceClass priceClass
     *
     * @return $this
     */
    public function setPriceClass($priceClass)
    {
        $this->container['priceClass'] = $priceClass;

        return $this;
    }

    /**
     * Gets priceCode
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriceCode()
    {
        return $this->container['priceCode'];
    }

    /**
     * Sets priceCode
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priceCode priceCode
     *
     * @return $this
     */
    public function setPriceCode($priceCode)
    {
        $this->container['priceCode'] = $priceCode;

        return $this;
    }

    /**
     * Gets priceManager
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriceManager()
    {
        return $this->container['priceManager'];
    }

    /**
     * Sets priceManager
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priceManager priceManager
     *
     * @return $this
     */
    public function setPriceManager($priceManager)
    {
        $this->container['priceManager'] = $priceManager;

        return $this;
    }

    /**
     * Gets priceManagerIsMe
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getPriceManagerIsMe()
    {
        return $this->container['priceManagerIsMe'];
    }

    /**
     * Sets priceManagerIsMe
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $priceManagerIsMe priceManagerIsMe
     *
     * @return $this
     */
    public function setPriceManagerIsMe($priceManagerIsMe)
    {
        $this->container['priceManagerIsMe'] = $priceManagerIsMe;

        return $this;
    }

    /**
     * Gets priceType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriceType()
    {
        return $this->container['priceType'];
    }

    /**
     * Sets priceType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priceType priceType
     *
     * @return $this
     */
    public function setPriceType($priceType)
    {
        $this->container['priceType'] = $priceType;

        return $this;
    }

    /**
     * Gets priceWorkgroup
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriceWorkgroup()
    {
        return $this->container['priceWorkgroup'];
    }

    /**
     * Sets priceWorkgroup
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priceWorkgroup priceWorkgroup
     *
     * @return $this
     */
    public function setPriceWorkgroup($priceWorkgroup)
    {
        $this->container['priceWorkgroup'] = $priceWorkgroup;

        return $this;
    }

    /**
     * Gets priceWorkgroupIsMine
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getPriceWorkgroupIsMine()
    {
        return $this->container['priceWorkgroupIsMine'];
    }

    /**
     * Sets priceWorkgroupIsMine
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $priceWorkgroupIsMine priceWorkgroupIsMine
     *
     * @return $this
     */
    public function setPriceWorkgroupIsMine($priceWorkgroupIsMine)
    {
        $this->container['priceWorkgroupIsMine'] = $priceWorkgroupIsMine;

        return $this;
    }

    /**
     * Gets salesPriceDetails
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceDetailModel[]
     */
    public function getSalesPriceDetails()
    {
        return $this->container['salesPriceDetails'];
    }

    /**
     * Sets salesPriceDetails
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceDetailModel[] $salesPriceDetails salesPriceDetails
     *
     * @return $this
     */
    public function setSalesPriceDetails($salesPriceDetails)
    {
        $this->container['salesPriceDetails'] = $salesPriceDetails;

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


