# CollingMedia\Infusionsoft\OpportunityApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOpportunityUsingPOST**](OpportunityApi.md#createOpportunityUsingPOST) | **POST** /opportunities | Create an Opportunity
[**getOpportunityUsingGET**](OpportunityApi.md#getOpportunityUsingGET) | **GET** /opportunities/{opportunityId} | Retrieve an Opportunity
[**getStagePipelineUsingGET**](OpportunityApi.md#getStagePipelineUsingGET) | **GET** /opportunity/stage_pipeline | List Opportunity Stage Pipeline
[**listOpportunitiesUsingGET**](OpportunityApi.md#listOpportunitiesUsingGET) | **GET** /opportunities | List Opportunities
[**replaceOpportunityUsingPUT**](OpportunityApi.md#replaceOpportunityUsingPUT) | **PUT** /opportunities | Replace an Opportunity
[**updateOpportunityUsingPATCH**](OpportunityApi.md#updateOpportunityUsingPATCH) | **PATCH** /opportunities/{opportunityId} | Update an Opportunity


# **createOpportunityUsingPOST**
> \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities createOpportunityUsingPOST($opportunity)

Create an Opportunity

Creates a new opportunity as the authenticated user. NB: Opportunity must contain values for `opportunity_title`, `contact`, and `stage`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\OpportunityApi();
$opportunity = new \CollingMedia\Infusionsoft\Model\Opportunity1(); // \CollingMedia\Infusionsoft\Model\Opportunity1 | opportunity

try {
    $result = $api_instance->createOpportunityUsingPOST($opportunity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->createOpportunityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **opportunity** | [**\CollingMedia\Infusionsoft\Model\Opportunity1**](../Model/Opportunity1.md)| opportunity | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities**](../Model/InlineResponse2008Opportunities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunityUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities getOpportunityUsingGET($opportunity_id)

Retrieve an Opportunity

Retrives a single opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\OpportunityApi();
$opportunity_id = 789; // int | opportunityId

try {
    $result = $api_instance->getOpportunityUsingGET($opportunity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getOpportunityUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **opportunity_id** | **int**| opportunityId |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities**](../Model/InlineResponse2008Opportunities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStagePipelineUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2009[] getStagePipelineUsingGET()

List Opportunity Stage Pipeline

Retrieves a list of all opportunity stages with pipeline details

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\OpportunityApi();

try {
    $result = $api_instance->getStagePipelineUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->getStagePipelineUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2009[]**](../Model/InlineResponse2009.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOpportunitiesUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2008 listOpportunitiesUsingGET($limit, $offset, $user_id, $stage_id, $search_term, $order)

List Opportunities

Retrieves a list of all opportunities

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\OpportunityApi();
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$user_id = 789; // int | Returns opportunities for the provided user id
$stage_id = 789; // int | Returns opportunities for the provided stage id
$search_term = "search_term_example"; // string | Returns opportunities that match any of the contact's `given_name`, `family_name`, `company_name`, and `email_addresses` (searches `EMAIL1` only) fields as well as `opportunity_title`
$order = "order_example"; // string | Attribute to order items by

try {
    $result = $api_instance->listOpportunitiesUsingGET($limit, $offset, $user_id, $stage_id, $search_term, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->listOpportunitiesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **user_id** | **int**| Returns opportunities for the provided user id | [optional]
 **stage_id** | **int**| Returns opportunities for the provided stage id | [optional]
 **search_term** | **string**| Returns opportunities that match any of the contact&#39;s &#x60;given_name&#x60;, &#x60;family_name&#x60;, &#x60;company_name&#x60;, and &#x60;email_addresses&#x60; (searches &#x60;EMAIL1&#x60; only) fields as well as &#x60;opportunity_title&#x60; | [optional]
 **order** | **string**| Attribute to order items by | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceOpportunityUsingPUT**
> \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities replaceOpportunityUsingPUT($opportunity)

Replace an Opportunity

Replaces all values of a given opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\OpportunityApi();
$opportunity = new \CollingMedia\Infusionsoft\Model\Opportunity(); // \CollingMedia\Infusionsoft\Model\Opportunity | opportunity

try {
    $result = $api_instance->replaceOpportunityUsingPUT($opportunity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->replaceOpportunityUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **opportunity** | [**\CollingMedia\Infusionsoft\Model\Opportunity**](../Model/Opportunity.md)| opportunity | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities**](../Model/InlineResponse2008Opportunities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOpportunityUsingPATCH**
> \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities updateOpportunityUsingPATCH($opportunity_id, $opportunity)

Update an Opportunity

Updates an opportunity with only the values provided in the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\OpportunityApi();
$opportunity_id = 789; // int | opportunityId
$opportunity = new \CollingMedia\Infusionsoft\Model\Opportunity2(); // \CollingMedia\Infusionsoft\Model\Opportunity2 | opportunity

try {
    $result = $api_instance->updateOpportunityUsingPATCH($opportunity_id, $opportunity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunityApi->updateOpportunityUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **opportunity_id** | **int**| opportunityId |
 **opportunity** | [**\CollingMedia\Infusionsoft\Model\Opportunity2**](../Model/Opportunity2.md)| opportunity | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities**](../Model/InlineResponse2008Opportunities.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

