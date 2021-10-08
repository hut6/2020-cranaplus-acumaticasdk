<?php
/**
 * OpportunityTaxDetailModel
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
 * OpportunityTaxDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunityTaxDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OpportunityTaxDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'includeInVATExemptTotal' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'pendingVAT' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'reverseVAT' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'statisticalVAT' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'taxableAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'taxAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'taxID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'taxRate' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'taxType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'includeInVATExemptTotal' => null,
        'lineNbr' => null,
        'pendingVAT' => null,
        'reverseVAT' => null,
        'statisticalVAT' => null,
        'taxableAmount' => null,
        'taxAmount' => null,
        'taxID' => null,
        'taxRate' => null,
        'taxType' => null
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
        'includeInVATExemptTotal' => 'IncludeInVATExemptTotal',
        'lineNbr' => 'LineNbr',
        'pendingVAT' => 'PendingVAT',
        'reverseVAT' => 'ReverseVAT',
        'statisticalVAT' => 'StatisticalVAT',
        'taxableAmount' => 'TaxableAmount',
        'taxAmount' => 'TaxAmount',
        'taxID' => 'TaxID',
        'taxRate' => 'TaxRate',
        'taxType' => 'TaxType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'includeInVATExemptTotal' => 'setIncludeInVATExemptTotal',
        'lineNbr' => 'setLineNbr',
        'pendingVAT' => 'setPendingVAT',
        'reverseVAT' => 'setReverseVAT',
        'statisticalVAT' => 'setStatisticalVAT',
        'taxableAmount' => 'setTaxableAmount',
        'taxAmount' => 'setTaxAmount',
        'taxID' => 'setTaxID',
        'taxRate' => 'setTaxRate',
        'taxType' => 'setTaxType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'includeInVATExemptTotal' => 'getIncludeInVATExemptTotal',
        'lineNbr' => 'getLineNbr',
        'pendingVAT' => 'getPendingVAT',
        'reverseVAT' => 'getReverseVAT',
        'statisticalVAT' => 'getStatisticalVAT',
        'taxableAmount' => 'getTaxableAmount',
        'taxAmount' => 'getTaxAmount',
        'taxID' => 'getTaxID',
        'taxRate' => 'getTaxRate',
        'taxType' => 'getTaxType'
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

        $this->container['includeInVATExemptTotal'] = isset($data['includeInVATExemptTotal']) ? $data['includeInVATExemptTotal'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['pendingVAT'] = isset($data['pendingVAT']) ? $data['pendingVAT'] : null;
        $this->container['reverseVAT'] = isset($data['reverseVAT']) ? $data['reverseVAT'] : null;
        $this->container['statisticalVAT'] = isset($data['statisticalVAT']) ? $data['statisticalVAT'] : null;
        $this->container['taxableAmount'] = isset($data['taxableAmount']) ? $data['taxableAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['taxID'] = isset($data['taxID']) ? $data['taxID'] : null;
        $this->container['taxRate'] = isset($data['taxRate']) ? $data['taxRate'] : null;
        $this->container['taxType'] = isset($data['taxType']) ? $data['taxType'] : null;
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
     * Gets includeInVATExemptTotal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getIncludeInVATExemptTotal()
    {
        return $this->container['includeInVATExemptTotal'];
    }

    /**
     * Sets includeInVATExemptTotal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $includeInVATExemptTotal includeInVATExemptTotal
     *
     * @return $this
     */
    public function setIncludeInVATExemptTotal($includeInVATExemptTotal)
    {
        $this->container['includeInVATExemptTotal'] = $includeInVATExemptTotal;

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
     * Gets pendingVAT
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getPendingVAT()
    {
        return $this->container['pendingVAT'];
    }

    /**
     * Sets pendingVAT
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $pendingVAT pendingVAT
     *
     * @return $this
     */
    public function setPendingVAT($pendingVAT)
    {
        $this->container['pendingVAT'] = $pendingVAT;

        return $this;
    }

    /**
     * Gets reverseVAT
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getReverseVAT()
    {
        return $this->container['reverseVAT'];
    }

    /**
     * Sets reverseVAT
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $reverseVAT reverseVAT
     *
     * @return $this
     */
    public function setReverseVAT($reverseVAT)
    {
        $this->container['reverseVAT'] = $reverseVAT;

        return $this;
    }

    /**
     * Gets statisticalVAT
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getStatisticalVAT()
    {
        return $this->container['statisticalVAT'];
    }

    /**
     * Sets statisticalVAT
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $statisticalVAT statisticalVAT
     *
     * @return $this
     */
    public function setStatisticalVAT($statisticalVAT)
    {
        $this->container['statisticalVAT'] = $statisticalVAT;

        return $this;
    }

    /**
     * Gets taxableAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTaxableAmount()
    {
        return $this->container['taxableAmount'];
    }

    /**
     * Sets taxableAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $taxableAmount taxableAmount
     *
     * @return $this
     */
    public function setTaxableAmount($taxableAmount)
    {
        $this->container['taxableAmount'] = $taxableAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $taxAmount taxAmount
     *
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets taxID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTaxID()
    {
        return $this->container['taxID'];
    }

    /**
     * Sets taxID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $taxID taxID
     *
     * @return $this
     */
    public function setTaxID($taxID)
    {
        $this->container['taxID'] = $taxID;

        return $this;
    }

    /**
     * Gets taxRate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTaxRate()
    {
        return $this->container['taxRate'];
    }

    /**
     * Sets taxRate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $taxRate taxRate
     *
     * @return $this
     */
    public function setTaxRate($taxRate)
    {
        $this->container['taxRate'] = $taxRate;

        return $this;
    }

    /**
     * Gets taxType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTaxType()
    {
        return $this->container['taxType'];
    }

    /**
     * Sets taxType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $taxType taxType
     *
     * @return $this
     */
    public function setTaxType($taxType)
    {
        $this->container['taxType'] = $taxType;

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


