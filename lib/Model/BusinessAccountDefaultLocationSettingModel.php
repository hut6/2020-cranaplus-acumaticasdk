<?php
/**
 * BusinessAccountDefaultLocationSettingModel
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
 * BusinessAccountDefaultLocationSettingModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessAccountDefaultLocationSettingModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessAccountDefaultLocationSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fOBPoint' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'insurance' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'leadTimeInDays' => '\Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel',
        'locationName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'orderPriority' => '\Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel',
        'priceClass' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'residentialDelivery' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'saturdayDelivery' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'shippingBranch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shippingRule' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shippingTerms' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shippingZone' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shipVia' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'taxRegistrationID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'taxZone' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'warehouse' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'fOBPoint' => null,
        'insurance' => null,
        'leadTimeInDays' => null,
        'locationName' => null,
        'orderPriority' => null,
        'priceClass' => null,
        'residentialDelivery' => null,
        'saturdayDelivery' => null,
        'shippingBranch' => null,
        'shippingRule' => null,
        'shippingTerms' => null,
        'shippingZone' => null,
        'shipVia' => null,
        'taxRegistrationID' => null,
        'taxZone' => null,
        'warehouse' => null
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
        'fOBPoint' => 'FOBPoint',
        'insurance' => 'Insurance',
        'leadTimeInDays' => 'LeadTimeInDays',
        'locationName' => 'LocationName',
        'orderPriority' => 'OrderPriority',
        'priceClass' => 'PriceClass',
        'residentialDelivery' => 'ResidentialDelivery',
        'saturdayDelivery' => 'SaturdayDelivery',
        'shippingBranch' => 'ShippingBranch',
        'shippingRule' => 'ShippingRule',
        'shippingTerms' => 'ShippingTerms',
        'shippingZone' => 'ShippingZone',
        'shipVia' => 'ShipVia',
        'taxRegistrationID' => 'TaxRegistrationID',
        'taxZone' => 'TaxZone',
        'warehouse' => 'Warehouse'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fOBPoint' => 'setFOBPoint',
        'insurance' => 'setInsurance',
        'leadTimeInDays' => 'setLeadTimeInDays',
        'locationName' => 'setLocationName',
        'orderPriority' => 'setOrderPriority',
        'priceClass' => 'setPriceClass',
        'residentialDelivery' => 'setResidentialDelivery',
        'saturdayDelivery' => 'setSaturdayDelivery',
        'shippingBranch' => 'setShippingBranch',
        'shippingRule' => 'setShippingRule',
        'shippingTerms' => 'setShippingTerms',
        'shippingZone' => 'setShippingZone',
        'shipVia' => 'setShipVia',
        'taxRegistrationID' => 'setTaxRegistrationID',
        'taxZone' => 'setTaxZone',
        'warehouse' => 'setWarehouse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fOBPoint' => 'getFOBPoint',
        'insurance' => 'getInsurance',
        'leadTimeInDays' => 'getLeadTimeInDays',
        'locationName' => 'getLocationName',
        'orderPriority' => 'getOrderPriority',
        'priceClass' => 'getPriceClass',
        'residentialDelivery' => 'getResidentialDelivery',
        'saturdayDelivery' => 'getSaturdayDelivery',
        'shippingBranch' => 'getShippingBranch',
        'shippingRule' => 'getShippingRule',
        'shippingTerms' => 'getShippingTerms',
        'shippingZone' => 'getShippingZone',
        'shipVia' => 'getShipVia',
        'taxRegistrationID' => 'getTaxRegistrationID',
        'taxZone' => 'getTaxZone',
        'warehouse' => 'getWarehouse'
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

        $this->container['fOBPoint'] = isset($data['fOBPoint']) ? $data['fOBPoint'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['leadTimeInDays'] = isset($data['leadTimeInDays']) ? $data['leadTimeInDays'] : null;
        $this->container['locationName'] = isset($data['locationName']) ? $data['locationName'] : null;
        $this->container['orderPriority'] = isset($data['orderPriority']) ? $data['orderPriority'] : null;
        $this->container['priceClass'] = isset($data['priceClass']) ? $data['priceClass'] : null;
        $this->container['residentialDelivery'] = isset($data['residentialDelivery']) ? $data['residentialDelivery'] : null;
        $this->container['saturdayDelivery'] = isset($data['saturdayDelivery']) ? $data['saturdayDelivery'] : null;
        $this->container['shippingBranch'] = isset($data['shippingBranch']) ? $data['shippingBranch'] : null;
        $this->container['shippingRule'] = isset($data['shippingRule']) ? $data['shippingRule'] : null;
        $this->container['shippingTerms'] = isset($data['shippingTerms']) ? $data['shippingTerms'] : null;
        $this->container['shippingZone'] = isset($data['shippingZone']) ? $data['shippingZone'] : null;
        $this->container['shipVia'] = isset($data['shipVia']) ? $data['shipVia'] : null;
        $this->container['taxRegistrationID'] = isset($data['taxRegistrationID']) ? $data['taxRegistrationID'] : null;
        $this->container['taxZone'] = isset($data['taxZone']) ? $data['taxZone'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
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
     * Gets fOBPoint
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFOBPoint()
    {
        return $this->container['fOBPoint'];
    }

    /**
     * Sets fOBPoint
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $fOBPoint fOBPoint
     *
     * @return $this
     */
    public function setFOBPoint($fOBPoint)
    {
        $this->container['fOBPoint'] = $fOBPoint;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $insurance insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets leadTimeInDays
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel
     */
    public function getLeadTimeInDays()
    {
        return $this->container['leadTimeInDays'];
    }

    /**
     * Sets leadTimeInDays
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel $leadTimeInDays leadTimeInDays
     *
     * @return $this
     */
    public function setLeadTimeInDays($leadTimeInDays)
    {
        $this->container['leadTimeInDays'] = $leadTimeInDays;

        return $this;
    }

    /**
     * Gets locationName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLocationName()
    {
        return $this->container['locationName'];
    }

    /**
     * Sets locationName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $locationName locationName
     *
     * @return $this
     */
    public function setLocationName($locationName)
    {
        $this->container['locationName'] = $locationName;

        return $this;
    }

    /**
     * Gets orderPriority
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel
     */
    public function getOrderPriority()
    {
        return $this->container['orderPriority'];
    }

    /**
     * Sets orderPriority
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ShortValueModel $orderPriority orderPriority
     *
     * @return $this
     */
    public function setOrderPriority($orderPriority)
    {
        $this->container['orderPriority'] = $orderPriority;

        return $this;
    }

    /**
     * Gets priceClass
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriceClass()
    {
        return $this->container['priceClass'];
    }

    /**
     * Sets priceClass
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priceClass priceClass
     *
     * @return $this
     */
    public function setPriceClass($priceClass)
    {
        $this->container['priceClass'] = $priceClass;

        return $this;
    }

    /**
     * Gets residentialDelivery
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getResidentialDelivery()
    {
        return $this->container['residentialDelivery'];
    }

    /**
     * Sets residentialDelivery
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $residentialDelivery residentialDelivery
     *
     * @return $this
     */
    public function setResidentialDelivery($residentialDelivery)
    {
        $this->container['residentialDelivery'] = $residentialDelivery;

        return $this;
    }

    /**
     * Gets saturdayDelivery
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getSaturdayDelivery()
    {
        return $this->container['saturdayDelivery'];
    }

    /**
     * Sets saturdayDelivery
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $saturdayDelivery saturdayDelivery
     *
     * @return $this
     */
    public function setSaturdayDelivery($saturdayDelivery)
    {
        $this->container['saturdayDelivery'] = $saturdayDelivery;

        return $this;
    }

    /**
     * Gets shippingBranch
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShippingBranch()
    {
        return $this->container['shippingBranch'];
    }

    /**
     * Sets shippingBranch
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shippingBranch shippingBranch
     *
     * @return $this
     */
    public function setShippingBranch($shippingBranch)
    {
        $this->container['shippingBranch'] = $shippingBranch;

        return $this;
    }

    /**
     * Gets shippingRule
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShippingRule()
    {
        return $this->container['shippingRule'];
    }

    /**
     * Sets shippingRule
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shippingRule shippingRule
     *
     * @return $this
     */
    public function setShippingRule($shippingRule)
    {
        $this->container['shippingRule'] = $shippingRule;

        return $this;
    }

    /**
     * Gets shippingTerms
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShippingTerms()
    {
        return $this->container['shippingTerms'];
    }

    /**
     * Sets shippingTerms
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shippingTerms shippingTerms
     *
     * @return $this
     */
    public function setShippingTerms($shippingTerms)
    {
        $this->container['shippingTerms'] = $shippingTerms;

        return $this;
    }

    /**
     * Gets shippingZone
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShippingZone()
    {
        return $this->container['shippingZone'];
    }

    /**
     * Sets shippingZone
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shippingZone shippingZone
     *
     * @return $this
     */
    public function setShippingZone($shippingZone)
    {
        $this->container['shippingZone'] = $shippingZone;

        return $this;
    }

    /**
     * Gets shipVia
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShipVia()
    {
        return $this->container['shipVia'];
    }

    /**
     * Sets shipVia
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shipVia shipVia
     *
     * @return $this
     */
    public function setShipVia($shipVia)
    {
        $this->container['shipVia'] = $shipVia;

        return $this;
    }

    /**
     * Gets taxRegistrationID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTaxRegistrationID()
    {
        return $this->container['taxRegistrationID'];
    }

    /**
     * Sets taxRegistrationID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $taxRegistrationID taxRegistrationID
     *
     * @return $this
     */
    public function setTaxRegistrationID($taxRegistrationID)
    {
        $this->container['taxRegistrationID'] = $taxRegistrationID;

        return $this;
    }

    /**
     * Gets taxZone
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTaxZone()
    {
        return $this->container['taxZone'];
    }

    /**
     * Sets taxZone
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $taxZone taxZone
     *
     * @return $this
     */
    public function setTaxZone($taxZone)
    {
        $this->container['taxZone'] = $taxZone;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $warehouse warehouse
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

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


