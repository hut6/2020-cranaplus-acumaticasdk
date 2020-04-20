<?php
/**
 * BusinessAccountActivityDetailModel
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
 * BusinessAccountActivityDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BusinessAccountActivityDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BusinessAccountActivityDetail';

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
        'classIcon' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'createdAt' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'creatorID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'creatorUsername' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'isCompleteIcon' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'owner' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'priorityIcon' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'project' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'projectTask' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'refNoteID' => '\Hut6\CranaplusAcumaticaSdk\Model\GuidValueModel',
        'relatedEntityDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'released' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'reminderIcon' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'startDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'summary' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'timeSpent' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'type' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
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
        'classIcon' => null,
        'createdAt' => null,
        'creatorID' => null,
        'creatorUsername' => null,
        'isCompleteIcon' => null,
        'owner' => null,
        'priorityIcon' => null,
        'project' => null,
        'projectTask' => null,
        'refNoteID' => null,
        'relatedEntityDescription' => null,
        'released' => null,
        'reminderIcon' => null,
        'startDate' => null,
        'status' => null,
        'summary' => null,
        'timeSpent' => null,
        'type' => null,
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
        'classIcon' => 'ClassIcon',
        'createdAt' => 'CreatedAt',
        'creatorID' => 'CreatorID',
        'creatorUsername' => 'CreatorUsername',
        'isCompleteIcon' => 'IsCompleteIcon',
        'owner' => 'Owner',
        'priorityIcon' => 'PriorityIcon',
        'project' => 'Project',
        'projectTask' => 'ProjectTask',
        'refNoteID' => 'RefNoteID',
        'relatedEntityDescription' => 'RelatedEntityDescription',
        'released' => 'Released',
        'reminderIcon' => 'ReminderIcon',
        'startDate' => 'StartDate',
        'status' => 'Status',
        'summary' => 'Summary',
        'timeSpent' => 'TimeSpent',
        'type' => 'Type',
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
        'classIcon' => 'setClassIcon',
        'createdAt' => 'setCreatedAt',
        'creatorID' => 'setCreatorID',
        'creatorUsername' => 'setCreatorUsername',
        'isCompleteIcon' => 'setIsCompleteIcon',
        'owner' => 'setOwner',
        'priorityIcon' => 'setPriorityIcon',
        'project' => 'setProject',
        'projectTask' => 'setProjectTask',
        'refNoteID' => 'setRefNoteID',
        'relatedEntityDescription' => 'setRelatedEntityDescription',
        'released' => 'setReleased',
        'reminderIcon' => 'setReminderIcon',
        'startDate' => 'setStartDate',
        'status' => 'setStatus',
        'summary' => 'setSummary',
        'timeSpent' => 'setTimeSpent',
        'type' => 'setType',
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
        'classIcon' => 'getClassIcon',
        'createdAt' => 'getCreatedAt',
        'creatorID' => 'getCreatorID',
        'creatorUsername' => 'getCreatorUsername',
        'isCompleteIcon' => 'getIsCompleteIcon',
        'owner' => 'getOwner',
        'priorityIcon' => 'getPriorityIcon',
        'project' => 'getProject',
        'projectTask' => 'getProjectTask',
        'refNoteID' => 'getRefNoteID',
        'relatedEntityDescription' => 'getRelatedEntityDescription',
        'released' => 'getReleased',
        'reminderIcon' => 'getReminderIcon',
        'startDate' => 'getStartDate',
        'status' => 'getStatus',
        'summary' => 'getSummary',
        'timeSpent' => 'getTimeSpent',
        'type' => 'getType',
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
        $this->container['classIcon'] = isset($data['classIcon']) ? $data['classIcon'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['creatorID'] = isset($data['creatorID']) ? $data['creatorID'] : null;
        $this->container['creatorUsername'] = isset($data['creatorUsername']) ? $data['creatorUsername'] : null;
        $this->container['isCompleteIcon'] = isset($data['isCompleteIcon']) ? $data['isCompleteIcon'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['priorityIcon'] = isset($data['priorityIcon']) ? $data['priorityIcon'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['projectTask'] = isset($data['projectTask']) ? $data['projectTask'] : null;
        $this->container['refNoteID'] = isset($data['refNoteID']) ? $data['refNoteID'] : null;
        $this->container['relatedEntityDescription'] = isset($data['relatedEntityDescription']) ? $data['relatedEntityDescription'] : null;
        $this->container['released'] = isset($data['released']) ? $data['released'] : null;
        $this->container['reminderIcon'] = isset($data['reminderIcon']) ? $data['reminderIcon'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['timeSpent'] = isset($data['timeSpent']) ? $data['timeSpent'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
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
     * Gets classIcon
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getClassIcon()
    {
        return $this->container['classIcon'];
    }

    /**
     * Sets classIcon
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $classIcon classIcon
     *
     * @return $this
     */
    public function setClassIcon($classIcon)
    {
        $this->container['classIcon'] = $classIcon;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets creatorID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCreatorID()
    {
        return $this->container['creatorID'];
    }

    /**
     * Sets creatorID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $creatorID creatorID
     *
     * @return $this
     */
    public function setCreatorID($creatorID)
    {
        $this->container['creatorID'] = $creatorID;

        return $this;
    }

    /**
     * Gets creatorUsername
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCreatorUsername()
    {
        return $this->container['creatorUsername'];
    }

    /**
     * Sets creatorUsername
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $creatorUsername creatorUsername
     *
     * @return $this
     */
    public function setCreatorUsername($creatorUsername)
    {
        $this->container['creatorUsername'] = $creatorUsername;

        return $this;
    }

    /**
     * Gets isCompleteIcon
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getIsCompleteIcon()
    {
        return $this->container['isCompleteIcon'];
    }

    /**
     * Sets isCompleteIcon
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $isCompleteIcon isCompleteIcon
     *
     * @return $this
     */
    public function setIsCompleteIcon($isCompleteIcon)
    {
        $this->container['isCompleteIcon'] = $isCompleteIcon;

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
     * Gets priorityIcon
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPriorityIcon()
    {
        return $this->container['priorityIcon'];
    }

    /**
     * Sets priorityIcon
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $priorityIcon priorityIcon
     *
     * @return $this
     */
    public function setPriorityIcon($priorityIcon)
    {
        $this->container['priorityIcon'] = $priorityIcon;

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
     * Gets refNoteID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\GuidValueModel
     */
    public function getRefNoteID()
    {
        return $this->container['refNoteID'];
    }

    /**
     * Sets refNoteID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\GuidValueModel $refNoteID refNoteID
     *
     * @return $this
     */
    public function setRefNoteID($refNoteID)
    {
        $this->container['refNoteID'] = $refNoteID;

        return $this;
    }

    /**
     * Gets relatedEntityDescription
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getRelatedEntityDescription()
    {
        return $this->container['relatedEntityDescription'];
    }

    /**
     * Sets relatedEntityDescription
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $relatedEntityDescription relatedEntityDescription
     *
     * @return $this
     */
    public function setRelatedEntityDescription($relatedEntityDescription)
    {
        $this->container['relatedEntityDescription'] = $relatedEntityDescription;

        return $this;
    }

    /**
     * Gets released
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getReleased()
    {
        return $this->container['released'];
    }

    /**
     * Sets released
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $released released
     *
     * @return $this
     */
    public function setReleased($released)
    {
        $this->container['released'] = $released;

        return $this;
    }

    /**
     * Gets reminderIcon
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReminderIcon()
    {
        return $this->container['reminderIcon'];
    }

    /**
     * Sets reminderIcon
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $reminderIcon reminderIcon
     *
     * @return $this
     */
    public function setReminderIcon($reminderIcon)
    {
        $this->container['reminderIcon'] = $reminderIcon;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

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
     * Gets summary
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets timeSpent
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTimeSpent()
    {
        return $this->container['timeSpent'];
    }

    /**
     * Sets timeSpent
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $timeSpent timeSpent
     *
     * @return $this
     */
    public function setTimeSpent($timeSpent)
    {
        $this->container['timeSpent'] = $timeSpent;

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


