# Hut6\CranaplusAcumaticaSdk\PhysicalInventoryReviewApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Default/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**physicalInventoryReviewDeleteById**](PhysicalInventoryReviewApi.md#physicalInventoryReviewDeleteById) | **DELETE** /PhysicalInventoryReview/{id} | Deletes the record by its session identifier.
[**physicalInventoryReviewDeleteByKeys**](PhysicalInventoryReviewApi.md#physicalInventoryReviewDeleteByKeys) | **DELETE** /PhysicalInventoryReview/{ids} | Deletes the record by the values of its key fields.
[**physicalInventoryReviewGetAdHocSchema**](PhysicalInventoryReviewApi.md#physicalInventoryReviewGetAdHocSchema) | **GET** /PhysicalInventoryReview/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**physicalInventoryReviewGetById**](PhysicalInventoryReviewApi.md#physicalInventoryReviewGetById) | **GET** /PhysicalInventoryReview/{id} | Retrieves a record by the value of the session entity ID from the system.
[**physicalInventoryReviewGetByKeys**](PhysicalInventoryReviewApi.md#physicalInventoryReviewGetByKeys) | **GET** /PhysicalInventoryReview/{ids} | Retrieves a record by the values of its key fields from the system.
[**physicalInventoryReviewGetList**](PhysicalInventoryReviewApi.md#physicalInventoryReviewGetList) | **GET** /PhysicalInventoryReview | Retrieves records that satisfy the specified conditions from the system.
[**physicalInventoryReviewInvokeActionCancelPhysicalInventory**](PhysicalInventoryReviewApi.md#physicalInventoryReviewInvokeActionCancelPhysicalInventory) | **POST** /PhysicalInventoryReview/CancelPhysicalInventory | Performs an action in the system.
[**physicalInventoryReviewInvokeActionCompletePhysicalInventory**](PhysicalInventoryReviewApi.md#physicalInventoryReviewInvokeActionCompletePhysicalInventory) | **POST** /PhysicalInventoryReview/CompletePhysicalInventory | Performs an action in the system.
[**physicalInventoryReviewInvokeActionFinishCountingPhysicalInventory**](PhysicalInventoryReviewApi.md#physicalInventoryReviewInvokeActionFinishCountingPhysicalInventory) | **POST** /PhysicalInventoryReview/FinishCountingPhysicalInventory | Performs an action in the system.
[**physicalInventoryReviewPutEntity**](PhysicalInventoryReviewApi.md#physicalInventoryReviewPutEntity) | **PUT** /PhysicalInventoryReview | Creates a record or updates an existing record.
[**physicalInventoryReviewPutFile**](PhysicalInventoryReviewApi.md#physicalInventoryReviewPutFile) | **PUT** /PhysicalInventoryReview/{ids}/files/{filename} | Attaches a file to a record.


# **physicalInventoryReviewDeleteById**
> physicalInventoryReviewDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->physicalInventoryReviewDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **physicalInventoryReviewDeleteByKeys**
> physicalInventoryReviewDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->physicalInventoryReviewDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **physicalInventoryReviewGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel physicalInventoryReviewGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->physicalInventoryReviewGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel**](../Model/PhysicalInventoryReviewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel physicalInventoryReviewGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
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
    $result = $apiInstance->physicalInventoryReviewGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel**](../Model/PhysicalInventoryReviewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel physicalInventoryReviewGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
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
    $result = $apiInstance->physicalInventoryReviewGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel**](../Model/PhysicalInventoryReviewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel[] physicalInventoryReviewGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
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
    $result = $apiInstance->physicalInventoryReviewGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel[]**](../Model/PhysicalInventoryReviewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewInvokeActionCancelPhysicalInventory**
> physicalInventoryReviewInvokeActionCancelPhysicalInventory($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CancelPhysicalInventoryModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CancelPhysicalInventoryModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->physicalInventoryReviewInvokeActionCancelPhysicalInventory($invocation);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewInvokeActionCancelPhysicalInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CancelPhysicalInventoryModel**](../Model/CancelPhysicalInventoryModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewInvokeActionCompletePhysicalInventory**
> physicalInventoryReviewInvokeActionCompletePhysicalInventory($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CompletePhysicalInventoryModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CompletePhysicalInventoryModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->physicalInventoryReviewInvokeActionCompletePhysicalInventory($invocation);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewInvokeActionCompletePhysicalInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CompletePhysicalInventoryModel**](../Model/CompletePhysicalInventoryModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewInvokeActionFinishCountingPhysicalInventory**
> physicalInventoryReviewInvokeActionFinishCountingPhysicalInventory($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\FinishCountingPhysicalInventoryModel(); // \Hut6\CranaplusAcumaticaSdk\Model\FinishCountingPhysicalInventoryModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->physicalInventoryReviewInvokeActionFinishCountingPhysicalInventory($invocation);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewInvokeActionFinishCountingPhysicalInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\FinishCountingPhysicalInventoryModel**](../Model/FinishCountingPhysicalInventoryModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel physicalInventoryReviewPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel(); // \Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->physicalInventoryReviewPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel**](../Model/PhysicalInventoryReviewModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\PhysicalInventoryReviewModel**](../Model/PhysicalInventoryReviewModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **physicalInventoryReviewPutFile**
> physicalInventoryReviewPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\PhysicalInventoryReviewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->physicalInventoryReviewPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalInventoryReviewApi->physicalInventoryReviewPutFile: ', $e->getMessage(), PHP_EOL;
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

