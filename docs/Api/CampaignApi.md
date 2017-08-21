# CollingMedia\Infusionsoft\CampaignApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addContactsToCampaignSequenceUsingPOST**](CampaignApi.md#addContactsToCampaignSequenceUsingPOST) | **POST** /campaigns/{campaignId}/sequences/{sequenceId}/contacts/{contactId} | Add to Campaign Sequence
[**addContactsToCampaignSequenceUsingPOST1**](CampaignApi.md#addContactsToCampaignSequenceUsingPOST1) | **POST** /campaigns/{campaignId}/sequences/{sequenceId}/contacts | Add Multiple to Campaign Sequence
[**getAllCampaignsUsingGET**](CampaignApi.md#getAllCampaignsUsingGET) | **GET** /campaigns | List Campaigns
[**getCampaignUsingGET**](CampaignApi.md#getCampaignUsingGET) | **GET** /campaigns/{campaignId} | Retrieve a Campaign
[**removeContactsFromCampaignSequenceUsingDELETE**](CampaignApi.md#removeContactsFromCampaignSequenceUsingDELETE) | **DELETE** /campaigns/{campaignId}/sequences/{sequenceId}/contacts/{contactId} | Remove from Campaign Sequence
[**removeContactsFromCampaignSequenceUsingDELETE1**](CampaignApi.md#removeContactsFromCampaignSequenceUsingDELETE1) | **DELETE** /campaigns/{campaignId}/sequences/{sequenceId}/contacts | Remove Multiple from Campaign Sequence


# **addContactsToCampaignSequenceUsingPOST**
> addContactsToCampaignSequenceUsingPOST($campaign_id, $sequence_id, $contact_id)

Add to Campaign Sequence

Adds a single contact to a campaign sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\CampaignApi();
$campaign_id = 789; // int | campaignId
$sequence_id = 789; // int | sequenceId
$contact_id = 789; // int | contactId

try {
    $api_instance->addContactsToCampaignSequenceUsingPOST($campaign_id, $sequence_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->addContactsToCampaignSequenceUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| campaignId |
 **sequence_id** | **int**| sequenceId |
 **contact_id** | **int**| contactId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactsToCampaignSequenceUsingPOST1**
> addContactsToCampaignSequenceUsingPOST1($campaign_id, $sequence_id, $ids)

Add Multiple to Campaign Sequence

Adds a list of contacts to a campaign sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\CampaignApi();
$campaign_id = 789; // int | campaignId
$sequence_id = 789; // int | sequenceId
$ids = new \CollingMedia\Infusionsoft\Model\Ids(); // \CollingMedia\Infusionsoft\Model\Ids | ids

try {
    $api_instance->addContactsToCampaignSequenceUsingPOST1($campaign_id, $sequence_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->addContactsToCampaignSequenceUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| campaignId |
 **sequence_id** | **int**| sequenceId |
 **ids** | [**\CollingMedia\Infusionsoft\Model\Ids**](../Model/Ids.md)| ids |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllCampaignsUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2002 getAllCampaignsUsingGET($limit, $offset)

List Campaigns

Retrieves all campaigns for the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\CampaignApi();
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->getAllCampaignsUsingGET($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getAllCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2002Campaigns getCampaignUsingGET($campaign_id, $optional_properties)

Retrieve a Campaign

Retrieves a single campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\CampaignApi();
$campaign_id = 789; // int | campaignId
$optional_properties = array("optional_properties_example"); // string[] | Comma-delimited list of Campaign properties to include in the response. (The fields `goals` and `sequences` aren't included, by default.)

try {
    $result = $api_instance->getCampaignUsingGET($campaign_id, $optional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->getCampaignUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| campaignId |
 **optional_properties** | [**string[]**](../Model/string.md)| Comma-delimited list of Campaign properties to include in the response. (The fields &#x60;goals&#x60; and &#x60;sequences&#x60; aren&#39;t included, by default.) | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2002Campaigns**](../Model/InlineResponse2002Campaigns.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeContactsFromCampaignSequenceUsingDELETE**
> removeContactsFromCampaignSequenceUsingDELETE($campaign_id, $sequence_id, $contact_id)

Remove from Campaign Sequence

Removes a single contact from a campaign sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\CampaignApi();
$campaign_id = 789; // int | campaignId
$sequence_id = 789; // int | sequenceId
$contact_id = 789; // int | contactId

try {
    $api_instance->removeContactsFromCampaignSequenceUsingDELETE($campaign_id, $sequence_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->removeContactsFromCampaignSequenceUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| campaignId |
 **sequence_id** | **int**| sequenceId |
 **contact_id** | **int**| contactId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeContactsFromCampaignSequenceUsingDELETE1**
> removeContactsFromCampaignSequenceUsingDELETE1($campaign_id, $sequence_id, $ids)

Remove Multiple from Campaign Sequence

Removes a list of contacts from a campaign sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\CampaignApi();
$campaign_id = 789; // int | campaignId
$sequence_id = 789; // int | sequenceId
$ids = new \CollingMedia\Infusionsoft\Model\Ids1(); // \CollingMedia\Infusionsoft\Model\Ids1 | ids

try {
    $api_instance->removeContactsFromCampaignSequenceUsingDELETE1($campaign_id, $sequence_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->removeContactsFromCampaignSequenceUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| campaignId |
 **sequence_id** | **int**| sequenceId |
 **ids** | [**\CollingMedia\Infusionsoft\Model\Ids1**](../Model/Ids1.md)| ids |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

