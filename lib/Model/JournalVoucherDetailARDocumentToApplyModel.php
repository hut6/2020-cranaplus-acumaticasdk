<?php
/**
 * JournalVoucherDetailARDocumentToApplyModel
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
 * JournalVoucherDetailARDocumentToApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalVoucherDetailARDocumentToApplyModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalVoucherDetailARDocumentToApply';

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
        'balanceWriteOff' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'customerOrder' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'docType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'writeOffLimit' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'writeOffReasonCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'balanceWriteOff' => null,
        'customerOrder' => null,
        'docType' => null,
        'referenceNbr' => null,
        'writeOffLimit' => null,
        'writeOffReasonCode' => null
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
        'balanceWriteOff' => 'BalanceWriteOff',
        'customerOrder' => 'CustomerOrder',
        'docType' => 'DocType',
        'referenceNbr' => 'ReferenceNbr',
        'writeOffLimit' => 'WriteOffLimit',
        'writeOffReasonCode' => 'WriteOffReasonCode'
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
        'balanceWriteOff' => 'setBalanceWriteOff',
        'customerOrder' => 'setCustomerOrder',
        'docType' => 'setDocType',
        'referenceNbr' => 'setReferenceNbr',
        'writeOffLimit' => 'setWriteOffLimit',
        'writeOffReasonCode' => 'setWriteOffReasonCode'
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
        'balanceWriteOff' => 'getBalanceWriteOff',
        'customerOrder' => 'getCustomerOrder',
        'docType' => 'getDocType',
        'referenceNbr' => 'getReferenceNbr',
        'writeOffLimit' => 'getWriteOffLimit',
        'writeOffReasonCode' => 'getWriteOffReasonCode'
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
        $this->container['balanceWriteOff'] = isset($data['balanceWriteOff']) ? $data['balanceWriteOff'] : null;
        $this->container['customerOrder'] = isset($data['customerOrder']) ? $data['customerOrder'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['writeOffLimit'] = isset($data['writeOffLimit']) ? $data['writeOffLimit'] : null;
        $this->container['writeOffReasonCode'] = isset($data['writeOffReasonCode']) ? $data['writeOffReasonCode'] : null;
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
     * Gets balanceWriteOff
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getBalanceWriteOff()
    {
        return $this->container['balanceWriteOff'];
    }

    /**
     * Sets balanceWriteOff
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $balanceWriteOff balanceWriteOff
     *
     * @return $this
     */
    public function setBalanceWriteOff($balanceWriteOff)
    {
        $this->container['balanceWriteOff'] = $balanceWriteOff;

        return $this;
    }

    /**
     * Gets customerOrder
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCustomerOrder()
    {
        return $this->container['customerOrder'];
    }

    /**
     * Sets customerOrder
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $customerOrder customerOrder
     *
     * @return $this
     */
    public function setCustomerOrder($customerOrder)
    {
        $this->container['customerOrder'] = $customerOrder;

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
     * Gets writeOffLimit
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getWriteOffLimit()
    {
        return $this->container['writeOffLimit'];
    }

    /**
     * Sets writeOffLimit
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $writeOffLimit writeOffLimit
     *
     * @return $this
     */
    public function setWriteOffLimit($writeOffLimit)
    {
        $this->container['writeOffLimit'] = $writeOffLimit;

        return $this;
    }

    /**
     * Gets writeOffReasonCode
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWriteOffReasonCode()
    {
        return $this->container['writeOffReasonCode'];
    }

    /**
     * Sets writeOffReasonCode
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $writeOffReasonCode writeOffReasonCode
     *
     * @return $this
     */
    public function setWriteOffReasonCode($writeOffReasonCode)
    {
        $this->container['writeOffReasonCode'] = $writeOffReasonCode;

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


