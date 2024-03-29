<?php
/**
 * FinancialPeriodModel
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
 * FinancialPeriodModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FinancialPeriodModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FinancialPeriod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\FinancialPeriodDetailModel[]',
        'financialYear' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'nbrOfPeriods' => '\Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel',
        'startDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'userDefinedPeriods' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'createdDateTime' => null,
        'details' => null,
        'financialYear' => null,
        'lastModifiedDateTime' => null,
        'nbrOfPeriods' => null,
        'startDate' => null,
        'userDefinedPeriods' => null
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
        'createdDateTime' => 'CreatedDateTime',
        'details' => 'Details',
        'financialYear' => 'FinancialYear',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'nbrOfPeriods' => 'NbrOfPeriods',
        'startDate' => 'StartDate',
        'userDefinedPeriods' => 'UserDefinedPeriods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'createdDateTime' => 'setCreatedDateTime',
        'details' => 'setDetails',
        'financialYear' => 'setFinancialYear',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'nbrOfPeriods' => 'setNbrOfPeriods',
        'startDate' => 'setStartDate',
        'userDefinedPeriods' => 'setUserDefinedPeriods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'createdDateTime' => 'getCreatedDateTime',
        'details' => 'getDetails',
        'financialYear' => 'getFinancialYear',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'nbrOfPeriods' => 'getNbrOfPeriods',
        'startDate' => 'getStartDate',
        'userDefinedPeriods' => 'getUserDefinedPeriods'
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

        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['financialYear'] = isset($data['financialYear']) ? $data['financialYear'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['nbrOfPeriods'] = isset($data['nbrOfPeriods']) ? $data['nbrOfPeriods'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['userDefinedPeriods'] = isset($data['userDefinedPeriods']) ? $data['userDefinedPeriods'] : null;
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
     * Gets details
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\FinancialPeriodDetailModel[]
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\FinancialPeriodDetailModel[] $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets financialYear
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFinancialYear()
    {
        return $this->container['financialYear'];
    }

    /**
     * Sets financialYear
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $financialYear financialYear
     *
     * @return $this
     */
    public function setFinancialYear($financialYear)
    {
        $this->container['financialYear'] = $financialYear;

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
     * Gets nbrOfPeriods
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel
     */
    public function getNbrOfPeriods()
    {
        return $this->container['nbrOfPeriods'];
    }

    /**
     * Sets nbrOfPeriods
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel $nbrOfPeriods nbrOfPeriods
     *
     * @return $this
     */
    public function setNbrOfPeriods($nbrOfPeriods)
    {
        $this->container['nbrOfPeriods'] = $nbrOfPeriods;

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


