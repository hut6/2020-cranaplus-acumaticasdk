<?php
/**
 * PurchaseReceiptModel
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
 * PurchaseReceiptModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PurchaseReceiptModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PurchaseReceipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'controlAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'controlQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'createBill' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'date' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\PurchaseReceiptDetailModel[]',
        'hold' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'postPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'receiptNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'totalAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'totalQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'type' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vendorID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vendorRef' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'controlAmount' => null,
        'controlQty' => null,
        'createBill' => null,
        'currencyID' => null,
        'date' => null,
        'details' => null,
        'hold' => null,
        'postPeriod' => null,
        'receiptNbr' => null,
        'status' => null,
        'totalAmount' => null,
        'totalQty' => null,
        'type' => null,
        'vendorID' => null,
        'vendorRef' => null
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
        'controlAmount' => 'ControlAmount',
        'controlQty' => 'ControlQty',
        'createBill' => 'CreateBill',
        'currencyID' => 'CurrencyID',
        'date' => 'Date',
        'details' => 'Details',
        'hold' => 'Hold',
        'postPeriod' => 'PostPeriod',
        'receiptNbr' => 'ReceiptNbr',
        'status' => 'Status',
        'totalAmount' => 'TotalAmount',
        'totalQty' => 'TotalQty',
        'type' => 'Type',
        'vendorID' => 'VendorID',
        'vendorRef' => 'VendorRef'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'controlAmount' => 'setControlAmount',
        'controlQty' => 'setControlQty',
        'createBill' => 'setCreateBill',
        'currencyID' => 'setCurrencyID',
        'date' => 'setDate',
        'details' => 'setDetails',
        'hold' => 'setHold',
        'postPeriod' => 'setPostPeriod',
        'receiptNbr' => 'setReceiptNbr',
        'status' => 'setStatus',
        'totalAmount' => 'setTotalAmount',
        'totalQty' => 'setTotalQty',
        'type' => 'setType',
        'vendorID' => 'setVendorID',
        'vendorRef' => 'setVendorRef'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'controlAmount' => 'getControlAmount',
        'controlQty' => 'getControlQty',
        'createBill' => 'getCreateBill',
        'currencyID' => 'getCurrencyID',
        'date' => 'getDate',
        'details' => 'getDetails',
        'hold' => 'getHold',
        'postPeriod' => 'getPostPeriod',
        'receiptNbr' => 'getReceiptNbr',
        'status' => 'getStatus',
        'totalAmount' => 'getTotalAmount',
        'totalQty' => 'getTotalQty',
        'type' => 'getType',
        'vendorID' => 'getVendorID',
        'vendorRef' => 'getVendorRef'
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

        $this->container['controlAmount'] = isset($data['controlAmount']) ? $data['controlAmount'] : null;
        $this->container['controlQty'] = isset($data['controlQty']) ? $data['controlQty'] : null;
        $this->container['createBill'] = isset($data['createBill']) ? $data['createBill'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['postPeriod'] = isset($data['postPeriod']) ? $data['postPeriod'] : null;
        $this->container['receiptNbr'] = isset($data['receiptNbr']) ? $data['receiptNbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['totalQty'] = isset($data['totalQty']) ? $data['totalQty'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vendorID'] = isset($data['vendorID']) ? $data['vendorID'] : null;
        $this->container['vendorRef'] = isset($data['vendorRef']) ? $data['vendorRef'] : null;
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
     * Gets controlAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getControlAmount()
    {
        return $this->container['controlAmount'];
    }

    /**
     * Sets controlAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $controlAmount controlAmount
     *
     * @return $this
     */
    public function setControlAmount($controlAmount)
    {
        $this->container['controlAmount'] = $controlAmount;

        return $this;
    }

    /**
     * Gets controlQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getControlQty()
    {
        return $this->container['controlQty'];
    }

    /**
     * Sets controlQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $controlQty controlQty
     *
     * @return $this
     */
    public function setControlQty($controlQty)
    {
        $this->container['controlQty'] = $controlQty;

        return $this;
    }

    /**
     * Gets createBill
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getCreateBill()
    {
        return $this->container['createBill'];
    }

    /**
     * Sets createBill
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $createBill createBill
     *
     * @return $this
     */
    public function setCreateBill($createBill)
    {
        $this->container['createBill'] = $createBill;

        return $this;
    }

    /**
     * Gets currencyID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCurrencyID()
    {
        return $this->container['currencyID'];
    }

    /**
     * Sets currencyID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $currencyID currencyID
     *
     * @return $this
     */
    public function setCurrencyID($currencyID)
    {
        $this->container['currencyID'] = $currencyID;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\PurchaseReceiptDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\PurchaseReceiptDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
     * Gets postPeriod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPostPeriod()
    {
        return $this->container['postPeriod'];
    }

    /**
     * Sets postPeriod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $postPeriod postPeriod
     *
     * @return $this
     */
    public function setPostPeriod($postPeriod)
    {
        $this->container['postPeriod'] = $postPeriod;

        return $this;
    }

    /**
     * Gets receiptNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReceiptNbr()
    {
        return $this->container['receiptNbr'];
    }

    /**
     * Sets receiptNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $receiptNbr receiptNbr
     *
     * @return $this
     */
    public function setReceiptNbr($receiptNbr)
    {
        $this->container['receiptNbr'] = $receiptNbr;

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
     * Gets vendorID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getVendorID()
    {
        return $this->container['vendorID'];
    }

    /**
     * Sets vendorID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $vendorID vendorID
     *
     * @return $this
     */
    public function setVendorID($vendorID)
    {
        $this->container['vendorID'] = $vendorID;

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


