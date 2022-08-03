# MergeTicketingClient

The unified API for building rich integrations with multiple Ticketing platforms.

For more information, please visit [https://www.merge.dev/](https://www.merge.dev/).

## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/merge-api/merge-ticketing-php.git"
    }
  ],
  "require": {
    "merge-api/merge-ticketing-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/MergeTicketingClient/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: tokenAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');

$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\AccountDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$xAccountToken = 'xAccountToken_example'; // string | Token identifying the end user.

try {
    $result = $apiInstance->accountDetailsRetrieve($xAccountToken);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDetailsApi->accountDetailsRetrieve: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.merge.dev/api/ticketing/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountDetailsApi* | [**accountDetailsRetrieve**](docs/Api/AccountDetailsApi.md#accountdetailsretrieve) | **GET** /account-details | 
*AccountTokenApi* | [**accountTokenRetrieve**](docs/Api/AccountTokenApi.md#accounttokenretrieve) | **GET** /account-token/{public_token} | 
*AccountsApi* | [**accountsList**](docs/Api/AccountsApi.md#accountslist) | **GET** /accounts | 
*AccountsApi* | [**accountsRetrieve**](docs/Api/AccountsApi.md#accountsretrieve) | **GET** /accounts/{id} | 
*AttachmentsApi* | [**attachmentsCreate**](docs/Api/AttachmentsApi.md#attachmentscreate) | **POST** /attachments | 
*AttachmentsApi* | [**attachmentsList**](docs/Api/AttachmentsApi.md#attachmentslist) | **GET** /attachments | 
*AttachmentsApi* | [**attachmentsMetaPostRetrieve**](docs/Api/AttachmentsApi.md#attachmentsmetapostretrieve) | **GET** /attachments/meta/post | 
*AttachmentsApi* | [**attachmentsRetrieve**](docs/Api/AttachmentsApi.md#attachmentsretrieve) | **GET** /attachments/{id} | 
*AvailableActionsApi* | [**availableActionsRetrieve**](docs/Api/AvailableActionsApi.md#availableactionsretrieve) | **GET** /available-actions | 
*CommentsApi* | [**commentsCreate**](docs/Api/CommentsApi.md#commentscreate) | **POST** /comments | 
*CommentsApi* | [**commentsList**](docs/Api/CommentsApi.md#commentslist) | **GET** /comments | 
*CommentsApi* | [**commentsMetaPostRetrieve**](docs/Api/CommentsApi.md#commentsmetapostretrieve) | **GET** /comments/meta/post | 
*CommentsApi* | [**commentsRetrieve**](docs/Api/CommentsApi.md#commentsretrieve) | **GET** /comments/{id} | 
*ContactsApi* | [**contactsList**](docs/Api/ContactsApi.md#contactslist) | **GET** /contacts | 
*ContactsApi* | [**contactsRetrieve**](docs/Api/ContactsApi.md#contactsretrieve) | **GET** /contacts/{id} | 
*DeleteAccountApi* | [**deleteAccountCreate**](docs/Api/DeleteAccountApi.md#deleteaccountcreate) | **POST** /delete-account | 
*ForceResyncApi* | [**syncStatusResyncCreate**](docs/Api/ForceResyncApi.md#syncstatusresynccreate) | **POST** /sync-status/resync | 
*GenerateKeyApi* | [**generateKeyCreate**](docs/Api/GenerateKeyApi.md#generatekeycreate) | **POST** /generate-key | 
*IssuesApi* | [**issuesList**](docs/Api/IssuesApi.md#issueslist) | **GET** /issues | 
*IssuesApi* | [**issuesRetrieve**](docs/Api/IssuesApi.md#issuesretrieve) | **GET** /issues/{id} | 
*LinkTokenApi* | [**linkTokenCreate**](docs/Api/LinkTokenApi.md#linktokencreate) | **POST** /link-token | 
*LinkedAccountsApi* | [**linkedAccountsList**](docs/Api/LinkedAccountsApi.md#linkedaccountslist) | **GET** /linked-accounts | 
*PassthroughApi* | [**passthroughCreate**](docs/Api/PassthroughApi.md#passthroughcreate) | **POST** /passthrough | 
*ProjectsApi* | [**projectsList**](docs/Api/ProjectsApi.md#projectslist) | **GET** /projects | 
*ProjectsApi* | [**projectsRetrieve**](docs/Api/ProjectsApi.md#projectsretrieve) | **GET** /projects/{id} | 
*ProjectsApi* | [**projectsUsersList**](docs/Api/ProjectsApi.md#projectsuserslist) | **GET** /projects/{id}/users | 
*RegenerateKeyApi* | [**regenerateKeyCreate**](docs/Api/RegenerateKeyApi.md#regeneratekeycreate) | **POST** /regenerate-key | 
*SyncStatusApi* | [**syncStatusList**](docs/Api/SyncStatusApi.md#syncstatuslist) | **GET** /sync-status | 
*TagsApi* | [**tagsList**](docs/Api/TagsApi.md#tagslist) | **GET** /tags | 
*TagsApi* | [**tagsRetrieve**](docs/Api/TagsApi.md#tagsretrieve) | **GET** /tags/{id} | 
*TeamsApi* | [**teamsList**](docs/Api/TeamsApi.md#teamslist) | **GET** /teams | 
*TeamsApi* | [**teamsRetrieve**](docs/Api/TeamsApi.md#teamsretrieve) | **GET** /teams/{id} | 
*TicketsApi* | [**ticketsCollaboratorsList**](docs/Api/TicketsApi.md#ticketscollaboratorslist) | **GET** /tickets/{id}/collaborators | 
*TicketsApi* | [**ticketsCreate**](docs/Api/TicketsApi.md#ticketscreate) | **POST** /tickets | 
*TicketsApi* | [**ticketsList**](docs/Api/TicketsApi.md#ticketslist) | **GET** /tickets | 
*TicketsApi* | [**ticketsMetaPostRetrieve**](docs/Api/TicketsApi.md#ticketsmetapostretrieve) | **GET** /tickets/meta/post | 
*TicketsApi* | [**ticketsRetrieve**](docs/Api/TicketsApi.md#ticketsretrieve) | **GET** /tickets/{id} | 
*UsersApi* | [**usersList**](docs/Api/UsersApi.md#userslist) | **GET** /users | 
*UsersApi* | [**usersRetrieve**](docs/Api/UsersApi.md#usersretrieve) | **GET** /users/{id} | 
*WebhookReceiversApi* | [**webhookReceiversCreate**](docs/Api/WebhookReceiversApi.md#webhookreceiverscreate) | **POST** /webhook-receivers | 
*WebhookReceiversApi* | [**webhookReceiversList**](docs/Api/WebhookReceiversApi.md#webhookreceiverslist) | **GET** /webhook-receivers | 

## Models

- [Account](docs/Model/Account.md)
- [AccountDetails](docs/Model/AccountDetails.md)
- [AccountDetailsAndActions](docs/Model/AccountDetailsAndActions.md)
- [AccountDetailsAndActionsIntegration](docs/Model/AccountDetailsAndActionsIntegration.md)
- [AccountDetailsAndActionsStatusEnum](docs/Model/AccountDetailsAndActionsStatusEnum.md)
- [AccountIntegration](docs/Model/AccountIntegration.md)
- [AccountToken](docs/Model/AccountToken.md)
- [Attachment](docs/Model/Attachment.md)
- [AttachmentRequest](docs/Model/AttachmentRequest.md)
- [AvailableActions](docs/Model/AvailableActions.md)
- [CategoriesEnum](docs/Model/CategoriesEnum.md)
- [CategoryEnum](docs/Model/CategoryEnum.md)
- [Comment](docs/Model/Comment.md)
- [CommentEndpointRequest](docs/Model/CommentEndpointRequest.md)
- [CommentRequest](docs/Model/CommentRequest.md)
- [CommentResponse](docs/Model/CommentResponse.md)
- [Contact](docs/Model/Contact.md)
- [DataPassthroughRequest](docs/Model/DataPassthroughRequest.md)
- [DebugModeLog](docs/Model/DebugModeLog.md)
- [DebugModelLogSummary](docs/Model/DebugModelLogSummary.md)
- [EncodingEnum](docs/Model/EncodingEnum.md)
- [EndUserDetailsRequest](docs/Model/EndUserDetailsRequest.md)
- [ErrorValidationProblem](docs/Model/ErrorValidationProblem.md)
- [GenerateRemoteKeyRequest](docs/Model/GenerateRemoteKeyRequest.md)
- [Issue](docs/Model/Issue.md)
- [IssueStatusEnum](docs/Model/IssueStatusEnum.md)
- [LinkToken](docs/Model/LinkToken.md)
- [LinkedAccountStatus](docs/Model/LinkedAccountStatus.md)
- [MetaResponse](docs/Model/MetaResponse.md)
- [MethodEnum](docs/Model/MethodEnum.md)
- [ModelOperation](docs/Model/ModelOperation.md)
- [MultipartFormFieldRequest](docs/Model/MultipartFormFieldRequest.md)
- [PaginatedAccountDetailsAndActionsList](docs/Model/PaginatedAccountDetailsAndActionsList.md)
- [PaginatedAccountList](docs/Model/PaginatedAccountList.md)
- [PaginatedAttachmentList](docs/Model/PaginatedAttachmentList.md)
- [PaginatedCommentList](docs/Model/PaginatedCommentList.md)
- [PaginatedContactList](docs/Model/PaginatedContactList.md)
- [PaginatedIssueList](docs/Model/PaginatedIssueList.md)
- [PaginatedProjectList](docs/Model/PaginatedProjectList.md)
- [PaginatedSyncStatusList](docs/Model/PaginatedSyncStatusList.md)
- [PaginatedTagList](docs/Model/PaginatedTagList.md)
- [PaginatedTeamList](docs/Model/PaginatedTeamList.md)
- [PaginatedTicketList](docs/Model/PaginatedTicketList.md)
- [PaginatedUserList](docs/Model/PaginatedUserList.md)
- [Project](docs/Model/Project.md)
- [RemoteData](docs/Model/RemoteData.md)
- [RemoteKey](docs/Model/RemoteKey.md)
- [RemoteKeyForRegenerationRequest](docs/Model/RemoteKeyForRegenerationRequest.md)
- [RemoteResponse](docs/Model/RemoteResponse.md)
- [RequestFormatEnum](docs/Model/RequestFormatEnum.md)
- [SyncStatus](docs/Model/SyncStatus.md)
- [SyncStatusStatusEnum](docs/Model/SyncStatusStatusEnum.md)
- [Tag](docs/Model/Tag.md)
- [Team](docs/Model/Team.md)
- [Ticket](docs/Model/Ticket.md)
- [TicketEndpointRequest](docs/Model/TicketEndpointRequest.md)
- [TicketRequest](docs/Model/TicketRequest.md)
- [TicketResponse](docs/Model/TicketResponse.md)
- [TicketStatusEnum](docs/Model/TicketStatusEnum.md)
- [TicketingAttachmentEndpointRequest](docs/Model/TicketingAttachmentEndpointRequest.md)
- [TicketingAttachmentResponse](docs/Model/TicketingAttachmentResponse.md)
- [User](docs/Model/User.md)
- [ValidationProblemSource](docs/Model/ValidationProblemSource.md)
- [WarningValidationProblem](docs/Model/WarningValidationProblem.md)
- [WebhookReceiver](docs/Model/WebhookReceiver.md)
- [WebhookReceiverRequest](docs/Model/WebhookReceiverRequest.md)

## Authorization

### tokenAuth

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

hello@merge.dev

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0`
    - Package version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
