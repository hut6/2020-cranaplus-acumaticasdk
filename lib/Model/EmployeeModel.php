<?php
/**
 * EmployeeModel
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
 * EmployeeModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmployeeModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Employee';

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
        'branchID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'contact' => '\Hut6\CranaplusAcumaticaSdk\Model\ContactModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'dateOfBirth' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'departmentID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'employeeClassID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'employeeCost' => '\Hut6\CranaplusAcumaticaSdk\Model\EmployeeCostRecordModel[]',
        'employeeID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'employmentHistory' => '\Hut6\CranaplusAcumaticaSdk\Model\EmploymentHistoryRecordModel[]',
        'name' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'paymentMethod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'reportsToID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'branchID' => null,
        'contact' => null,
        'currencyID' => null,
        'dateOfBirth' => null,
        'departmentID' => null,
        'employeeClassID' => null,
        'employeeCost' => null,
        'employeeID' => null,
        'employmentHistory' => null,
        'name' => null,
        'paymentMethod' => null,
        'reportsToID' => null,
        'status' => null
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
        'branchID' => 'BranchID',
        'contact' => 'Contact',
        'currencyID' => 'CurrencyID',
        'dateOfBirth' => 'DateOfBirth',
        'departmentID' => 'DepartmentID',
        'employeeClassID' => 'EmployeeClassID',
        'employeeCost' => 'EmployeeCost',
        'employeeID' => 'EmployeeID',
        'employmentHistory' => 'EmploymentHistory',
        'name' => 'Name',
        'paymentMethod' => 'PaymentMethod',
        'reportsToID' => 'ReportsToID',
        'status' => 'Status'
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
        'branchID' => 'setBranchID',
        'contact' => 'setContact',
        'currencyID' => 'setCurrencyID',
        'dateOfBirth' => 'setDateOfBirth',
        'departmentID' => 'setDepartmentID',
        'employeeClassID' => 'setEmployeeClassID',
        'employeeCost' => 'setEmployeeCost',
        'employeeID' => 'setEmployeeID',
        'employmentHistory' => 'setEmploymentHistory',
        'name' => 'setName',
        'paymentMethod' => 'setPaymentMethod',
        'reportsToID' => 'setReportsToID',
        'status' => 'setStatus'
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
        'branchID' => 'getBranchID',
        'contact' => 'getContact',
        'currencyID' => 'getCurrencyID',
        'dateOfBirth' => 'getDateOfBirth',
        'departmentID' => 'getDepartmentID',
        'employeeClassID' => 'getEmployeeClassID',
        'employeeCost' => 'getEmployeeCost',
        'employeeID' => 'getEmployeeID',
        'employmentHistory' => 'getEmploymentHistory',
        'name' => 'getName',
        'paymentMethod' => 'getPaymentMethod',
        'reportsToID' => 'getReportsToID',
        'status' => 'getStatus'
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
        $this->container['branchID'] = isset($data['branchID']) ? $data['branchID'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['dateOfBirth'] = isset($data['dateOfBirth']) ? $data['dateOfBirth'] : null;
        $this->container['departmentID'] = isset($data['departmentID']) ? $data['departmentID'] : null;
        $this->container['employeeClassID'] = isset($data['employeeClassID']) ? $data['employeeClassID'] : null;
        $this->container['employeeCost'] = isset($data['employeeCost']) ? $data['employeeCost'] : null;
        $this->container['employeeID'] = isset($data['employeeID']) ? $data['employeeID'] : null;
        $this->container['employmentHistory'] = isset($data['employmentHistory']) ? $data['employmentHistory'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['reportsToID'] = isset($data['reportsToID']) ? $data['reportsToID'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
     * Gets branchID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBranchID()
    {
        return $this->container['branchID'];
    }

    /**
     * Sets branchID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $branchID branchID
     *
     * @return $this
     */
    public function setBranchID($branchID)
    {
        $this->container['branchID'] = $branchID;

        return $this;
    }

    /**
     * Gets contact
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ContactModel
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ContactModel $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets currencyID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCurrencyID()
    {
        return $this->container['currencyID'];
    }

    /**
     * Sets currencyID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $currencyID currencyID
     *
     * @return $this
     */
    public function setCurrencyID($currencyID)
    {
        $this->container['currencyID'] = $currencyID;

        return $this;
    }

    /**
     * Gets dateOfBirth
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getDateOfBirth()
    {
        return $this->container['dateOfBirth'];
    }

    /**
     * Sets dateOfBirth
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $dateOfBirth dateOfBirth
     *
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->container['dateOfBirth'] = $dateOfBirth;

        return $this;
    }

    /**
     * Gets departmentID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDepartmentID()
    {
        return $this->container['departmentID'];
    }

    /**
     * Sets departmentID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $departmentID departmentID
     *
     * @return $this
     */
    public function setDepartmentID($departmentID)
    {
        $this->container['departmentID'] = $departmentID;

        return $this;
    }

    /**
     * Gets employeeClassID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getEmployeeClassID()
    {
        return $this->container['employeeClassID'];
    }

    /**
     * Sets employeeClassID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $employeeClassID employeeClassID
     *
     * @return $this
     */
    public function setEmployeeClassID($employeeClassID)
    {
        $this->container['employeeClassID'] = $employeeClassID;

        return $this;
    }

    /**
     * Gets employeeCost
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\EmployeeCostRecordModel[]
     */
    public function getEmployeeCost()
    {
        return $this->container['employeeCost'];
    }

    /**
     * Sets employeeCost
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\EmployeeCostRecordModel[] $employeeCost employeeCost
     *
     * @return $this
     */
    public function setEmployeeCost($employeeCost)
    {
        $this->container['employeeCost'] = $employeeCost;

        return $this;
    }

    /**
     * Gets employeeID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getEmployeeID()
    {
        return $this->container['employeeID'];
    }

    /**
     * Sets employeeID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $employeeID employeeID
     *
     * @return $this
     */
    public function setEmployeeID($employeeID)
    {
        $this->container['employeeID'] = $employeeID;

        return $this;
    }

    /**
     * Gets employmentHistory
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\EmploymentHistoryRecordModel[]
     */
    public function getEmploymentHistory()
    {
        return $this->container['employmentHistory'];
    }

    /**
     * Sets employmentHistory
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\EmploymentHistoryRecordModel[] $employmentHistory employmentHistory
     *
     * @return $this
     */
    public function setEmploymentHistory($employmentHistory)
    {
        $this->container['employmentHistory'] = $employmentHistory;

        return $this;
    }

    /**
     * Gets name
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets reportsToID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReportsToID()
    {
        return $this->container['reportsToID'];
    }

    /**
     * Sets reportsToID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $reportsToID reportsToID
     *
     * @return $this
     */
    public function setReportsToID($reportsToID)
    {
        $this->container['reportsToID'] = $reportsToID;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


