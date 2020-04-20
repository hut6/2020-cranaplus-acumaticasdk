# Hut6\CranaplusAcumaticaSdk\SalesPriceWorksheetApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Default/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**salesPriceWorksheetDeleteById**](SalesPriceWorksheetApi.md#salesPriceWorksheetDeleteById) | **DELETE** /SalesPriceWorksheet/{id} | Deletes the record by its session identifier.
[**salesPriceWorksheetDeleteByKeys**](SalesPriceWorksheetApi.md#salesPriceWorksheetDeleteByKeys) | **DELETE** /SalesPriceWorksheet/{ids} | Deletes the record by the values of its key fields.
[**salesPriceWorksheetGetAdHocSchema**](SalesPriceWorksheetApi.md#salesPriceWorksheetGetAdHocSchema) | **GET** /SalesPriceWorksheet/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**salesPriceWorksheetGetById**](SalesPriceWorksheetApi.md#salesPriceWorksheetGetById) | **GET** /SalesPriceWorksheet/{id} | Retrieves a record by the value of the session entity ID from the system.
[**salesPriceWorksheetGetByKeys**](SalesPriceWorksheetApi.md#salesPriceWorksheetGetByKeys) | **GET** /SalesPriceWorksheet/{ids} | Retrieves a record by the values of its key fields from the system.
[**salesPriceWorksheetGetList**](SalesPriceWorksheetApi.md#salesPriceWorksheetGetList) | **GET** /SalesPriceWorksheet | Retrieves records that satisfy the specified conditions from the system.
[**salesPriceWorksheetInvokeActionReleaseSalesPriceWorksheet**](SalesPriceWorksheetApi.md#salesPriceWorksheetInvokeActionReleaseSalesPriceWorksheet) | **POST** /SalesPriceWorksheet/ReleaseSalesPriceWorksheet | Performs an action in the system.
[**salesPriceWorksheetPutEntity**](SalesPriceWorksheetApi.md#salesPriceWorksheetPutEntity) | **PUT** /SalesPriceWorksheet | Creates a record or updates an existing record.
[**salesPriceWorksheetPutFile**](SalesPriceWorksheetApi.md#salesPriceWorksheetPutFile) | **PUT** /SalesPriceWorksheet/{ids}/files/{filename} | Attaches a file to a record.


# **salesPriceWorksheetDeleteById**
> salesPriceWorksheetDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->salesPriceWorksheetDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **salesPriceWorksheetDeleteByKeys**
> salesPriceWorksheetDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->salesPriceWorksheetDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **salesPriceWorksheetGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel salesPriceWorksheetGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->salesPriceWorksheetGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel**](../Model/SalesPriceWorksheetModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceWorksheetGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel salesPriceWorksheetGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
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
    $result = $apiInstance->salesPriceWorksheetGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel**](../Model/SalesPriceWorksheetModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceWorksheetGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel salesPriceWorksheetGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
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
    $result = $apiInstance->salesPriceWorksheetGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel**](../Model/SalesPriceWorksheetModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceWorksheetGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel[] salesPriceWorksheetGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
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
    $result = $apiInstance->salesPriceWorksheetGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel[]**](../Model/SalesPriceWorksheetModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceWorksheetInvokeActionReleaseSalesPriceWorksheet**
> salesPriceWorksheetInvokeActionReleaseSalesPriceWorksheet($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ReleaseSalesPriceWorksheetModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ReleaseSalesPriceWorksheetModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->salesPriceWorksheetInvokeActionReleaseSalesPriceWorksheet($invocation);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetInvokeActionReleaseSalesPriceWorksheet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ReleaseSalesPriceWorksheetModel**](../Model/ReleaseSalesPriceWorksheetModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceWorksheetPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel salesPriceWorksheetPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel(); // \Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->salesPriceWorksheetPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel**](../Model/SalesPriceWorksheetModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\SalesPriceWorksheetModel**](../Model/SalesPriceWorksheetModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **salesPriceWorksheetPutFile**
> salesPriceWorksheetPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\SalesPriceWorksheetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->salesPriceWorksheetPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling SalesPriceWorksheetApi->salesPriceWorksheetPutFile: ', $e->getMessage(), PHP_EOL;
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

