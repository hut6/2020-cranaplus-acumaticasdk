<?php
/**
 * ShippingInstructionsModel
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
 * ShippingInstructionsModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingInstructionsModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingInstructions';

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
        'shippingDestinationType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shippingLocation' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shipTo' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'shipToAddress' => '\Hut6\CranaplusAcumaticaSdk\Model\AddressModel',
        'shipToAddressOverride' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'shipToAddressValidated' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'shipToContact' => '\Hut6\CranaplusAcumaticaSdk\Model\DocContactModel',
        'shipToContactOverride' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'warehouse' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'shippingDestinationType' => null,
        'shippingLocation' => null,
        'shipTo' => null,
        'shipToAddress' => null,
        'shipToAddressOverride' => null,
        'shipToAddressValidated' => null,
        'shipToContact' => null,
        'shipToContactOverride' => null,
        'warehouse' => null
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
        'shippingDestinationType' => 'ShippingDestinationType',
        'shippingLocation' => 'ShippingLocation',
        'shipTo' => 'ShipTo',
        'shipToAddress' => 'ShipToAddress',
        'shipToAddressOverride' => 'ShipToAddressOverride',
        'shipToAddressValidated' => 'ShipToAddressValidated',
        'shipToContact' => 'ShipToContact',
        'shipToContactOverride' => 'ShipToContactOverride',
        'warehouse' => 'Warehouse'
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
        'shippingDestinationType' => 'setShippingDestinationType',
        'shippingLocation' => 'setShippingLocation',
        'shipTo' => 'setShipTo',
        'shipToAddress' => 'setShipToAddress',
        'shipToAddressOverride' => 'setShipToAddressOverride',
        'shipToAddressValidated' => 'setShipToAddressValidated',
        'shipToContact' => 'setShipToContact',
        'shipToContactOverride' => 'setShipToContactOverride',
        'warehouse' => 'setWarehouse'
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
        'shippingDestinationType' => 'getShippingDestinationType',
        'shippingLocation' => 'getShippingLocation',
        'shipTo' => 'getShipTo',
        'shipToAddress' => 'getShipToAddress',
        'shipToAddressOverride' => 'getShipToAddressOverride',
        'shipToAddressValidated' => 'getShipToAddressValidated',
        'shipToContact' => 'getShipToContact',
        'shipToContactOverride' => 'getShipToContactOverride',
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
        $this->container['shippingDestinationType'] = isset($data['shippingDestinationType']) ? $data['shippingDestinationType'] : null;
        $this->container['shippingLocation'] = isset($data['shippingLocation']) ? $data['shippingLocation'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['shipToAddress'] = isset($data['shipToAddress']) ? $data['shipToAddress'] : null;
        $this->container['shipToAddressOverride'] = isset($data['shipToAddressOverride']) ? $data['shipToAddressOverride'] : null;
        $this->container['shipToAddressValidated'] = isset($data['shipToAddressValidated']) ? $data['shipToAddressValidated'] : null;
        $this->container['shipToContact'] = isset($data['shipToContact']) ? $data['shipToContact'] : null;
        $this->container['shipToContactOverride'] = isset($data['shipToContactOverride']) ? $data['shipToContactOverride'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
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
     * Gets shippingDestinationType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShippingDestinationType()
    {
        return $this->container['shippingDestinationType'];
    }

    /**
     * Sets shippingDestinationType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shippingDestinationType shippingDestinationType
     *
     * @return $this
     */
    public function setShippingDestinationType($shippingDestinationType)
    {
        $this->container['shippingDestinationType'] = $shippingDestinationType;

        return $this;
    }

    /**
     * Gets shippingLocation
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShippingLocation()
    {
        return $this->container['shippingLocation'];
    }

    /**
     * Sets shippingLocation
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shippingLocation shippingLocation
     *
     * @return $this
     */
    public function setShippingLocation($shippingLocation)
    {
        $this->container['shippingLocation'] = $shippingLocation;

        return $this;
    }

    /**
     * Gets shipTo
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $shipTo shipTo
     *
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets shipToAddress
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\AddressModel
     */
    public function getShipToAddress()
    {
        return $this->container['shipToAddress'];
    }

    /**
     * Sets shipToAddress
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\AddressModel $shipToAddress shipToAddress
     *
     * @return $this
     */
    public function setShipToAddress($shipToAddress)
    {
        $this->container['shipToAddress'] = $shipToAddress;

        return $this;
    }

    /**
     * Gets shipToAddressOverride
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getShipToAddressOverride()
    {
        return $this->container['shipToAddressOverride'];
    }

    /**
     * Sets shipToAddressOverride
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $shipToAddressOverride shipToAddressOverride
     *
     * @return $this
     */
    public function setShipToAddressOverride($shipToAddressOverride)
    {
        $this->container['shipToAddressOverride'] = $shipToAddressOverride;

        return $this;
    }

    /**
     * Gets shipToAddressValidated
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getShipToAddressValidated()
    {
        return $this->container['shipToAddressValidated'];
    }

    /**
     * Sets shipToAddressValidated
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $shipToAddressValidated shipToAddressValidated
     *
     * @return $this
     */
    public function setShipToAddressValidated($shipToAddressValidated)
    {
        $this->container['shipToAddressValidated'] = $shipToAddressValidated;

        return $this;
    }

    /**
     * Gets shipToContact
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DocContactModel
     */
    public function getShipToContact()
    {
        return $this->container['shipToContact'];
    }

    /**
     * Sets shipToContact
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DocContactModel $shipToContact shipToContact
     *
     * @return $this
     */
    public function setShipToContact($shipToContact)
    {
        $this->container['shipToContact'] = $shipToContact;

        return $this;
    }

    /**
     * Gets shipToContactOverride
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getShipToContactOverride()
    {
        return $this->container['shipToContactOverride'];
    }

    /**
     * Sets shipToContactOverride
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $shipToContactOverride shipToContactOverride
     *
     * @return $this
     */
    public function setShipToContactOverride($shipToContactOverride)
    {
        $this->container['shipToContactOverride'] = $shipToContactOverride;

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


