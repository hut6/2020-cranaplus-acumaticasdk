<?php
/**
 * PaymentDetailModel
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
 * PaymentDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amountPaid' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'balanceWriteOff' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'customerOrder' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'docType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'writeOffReasonCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amountPaid' => null,
        'balanceWriteOff' => null,
        'customerOrder' => null,
        'description' => null,
        'docType' => null,
        'referenceNbr' => null,
        'writeOffReasonCode' => null
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
        'amountPaid' => 'AmountPaid',
        'balanceWriteOff' => 'BalanceWriteOff',
        'customerOrder' => 'CustomerOrder',
        'description' => 'Description',
        'docType' => 'DocType',
        'referenceNbr' => 'ReferenceNbr',
        'writeOffReasonCode' => 'WriteOffReasonCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amountPaid' => 'setAmountPaid',
        'balanceWriteOff' => 'setBalanceWriteOff',
        'customerOrder' => 'setCustomerOrder',
        'description' => 'setDescription',
        'docType' => 'setDocType',
        'referenceNbr' => 'setReferenceNbr',
        'writeOffReasonCode' => 'setWriteOffReasonCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amountPaid' => 'getAmountPaid',
        'balanceWriteOff' => 'getBalanceWriteOff',
        'customerOrder' => 'getCustomerOrder',
        'description' => 'getDescription',
        'docType' => 'getDocType',
        'referenceNbr' => 'getReferenceNbr',
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

        $this->container['amountPaid'] = isset($data['amountPaid']) ? $data['amountPaid'] : null;
        $this->container['balanceWriteOff'] = isset($data['balanceWriteOff']) ? $data['balanceWriteOff'] : null;
        $this->container['customerOrder'] = isset($data['customerOrder']) ? $data['customerOrder'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['docType'] = isset($data['docType']) ? $data['docType'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['writeOffReasonCode'] = isset($data['writeOffReasonCode']) ? $data['writeOffReasonCode'] : null;
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
     * Gets amountPaid
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getAmountPaid()
    {
        return $this->container['amountPaid'];
    }

    /**
     * Sets amountPaid
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $amountPaid amountPaid
     *
     * @return $this
     */
    public function setAmountPaid($amountPaid)
    {
        $this->container['amountPaid'] = $amountPaid;

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


