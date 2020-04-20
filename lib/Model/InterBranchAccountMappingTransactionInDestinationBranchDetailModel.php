<?php
/**
 * InterBranchAccountMappingTransactionInDestinationBranchDetailModel
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
 * InterBranchAccountMappingTransactionInDestinationBranchDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InterBranchAccountMappingTransactionInDestinationBranchDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InterBranchAccountMappingTransactionInDestinationBranchDetail';

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
        'accountFrom' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'accountTo' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'branchID' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'destinationBranch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'offsetAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'offsetSubaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'accountFrom' => null,
        'accountTo' => null,
        'branchID' => null,
        'destinationBranch' => null,
        'lineNbr' => null,
        'offsetAccount' => null,
        'offsetSubaccount' => null
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
        'accountFrom' => 'AccountFrom',
        'accountTo' => 'AccountTo',
        'branchID' => 'BranchID',
        'destinationBranch' => 'DestinationBranch',
        'lineNbr' => 'LineNbr',
        'offsetAccount' => 'OffsetAccount',
        'offsetSubaccount' => 'OffsetSubaccount'
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
        'accountFrom' => 'setAccountFrom',
        'accountTo' => 'setAccountTo',
        'branchID' => 'setBranchID',
        'destinationBranch' => 'setDestinationBranch',
        'lineNbr' => 'setLineNbr',
        'offsetAccount' => 'setOffsetAccount',
        'offsetSubaccount' => 'setOffsetSubaccount'
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
        'accountFrom' => 'getAccountFrom',
        'accountTo' => 'getAccountTo',
        'branchID' => 'getBranchID',
        'destinationBranch' => 'getDestinationBranch',
        'lineNbr' => 'getLineNbr',
        'offsetAccount' => 'getOffsetAccount',
        'offsetSubaccount' => 'getOffsetSubaccount'
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
        $this->container['accountFrom'] = isset($data['accountFrom']) ? $data['accountFrom'] : null;
        $this->container['accountTo'] = isset($data['accountTo']) ? $data['accountTo'] : null;
        $this->container['branchID'] = isset($data['branchID']) ? $data['branchID'] : null;
        $this->container['destinationBranch'] = isset($data['destinationBranch']) ? $data['destinationBranch'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['offsetAccount'] = isset($data['offsetAccount']) ? $data['offsetAccount'] : null;
        $this->container['offsetSubaccount'] = isset($data['offsetSubaccount']) ? $data['offsetSubaccount'] : null;
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
     * Gets accountFrom
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAccountFrom()
    {
        return $this->container['accountFrom'];
    }

    /**
     * Sets accountFrom
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $accountFrom accountFrom
     *
     * @return $this
     */
    public function setAccountFrom($accountFrom)
    {
        $this->container['accountFrom'] = $accountFrom;

        return $this;
    }

    /**
     * Gets accountTo
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAccountTo()
    {
        return $this->container['accountTo'];
    }

    /**
     * Sets accountTo
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $accountTo accountTo
     *
     * @return $this
     */
    public function setAccountTo($accountTo)
    {
        $this->container['accountTo'] = $accountTo;

        return $this;
    }

    /**
     * Gets branchID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getBranchID()
    {
        return $this->container['branchID'];
    }

    /**
     * Sets branchID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $branchID branchID
     *
     * @return $this
     */
    public function setBranchID($branchID)
    {
        $this->container['branchID'] = $branchID;

        return $this;
    }

    /**
     * Gets destinationBranch
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDestinationBranch()
    {
        return $this->container['destinationBranch'];
    }

    /**
     * Sets destinationBranch
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $destinationBranch destinationBranch
     *
     * @return $this
     */
    public function setDestinationBranch($destinationBranch)
    {
        $this->container['destinationBranch'] = $destinationBranch;

        return $this;
    }

    /**
     * Gets lineNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getLineNbr()
    {
        return $this->container['lineNbr'];
    }

    /**
     * Sets lineNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $lineNbr lineNbr
     *
     * @return $this
     */
    public function setLineNbr($lineNbr)
    {
        $this->container['lineNbr'] = $lineNbr;

        return $this;
    }

    /**
     * Gets offsetAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOffsetAccount()
    {
        return $this->container['offsetAccount'];
    }

    /**
     * Sets offsetAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $offsetAccount offsetAccount
     *
     * @return $this
     */
    public function setOffsetAccount($offsetAccount)
    {
        $this->container['offsetAccount'] = $offsetAccount;

        return $this;
    }

    /**
     * Gets offsetSubaccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOffsetSubaccount()
    {
        return $this->container['offsetSubaccount'];
    }

    /**
     * Sets offsetSubaccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $offsetSubaccount offsetSubaccount
     *
     * @return $this
     */
    public function setOffsetSubaccount($offsetSubaccount)
    {
        $this->container['offsetSubaccount'] = $offsetSubaccount;

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


