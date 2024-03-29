<?php
/**
 * OpportunityModel
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
 * OpportunityModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunityModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Opportunity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activities' => '\Hut6\CranaplusAcumaticaSdk\Model\ActivityDetailModel[]',
        'address' => '\Hut6\CranaplusAcumaticaSdk\Model\AddressModel',
        'amount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'attributes' => '\Hut6\CranaplusAcumaticaSdk\Model\AttributeDetailModel[]',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'businessAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'classID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'contactDisplayName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'contactID' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'contactInformation' => '\Hut6\CranaplusAcumaticaSdk\Model\OpportunityContactModel',
        'convertedLeadDisplayName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'convertedLeadID' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'currencyID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'currencyViewState' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'details' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'discount' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'discounts' => '\Hut6\CranaplusAcumaticaSdk\Model\OpportunityDiscountModel[]',
        'estimation' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'location' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'manualAmount' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'opportunityID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'override' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'owner' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'ownerEmployeeName' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'parentAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'products' => '\Hut6\CranaplusAcumaticaSdk\Model\OpportunityProductModel[]',
        'project' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'reason' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'relations' => '\Hut6\CranaplusAcumaticaSdk\Model\RelationDetailModel[]',
        'source' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'sourceCampaign' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'stage' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'status' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'subject' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'taxDetails' => '\Hut6\CranaplusAcumaticaSdk\Model\OpportunityTaxDetailModel[]',
        'taxZone' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'total' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'weightTotal' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'workgroupDescription' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'workgroupID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activities' => null,
        'address' => null,
        'amount' => null,
        'attributes' => null,
        'branch' => null,
        'businessAccount' => null,
        'classID' => null,
        'contactDisplayName' => null,
        'contactID' => null,
        'contactInformation' => null,
        'convertedLeadDisplayName' => null,
        'convertedLeadID' => null,
        'currencyID' => null,
        'currencyViewState' => null,
        'details' => null,
        'discount' => null,
        'discounts' => null,
        'estimation' => null,
        'location' => null,
        'manualAmount' => null,
        'opportunityID' => null,
        'override' => null,
        'owner' => null,
        'ownerEmployeeName' => null,
        'parentAccount' => null,
        'products' => null,
        'project' => null,
        'reason' => null,
        'relations' => null,
        'source' => null,
        'sourceCampaign' => null,
        'stage' => null,
        'status' => null,
        'subject' => null,
        'taxDetails' => null,
        'taxZone' => null,
        'total' => null,
        'weightTotal' => null,
        'workgroupDescription' => null,
        'workgroupID' => null
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
        'activities' => 'Activities',
        'address' => 'Address',
        'amount' => 'Amount',
        'attributes' => 'Attributes',
        'branch' => 'Branch',
        'businessAccount' => 'BusinessAccount',
        'classID' => 'ClassID',
        'contactDisplayName' => 'ContactDisplayName',
        'contactID' => 'ContactID',
        'contactInformation' => 'ContactInformation',
        'convertedLeadDisplayName' => 'ConvertedLeadDisplayName',
        'convertedLeadID' => 'ConvertedLeadID',
        'currencyID' => 'CurrencyID',
        'currencyViewState' => 'CurrencyViewState',
        'details' => 'Details',
        'discount' => 'Discount',
        'discounts' => 'Discounts',
        'estimation' => 'Estimation',
        'location' => 'Location',
        'manualAmount' => 'ManualAmount',
        'opportunityID' => 'OpportunityID',
        'override' => 'Override',
        'owner' => 'Owner',
        'ownerEmployeeName' => 'OwnerEmployeeName',
        'parentAccount' => 'ParentAccount',
        'products' => 'Products',
        'project' => 'Project',
        'reason' => 'Reason',
        'relations' => 'Relations',
        'source' => 'Source',
        'sourceCampaign' => 'SourceCampaign',
        'stage' => 'Stage',
        'status' => 'Status',
        'subject' => 'Subject',
        'taxDetails' => 'TaxDetails',
        'taxZone' => 'TaxZone',
        'total' => 'Total',
        'weightTotal' => 'WeightTotal',
        'workgroupDescription' => 'WorkgroupDescription',
        'workgroupID' => 'WorkgroupID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activities' => 'setActivities',
        'address' => 'setAddress',
        'amount' => 'setAmount',
        'attributes' => 'setAttributes',
        'branch' => 'setBranch',
        'businessAccount' => 'setBusinessAccount',
        'classID' => 'setClassID',
        'contactDisplayName' => 'setContactDisplayName',
        'contactID' => 'setContactID',
        'contactInformation' => 'setContactInformation',
        'convertedLeadDisplayName' => 'setConvertedLeadDisplayName',
        'convertedLeadID' => 'setConvertedLeadID',
        'currencyID' => 'setCurrencyID',
        'currencyViewState' => 'setCurrencyViewState',
        'details' => 'setDetails',
        'discount' => 'setDiscount',
        'discounts' => 'setDiscounts',
        'estimation' => 'setEstimation',
        'location' => 'setLocation',
        'manualAmount' => 'setManualAmount',
        'opportunityID' => 'setOpportunityID',
        'override' => 'setOverride',
        'owner' => 'setOwner',
        'ownerEmployeeName' => 'setOwnerEmployeeName',
        'parentAccount' => 'setParentAccount',
        'products' => 'setProducts',
        'project' => 'setProject',
        'reason' => 'setReason',
        'relations' => 'setRelations',
        'source' => 'setSource',
        'sourceCampaign' => 'setSourceCampaign',
        'stage' => 'setStage',
        'status' => 'setStatus',
        'subject' => 'setSubject',
        'taxDetails' => 'setTaxDetails',
        'taxZone' => 'setTaxZone',
        'total' => 'setTotal',
        'weightTotal' => 'setWeightTotal',
        'workgroupDescription' => 'setWorkgroupDescription',
        'workgroupID' => 'setWorkgroupID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activities' => 'getActivities',
        'address' => 'getAddress',
        'amount' => 'getAmount',
        'attributes' => 'getAttributes',
        'branch' => 'getBranch',
        'businessAccount' => 'getBusinessAccount',
        'classID' => 'getClassID',
        'contactDisplayName' => 'getContactDisplayName',
        'contactID' => 'getContactID',
        'contactInformation' => 'getContactInformation',
        'convertedLeadDisplayName' => 'getConvertedLeadDisplayName',
        'convertedLeadID' => 'getConvertedLeadID',
        'currencyID' => 'getCurrencyID',
        'currencyViewState' => 'getCurrencyViewState',
        'details' => 'getDetails',
        'discount' => 'getDiscount',
        'discounts' => 'getDiscounts',
        'estimation' => 'getEstimation',
        'location' => 'getLocation',
        'manualAmount' => 'getManualAmount',
        'opportunityID' => 'getOpportunityID',
        'override' => 'getOverride',
        'owner' => 'getOwner',
        'ownerEmployeeName' => 'getOwnerEmployeeName',
        'parentAccount' => 'getParentAccount',
        'products' => 'getProducts',
        'project' => 'getProject',
        'reason' => 'getReason',
        'relations' => 'getRelations',
        'source' => 'getSource',
        'sourceCampaign' => 'getSourceCampaign',
        'stage' => 'getStage',
        'status' => 'getStatus',
        'subject' => 'getSubject',
        'taxDetails' => 'getTaxDetails',
        'taxZone' => 'getTaxZone',
        'total' => 'getTotal',
        'weightTotal' => 'getWeightTotal',
        'workgroupDescription' => 'getWorkgroupDescription',
        'workgroupID' => 'getWorkgroupID'
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

        $this->container['activities'] = isset($data['activities']) ? $data['activities'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['businessAccount'] = isset($data['businessAccount']) ? $data['businessAccount'] : null;
        $this->container['classID'] = isset($data['classID']) ? $data['classID'] : null;
        $this->container['contactDisplayName'] = isset($data['contactDisplayName']) ? $data['contactDisplayName'] : null;
        $this->container['contactID'] = isset($data['contactID']) ? $data['contactID'] : null;
        $this->container['contactInformation'] = isset($data['contactInformation']) ? $data['contactInformation'] : null;
        $this->container['convertedLeadDisplayName'] = isset($data['convertedLeadDisplayName']) ? $data['convertedLeadDisplayName'] : null;
        $this->container['convertedLeadID'] = isset($data['convertedLeadID']) ? $data['convertedLeadID'] : null;
        $this->container['currencyID'] = isset($data['currencyID']) ? $data['currencyID'] : null;
        $this->container['currencyViewState'] = isset($data['currencyViewState']) ? $data['currencyViewState'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['discounts'] = isset($data['discounts']) ? $data['discounts'] : null;
        $this->container['estimation'] = isset($data['estimation']) ? $data['estimation'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['manualAmount'] = isset($data['manualAmount']) ? $data['manualAmount'] : null;
        $this->container['opportunityID'] = isset($data['opportunityID']) ? $data['opportunityID'] : null;
        $this->container['override'] = isset($data['override']) ? $data['override'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['ownerEmployeeName'] = isset($data['ownerEmployeeName']) ? $data['ownerEmployeeName'] : null;
        $this->container['parentAccount'] = isset($data['parentAccount']) ? $data['parentAccount'] : null;
        $this->container['products'] = isset($data['products']) ? $data['products'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['relations'] = isset($data['relations']) ? $data['relations'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['sourceCampaign'] = isset($data['sourceCampaign']) ? $data['sourceCampaign'] : null;
        $this->container['stage'] = isset($data['stage']) ? $data['stage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
        $this->container['taxZone'] = isset($data['taxZone']) ? $data['taxZone'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['weightTotal'] = isset($data['weightTotal']) ? $data['weightTotal'] : null;
        $this->container['workgroupDescription'] = isset($data['workgroupDescription']) ? $data['workgroupDescription'] : null;
        $this->container['workgroupID'] = isset($data['workgroupID']) ? $data['workgroupID'] : null;
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
     * Gets activities
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\ActivityDetailModel[]
     */
    public function getActivities()
    {
        return $this->container['activities'];
    }

    /**
     * Sets activities
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\ActivityDetailModel[] $activities activities
     *
     * @return $this
     */
    public function setActivities($activities)
    {
        $this->container['activities'] = $activities;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\AddressModel
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\AddressModel $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
     * Gets attributes
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\AttributeDetailModel[]
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\AttributeDetailModel[] $attributes attributes
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * Gets businessAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBusinessAccount()
    {
        return $this->container['businessAccount'];
    }

    /**
     * Sets businessAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $businessAccount businessAccount
     *
     * @return $this
     */
    public function setBusinessAccount($businessAccount)
    {
        $this->container['businessAccount'] = $businessAccount;

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
     * Gets contactDisplayName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getContactDisplayName()
    {
        return $this->container['contactDisplayName'];
    }

    /**
     * Sets contactDisplayName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $contactDisplayName contactDisplayName
     *
     * @return $this
     */
    public function setContactDisplayName($contactDisplayName)
    {
        $this->container['contactDisplayName'] = $contactDisplayName;

        return $this;
    }

    /**
     * Gets contactID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getContactID()
    {
        return $this->container['contactID'];
    }

    /**
     * Sets contactID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $contactID contactID
     *
     * @return $this
     */
    public function setContactID($contactID)
    {
        $this->container['contactID'] = $contactID;

        return $this;
    }

    /**
     * Gets contactInformation
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\OpportunityContactModel
     */
    public function getContactInformation()
    {
        return $this->container['contactInformation'];
    }

    /**
     * Sets contactInformation
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\OpportunityContactModel $contactInformation contactInformation
     *
     * @return $this
     */
    public function setContactInformation($contactInformation)
    {
        $this->container['contactInformation'] = $contactInformation;

        return $this;
    }

    /**
     * Gets convertedLeadDisplayName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getConvertedLeadDisplayName()
    {
        return $this->container['convertedLeadDisplayName'];
    }

    /**
     * Sets convertedLeadDisplayName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $convertedLeadDisplayName convertedLeadDisplayName
     *
     * @return $this
     */
    public function setConvertedLeadDisplayName($convertedLeadDisplayName)
    {
        $this->container['convertedLeadDisplayName'] = $convertedLeadDisplayName;

        return $this;
    }

    /**
     * Gets convertedLeadID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getConvertedLeadID()
    {
        return $this->container['convertedLeadID'];
    }

    /**
     * Sets convertedLeadID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $convertedLeadID convertedLeadID
     *
     * @return $this
     */
    public function setConvertedLeadID($convertedLeadID)
    {
        $this->container['convertedLeadID'] = $convertedLeadID;

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
     * Gets currencyViewState
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getCurrencyViewState()
    {
        return $this->container['currencyViewState'];
    }

    /**
     * Sets currencyViewState
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $currencyViewState currencyViewState
     *
     * @return $this
     */
    public function setCurrencyViewState($currencyViewState)
    {
        $this->container['currencyViewState'] = $currencyViewState;

        return $this;
    }

    /**
     * Gets details
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $details details
     *
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets discount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $discount discount
     *
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets discounts
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\OpportunityDiscountModel[]
     */
    public function getDiscounts()
    {
        return $this->container['discounts'];
    }

    /**
     * Sets discounts
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\OpportunityDiscountModel[] $discounts discounts
     *
     * @return $this
     */
    public function setDiscounts($discounts)
    {
        $this->container['discounts'] = $discounts;

        return $this;
    }

    /**
     * Gets estimation
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getEstimation()
    {
        return $this->container['estimation'];
    }

    /**
     * Sets estimation
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $estimation estimation
     *
     * @return $this
     */
    public function setEstimation($estimation)
    {
        $this->container['estimation'] = $estimation;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets manualAmount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getManualAmount()
    {
        return $this->container['manualAmount'];
    }

    /**
     * Sets manualAmount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $manualAmount manualAmount
     *
     * @return $this
     */
    public function setManualAmount($manualAmount)
    {
        $this->container['manualAmount'] = $manualAmount;

        return $this;
    }

    /**
     * Gets opportunityID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOpportunityID()
    {
        return $this->container['opportunityID'];
    }

    /**
     * Sets opportunityID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $opportunityID opportunityID
     *
     * @return $this
     */
    public function setOpportunityID($opportunityID)
    {
        $this->container['opportunityID'] = $opportunityID;

        return $this;
    }

    /**
     * Gets override
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getOverride()
    {
        return $this->container['override'];
    }

    /**
     * Sets override
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $override override
     *
     * @return $this
     */
    public function setOverride($override)
    {
        $this->container['override'] = $override;

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
     * Gets ownerEmployeeName
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getOwnerEmployeeName()
    {
        return $this->container['ownerEmployeeName'];
    }

    /**
     * Sets ownerEmployeeName
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $ownerEmployeeName ownerEmployeeName
     *
     * @return $this
     */
    public function setOwnerEmployeeName($ownerEmployeeName)
    {
        $this->container['ownerEmployeeName'] = $ownerEmployeeName;

        return $this;
    }

    /**
     * Gets parentAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getParentAccount()
    {
        return $this->container['parentAccount'];
    }

    /**
     * Sets parentAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $parentAccount parentAccount
     *
     * @return $this
     */
    public function setParentAccount($parentAccount)
    {
        $this->container['parentAccount'] = $parentAccount;

        return $this;
    }

    /**
     * Gets products
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\OpportunityProductModel[]
     */
    public function getProducts()
    {
        return $this->container['products'];
    }

    /**
     * Sets products
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\OpportunityProductModel[] $products products
     *
     * @return $this
     */
    public function setProducts($products)
    {
        $this->container['products'] = $products;

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
     * Gets relations
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\RelationDetailModel[]
     */
    public function getRelations()
    {
        return $this->container['relations'];
    }

    /**
     * Sets relations
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\RelationDetailModel[] $relations relations
     *
     * @return $this
     */
    public function setRelations($relations)
    {
        $this->container['relations'] = $relations;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $source source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets sourceCampaign
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSourceCampaign()
    {
        return $this->container['sourceCampaign'];
    }

    /**
     * Sets sourceCampaign
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $sourceCampaign sourceCampaign
     *
     * @return $this
     */
    public function setSourceCampaign($sourceCampaign)
    {
        $this->container['sourceCampaign'] = $sourceCampaign;

        return $this;
    }

    /**
     * Gets stage
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getStage()
    {
        return $this->container['stage'];
    }

    /**
     * Sets stage
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $stage stage
     *
     * @return $this
     */
    public function setStage($stage)
    {
        $this->container['stage'] = $stage;

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
     * Gets taxDetails
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\OpportunityTaxDetailModel[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\OpportunityTaxDetailModel[] $taxDetails taxDetails
     *
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

        return $this;
    }

    /**
     * Gets taxZone
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getTaxZone()
    {
        return $this->container['taxZone'];
    }

    /**
     * Sets taxZone
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $taxZone taxZone
     *
     * @return $this
     */
    public function setTaxZone($taxZone)
    {
        $this->container['taxZone'] = $taxZone;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets weightTotal
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getWeightTotal()
    {
        return $this->container['weightTotal'];
    }

    /**
     * Sets weightTotal
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $weightTotal weightTotal
     *
     * @return $this
     */
    public function setWeightTotal($weightTotal)
    {
        $this->container['weightTotal'] = $weightTotal;

        return $this;
    }

    /**
     * Gets workgroupDescription
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWorkgroupDescription()
    {
        return $this->container['workgroupDescription'];
    }

    /**
     * Sets workgroupDescription
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $workgroupDescription workgroupDescription
     *
     * @return $this
     */
    public function setWorkgroupDescription($workgroupDescription)
    {
        $this->container['workgroupDescription'] = $workgroupDescription;

        return $this;
    }

    /**
     * Gets workgroupID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getWorkgroupID()
    {
        return $this->container['workgroupID'];
    }

    /**
     * Sets workgroupID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $workgroupID workgroupID
     *
     * @return $this
     */
    public function setWorkgroupID($workgroupID)
    {
        $this->container['workgroupID'] = $workgroupID;

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


