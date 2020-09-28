<?php
/**
 * SalesPriceWorksheetModel
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
 * SalesPriceWorksheetModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesPriceWorksheetModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesPriceWorksheet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'effectiveDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'expirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'hold' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'overwriteOverlappingPrices' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'salesPrices' => '\Hut6\CranaplusAcumaticaSdk\Model\SalesPricesWorksheetDetailModel[]',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdDateTime' => null,
        'description' => null,
        'effectiveDate' => null,
        'expirationDate' => null,
        'hold' => null,
        'lastModifiedDateTime' => null,
        'overwriteOverlappingPrices' => null,
        'referenceNbr' => null,
        'salesPrices' => null,
        'status' => null
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
        'createdDateTime' => 'CreatedDateTime',
        'description' => 'Description',
        'effectiveDate' => 'EffectiveDate',
        'expirationDate' => 'ExpirationDate',
        'hold' => 'Hold',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'overwriteOverlappingPrices' => 'OverwriteOverlappingPrices',
        'referenceNbr' => 'ReferenceNbr',
        'salesPrices' => 'SalesPrices',
        'status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdDateTime' => 'setCreatedDateTime',
        'description' => 'setDescription',
        'effectiveDate' => 'setEffectiveDate',
        'expirationDate' => 'setExpirationDate',
        'hold' => 'setHold',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'overwriteOverlappingPrices' => 'setOverwriteOverlappingPrices',
        'referenceNbr' => 'setReferenceNbr',
        'salesPrices' => 'setSalesPrices',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdDateTime' => 'getCreatedDateTime',
        'description' => 'getDescription',
        'effectiveDate' => 'getEffectiveDate',
        'expirationDate' => 'getExpirationDate',
        'hold' => 'getHold',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'overwriteOverlappingPrices' => 'getOverwriteOverlappingPrices',
        'referenceNbr' => 'getReferenceNbr',
        'salesPrices' => 'getSalesPrices',
        'status' => 'getStatus'
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

        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['overwriteOverlappingPrices'] = isset($data['overwriteOverlappingPrices']) ? $data['overwriteOverlappingPrices'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['salesPrices'] = isset($data['salesPrices']) ? $data['salesPrices'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets salesPrices
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\SalesPricesWorksheetDetailModel[]
     */
    public function getSalesPrices()
    {
        return $this->container['salesPrices'];
    }

    /**
     * Sets salesPrices
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\SalesPricesWorksheetDetailModel[] $salesPrices salesPrices
     *
     * @return $this
     */
    public function setSalesPrices($salesPrices)
    {
        $this->container['salesPrices'] = $salesPrices;

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


