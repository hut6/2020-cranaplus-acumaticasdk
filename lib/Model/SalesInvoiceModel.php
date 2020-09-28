<?php
/**
 * SalesInvoiceModel
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
 * SalesInvoiceModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesInvoiceModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'balance' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'billingSettings' => '\Hut6\CranaplusAcumaticaSdk\Model\BillToSettingsModel',
        'customerID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'customerOrder' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'date' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\SalesInvoiceDetailModel[]',
        'dueDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'freightDetails' => '\Hut6\CranaplusAcumaticaSdk\Model\SalesInvoiceFreightDetailModel[]',
        'hold' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'type' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => null,
        'balance' => null,
        'billingSettings' => null,
        'customerID' => null,
        'customerOrder' => null,
        'date' => null,
        'description' => null,
        'details' => null,
        'dueDate' => null,
        'freightDetails' => null,
        'hold' => null,
        'referenceNbr' => null,
        'status' => null,
        'type' => null
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
        'amount' => 'Amount',
        'balance' => 'Balance',
        'billingSettings' => 'BillingSettings',
        'customerID' => 'CustomerID',
        'customerOrder' => 'CustomerOrder',
        'date' => 'Date',
        'description' => 'Description',
        'details' => 'Details',
        'dueDate' => 'DueDate',
        'freightDetails' => 'FreightDetails',
        'hold' => 'Hold',
        'referenceNbr' => 'ReferenceNbr',
        'status' => 'Status',
        'type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'balance' => 'setBalance',
        'billingSettings' => 'setBillingSettings',
        'customerID' => 'setCustomerID',
        'customerOrder' => 'setCustomerOrder',
        'date' => 'setDate',
        'description' => 'setDescription',
        'details' => 'setDetails',
        'dueDate' => 'setDueDate',
        'freightDetails' => 'setFreightDetails',
        'hold' => 'setHold',
        'referenceNbr' => 'setReferenceNbr',
        'status' => 'setStatus',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'balance' => 'getBalance',
        'billingSettings' => 'getBillingSettings',
        'customerID' => 'getCustomerID',
        'customerOrder' => 'getCustomerOrder',
        'date' => 'getDate',
        'description' => 'getDescription',
        'details' => 'getDetails',
        'dueDate' => 'getDueDate',
        'freightDetails' => 'getFreightDetails',
        'hold' => 'getHold',
        'referenceNbr' => 'getReferenceNbr',
        'status' => 'getStatus',
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

        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['billingSettings'] = isset($data['billingSettings']) ? $data['billingSettings'] : null;
        $this->container['customerID'] = isset($data['customerID']) ? $data['customerID'] : null;
        $this->container['customerOrder'] = isset($data['customerOrder']) ? $data['customerOrder'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['freightDetails'] = isset($data['freightDetails']) ? $data['freightDetails'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets amount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets billingSettings
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BillToSettingsModel
     */
    public function getBillingSettings()
    {
        return $this->container['billingSettings'];
    }

    /**
     * Sets billingSettings
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BillToSettingsModel $billingSettings billingSettings
     *
     * @return $this
     */
    public function setBillingSettings($billingSettings)
    {
        $this->container['billingSettings'] = $billingSettings;

        return $this;
    }

    /**
     * Gets customerID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCustomerID()
    {
        return $this->container['customerID'];
    }

    /**
     * Sets customerID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $customerID customerID
     *
     * @return $this
     */
    public function setCustomerID($customerID)
    {
        $this->container['customerID'] = $customerID;

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
     * @return \Hut6\CranaplusAcumaticaSdk\Model\SalesInvoiceDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\SalesInvoiceDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets dueDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getDueDate()
    {
        return $this->container['dueDate'];
    }

    /**
     * Sets dueDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $dueDate dueDate
     *
     * @return $this
     */
    public function setDueDate($dueDate)
    {
        $this->container['dueDate'] = $dueDate;

        return $this;
    }

    /**
     * Gets freightDetails
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\SalesInvoiceFreightDetailModel[]
     */
    public function getFreightDetails()
    {
        return $this->container['freightDetails'];
    }

    /**
     * Sets freightDetails
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\SalesInvoiceFreightDetailModel[] $freightDetails freightDetails
     *
     * @return $this
     */
    public function setFreightDetails($freightDetails)
    {
        $this->container['freightDetails'] = $freightDetails;

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


