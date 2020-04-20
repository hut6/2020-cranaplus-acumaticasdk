<?php
/**
 * ProjectTransactionModel
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
 * ProjectTransactionModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectTransactionModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectTransaction';

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
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\ProjectTransactionDetailModel[]',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'module' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'originalDocNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'originalDocType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'totalAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'totalBillableQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'totalQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
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
        'createdDateTime' => null,
        'description' => null,
        'details' => null,
        'lastModifiedDateTime' => null,
        'module' => null,
        'originalDocNbr' => null,
        'originalDocType' => null,
        'referenceNbr' => null,
        'status' => null,
        'totalAmount' => null,
        'totalBillableQty' => null,
        'totalQty' => null
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
        'createdDateTime' => 'CreatedDateTime',
        'description' => 'Description',
        'details' => 'Details',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'module' => 'Module',
        'originalDocNbr' => 'OriginalDocNbr',
        'originalDocType' => 'OriginalDocType',
        'referenceNbr' => 'ReferenceNbr',
        'status' => 'Status',
        'totalAmount' => 'TotalAmount',
        'totalBillableQty' => 'TotalBillableQty',
        'totalQty' => 'TotalQty'
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
        'createdDateTime' => 'setCreatedDateTime',
        'description' => 'setDescription',
        'details' => 'setDetails',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'module' => 'setModule',
        'originalDocNbr' => 'setOriginalDocNbr',
        'originalDocType' => 'setOriginalDocType',
        'referenceNbr' => 'setReferenceNbr',
        'status' => 'setStatus',
        'totalAmount' => 'setTotalAmount',
        'totalBillableQty' => 'setTotalBillableQty',
        'totalQty' => 'setTotalQty'
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
        'createdDateTime' => 'getCreatedDateTime',
        'description' => 'getDescription',
        'details' => 'getDetails',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'module' => 'getModule',
        'originalDocNbr' => 'getOriginalDocNbr',
        'originalDocType' => 'getOriginalDocType',
        'referenceNbr' => 'getReferenceNbr',
        'status' => 'getStatus',
        'totalAmount' => 'getTotalAmount',
        'totalBillableQty' => 'getTotalBillableQty',
        'totalQty' => 'getTotalQty'
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
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['originalDocNbr'] = isset($data['originalDocNbr']) ? $data['originalDocNbr'] : null;
        $this->container['originalDocType'] = isset($data['originalDocType']) ? $data['originalDocType'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['totalBillableQty'] = isset($data['totalBillableQty']) ? $data['totalBillableQty'] : null;
        $this->container['totalQty'] = isset($data['totalQty']) ? $data['totalQty'] : null;
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
     * Gets details
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ProjectTransactionDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ProjectTransactionDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
     * Gets originalDocNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOriginalDocNbr()
    {
        return $this->container['originalDocNbr'];
    }

    /**
     * Sets originalDocNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $originalDocNbr originalDocNbr
     *
     * @return $this
     */
    public function setOriginalDocNbr($originalDocNbr)
    {
        $this->container['originalDocNbr'] = $originalDocNbr;

        return $this;
    }

    /**
     * Gets originalDocType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOriginalDocType()
    {
        return $this->container['originalDocType'];
    }

    /**
     * Sets originalDocType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $originalDocType originalDocType
     *
     * @return $this
     */
    public function setOriginalDocType($originalDocType)
    {
        $this->container['originalDocType'] = $originalDocType;

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
     * Gets status
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $totalAmount totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets totalBillableQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTotalBillableQty()
    {
        return $this->container['totalBillableQty'];
    }

    /**
     * Sets totalBillableQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $totalBillableQty totalBillableQty
     *
     * @return $this
     */
    public function setTotalBillableQty($totalBillableQty)
    {
        $this->container['totalBillableQty'] = $totalBillableQty;

        return $this;
    }

    /**
     * Gets totalQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTotalQty()
    {
        return $this->container['totalQty'];
    }

    /**
     * Sets totalQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $totalQty totalQty
     *
     * @return $this
     */
    public function setTotalQty($totalQty)
    {
        $this->container['totalQty'] = $totalQty;

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


