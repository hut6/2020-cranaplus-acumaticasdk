<?php
/**
 * PaymentMethodModel
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
 * PaymentMethodModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'allowedCashAccounts' => '\Hut6\CranaplusAcumaticaSdk\Model\PaymentMethodAllowedCashAccountDetailModel[]',
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'integratedProcessing' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'meansOfPayment' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'paymentMethodID' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'processingCenters' => '\Hut6\CranaplusAcumaticaSdk\Model\PaymentMethodProcessingCenterDetailModel[]',
        'requireRemittanceInformationforCashAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'useInAP' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'useInAR' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'allowedCashAccounts' => null,
        'createdDateTime' => null,
        'description' => null,
        'integratedProcessing' => null,
        'lastModifiedDateTime' => null,
        'meansOfPayment' => null,
        'paymentMethodID' => null,
        'processingCenters' => null,
        'requireRemittanceInformationforCashAccount' => null,
        'useInAP' => null,
        'useInAR' => null
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
        'active' => 'Active',
        'allowedCashAccounts' => 'AllowedCashAccounts',
        'createdDateTime' => 'CreatedDateTime',
        'description' => 'Description',
        'integratedProcessing' => 'IntegratedProcessing',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'meansOfPayment' => 'MeansOfPayment',
        'paymentMethodID' => 'PaymentMethodID',
        'processingCenters' => 'ProcessingCenters',
        'requireRemittanceInformationforCashAccount' => 'RequireRemittanceInformationforCashAccount',
        'useInAP' => 'UseInAP',
        'useInAR' => 'UseInAR'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'allowedCashAccounts' => 'setAllowedCashAccounts',
        'createdDateTime' => 'setCreatedDateTime',
        'description' => 'setDescription',
        'integratedProcessing' => 'setIntegratedProcessing',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'meansOfPayment' => 'setMeansOfPayment',
        'paymentMethodID' => 'setPaymentMethodID',
        'processingCenters' => 'setProcessingCenters',
        'requireRemittanceInformationforCashAccount' => 'setRequireRemittanceInformationforCashAccount',
        'useInAP' => 'setUseInAP',
        'useInAR' => 'setUseInAR'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'allowedCashAccounts' => 'getAllowedCashAccounts',
        'createdDateTime' => 'getCreatedDateTime',
        'description' => 'getDescription',
        'integratedProcessing' => 'getIntegratedProcessing',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'meansOfPayment' => 'getMeansOfPayment',
        'paymentMethodID' => 'getPaymentMethodID',
        'processingCenters' => 'getProcessingCenters',
        'requireRemittanceInformationforCashAccount' => 'getRequireRemittanceInformationforCashAccount',
        'useInAP' => 'getUseInAP',
        'useInAR' => 'getUseInAR'
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

        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['allowedCashAccounts'] = isset($data['allowedCashAccounts']) ? $data['allowedCashAccounts'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['integratedProcessing'] = isset($data['integratedProcessing']) ? $data['integratedProcessing'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['meansOfPayment'] = isset($data['meansOfPayment']) ? $data['meansOfPayment'] : null;
        $this->container['paymentMethodID'] = isset($data['paymentMethodID']) ? $data['paymentMethodID'] : null;
        $this->container['processingCenters'] = isset($data['processingCenters']) ? $data['processingCenters'] : null;
        $this->container['requireRemittanceInformationforCashAccount'] = isset($data['requireRemittanceInformationforCashAccount']) ? $data['requireRemittanceInformationforCashAccount'] : null;
        $this->container['useInAP'] = isset($data['useInAP']) ? $data['useInAP'] : null;
        $this->container['useInAR'] = isset($data['useInAR']) ? $data['useInAR'] : null;
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
     * Gets active
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $active active
     *
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets allowedCashAccounts
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\PaymentMethodAllowedCashAccountDetailModel[]
     */
    public function getAllowedCashAccounts()
    {
        return $this->container['allowedCashAccounts'];
    }

    /**
     * Sets allowedCashAccounts
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\PaymentMethodAllowedCashAccountDetailModel[] $allowedCashAccounts allowedCashAccounts
     *
     * @return $this
     */
    public function setAllowedCashAccounts($allowedCashAccounts)
    {
        $this->container['allowedCashAccounts'] = $allowedCashAccounts;

        return $this;
    }

    /**
     * Gets createdDateTime
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getCreatedDateTime()
    {
        return $this->container['createdDateTime'];
    }

    /**
     * Sets createdDateTime
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $createdDateTime createdDateTime
     *
     * @return $this
     */
    public function setCreatedDateTime($createdDateTime)
    {
        $this->container['createdDateTime'] = $createdDateTime;

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
     * Gets integratedProcessing
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getIntegratedProcessing()
    {
        return $this->container['integratedProcessing'];
    }

    /**
     * Sets integratedProcessing
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $integratedProcessing integratedProcessing
     *
     * @return $this
     */
    public function setIntegratedProcessing($integratedProcessing)
    {
        $this->container['integratedProcessing'] = $integratedProcessing;

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
     * Gets meansOfPayment
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getMeansOfPayment()
    {
        return $this->container['meansOfPayment'];
    }

    /**
     * Sets meansOfPayment
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $meansOfPayment meansOfPayment
     *
     * @return $this
     */
    public function setMeansOfPayment($meansOfPayment)
    {
        $this->container['meansOfPayment'] = $meansOfPayment;

        return $this;
    }

    /**
     * Gets paymentMethodID
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getPaymentMethodID()
    {
        return $this->container['paymentMethodID'];
    }

    /**
     * Sets paymentMethodID
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $paymentMethodID paymentMethodID
     *
     * @return $this
     */
    public function setPaymentMethodID($paymentMethodID)
    {
        $this->container['paymentMethodID'] = $paymentMethodID;

        return $this;
    }

    /**
     * Gets processingCenters
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\PaymentMethodProcessingCenterDetailModel[]
     */
    public function getProcessingCenters()
    {
        return $this->container['processingCenters'];
    }

    /**
     * Sets processingCenters
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\PaymentMethodProcessingCenterDetailModel[] $processingCenters processingCenters
     *
     * @return $this
     */
    public function setProcessingCenters($processingCenters)
    {
        $this->container['processingCenters'] = $processingCenters;

        return $this;
    }

    /**
     * Gets requireRemittanceInformationforCashAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getRequireRemittanceInformationforCashAccount()
    {
        return $this->container['requireRemittanceInformationforCashAccount'];
    }

    /**
     * Sets requireRemittanceInformationforCashAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $requireRemittanceInformationforCashAccount requireRemittanceInformationforCashAccount
     *
     * @return $this
     */
    public function setRequireRemittanceInformationforCashAccount($requireRemittanceInformationforCashAccount)
    {
        $this->container['requireRemittanceInformationforCashAccount'] = $requireRemittanceInformationforCashAccount;

        return $this;
    }

    /**
     * Gets useInAP
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getUseInAP()
    {
        return $this->container['useInAP'];
    }

    /**
     * Sets useInAP
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $useInAP useInAP
     *
     * @return $this
     */
    public function setUseInAP($useInAP)
    {
        $this->container['useInAP'] = $useInAP;

        return $this;
    }

    /**
     * Gets useInAR
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getUseInAR()
    {
        return $this->container['useInAR'];
    }

    /**
     * Sets useInAR
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $useInAR useInAR
     *
     * @return $this
     */
    public function setUseInAR($useInAR)
    {
        $this->container['useInAR'] = $useInAR;

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


