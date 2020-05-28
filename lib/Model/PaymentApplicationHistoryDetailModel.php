<?php
/**
 * PaymentApplicationHistoryDetailModel
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
 * PaymentApplicationHistoryDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentApplicationHistoryDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentApplicationHistoryDetail';

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
        'adjustingDocType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'adjustingRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'adjustmentNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'adjustsVAT' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'amountPaid' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'applicationPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'balance' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'balanceWriteOff' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'batchNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'cashDiscountBalance' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'cashDiscountDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'cashDiscountTaken' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'customer' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'customerOrder' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'date' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'adjustedDocType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'displayDocType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'dueDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'postPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'adjustedRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'displayRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'vATCreditMemo' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'adjustingDocType' => null,
        'adjustingRefNbr' => null,
        'adjustmentNbr' => null,
        'adjustsVAT' => null,
        'amountPaid' => null,
        'applicationPeriod' => null,
        'balance' => null,
        'balanceWriteOff' => null,
        'batchNbr' => null,
        'cashDiscountBalance' => null,
        'cashDiscountDate' => null,
        'cashDiscountTaken' => null,
        'currencyID' => null,
        'customer' => null,
        'customerOrder' => null,
        'date' => null,
        'description' => null,
        'adjustedDocType' => null,
        'displayDocType' => null,
        'dueDate' => null,
        'postPeriod' => null,
        'adjustedRefNbr' => null,
        'displayRefNbr' => null,
        'vATCreditMemo' => null
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
        'adjustingDocType' => 'AdjustingDocType',
        'adjustingRefNbr' => 'AdjustingRefNbr',
        'adjustmentNbr' => 'AdjustmentNbr',
        'adjustsVAT' => 'AdjustsVAT',
        'amountPaid' => 'AmountPaid',
        'applicationPeriod' => 'ApplicationPeriod',
        'balance' => 'Balance',
        'balanceWriteOff' => 'BalanceWriteOff',
        'batchNbr' => 'BatchNbr',
        'cashDiscountBalance' => 'CashDiscountBalance',
        'cashDiscountDate' => 'CashDiscountDate',
        'cashDiscountTaken' => 'CashDiscountTaken',
        'currencyID' => 'CurrencyID',
        'customer' => 'Customer',
        'customerOrder' => 'CustomerOrder',
        'date' => 'Date',
        'description' => 'Description',
        'adjustedDocType' => 'AdjustedDocType',
        'displayDocType' => 'DisplayDocType',
        'dueDate' => 'DueDate',
        'postPeriod' => 'PostPeriod',
        'adjustedRefNbr' => 'AdjustedRefNbr',
        'displayRefNbr' => 'DisplayRefNbr',
        'vATCreditMemo' => 'VATCreditMemo'
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
        'adjustingDocType' => 'setAdjustingDocType',
        'adjustingRefNbr' => 'setAdjustingRefNbr',
        'adjustmentNbr' => 'setAdjustmentNbr',
        'adjustsVAT' => 'setAdjustsVAT',
        'amountPaid' => 'setAmountPaid',
        'applicationPeriod' => 'setApplicationPeriod',
        'balance' => 'setBalance',
        'balanceWriteOff' => 'setBalanceWriteOff',
        'batchNbr' => 'setBatchNbr',
        'cashDiscountBalance' => 'setCashDiscountBalance',
        'cashDiscountDate' => 'setCashDiscountDate',
        'cashDiscountTaken' => 'setCashDiscountTaken',
        'currencyID' => 'setCurrencyID',
        'customer' => 'setCustomer',
        'customerOrder' => 'setCustomerOrder',
        'date' => 'setDate',
        'description' => 'setDescription',
        'adjustedDocType' => 'setAdjustedDocType',
        'displayDocType' => 'setDisplayDocType',
        'dueDate' => 'setDueDate',
        'postPeriod' => 'setPostPeriod',
        'adjustedRefNbr' => 'setAdjustedRefNbr',
        'displayRefNbr' => 'setDisplayRefNbr',
        'vATCreditMemo' => 'setVATCreditMemo'
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
        'adjustingDocType' => 'getAdjustingDocType',
        'adjustingRefNbr' => 'getAdjustingRefNbr',
        'adjustmentNbr' => 'getAdjustmentNbr',
        'adjustsVAT' => 'getAdjustsVAT',
        'amountPaid' => 'getAmountPaid',
        'applicationPeriod' => 'getApplicationPeriod',
        'balance' => 'getBalance',
        'balanceWriteOff' => 'getBalanceWriteOff',
        'batchNbr' => 'getBatchNbr',
        'cashDiscountBalance' => 'getCashDiscountBalance',
        'cashDiscountDate' => 'getCashDiscountDate',
        'cashDiscountTaken' => 'getCashDiscountTaken',
        'currencyID' => 'getCurrencyID',
        'customer' => 'getCustomer',
        'customerOrder' => 'getCustomerOrder',
        'date' => 'getDate',
        'description' => 'getDescription',
        'adjustedDocType' => 'getAdjustedDocType',
        'displayDocType' => 'getDisplayDocType',
        'dueDate' => 'getDueDate',
        'postPeriod' => 'getPostPeriod',
        'adjustedRefNbr' => 'getAdjustedRefNbr',
        'displayRefNbr' => 'getDisplayRefNbr',
        'vATCreditMemo' => 'getVATCreditMemo'
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
        $this->container['adjustingDocType'] = isset($data['adjustingDocType']) ? $data['adjustingDocType'] : null;
        $this->container['adjustingRefNbr'] = isset($data['adjustingRefNbr']) ? $data['adjustingRefNbr'] : null;
        $this->container['adjustmentNbr'] = isset($data['adjustmentNbr']) ? $data['adjustmentNbr'] : null;
        $this->container['adjustsVAT'] = isset($data['adjustsVAT']) ? $data['adjustsVAT'] : null;
        $this->container['amountPaid'] = isset($data['amountPaid']) ? $data['amountPaid'] : null;
        $this->container['applicationPeriod'] = isset($data['applicationPeriod']) ? $data['applicationPeriod'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['balanceWriteOff'] = isset($data['balanceWriteOff']) ? $data['balanceWriteOff'] : null;
        $this->container['batchNbr'] = isset($data['batchNbr']) ? $data['batchNbr'] : null;
        $this->container['cashDiscountBalance'] = isset($data['cashDiscountBalance']) ? $data['cashDiscountBalance'] : null;
        $this->container['cashDiscountDate'] = isset($data['cashDiscountDate']) ? $data['cashDiscountDate'] : null;
        $this->container['cashDiscountTaken'] = isset($data['cashDiscountTaken']) ? $data['cashDiscountTaken'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['customerOrder'] = isset($data['customerOrder']) ? $data['customerOrder'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['adjustedDocType'] = isset($data['adjustedDocType']) ? $data['adjustedDocType'] : null;
        $this->container['displayDocType'] = isset($data['displayDocType']) ? $data['displayDocType'] : null;
        $this->container['dueDate'] = isset($data['dueDate']) ? $data['dueDate'] : null;
        $this->container['postPeriod'] = isset($data['postPeriod']) ? $data['postPeriod'] : null;
        $this->container['adjustedRefNbr'] = isset($data['adjustedRefNbr']) ? $data['adjustedRefNbr'] : null;
        $this->container['displayRefNbr'] = isset($data['displayRefNbr']) ? $data['displayRefNbr'] : null;
        $this->container['vATCreditMemo'] = isset($data['vATCreditMemo']) ? $data['vATCreditMemo'] : null;
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
     * Gets adjustingDocType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAdjustingDocType()
    {
        return $this->container['adjustingDocType'];
    }

    /**
     * Sets adjustingDocType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $adjustingDocType adjustingDocType
     *
     * @return $this
     */
    public function setAdjustingDocType($adjustingDocType)
    {
        $this->container['adjustingDocType'] = $adjustingDocType;

        return $this;
    }

    /**
     * Gets adjustingRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAdjustingRefNbr()
    {
        return $this->container['adjustingRefNbr'];
    }

    /**
     * Sets adjustingRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $adjustingRefNbr adjustingRefNbr
     *
     * @return $this
     */
    public function setAdjustingRefNbr($adjustingRefNbr)
    {
        $this->container['adjustingRefNbr'] = $adjustingRefNbr;

        return $this;
    }

    /**
     * Gets adjustmentNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getAdjustmentNbr()
    {
        return $this->container['adjustmentNbr'];
    }

    /**
     * Sets adjustmentNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $adjustmentNbr adjustmentNbr
     *
     * @return $this
     */
    public function setAdjustmentNbr($adjustmentNbr)
    {
        $this->container['adjustmentNbr'] = $adjustmentNbr;

        return $this;
    }

    /**
     * Gets adjustsVAT
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getAdjustsVAT()
    {
        return $this->container['adjustsVAT'];
    }

    /**
     * Sets adjustsVAT
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $adjustsVAT adjustsVAT
     *
     * @return $this
     */
    public function setAdjustsVAT($adjustsVAT)
    {
        $this->container['adjustsVAT'] = $adjustsVAT;

        return $this;
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
     * Gets applicationPeriod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getApplicationPeriod()
    {
        return $this->container['applicationPeriod'];
    }

    /**
     * Sets applicationPeriod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $applicationPeriod applicationPeriod
     *
     * @return $this
     */
    public function setApplicationPeriod($applicationPeriod)
    {
        $this->container['applicationPeriod'] = $applicationPeriod;

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
     * Gets cashDiscountBalance
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCashDiscountBalance()
    {
        return $this->container['cashDiscountBalance'];
    }

    /**
     * Sets cashDiscountBalance
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $cashDiscountBalance cashDiscountBalance
     *
     * @return $this
     */
    public function setCashDiscountBalance($cashDiscountBalance)
    {
        $this->container['cashDiscountBalance'] = $cashDiscountBalance;

        return $this;
    }

    /**
     * Gets cashDiscountDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getCashDiscountDate()
    {
        return $this->container['cashDiscountDate'];
    }

    /**
     * Sets cashDiscountDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $cashDiscountDate cashDiscountDate
     *
     * @return $this
     */
    public function setCashDiscountDate($cashDiscountDate)
    {
        $this->container['cashDiscountDate'] = $cashDiscountDate;

        return $this;
    }

    /**
     * Gets cashDiscountTaken
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCashDiscountTaken()
    {
        return $this->container['cashDiscountTaken'];
    }

    /**
     * Sets cashDiscountTaken
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $cashDiscountTaken cashDiscountTaken
     *
     * @return $this
     */
    public function setCashDiscountTaken($cashDiscountTaken)
    {
        $this->container['cashDiscountTaken'] = $cashDiscountTaken;

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
     * Gets customer
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

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
     * Gets adjustedDocType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAdjustedDocType()
    {
        return $this->container['adjustedDocType'];
    }

    /**
     * Sets adjustedDocType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $adjustedDocType adjustedDocType
     *
     * @return $this
     */
    public function setAdjustedDocType($adjustedDocType)
    {
        $this->container['adjustedDocType'] = $adjustedDocType;

        return $this;
    }

    /**
     * Gets displayDocType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDisplayDocType()
    {
        return $this->container['displayDocType'];
    }

    /**
     * Sets displayDocType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $displayDocType displayDocType
     *
     * @return $this
     */
    public function setDisplayDocType($displayDocType)
    {
        $this->container['displayDocType'] = $displayDocType;

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
     * Gets adjustedRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAdjustedRefNbr()
    {
        return $this->container['adjustedRefNbr'];
    }

    /**
     * Sets adjustedRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $adjustedRefNbr adjustedRefNbr
     *
     * @return $this
     */
    public function setAdjustedRefNbr($adjustedRefNbr)
    {
        $this->container['adjustedRefNbr'] = $adjustedRefNbr;

        return $this;
    }

    /**
     * Gets displayRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDisplayRefNbr()
    {
        return $this->container['displayRefNbr'];
    }

    /**
     * Sets displayRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $displayRefNbr displayRefNbr
     *
     * @return $this
     */
    public function setDisplayRefNbr($displayRefNbr)
    {
        $this->container['displayRefNbr'] = $displayRefNbr;

        return $this;
    }

    /**
     * Gets vATCreditMemo
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getVATCreditMemo()
    {
        return $this->container['vATCreditMemo'];
    }

    /**
     * Sets vATCreditMemo
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $vATCreditMemo vATCreditMemo
     *
     * @return $this
     */
    public function setVATCreditMemo($vATCreditMemo)
    {
        $this->container['vATCreditMemo'] = $vATCreditMemo;

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


