<?php
/**
 * BusinessAccountCaseDetailModel
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
 * BusinessAccountCaseDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessAccountCaseDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessAccountCaseDetail';

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
        'caseID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'classID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'closingDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'contract' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'dateReported' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'estimation' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'initialResponse' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'owner' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'reason' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'severity' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subject' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'workgroup' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
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
        'caseID' => null,
        'classID' => null,
        'closingDate' => null,
        'contract' => null,
        'dateReported' => null,
        'estimation' => null,
        'initialResponse' => null,
        'owner' => null,
        'reason' => null,
        'severity' => null,
        'status' => null,
        'subject' => null,
        'workgroup' => null
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
        'caseID' => 'CaseID',
        'classID' => 'ClassID',
        'closingDate' => 'ClosingDate',
        'contract' => 'Contract',
        'dateReported' => 'DateReported',
        'estimation' => 'Estimation',
        'initialResponse' => 'InitialResponse',
        'owner' => 'Owner',
        'reason' => 'Reason',
        'severity' => 'Severity',
        'status' => 'Status',
        'subject' => 'Subject',
        'workgroup' => 'Workgroup'
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
        'caseID' => 'setCaseID',
        'classID' => 'setClassID',
        'closingDate' => 'setClosingDate',
        'contract' => 'setContract',
        'dateReported' => 'setDateReported',
        'estimation' => 'setEstimation',
        'initialResponse' => 'setInitialResponse',
        'owner' => 'setOwner',
        'reason' => 'setReason',
        'severity' => 'setSeverity',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'workgroup' => 'setWorkgroup'
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
        'caseID' => 'getCaseID',
        'classID' => 'getClassID',
        'closingDate' => 'getClosingDate',
        'contract' => 'getContract',
        'dateReported' => 'getDateReported',
        'estimation' => 'getEstimation',
        'initialResponse' => 'getInitialResponse',
        'owner' => 'getOwner',
        'reason' => 'getReason',
        'severity' => 'getSeverity',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'workgroup' => 'getWorkgroup'
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
        $this->container['caseID'] = isset($data['caseID']) ? $data['caseID'] : null;
        $this->container['classID'] = isset($data['classID']) ? $data['classID'] : null;
        $this->container['closingDate'] = isset($data['closingDate']) ? $data['closingDate'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['dateReported'] = isset($data['dateReported']) ? $data['dateReported'] : null;
        $this->container['estimation'] = isset($data['estimation']) ? $data['estimation'] : null;
        $this->container['initialResponse'] = isset($data['initialResponse']) ? $data['initialResponse'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['severity'] = isset($data['severity']) ? $data['severity'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['workgroup'] = isset($data['workgroup']) ? $data['workgroup'] : null;
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
     * Gets caseID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCaseID()
    {
        return $this->container['caseID'];
    }

    /**
     * Sets caseID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $caseID caseID
     *
     * @return $this
     */
    public function setCaseID($caseID)
    {
        $this->container['caseID'] = $caseID;

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
     * Gets closingDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getClosingDate()
    {
        return $this->container['closingDate'];
    }

    /**
     * Sets closingDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $closingDate closingDate
     *
     * @return $this
     */
    public function setClosingDate($closingDate)
    {
        $this->container['closingDate'] = $closingDate;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets dateReported
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getDateReported()
    {
        return $this->container['dateReported'];
    }

    /**
     * Sets dateReported
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $dateReported dateReported
     *
     * @return $this
     */
    public function setDateReported($dateReported)
    {
        $this->container['dateReported'] = $dateReported;

        return $this;
    }

    /**
     * Gets estimation
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getEstimation()
    {
        return $this->container['estimation'];
    }

    /**
     * Sets estimation
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $estimation estimation
     *
     * @return $this
     */
    public function setEstimation($estimation)
    {
        $this->container['estimation'] = $estimation;

        return $this;
    }

    /**
     * Gets initialResponse
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getInitialResponse()
    {
        return $this->container['initialResponse'];
    }

    /**
     * Sets initialResponse
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $initialResponse initialResponse
     *
     * @return $this
     */
    public function setInitialResponse($initialResponse)
    {
        $this->container['initialResponse'] = $initialResponse;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets severity
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSeverity()
    {
        return $this->container['severity'];
    }

    /**
     * Sets severity
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $severity severity
     *
     * @return $this
     */
    public function setSeverity($severity)
    {
        $this->container['severity'] = $severity;

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
     * Gets subject
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets workgroup
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWorkgroup()
    {
        return $this->container['workgroup'];
    }

    /**
     * Sets workgroup
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $workgroup workgroup
     *
     * @return $this
     */
    public function setWorkgroup($workgroup)
    {
        $this->container['workgroup'] = $workgroup;

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


