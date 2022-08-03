# OpenAPI\Client\ProjectsApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectsList()**](ProjectsApi.md#projectsList) | **GET** /projects | 
[**projectsRetrieve()**](ProjectsApi.md#projectsRetrieve) | **GET** /projects/{id} | 
[**projectsUsersList()**](ProjectsApi.md#projectsUsersList) | **GET** /projects/{id}/users | 


## `projectsList()`

```php
projectsList($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId): \OpenAPI\Client\Model\PaginatedProjectList
```



Returns a list of `Project` objects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
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

try {
    $result = $apiInstance->projectsList($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsList: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\OpenAPI\Client\Model\PaginatedProjectList**](../Model/PaginatedProjectList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsRetrieve()`

```php
projectsRetrieve($xAccountToken, $id, $includeRemoteData): \OpenAPI\Client\Model\Project
```



Returns a `Project` object with the given `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.
$id = 'id_example'; // string
$includeRemoteData = True; // bool | Whether to include the original data Merge fetched from the third-party to produce these models.

try {
    $result = $apiInstance->projectsRetrieve($xAccountToken, $id, $includeRemoteData);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **xAccountToken** | **string**| Token identifying the end user. |
 **id** | [**string**](../Model/.md)|  |
 **includeRemoteData** | **bool**| Whether to include the original data Merge fetched from the third-party to produce these models. | [optional]

### Return type

[**\OpenAPI\Client\Model\Project**](../Model/Project.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsUsersList()`

```php
projectsUsersList($xAccountToken, $id, $cursor, $includeRemoteData, $pageSize): \OpenAPI\Client\Model\PaginatedUserList
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


$apiInstance = new OpenAPI\Client\Api\ProjectsApi(
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
    $result = $apiInstance->projectsUsersList($xAccountToken, $id, $cursor, $includeRemoteData, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectsApi->projectsUsersList: ', $e->getMessage(), PHP_EOL;
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
