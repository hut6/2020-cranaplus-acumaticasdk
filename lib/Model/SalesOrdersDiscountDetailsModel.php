<?php
/**
 * SalesOrdersDiscountDetailsModel
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
 * SalesOrdersDiscountDetailsModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesOrdersDiscountDetailsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesOrdersDiscountDetails';

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
        'discountableAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'discountableQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'discountAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'discountCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'discountPercent' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'freeItem' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'freeItemQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'manualDiscount' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'sequenceID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'skipDiscount' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'type' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'discountableAmount' => null,
        'discountableQty' => null,
        'discountAmount' => null,
        'discountCode' => null,
        'discountPercent' => null,
        'freeItem' => null,
        'freeItemQty' => null,
        'manualDiscount' => null,
        'sequenceID' => null,
        'skipDiscount' => null,
        'type' => null
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
        'discountableAmount' => 'DiscountableAmount',
        'discountableQty' => 'DiscountableQty',
        'discountAmount' => 'DiscountAmount',
        'discountCode' => 'DiscountCode',
        'discountPercent' => 'DiscountPercent',
        'freeItem' => 'FreeItem',
        'freeItemQty' => 'FreeItemQty',
        'manualDiscount' => 'ManualDiscount',
        'sequenceID' => 'SequenceID',
        'skipDiscount' => 'SkipDiscount',
        'type' => 'Type'
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
        'discountableAmount' => 'setDiscountableAmount',
        'discountableQty' => 'setDiscountableQty',
        'discountAmount' => 'setDiscountAmount',
        'discountCode' => 'setDiscountCode',
        'discountPercent' => 'setDiscountPercent',
        'freeItem' => 'setFreeItem',
        'freeItemQty' => 'setFreeItemQty',
        'manualDiscount' => 'setManualDiscount',
        'sequenceID' => 'setSequenceID',
        'skipDiscount' => 'setSkipDiscount',
        'type' => 'setType'
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
        'discountableAmount' => 'getDiscountableAmount',
        'discountableQty' => 'getDiscountableQty',
        'discountAmount' => 'getDiscountAmount',
        'discountCode' => 'getDiscountCode',
        'discountPercent' => 'getDiscountPercent',
        'freeItem' => 'getFreeItem',
        'freeItemQty' => 'getFreeItemQty',
        'manualDiscount' => 'getManualDiscount',
        'sequenceID' => 'getSequenceID',
        'skipDiscount' => 'getSkipDiscount',
        'type' => 'getType'
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
        $this->container['discountableAmount'] = isset($data['discountableAmount']) ? $data['discountableAmount'] : null;
        $this->container['discountableQty'] = isset($data['discountableQty']) ? $data['discountableQty'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['discountCode'] = isset($data['discountCode']) ? $data['discountCode'] : null;
        $this->container['discountPercent'] = isset($data['discountPercent']) ? $data['discountPercent'] : null;
        $this->container['freeItem'] = isset($data['freeItem']) ? $data['freeItem'] : null;
        $this->container['freeItemQty'] = isset($data['freeItemQty']) ? $data['freeItemQty'] : null;
        $this->container['manualDiscount'] = isset($data['manualDiscount']) ? $data['manualDiscount'] : null;
        $this->container['sequenceID'] = isset($data['sequenceID']) ? $data['sequenceID'] : null;
        $this->container['skipDiscount'] = isset($data['skipDiscount']) ? $data['skipDiscount'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets discountableAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDiscountableAmount()
    {
        return $this->container['discountableAmount'];
    }

    /**
     * Sets discountableAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $discountableAmount discountableAmount
     *
     * @return $this
     */
    public function setDiscountableAmount($discountableAmount)
    {
        $this->container['discountableAmount'] = $discountableAmount;

        return $this;
    }

    /**
     * Gets discountableQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDiscountableQty()
    {
        return $this->container['discountableQty'];
    }

    /**
     * Sets discountableQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $discountableQty discountableQty
     *
     * @return $this
     */
    public function setDiscountableQty($discountableQty)
    {
        $this->container['discountableQty'] = $discountableQty;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $discountAmount discountAmount
     *
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountCode
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDiscountCode()
    {
        return $this->container['discountCode'];
    }

    /**
     * Sets discountCode
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $discountCode discountCode
     *
     * @return $this
     */
    public function setDiscountCode($discountCode)
    {
        $this->container['discountCode'] = $discountCode;

        return $this;
    }

    /**
     * Gets discountPercent
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDiscountPercent()
    {
        return $this->container['discountPercent'];
    }

    /**
     * Sets discountPercent
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $discountPercent discountPercent
     *
     * @return $this
     */
    public function setDiscountPercent($discountPercent)
    {
        $this->container['discountPercent'] = $discountPercent;

        return $this;
    }

    /**
     * Gets freeItem
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFreeItem()
    {
        return $this->container['freeItem'];
    }

    /**
     * Sets freeItem
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $freeItem freeItem
     *
     * @return $this
     */
    public function setFreeItem($freeItem)
    {
        $this->container['freeItem'] = $freeItem;

        return $this;
    }

    /**
     * Gets freeItemQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getFreeItemQty()
    {
        return $this->container['freeItemQty'];
    }

    /**
     * Sets freeItemQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $freeItemQty freeItemQty
     *
     * @return $this
     */
    public function setFreeItemQty($freeItemQty)
    {
        $this->container['freeItemQty'] = $freeItemQty;

        return $this;
    }

    /**
     * Gets manualDiscount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getManualDiscount()
    {
        return $this->container['manualDiscount'];
    }

    /**
     * Sets manualDiscount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $manualDiscount manualDiscount
     *
     * @return $this
     */
    public function setManualDiscount($manualDiscount)
    {
        $this->container['manualDiscount'] = $manualDiscount;

        return $this;
    }

    /**
     * Gets sequenceID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSequenceID()
    {
        return $this->container['sequenceID'];
    }

    /**
     * Sets sequenceID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $sequenceID sequenceID
     *
     * @return $this
     */
    public function setSequenceID($sequenceID)
    {
        $this->container['sequenceID'] = $sequenceID;

        return $this;
    }

    /**
     * Gets skipDiscount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getSkipDiscount()
    {
        return $this->container['skipDiscount'];
    }

    /**
     * Sets skipDiscount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $skipDiscount skipDiscount
     *
     * @return $this
     */
    public function setSkipDiscount($skipDiscount)
    {
        $this->container['skipDiscount'] = $skipDiscount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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


