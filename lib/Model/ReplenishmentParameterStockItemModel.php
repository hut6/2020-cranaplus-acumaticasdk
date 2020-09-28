<?php
/**
 * ReplenishmentParameterStockItemModel
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
 * ReplenishmentParameterStockItemModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReplenishmentParameterStockItemModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReplenishmentParameterStockItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'demandForecastModel' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'forecastPeriodType' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'launchDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'maxQty' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'maxShelfLifeInDays' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'method' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'periodsToAnalyze' => '\Hut6\CranaplusAcumaticaSdk\Model\IntValueModel',
        'reorderPoint' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'replenishmentClass' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'replenishmentWarehouse' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'safetyStock' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'seasonality' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'serviceLevel' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel',
        'source' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'terminationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'transferERQ' => '\Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'demandForecastModel' => null,
        'forecastPeriodType' => null,
        'launchDate' => null,
        'maxQty' => null,
        'maxShelfLifeInDays' => null,
        'method' => null,
        'periodsToAnalyze' => null,
        'reorderPoint' => null,
        'replenishmentClass' => null,
        'replenishmentWarehouse' => null,
        'safetyStock' => null,
        'seasonality' => null,
        'serviceLevel' => null,
        'source' => null,
        'terminationDate' => null,
        'transferERQ' => null
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
        'demandForecastModel' => 'DemandForecastModel',
        'forecastPeriodType' => 'ForecastPeriodType',
        'launchDate' => 'LaunchDate',
        'maxQty' => 'MaxQty',
        'maxShelfLifeInDays' => 'MaxShelfLifeInDays',
        'method' => 'Method',
        'periodsToAnalyze' => 'PeriodsToAnalyze',
        'reorderPoint' => 'ReorderPoint',
        'replenishmentClass' => 'ReplenishmentClass',
        'replenishmentWarehouse' => 'ReplenishmentWarehouse',
        'safetyStock' => 'SafetyStock',
        'seasonality' => 'Seasonality',
        'serviceLevel' => 'ServiceLevel',
        'source' => 'Source',
        'terminationDate' => 'TerminationDate',
        'transferERQ' => 'TransferERQ'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'demandForecastModel' => 'setDemandForecastModel',
        'forecastPeriodType' => 'setForecastPeriodType',
        'launchDate' => 'setLaunchDate',
        'maxQty' => 'setMaxQty',
        'maxShelfLifeInDays' => 'setMaxShelfLifeInDays',
        'method' => 'setMethod',
        'periodsToAnalyze' => 'setPeriodsToAnalyze',
        'reorderPoint' => 'setReorderPoint',
        'replenishmentClass' => 'setReplenishmentClass',
        'replenishmentWarehouse' => 'setReplenishmentWarehouse',
        'safetyStock' => 'setSafetyStock',
        'seasonality' => 'setSeasonality',
        'serviceLevel' => 'setServiceLevel',
        'source' => 'setSource',
        'terminationDate' => 'setTerminationDate',
        'transferERQ' => 'setTransferERQ'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'demandForecastModel' => 'getDemandForecastModel',
        'forecastPeriodType' => 'getForecastPeriodType',
        'launchDate' => 'getLaunchDate',
        'maxQty' => 'getMaxQty',
        'maxShelfLifeInDays' => 'getMaxShelfLifeInDays',
        'method' => 'getMethod',
        'periodsToAnalyze' => 'getPeriodsToAnalyze',
        'reorderPoint' => 'getReorderPoint',
        'replenishmentClass' => 'getReplenishmentClass',
        'replenishmentWarehouse' => 'getReplenishmentWarehouse',
        'safetyStock' => 'getSafetyStock',
        'seasonality' => 'getSeasonality',
        'serviceLevel' => 'getServiceLevel',
        'source' => 'getSource',
        'terminationDate' => 'getTerminationDate',
        'transferERQ' => 'getTransferERQ'
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

        $this->container['demandForecastModel'] = isset($data['demandForecastModel']) ? $data['demandForecastModel'] : null;
        $this->container['forecastPeriodType'] = isset($data['forecastPeriodType']) ? $data['forecastPeriodType'] : null;
        $this->container['launchDate'] = isset($data['launchDate']) ? $data['launchDate'] : null;
        $this->container['maxQty'] = isset($data['maxQty']) ? $data['maxQty'] : null;
        $this->container['maxShelfLifeInDays'] = isset($data['maxShelfLifeInDays']) ? $data['maxShelfLifeInDays'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['periodsToAnalyze'] = isset($data['periodsToAnalyze']) ? $data['periodsToAnalyze'] : null;
        $this->container['reorderPoint'] = isset($data['reorderPoint']) ? $data['reorderPoint'] : null;
        $this->container['replenishmentClass'] = isset($data['replenishmentClass']) ? $data['replenishmentClass'] : null;
        $this->container['replenishmentWarehouse'] = isset($data['replenishmentWarehouse']) ? $data['replenishmentWarehouse'] : null;
        $this->container['safetyStock'] = isset($data['safetyStock']) ? $data['safetyStock'] : null;
        $this->container['seasonality'] = isset($data['seasonality']) ? $data['seasonality'] : null;
        $this->container['serviceLevel'] = isset($data['serviceLevel']) ? $data['serviceLevel'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['terminationDate'] = isset($data['terminationDate']) ? $data['terminationDate'] : null;
        $this->container['transferERQ'] = isset($data['transferERQ']) ? $data['transferERQ'] : null;
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
     * Gets demandForecastModel
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDemandForecastModel()
    {
        return $this->container['demandForecastModel'];
    }

    /**
     * Sets demandForecastModel
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $demandForecastModel demandForecastModel
     *
     * @return $this
     */
    public function setDemandForecastModel($demandForecastModel)
    {
        $this->container['demandForecastModel'] = $demandForecastModel;

        return $this;
    }

    /**
     * Gets forecastPeriodType
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getForecastPeriodType()
    {
        return $this->container['forecastPeriodType'];
    }

    /**
     * Sets forecastPeriodType
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $forecastPeriodType forecastPeriodType
     *
     * @return $this
     */
    public function setForecastPeriodType($forecastPeriodType)
    {
        $this->container['forecastPeriodType'] = $forecastPeriodType;

        return $this;
    }

    /**
     * Gets launchDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getLaunchDate()
    {
        return $this->container['launchDate'];
    }

    /**
     * Sets launchDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $launchDate launchDate
     *
     * @return $this
     */
    public function setLaunchDate($launchDate)
    {
        $this->container['launchDate'] = $launchDate;

        return $this;
    }

    /**
     * Gets maxQty
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getMaxQty()
    {
        return $this->container['maxQty'];
    }

    /**
     * Sets maxQty
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $maxQty maxQty
     *
     * @return $this
     */
    public function setMaxQty($maxQty)
    {
        $this->container['maxQty'] = $maxQty;

        return $this;
    }

    /**
     * Gets maxShelfLifeInDays
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getMaxShelfLifeInDays()
    {
        return $this->container['maxShelfLifeInDays'];
    }

    /**
     * Sets maxShelfLifeInDays
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $maxShelfLifeInDays maxShelfLifeInDays
     *
     * @return $this
     */
    public function setMaxShelfLifeInDays($maxShelfLifeInDays)
    {
        $this->container['maxShelfLifeInDays'] = $maxShelfLifeInDays;

        return $this;
    }

    /**
     * Gets method
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets periodsToAnalyze
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel
     */
    public function getPeriodsToAnalyze()
    {
        return $this->container['periodsToAnalyze'];
    }

    /**
     * Sets periodsToAnalyze
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\IntValueModel $periodsToAnalyze periodsToAnalyze
     *
     * @return $this
     */
    public function setPeriodsToAnalyze($periodsToAnalyze)
    {
        $this->container['periodsToAnalyze'] = $periodsToAnalyze;

        return $this;
    }

    /**
     * Gets reorderPoint
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getReorderPoint()
    {
        return $this->container['reorderPoint'];
    }

    /**
     * Sets reorderPoint
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $reorderPoint reorderPoint
     *
     * @return $this
     */
    public function setReorderPoint($reorderPoint)
    {
        $this->container['reorderPoint'] = $reorderPoint;

        return $this;
    }

    /**
     * Gets replenishmentClass
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReplenishmentClass()
    {
        return $this->container['replenishmentClass'];
    }

    /**
     * Sets replenishmentClass
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $replenishmentClass replenishmentClass
     *
     * @return $this
     */
    public function setReplenishmentClass($replenishmentClass)
    {
        $this->container['replenishmentClass'] = $replenishmentClass;

        return $this;
    }

    /**
     * Gets replenishmentWarehouse
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getReplenishmentWarehouse()
    {
        return $this->container['replenishmentWarehouse'];
    }

    /**
     * Sets replenishmentWarehouse
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $replenishmentWarehouse replenishmentWarehouse
     *
     * @return $this
     */
    public function setReplenishmentWarehouse($replenishmentWarehouse)
    {
        $this->container['replenishmentWarehouse'] = $replenishmentWarehouse;

        return $this;
    }

    /**
     * Gets safetyStock
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getSafetyStock()
    {
        return $this->container['safetyStock'];
    }

    /**
     * Sets safetyStock
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $safetyStock safetyStock
     *
     * @return $this
     */
    public function setSafetyStock($safetyStock)
    {
        $this->container['safetyStock'] = $safetyStock;

        return $this;
    }

    /**
     * Gets seasonality
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSeasonality()
    {
        return $this->container['seasonality'];
    }

    /**
     * Sets seasonality
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $seasonality seasonality
     *
     * @return $this
     */
    public function setSeasonality($seasonality)
    {
        $this->container['seasonality'] = $seasonality;

        return $this;
    }

    /**
     * Gets serviceLevel
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getServiceLevel()
    {
        return $this->container['serviceLevel'];
    }

    /**
     * Sets serviceLevel
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $serviceLevel serviceLevel
     *
     * @return $this
     */
    public function setServiceLevel($serviceLevel)
    {
        $this->container['serviceLevel'] = $serviceLevel;

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
     * Gets terminationDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getTerminationDate()
    {
        return $this->container['terminationDate'];
    }

    /**
     * Sets terminationDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $terminationDate terminationDate
     *
     * @return $this
     */
    public function setTerminationDate($terminationDate)
    {
        $this->container['terminationDate'] = $terminationDate;

        return $this;
    }

    /**
     * Gets transferERQ
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel
     */
    public function getTransferERQ()
    {
        return $this->container['transferERQ'];
    }

    /**
     * Sets transferERQ
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DecimalValueModel $transferERQ transferERQ
     *
     * @return $this
     */
    public function setTransferERQ($transferERQ)
    {
        $this->container['transferERQ'] = $transferERQ;

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


