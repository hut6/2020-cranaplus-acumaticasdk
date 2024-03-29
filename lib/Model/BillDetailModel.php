<?php
/**
 * BillDetailModel
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
 * BillDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BillDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BillDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'account' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'amount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'extendedCost' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'nonBillable' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'pOOrderNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'pOOrderType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'project' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'projectTask' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'qty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'subaccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'taxCategory' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'transactionDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'unitCost' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'uOM' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'account' => null,
        'amount' => null,
        'branch' => null,
        'description' => null,
        'extendedCost' => null,
        'nonBillable' => null,
        'pOOrderNbr' => null,
        'pOOrderType' => null,
        'project' => null,
        'projectTask' => null,
        'qty' => null,
        'subaccount' => null,
        'taxCategory' => null,
        'transactionDescription' => null,
        'unitCost' => null,
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
        'account' => 'Account',
        'amount' => 'Amount',
        'branch' => 'Branch',
        'description' => 'Description',
        'extendedCost' => 'ExtendedCost',
        'nonBillable' => 'NonBillable',
        'pOOrderNbr' => 'POOrderNbr',
        'pOOrderType' => 'POOrderType',
        'project' => 'Project',
        'projectTask' => 'ProjectTask',
        'qty' => 'Qty',
        'subaccount' => 'Subaccount',
        'taxCategory' => 'TaxCategory',
        'transactionDescription' => 'TransactionDescription',
        'unitCost' => 'UnitCost',
        'uOM' => 'UOM'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account' => 'setAccount',
        'amount' => 'setAmount',
        'branch' => 'setBranch',
        'description' => 'setDescription',
        'extendedCost' => 'setExtendedCost',
        'nonBillable' => 'setNonBillable',
        'pOOrderNbr' => 'setPOOrderNbr',
        'pOOrderType' => 'setPOOrderType',
        'project' => 'setProject',
        'projectTask' => 'setProjectTask',
        'qty' => 'setQty',
        'subaccount' => 'setSubaccount',
        'taxCategory' => 'setTaxCategory',
        'transactionDescription' => 'setTransactionDescription',
        'unitCost' => 'setUnitCost',
        'uOM' => 'setUOM'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account' => 'getAccount',
        'amount' => 'getAmount',
        'branch' => 'getBranch',
        'description' => 'getDescription',
        'extendedCost' => 'getExtendedCost',
        'nonBillable' => 'getNonBillable',
        'pOOrderNbr' => 'getPOOrderNbr',
        'pOOrderType' => 'getPOOrderType',
        'project' => 'getProject',
        'projectTask' => 'getProjectTask',
        'qty' => 'getQty',
        'subaccount' => 'getSubaccount',
        'taxCategory' => 'getTaxCategory',
        'transactionDescription' => 'getTransactionDescription',
        'unitCost' => 'getUnitCost',
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

        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extendedCost'] = isset($data['extendedCost']) ? $data['extendedCost'] : null;
        $this->container['nonBillable'] = isset($data['nonBillable']) ? $data['nonBillable'] : null;
        $this->container['pOOrderNbr'] = isset($data['pOOrderNbr']) ? $data['pOOrderNbr'] : null;
        $this->container['pOOrderType'] = isset($data['pOOrderType']) ? $data['pOOrderType'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['projectTask'] = isset($data['projectTask']) ? $data['projectTask'] : null;
        $this->container['qty'] = isset($data['qty']) ? $data['qty'] : null;
        $this->container['subaccount'] = isset($data['subaccount']) ? $data['subaccount'] : null;
        $this->container['taxCategory'] = isset($data['taxCategory']) ? $data['taxCategory'] : null;
        $this->container['transactionDescription'] = isset($data['transactionDescription']) ? $data['transactionDescription'] : null;
        $this->container['unitCost'] = isset($data['unitCost']) ? $data['unitCost'] : null;
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
     * Gets extendedCost
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getExtendedCost()
    {
        return $this->container['extendedCost'];
    }

    /**
     * Sets extendedCost
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $extendedCost extendedCost
     *
     * @return $this
     */
    public function setExtendedCost($extendedCost)
    {
        $this->container['extendedCost'] = $extendedCost;

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
     * Gets pOOrderNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPOOrderNbr()
    {
        return $this->container['pOOrderNbr'];
    }

    /**
     * Sets pOOrderNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $pOOrderNbr pOOrderNbr
     *
     * @return $this
     */
    public function setPOOrderNbr($pOOrderNbr)
    {
        $this->container['pOOrderNbr'] = $pOOrderNbr;

        return $this;
    }

    /**
     * Gets pOOrderType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPOOrderType()
    {
        return $this->container['pOOrderType'];
    }

    /**
     * Sets pOOrderType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $pOOrderType pOOrderType
     *
     * @return $this
     */
    public function setPOOrderType($pOOrderType)
    {
        $this->container['pOOrderType'] = $pOOrderType;

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
     * Gets unitCost
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getUnitCost()
    {
        return $this->container['unitCost'];
    }

    /**
     * Sets unitCost
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $unitCost unitCost
     *
     * @return $this
     */
    public function setUnitCost($unitCost)
    {
        $this->container['unitCost'] = $unitCost;

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


