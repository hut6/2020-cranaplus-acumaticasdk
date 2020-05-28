<?php
/**
 * LotSerialClassModel
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
 * LotSerialClassModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LotSerialClassModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LotSerialClass';

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
        'assignmentMethod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'classID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'issueMethod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'segments' => '\Hut6\CranaplusAcumaticaSdk\Model\LotSerialClassSegmentModel[]',
        'trackExpirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'trackingMethod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'assignmentMethod' => null,
        'classID' => null,
        'description' => null,
        'issueMethod' => null,
        'segments' => null,
        'trackExpirationDate' => null,
        'trackingMethod' => null
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
        'assignmentMethod' => 'AssignmentMethod',
        'classID' => 'ClassID',
        'description' => 'Description',
        'issueMethod' => 'IssueMethod',
        'segments' => 'Segments',
        'trackExpirationDate' => 'TrackExpirationDate',
        'trackingMethod' => 'TrackingMethod'
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
        'assignmentMethod' => 'setAssignmentMethod',
        'classID' => 'setClassID',
        'description' => 'setDescription',
        'issueMethod' => 'setIssueMethod',
        'segments' => 'setSegments',
        'trackExpirationDate' => 'setTrackExpirationDate',
        'trackingMethod' => 'setTrackingMethod'
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
        'assignmentMethod' => 'getAssignmentMethod',
        'classID' => 'getClassID',
        'description' => 'getDescription',
        'issueMethod' => 'getIssueMethod',
        'segments' => 'getSegments',
        'trackExpirationDate' => 'getTrackExpirationDate',
        'trackingMethod' => 'getTrackingMethod'
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
        $this->container['assignmentMethod'] = isset($data['assignmentMethod']) ? $data['assignmentMethod'] : null;
        $this->container['classID'] = isset($data['classID']) ? $data['classID'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['issueMethod'] = isset($data['issueMethod']) ? $data['issueMethod'] : null;
        $this->container['segments'] = isset($data['segments']) ? $data['segments'] : null;
        $this->container['trackExpirationDate'] = isset($data['trackExpirationDate']) ? $data['trackExpirationDate'] : null;
        $this->container['trackingMethod'] = isset($data['trackingMethod']) ? $data['trackingMethod'] : null;
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
     * Gets assignmentMethod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAssignmentMethod()
    {
        return $this->container['assignmentMethod'];
    }

    /**
     * Sets assignmentMethod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $assignmentMethod assignmentMethod
     *
     * @return $this
     */
    public function setAssignmentMethod($assignmentMethod)
    {
        $this->container['assignmentMethod'] = $assignmentMethod;

        return $this;
    }

    /**
     * Gets classID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getClassID()
    {
        return $this->container['classID'];
    }

    /**
     * Sets classID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $classID classID
     *
     * @return $this
     */
    public function setClassID($classID)
    {
        $this->container['classID'] = $classID;

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
     * Gets issueMethod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getIssueMethod()
    {
        return $this->container['issueMethod'];
    }

    /**
     * Sets issueMethod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $issueMethod issueMethod
     *
     * @return $this
     */
    public function setIssueMethod($issueMethod)
    {
        $this->container['issueMethod'] = $issueMethod;

        return $this;
    }

    /**
     * Gets segments
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\LotSerialClassSegmentModel[]
     */
    public function getSegments()
    {
        return $this->container['segments'];
    }

    /**
     * Sets segments
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\LotSerialClassSegmentModel[] $segments segments
     *
     * @return $this
     */
    public function setSegments($segments)
    {
        $this->container['segments'] = $segments;

        return $this;
    }

    /**
     * Gets trackExpirationDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getTrackExpirationDate()
    {
        return $this->container['trackExpirationDate'];
    }

    /**
     * Sets trackExpirationDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $trackExpirationDate trackExpirationDate
     *
     * @return $this
     */
    public function setTrackExpirationDate($trackExpirationDate)
    {
        $this->container['trackExpirationDate'] = $trackExpirationDate;

        return $this;
    }

    /**
     * Gets trackingMethod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTrackingMethod()
    {
        return $this->container['trackingMethod'];
    }

    /**
     * Sets trackingMethod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $trackingMethod trackingMethod
     *
     * @return $this
     */
    public function setTrackingMethod($trackingMethod)
    {
        $this->container['trackingMethod'] = $trackingMethod;

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


