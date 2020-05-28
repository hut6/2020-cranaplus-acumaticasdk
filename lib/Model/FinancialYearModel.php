<?php
/**
 * FinancialYearModel
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
 * FinancialYearModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialYearModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialYear';

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
        'adjustToPeriodStart' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'belongsToNextYear' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'dayOfWeek' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\FinancialYearPeriodDetailModel[]',
        'financialYearStartsOn' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'firstFinancialYear' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'firstPeriodStartDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'hasAdjustmentPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'lengthOfFinancialPeriodInDays' => '\Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel',
        'nbrOfFinancialPeriods' => '\Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel',
        'periodsStartDayOfWeek' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'periodType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'userDefinedPeriods' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'yearEndCalculationMethod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'adjustToPeriodStart' => null,
        'belongsToNextYear' => null,
        'createdDateTime' => null,
        'dayOfWeek' => null,
        'details' => null,
        'financialYearStartsOn' => null,
        'firstFinancialYear' => null,
        'firstPeriodStartDate' => null,
        'hasAdjustmentPeriod' => null,
        'lastModifiedDateTime' => null,
        'lengthOfFinancialPeriodInDays' => null,
        'nbrOfFinancialPeriods' => null,
        'periodsStartDayOfWeek' => null,
        'periodType' => null,
        'userDefinedPeriods' => null,
        'yearEndCalculationMethod' => null
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
        'adjustToPeriodStart' => 'AdjustToPeriodStart',
        'belongsToNextYear' => 'BelongsToNextYear',
        'createdDateTime' => 'CreatedDateTime',
        'dayOfWeek' => 'DayOfWeek',
        'details' => 'Details',
        'financialYearStartsOn' => 'FinancialYearStartsOn',
        'firstFinancialYear' => 'FirstFinancialYear',
        'firstPeriodStartDate' => 'FirstPeriodStartDate',
        'hasAdjustmentPeriod' => 'HasAdjustmentPeriod',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'lengthOfFinancialPeriodInDays' => 'LengthOfFinancialPeriodInDays',
        'nbrOfFinancialPeriods' => 'NbrOfFinancialPeriods',
        'periodsStartDayOfWeek' => 'PeriodsStartDayOfWeek',
        'periodType' => 'PeriodType',
        'userDefinedPeriods' => 'UserDefinedPeriods',
        'yearEndCalculationMethod' => 'YearEndCalculationMethod'
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
        'adjustToPeriodStart' => 'setAdjustToPeriodStart',
        'belongsToNextYear' => 'setBelongsToNextYear',
        'createdDateTime' => 'setCreatedDateTime',
        'dayOfWeek' => 'setDayOfWeek',
        'details' => 'setDetails',
        'financialYearStartsOn' => 'setFinancialYearStartsOn',
        'firstFinancialYear' => 'setFirstFinancialYear',
        'firstPeriodStartDate' => 'setFirstPeriodStartDate',
        'hasAdjustmentPeriod' => 'setHasAdjustmentPeriod',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'lengthOfFinancialPeriodInDays' => 'setLengthOfFinancialPeriodInDays',
        'nbrOfFinancialPeriods' => 'setNbrOfFinancialPeriods',
        'periodsStartDayOfWeek' => 'setPeriodsStartDayOfWeek',
        'periodType' => 'setPeriodType',
        'userDefinedPeriods' => 'setUserDefinedPeriods',
        'yearEndCalculationMethod' => 'setYearEndCalculationMethod'
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
        'adjustToPeriodStart' => 'getAdjustToPeriodStart',
        'belongsToNextYear' => 'getBelongsToNextYear',
        'createdDateTime' => 'getCreatedDateTime',
        'dayOfWeek' => 'getDayOfWeek',
        'details' => 'getDetails',
        'financialYearStartsOn' => 'getFinancialYearStartsOn',
        'firstFinancialYear' => 'getFirstFinancialYear',
        'firstPeriodStartDate' => 'getFirstPeriodStartDate',
        'hasAdjustmentPeriod' => 'getHasAdjustmentPeriod',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'lengthOfFinancialPeriodInDays' => 'getLengthOfFinancialPeriodInDays',
        'nbrOfFinancialPeriods' => 'getNbrOfFinancialPeriods',
        'periodsStartDayOfWeek' => 'getPeriodsStartDayOfWeek',
        'periodType' => 'getPeriodType',
        'userDefinedPeriods' => 'getUserDefinedPeriods',
        'yearEndCalculationMethod' => 'getYearEndCalculationMethod'
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
        $this->container['adjustToPeriodStart'] = isset($data['adjustToPeriodStart']) ? $data['adjustToPeriodStart'] : null;
        $this->container['belongsToNextYear'] = isset($data['belongsToNextYear']) ? $data['belongsToNextYear'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['dayOfWeek'] = isset($data['dayOfWeek']) ? $data['dayOfWeek'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['financialYearStartsOn'] = isset($data['financialYearStartsOn']) ? $data['financialYearStartsOn'] : null;
        $this->container['firstFinancialYear'] = isset($data['firstFinancialYear']) ? $data['firstFinancialYear'] : null;
        $this->container['firstPeriodStartDate'] = isset($data['firstPeriodStartDate']) ? $data['firstPeriodStartDate'] : null;
        $this->container['hasAdjustmentPeriod'] = isset($data['hasAdjustmentPeriod']) ? $data['hasAdjustmentPeriod'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['lengthOfFinancialPeriodInDays'] = isset($data['lengthOfFinancialPeriodInDays']) ? $data['lengthOfFinancialPeriodInDays'] : null;
        $this->container['nbrOfFinancialPeriods'] = isset($data['nbrOfFinancialPeriods']) ? $data['nbrOfFinancialPeriods'] : null;
        $this->container['periodsStartDayOfWeek'] = isset($data['periodsStartDayOfWeek']) ? $data['periodsStartDayOfWeek'] : null;
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['userDefinedPeriods'] = isset($data['userDefinedPeriods']) ? $data['userDefinedPeriods'] : null;
        $this->container['yearEndCalculationMethod'] = isset($data['yearEndCalculationMethod']) ? $data['yearEndCalculationMethod'] : null;
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
     * Gets adjustToPeriodStart
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getAdjustToPeriodStart()
    {
        return $this->container['adjustToPeriodStart'];
    }

    /**
     * Sets adjustToPeriodStart
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $adjustToPeriodStart adjustToPeriodStart
     *
     * @return $this
     */
    public function setAdjustToPeriodStart($adjustToPeriodStart)
    {
        $this->container['adjustToPeriodStart'] = $adjustToPeriodStart;

        return $this;
    }

    /**
     * Gets belongsToNextYear
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getBelongsToNextYear()
    {
        return $this->container['belongsToNextYear'];
    }

    /**
     * Sets belongsToNextYear
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $belongsToNextYear belongsToNextYear
     *
     * @return $this
     */
    public function setBelongsToNextYear($belongsToNextYear)
    {
        $this->container['belongsToNextYear'] = $belongsToNextYear;

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
     * Gets dayOfWeek
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDayOfWeek()
    {
        return $this->container['dayOfWeek'];
    }

    /**
     * Sets dayOfWeek
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $dayOfWeek dayOfWeek
     *
     * @return $this
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->container['dayOfWeek'] = $dayOfWeek;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\FinancialYearPeriodDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\FinancialYearPeriodDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets financialYearStartsOn
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getFinancialYearStartsOn()
    {
        return $this->container['financialYearStartsOn'];
    }

    /**
     * Sets financialYearStartsOn
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $financialYearStartsOn financialYearStartsOn
     *
     * @return $this
     */
    public function setFinancialYearStartsOn($financialYearStartsOn)
    {
        $this->container['financialYearStartsOn'] = $financialYearStartsOn;

        return $this;
    }

    /**
     * Gets firstFinancialYear
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFirstFinancialYear()
    {
        return $this->container['firstFinancialYear'];
    }

    /**
     * Sets firstFinancialYear
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $firstFinancialYear firstFinancialYear
     *
     * @return $this
     */
    public function setFirstFinancialYear($firstFinancialYear)
    {
        $this->container['firstFinancialYear'] = $firstFinancialYear;

        return $this;
    }

    /**
     * Gets firstPeriodStartDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getFirstPeriodStartDate()
    {
        return $this->container['firstPeriodStartDate'];
    }

    /**
     * Sets firstPeriodStartDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $firstPeriodStartDate firstPeriodStartDate
     *
     * @return $this
     */
    public function setFirstPeriodStartDate($firstPeriodStartDate)
    {
        $this->container['firstPeriodStartDate'] = $firstPeriodStartDate;

        return $this;
    }

    /**
     * Gets hasAdjustmentPeriod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getHasAdjustmentPeriod()
    {
        return $this->container['hasAdjustmentPeriod'];
    }

    /**
     * Sets hasAdjustmentPeriod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $hasAdjustmentPeriod hasAdjustmentPeriod
     *
     * @return $this
     */
    public function setHasAdjustmentPeriod($hasAdjustmentPeriod)
    {
        $this->container['hasAdjustmentPeriod'] = $hasAdjustmentPeriod;

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
     * Gets lengthOfFinancialPeriodInDays
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel
     */
    public function getLengthOfFinancialPeriodInDays()
    {
        return $this->container['lengthOfFinancialPeriodInDays'];
    }

    /**
     * Sets lengthOfFinancialPeriodInDays
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel $lengthOfFinancialPeriodInDays lengthOfFinancialPeriodInDays
     *
     * @return $this
     */
    public function setLengthOfFinancialPeriodInDays($lengthOfFinancialPeriodInDays)
    {
        $this->container['lengthOfFinancialPeriodInDays'] = $lengthOfFinancialPeriodInDays;

        return $this;
    }

    /**
     * Gets nbrOfFinancialPeriods
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel
     */
    public function getNbrOfFinancialPeriods()
    {
        return $this->container['nbrOfFinancialPeriods'];
    }

    /**
     * Sets nbrOfFinancialPeriods
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel $nbrOfFinancialPeriods nbrOfFinancialPeriods
     *
     * @return $this
     */
    public function setNbrOfFinancialPeriods($nbrOfFinancialPeriods)
    {
        $this->container['nbrOfFinancialPeriods'] = $nbrOfFinancialPeriods;

        return $this;
    }

    /**
     * Gets periodsStartDayOfWeek
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPeriodsStartDayOfWeek()
    {
        return $this->container['periodsStartDayOfWeek'];
    }

    /**
     * Sets periodsStartDayOfWeek
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $periodsStartDayOfWeek periodsStartDayOfWeek
     *
     * @return $this
     */
    public function setPeriodsStartDayOfWeek($periodsStartDayOfWeek)
    {
        $this->container['periodsStartDayOfWeek'] = $periodsStartDayOfWeek;

        return $this;
    }

    /**
     * Gets periodType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
     * Sets periodType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $periodType periodType
     *
     * @return $this
     */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;

        return $this;
    }

    /**
     * Gets userDefinedPeriods
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getUserDefinedPeriods()
    {
        return $this->container['userDefinedPeriods'];
    }

    /**
     * Sets userDefinedPeriods
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $userDefinedPeriods userDefinedPeriods
     *
     * @return $this
     */
    public function setUserDefinedPeriods($userDefinedPeriods)
    {
        $this->container['userDefinedPeriods'] = $userDefinedPeriods;

        return $this;
    }

    /**
     * Gets yearEndCalculationMethod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getYearEndCalculationMethod()
    {
        return $this->container['yearEndCalculationMethod'];
    }

    /**
     * Sets yearEndCalculationMethod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $yearEndCalculationMethod yearEndCalculationMethod
     *
     * @return $this
     */
    public function setYearEndCalculationMethod($yearEndCalculationMethod)
    {
        $this->container['yearEndCalculationMethod'] = $yearEndCalculationMethod;

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


