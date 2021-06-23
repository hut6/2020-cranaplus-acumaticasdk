<?php
/**
 * EntitlementSummaryModel
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
 * EntitlementSummaryModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EntitlementSummaryModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'EntitlementSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'result' => '\Hut6\CranaplusAcumaticaSdk\Model\EntitlementsModel[]',
        'fromDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'fromEmployee' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'fromEntitlement' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'fromPayRun' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'toDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'toEmployee' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'toEntitlement' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'toPayRun' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'result' => null,
        'fromDate' => null,
        'fromEmployee' => null,
        'fromEntitlement' => null,
        'fromPayRun' => null,
        'toDate' => null,
        'toEmployee' => null,
        'toEntitlement' => null,
        'toPayRun' => null
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
        'result' => 'Result',
        'fromDate' => 'FromDate',
        'fromEmployee' => 'FromEmployee',
        'fromEntitlement' => 'FromEntitlement',
        'fromPayRun' => 'FromPayRun',
        'toDate' => 'ToDate',
        'toEmployee' => 'ToEmployee',
        'toEntitlement' => 'ToEntitlement',
        'toPayRun' => 'ToPayRun'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'result' => 'setResult',
        'fromDate' => 'setFromDate',
        'fromEmployee' => 'setFromEmployee',
        'fromEntitlement' => 'setFromEntitlement',
        'fromPayRun' => 'setFromPayRun',
        'toDate' => 'setToDate',
        'toEmployee' => 'setToEmployee',
        'toEntitlement' => 'setToEntitlement',
        'toPayRun' => 'setToPayRun'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'result' => 'getResult',
        'fromDate' => 'getFromDate',
        'fromEmployee' => 'getFromEmployee',
        'fromEntitlement' => 'getFromEntitlement',
        'fromPayRun' => 'getFromPayRun',
        'toDate' => 'getToDate',
        'toEmployee' => 'getToEmployee',
        'toEntitlement' => 'getToEntitlement',
        'toPayRun' => 'getToPayRun'
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

        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['fromDate'] = isset($data['fromDate']) ? $data['fromDate'] : null;
        $this->container['fromEmployee'] = isset($data['fromEmployee']) ? $data['fromEmployee'] : null;
        $this->container['fromEntitlement'] = isset($data['fromEntitlement']) ? $data['fromEntitlement'] : null;
        $this->container['fromPayRun'] = isset($data['fromPayRun']) ? $data['fromPayRun'] : null;
        $this->container['toDate'] = isset($data['toDate']) ? $data['toDate'] : null;
        $this->container['toEmployee'] = isset($data['toEmployee']) ? $data['toEmployee'] : null;
        $this->container['toEntitlement'] = isset($data['toEntitlement']) ? $data['toEntitlement'] : null;
        $this->container['toPayRun'] = isset($data['toPayRun']) ? $data['toPayRun'] : null;
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
     * Gets result
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\EntitlementsModel[]
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\EntitlementsModel[] $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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
     * Gets fromEmployee
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFromEmployee()
    {
        return $this->container['fromEmployee'];
    }

    /**
     * Sets fromEmployee
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $fromEmployee fromEmployee
     *
     * @return $this
     */
    public function setFromEmployee($fromEmployee)
    {
        $this->container['fromEmployee'] = $fromEmployee;

        return $this;
    }

    /**
     * Gets fromEntitlement
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFromEntitlement()
    {
        return $this->container['fromEntitlement'];
    }

    /**
     * Sets fromEntitlement
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $fromEntitlement fromEntitlement
     *
     * @return $this
     */
    public function setFromEntitlement($fromEntitlement)
    {
        $this->container['fromEntitlement'] = $fromEntitlement;

        return $this;
    }

    /**
     * Gets fromPayRun
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFromPayRun()
    {
        return $this->container['fromPayRun'];
    }

    /**
     * Sets fromPayRun
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $fromPayRun fromPayRun
     *
     * @return $this
     */
    public function setFromPayRun($fromPayRun)
    {
        $this->container['fromPayRun'] = $fromPayRun;

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
     * Gets toEmployee
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getToEmployee()
    {
        return $this->container['toEmployee'];
    }

    /**
     * Sets toEmployee
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $toEmployee toEmployee
     *
     * @return $this
     */
    public function setToEmployee($toEmployee)
    {
        $this->container['toEmployee'] = $toEmployee;

        return $this;
    }

    /**
     * Gets toEntitlement
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getToEntitlement()
    {
        return $this->container['toEntitlement'];
    }

    /**
     * Sets toEntitlement
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $toEntitlement toEntitlement
     *
     * @return $this
     */
    public function setToEntitlement($toEntitlement)
    {
        $this->container['toEntitlement'] = $toEntitlement;

        return $this;
    }

    /**
     * Gets toPayRun
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getToPayRun()
    {
        return $this->container['toPayRun'];
    }

    /**
     * Sets toPayRun
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $toPayRun toPayRun
     *
     * @return $this
     */
    public function setToPayRun($toPayRun)
    {
        $this->container['toPayRun'] = $toPayRun;

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

