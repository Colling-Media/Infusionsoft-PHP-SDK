# CollingMedia\Infusionsoft\TaskApi

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createTaskUsingPOST**](TaskApi.md#createTaskUsingPOST) | **POST** /tasks | Create a Task
[**loadTaskUsingGET**](TaskApi.md#loadTaskUsingGET) | **GET** /tasks/{taskId} | Retrieve a Task
[**removeTaskUsingDELETE**](TaskApi.md#removeTaskUsingDELETE) | **DELETE** /tasks/{taskId} | Delete a Task
[**replaceTaskUsingPUT**](TaskApi.md#replaceTaskUsingPUT) | **PUT** /tasks/{taskId} | Replace a Task
[**searchUsingGET4**](TaskApi.md#searchUsingGET4) | **GET** /tasks/search | Search Tasks
[**syncUsingGET2**](TaskApi.md#syncUsingGET2) | **GET** /tasks/sync | Retrieve Synced Tasks
[**tasksUsingGET**](TaskApi.md#tasksUsingGET) | **GET** /tasks | List Tasks
[**updateTaskUsingPATCH**](TaskApi.md#updateTaskUsingPATCH) | **PATCH** /tasks/{taskId} | Update a Task


# **createTaskUsingPOST**
> \CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks createTaskUsingPOST($task)

Create a Task

Creates a new task as the authenticated user. NB: Contact must contain at least one item in the fields `title` and `due_date`. All other attributes are optional

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$task = new \CollingMedia\Infusionsoft\Model\Task(); // \CollingMedia\Infusionsoft\Model\Task | task

try {
    $result = $api_instance->createTaskUsingPOST($task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->createTaskUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task** | [**\CollingMedia\Infusionsoft\Model\Task**](../Model/Task.md)| task |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks**](../Model/InlineResponse20015Tasks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loadTaskUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks loadTaskUsingGET($task_id)

Retrieve a Task

Retrieves a single task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$task_id = "task_id_example"; // string | taskId

try {
    $result = $api_instance->loadTaskUsingGET($task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->loadTaskUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| taskId |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks**](../Model/InlineResponse20015Tasks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeTaskUsingDELETE**
> removeTaskUsingDELETE($task_id)

Delete a Task

Permanently deletes a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$task_id = "task_id_example"; // string | taskId

try {
    $api_instance->removeTaskUsingDELETE($task_id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->removeTaskUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| taskId |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceTaskUsingPUT**
> \CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks replaceTaskUsingPUT($task_id, $task)

Replace a Task

Replaces a task with the values provided in the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$task_id = "task_id_example"; // string | taskId
$task = new \CollingMedia\Infusionsoft\Model\Task1(); // \CollingMedia\Infusionsoft\Model\Task1 | task

try {
    $result = $api_instance->replaceTaskUsingPUT($task_id, $task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->replaceTaskUsingPUT: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| taskId |
 **task** | [**\CollingMedia\Infusionsoft\Model\Task1**](../Model/Task1.md)| task |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks**](../Model/InlineResponse20015Tasks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchUsingGET4**
> \CollingMedia\Infusionsoft\Model\InlineResponse20015 searchUsingGET4($contact_id, $has_due_date, $user_id, $since, $until, $completed, $limit, $offset, $order)

Search Tasks

Retrieves Tasks belonging to the authenticated user using the specified search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$contact_id = 789; // int | Returns tasks for the provided contact id
$has_due_date = true; // bool | Returns tasks that have an 'action date' when set to true
$user_id = 789; // int | Returns tasks for the provided user id
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$completed = true; // bool | Sets completed status of items to return
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$order = "order_example"; // string | Attribute to order items by

try {
    $result = $api_instance->searchUsingGET4($contact_id, $has_due_date, $user_id, $since, $until, $completed, $limit, $offset, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->searchUsingGET4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| Returns tasks for the provided contact id | [optional]
 **has_due_date** | **bool**| Returns tasks that have an &#39;action date&#39; when set to true | [optional]
 **user_id** | **int**| Returns tasks for the provided user id | [optional]
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **completed** | **bool**| Sets completed status of items to return | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **order** | **string**| Attribute to order items by | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncUsingGET2**
> \CollingMedia\Infusionsoft\Model\InlineResponse20016 syncUsingGET2($sync_token, $limit, $offset)

Retrieve Synced Tasks

The Sync endpoint returns a set of tasks that have been updated or created since the last result set was retrieved, minus any tasks that have been deleted.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$sync_token = "sync_token_example"; // string | sync_token
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return

try {
    $result = $api_instance->syncUsingGET2($sync_token, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->syncUsingGET2: ', $e->getMessage(), PHP_EOL;
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

[**\CollingMedia\Infusionsoft\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **tasksUsingGET**
> \CollingMedia\Infusionsoft\Model\InlineResponse20015 tasksUsingGET($contact_id, $has_due_date, $user_id, $since, $until, $completed, $limit, $offset, $order)

List Tasks

Retrieves a list of all tasks using the specified search criteria

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$contact_id = 789; // int | contact_id
$has_due_date = true; // bool | has_due_date
$user_id = 789; // int | user_id
$since = "since_example"; // string | Date to start searching from ex. `2017-01-01T22:17:59.039Z`
$until = "until_example"; // string | Date to search to ex. `2017-01-01T22:17:59.039Z`
$completed = true; // bool | Sets completed status of items to return
$limit = 56; // int | Sets a total of items to return
$offset = 56; // int | Sets a beginning range of items to return
$order = "order_example"; // string | Attribute to order items by

try {
    $result = $api_instance->tasksUsingGET($contact_id, $has_due_date, $user_id, $since, $until, $completed, $limit, $offset, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->tasksUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| contact_id | [optional]
 **has_due_date** | **bool**| has_due_date | [optional]
 **user_id** | **int**| user_id | [optional]
 **since** | **string**| Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **until** | **string**| Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; | [optional]
 **completed** | **bool**| Sets completed status of items to return | [optional]
 **limit** | **int**| Sets a total of items to return | [optional]
 **offset** | **int**| Sets a beginning range of items to return | [optional]
 **order** | **string**| Attribute to order items by | [optional]

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaskUsingPATCH**
> \CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks updateTaskUsingPATCH($task_id, $task)

Update a Task

Updates a task with only the values provided in the request

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new CollingMedia\Infusionsoft\Api\TaskApi();
$task_id = "task_id_example"; // string | taskId
$task = new \CollingMedia\Infusionsoft\Model\Task2(); // \CollingMedia\Infusionsoft\Model\Task2 | task

try {
    $result = $api_instance->updateTaskUsingPATCH($task_id, $task);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTaskUsingPATCH: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **task_id** | **string**| taskId |
 **task** | [**\CollingMedia\Infusionsoft\Model\Task2**](../Model/Task2.md)| task |

### Return type

[**\CollingMedia\Infusionsoft\Model\InlineResponse20015Tasks**](../Model/InlineResponse20015Tasks.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

