# OpenAPI\Client\AvailableActionsApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**availableActionsRetrieve()**](AvailableActionsApi.md#availableActionsRetrieve) | **GET** /available-actions | 


## `availableActionsRetrieve()`

```php
availableActionsRetrieve($xAccountToken): \OpenAPI\Client\Model\AvailableActions
```



Returns a list of models and actions available for an account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AvailableActionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->availableActionsRetrieve($xAccountToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailableActionsApi->availableActionsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |

### Return type

[**\OpenAPI\Client\Model\AvailableActions**](../Model/AvailableActions.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
