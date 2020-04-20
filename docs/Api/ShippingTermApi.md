# Hut6\CranaplusAcumaticaSdk\ShippingTermApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Default/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shippingTermDeleteById**](ShippingTermApi.md#shippingTermDeleteById) | **DELETE** /ShippingTerm/{id} | Deletes the record by its session identifier.
[**shippingTermDeleteByKeys**](ShippingTermApi.md#shippingTermDeleteByKeys) | **DELETE** /ShippingTerm/{ids} | Deletes the record by the values of its key fields.
[**shippingTermGetAdHocSchema**](ShippingTermApi.md#shippingTermGetAdHocSchema) | **GET** /ShippingTerm/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**shippingTermGetById**](ShippingTermApi.md#shippingTermGetById) | **GET** /ShippingTerm/{id} | Retrieves a record by the value of the session entity ID from the system.
[**shippingTermGetByKeys**](ShippingTermApi.md#shippingTermGetByKeys) | **GET** /ShippingTerm/{ids} | Retrieves a record by the values of its key fields from the system.
[**shippingTermGetList**](ShippingTermApi.md#shippingTermGetList) | **GET** /ShippingTerm | Retrieves records that satisfy the specified conditions from the system.
[**shippingTermPutEntity**](ShippingTermApi.md#shippingTermPutEntity) | **PUT** /ShippingTerm | Creates a record or updates an existing record.
[**shippingTermPutFile**](ShippingTermApi.md#shippingTermPutFile) | **PUT** /ShippingTerm/{ids}/files/{filename} | Attaches a file to a record.


# **shippingTermDeleteById**
> shippingTermDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->shippingTermDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermDeleteById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The session ID of the record. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermDeleteByKeys**
> shippingTermDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->shippingTermDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermDeleteByKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The values of the key fields of the record. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel shippingTermGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->shippingTermGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel**](../Model/ShippingTermModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel shippingTermGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->shippingTermGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The session ID of the record. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel**](../Model/ShippingTermModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel shippingTermGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->shippingTermGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermGetByKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The values of the key fields of the record. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel**](../Model/ShippingTermModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel[] shippingTermGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.
$skip = 56; // int | The number of records to be skipped from the list of returned records.
$top = 56; // int | The number of records to be returned from the system.

try {
    $result = $apiInstance->shippingTermGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermGetList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]
 **skip** | **int**| The number of records to be skipped from the list of returned records. | [optional]
 **top** | **int**| The number of records to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel[]**](../Model/ShippingTermModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel shippingTermPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->shippingTermPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel**](../Model/ShippingTermModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\ShippingTermModel**](../Model/ShippingTermModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shippingTermPutFile**
> shippingTermPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\ShippingTermApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->shippingTermPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling ShippingTermApi->shippingTermPutFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ids** | [**string[]**](../Model/string.md)| The values of the key fields of the record. |
 **filename** | **string**| The name of the file that you are going to attach with the extension. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

