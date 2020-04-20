<?php
/**
 * ShipmentPackageModel
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
 * ShipmentPackageModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentPackageModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShipmentPackage';

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
        'boxID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'cODAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'confirmed' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'customRefNbr1' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'customRefNbr2' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'declaredValue' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'trackingNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'type' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'weight' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
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
        'boxID' => null,
        'cODAmount' => null,
        'confirmed' => null,
        'customRefNbr1' => null,
        'customRefNbr2' => null,
        'declaredValue' => null,
        'description' => null,
        'trackingNbr' => null,
        'type' => null,
        'uOM' => null,
        'weight' => null
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
        'boxID' => 'BoxID',
        'cODAmount' => 'CODAmount',
        'confirmed' => 'Confirmed',
        'customRefNbr1' => 'CustomRefNbr1',
        'customRefNbr2' => 'CustomRefNbr2',
        'declaredValue' => 'DeclaredValue',
        'description' => 'Description',
        'trackingNbr' => 'TrackingNbr',
        'type' => 'Type',
        'uOM' => 'UOM',
        'weight' => 'Weight'
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
        'boxID' => 'setBoxID',
        'cODAmount' => 'setCODAmount',
        'confirmed' => 'setConfirmed',
        'customRefNbr1' => 'setCustomRefNbr1',
        'customRefNbr2' => 'setCustomRefNbr2',
        'declaredValue' => 'setDeclaredValue',
        'description' => 'setDescription',
        'trackingNbr' => 'setTrackingNbr',
        'type' => 'setType',
        'uOM' => 'setUOM',
        'weight' => 'setWeight'
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
        'boxID' => 'getBoxID',
        'cODAmount' => 'getCODAmount',
        'confirmed' => 'getConfirmed',
        'customRefNbr1' => 'getCustomRefNbr1',
        'customRefNbr2' => 'getCustomRefNbr2',
        'declaredValue' => 'getDeclaredValue',
        'description' => 'getDescription',
        'trackingNbr' => 'getTrackingNbr',
        'type' => 'getType',
        'uOM' => 'getUOM',
        'weight' => 'getWeight'
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
        $this->container['boxID'] = isset($data['boxID']) ? $data['boxID'] : null;
        $this->container['cODAmount'] = isset($data['cODAmount']) ? $data['cODAmount'] : null;
        $this->container['confirmed'] = isset($data['confirmed']) ? $data['confirmed'] : null;
        $this->container['customRefNbr1'] = isset($data['customRefNbr1']) ? $data['customRefNbr1'] : null;
        $this->container['customRefNbr2'] = isset($data['customRefNbr2']) ? $data['customRefNbr2'] : null;
        $this->container['declaredValue'] = isset($data['declaredValue']) ? $data['declaredValue'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['trackingNbr'] = isset($data['trackingNbr']) ? $data['trackingNbr'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uOM'] = isset($data['uOM']) ? $data['uOM'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
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
     * Gets boxID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBoxID()
    {
        return $this->container['boxID'];
    }

    /**
     * Sets boxID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $boxID boxID
     *
     * @return $this
     */
    public function setBoxID($boxID)
    {
        $this->container['boxID'] = $boxID;

        return $this;
    }

    /**
     * Gets cODAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getCODAmount()
    {
        return $this->container['cODAmount'];
    }

    /**
     * Sets cODAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $cODAmount cODAmount
     *
     * @return $this
     */
    public function setCODAmount($cODAmount)
    {
        $this->container['cODAmount'] = $cODAmount;

        return $this;
    }

    /**
     * Gets confirmed
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getConfirmed()
    {
        return $this->container['confirmed'];
    }

    /**
     * Sets confirmed
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $confirmed confirmed
     *
     * @return $this
     */
    public function setConfirmed($confirmed)
    {
        $this->container['confirmed'] = $confirmed;

        return $this;
    }

    /**
     * Gets customRefNbr1
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCustomRefNbr1()
    {
        return $this->container['customRefNbr1'];
    }

    /**
     * Sets customRefNbr1
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $customRefNbr1 customRefNbr1
     *
     * @return $this
     */
    public function setCustomRefNbr1($customRefNbr1)
    {
        $this->container['customRefNbr1'] = $customRefNbr1;

        return $this;
    }

    /**
     * Gets customRefNbr2
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCustomRefNbr2()
    {
        return $this->container['customRefNbr2'];
    }

    /**
     * Sets customRefNbr2
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $customRefNbr2 customRefNbr2
     *
     * @return $this
     */
    public function setCustomRefNbr2($customRefNbr2)
    {
        $this->container['customRefNbr2'] = $customRefNbr2;

        return $this;
    }

    /**
     * Gets declaredValue
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDeclaredValue()
    {
        return $this->container['declaredValue'];
    }

    /**
     * Sets declaredValue
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $declaredValue declaredValue
     *
     * @return $this
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->container['declaredValue'] = $declaredValue;

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
     * Gets trackingNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTrackingNbr()
    {
        return $this->container['trackingNbr'];
    }

    /**
     * Sets trackingNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $trackingNbr trackingNbr
     *
     * @return $this
     */
    public function setTrackingNbr($trackingNbr)
    {
        $this->container['trackingNbr'] = $trackingNbr;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets uOM
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getUOM()
    {
        return $this->container['uOM'];
    }

    /**
     * Sets uOM
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $uOM uOM
     *
     * @return $this
     */
    public function setUOM($uOM)
    {
        $this->container['uOM'] = $uOM;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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


