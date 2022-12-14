# OpenAPI\Client\RegenerateKeyApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**regenerateKeyCreate()**](RegenerateKeyApi.md#regenerateKeyCreate) | **POST** /regenerate-key | 


## `regenerateKeyCreate()`

```php
regenerateKeyCreate($remoteKeyForRegenerationRequest): \OpenAPI\Client\Model\RemoteKey
```



Exchange remote keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\RegenerateKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$remoteKeyForRegenerationRequest = new \OpenAPI\Client\Model\RemoteKeyForRegenerationRequest(); // \OpenAPI\Client\Model\RemoteKeyForRegenerationRequest

try {
    $result = $apiInstance->regenerateKeyCreate($remoteKeyForRegenerationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegenerateKeyApi->regenerateKeyCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **remoteKeyForRegenerationRequest** | [**\OpenAPI\Client\Model\RemoteKeyForRegenerationRequest**](../Model/RemoteKeyForRegenerationRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\RemoteKey**](../Model/RemoteKey.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
