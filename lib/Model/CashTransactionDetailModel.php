<?php
/**
 * CashTransactionDetailModel
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
 * CashTransactionDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CashTransactionDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CashTransactionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accountDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'adjRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'amount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'costCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'itemID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'lineNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'nonBillable' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'offsetAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'offsetCashAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'offsetSubaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'price' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'project' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'projectTask' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'quantity' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'taxCategory' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'type' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accountDescription' => null,
        'adjRefNbr' => null,
        'amount' => null,
        'branch' => null,
        'costCode' => null,
        'description' => null,
        'itemID' => null,
        'lineNbr' => null,
        'nonBillable' => null,
        'offsetAccount' => null,
        'offsetCashAccount' => null,
        'offsetSubaccount' => null,
        'price' => null,
        'project' => null,
        'projectTask' => null,
        'quantity' => null,
        'taxCategory' => null,
        'type' => null,
        'uOM' => null
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
        'accountDescription' => 'AccountDescription',
        'adjRefNbr' => 'AdjRefNbr',
        'amount' => 'Amount',
        'branch' => 'Branch',
        'costCode' => 'CostCode',
        'description' => 'Description',
        'itemID' => 'ItemID',
        'lineNbr' => 'LineNbr',
        'nonBillable' => 'NonBillable',
        'offsetAccount' => 'OffsetAccount',
        'offsetCashAccount' => 'OffsetCashAccount',
        'offsetSubaccount' => 'OffsetSubaccount',
        'price' => 'Price',
        'project' => 'Project',
        'projectTask' => 'ProjectTask',
        'quantity' => 'Quantity',
        'taxCategory' => 'TaxCategory',
        'type' => 'Type',
        'uOM' => 'UOM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accountDescription' => 'setAccountDescription',
        'adjRefNbr' => 'setAdjRefNbr',
        'amount' => 'setAmount',
        'branch' => 'setBranch',
        'costCode' => 'setCostCode',
        'description' => 'setDescription',
        'itemID' => 'setItemID',
        'lineNbr' => 'setLineNbr',
        'nonBillable' => 'setNonBillable',
        'offsetAccount' => 'setOffsetAccount',
        'offsetCashAccount' => 'setOffsetCashAccount',
        'offsetSubaccount' => 'setOffsetSubaccount',
        'price' => 'setPrice',
        'project' => 'setProject',
        'projectTask' => 'setProjectTask',
        'quantity' => 'setQuantity',
        'taxCategory' => 'setTaxCategory',
        'type' => 'setType',
        'uOM' => 'setUOM'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accountDescription' => 'getAccountDescription',
        'adjRefNbr' => 'getAdjRefNbr',
        'amount' => 'getAmount',
        'branch' => 'getBranch',
        'costCode' => 'getCostCode',
        'description' => 'getDescription',
        'itemID' => 'getItemID',
        'lineNbr' => 'getLineNbr',
        'nonBillable' => 'getNonBillable',
        'offsetAccount' => 'getOffsetAccount',
        'offsetCashAccount' => 'getOffsetCashAccount',
        'offsetSubaccount' => 'getOffsetSubaccount',
        'price' => 'getPrice',
        'project' => 'getProject',
        'projectTask' => 'getProjectTask',
        'quantity' => 'getQuantity',
        'taxCategory' => 'getTaxCategory',
        'type' => 'getType',
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

        $this->container['accountDescription'] = isset($data['accountDescription']) ? $data['accountDescription'] : null;
        $this->container['adjRefNbr'] = isset($data['adjRefNbr']) ? $data['adjRefNbr'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['costCode'] = isset($data['costCode']) ? $data['costCode'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['itemID'] = isset($data['itemID']) ? $data['itemID'] : null;
        $this->container['lineNbr'] = isset($data['lineNbr']) ? $data['lineNbr'] : null;
        $this->container['nonBillable'] = isset($data['nonBillable']) ? $data['nonBillable'] : null;
        $this->container['offsetAccount'] = isset($data['offsetAccount']) ? $data['offsetAccount'] : null;
        $this->container['offsetCashAccount'] = isset($data['offsetCashAccount']) ? $data['offsetCashAccount'] : null;
        $this->container['offsetSubaccount'] = isset($data['offsetSubaccount']) ? $data['offsetSubaccount'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['projectTask'] = isset($data['projectTask']) ? $data['projectTask'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['taxCategory'] = isset($data['taxCategory']) ? $data['taxCategory'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['uOM'] = isset($data['uOM']) ? $data['uOM'] : null;
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
     * Gets accountDescription
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAccountDescription()
    {
        return $this->container['accountDescription'];
    }

    /**
     * Sets accountDescription
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $accountDescription accountDescription
     *
     * @return $this
     */
    public function setAccountDescription($accountDescription)
    {
        $this->container['accountDescription'] = $accountDescription;

        return $this;
    }

    /**
     * Gets adjRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAdjRefNbr()
    {
        return $this->container['adjRefNbr'];
    }

    /**
     * Sets adjRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $adjRefNbr adjRefNbr
     *
     * @return $this
     */
    public function setAdjRefNbr($adjRefNbr)
    {
        $this->container['adjRefNbr'] = $adjRefNbr;

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
     * Gets costCode
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCostCode()
    {
        return $this->container['costCode'];
    }

    /**
     * Sets costCode
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $costCode costCode
     *
     * @return $this
     */
    public function setCostCode($costCode)
    {
        $this->container['costCode'] = $costCode;

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
     * Gets itemID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getItemID()
    {
        return $this->container['itemID'];
    }

    /**
     * Sets itemID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $itemID itemID
     *
     * @return $this
     */
    public function setItemID($itemID)
    {
        $this->container['itemID'] = $itemID;

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
     * Gets nonBillable
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getNonBillable()
    {
        return $this->container['nonBillable'];
    }

    /**
     * Sets nonBillable
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $nonBillable nonBillable
     *
     * @return $this
     */
    public function setNonBillable($nonBillable)
    {
        $this->container['nonBillable'] = $nonBillable;

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
     * Gets offsetCashAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOffsetCashAccount()
    {
        return $this->container['offsetCashAccount'];
    }

    /**
     * Sets offsetCashAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $offsetCashAccount offsetCashAccount
     *
     * @return $this
     */
    public function setOffsetCashAccount($offsetCashAccount)
    {
        $this->container['offsetCashAccount'] = $offsetCashAccount;

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
     * Gets price
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets project
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * Gets quantity
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets taxCategory
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTaxCategory()
    {
        return $this->container['taxCategory'];
    }

    /**
     * Sets taxCategory
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $taxCategory taxCategory
     *
     * @return $this
     */
    public function setTaxCategory($taxCategory)
    {
        $this->container['taxCategory'] = $taxCategory;

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


