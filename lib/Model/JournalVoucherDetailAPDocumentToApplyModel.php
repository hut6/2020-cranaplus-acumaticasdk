<?php
/**
 * JournalVoucherDetailAPDocumentToApplyModel
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
 * JournalVoucherDetailAPDocumentToApplyModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalVoucherDetailAPDocumentToApplyModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalVoucherDetailAPDocumentToApply';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'docType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vendorRef' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'withTax' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'withTaxBalance' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'docType' => null,
        'referenceNbr' => null,
        'vendorRef' => null,
        'withTax' => null,
        'withTaxBalance' => null
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
        'docType' => 'DocType',
        'referenceNbr' => 'ReferenceNbr',
        'vendorRef' => 'VendorRef',
        'withTax' => 'WithTax',
        'withTaxBalance' => 'WithTaxBalance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'docType' => 'setDocType',
        'referenceNbr' => 'setReferenceNbr',
        'vendorRef' => 'setVendorRef',
        'withTax' => 'setWithTax',
        'withTaxBalance' => 'setWithTaxBalance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'docType' => 'getDocType',
        'referenceNbr' => 'getReferenceNbr',
        'vendorRef' => 'getVendorRef',
        'withTax' => 'getWithTax',
        'withTaxBalance' => 'getWithTaxBalance'
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

        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['vendorRef'] = isset($data['vendorRef']) ? $data['vendorRef'] : null;
        $this->container['withTax'] = isset($data['withTax']) ? $data['withTax'] : null;
        $this->container['withTaxBalance'] = isset($data['withTaxBalance']) ? $data['withTaxBalance'] : null;
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
     * Gets vendorRef
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getVendorRef()
    {
        return $this->container['vendorRef'];
    }

    /**
     * Sets vendorRef
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $vendorRef vendorRef
     *
     * @return $this
     */
    public function setVendorRef($vendorRef)
    {
        $this->container['vendorRef'] = $vendorRef;

        return $this;
    }

    /**
     * Gets withTax
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getWithTax()
    {
        return $this->container['withTax'];
    }

    /**
     * Sets withTax
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $withTax withTax
     *
     * @return $this
     */
    public function setWithTax($withTax)
    {
        $this->container['withTax'] = $withTax;

        return $this;
    }

    /**
     * Gets withTaxBalance
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getWithTaxBalance()
    {
        return $this->container['withTaxBalance'];
    }

    /**
     * Sets withTaxBalance
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $withTaxBalance withTaxBalance
     *
     * @return $this
     */
    public function setWithTaxBalance($withTaxBalance)
    {
        $this->container['withTaxBalance'] = $withTaxBalance;

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


