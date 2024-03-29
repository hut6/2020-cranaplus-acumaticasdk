<?php
/**
 * JournalVoucherModel
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
 * JournalVoucherModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalVoucherModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalVoucher';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'baseCurrencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'batchNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'controlTotal' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'creditTotal' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'currencyRate' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'currencyRateTypeID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'debitTotal' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\JournalVoucherDetailModel[]',
        'effectiveDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'hold' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'gLTransactions' => '\Hut6\CranaplusAcumaticaSdk\Model\JournalVoucherGLTransactionModel[]',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'ledger' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'postPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'reciprocalRate' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'transactionDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'baseCurrencyID' => null,
        'batchNbr' => null,
        'branch' => null,
        'controlTotal' => null,
        'createdDateTime' => null,
        'creditTotal' => null,
        'currencyID' => null,
        'currencyRate' => null,
        'currencyRateTypeID' => null,
        'debitTotal' => null,
        'description' => null,
        'details' => null,
        'effectiveDate' => null,
        'hold' => null,
        'gLTransactions' => null,
        'lastModifiedDateTime' => null,
        'ledger' => null,
        'postPeriod' => null,
        'reciprocalRate' => null,
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
        'baseCurrencyID' => 'BaseCurrencyID',
        'batchNbr' => 'BatchNbr',
        'branch' => 'Branch',
        'controlTotal' => 'ControlTotal',
        'createdDateTime' => 'CreatedDateTime',
        'creditTotal' => 'CreditTotal',
        'currencyID' => 'CurrencyID',
        'currencyRate' => 'CurrencyRate',
        'currencyRateTypeID' => 'CurrencyRateTypeID',
        'debitTotal' => 'DebitTotal',
        'description' => 'Description',
        'details' => 'Details',
        'effectiveDate' => 'EffectiveDate',
        'hold' => 'Hold',
        'gLTransactions' => 'GLTransactions',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'ledger' => 'Ledger',
        'postPeriod' => 'PostPeriod',
        'reciprocalRate' => 'ReciprocalRate',
        'status' => 'Status',
        'transactionDate' => 'TransactionDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'baseCurrencyID' => 'setBaseCurrencyID',
        'batchNbr' => 'setBatchNbr',
        'branch' => 'setBranch',
        'controlTotal' => 'setControlTotal',
        'createdDateTime' => 'setCreatedDateTime',
        'creditTotal' => 'setCreditTotal',
        'currencyID' => 'setCurrencyID',
        'currencyRate' => 'setCurrencyRate',
        'currencyRateTypeID' => 'setCurrencyRateTypeID',
        'debitTotal' => 'setDebitTotal',
        'description' => 'setDescription',
        'details' => 'setDetails',
        'effectiveDate' => 'setEffectiveDate',
        'hold' => 'setHold',
        'gLTransactions' => 'setGLTransactions',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'ledger' => 'setLedger',
        'postPeriod' => 'setPostPeriod',
        'reciprocalRate' => 'setReciprocalRate',
        'status' => 'setStatus',
        'transactionDate' => 'setTransactionDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'baseCurrencyID' => 'getBaseCurrencyID',
        'batchNbr' => 'getBatchNbr',
        'branch' => 'getBranch',
        'controlTotal' => 'getControlTotal',
        'createdDateTime' => 'getCreatedDateTime',
        'creditTotal' => 'getCreditTotal',
        'currencyID' => 'getCurrencyID',
        'currencyRate' => 'getCurrencyRate',
        'currencyRateTypeID' => 'getCurrencyRateTypeID',
        'debitTotal' => 'getDebitTotal',
        'description' => 'getDescription',
        'details' => 'getDetails',
        'effectiveDate' => 'getEffectiveDate',
        'hold' => 'getHold',
        'gLTransactions' => 'getGLTransactions',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'ledger' => 'getLedger',
        'postPeriod' => 'getPostPeriod',
        'reciprocalRate' => 'getReciprocalRate',
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

        $this->container['baseCurrencyID'] = isset($data['baseCurrencyID']) ? $data['baseCurrencyID'] : null;
        $this->container['batchNbr'] = isset($data['batchNbr']) ? $data['batchNbr'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['controlTotal'] = isset($data['controlTotal']) ? $data['controlTotal'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['creditTotal'] = isset($data['creditTotal']) ? $data['creditTotal'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['currencyRate'] = isset($data['currencyRate']) ? $data['currencyRate'] : null;
        $this->container['currencyRateTypeID'] = isset($data['currencyRateTypeID']) ? $data['currencyRateTypeID'] : null;
        $this->container['debitTotal'] = isset($data['debitTotal']) ? $data['debitTotal'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['hold'] = isset($data['hold']) ? $data['hold'] : null;
        $this->container['gLTransactions'] = isset($data['gLTransactions']) ? $data['gLTransactions'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['ledger'] = isset($data['ledger']) ? $data['ledger'] : null;
        $this->container['postPeriod'] = isset($data['postPeriod']) ? $data['postPeriod'] : null;
        $this->container['reciprocalRate'] = isset($data['reciprocalRate']) ? $data['reciprocalRate'] : null;
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
     * Gets baseCurrencyID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBaseCurrencyID()
    {
        return $this->container['baseCurrencyID'];
    }

    /**
     * Sets baseCurrencyID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $baseCurrencyID baseCurrencyID
     *
     * @return $this
     */
    public function setBaseCurrencyID($baseCurrencyID)
    {
        $this->container['baseCurrencyID'] = $baseCurrencyID;

        return $this;
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
     * Gets branch
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets controlTotal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getControlTotal()
    {
        return $this->container['controlTotal'];
    }

    /**
     * Sets controlTotal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $controlTotal controlTotal
     *
     * @return $this
     */
    public function setControlTotal($controlTotal)
    {
        $this->container['controlTotal'] = $controlTotal;

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
     * Gets creditTotal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCreditTotal()
    {
        return $this->container['creditTotal'];
    }

    /**
     * Sets creditTotal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $creditTotal creditTotal
     *
     * @return $this
     */
    public function setCreditTotal($creditTotal)
    {
        $this->container['creditTotal'] = $creditTotal;

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
     * Gets currencyRate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCurrencyRate()
    {
        return $this->container['currencyRate'];
    }

    /**
     * Sets currencyRate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $currencyRate currencyRate
     *
     * @return $this
     */
    public function setCurrencyRate($currencyRate)
    {
        $this->container['currencyRate'] = $currencyRate;

        return $this;
    }

    /**
     * Gets currencyRateTypeID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCurrencyRateTypeID()
    {
        return $this->container['currencyRateTypeID'];
    }

    /**
     * Sets currencyRateTypeID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $currencyRateTypeID currencyRateTypeID
     *
     * @return $this
     */
    public function setCurrencyRateTypeID($currencyRateTypeID)
    {
        $this->container['currencyRateTypeID'] = $currencyRateTypeID;

        return $this;
    }

    /**
     * Gets debitTotal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDebitTotal()
    {
        return $this->container['debitTotal'];
    }

    /**
     * Sets debitTotal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $debitTotal debitTotal
     *
     * @return $this
     */
    public function setDebitTotal($debitTotal)
    {
        $this->container['debitTotal'] = $debitTotal;

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
     * @return \Hut6\CranaplusAcumaticaSdk\Model\JournalVoucherDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\JournalVoucherDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

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
     * Gets gLTransactions
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\JournalVoucherGLTransactionModel[]
     */
    public function getGLTransactions()
    {
        return $this->container['gLTransactions'];
    }

    /**
     * Sets gLTransactions
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\JournalVoucherGLTransactionModel[] $gLTransactions gLTransactions
     *
     * @return $this
     */
    public function setGLTransactions($gLTransactions)
    {
        $this->container['gLTransactions'] = $gLTransactions;

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
     * Gets ledger
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLedger()
    {
        return $this->container['ledger'];
    }

    /**
     * Sets ledger
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $ledger ledger
     *
     * @return $this
     */
    public function setLedger($ledger)
    {
        $this->container['ledger'] = $ledger;

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
     * Gets reciprocalRate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getReciprocalRate()
    {
        return $this->container['reciprocalRate'];
    }

    /**
     * Sets reciprocalRate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $reciprocalRate reciprocalRate
     *
     * @return $this
     */
    public function setReciprocalRate($reciprocalRate)
    {
        $this->container['reciprocalRate'] = $reciprocalRate;

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


