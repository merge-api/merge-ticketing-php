# OpenAPI\Client\WebhookReceiversApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**webhookReceiversCreate()**](WebhookReceiversApi.md#webhookReceiversCreate) | **POST** /webhook-receivers | 
[**webhookReceiversList()**](WebhookReceiversApi.md#webhookReceiversList) | **GET** /webhook-receivers | 


## `webhookReceiversCreate()`

```php
webhookReceiversCreate($xAccountToken, $webhookReceiverRequest): \OpenAPI\Client\Model\WebhookReceiver
```



Creates a `WebhookReceiver` object with the given values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhookReceiversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$webhookReceiverRequest = new \OpenAPI\Client\Model\WebhookReceiverRequest(); // \OpenAPI\Client\Model\WebhookReceiverRequest

try {
    $result = $apiInstance->webhookReceiversCreate($xAccountToken, $webhookReceiverRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookReceiversApi->webhookReceiversCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **webhookReceiverRequest** | [**\OpenAPI\Client\Model\WebhookReceiverRequest**](../Model/WebhookReceiverRequest.md)|  |

### Return type

[**\OpenAPI\Client\Model\WebhookReceiver**](../Model/WebhookReceiver.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhookReceiversList()`

```php
webhookReceiversList($xAccountToken): \OpenAPI\Client\Model\WebhookReceiver[]
```



Returns a list of `WebhookReceiver` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\WebhookReceiversApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->webhookReceiversList($xAccountToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookReceiversApi->webhookReceiversList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |

### Return type

[**\OpenAPI\Client\Model\WebhookReceiver[]**](../Model/WebhookReceiver.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
