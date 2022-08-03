# # EndUserDetailsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**endUserEmailAddress** | **string** | Unique ID for your end user. |
**endUserOrganizationName** | **string** | Your end user&#39;s organization. |
**endUserOriginId** | **string** | Your end user&#39;s email address. |
**categories** | [**\OpenAPI\Client\Model\CategoriesEnum[]**](CategoriesEnum.md) | The integration categories to show in Merge Link. |
**integration** | **string** | The slug of a specific pre-selected integration for this linking flow token. For examples of slugs, see https://www.merge.dev/docs/basics/integration-metadata/. | [optional]
**linkExpiryMins** | **int** | An integer number of minutes between [30, 720 or 10080 if for a Magic Link URL] for how long this token is valid. Defaults to 30. | [optional] [default to 30]
**shouldCreateMagicLinkUrl** | **bool** | Whether to generate a Magic Link URL. Defaults to false. For more information on Magic Link, see https://merge.dev/blog/product/integrations,-fast.-say-hello-to-magic-link/. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
