# OpenAPI\Client\SyncStatusApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**syncStatusList()**](SyncStatusApi.md#syncStatusList) | **GET** /sync-status | 


## `syncStatusList()`

```php
syncStatusList($xAccountToken, $cursor, $pageSize): \OpenAPI\Client\Model\PaginatedSyncStatusList
```



Get syncing status. Possible values: `DISABLED`, `DONE`, `FAILED`, `PAUSED`, `SYNCING`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\SyncStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$pageSize = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->syncStatusList($xAccountToken, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SyncStatusApi->syncStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **pageSize** | **int**| Number of results to return per page. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedSyncStatusList**](../Model/PaginatedSyncStatusList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
