# OpenAPI\Client\TicketsApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ticketsCollaboratorsList()**](TicketsApi.md#ticketsCollaboratorsList) | **GET** /tickets/{id}/collaborators | 
[**ticketsCreate()**](TicketsApi.md#ticketsCreate) | **POST** /tickets | 
[**ticketsList()**](TicketsApi.md#ticketsList) | **GET** /tickets | 
[**ticketsMetaPostRetrieve()**](TicketsApi.md#ticketsMetaPostRetrieve) | **GET** /tickets/meta/post | 
[**ticketsRetrieve()**](TicketsApi.md#ticketsRetrieve) | **GET** /tickets/{id} | 


## `ticketsCollaboratorsList()`

```php
ticketsCollaboratorsList($xAccountToken, $id, $cursor, $includeRemoteData, $pageSize): \OpenAPI\Client\Model\PaginatedUserList
```



Returns a `User` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$includeRemoteData = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$pageSize = 56; // int | Number of results to return per page.

try {
    $result = $apiInstance->ticketsCollaboratorsList($xAccountToken, $id, $cursor, $includeRemoteData, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsCollaboratorsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **cursor** | **string**| The pagination cursor value. | [optional]
 **includeRemoteData** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **pageSize** | **int**| Number of results to return per page. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedUserList**](../Model/PaginatedUserList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsCreate()`

```php
ticketsCreate($xAccountToken, $ticketEndpointRequest, $isDebugMode, $runAsync): \OpenAPI\Client\Model\TicketResponse
```



Creates a `Ticket` object with the given values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$ticketEndpointRequest = new \OpenAPI\Client\Model\TicketEndpointRequest(); // \OpenAPI\Client\Model\TicketEndpointRequest
$isDebugMode = True; // bool | Whether to include debug fields (such as log file links) in the response.
$runAsync = True; // bool | Whether or not third-party updates should be run asynchronously.

try {
    $result = $apiInstance->ticketsCreate($xAccountToken, $ticketEndpointRequest, $isDebugMode, $runAsync);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **ticketEndpointRequest** | [**\OpenAPI\Client\Model\TicketEndpointRequest**](../Model/TicketEndpointRequest.md)|  |
 **isDebugMode** | **bool**| Whether to include debug fields (such as log file links) in the response. | [optional]
 **runAsync** | **bool**| Whether or not third-party updates should be run asynchronously. | [optional]

### Return type

[**\OpenAPI\Client\Model\TicketResponse**](../Model/TicketResponse.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsList()`

```php
ticketsList($xAccountToken, $accountId, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $projectId, $remoteFields, $remoteId): \OpenAPI\Client\Model\PaginatedTicketList
```



Returns a list of `Ticket` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$accountId = 'accountId_example'; // string | If provided, will only return tickets for this account.
$createdAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created after this datetime.
$createdBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects created before this datetime.
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$includeDeletedData = True; // bool | Whether to include data that was marked as deleted by third party webhooks.
$includeRemoteData = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$modifiedAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified after this datetime.
$modifiedBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return objects modified before this datetime.
$pageSize = 56; // int | Number of results to return per page.
$projectId = 'projectId_example'; // string | If provided, will only return tickets for this project.
$remoteFields = status; // string | Which fields should be returned in non-normalized form.
$remoteId = 'remoteId_example'; // string | The API provider's ID for the given object.

try {
    $result = $apiInstance->ticketsList($xAccountToken, $accountId, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $projectId, $remoteFields, $remoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **accountId** | **string**| If provided, will only return tickets for this account. | [optional]
 **createdAfter** | **\DateTime**| If provided, will only return objects created after this datetime. | [optional]
 **createdBefore** | **\DateTime**| If provided, will only return objects created before this datetime. | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **includeDeletedData** | **bool**| Whether to include data that was marked as deleted by third party webhooks. | [optional]
 **includeRemoteData** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **modifiedAfter** | **\DateTime**| If provided, will only return objects modified after this datetime. | [optional]
 **modifiedBefore** | **\DateTime**| If provided, will only return objects modified before this datetime. | [optional]
 **pageSize** | **int**| Number of results to return per page. | [optional]
 **projectId** | **string**| If provided, will only return tickets for this project. | [optional]
 **remoteFields** | **string**| Which fields should be returned in non-normalized form. | [optional]
 **remoteId** | **string**| The API provider&#39;s ID for the given object. | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedTicketList**](../Model/PaginatedTicketList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ticketsMetaPostRetrieve()`

```php
ticketsMetaPostRetrieve($xAccountToken): \OpenAPI\Client\Model\MetaResponse
```



Returns metadata for `Ticket` POSTs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->ticketsMetaPostRetrieve($xAccountToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsMetaPostRetrieve: ', $e->getMessage(), PHP_EOL;
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

## `ticketsRetrieve()`

```php
ticketsRetrieve($xAccountToken, $id, $includeRemoteData, $remoteFields): \OpenAPI\Client\Model\Ticket
```



Returns a `Ticket` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TicketsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$includeRemoteData = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.
$remoteFields = status; // string | Which fields should be returned in non-normalized form.

try {
    $result = $apiInstance->ticketsRetrieve($xAccountToken, $id, $includeRemoteData, $remoteFields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TicketsApi->ticketsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **includeRemoteData** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]
 **remoteFields** | **string**| Which fields should be returned in non-normalized form. | [optional]

### Return type

[**\OpenAPI\Client\Model\Ticket**](../Model/Ticket.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
