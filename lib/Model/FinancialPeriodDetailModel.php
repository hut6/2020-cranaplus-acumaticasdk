<?php
/**
 * FinancialPeriodDetailModel
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
 * FinancialPeriodDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialPeriodDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialPeriodDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'adjustmentPeriod' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInAP' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInAR' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInCA' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInFA' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInGL' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInIN' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'closedInPR' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'endDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'financialPeriodID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lengthInDays' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'periodNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'startDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'adjustmentPeriod' => null,
        'closedInAP' => null,
        'closedInAR' => null,
        'closedInCA' => null,
        'closedInFA' => null,
        'closedInGL' => null,
        'closedInIN' => null,
        'closedInPR' => null,
        'description' => null,
        'endDate' => null,
        'financialPeriodID' => null,
        'lengthInDays' => null,
        'periodNbr' => null,
        'startDate' => null
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
        'active' => 'Active',
        'adjustmentPeriod' => 'AdjustmentPeriod',
        'closedInAP' => 'ClosedInAP',
        'closedInAR' => 'ClosedInAR',
        'closedInCA' => 'ClosedInCA',
        'closedInFA' => 'ClosedInFA',
        'closedInGL' => 'ClosedInGL',
        'closedInIN' => 'ClosedInIN',
        'closedInPR' => 'ClosedInPR',
        'description' => 'Description',
        'endDate' => 'EndDate',
        'financialPeriodID' => 'FinancialPeriodID',
        'lengthInDays' => 'LengthInDays',
        'periodNbr' => 'PeriodNbr',
        'startDate' => 'StartDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'adjustmentPeriod' => 'setAdjustmentPeriod',
        'closedInAP' => 'setClosedInAP',
        'closedInAR' => 'setClosedInAR',
        'closedInCA' => 'setClosedInCA',
        'closedInFA' => 'setClosedInFA',
        'closedInGL' => 'setClosedInGL',
        'closedInIN' => 'setClosedInIN',
        'closedInPR' => 'setClosedInPR',
        'description' => 'setDescription',
        'endDate' => 'setEndDate',
        'financialPeriodID' => 'setFinancialPeriodID',
        'lengthInDays' => 'setLengthInDays',
        'periodNbr' => 'setPeriodNbr',
        'startDate' => 'setStartDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'adjustmentPeriod' => 'getAdjustmentPeriod',
        'closedInAP' => 'getClosedInAP',
        'closedInAR' => 'getClosedInAR',
        'closedInCA' => 'getClosedInCA',
        'closedInFA' => 'getClosedInFA',
        'closedInGL' => 'getClosedInGL',
        'closedInIN' => 'getClosedInIN',
        'closedInPR' => 'getClosedInPR',
        'description' => 'getDescription',
        'endDate' => 'getEndDate',
        'financialPeriodID' => 'getFinancialPeriodID',
        'lengthInDays' => 'getLengthInDays',
        'periodNbr' => 'getPeriodNbr',
        'startDate' => 'getStartDate'
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

        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['adjustmentPeriod'] = isset($data['adjustmentPeriod']) ? $data['adjustmentPeriod'] : null;
        $this->container['closedInAP'] = isset($data['closedInAP']) ? $data['closedInAP'] : null;
        $this->container['closedInAR'] = isset($data['closedInAR']) ? $data['closedInAR'] : null;
        $this->container['closedInCA'] = isset($data['closedInCA']) ? $data['closedInCA'] : null;
        $this->container['closedInFA'] = isset($data['closedInFA']) ? $data['closedInFA'] : null;
        $this->container['closedInGL'] = isset($data['closedInGL']) ? $data['closedInGL'] : null;
        $this->container['closedInIN'] = isset($data['closedInIN']) ? $data['closedInIN'] : null;
        $this->container['closedInPR'] = isset($data['closedInPR']) ? $data['closedInPR'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['financialPeriodID'] = isset($data['financialPeriodID']) ? $data['financialPeriodID'] : null;
        $this->container['lengthInDays'] = isset($data['lengthInDays']) ? $data['lengthInDays'] : null;
        $this->container['periodNbr'] = isset($data['periodNbr']) ? $data['periodNbr'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
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
     * Gets active
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets adjustmentPeriod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getAdjustmentPeriod()
    {
        return $this->container['adjustmentPeriod'];
    }

    /**
     * Sets adjustmentPeriod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $adjustmentPeriod adjustmentPeriod
     *
     * @return $this
     */
    public function setAdjustmentPeriod($adjustmentPeriod)
    {
        $this->container['adjustmentPeriod'] = $adjustmentPeriod;

        return $this;
    }

    /**
     * Gets closedInAP
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInAP()
    {
        return $this->container['closedInAP'];
    }

    /**
     * Sets closedInAP
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInAP closedInAP
     *
     * @return $this
     */
    public function setClosedInAP($closedInAP)
    {
        $this->container['closedInAP'] = $closedInAP;

        return $this;
    }

    /**
     * Gets closedInAR
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInAR()
    {
        return $this->container['closedInAR'];
    }

    /**
     * Sets closedInAR
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInAR closedInAR
     *
     * @return $this
     */
    public function setClosedInAR($closedInAR)
    {
        $this->container['closedInAR'] = $closedInAR;

        return $this;
    }

    /**
     * Gets closedInCA
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInCA()
    {
        return $this->container['closedInCA'];
    }

    /**
     * Sets closedInCA
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInCA closedInCA
     *
     * @return $this
     */
    public function setClosedInCA($closedInCA)
    {
        $this->container['closedInCA'] = $closedInCA;

        return $this;
    }

    /**
     * Gets closedInFA
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInFA()
    {
        return $this->container['closedInFA'];
    }

    /**
     * Sets closedInFA
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInFA closedInFA
     *
     * @return $this
     */
    public function setClosedInFA($closedInFA)
    {
        $this->container['closedInFA'] = $closedInFA;

        return $this;
    }

    /**
     * Gets closedInGL
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInGL()
    {
        return $this->container['closedInGL'];
    }

    /**
     * Sets closedInGL
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInGL closedInGL
     *
     * @return $this
     */
    public function setClosedInGL($closedInGL)
    {
        $this->container['closedInGL'] = $closedInGL;

        return $this;
    }

    /**
     * Gets closedInIN
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInIN()
    {
        return $this->container['closedInIN'];
    }

    /**
     * Sets closedInIN
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInIN closedInIN
     *
     * @return $this
     */
    public function setClosedInIN($closedInIN)
    {
        $this->container['closedInIN'] = $closedInIN;

        return $this;
    }

    /**
     * Gets closedInPR
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getClosedInPR()
    {
        return $this->container['closedInPR'];
    }

    /**
     * Sets closedInPR
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $closedInPR closedInPR
     *
     * @return $this
     */
    public function setClosedInPR($closedInPR)
    {
        $this->container['closedInPR'] = $closedInPR;

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
     * Gets endDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets financialPeriodID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFinancialPeriodID()
    {
        return $this->container['financialPeriodID'];
    }

    /**
     * Sets financialPeriodID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $financialPeriodID financialPeriodID
     *
     * @return $this
     */
    public function setFinancialPeriodID($financialPeriodID)
    {
        $this->container['financialPeriodID'] = $financialPeriodID;

        return $this;
    }

    /**
     * Gets lengthInDays
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getLengthInDays()
    {
        return $this->container['lengthInDays'];
    }

    /**
     * Sets lengthInDays
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $lengthInDays lengthInDays
     *
     * @return $this
     */
    public function setLengthInDays($lengthInDays)
    {
        $this->container['lengthInDays'] = $lengthInDays;

        return $this;
    }

    /**
     * Gets periodNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPeriodNbr()
    {
        return $this->container['periodNbr'];
    }

    /**
     * Sets periodNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $periodNbr periodNbr
     *
     * @return $this
     */
    public function setPeriodNbr($periodNbr)
    {
        $this->container['periodNbr'] = $periodNbr;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

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


