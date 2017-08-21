# CollingMedia\Infusionsoft\ContactApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**applyTagsToContactIdUsingPOST**](ContactApi.md#applyTagsToContactIdUsingPOST) | **POST** /contacts/{contactId}/tags | Apply Tags
[**createContactUsingPOST**](ContactApi.md#createContactUsingPOST) | **POST** /contacts | Create a Contact
[**createOrUpdateContactUsingPUT**](ContactApi.md#createOrUpdateContactUsingPUT) | **PUT** /contacts | Create or Update a Contact
[**deleteContactUsingDELETE**](ContactApi.md#deleteContactUsingDELETE) | **DELETE** /contacts/{contactId} | Delete a Contact
[**listAppliedTagsUsingGET**](ContactApi.md#listAppliedTagsUsingGET) | **GET** /contacts/{contactId}/tags | List Applied Tags
[**listContactsUsingGET**](ContactApi.md#listContactsUsingGET) | **GET** /contacts | List Contacts
[**listCustomFieldsUsingGET**](ContactApi.md#listCustomFieldsUsingGET) | **GET** /contactCustomFields | List Contact Custom Fields
[**loadUsingGET**](ContactApi.md#loadUsingGET) | **GET** /contacts/{contactId} | Retrieve a Contact
[**removeTagsFromContactUsingDELETE**](ContactApi.md#removeTagsFromContactUsingDELETE) | **DELETE** /contacts/{contactId}/tags/{tagId} | Remove Applied Tag
[**removeTagsFromContactUsingDELETE1**](ContactApi.md#removeTagsFromContactUsingDELETE1) | **DELETE** /contacts/{contactId}/tags | Remove Applied Tags
[**updateContactUsingPATCH**](ContactApi.md#updateContactUsingPATCH) | **PATCH** /contacts/{contactId} | Update a Contact


# **applyTagsToContactIdUsingPOST**
> \CollingMedia\Infusionsoft\Model\InlineResponse2006[] applyTagsToContactIdUsingPOST($contact_id, $tag_ids)

Apply Tags

Apply a list of tags to a given contact record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId
$tag_ids = new \CollingMedia\Infusionsoft\Model\TagIds(); // \CollingMedia\Infusionsoft\Model\TagIds | tagIds

try {
    $result = $api_instance->applyTagsToContactIdUsingPOST($contact_id, $tag_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->applyTagsToContactIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |
 **tag_ids** | [**\CollingMedia\Infusionsoft\Model\TagIds**](../Model/TagIds.md)| tagIds |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2006[]**](../Model/InlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createContactUsingPOST**
> \CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts createContactUsingPOST($contact)

Create a Contact

Creates a new contact as the authenticated user. NB: Contact must contain at least one item in `email_addresses` or `phone_numbers` and `country_code` is required if `region` is specified.  You may opt-in or mark a Contact as _Marketable_ by including the following field in the request JSON with an opt-in reason. (This field is also shown in the complete request body sample.) The reason you provide here will help with compliance. Example reasons: \"Customer opted-in through webform\", \"Contact gave explicit permission.\"  ```json \"opt_in_reason\": \"your reason for opt-in\" ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact = new \CollingMedia\Infusionsoft\Model\Contact1(); // \CollingMedia\Infusionsoft\Model\Contact1 | contact

try {
    $result = $api_instance->createContactUsingPOST($contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createContactUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\CollingMedia\Infusionsoft\Model\Contact1**](../Model/Contact1.md)| contact | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts**](../Model/InlineResponse2004Contacts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createOrUpdateContactUsingPUT**
> \CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts createOrUpdateContactUsingPUT($contact)

Create or Update a Contact

Creates a new contact or updates a contact as the authenticated user. NB: New Contacts must contain at least one item in `email_addresses` or `phone_numbers` and `country_code` is required if `region` is specified. Existing Contacts are updated with only the values provided in the request. Accepts a `duplicate_option` which performs duplicate checking by one of the following options: `Email`, `EmailAndName`, if a match is found using the option provided, the existing contact will be updated. If an existing contact was not found using the `duplicate_option` provided, a new contact record will be created.  You may opt-in or mark a Contact as _Marketable_ by including the following field in the request JSON with an opt-in reason. (This field is also shown in the complete request body sample.) The reason you provide here will help with compliance. Example reasons: \"Customer opted-in through webform\", \"Contact gave explicit permission.\"  ```json \"opt_in_reason\": \"your reason for opt-in\" ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact = new \CollingMedia\Infusionsoft\Model\Contact(); // \CollingMedia\Infusionsoft\Model\Contact | contact

try {
    $result = $api_instance->createOrUpdateContactUsingPUT($contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->createOrUpdateContactUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact** | [**\CollingMedia\Infusionsoft\Model\Contact**](../Model/Contact.md)| contact | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts**](../Model/InlineResponse2004Contacts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContactUsingDELETE**
> deleteContactUsingDELETE($contact_id)

Delete a Contact

Deletes the specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId

try {
    $api_instance->deleteContactUsingDELETE($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContactUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAppliedTagsUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2005 listAppliedTagsUsingGET($contact_id, $limit, $offset)

List Applied Tags

Retrieves a list of tags applied to a given contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->listAppliedTagsUsingGET($contact_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listAppliedTagsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listContactsUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2004 listContactsUsingGET($limit, $offset, $email, $given_name, $family_name, $order)

List Contacts

Retrieves a list of all contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$email = "email_example"; // string | Optional email address to query on
$given_name = "given_name_example"; // string | Optional first name or forename to query on
$family_name = "family_name_example"; // string | Optional last name or surname to query on
$order = "order_example"; // string | Attribute to order items by

try {
    $result = $api_instance->listContactsUsingGET($limit, $offset, $email, $given_name, $family_name, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listContactsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **email** | **string**| Optional email address to query on | [optional]
 **given_name** | **string**| Optional first name or forename to query on | [optional]
 **family_name** | **string**| Optional last name or surname to query on | [optional]
 **order** | **string**| Attribute to order items by | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomFieldsUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2003[] listCustomFieldsUsingGET()

List Contact Custom Fields

Retrieves a list of custom fields for Contacts

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();

try {
    $result = $api_instance->listCustomFieldsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->listCustomFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2003[]**](../Model/InlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts loadUsingGET($contact_id, $optional_properties)

Retrieve a Contact

Retrieves a single contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId
$optional_properties = array("optional_properties_example"); // string[] | Comma-delimited list of Contact properties to include in the response. (Some fields such as `lead_source_id`, `custom_fields`, and `job_title` aren't included, by default.)

try {
    $result = $api_instance->loadUsingGET($contact_id, $optional_properties);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->loadUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |
 **optional_properties** | [**string[]**](../Model/string.md)| Comma-delimited list of Contact properties to include in the response. (Some fields such as &#x60;lead_source_id&#x60;, &#x60;custom_fields&#x60;, and &#x60;job_title&#x60; aren&#39;t included, by default.) | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts**](../Model/InlineResponse2004Contacts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagsFromContactUsingDELETE**
> removeTagsFromContactUsingDELETE($contact_id, $tag_id)

Remove Applied Tag

Removes a tag from the given contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId
$tag_id = 789; // int | tagId

try {
    $api_instance->removeTagsFromContactUsingDELETE($contact_id, $tag_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->removeTagsFromContactUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |
 **tag_id** | **int**| tagId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTagsFromContactUsingDELETE1**
> removeTagsFromContactUsingDELETE1($contact_id, $ids)

Remove Applied Tags

Removes a list of tags from the given contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId
$ids = "ids_example"; // string | ids

try {
    $api_instance->removeTagsFromContactUsingDELETE1($contact_id, $ids);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->removeTagsFromContactUsingDELETE1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |
 **ids** | **string**| ids |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContactUsingPATCH**
> \CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts updateContactUsingPATCH($contact_id, $contact)

Update a Contact

Updates a contact with only the values provided in the request.  You may opt-in or mark a Contact as _Marketable_ by including the following field in the request JSON with an opt-in reason. (This field is also shown in the complete request body sample.) The reason you provide here will help with compliance. Example reasons: \"Customer opted-in through webform\", \"Contact gave explicit permission.\"  ```json \"opt_in_reason\": \"your reason for opt-in\" ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\ContactApi();
$contact_id = 789; // int | contactId
$contact = new \CollingMedia\Infusionsoft\Model\Contact2(); // \CollingMedia\Infusionsoft\Model\Contact2 | contact

try {
    $result = $api_instance->updateContactUsingPATCH($contact_id, $contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContactUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contactId |
 **contact** | [**\CollingMedia\Infusionsoft\Model\Contact2**](../Model/Contact2.md)| contact | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2004Contacts**](../Model/InlineResponse2004Contacts.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

