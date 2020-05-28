<?php
/**
 * HttpErrorModel
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
 * HttpErrorModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HttpErrorModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'HttpError';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'message' => 'string',
        'messageDetail' => 'string',
        'exceptionMessage' => 'string',
        'exceptionType' => 'string',
        'stackTrace' => 'string',
        'modelState' => 'map[string,string[]]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'message' => null,
        'messageDetail' => null,
        'exceptionMessage' => null,
        'exceptionType' => null,
        'stackTrace' => null,
        'modelState' => null
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
        'message' => 'message',
        'messageDetail' => 'messageDetail',
        'exceptionMessage' => 'exceptionMessage',
        'exceptionType' => 'exceptionType',
        'stackTrace' => 'stackTrace',
        'modelState' => 'modelState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'message' => 'setMessage',
        'messageDetail' => 'setMessageDetail',
        'exceptionMessage' => 'setExceptionMessage',
        'exceptionType' => 'setExceptionType',
        'stackTrace' => 'setStackTrace',
        'modelState' => 'setModelState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'message' => 'getMessage',
        'messageDetail' => 'getMessageDetail',
        'exceptionMessage' => 'getExceptionMessage',
        'exceptionType' => 'getExceptionType',
        'stackTrace' => 'getStackTrace',
        'modelState' => 'getModelState'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['messageDetail'] = isset($data['messageDetail']) ? $data['messageDetail'] : null;
        $this->container['exceptionMessage'] = isset($data['exceptionMessage']) ? $data['exceptionMessage'] : null;
        $this->container['exceptionType'] = isset($data['exceptionType']) ? $data['exceptionType'] : null;
        $this->container['stackTrace'] = isset($data['stackTrace']) ? $data['stackTrace'] : null;
        $this->container['modelState'] = isset($data['modelState']) ? $data['modelState'] : null;
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
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message message
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets messageDetail
     *
     * @return string
     */
    public function getMessageDetail()
    {
        return $this->container['messageDetail'];
    }

    /**
     * Sets messageDetail
     *
     * @param string $messageDetail messageDetail
     *
     * @return $this
     */
    public function setMessageDetail($messageDetail)
    {
        $this->container['messageDetail'] = $messageDetail;

        return $this;
    }

    /**
     * Gets exceptionMessage
     *
     * @return string
     */
    public function getExceptionMessage()
    {
        return $this->container['exceptionMessage'];
    }

    /**
     * Sets exceptionMessage
     *
     * @param string $exceptionMessage exceptionMessage
     *
     * @return $this
     */
    public function setExceptionMessage($exceptionMessage)
    {
        $this->container['exceptionMessage'] = $exceptionMessage;

        return $this;
    }

    /**
     * Gets exceptionType
     *
     * @return string
     */
    public function getExceptionType()
    {
        return $this->container['exceptionType'];
    }

    /**
     * Sets exceptionType
     *
     * @param string $exceptionType exceptionType
     *
     * @return $this
     */
    public function setExceptionType($exceptionType)
    {
        $this->container['exceptionType'] = $exceptionType;

        return $this;
    }

    /**
     * Gets stackTrace
     *
     * @return string
     */
    public function getStackTrace()
    {
        return $this->container['stackTrace'];
    }

    /**
     * Sets stackTrace
     *
     * @param string $stackTrace stackTrace
     *
     * @return $this
     */
    public function setStackTrace($stackTrace)
    {
        $this->container['stackTrace'] = $stackTrace;

        return $this;
    }

    /**
     * Gets modelState
     *
     * @return map[string,string[]]
     */
    public function getModelState()
    {
        return $this->container['modelState'];
    }

    /**
     * Sets modelState
     *
     * @param map[string,string[]] $modelState modelState
     *
     * @return $this
     */
    public function setModelState($modelState)
    {
        $this->container['modelState'] = $modelState;

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


