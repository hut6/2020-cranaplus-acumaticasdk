# Hut6\CranaplusAcumaticaSdk\AccountByPeriodInquiryApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Default/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountByPeriodInquiryDeleteById**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryDeleteById) | **DELETE** /AccountByPeriodInquiry/{id} | Deletes the record by its session identifier.
[**accountByPeriodInquiryDeleteByKeys**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryDeleteByKeys) | **DELETE** /AccountByPeriodInquiry/{ids} | Deletes the record by the values of its key fields.
[**accountByPeriodInquiryGetAdHocSchema**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryGetAdHocSchema) | **GET** /AccountByPeriodInquiry/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**accountByPeriodInquiryGetById**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryGetById) | **GET** /AccountByPeriodInquiry/{id} | Retrieves a record by the value of the session entity ID from the system.
[**accountByPeriodInquiryGetByKeys**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryGetByKeys) | **GET** /AccountByPeriodInquiry/{ids} | Retrieves a record by the values of its key fields from the system.
[**accountByPeriodInquiryGetList**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryGetList) | **GET** /AccountByPeriodInquiry | Retrieves records that satisfy the specified conditions from the system.
[**accountByPeriodInquiryPutEntity**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryPutEntity) | **PUT** /AccountByPeriodInquiry | Creates a record or updates an existing record.
[**accountByPeriodInquiryPutFile**](AccountByPeriodInquiryApi.md#accountByPeriodInquiryPutFile) | **PUT** /AccountByPeriodInquiry/{ids}/files/{filename} | Attaches a file to a record.


# **accountByPeriodInquiryDeleteById**
> accountByPeriodInquiryDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->accountByPeriodInquiryDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **accountByPeriodInquiryDeleteByKeys**
> accountByPeriodInquiryDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->accountByPeriodInquiryDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **accountByPeriodInquiryGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel accountByPeriodInquiryGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->accountByPeriodInquiryGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel**](../Model/AccountByPeriodInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountByPeriodInquiryGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel accountByPeriodInquiryGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
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
    $result = $apiInstance->accountByPeriodInquiryGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel**](../Model/AccountByPeriodInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountByPeriodInquiryGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel accountByPeriodInquiryGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
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
    $result = $apiInstance->accountByPeriodInquiryGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel**](../Model/AccountByPeriodInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountByPeriodInquiryGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel[] accountByPeriodInquiryGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
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
    $result = $apiInstance->accountByPeriodInquiryGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel[]**](../Model/AccountByPeriodInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountByPeriodInquiryPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel accountByPeriodInquiryPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel(); // \Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->accountByPeriodInquiryPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel**](../Model/AccountByPeriodInquiryModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\AccountByPeriodInquiryModel**](../Model/AccountByPeriodInquiryModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountByPeriodInquiryPutFile**
> accountByPeriodInquiryPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\AccountByPeriodInquiryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->accountByPeriodInquiryPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling AccountByPeriodInquiryApi->accountByPeriodInquiryPutFile: ', $e->getMessage(), PHP_EOL;
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

