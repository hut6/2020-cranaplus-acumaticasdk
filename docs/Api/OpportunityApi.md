# Hut6\CranaplusAcumaticaSdk\OpportunityApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Crana/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**opportunityDeleteById**](OpportunityApi.md#opportunityDeleteById) | **DELETE** /Opportunity/{id} | Deletes the record by its session identifier.
[**opportunityDeleteByKeys**](OpportunityApi.md#opportunityDeleteByKeys) | **DELETE** /Opportunity/{ids} | Deletes the record by the values of its key fields.
[**opportunityGetAdHocSchema**](OpportunityApi.md#opportunityGetAdHocSchema) | **GET** /Opportunity/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**opportunityGetById**](OpportunityApi.md#opportunityGetById) | **GET** /Opportunity/{id} | Retrieves a record by the value of the session entity ID from the system.
[**opportunityGetByKeys**](OpportunityApi.md#opportunityGetByKeys) | **GET** /Opportunity/{ids} | Retrieves a record by the values of its key fields from the system.
[**opportunityGetList**](OpportunityApi.md#opportunityGetList) | **GET** /Opportunity | Retrieves records that satisfy the specified conditions from the system.
[**opportunityInvokeActionCreateAccountFromOpportunity**](OpportunityApi.md#opportunityInvokeActionCreateAccountFromOpportunity) | **POST** /Opportunity/CreateAccountFromOpportunity | Performs an action in the system.
[**opportunityInvokeActionCreateContactFromOpportunity**](OpportunityApi.md#opportunityInvokeActionCreateContactFromOpportunity) | **POST** /Opportunity/CreateContactFromOpportunity | Performs an action in the system.
[**opportunityInvokeActionCreateOpportunityInvoice**](OpportunityApi.md#opportunityInvokeActionCreateOpportunityInvoice) | **POST** /Opportunity/CreateOpportunityInvoice | Performs an action in the system.
[**opportunityInvokeActionCreateOpportunitySalesOrder**](OpportunityApi.md#opportunityInvokeActionCreateOpportunitySalesOrder) | **POST** /Opportunity/CreateOpportunitySalesOrder | Performs an action in the system.
[**opportunityPutEntity**](OpportunityApi.md#opportunityPutEntity) | **PUT** /Opportunity | Creates a record or updates an existing record.
[**opportunityPutFile**](OpportunityApi.md#opportunityPutFile) | **PUT** /Opportunity/{ids}/files/{filename} | Attaches a file to a record.


# **opportunityDeleteById**
> opportunityDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->opportunityDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **opportunityDeleteByKeys**
> opportunityDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->opportunityDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **opportunityGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel opportunityGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->opportunityGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel**](../Model/OpportunityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel opportunityGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
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
    $result = $apiInstance->opportunityGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel**](../Model/OpportunityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel opportunityGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
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
    $result = $apiInstance->opportunityGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel**](../Model/OpportunityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel[] opportunityGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
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
    $result = $apiInstance->opportunityGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel[]**](../Model/OpportunityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityInvokeActionCreateAccountFromOpportunity**
> opportunityInvokeActionCreateAccountFromOpportunity($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateAccountFromOpportunityModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateAccountFromOpportunityModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->opportunityInvokeActionCreateAccountFromOpportunity($invocation);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityInvokeActionCreateAccountFromOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateAccountFromOpportunityModel**](../Model/CreateAccountFromOpportunityModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityInvokeActionCreateContactFromOpportunity**
> opportunityInvokeActionCreateContactFromOpportunity($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateContactFromOpportunityModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateContactFromOpportunityModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->opportunityInvokeActionCreateContactFromOpportunity($invocation);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityInvokeActionCreateContactFromOpportunity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateContactFromOpportunityModel**](../Model/CreateContactFromOpportunityModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityInvokeActionCreateOpportunityInvoice**
> opportunityInvokeActionCreateOpportunityInvoice($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunityInvoiceModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunityInvoiceModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->opportunityInvokeActionCreateOpportunityInvoice($invocation);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityInvokeActionCreateOpportunityInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunityInvoiceModel**](../Model/CreateOpportunityInvoiceModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityInvokeActionCreateOpportunitySalesOrder**
> opportunityInvokeActionCreateOpportunitySalesOrder($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunitySalesOrderModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunitySalesOrderModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->opportunityInvokeActionCreateOpportunitySalesOrder($invocation);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityInvokeActionCreateOpportunitySalesOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunitySalesOrderModel**](../Model/CreateOpportunitySalesOrderModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel opportunityPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel(); // \Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->opportunityPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel**](../Model/OpportunityModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\OpportunityModel**](../Model/OpportunityModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **opportunityPutFile**
> opportunityPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\OpportunityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->opportunityPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->opportunityPutFile: ', $e->getMessage(), PHP_EOL;
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

