<?php
/**
 * DiscountModel
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
 * DiscountModel Class Doc Comment
 *
 * @category Class
 * @package  Hut6\CranaplusAcumaticaSdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DiscountModel extends EntityModel 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Discount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'active' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'breakBy' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'createdDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'customerPriceClasses' => '\Hut6\CranaplusAcumaticaSdk\Model\DiscountCustomerPriceClassesDetailModel[]',
        'customers' => '\Hut6\CranaplusAcumaticaSdk\Model\DiscountCustomerDetailModel[]',
        'description' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'discountBreakpoints' => '\Hut6\CranaplusAcumaticaSdk\Model\DiscountBreakpointDetailModel[]',
        'discountBy' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'discountCode' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'effectiveDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'expirationDate' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'itemPriceClasses' => '\Hut6\CranaplusAcumaticaSdk\Model\DiscountItemPriceClassesDetailModel[]',
        'items' => '\Hut6\CranaplusAcumaticaSdk\Model\DiscountItemDetailModel[]',
        'lastModifiedDateTime' => '\Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel',
        'promotional' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'prorateDiscount' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'sequence' => '\Hut6\CranaplusAcumaticaSdk\Model\StringValueModel',
        'showFreeItem' => '\Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel',
        'warehouses' => '\Hut6\CranaplusAcumaticaSdk\Model\DiscountWarehouseDetailModel[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'active' => null,
        'breakBy' => null,
        'createdDateTime' => null,
        'customerPriceClasses' => null,
        'customers' => null,
        'description' => null,
        'discountBreakpoints' => null,
        'discountBy' => null,
        'discountCode' => null,
        'effectiveDate' => null,
        'expirationDate' => null,
        'itemPriceClasses' => null,
        'items' => null,
        'lastModifiedDateTime' => null,
        'promotional' => null,
        'prorateDiscount' => null,
        'sequence' => null,
        'showFreeItem' => null,
        'warehouses' => null
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
        'breakBy' => 'BreakBy',
        'createdDateTime' => 'CreatedDateTime',
        'customerPriceClasses' => 'CustomerPriceClasses',
        'customers' => 'Customers',
        'description' => 'Description',
        'discountBreakpoints' => 'DiscountBreakpoints',
        'discountBy' => 'DiscountBy',
        'discountCode' => 'DiscountCode',
        'effectiveDate' => 'EffectiveDate',
        'expirationDate' => 'ExpirationDate',
        'itemPriceClasses' => 'ItemPriceClasses',
        'items' => 'Items',
        'lastModifiedDateTime' => 'LastModifiedDateTime',
        'promotional' => 'Promotional',
        'prorateDiscount' => 'ProrateDiscount',
        'sequence' => 'Sequence',
        'showFreeItem' => 'ShowFreeItem',
        'warehouses' => 'Warehouses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'active' => 'setActive',
        'breakBy' => 'setBreakBy',
        'createdDateTime' => 'setCreatedDateTime',
        'customerPriceClasses' => 'setCustomerPriceClasses',
        'customers' => 'setCustomers',
        'description' => 'setDescription',
        'discountBreakpoints' => 'setDiscountBreakpoints',
        'discountBy' => 'setDiscountBy',
        'discountCode' => 'setDiscountCode',
        'effectiveDate' => 'setEffectiveDate',
        'expirationDate' => 'setExpirationDate',
        'itemPriceClasses' => 'setItemPriceClasses',
        'items' => 'setItems',
        'lastModifiedDateTime' => 'setLastModifiedDateTime',
        'promotional' => 'setPromotional',
        'prorateDiscount' => 'setProrateDiscount',
        'sequence' => 'setSequence',
        'showFreeItem' => 'setShowFreeItem',
        'warehouses' => 'setWarehouses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'active' => 'getActive',
        'breakBy' => 'getBreakBy',
        'createdDateTime' => 'getCreatedDateTime',
        'customerPriceClasses' => 'getCustomerPriceClasses',
        'customers' => 'getCustomers',
        'description' => 'getDescription',
        'discountBreakpoints' => 'getDiscountBreakpoints',
        'discountBy' => 'getDiscountBy',
        'discountCode' => 'getDiscountCode',
        'effectiveDate' => 'getEffectiveDate',
        'expirationDate' => 'getExpirationDate',
        'itemPriceClasses' => 'getItemPriceClasses',
        'items' => 'getItems',
        'lastModifiedDateTime' => 'getLastModifiedDateTime',
        'promotional' => 'getPromotional',
        'prorateDiscount' => 'getProrateDiscount',
        'sequence' => 'getSequence',
        'showFreeItem' => 'getShowFreeItem',
        'warehouses' => 'getWarehouses'
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
        $this->container['breakBy'] = isset($data['breakBy']) ? $data['breakBy'] : null;
        $this->container['createdDateTime'] = isset($data['createdDateTime']) ? $data['createdDateTime'] : null;
        $this->container['customerPriceClasses'] = isset($data['customerPriceClasses']) ? $data['customerPriceClasses'] : null;
        $this->container['customers'] = isset($data['customers']) ? $data['customers'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['discountBreakpoints'] = isset($data['discountBreakpoints']) ? $data['discountBreakpoints'] : null;
        $this->container['discountBy'] = isset($data['discountBy']) ? $data['discountBy'] : null;
        $this->container['discountCode'] = isset($data['discountCode']) ? $data['discountCode'] : null;
        $this->container['effectiveDate'] = isset($data['effectiveDate']) ? $data['effectiveDate'] : null;
        $this->container['expirationDate'] = isset($data['expirationDate']) ? $data['expirationDate'] : null;
        $this->container['itemPriceClasses'] = isset($data['itemPriceClasses']) ? $data['itemPriceClasses'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['lastModifiedDateTime'] = isset($data['lastModifiedDateTime']) ? $data['lastModifiedDateTime'] : null;
        $this->container['promotional'] = isset($data['promotional']) ? $data['promotional'] : null;
        $this->container['prorateDiscount'] = isset($data['prorateDiscount']) ? $data['prorateDiscount'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['showFreeItem'] = isset($data['showFreeItem']) ? $data['showFreeItem'] : null;
        $this->container['warehouses'] = isset($data['warehouses']) ? $data['warehouses'] : null;
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
     * Gets breakBy
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getBreakBy()
    {
        return $this->container['breakBy'];
    }

    /**
     * Sets breakBy
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $breakBy breakBy
     *
     * @return $this
     */
    public function setBreakBy($breakBy)
    {
        $this->container['breakBy'] = $breakBy;

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
     * Gets customerPriceClasses
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DiscountCustomerPriceClassesDetailModel[]
     */
    public function getCustomerPriceClasses()
    {
        return $this->container['customerPriceClasses'];
    }

    /**
     * Sets customerPriceClasses
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DiscountCustomerPriceClassesDetailModel[] $customerPriceClasses customerPriceClasses
     *
     * @return $this
     */
    public function setCustomerPriceClasses($customerPriceClasses)
    {
        $this->container['customerPriceClasses'] = $customerPriceClasses;

        return $this;
    }

    /**
     * Gets customers
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DiscountCustomerDetailModel[]
     */
    public function getCustomers()
    {
        return $this->container['customers'];
    }

    /**
     * Sets customers
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DiscountCustomerDetailModel[] $customers customers
     *
     * @return $this
     */
    public function setCustomers($customers)
    {
        $this->container['customers'] = $customers;

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
     * Gets discountBreakpoints
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DiscountBreakpointDetailModel[]
     */
    public function getDiscountBreakpoints()
    {
        return $this->container['discountBreakpoints'];
    }

    /**
     * Sets discountBreakpoints
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DiscountBreakpointDetailModel[] $discountBreakpoints discountBreakpoints
     *
     * @return $this
     */
    public function setDiscountBreakpoints($discountBreakpoints)
    {
        $this->container['discountBreakpoints'] = $discountBreakpoints;

        return $this;
    }

    /**
     * Gets discountBy
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDiscountBy()
    {
        return $this->container['discountBy'];
    }

    /**
     * Sets discountBy
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $discountBy discountBy
     *
     * @return $this
     */
    public function setDiscountBy($discountBy)
    {
        $this->container['discountBy'] = $discountBy;

        return $this;
    }

    /**
     * Gets discountCode
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getDiscountCode()
    {
        return $this->container['discountCode'];
    }

    /**
     * Sets discountCode
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $discountCode discountCode
     *
     * @return $this
     */
    public function setDiscountCode($discountCode)
    {
        $this->container['discountCode'] = $discountCode;

        return $this;
    }

    /**
     * Gets effectiveDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getEffectiveDate()
    {
        return $this->container['effectiveDate'];
    }

    /**
     * Sets effectiveDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $effectiveDate effectiveDate
     *
     * @return $this
     */
    public function setEffectiveDate($effectiveDate)
    {
        $this->container['effectiveDate'] = $effectiveDate;

        return $this;
    }

    /**
     * Gets expirationDate
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel
     */
    public function getExpirationDate()
    {
        return $this->container['expirationDate'];
    }

    /**
     * Sets expirationDate
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DateTimeValueModel $expirationDate expirationDate
     *
     * @return $this
     */
    public function setExpirationDate($expirationDate)
    {
        $this->container['expirationDate'] = $expirationDate;

        return $this;
    }

    /**
     * Gets itemPriceClasses
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DiscountItemPriceClassesDetailModel[]
     */
    public function getItemPriceClasses()
    {
        return $this->container['itemPriceClasses'];
    }

    /**
     * Sets itemPriceClasses
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DiscountItemPriceClassesDetailModel[] $itemPriceClasses itemPriceClasses
     *
     * @return $this
     */
    public function setItemPriceClasses($itemPriceClasses)
    {
        $this->container['itemPriceClasses'] = $itemPriceClasses;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DiscountItemDetailModel[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DiscountItemDetailModel[] $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * Gets promotional
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getPromotional()
    {
        return $this->container['promotional'];
    }

    /**
     * Sets promotional
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $promotional promotional
     *
     * @return $this
     */
    public function setPromotional($promotional)
    {
        $this->container['promotional'] = $promotional;

        return $this;
    }

    /**
     * Gets prorateDiscount
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getProrateDiscount()
    {
        return $this->container['prorateDiscount'];
    }

    /**
     * Sets prorateDiscount
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $prorateDiscount prorateDiscount
     *
     * @return $this
     */
    public function setProrateDiscount($prorateDiscount)
    {
        $this->container['prorateDiscount'] = $prorateDiscount;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\StringValueModel $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets showFreeItem
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel
     */
    public function getShowFreeItem()
    {
        return $this->container['showFreeItem'];
    }

    /**
     * Sets showFreeItem
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\BooleanValueModel $showFreeItem showFreeItem
     *
     * @return $this
     */
    public function setShowFreeItem($showFreeItem)
    {
        $this->container['showFreeItem'] = $showFreeItem;

        return $this;
    }

    /**
     * Gets warehouses
     *
     * @return \Hut6\CranaplusAcumaticaSdk\Model\DiscountWarehouseDetailModel[]
     */
    public function getWarehouses()
    {
        return $this->container['warehouses'];
    }

    /**
     * Sets warehouses
     *
     * @param \Hut6\CranaplusAcumaticaSdk\Model\DiscountWarehouseDetailModel[] $warehouses warehouses
     *
     * @return $this
     */
    public function setWarehouses($warehouses)
    {
        $this->container['warehouses'] = $warehouses;

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


