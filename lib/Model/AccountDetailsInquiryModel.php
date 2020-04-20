<?php
/**
 * AccountDetailsInquiryModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Default/17.200.001
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
 * AccountDetailsInquiryModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountDetailsInquiryModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountDetailsInquiry';

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
        'account' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'beginingBalance' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'endingBalance' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'fromDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'fromPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'includeReclassified' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'includeUnposted' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'includeUnreleased' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'ledger' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'periodEndDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'periodStartDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'results' => '\Hut6\CranaplusAcumaticaSdk\Model\AccountDetailsRowModel[]',
        'subaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'toDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'toPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'turnover' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
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
        'account' => null,
        'beginingBalance' => null,
        'branch' => null,
        'endingBalance' => null,
        'fromDate' => null,
        'fromPeriod' => null,
        'includeReclassified' => null,
        'includeUnposted' => null,
        'includeUnreleased' => null,
        'ledger' => null,
        'periodEndDate' => null,
        'periodStartDate' => null,
        'results' => null,
        'subaccount' => null,
        'toDate' => null,
        'toPeriod' => null,
        'turnover' => null
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
        'account' => 'Account',
        'beginingBalance' => 'BeginingBalance',
        'branch' => 'Branch',
        'endingBalance' => 'EndingBalance',
        'fromDate' => 'FromDate',
        'fromPeriod' => 'FromPeriod',
        'includeReclassified' => 'IncludeReclassified',
        'includeUnposted' => 'IncludeUnposted',
        'includeUnreleased' => 'IncludeUnreleased',
        'ledger' => 'Ledger',
        'periodEndDate' => 'PeriodEndDate',
        'periodStartDate' => 'PeriodStartDate',
        'results' => 'Results',
        'subaccount' => 'Subaccount',
        'toDate' => 'ToDate',
        'toPeriod' => 'ToPeriod',
        'turnover' => 'Turnover'
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
        'account' => 'setAccount',
        'beginingBalance' => 'setBeginingBalance',
        'branch' => 'setBranch',
        'endingBalance' => 'setEndingBalance',
        'fromDate' => 'setFromDate',
        'fromPeriod' => 'setFromPeriod',
        'includeReclassified' => 'setIncludeReclassified',
        'includeUnposted' => 'setIncludeUnposted',
        'includeUnreleased' => 'setIncludeUnreleased',
        'ledger' => 'setLedger',
        'periodEndDate' => 'setPeriodEndDate',
        'periodStartDate' => 'setPeriodStartDate',
        'results' => 'setResults',
        'subaccount' => 'setSubaccount',
        'toDate' => 'setToDate',
        'toPeriod' => 'setToPeriod',
        'turnover' => 'setTurnover'
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
        'account' => 'getAccount',
        'beginingBalance' => 'getBeginingBalance',
        'branch' => 'getBranch',
        'endingBalance' => 'getEndingBalance',
        'fromDate' => 'getFromDate',
        'fromPeriod' => 'getFromPeriod',
        'includeReclassified' => 'getIncludeReclassified',
        'includeUnposted' => 'getIncludeUnposted',
        'includeUnreleased' => 'getIncludeUnreleased',
        'ledger' => 'getLedger',
        'periodEndDate' => 'getPeriodEndDate',
        'periodStartDate' => 'getPeriodStartDate',
        'results' => 'getResults',
        'subaccount' => 'getSubaccount',
        'toDate' => 'getToDate',
        'toPeriod' => 'getToPeriod',
        'turnover' => 'getTurnover'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['beginingBalance'] = isset($data['beginingBalance']) ? $data['beginingBalance'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['endingBalance'] = isset($data['endingBalance']) ? $data['endingBalance'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['fromPeriod'] = isset($data['fromPeriod']) ? $data['fromPeriod'] : null;
        $this->container['includeReclassified'] = isset($data['includeReclassified']) ? $data['includeReclassified'] : null;
        $this->container['includeUnposted'] = isset($data['includeUnposted']) ? $data['includeUnposted'] : null;
        $this->container['includeUnreleased'] = isset($data['includeUnreleased']) ? $data['includeUnreleased'] : null;
        $this->container['ledger'] = isset($data['ledger']) ? $data['ledger'] : null;
        $this->container['periodEndDate'] = isset($data['periodEndDate']) ? $data['periodEndDate'] : null;
        $this->container['periodStartDate'] = isset($data['periodStartDate']) ? $data['periodStartDate'] : null;
        $this->container['results'] = isset($data['results']) ? $data['results'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['toPeriod'] = isset($data['toPeriod']) ? $data['toPeriod'] : null;
        $this->container['turnover'] = isset($data['turnover']) ? $data['turnover'] : null;
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
     * Gets beginingBalance
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getBeginingBalance()
    {
        return $this->container['beginingBalance'];
    }

    /**
     * Sets beginingBalance
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $beginingBalance beginingBalance
     *
     * @return $this
     */
    public function setBeginingBalance($beginingBalance)
    {
        $this->container['beginingBalance'] = $beginingBalance;

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
     * Gets endingBalance
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getEndingBalance()
    {
        return $this->container['endingBalance'];
    }

    /**
     * Sets endingBalance
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $endingBalance endingBalance
     *
     * @return $this
     */
    public function setEndingBalance($endingBalance)
    {
        $this->container['endingBalance'] = $endingBalance;

        return $this;
    }

    /**
     * Gets fromDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getFromDate()
    {
        return $this->container['fromDate'];
    }

    /**
     * Sets fromDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $fromDate fromDate
     *
     * @return $this
     */
    public function setFromDate($fromDate)
    {
        $this->container['fromDate'] = $fromDate;

        return $this;
    }

    /**
     * Gets fromPeriod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFromPeriod()
    {
        return $this->container['fromPeriod'];
    }

    /**
     * Sets fromPeriod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $fromPeriod fromPeriod
     *
     * @return $this
     */
    public function setFromPeriod($fromPeriod)
    {
        $this->container['fromPeriod'] = $fromPeriod;

        return $this;
    }

    /**
     * Gets includeReclassified
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getIncludeReclassified()
    {
        return $this->container['includeReclassified'];
    }

    /**
     * Sets includeReclassified
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $includeReclassified includeReclassified
     *
     * @return $this
     */
    public function setIncludeReclassified($includeReclassified)
    {
        $this->container['includeReclassified'] = $includeReclassified;

        return $this;
    }

    /**
     * Gets includeUnposted
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getIncludeUnposted()
    {
        return $this->container['includeUnposted'];
    }

    /**
     * Sets includeUnposted
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $includeUnposted includeUnposted
     *
     * @return $this
     */
    public function setIncludeUnposted($includeUnposted)
    {
        $this->container['includeUnposted'] = $includeUnposted;

        return $this;
    }

    /**
     * Gets includeUnreleased
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getIncludeUnreleased()
    {
        return $this->container['includeUnreleased'];
    }

    /**
     * Sets includeUnreleased
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $includeUnreleased includeUnreleased
     *
     * @return $this
     */
    public function setIncludeUnreleased($includeUnreleased)
    {
        $this->container['includeUnreleased'] = $includeUnreleased;

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
     * Gets periodEndDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getPeriodEndDate()
    {
        return $this->container['periodEndDate'];
    }

    /**
     * Sets periodEndDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $periodEndDate periodEndDate
     *
     * @return $this
     */
    public function setPeriodEndDate($periodEndDate)
    {
        $this->container['periodEndDate'] = $periodEndDate;

        return $this;
    }

    /**
     * Gets periodStartDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getPeriodStartDate()
    {
        return $this->container['periodStartDate'];
    }

    /**
     * Sets periodStartDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $periodStartDate periodStartDate
     *
     * @return $this
     */
    public function setPeriodStartDate($periodStartDate)
    {
        $this->container['periodStartDate'] = $periodStartDate;

        return $this;
    }

    /**
     * Gets results
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\AccountDetailsRowModel[]
     */
    public function getResults()
    {
        return $this->container['results'];
    }

    /**
     * Sets results
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\AccountDetailsRowModel[] $results results
     *
     * @return $this
     */
    public function setResults($results)
    {
        $this->container['results'] = $results;

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
     * Gets toDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getToDate()
    {
        return $this->container['toDate'];
    }

    /**
     * Sets toDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $toDate toDate
     *
     * @return $this
     */
    public function setToDate($toDate)
    {
        $this->container['toDate'] = $toDate;

        return $this;
    }

    /**
     * Gets toPeriod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getToPeriod()
    {
        return $this->container['toPeriod'];
    }

    /**
     * Sets toPeriod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $toPeriod toPeriod
     *
     * @return $this
     */
    public function setToPeriod($toPeriod)
    {
        $this->container['toPeriod'] = $toPeriod;

        return $this;
    }

    /**
     * Gets turnover
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTurnover()
    {
        return $this->container['turnover'];
    }

    /**
     * Sets turnover
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $turnover turnover
     *
     * @return $this
     */
    public function setTurnover($turnover)
    {
        $this->container['turnover'] = $turnover;

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


