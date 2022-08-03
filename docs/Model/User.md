# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional] [readonly]
**remoteId** | **string** | The third-party API ID of the matching object. | [optional]
**name** | **string** | The user&#39;s name. | [optional]
**emailAddress** | **string** | The user&#39;s email address. | [optional]
**isActive** | **bool** | Whether or not the user is active. | [optional]
**teams** | **string[]** |  | [optional]
**remoteData** | [**\OpenAPI\Client\Model\RemoteData[]**](RemoteData.md) |  | [optional] [readonly]
**remoteWasDeleted** | **bool** | Indicates whether or not this object has been deleted by third party webhooks. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
