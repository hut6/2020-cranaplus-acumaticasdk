<?php
/**
 * PaymentMethodAllowedCashAccountDetailModel
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
 * Swagger Codegen version: 2.4.15
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Hut6\CranaplusAcumaticaSdk\Model;
use \Hut6\CranaplusAcumaticaSdk\ObjectSerializer;

/**
 * PaymentMethodAllowedCashAccountDetailModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentMethodAllowedCashAccountDetailModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentMethodAllowedCashAccountDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aPDefault' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'aPLastRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'aPSuggestNextNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'aRDefault' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'aRDefaultForRefund' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'aRLastRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'aRSuggestNextNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'batchLastRefNbr' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'branch' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'cashAccount' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'paymentMethod' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'useInAP' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'useInAR' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aPDefault' => null,
        'aPLastRefNbr' => null,
        'aPSuggestNextNbr' => null,
        'aRDefault' => null,
        'aRDefaultForRefund' => null,
        'aRLastRefNbr' => null,
        'aRSuggestNextNbr' => null,
        'batchLastRefNbr' => null,
        'branch' => null,
        'cashAccount' => null,
        'description' => null,
        'paymentMethod' => null,
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
        'aPDefault' => 'APDefault',
        'aPLastRefNbr' => 'APLastRefNbr',
        'aPSuggestNextNbr' => 'APSuggestNextNbr',
        'aRDefault' => 'ARDefault',
        'aRDefaultForRefund' => 'ARDefaultForRefund',
        'aRLastRefNbr' => 'ARLastRefNbr',
        'aRSuggestNextNbr' => 'ARSuggestNextNbr',
        'batchLastRefNbr' => 'BatchLastRefNbr',
        'branch' => 'Branch',
        'cashAccount' => 'CashAccount',
        'description' => 'Description',
        'paymentMethod' => 'PaymentMethod',
        'useInAP' => 'UseInAP',
        'useInAR' => 'UseInAR'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aPDefault' => 'setAPDefault',
        'aPLastRefNbr' => 'setAPLastRefNbr',
        'aPSuggestNextNbr' => 'setAPSuggestNextNbr',
        'aRDefault' => 'setARDefault',
        'aRDefaultForRefund' => 'setARDefaultForRefund',
        'aRLastRefNbr' => 'setARLastRefNbr',
        'aRSuggestNextNbr' => 'setARSuggestNextNbr',
        'batchLastRefNbr' => 'setBatchLastRefNbr',
        'branch' => 'setBranch',
        'cashAccount' => 'setCashAccount',
        'description' => 'setDescription',
        'paymentMethod' => 'setPaymentMethod',
        'useInAP' => 'setUseInAP',
        'useInAR' => 'setUseInAR'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aPDefault' => 'getAPDefault',
        'aPLastRefNbr' => 'getAPLastRefNbr',
        'aPSuggestNextNbr' => 'getAPSuggestNextNbr',
        'aRDefault' => 'getARDefault',
        'aRDefaultForRefund' => 'getARDefaultForRefund',
        'aRLastRefNbr' => 'getARLastRefNbr',
        'aRSuggestNextNbr' => 'getARSuggestNextNbr',
        'batchLastRefNbr' => 'getBatchLastRefNbr',
        'branch' => 'getBranch',
        'cashAccount' => 'getCashAccount',
        'description' => 'getDescription',
        'paymentMethod' => 'getPaymentMethod',
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

        $this->container['aPDefault'] = isset($data['aPDefault']) ? $data['aPDefault'] : null;
        $this->container['aPLastRefNbr'] = isset($data['aPLastRefNbr']) ? $data['aPLastRefNbr'] : null;
        $this->container['aPSuggestNextNbr'] = isset($data['aPSuggestNextNbr']) ? $data['aPSuggestNextNbr'] : null;
        $this->container['aRDefault'] = isset($data['aRDefault']) ? $data['aRDefault'] : null;
        $this->container['aRDefaultForRefund'] = isset($data['aRDefaultForRefund']) ? $data['aRDefaultForRefund'] : null;
        $this->container['aRLastRefNbr'] = isset($data['aRLastRefNbr']) ? $data['aRLastRefNbr'] : null;
        $this->container['aRSuggestNextNbr'] = isset($data['aRSuggestNextNbr']) ? $data['aRSuggestNextNbr'] : null;
        $this->container['batchLastRefNbr'] = isset($data['batchLastRefNbr']) ? $data['batchLastRefNbr'] : null;
        $this->container['branch'] = isset($data['branch']) ? $data['branch'] : null;
        $this->container['cashAccount'] = isset($data['cashAccount']) ? $data['cashAccount'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
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
     * Gets aPDefault
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getAPDefault()
    {
        return $this->container['aPDefault'];
    }

    /**
     * Sets aPDefault
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $aPDefault aPDefault
     *
     * @return $this
     */
    public function setAPDefault($aPDefault)
    {
        $this->container['aPDefault'] = $aPDefault;

        return $this;
    }

    /**
     * Gets aPLastRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getAPLastRefNbr()
    {
        return $this->container['aPLastRefNbr'];
    }

    /**
     * Sets aPLastRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $aPLastRefNbr aPLastRefNbr
     *
     * @return $this
     */
    public function setAPLastRefNbr($aPLastRefNbr)
    {
        $this->container['aPLastRefNbr'] = $aPLastRefNbr;

        return $this;
    }

    /**
     * Gets aPSuggestNextNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getAPSuggestNextNbr()
    {
        return $this->container['aPSuggestNextNbr'];
    }

    /**
     * Sets aPSuggestNextNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $aPSuggestNextNbr aPSuggestNextNbr
     *
     * @return $this
     */
    public function setAPSuggestNextNbr($aPSuggestNextNbr)
    {
        $this->container['aPSuggestNextNbr'] = $aPSuggestNextNbr;

        return $this;
    }

    /**
     * Gets aRDefault
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getARDefault()
    {
        return $this->container['aRDefault'];
    }

    /**
     * Sets aRDefault
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $aRDefault aRDefault
     *
     * @return $this
     */
    public function setARDefault($aRDefault)
    {
        $this->container['aRDefault'] = $aRDefault;

        return $this;
    }

    /**
     * Gets aRDefaultForRefund
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getARDefaultForRefund()
    {
        return $this->container['aRDefaultForRefund'];
    }

    /**
     * Sets aRDefaultForRefund
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $aRDefaultForRefund aRDefaultForRefund
     *
     * @return $this
     */
    public function setARDefaultForRefund($aRDefaultForRefund)
    {
        $this->container['aRDefaultForRefund'] = $aRDefaultForRefund;

        return $this;
    }

    /**
     * Gets aRLastRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getARLastRefNbr()
    {
        return $this->container['aRLastRefNbr'];
    }

    /**
     * Sets aRLastRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $aRLastRefNbr aRLastRefNbr
     *
     * @return $this
     */
    public function setARLastRefNbr($aRLastRefNbr)
    {
        $this->container['aRLastRefNbr'] = $aRLastRefNbr;

        return $this;
    }

    /**
     * Gets aRSuggestNextNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getARSuggestNextNbr()
    {
        return $this->container['aRSuggestNextNbr'];
    }

    /**
     * Sets aRSuggestNextNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $aRSuggestNextNbr aRSuggestNextNbr
     *
     * @return $this
     */
    public function setARSuggestNextNbr($aRSuggestNextNbr)
    {
        $this->container['aRSuggestNextNbr'] = $aRSuggestNextNbr;

        return $this;
    }

    /**
     * Gets batchLastRefNbr
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBatchLastRefNbr()
    {
        return $this->container['batchLastRefNbr'];
    }

    /**
     * Sets batchLastRefNbr
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $batchLastRefNbr batchLastRefNbr
     *
     * @return $this
     */
    public function setBatchLastRefNbr($batchLastRefNbr)
    {
        $this->container['batchLastRefNbr'] = $batchLastRefNbr;

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
     * Gets cashAccount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getCashAccount()
    {
        return $this->container['cashAccount'];
    }

    /**
     * Sets cashAccount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $cashAccount cashAccount
     *
     * @return $this
     */
    public function setCashAccount($cashAccount)
    {
        $this->container['cashAccount'] = $cashAccount;

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


