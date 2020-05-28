# Hut6\CranaplusAcumaticaSdk\EmailApi

All URIs are relative to *http://crana.myobadvanced.com/entity/Crana/17.200.001*

Method | HTTP request | Description
------------- | ------------- | -------------
[**emailDeleteById**](EmailApi.md#emailDeleteById) | **DELETE** /Email/{id} | Deletes the record by its session identifier.
[**emailDeleteByKeys**](EmailApi.md#emailDeleteByKeys) | **DELETE** /Email/{ids} | Deletes the record by the values of its key fields.
[**emailGetAdHocSchema**](EmailApi.md#emailGetAdHocSchema) | **GET** /Email/$adHocSchema | Retrieves the schema of custom fields of the entity from the system.
[**emailGetById**](EmailApi.md#emailGetById) | **GET** /Email/{id} | Retrieves a record by the value of the session entity ID from the system.
[**emailGetByKeys**](EmailApi.md#emailGetByKeys) | **GET** /Email/{ids} | Retrieves a record by the values of its key fields from the system.
[**emailGetList**](EmailApi.md#emailGetList) | **GET** /Email | Retrieves records that satisfy the specified conditions from the system.
[**emailInvokeActionArchiveEmail**](EmailApi.md#emailInvokeActionArchiveEmail) | **POST** /Email/ArchiveEmail | Performs an action in the system.
[**emailInvokeActionCancelSendingEmail**](EmailApi.md#emailInvokeActionCancelSendingEmail) | **POST** /Email/CancelSendingEmail | Performs an action in the system.
[**emailInvokeActionCreateCaseEmail**](EmailApi.md#emailInvokeActionCreateCaseEmail) | **POST** /Email/CreateCaseEmail | Performs an action in the system.
[**emailInvokeActionCreateContactEmail**](EmailApi.md#emailInvokeActionCreateContactEmail) | **POST** /Email/CreateContactEmail | Performs an action in the system.
[**emailInvokeActionCreateEventEmail**](EmailApi.md#emailInvokeActionCreateEventEmail) | **POST** /Email/CreateEventEmail | Performs an action in the system.
[**emailInvokeActionCreateExpenseReceiptEmail**](EmailApi.md#emailInvokeActionCreateExpenseReceiptEmail) | **POST** /Email/CreateExpenseReceiptEmail | Performs an action in the system.
[**emailInvokeActionCreateLeadEmail**](EmailApi.md#emailInvokeActionCreateLeadEmail) | **POST** /Email/CreateLeadEmail | Performs an action in the system.
[**emailInvokeActionCreateOpportunityEmail**](EmailApi.md#emailInvokeActionCreateOpportunityEmail) | **POST** /Email/CreateOpportunityEmail | Performs an action in the system.
[**emailInvokeActionCreateTaskEmail**](EmailApi.md#emailInvokeActionCreateTaskEmail) | **POST** /Email/CreateTaskEmail | Performs an action in the system.
[**emailInvokeActionDownloadEmlFileEmail**](EmailApi.md#emailInvokeActionDownloadEmlFileEmail) | **POST** /Email/DownloadEmlFileEmail | Performs an action in the system.
[**emailInvokeActionProcessEmail**](EmailApi.md#emailInvokeActionProcessEmail) | **POST** /Email/ProcessEmail | Performs an action in the system.
[**emailInvokeActionRestoreArchivedEmail**](EmailApi.md#emailInvokeActionRestoreArchivedEmail) | **POST** /Email/RestoreArchivedEmail | Performs an action in the system.
[**emailInvokeActionRestoreDeletedEmail**](EmailApi.md#emailInvokeActionRestoreDeletedEmail) | **POST** /Email/RestoreDeletedEmail | Performs an action in the system.
[**emailInvokeActionSelectRelatedEntityEmail**](EmailApi.md#emailInvokeActionSelectRelatedEntityEmail) | **POST** /Email/SelectRelatedEntityEmail | Performs an action in the system.
[**emailInvokeActionSelectSourceEmail**](EmailApi.md#emailInvokeActionSelectSourceEmail) | **POST** /Email/SelectSourceEmail | Performs an action in the system.
[**emailInvokeActionSendEmail**](EmailApi.md#emailInvokeActionSendEmail) | **POST** /Email/SendEmail | Performs an action in the system.
[**emailPutEntity**](EmailApi.md#emailPutEntity) | **PUT** /Email | Creates a record or updates an existing record.
[**emailPutFile**](EmailApi.md#emailPutFile) | **PUT** /Email/{ids}/files/{filename} | Attaches a file to a record.


# **emailDeleteById**
> emailDeleteById($id)

Deletes the record by its session identifier.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | The session ID of the record.

try {
    $apiInstance->emailDeleteById($id);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailDeleteById: ', $e->getMessage(), PHP_EOL;
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

# **emailDeleteByKeys**
> emailDeleteByKeys($ids)

Deletes the record by the values of its key fields.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.

try {
    $apiInstance->emailDeleteByKeys($ids);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailDeleteByKeys: ', $e->getMessage(), PHP_EOL;
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

# **emailGetAdHocSchema**
> \Hut6\CranaplusAcumaticaSdk\Model\EmailModel emailGetAdHocSchema()

Retrieves the schema of custom fields of the entity from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->emailGetAdHocSchema();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailGetAdHocSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\EmailModel**](../Model/EmailModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailGetById**
> \Hut6\CranaplusAcumaticaSdk\Model\EmailModel emailGetById($id, $select, $filter, $expand, $custom)

Retrieves a record by the value of the session entity ID from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
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
    $result = $apiInstance->emailGetById($id, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailGetById: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\EmailModel**](../Model/EmailModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailGetByKeys**
> \Hut6\CranaplusAcumaticaSdk\Model\EmailModel emailGetByKeys($ids, $select, $filter, $expand, $custom)

Retrieves a record by the values of its key fields from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
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
    $result = $apiInstance->emailGetByKeys($ids, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailGetByKeys: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\EmailModel**](../Model/EmailModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailGetList**
> \Hut6\CranaplusAcumaticaSdk\Model\EmailModel[] emailGetList($select, $filter, $expand, $custom, $skip, $top)

Retrieves records that satisfy the specified conditions from the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
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
    $result = $apiInstance->emailGetList($select, $filter, $expand, $custom, $skip, $top);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailGetList: ', $e->getMessage(), PHP_EOL;
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

[**\Hut6\CranaplusAcumaticaSdk\Model\EmailModel[]**](../Model/EmailModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionArchiveEmail**
> emailInvokeActionArchiveEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ArchiveEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ArchiveEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionArchiveEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionArchiveEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ArchiveEmailModel**](../Model/ArchiveEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCancelSendingEmail**
> emailInvokeActionCancelSendingEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CancelSendingEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CancelSendingEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCancelSendingEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCancelSendingEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CancelSendingEmailModel**](../Model/CancelSendingEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateCaseEmail**
> emailInvokeActionCreateCaseEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateCaseEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateCaseEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateCaseEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateCaseEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateCaseEmailModel**](../Model/CreateCaseEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateContactEmail**
> emailInvokeActionCreateContactEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateContactEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateContactEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateContactEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateContactEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateContactEmailModel**](../Model/CreateContactEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateEventEmail**
> emailInvokeActionCreateEventEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateEventEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateEventEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateEventEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateEventEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateEventEmailModel**](../Model/CreateEventEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateExpenseReceiptEmail**
> emailInvokeActionCreateExpenseReceiptEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateExpenseReceiptEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateExpenseReceiptEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateExpenseReceiptEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateExpenseReceiptEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateExpenseReceiptEmailModel**](../Model/CreateExpenseReceiptEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateLeadEmail**
> emailInvokeActionCreateLeadEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateLeadEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateLeadEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateLeadEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateLeadEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateLeadEmailModel**](../Model/CreateLeadEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateOpportunityEmail**
> emailInvokeActionCreateOpportunityEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunityEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunityEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateOpportunityEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateOpportunityEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateOpportunityEmailModel**](../Model/CreateOpportunityEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionCreateTaskEmail**
> emailInvokeActionCreateTaskEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\CreateTaskEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\CreateTaskEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionCreateTaskEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionCreateTaskEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\CreateTaskEmailModel**](../Model/CreateTaskEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionDownloadEmlFileEmail**
> emailInvokeActionDownloadEmlFileEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\DownloadEmlFileEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\DownloadEmlFileEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionDownloadEmlFileEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionDownloadEmlFileEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\DownloadEmlFileEmailModel**](../Model/DownloadEmlFileEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionProcessEmail**
> emailInvokeActionProcessEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\ProcessEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\ProcessEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionProcessEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionProcessEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\ProcessEmailModel**](../Model/ProcessEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionRestoreArchivedEmail**
> emailInvokeActionRestoreArchivedEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\RestoreArchivedEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\RestoreArchivedEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionRestoreArchivedEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionRestoreArchivedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\RestoreArchivedEmailModel**](../Model/RestoreArchivedEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionRestoreDeletedEmail**
> emailInvokeActionRestoreDeletedEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\RestoreDeletedEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\RestoreDeletedEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionRestoreDeletedEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionRestoreDeletedEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\RestoreDeletedEmailModel**](../Model/RestoreDeletedEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionSelectRelatedEntityEmail**
> emailInvokeActionSelectRelatedEntityEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\SelectRelatedEntityEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\SelectRelatedEntityEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionSelectRelatedEntityEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionSelectRelatedEntityEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\SelectRelatedEntityEmailModel**](../Model/SelectRelatedEntityEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionSelectSourceEmail**
> emailInvokeActionSelectSourceEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\SelectSourceEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\SelectSourceEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionSelectSourceEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionSelectSourceEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\SelectSourceEmailModel**](../Model/SelectSourceEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailInvokeActionSendEmail**
> emailInvokeActionSendEmail($invocation)

Performs an action in the system.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$invocation = new \Hut6\CranaplusAcumaticaSdk\Model\SendEmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\SendEmailModel | The record to which the action should be applied and the parameters of the action.

try {
    $apiInstance->emailInvokeActionSendEmail($invocation);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailInvokeActionSendEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invocation** | [**\Hut6\CranaplusAcumaticaSdk\Model\SendEmailModel**](../Model/SendEmailModel.md)| The record to which the action should be applied and the parameters of the action. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailPutEntity**
> \Hut6\CranaplusAcumaticaSdk\Model\EmailModel emailPutEntity($entity, $select, $filter, $expand, $custom)

Creates a record or updates an existing record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$entity = new \Hut6\CranaplusAcumaticaSdk\Model\EmailModel(); // \Hut6\CranaplusAcumaticaSdk\Model\EmailModel | The record to be passed to the system.
$select = "select_example"; // string | The fields of the entity to be returned from the system.
$filter = "filter_example"; // string | The conditions that determine which records should be selected from the system.
$expand = "expand_example"; // string | The linked and detail entities that should be expanded.
$custom = "custom_example"; // string | The fields that are not defined in the contract of the endpoint to be returned from the system.

try {
    $result = $apiInstance->emailPutEntity($entity, $select, $filter, $expand, $custom);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailPutEntity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **entity** | [**\Hut6\CranaplusAcumaticaSdk\Model\EmailModel**](../Model/EmailModel.md)| The record to be passed to the system. |
 **select** | **string**| The fields of the entity to be returned from the system. | [optional]
 **filter** | **string**| The conditions that determine which records should be selected from the system. | [optional]
 **expand** | **string**| The linked and detail entities that should be expanded. | [optional]
 **custom** | **string**| The fields that are not defined in the contract of the endpoint to be returned from the system. | [optional]

### Return type

[**\Hut6\CranaplusAcumaticaSdk\Model\EmailModel**](../Model/EmailModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emailPutFile**
> emailPutFile($ids, $filename)

Attaches a file to a record.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Hut6\CranaplusAcumaticaSdk\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ids = array("ids_example"); // string[] | The values of the key fields of the record.
$filename = "filename_example"; // string | The name of the file that you are going to attach with the extension.

try {
    $apiInstance->emailPutFile($ids, $filename);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->emailPutFile: ', $e->getMessage(), PHP_EOL;
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

