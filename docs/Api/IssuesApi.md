# OpenAPI\Client\IssuesApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**issuesList()**](IssuesApi.md#issuesList) | **GET** /issues | 
[**issuesRetrieve()**](IssuesApi.md#issuesRetrieve) | **GET** /issues/{id} | 


## `issuesList()`

```php
issuesList($accountToken, $cursor, $endDate, $endUserOrganizationName, $firstIncidentTimeAfter, $firstIncidentTimeBefore, $includeMuted, $integrationName, $lastIncidentTimeAfter, $lastIncidentTimeBefore, $pageSize, $startDate, $status): \OpenAPI\Client\Model\PaginatedIssueList
```



Gets issues.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accountToken = 'accountToken_example'; // string
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$endDate = 'endDate_example'; // string | If included, will only include issues whose most recent action occurred before this time
$endUserOrganizationName = 'endUserOrganizationName_example'; // string
$firstIncidentTimeAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was after this datetime.
$firstIncidentTimeBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was before this datetime.
$includeMuted = 'includeMuted_example'; // string | If True, will include muted issues
$integrationName = 'integrationName_example'; // string
$lastIncidentTimeAfter = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was after this datetime.
$lastIncidentTimeBefore = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | If provided, will only return issues whose first incident time was before this datetime.
$pageSize = 56; // int | Number of results to return per page.
$startDate = 'startDate_example'; // string | If included, will only include issues whose most recent action occurred after this time
$status = 'status_example'; // string

try {
    $result = $apiInstance->issuesList($accountToken, $cursor, $endDate, $endUserOrganizationName, $firstIncidentTimeAfter, $firstIncidentTimeBefore, $includeMuted, $integrationName, $lastIncidentTimeAfter, $lastIncidentTimeBefore, $pageSize, $startDate, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->issuesList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountToken** | **string**|  | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **endDate** | **string**| If included, will only include issues whose most recent action occurred before this time | [optional]
 **endUserOrganizationName** | **string**|  | [optional]
 **firstIncidentTimeAfter** | **\DateTime**| If provided, will only return issues whose first incident time was after this datetime. | [optional]
 **firstIncidentTimeBefore** | **\DateTime**| If provided, will only return issues whose first incident time was before this datetime. | [optional]
 **includeMuted** | **string**| If True, will include muted issues | [optional]
 **integrationName** | **string**|  | [optional]
 **lastIncidentTimeAfter** | **\DateTime**| If provided, will only return issues whose first incident time was after this datetime. | [optional]
 **lastIncidentTimeBefore** | **\DateTime**| If provided, will only return issues whose first incident time was before this datetime. | [optional]
 **pageSize** | **int**| Number of results to return per page. | [optional]
 **startDate** | **string**| If included, will only include issues whose most recent action occurred after this time | [optional]
 **status** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedIssueList**](../Model/PaginatedIssueList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `issuesRetrieve()`

```php
issuesRetrieve($id): \OpenAPI\Client\Model\Issue
```



Get a specific issue.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IssuesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->issuesRetrieve($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IssuesApi->issuesRetrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\OpenAPI\Client\Model\Issue**](../Model/Issue.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
