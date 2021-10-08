<?php
/**
 * BusinessAccountOpportunityDetailModel
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
 * BusinessAccountOpportunityDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessAccountOpportunityDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessAccountOpportunityDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'businessAccountID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'businessAccountName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'displayName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'estimation' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'owner' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'probability' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'stage' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subject' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'total' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'workgroup' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'businessAccountID' => null,
        'businessAccountName' => null,
        'currencyID' => null,
        'displayName' => null,
        'estimation' => null,
        'owner' => null,
        'probability' => null,
        'stage' => null,
        'status' => null,
        'subject' => null,
        'total' => null,
        'workgroup' => null
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
        'businessAccountID' => 'BusinessAccountID',
        'businessAccountName' => 'BusinessAccountName',
        'currencyID' => 'CurrencyID',
        'displayName' => 'DisplayName',
        'estimation' => 'Estimation',
        'owner' => 'Owner',
        'probability' => 'Probability',
        'stage' => 'Stage',
        'status' => 'Status',
        'subject' => 'Subject',
        'total' => 'Total',
        'workgroup' => 'Workgroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessAccountID' => 'setBusinessAccountID',
        'businessAccountName' => 'setBusinessAccountName',
        'currencyID' => 'setCurrencyID',
        'displayName' => 'setDisplayName',
        'estimation' => 'setEstimation',
        'owner' => 'setOwner',
        'probability' => 'setProbability',
        'stage' => 'setStage',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'total' => 'setTotal',
        'workgroup' => 'setWorkgroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessAccountID' => 'getBusinessAccountID',
        'businessAccountName' => 'getBusinessAccountName',
        'currencyID' => 'getCurrencyID',
        'displayName' => 'getDisplayName',
        'estimation' => 'getEstimation',
        'owner' => 'getOwner',
        'probability' => 'getProbability',
        'stage' => 'getStage',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'total' => 'getTotal',
        'workgroup' => 'getWorkgroup'
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

        $this->container['businessAccountID'] = isset($data['businessAccountID']) ? $data['businessAccountID'] : null;
        $this->container['businessAccountName'] = isset($data['businessAccountName']) ? $data['businessAccountName'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['displayName'] = isset($data['displayName']) ? $data['displayName'] : null;
        $this->container['estimation'] = isset($data['estimation']) ? $data['estimation'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['probability'] = isset($data['probability']) ? $data['probability'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['workgroup'] = isset($data['workgroup']) ? $data['workgroup'] : null;
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
     * Gets businessAccountID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBusinessAccountID()
    {
        return $this->container['businessAccountID'];
    }

    /**
     * Sets businessAccountID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $businessAccountID businessAccountID
     *
     * @return $this
     */
    public function setBusinessAccountID($businessAccountID)
    {
        $this->container['businessAccountID'] = $businessAccountID;

        return $this;
    }

    /**
     * Gets businessAccountName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBusinessAccountName()
    {
        return $this->container['businessAccountName'];
    }

    /**
     * Sets businessAccountName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $businessAccountName businessAccountName
     *
     * @return $this
     */
    public function setBusinessAccountName($businessAccountName)
    {
        $this->container['businessAccountName'] = $businessAccountName;

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
     * Gets displayName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDisplayName()
    {
        return $this->container['displayName'];
    }

    /**
     * Sets displayName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $displayName displayName
     *
     * @return $this
     */
    public function setDisplayName($displayName)
    {
        $this->container['displayName'] = $displayName;

        return $this;
    }

    /**
     * Gets estimation
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getEstimation()
    {
        return $this->container['estimation'];
    }

    /**
     * Sets estimation
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $estimation estimation
     *
     * @return $this
     */
    public function setEstimation($estimation)
    {
        $this->container['estimation'] = $estimation;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets probability
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getProbability()
    {
        return $this->container['probability'];
    }

    /**
     * Sets probability
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $probability probability
     *
     * @return $this
     */
    public function setProbability($probability)
    {
        $this->container['probability'] = $probability;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $stage stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

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
     * Gets subject
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets workgroup
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWorkgroup()
    {
        return $this->container['workgroup'];
    }

    /**
     * Sets workgroup
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $workgroup workgroup
     *
     * @return $this
     */
    public function setWorkgroup($workgroup)
    {
        $this->container['workgroup'] = $workgroup;

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


