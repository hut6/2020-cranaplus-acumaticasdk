<?php
/**
 * InvoiceDetailModel
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
 * InvoiceDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InvoiceDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InvoiceDetail';

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
        'account' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'amount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'discountAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'extendedPrice' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'inventoryID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'projectTask' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'qty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'subaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subitem' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'transactionDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'unitPrice' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'account' => null,
        'amount' => null,
        'branch' => null,
        'discountAmount' => null,
        'extendedPrice' => null,
        'inventoryID' => null,
        'lastModifiedDateTime' => null,
        'lineNbr' => null,
        'projectTask' => null,
        'qty' => null,
        'subaccount' => null,
        'subitem' => null,
        'transactionDescription' => null,
        'unitPrice' => null,
        'uOM' => null
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
        'account' => 'Account',
        'amount' => 'Amount',
        'branch' => 'Branch',
        'discountAmount' => 'DiscountAmount',
        'extendedPrice' => 'ExtendedPrice',
        'inventoryID' => 'InventoryID',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'lineNbr' => 'LineNbr',
        'projectTask' => 'ProjectTask',
        'qty' => 'Qty',
        'subaccount' => 'Subaccount',
        'subitem' => 'Subitem',
        'transactionDescription' => 'TransactionDescription',
        'unitPrice' => 'UnitPrice',
        'uOM' => 'UOM'
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
        'account' => 'setAccount',
        'amount' => 'setAmount',
        'branch' => 'setBranch',
        'discountAmount' => 'setDiscountAmount',
        'extendedPrice' => 'setExtendedPrice',
        'inventoryID' => 'setInventoryID',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'lineNbr' => 'setLineNbr',
        'projectTask' => 'setProjectTask',
        'qty' => 'setQty',
        'subaccount' => 'setSubaccount',
        'subitem' => 'setSubitem',
        'transactionDescription' => 'setTransactionDescription',
        'unitPrice' => 'setUnitPrice',
        'uOM' => 'setUOM'
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
        'account' => 'getAccount',
        'amount' => 'getAmount',
        'branch' => 'getBranch',
        'discountAmount' => 'getDiscountAmount',
        'extendedPrice' => 'getExtendedPrice',
        'inventoryID' => 'getInventoryID',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'lineNbr' => 'getLineNbr',
        'projectTask' => 'getProjectTask',
        'qty' => 'getQty',
        'subaccount' => 'getSubaccount',
        'subitem' => 'getSubitem',
        'transactionDescription' => 'getTransactionDescription',
        'unitPrice' => 'getUnitPrice',
        'uOM' => 'getUOM'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['extendedPrice'] = isset($data['extendedPrice']) ? $data['extendedPrice'] : null;
        $this->container['inventoryID'] = isset($data['inventoryID']) ? $data['inventoryID'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['projectTask'] = isset($data['projectTask']) ? $data['projectTask'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['subitem'] = isset($data['subitem']) ? $data['subitem'] : null;
        $this->container['transactionDescription'] = isset($data['transactionDescription']) ? $data['transactionDescription'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['uOM'] = isset($data['uOM']) ? $data['uOM'] : null;
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
     * Gets account
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $account account
     *
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets branch
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBranch()
    {
        return $this->container['branch'];
    }

    /**
     * Sets branch
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $branch branch
     *
     * @return $this
     */
    public function setBranch($branch)
    {
        $this->container['branch'] = $branch;

        return $this;
    }

    /**
     * Gets discountAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $discountAmount discountAmount
     *
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets extendedPrice
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getExtendedPrice()
    {
        return $this->container['extendedPrice'];
    }

    /**
     * Sets extendedPrice
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $extendedPrice extendedPrice
     *
     * @return $this
     */
    public function setExtendedPrice($extendedPrice)
    {
        $this->container['extendedPrice'] = $extendedPrice;

        return $this;
    }

    /**
     * Gets inventoryID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getInventoryID()
    {
        return $this->container['inventoryID'];
    }

    /**
     * Sets inventoryID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $inventoryID inventoryID
     *
     * @return $this
     */
    public function setInventoryID($inventoryID)
    {
        $this->container['inventoryID'] = $inventoryID;

        return $this;
    }

    /**
     * Gets lastModifiedDateTime
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getLastModifiedDateTime()
    {
        return $this->container['lastModifiedDateTime'];
    }

    /**
     * Sets lastModifiedDateTime
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $lastModifiedDateTime lastModifiedDateTime
     *
     * @return $this
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
        $this->container['lastModifiedDateTime'] = $lastModifiedDateTime;

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
     * Gets projectTask
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getProjectTask()
    {
        return $this->container['projectTask'];
    }

    /**
     * Sets projectTask
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $projectTask projectTask
     *
     * @return $this
     */
    public function setProjectTask($projectTask)
    {
        $this->container['projectTask'] = $projectTask;

        return $this;
    }

    /**
     * Gets qty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getQty()
    {
        return $this->container['qty'];
    }

    /**
     * Sets qty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $qty qty
     *
     * @return $this
     */
    public function setQty($qty)
    {
        $this->container['qty'] = $qty;

        return $this;
    }

    /**
     * Gets subaccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubaccount()
    {
        return $this->container['subaccount'];
    }

    /**
     * Sets subaccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subaccount subaccount
     *
     * @return $this
     */
    public function setSubaccount($subaccount)
    {
        $this->container['subaccount'] = $subaccount;

        return $this;
    }

    /**
     * Gets subitem
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubitem()
    {
        return $this->container['subitem'];
    }

    /**
     * Sets subitem
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subitem subitem
     *
     * @return $this
     */
    public function setSubitem($subitem)
    {
        $this->container['subitem'] = $subitem;

        return $this;
    }

    /**
     * Gets transactionDescription
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTransactionDescription()
    {
        return $this->container['transactionDescription'];
    }

    /**
     * Sets transactionDescription
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $transactionDescription transactionDescription
     *
     * @return $this
     */
    public function setTransactionDescription($transactionDescription)
    {
        $this->container['transactionDescription'] = $transactionDescription;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $unitPrice unitPrice
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

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


