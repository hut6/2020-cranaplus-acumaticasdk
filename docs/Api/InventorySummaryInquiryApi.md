# Hut6\CranaplusAcumaticaSdk\InventorySummaryInquiryApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Default/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventorySummaryInquiryDeleteById**](InventorySummaryInquiryApi.md#inventorySummaryInquiryDeleteById) | **DELETE** /InventorySummaryInquiry/{id} | Deletes the record by its session identifier.
[**inventorySummaryInquiryDeleteByKeys**](InventorySummaryInquiryApi.md#inventorySummaryInquiryDeleteByKeys) | **DELETE** /InventorySummaryInquiry/{ids} | Deletes the record by the values of its key fields.
[**inventorySummaryInquiryGetAdHocSchema**](InventorySummaryInquiryApi.md#inventorySummaryInquiryGetAdHocSchema) | **GET** /InventorySummaryInquiry/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**inventorySummaryInquiryGetById**](InventorySummaryInquiryApi.md#inventorySummaryInquiryGetById) | **GET** /InventorySummaryInquiry/{id} | Retrieves a record by the value of the session entity ID from the system.
[**inventorySummaryInquiryGetByKeys**](InventorySummaryInquiryApi.md#inventorySummaryInquiryGetByKeys) | **GET** /InventorySummaryInquiry/{ids} | Retrieves a record by the values of its key fields from the system.
[**inventorySummaryInquiryGetList**](InventorySummaryInquiryApi.md#inventorySummaryInquiryGetList) | **GET** /InventorySummaryInquiry | Retrieves records that satisfy the specified conditions from the system.
[**inventorySummaryInquiryPutEntity**](InventorySummaryInquiryApi.md#inventorySummaryInquiryPutEntity) | **PUT** /InventorySummaryInquiry | Creates a record or updates an existing record.
[**inventorySummaryInquiryPutFile**](InventorySummaryInquiryApi.md#inventorySummaryInquiryPutFile) | **PUT** /InventorySummaryInquiry/{ids}/files/{filename} | Attaches a file to a record.


# **inventorySummaryInquiryDeleteById**
> inventorySummaryInquiryDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->inventorySummaryInquiryDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **inventorySummaryInquiryDeleteByKeys**
> inventorySummaryInquiryDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->inventorySummaryInquiryDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **inventorySummaryInquiryGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel inventorySummaryInquiryGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->inventorySummaryInquiryGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel**](../Model/InventorySummaryInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySummaryInquiryGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel inventorySummaryInquiryGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
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
    $result = $apiInstance->inventorySummaryInquiryGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel**](../Model/InventorySummaryInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySummaryInquiryGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel inventorySummaryInquiryGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
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
    $result = $apiInstance->inventorySummaryInquiryGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel**](../Model/InventorySummaryInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySummaryInquiryGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel[] inventorySummaryInquiryGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
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
    $result = $apiInstance->inventorySummaryInquiryGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel[]**](../Model/InventorySummaryInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySummaryInquiryPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel inventorySummaryInquiryPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel(); // \Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->inventorySummaryInquiryPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel**](../Model/InventorySummaryInquiryModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\InventorySummaryInquiryModel**](../Model/InventorySummaryInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySummaryInquiryPutFile**
> inventorySummaryInquiryPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\InventorySummaryInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->inventorySummaryInquiryPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling InventorySummaryInquiryApi->inventorySummaryInquiryPutFile: ', $e->getMessage(), PHP_EOL;
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

