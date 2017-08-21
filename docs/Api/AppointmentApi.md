# CollingMedia\Infusionsoft\AppointmentApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appointmentsUsingGET**](AppointmentApi.md#appointmentsUsingGET) | **GET** /appointments | List Appointments
[**createAppointmentUsingPOST**](AppointmentApi.md#createAppointmentUsingPOST) | **POST** /appointments | Create an Appointment
[**loadAppointmentUsingGET**](AppointmentApi.md#loadAppointmentUsingGET) | **GET** /appointments/{appointmentId} | Retrieve an Appointment
[**removeAppointmentUsingDELETE**](AppointmentApi.md#removeAppointmentUsingDELETE) | **DELETE** /appointments/{appointmentId} | Delete an Appointment
[**replaceAppointmentUsingPUT**](AppointmentApi.md#replaceAppointmentUsingPUT) | **PUT** /appointments/{appointmentId} | Replace an Appointment
[**searchUsingGET**](AppointmentApi.md#searchUsingGET) | **GET** /appointments/search | Search Appointments
[**syncUsingGET**](AppointmentApi.md#syncUsingGET) | **GET** /appointments/sync | Retrieve Synced Appointments
[**updateAppointmentUsingPATCH**](AppointmentApi.md#updateAppointmentUsingPATCH) | **PATCH** /appointments/{appointmentId} | Update an Appointment


# **appointmentsUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse200 appointmentsUsingGET($since, $until, $limit, $offset)

List Appointments

Retrieves all appointments for the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->appointmentsUsingGET($since, $until, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->appointmentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAppointmentUsingPOST**
> \CollingMedia\Infusionsoft\Model\InlineResponse200Appointments createAppointmentUsingPOST($appointment)

Create an Appointment

Creates a new appointment as the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$appointment = new \CollingMedia\Infusionsoft\Model\Appointment(); // \CollingMedia\Infusionsoft\Model\Appointment | appointment

try {
    $result = $api_instance->createAppointmentUsingPOST($appointment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->createAppointmentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment** | [**\CollingMedia\Infusionsoft\Model\Appointment**](../Model/Appointment.md)| appointment |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse200Appointments**](../Model/InlineResponse200Appointments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadAppointmentUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse200Appointments loadAppointmentUsingGET($appointment_id)

Retrieve an Appointment

Retrieves a specific appointment belonging to the authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$appointment_id = "appointment_id_example"; // string | appointmentId

try {
    $result = $api_instance->loadAppointmentUsingGET($appointment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->loadAppointmentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| appointmentId |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse200Appointments**](../Model/InlineResponse200Appointments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeAppointmentUsingDELETE**
> removeAppointmentUsingDELETE($appointment_id)

Delete an Appointment

Deletes the specified appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$appointment_id = "appointment_id_example"; // string | appointmentId

try {
    $api_instance->removeAppointmentUsingDELETE($appointment_id);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->removeAppointmentUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| appointmentId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAppointmentUsingPUT**
> \CollingMedia\Infusionsoft\Model\InlineResponse200Appointments replaceAppointmentUsingPUT($appointment_id, $appointment)

Replace an Appointment

Replaces all values of a given appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$appointment_id = "appointment_id_example"; // string | appointmentId
$appointment = new \CollingMedia\Infusionsoft\Model\Appointment1(); // \CollingMedia\Infusionsoft\Model\Appointment1 | appointment

try {
    $result = $api_instance->replaceAppointmentUsingPUT($appointment_id, $appointment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->replaceAppointmentUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| appointmentId |
 **appointment** | [**\CollingMedia\Infusionsoft\Model\Appointment1**](../Model/Appointment1.md)| appointment |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse200Appointments**](../Model/InlineResponse200Appointments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse200 searchUsingGET($since, $until, $limit, $offset)

Search Appointments

Retrieves all appointments belonging to the authenticated user for the specified date range

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->searchUsingGET($since, $until, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->searchUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse2001 syncUsingGET($sync_token, $limit, $offset)

Retrieve Synced Appointments

The Sync endpoint returns a set of appointments that have been updated or created since the last result set was retrieved, minus any appointments that have been deleted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$sync_token = "sync_token_example"; // string | sync_token
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->syncUsingGET($sync_token, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->syncUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_token** | **string**| sync_token | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAppointmentUsingPATCH**
> \CollingMedia\Infusionsoft\Model\InlineResponse200Appointments updateAppointmentUsingPATCH($appointment_id, $appointment)

Update an Appointment

Updates the provided values of a given appointment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\AppointmentApi();
$appointment_id = "appointment_id_example"; // string | appointmentId
$appointment = new \CollingMedia\Infusionsoft\Model\Appointment2(); // \CollingMedia\Infusionsoft\Model\Appointment2 | appointment

try {
    $result = $api_instance->updateAppointmentUsingPATCH($appointment_id, $appointment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppointmentApi->updateAppointmentUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **appointment_id** | **string**| appointmentId |
 **appointment** | [**\CollingMedia\Infusionsoft\Model\Appointment2**](../Model/Appointment2.md)| appointment |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse200Appointments**](../Model/InlineResponse200Appointments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

