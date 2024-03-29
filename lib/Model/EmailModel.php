<?php
/**
 * EmailModel
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
 * EmailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EmailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bcc' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'body' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'cc' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'date' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'from' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'fromEmailAccountDisplayName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'fromEmailAccountID' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'incoming' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'internal' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'mailStatus' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'owner' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'parent' => '\Hut6\CranaplusAcumaticaSdk\Model\GuidValueModel',
        'parentSummary' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'relatedEntityDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'startTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'subject' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'timeActivity' => '\Hut6\CranaplusAcumaticaSdk\Model\EmailTimeActivityModel',
        'to' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'workgroup' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bcc' => null,
        'body' => null,
        'cc' => null,
        'date' => null,
        'description' => null,
        'from' => null,
        'fromEmailAccountDisplayName' => null,
        'fromEmailAccountID' => null,
        'incoming' => null,
        'internal' => null,
        'mailStatus' => null,
        'owner' => null,
        'parent' => null,
        'parentSummary' => null,
        'relatedEntityDescription' => null,
        'startTime' => null,
        'subject' => null,
        'timeActivity' => null,
        'to' => null,
        'workgroup' => null
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
        'bcc' => 'Bcc',
        'body' => 'Body',
        'cc' => 'Cc',
        'date' => 'Date',
        'description' => 'Description',
        'from' => 'From',
        'fromEmailAccountDisplayName' => 'FromEmailAccountDisplayName',
        'fromEmailAccountID' => 'FromEmailAccountID',
        'incoming' => 'Incoming',
        'internal' => 'Internal',
        'mailStatus' => 'MailStatus',
        'owner' => 'Owner',
        'parent' => 'Parent',
        'parentSummary' => 'ParentSummary',
        'relatedEntityDescription' => 'RelatedEntityDescription',
        'startTime' => 'StartTime',
        'subject' => 'Subject',
        'timeActivity' => 'TimeActivity',
        'to' => 'To',
        'workgroup' => 'Workgroup'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bcc' => 'setBcc',
        'body' => 'setBody',
        'cc' => 'setCc',
        'date' => 'setDate',
        'description' => 'setDescription',
        'from' => 'setFrom',
        'fromEmailAccountDisplayName' => 'setFromEmailAccountDisplayName',
        'fromEmailAccountID' => 'setFromEmailAccountID',
        'incoming' => 'setIncoming',
        'internal' => 'setInternal',
        'mailStatus' => 'setMailStatus',
        'owner' => 'setOwner',
        'parent' => 'setParent',
        'parentSummary' => 'setParentSummary',
        'relatedEntityDescription' => 'setRelatedEntityDescription',
        'startTime' => 'setStartTime',
        'subject' => 'setSubject',
        'timeActivity' => 'setTimeActivity',
        'to' => 'setTo',
        'workgroup' => 'setWorkgroup'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bcc' => 'getBcc',
        'body' => 'getBody',
        'cc' => 'getCc',
        'date' => 'getDate',
        'description' => 'getDescription',
        'from' => 'getFrom',
        'fromEmailAccountDisplayName' => 'getFromEmailAccountDisplayName',
        'fromEmailAccountID' => 'getFromEmailAccountID',
        'incoming' => 'getIncoming',
        'internal' => 'getInternal',
        'mailStatus' => 'getMailStatus',
        'owner' => 'getOwner',
        'parent' => 'getParent',
        'parentSummary' => 'getParentSummary',
        'relatedEntityDescription' => 'getRelatedEntityDescription',
        'startTime' => 'getStartTime',
        'subject' => 'getSubject',
        'timeActivity' => 'getTimeActivity',
        'to' => 'getTo',
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

        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['cc'] = isset($data['cc']) ? $data['cc'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['fromEmailAccountDisplayName'] = isset($data['fromEmailAccountDisplayName']) ? $data['fromEmailAccountDisplayName'] : null;
        $this->container['fromEmailAccountID'] = isset($data['fromEmailAccountID']) ? $data['fromEmailAccountID'] : null;
        $this->container['incoming'] = isset($data['incoming']) ? $data['incoming'] : null;
        $this->container['internal'] = isset($data['internal']) ? $data['internal'] : null;
        $this->container['mailStatus'] = isset($data['mailStatus']) ? $data['mailStatus'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['parentSummary'] = isset($data['parentSummary']) ? $data['parentSummary'] : null;
        $this->container['relatedEntityDescription'] = isset($data['relatedEntityDescription']) ? $data['relatedEntityDescription'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['timeActivity'] = isset($data['timeActivity']) ? $data['timeActivity'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['workgroup'] = isset($data['workgroup']) ? $data['workgroup'] : null;
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
     * Gets bcc
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $bcc bcc
     *
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets body
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $cc cc
     *
     * @return $this
     */
    public function setCc($cc)
    {
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets from
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $from from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets fromEmailAccountDisplayName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getFromEmailAccountDisplayName()
    {
        return $this->container['fromEmailAccountDisplayName'];
    }

    /**
     * Sets fromEmailAccountDisplayName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $fromEmailAccountDisplayName fromEmailAccountDisplayName
     *
     * @return $this
     */
    public function setFromEmailAccountDisplayName($fromEmailAccountDisplayName)
    {
        $this->container['fromEmailAccountDisplayName'] = $fromEmailAccountDisplayName;

        return $this;
    }

    /**
     * Gets fromEmailAccountID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getFromEmailAccountID()
    {
        return $this->container['fromEmailAccountID'];
    }

    /**
     * Sets fromEmailAccountID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $fromEmailAccountID fromEmailAccountID
     *
     * @return $this
     */
    public function setFromEmailAccountID($fromEmailAccountID)
    {
        $this->container['fromEmailAccountID'] = $fromEmailAccountID;

        return $this;
    }

    /**
     * Gets incoming
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getIncoming()
    {
        return $this->container['incoming'];
    }

    /**
     * Sets incoming
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $incoming incoming
     *
     * @return $this
     */
    public function setIncoming($incoming)
    {
        $this->container['incoming'] = $incoming;

        return $this;
    }

    /**
     * Gets internal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getInternal()
    {
        return $this->container['internal'];
    }

    /**
     * Sets internal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $internal internal
     *
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->container['internal'] = $internal;

        return $this;
    }

    /**
     * Gets mailStatus
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getMailStatus()
    {
        return $this->container['mailStatus'];
    }

    /**
     * Sets mailStatus
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $mailStatus mailStatus
     *
     * @return $this
     */
    public function setMailStatus($mailStatus)
    {
        $this->container['mailStatus'] = $mailStatus;

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
     * Gets parent
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\GuidValueModel
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\GuidValueModel $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets parentSummary
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getParentSummary()
    {
        return $this->container['parentSummary'];
    }

    /**
     * Sets parentSummary
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $parentSummary parentSummary
     *
     * @return $this
     */
    public function setParentSummary($parentSummary)
    {
        $this->container['parentSummary'] = $parentSummary;

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
     * Gets startTime
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $startTime startTime
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

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
     * Gets timeActivity
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\EmailTimeActivityModel
     */
    public function getTimeActivity()
    {
        return $this->container['timeActivity'];
    }

    /**
     * Sets timeActivity
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\EmailTimeActivityModel $timeActivity timeActivity
     *
     * @return $this
     */
    public function setTimeActivity($timeActivity)
    {
        $this->container['timeActivity'] = $timeActivity;

        return $this;
    }

    /**
     * Gets to
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $to to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

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


