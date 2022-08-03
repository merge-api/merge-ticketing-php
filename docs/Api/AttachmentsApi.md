# OpenAPI\Client\AttachmentsApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachmentsCreate()**](AttachmentsApi.md#attachmentsCreate) | **POST** /attachments | 
[**attachmentsList()**](AttachmentsApi.md#attachmentsList) | **GET** /attachments | 
[**attachmentsMetaPostRetrieve()**](AttachmentsApi.md#attachmentsMetaPostRetrieve) | **GET** /attachments/meta/post | 
[**attachmentsRetrieve()**](AttachmentsApi.md#attachmentsRetrieve) | **GET** /attachments/{id} | 


## `attachmentsCreate()`

```php
attachmentsCreate($xAccountToken, $ticketingAttachmentEndpointRequest, $isDebugMode, $runAsync): \OpenAPI\Client\Model\TicketingAttachmentResponse
```



Creates an `Attachment` object with the given values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$ticketingAttachmentEndpointRequest = new \OpenAPI\Client\Model\TicketingAttachmentEndpointRequest(); // \OpenAPI\Client\Model\TicketingAttachmentEndpointRequest
$isDebugMode = True; // bool | Whether to include debug fields (such as log file links) in the response.
$runAsync = True; // bool | Whether or not third-party updates should be run asynchronously.

try {
    $result = $apiInstance->attachmentsCreate($xAccountToken, $ticketingAttachmentEndpointRequest, $isDebugMode, $runAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **ticketingAttachmentEndpointRequest** | [**\OpenAPI\Client\Model\TicketingAttachmentEndpointRequest**](../Model/TicketingAttachmentEndpointRequest.md)|  |
 **isDebugMode** | **bool**| Whether to include debug fields (such as log file links) in the response. | [optional]
 **runAsync** | **bool**| Whether or not third-party updates should be run asynchronously. | [optional]

### Return type

[**\OpenAPI\Client\Model\TicketingAttachmentResponse**](../Model/TicketingAttachmentResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentsList()`

```php
attachmentsList($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId, $ticketId): \OpenAPI\Client\Model\PaginatedAttachmentList
```



Returns a list of `Attachment` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$includeDeletedData = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$includeRemoteData = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modifiedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modifiedBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$pageSize = 56; // int | Number of results to return per page.
$remoteId = 'remoteId_example'; // string | The API provider's ID for the given object.
$ticketId = 'ticketId_example'; // string | If provided, will only return comments for this ticket.

try {
    $result = $apiInstance->attachmentsList($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId, $ticketId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **createdAfter** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **createdBefore** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **includeDeletedData** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **includeRemoteData** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modifiedAfter** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modifiedBefore** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **pageSize** | **int**| Number of results to return per page. | [optional]
 **remoteId** | **string**| The API provider&#39;s ID for the given object. | [optional]
 **ticketId** | **string**| If provided, will only return comments for this ticket. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedAttachmentList**](../Model/PaginatedAttachmentList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentsMetaPostRetrieve()`

```php
attachmentsMetaPostRetrieve($xAccountToken): \OpenAPI\Client\Model\MetaResponse
```



Returns metadata for `TicketingAttachment` POSTs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->attachmentsMetaPostRetrieve($xAccountToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsMetaPostRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |

### Return type

[**\OpenAPI\Client\Model\MetaResponse**](../Model/MetaResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachmentsRetrieve()`

```php
attachmentsRetrieve($xAccountToken, $id, $includeRemoteData): \OpenAPI\Client\Model\Attachment
```



Returns an `Attachment` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AttachmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$includeRemoteData = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.

try {
    $result = $apiInstance->attachmentsRetrieve($xAccountToken, $id, $includeRemoteData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentsApi->attachmentsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **includeRemoteData** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]

### Return type

[**\OpenAPI\Client\Model\Attachment**](../Model/Attachment.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
