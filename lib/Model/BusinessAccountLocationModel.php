<?php
/**
 * BusinessAccountLocationModel
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
 * BusinessAccountLocationModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessAccountLocationModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessAccountLocation';

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
        'active' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'city' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'country' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'default' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'locationID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'locationName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priceClass' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'salesAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'salesSubaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'state' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'taxZone' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'active' => null,
        'city' => null,
        'country' => null,
        'default' => null,
        'locationID' => null,
        'locationName' => null,
        'priceClass' => null,
        'salesAccount' => null,
        'salesSubaccount' => null,
        'state' => null,
        'taxZone' => null
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
        'active' => 'Active',
        'city' => 'City',
        'country' => 'Country',
        'default' => 'Default',
        'locationID' => 'LocationID',
        'locationName' => 'LocationName',
        'priceClass' => 'PriceClass',
        'salesAccount' => 'SalesAccount',
        'salesSubaccount' => 'SalesSubaccount',
        'state' => 'State',
        'taxZone' => 'TaxZone'
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
        'active' => 'setActive',
        'city' => 'setCity',
        'country' => 'setCountry',
        'default' => 'setDefault',
        'locationID' => 'setLocationID',
        'locationName' => 'setLocationName',
        'priceClass' => 'setPriceClass',
        'salesAccount' => 'setSalesAccount',
        'salesSubaccount' => 'setSalesSubaccount',
        'state' => 'setState',
        'taxZone' => 'setTaxZone'
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
        'active' => 'getActive',
        'city' => 'getCity',
        'country' => 'getCountry',
        'default' => 'getDefault',
        'locationID' => 'getLocationID',
        'locationName' => 'getLocationName',
        'priceClass' => 'getPriceClass',
        'salesAccount' => 'getSalesAccount',
        'salesSubaccount' => 'getSalesSubaccount',
        'state' => 'getState',
        'taxZone' => 'getTaxZone'
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
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
        $this->container['locationID'] = isset($data['locationID']) ? $data['locationID'] : null;
        $this->container['locationName'] = isset($data['locationName']) ? $data['locationName'] : null;
        $this->container['priceClass'] = isset($data['priceClass']) ? $data['priceClass'] : null;
        $this->container['salesAccount'] = isset($data['salesAccount']) ? $data['salesAccount'] : null;
        $this->container['salesSubaccount'] = isset($data['salesSubaccount']) ? $data['salesSubaccount'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['taxZone'] = isset($data['taxZone']) ? $data['taxZone'] : null;
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
     * Gets city
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets default
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
     * Sets default
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $default default
     *
     * @return $this
     */
    public function setDefault($default)
    {
        $this->container['default'] = $default;

        return $this;
    }

    /**
     * Gets locationID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLocationID()
    {
        return $this->container['locationID'];
    }

    /**
     * Sets locationID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $locationID locationID
     *
     * @return $this
     */
    public function setLocationID($locationID)
    {
        $this->container['locationID'] = $locationID;

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
     * Gets salesAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSalesAccount()
    {
        return $this->container['salesAccount'];
    }

    /**
     * Sets salesAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $salesAccount salesAccount
     *
     * @return $this
     */
    public function setSalesAccount($salesAccount)
    {
        $this->container['salesAccount'] = $salesAccount;

        return $this;
    }

    /**
     * Gets salesSubaccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSalesSubaccount()
    {
        return $this->container['salesSubaccount'];
    }

    /**
     * Sets salesSubaccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $salesSubaccount salesSubaccount
     *
     * @return $this
     */
    public function setSalesSubaccount($salesSubaccount)
    {
        $this->container['salesSubaccount'] = $salesSubaccount;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

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


