<?php
/**
 * PhysicalInventoryReviewDetailModel
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
 * PhysicalInventoryReviewDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PhysicalInventoryReviewDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PhysicalInventoryReviewDetail';

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
        'bookQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'expirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'extendedVarianceCost' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'inventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'locationID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lotSerialNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'physicalQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'reasonCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subitem' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'tagNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'unitCost' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'varianceQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
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
        'bookQty' => null,
        'description' => null,
        'expirationDate' => null,
        'extendedVarianceCost' => null,
        'inventoryID' => null,
        'lineNbr' => null,
        'locationID' => null,
        'lotSerialNbr' => null,
        'physicalQty' => null,
        'reasonCode' => null,
        'status' => null,
        'subitem' => null,
        'tagNbr' => null,
        'unitCost' => null,
        'varianceQty' => null
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
        'bookQty' => 'BookQty',
        'description' => 'Description',
        'expirationDate' => 'ExpirationDate',
        'extendedVarianceCost' => 'ExtendedVarianceCost',
        'inventoryID' => 'InventoryID',
        'lineNbr' => 'LineNbr',
        'locationID' => 'LocationID',
        'lotSerialNbr' => 'LotSerialNbr',
        'physicalQty' => 'PhysicalQty',
        'reasonCode' => 'ReasonCode',
        'status' => 'Status',
        'subitem' => 'Subitem',
        'tagNbr' => 'TagNbr',
        'unitCost' => 'UnitCost',
        'varianceQty' => 'VarianceQty'
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
        'bookQty' => 'setBookQty',
        'description' => 'setDescription',
        'expirationDate' => 'setExpirationDate',
        'extendedVarianceCost' => 'setExtendedVarianceCost',
        'inventoryID' => 'setInventoryID',
        'lineNbr' => 'setLineNbr',
        'locationID' => 'setLocationID',
        'lotSerialNbr' => 'setLotSerialNbr',
        'physicalQty' => 'setPhysicalQty',
        'reasonCode' => 'setReasonCode',
        'status' => 'setStatus',
        'subitem' => 'setSubitem',
        'tagNbr' => 'setTagNbr',
        'unitCost' => 'setUnitCost',
        'varianceQty' => 'setVarianceQty'
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
        'bookQty' => 'getBookQty',
        'description' => 'getDescription',
        'expirationDate' => 'getExpirationDate',
        'extendedVarianceCost' => 'getExtendedVarianceCost',
        'inventoryID' => 'getInventoryID',
        'lineNbr' => 'getLineNbr',
        'locationID' => 'getLocationID',
        'lotSerialNbr' => 'getLotSerialNbr',
        'physicalQty' => 'getPhysicalQty',
        'reasonCode' => 'getReasonCode',
        'status' => 'getStatus',
        'subitem' => 'getSubitem',
        'tagNbr' => 'getTagNbr',
        'unitCost' => 'getUnitCost',
        'varianceQty' => 'getVarianceQty'
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
        $this->container['bookQty'] = isset($data['bookQty']) ? $data['bookQty'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['extendedVarianceCost'] = isset($data['extendedVarianceCost']) ? $data['extendedVarianceCost'] : null;
        $this->container['inventoryID'] = isset($data['inventoryID']) ? $data['inventoryID'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['locationID'] = isset($data['locationID']) ? $data['locationID'] : null;
        $this->container['lotSerialNbr'] = isset($data['lotSerialNbr']) ? $data['lotSerialNbr'] : null;
        $this->container['physicalQty'] = isset($data['physicalQty']) ? $data['physicalQty'] : null;
        $this->container['reasonCode'] = isset($data['reasonCode']) ? $data['reasonCode'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subitem'] = isset($data['subitem']) ? $data['subitem'] : null;
        $this->container['tagNbr'] = isset($data['tagNbr']) ? $data['tagNbr'] : null;
        $this->container['unitCost'] = isset($data['unitCost']) ? $data['unitCost'] : null;
        $this->container['varianceQty'] = isset($data['varianceQty']) ? $data['varianceQty'] : null;
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
     * Gets bookQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getBookQty()
    {
        return $this->container['bookQty'];
    }

    /**
     * Sets bookQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $bookQty bookQty
     *
     * @return $this
     */
    public function setBookQty($bookQty)
    {
        $this->container['bookQty'] = $bookQty;

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
     * Gets extendedVarianceCost
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getExtendedVarianceCost()
    {
        return $this->container['extendedVarianceCost'];
    }

    /**
     * Sets extendedVarianceCost
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $extendedVarianceCost extendedVarianceCost
     *
     * @return $this
     */
    public function setExtendedVarianceCost($extendedVarianceCost)
    {
        $this->container['extendedVarianceCost'] = $extendedVarianceCost;

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
     * Gets physicalQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getPhysicalQty()
    {
        return $this->container['physicalQty'];
    }

    /**
     * Sets physicalQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $physicalQty physicalQty
     *
     * @return $this
     */
    public function setPhysicalQty($physicalQty)
    {
        $this->container['physicalQty'] = $physicalQty;

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
     * Gets tagNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getTagNbr()
    {
        return $this->container['tagNbr'];
    }

    /**
     * Sets tagNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $tagNbr tagNbr
     *
     * @return $this
     */
    public function setTagNbr($tagNbr)
    {
        $this->container['tagNbr'] = $tagNbr;

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
     * Gets varianceQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getVarianceQty()
    {
        return $this->container['varianceQty'];
    }

    /**
     * Sets varianceQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $varianceQty varianceQty
     *
     * @return $this
     */
    public function setVarianceQty($varianceQty)
    {
        $this->container['varianceQty'] = $varianceQty;

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


