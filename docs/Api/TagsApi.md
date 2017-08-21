# CollingMedia\Infusionsoft\TagsApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyTagToContactIdsUsingPOST**](TagsApi.md#applyTagToContactIdsUsingPOST) | **POST** /tags/{tagId}/contacts | Apply Tag to Contacts
[**listContactsForTagIdUsingGET**](TagsApi.md#listContactsForTagIdUsingGET) | **GET** /tags/{tagId}/contacts | List Tagged Contacts
[**removeTagFromContactIdUsingDELETE**](TagsApi.md#removeTagFromContactIdUsingDELETE) | **DELETE** /tags/{tagId}/contacts/{contactId} | Remove Tag from Contact
[**removeTagFromContactIdsUsingDELETE**](TagsApi.md#removeTagFromContactIdsUsingDELETE) | **DELETE** /tags/{tagId}/contacts | Remove Tag from Contacts


# **applyTagToContactIdsUsingPOST**
> \CollingMedia\Infusionsoft\Model\InlineResponse2006[] applyTagToContactIdsUsingPOST($tag_id, $ids)

Apply Tag to Contacts

Apply a tag to a list of contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TagsApi();
$tag_id = 789; // int | tagId
$ids = new \CollingMedia\Infusionsoft\Model\Ids2(); // \CollingMedia\Infusionsoft\Model\Ids2 | ids

try {
    $result = $api_instance->applyTagToContactIdsUsingPOST($tag_id, $ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->applyTagToContactIdsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| tagId |
 **ids** | [**\CollingMedia\Infusionsoft\Model\Ids2**](../Model/Ids2.md)| ids |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2006[]**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContactsForTagIdUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20014 listContactsForTagIdUsingGET($tag_id, $limit, $offset)

List Tagged Contacts

Retrieves a list of contacts that have the given tag applied

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TagsApi();
$tag_id = 789; // int | tagId
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->listContactsForTagIdUsingGET($tag_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->listContactsForTagIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| tagId |
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagFromContactIdUsingDELETE**
> removeTagFromContactIdUsingDELETE($tag_id, $contact_id)

Remove Tag from Contact

Remove a tag from a Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TagsApi();
$tag_id = 789; // int | tagId
$contact_id = 789; // int | contactId

try {
    $api_instance->removeTagFromContactIdUsingDELETE($tag_id, $contact_id);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->removeTagFromContactIdUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| tagId |
 **contact_id** | **int**| contactId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagFromContactIdsUsingDELETE**
> removeTagFromContactIdsUsingDELETE($tag_id, $ids)

Remove Tag from Contacts

Remove a tag from a list of contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TagsApi();
$tag_id = 789; // int | tagId
$ids = array(56); // int[] | ids

try {
    $api_instance->removeTagFromContactIdsUsingDELETE($tag_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->removeTagFromContactIdsUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_id** | **int**| tagId |
 **ids** | [**int[]**](../Model/int.md)| ids |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

