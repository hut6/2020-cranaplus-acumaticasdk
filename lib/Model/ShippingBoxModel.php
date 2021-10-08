<?php
/**
 * ShippingBoxModel
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
 * ShippingBoxModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingBoxModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingBox';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activeByDefault' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'boxID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'boxWeight' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'carriersPackage' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'height' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'length' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'maxVolume' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'maxWeight' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'volumeUOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'weightUOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'width' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activeByDefault' => null,
        'boxID' => null,
        'boxWeight' => null,
        'carriersPackage' => null,
        'description' => null,
        'height' => null,
        'length' => null,
        'maxVolume' => null,
        'maxWeight' => null,
        'volumeUOM' => null,
        'weightUOM' => null,
        'width' => null
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
        'activeByDefault' => 'ActiveByDefault',
        'boxID' => 'BoxID',
        'boxWeight' => 'BoxWeight',
        'carriersPackage' => 'CarriersPackage',
        'description' => 'Description',
        'height' => 'Height',
        'length' => 'Length',
        'maxVolume' => 'MaxVolume',
        'maxWeight' => 'MaxWeight',
        'volumeUOM' => 'VolumeUOM',
        'weightUOM' => 'WeightUOM',
        'width' => 'Width'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activeByDefault' => 'setActiveByDefault',
        'boxID' => 'setBoxID',
        'boxWeight' => 'setBoxWeight',
        'carriersPackage' => 'setCarriersPackage',
        'description' => 'setDescription',
        'height' => 'setHeight',
        'length' => 'setLength',
        'maxVolume' => 'setMaxVolume',
        'maxWeight' => 'setMaxWeight',
        'volumeUOM' => 'setVolumeUOM',
        'weightUOM' => 'setWeightUOM',
        'width' => 'setWidth'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activeByDefault' => 'getActiveByDefault',
        'boxID' => 'getBoxID',
        'boxWeight' => 'getBoxWeight',
        'carriersPackage' => 'getCarriersPackage',
        'description' => 'getDescription',
        'height' => 'getHeight',
        'length' => 'getLength',
        'maxVolume' => 'getMaxVolume',
        'maxWeight' => 'getMaxWeight',
        'volumeUOM' => 'getVolumeUOM',
        'weightUOM' => 'getWeightUOM',
        'width' => 'getWidth'
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

        $this->container['activeByDefault'] = isset($data['activeByDefault']) ? $data['activeByDefault'] : null;
        $this->container['boxID'] = isset($data['boxID']) ? $data['boxID'] : null;
        $this->container['boxWeight'] = isset($data['boxWeight']) ? $data['boxWeight'] : null;
        $this->container['carriersPackage'] = isset($data['carriersPackage']) ? $data['carriersPackage'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['maxVolume'] = isset($data['maxVolume']) ? $data['maxVolume'] : null;
        $this->container['maxWeight'] = isset($data['maxWeight']) ? $data['maxWeight'] : null;
        $this->container['volumeUOM'] = isset($data['volumeUOM']) ? $data['volumeUOM'] : null;
        $this->container['weightUOM'] = isset($data['weightUOM']) ? $data['weightUOM'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
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
     * Gets activeByDefault
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getActiveByDefault()
    {
        return $this->container['activeByDefault'];
    }

    /**
     * Sets activeByDefault
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $activeByDefault activeByDefault
     *
     * @return $this
     */
    public function setActiveByDefault($activeByDefault)
    {
        $this->container['activeByDefault'] = $activeByDefault;

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
     * Gets boxWeight
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getBoxWeight()
    {
        return $this->container['boxWeight'];
    }

    /**
     * Sets boxWeight
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $boxWeight boxWeight
     *
     * @return $this
     */
    public function setBoxWeight($boxWeight)
    {
        $this->container['boxWeight'] = $boxWeight;

        return $this;
    }

    /**
     * Gets carriersPackage
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCarriersPackage()
    {
        return $this->container['carriersPackage'];
    }

    /**
     * Sets carriersPackage
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $carriersPackage carriersPackage
     *
     * @return $this
     */
    public function setCarriersPackage($carriersPackage)
    {
        $this->container['carriersPackage'] = $carriersPackage;

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
     * Gets height
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets length
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets maxVolume
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getMaxVolume()
    {
        return $this->container['maxVolume'];
    }

    /**
     * Sets maxVolume
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $maxVolume maxVolume
     *
     * @return $this
     */
    public function setMaxVolume($maxVolume)
    {
        $this->container['maxVolume'] = $maxVolume;

        return $this;
    }

    /**
     * Gets maxWeight
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getMaxWeight()
    {
        return $this->container['maxWeight'];
    }

    /**
     * Sets maxWeight
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $maxWeight maxWeight
     *
     * @return $this
     */
    public function setMaxWeight($maxWeight)
    {
        $this->container['maxWeight'] = $maxWeight;

        return $this;
    }

    /**
     * Gets volumeUOM
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getVolumeUOM()
    {
        return $this->container['volumeUOM'];
    }

    /**
     * Sets volumeUOM
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $volumeUOM volumeUOM
     *
     * @return $this
     */
    public function setVolumeUOM($volumeUOM)
    {
        $this->container['volumeUOM'] = $volumeUOM;

        return $this;
    }

    /**
     * Gets weightUOM
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWeightUOM()
    {
        return $this->container['weightUOM'];
    }

    /**
     * Sets weightUOM
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $weightUOM weightUOM
     *
     * @return $this
     */
    public function setWeightUOM($weightUOM)
    {
        $this->container['weightUOM'] = $weightUOM;

        return $this;
    }

    /**
     * Gets width
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

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


