<?php
/**
 * JournalVoucherGLTransactionModel
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
 * JournalVoucherGLTransactionModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JournalVoucherGLTransactionModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JournalVoucherGLTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'batchNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'creditAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'debitAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'module' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'qty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'referenceNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'transactionDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'transactionDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => null,
        'batchNbr' => null,
        'creditAmount' => null,
        'currencyID' => null,
        'debitAmount' => null,
        'lineNbr' => null,
        'module' => null,
        'qty' => null,
        'referenceNbr' => null,
        'subaccount' => null,
        'transactionDate' => null,
        'transactionDescription' => null
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
        'account' => 'Account',
        'batchNbr' => 'BatchNbr',
        'creditAmount' => 'CreditAmount',
        'currencyID' => 'CurrencyID',
        'debitAmount' => 'DebitAmount',
        'lineNbr' => 'LineNbr',
        'module' => 'Module',
        'qty' => 'Qty',
        'referenceNbr' => 'ReferenceNbr',
        'subaccount' => 'Subaccount',
        'transactionDate' => 'TransactionDate',
        'transactionDescription' => 'TransactionDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'batchNbr' => 'setBatchNbr',
        'creditAmount' => 'setCreditAmount',
        'currencyID' => 'setCurrencyID',
        'debitAmount' => 'setDebitAmount',
        'lineNbr' => 'setLineNbr',
        'module' => 'setModule',
        'qty' => 'setQty',
        'referenceNbr' => 'setReferenceNbr',
        'subaccount' => 'setSubaccount',
        'transactionDate' => 'setTransactionDate',
        'transactionDescription' => 'setTransactionDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'batchNbr' => 'getBatchNbr',
        'creditAmount' => 'getCreditAmount',
        'currencyID' => 'getCurrencyID',
        'debitAmount' => 'getDebitAmount',
        'lineNbr' => 'getLineNbr',
        'module' => 'getModule',
        'qty' => 'getQty',
        'referenceNbr' => 'getReferenceNbr',
        'subaccount' => 'getSubaccount',
        'transactionDate' => 'getTransactionDate',
        'transactionDescription' => 'getTransactionDescription'
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

        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['batchNbr'] = isset($data['batchNbr']) ? $data['batchNbr'] : null;
        $this->container['creditAmount'] = isset($data['creditAmount']) ? $data['creditAmount'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['debitAmount'] = isset($data['debitAmount']) ? $data['debitAmount'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['module'] = isset($data['module']) ? $data['module'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['referenceNbr'] = isset($data['referenceNbr']) ? $data['referenceNbr'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['transactionDate'] = isset($data['transactionDate']) ? $data['transactionDate'] : null;
        $this->container['transactionDescription'] = isset($data['transactionDescription']) ? $data['transactionDescription'] : null;
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
     * Gets account
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

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
     * Gets creditAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCreditAmount()
    {
        return $this->container['creditAmount'];
    }

    /**
     * Sets creditAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $creditAmount creditAmount
     *
     * @return $this
     */
    public function setCreditAmount($creditAmount)
    {
        $this->container['creditAmount'] = $creditAmount;

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
     * Gets debitAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDebitAmount()
    {
        return $this->container['debitAmount'];
    }

    /**
     * Sets debitAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $debitAmount debitAmount
     *
     * @return $this
     */
    public function setDebitAmount($debitAmount)
    {
        $this->container['debitAmount'] = $debitAmount;

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
     * Gets qty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

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
     * Gets subaccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubaccount()
    {
        return $this->container['subaccount'];
    }

    /**
     * Sets subaccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subaccount subaccount
     *
     * @return $this
     */
    public function setSubaccount($subaccount)
    {
        $this->container['subaccount'] = $subaccount;

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
     * Gets transactionDescription
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTransactionDescription()
    {
        return $this->container['transactionDescription'];
    }

    /**
     * Sets transactionDescription
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $transactionDescription transactionDescription
     *
     * @return $this
     */
    public function setTransactionDescription($transactionDescription)
    {
        $this->container['transactionDescription'] = $transactionDescription;

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


