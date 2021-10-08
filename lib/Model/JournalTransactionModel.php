<?php
/**
 * JournalTransactionModel
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
 * JournalTransactionModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalTransactionModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batchNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'branchID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\JournalTransactionDetailModel[]',
        'hold' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'ledgerID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'module' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'postPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'transactionDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batchNbr' => null,
        'branchID' => null,
        'createdDateTime' => null,
        'currencyID' => null,
        'description' => null,
        'details' => null,
        'hold' => null,
        'lastModifiedDateTime' => null,
        'ledgerID' => null,
        'module' => null,
        'postPeriod' => null,
        'status' => null,
        'transactionDate' => null
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
        'batchNbr' => 'BatchNbr',
        'branchID' => 'BranchID',
        'createdDateTime' => 'CreatedDateTime',
        'currencyID' => 'CurrencyID',
        'description' => 'Description',
        'details' => 'Details',
        'hold' => 'Hold',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'ledgerID' => 'LedgerID',
        'module' => 'Module',
        'postPeriod' => 'PostPeriod',
        'status' => 'Status',
        'transactionDate' => 'TransactionDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batchNbr' => 'setBatchNbr',
        'branchID' => 'setBranchID',
        'createdDateTime' => 'setCreatedDateTime',
        'currencyID' => 'setCurrencyID',
        'description' => 'setDescription',
        'details' => 'setDetails',
        'hold' => 'setHold',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'ledgerID' => 'setLedgerID',
        'module' => 'setModule',
        'postPeriod' => 'setPostPeriod',
        'status' => 'setStatus',
        'transactionDate' => 'setTransactionDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batchNbr' => 'getBatchNbr',
        'branchID' => 'getBranchID',
        'createdDateTime' => 'getCreatedDateTime',
        'currencyID' => 'getCurrencyID',
        'description' => 'getDescription',
        'details' => 'getDetails',
        'hold' => 'getHold',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'ledgerID' => 'getLedgerID',
        'module' => 'getModule',
        'postPeriod' => 'getPostPeriod',
        'status' => 'getStatus',
        'transactionDate' => 'getTransactionDate'
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

        $this->container['batchNbr'] = isset($data['batchNbr']) ? $data['batchNbr'] : null;
        $this->container['branchID'] = isset($data['branchID']) ? $data['branchID'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['ledgerID'] = isset($data['ledgerID']) ? $data['ledgerID'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['postPeriod'] = isset($data['postPeriod']) ? $data['postPeriod'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['transactionDate'] = isset($data['transactionDate']) ? $data['transactionDate'] : null;
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
     * Gets batchNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBatchNbr()
    {
        return $this->container['batchNbr'];
    }

    /**
     * Sets batchNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $batchNbr batchNbr
     *
     * @return $this
     */
    public function setBatchNbr($batchNbr)
    {
        $this->container['batchNbr'] = $batchNbr;

        return $this;
    }

    /**
     * Gets branchID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBranchID()
    {
        return $this->container['branchID'];
    }

    /**
     * Sets branchID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $branchID branchID
     *
     * @return $this
     */
    public function setBranchID($branchID)
    {
        $this->container['branchID'] = $branchID;

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
     * @return \Hut6\CranaplusAcumaticaSdk\Model\JournalTransactionDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\JournalTransactionDetailModel[] $details details
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
     * Gets ledgerID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLedgerID()
    {
        return $this->container['ledgerID'];
    }

    /**
     * Sets ledgerID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $ledgerID ledgerID
     *
     * @return $this
     */
    public function setLedgerID($ledgerID)
    {
        $this->container['ledgerID'] = $ledgerID;

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
     * Gets transactionDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $transactionDate transactionDate
     *
     * @return $this
     */
    public function setTransactionDate($transactionDate)
    {
        $this->container['transactionDate'] = $transactionDate;

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


