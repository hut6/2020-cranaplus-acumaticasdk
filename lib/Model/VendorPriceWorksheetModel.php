<?php
/**
 * VendorPriceWorksheetModel
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
 * VendorPriceWorksheetModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VendorPriceWorksheetModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VendorPriceWorksheet';

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
        'effectiveDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'expirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'hold' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'overwriteOverlappingPrices' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'promotional' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vendorSalesPrices' => '\Hut6\CranaplusAcumaticaSdk\Model\VendorPriceWorksheetDetailModel[]'
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
        'effectiveDate' => null,
        'expirationDate' => null,
        'hold' => null,
        'lastModifiedDateTime' => null,
        'overwriteOverlappingPrices' => null,
        'promotional' => null,
        'referenceNbr' => null,
        'status' => null,
        'vendorSalesPrices' => null
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
        'effectiveDate' => 'EffectiveDate',
        'expirationDate' => 'ExpirationDate',
        'hold' => 'Hold',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'overwriteOverlappingPrices' => 'OverwriteOverlappingPrices',
        'promotional' => 'Promotional',
        'referenceNbr' => 'ReferenceNbr',
        'status' => 'Status',
        'vendorSalesPrices' => 'VendorSalesPrices'
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
        'effectiveDate' => 'setEffectiveDate',
        'expirationDate' => 'setExpirationDate',
        'hold' => 'setHold',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'overwriteOverlappingPrices' => 'setOverwriteOverlappingPrices',
        'promotional' => 'setPromotional',
        'referenceNbr' => 'setReferenceNbr',
        'status' => 'setStatus',
        'vendorSalesPrices' => 'setVendorSalesPrices'
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
        'effectiveDate' => 'getEffectiveDate',
        'expirationDate' => 'getExpirationDate',
        'hold' => 'getHold',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'overwriteOverlappingPrices' => 'getOverwriteOverlappingPrices',
        'promotional' => 'getPromotional',
        'referenceNbr' => 'getReferenceNbr',
        'status' => 'getStatus',
        'vendorSalesPrices' => 'getVendorSalesPrices'
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
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['overwriteOverlappingPrices'] = isset($data['overwriteOverlappingPrices']) ? $data['overwriteOverlappingPrices'] : null;
        $this->container['promotional'] = isset($data['promotional']) ? $data['promotional'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vendorSalesPrices'] = isset($data['vendorSalesPrices']) ? $data['vendorSalesPrices'] : null;
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
     * Gets hold
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getHold()
    {
        return $this->container['hold'];
    }

    /**
     * Sets hold
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $hold hold
     *
     * @return $this
     */
    public function setHold($hold)
    {
        $this->container['hold'] = $hold;

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
     * Gets overwriteOverlappingPrices
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getOverwriteOverlappingPrices()
    {
        return $this->container['overwriteOverlappingPrices'];
    }

    /**
     * Sets overwriteOverlappingPrices
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $overwriteOverlappingPrices overwriteOverlappingPrices
     *
     * @return $this
     */
    public function setOverwriteOverlappingPrices($overwriteOverlappingPrices)
    {
        $this->container['overwriteOverlappingPrices'] = $overwriteOverlappingPrices;

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
     * Gets vendorSalesPrices
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\VendorPriceWorksheetDetailModel[]
     */
    public function getVendorSalesPrices()
    {
        return $this->container['vendorSalesPrices'];
    }

    /**
     * Sets vendorSalesPrices
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\VendorPriceWorksheetDetailModel[] $vendorSalesPrices vendorSalesPrices
     *
     * @return $this
     */
    public function setVendorSalesPrices($vendorSalesPrices)
    {
        $this->container['vendorSalesPrices'] = $vendorSalesPrices;

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


