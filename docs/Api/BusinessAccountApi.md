# Hut6\CranaplusAcumaticaSdk\BusinessAccountApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Crana/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**businessAccountDeleteById**](BusinessAccountApi.md#businessAccountDeleteById) | **DELETE** /BusinessAccount/{id} | Deletes the record by its session identifier.
[**businessAccountDeleteByKeys**](BusinessAccountApi.md#businessAccountDeleteByKeys) | **DELETE** /BusinessAccount/{ids} | Deletes the record by the values of its key fields.
[**businessAccountGetAdHocSchema**](BusinessAccountApi.md#businessAccountGetAdHocSchema) | **GET** /BusinessAccount/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**businessAccountGetById**](BusinessAccountApi.md#businessAccountGetById) | **GET** /BusinessAccount/{id} | Retrieves a record by the value of the session entity ID from the system.
[**businessAccountGetByKeys**](BusinessAccountApi.md#businessAccountGetByKeys) | **GET** /BusinessAccount/{ids} | Retrieves a record by the values of its key fields from the system.
[**businessAccountGetList**](BusinessAccountApi.md#businessAccountGetList) | **GET** /BusinessAccount | Retrieves records that satisfy the specified conditions from the system.
[**businessAccountInvokeActionChangeBusinessAccountID**](BusinessAccountApi.md#businessAccountInvokeActionChangeBusinessAccountID) | **POST** /BusinessAccount/ChangeBusinessAccountID | Performs an action in the system.
[**businessAccountInvokeActionCheckForBusinessAccountDuplicates**](BusinessAccountApi.md#businessAccountInvokeActionCheckForBusinessAccountDuplicates) | **POST** /BusinessAccount/CheckForBusinessAccountDuplicates | Performs an action in the system.
[**businessAccountInvokeActionConvertBusinessAccountToCustomer**](BusinessAccountApi.md#businessAccountInvokeActionConvertBusinessAccountToCustomer) | **POST** /BusinessAccount/ConvertBusinessAccountToCustomer | Performs an action in the system.
[**businessAccountInvokeActionConvertBusinessAccountToVendor**](BusinessAccountApi.md#businessAccountInvokeActionConvertBusinessAccountToVendor) | **POST** /BusinessAccount/ConvertBusinessAccountToVendor | Performs an action in the system.
[**businessAccountInvokeActionMarkBusinessAccountAsValidated**](BusinessAccountApi.md#businessAccountInvokeActionMarkBusinessAccountAsValidated) | **POST** /BusinessAccount/MarkBusinessAccountAsValidated | Performs an action in the system.
[**businessAccountInvokeActionValidateBusinessAccountAddresses**](BusinessAccountApi.md#businessAccountInvokeActionValidateBusinessAccountAddresses) | **POST** /BusinessAccount/ValidateBusinessAccountAddresses | Performs an action in the system.
[**businessAccountPutEntity**](BusinessAccountApi.md#businessAccountPutEntity) | **PUT** /BusinessAccount | Creates a record or updates an existing record.
[**businessAccountPutFile**](BusinessAccountApi.md#businessAccountPutFile) | **PUT** /BusinessAccount/{ids}/files/{filename} | Attaches a file to a record.


# **businessAccountDeleteById**
> businessAccountDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->businessAccountDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **businessAccountDeleteByKeys**
> businessAccountDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->businessAccountDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **businessAccountGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel businessAccountGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->businessAccountGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel**](../Model/BusinessAccountModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel businessAccountGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
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
    $result = $apiInstance->businessAccountGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel**](../Model/BusinessAccountModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel businessAccountGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
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
    $result = $apiInstance->businessAccountGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel**](../Model/BusinessAccountModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel[] businessAccountGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
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
    $result = $apiInstance->businessAccountGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel[]**](../Model/BusinessAccountModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountInvokeActionChangeBusinessAccountID**
> businessAccountInvokeActionChangeBusinessAccountID($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ChangeBusinessAccountIDModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ChangeBusinessAccountIDModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->businessAccountInvokeActionChangeBusinessAccountID($invocation);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountInvokeActionChangeBusinessAccountID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ChangeBusinessAccountIDModel**](../Model/ChangeBusinessAccountIDModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountInvokeActionCheckForBusinessAccountDuplicates**
> businessAccountInvokeActionCheckForBusinessAccountDuplicates($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CheckForBusinessAccountDuplicatesModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CheckForBusinessAccountDuplicatesModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->businessAccountInvokeActionCheckForBusinessAccountDuplicates($invocation);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountInvokeActionCheckForBusinessAccountDuplicates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CheckForBusinessAccountDuplicatesModel**](../Model/CheckForBusinessAccountDuplicatesModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountInvokeActionConvertBusinessAccountToCustomer**
> businessAccountInvokeActionConvertBusinessAccountToCustomer($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ConvertBusinessAccountToCustomerModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ConvertBusinessAccountToCustomerModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->businessAccountInvokeActionConvertBusinessAccountToCustomer($invocation);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountInvokeActionConvertBusinessAccountToCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ConvertBusinessAccountToCustomerModel**](../Model/ConvertBusinessAccountToCustomerModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountInvokeActionConvertBusinessAccountToVendor**
> businessAccountInvokeActionConvertBusinessAccountToVendor($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ConvertBusinessAccountToVendorModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ConvertBusinessAccountToVendorModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->businessAccountInvokeActionConvertBusinessAccountToVendor($invocation);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountInvokeActionConvertBusinessAccountToVendor: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ConvertBusinessAccountToVendorModel**](../Model/ConvertBusinessAccountToVendorModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountInvokeActionMarkBusinessAccountAsValidated**
> businessAccountInvokeActionMarkBusinessAccountAsValidated($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\MarkBusinessAccountAsValidatedModel(); // \Hut6\CranaplusAcumaticaSdk\Model\MarkBusinessAccountAsValidatedModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->businessAccountInvokeActionMarkBusinessAccountAsValidated($invocation);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountInvokeActionMarkBusinessAccountAsValidated: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\MarkBusinessAccountAsValidatedModel**](../Model/MarkBusinessAccountAsValidatedModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountInvokeActionValidateBusinessAccountAddresses**
> businessAccountInvokeActionValidateBusinessAccountAddresses($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ValidateBusinessAccountAddressesModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ValidateBusinessAccountAddressesModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->businessAccountInvokeActionValidateBusinessAccountAddresses($invocation);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountInvokeActionValidateBusinessAccountAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ValidateBusinessAccountAddressesModel**](../Model/ValidateBusinessAccountAddressesModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel businessAccountPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel(); // \Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->businessAccountPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel**](../Model/BusinessAccountModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\BusinessAccountModel**](../Model/BusinessAccountModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **businessAccountPutFile**
> businessAccountPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\BusinessAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->businessAccountPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling BusinessAccountApi->businessAccountPutFile: ', $e->getMessage(), PHP_EOL;
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

