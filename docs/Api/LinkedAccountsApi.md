# OpenAPI\Client\LinkedAccountsApi

All URIs are relative to https://api.merge.dev/api/ticketing/v1.

Method | HTTP request | Description
------------- | ------------- | -------------
[**linkedAccountsList()**](LinkedAccountsApi.md#linkedAccountsList) | **GET** /linked-accounts | 


## `linkedAccountsList()`

```php
linkedAccountsList($category, $cursor, $endUserEmailAddress, $endUserOrganizationName, $endUserOriginId, $endUserOriginIds, $id, $ids, $integrationName, $isTestAccount, $pageSize, $status): \OpenAPI\Client\Model\PaginatedAccountDetailsAndActionsList
```



List linked accounts for your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\LinkedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'category_example'; // string
$cursor = cD0yMDIxLTAxLTA2KzAzJTNBMjQlM0E1My40MzQzMjYlMkIwMCUzQTAw; // string | The pagination cursor value.
$endUserEmailAddress = 'endUserEmailAddress_example'; // string | If provided, will only return linked accounts associated with the given email address.
$endUserOrganizationName = 'endUserOrganizationName_example'; // string | If provided, will only return linked accounts associated with the given organization name.
$endUserOriginId = 'endUserOriginId_example'; // string | If provided, will only return linked accounts associated with the given origin ID.
$endUserOriginIds = 'endUserOriginIds_example'; // string | Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once.
$id = 'id_example'; // string
$ids = 'ids_example'; // string | Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once.
$integrationName = 'integrationName_example'; // string | If provided, will only return linked accounts associated with the given integration name.
$isTestAccount = 'isTestAccount_example'; // string | If included, will only include test linked accounts. If not included, will only include non-test linked accounts.
$pageSize = 56; // int | Number of results to return per page.
$status = 'status_example'; // string | Filter by status. Options: `COMPLETE`, `INCOMPLETE`, `RELINK_NEEDED`

try {
    $result = $apiInstance->linkedAccountsList($category, $cursor, $endUserEmailAddress, $endUserOrganizationName, $endUserOriginId, $endUserOriginIds, $id, $ids, $integrationName, $isTestAccount, $pageSize, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LinkedAccountsApi->linkedAccountsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  | [optional]
 **cursor** | **string**| The pagination cursor value. | [optional]
 **endUserEmailAddress** | **string**| If provided, will only return linked accounts associated with the given email address. | [optional]
 **endUserOrganizationName** | **string**| If provided, will only return linked accounts associated with the given organization name. | [optional]
 **endUserOriginId** | **string**| If provided, will only return linked accounts associated with the given origin ID. | [optional]
 **endUserOriginIds** | **string**| Comma-separated list of EndUser origin IDs, making it possible to specify multiple EndUsers at once. | [optional]
 **id** | [**string**](../Model/.md)|  | [optional]
 **ids** | **string**| Comma-separated list of LinkedAccount IDs, making it possible to specify multiple LinkedAccounts at once. | [optional]
 **integrationName** | **string**| If provided, will only return linked accounts associated with the given integration name. | [optional]
 **isTestAccount** | **string**| If included, will only include test linked accounts. If not included, will only include non-test linked accounts. | [optional]
 **pageSize** | **int**| Number of results to return per page. | [optional]
 **status** | **string**| Filter by status. Options: &#x60;COMPLETE&#x60;, &#x60;INCOMPLETE&#x60;, &#x60;RELINK_NEEDED&#x60; | [optional]

### Return type

[**\OpenAPI\Client\Model\PaginatedAccountDetailsAndActionsList**](../Model/PaginatedAccountDetailsAndActionsList.md)

### Authorization

[tokenAuth](../../README.md#tokenAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
