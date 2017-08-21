# Infusionsoft PHP SDK
A Swagger Generated version of the Infusionsoft REST API.

## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/):

```
composer install CollingMedia/Infusionsoft-PHP-SDK
```

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/collingmedia/infusionsoft/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## Documentation for API Endpoints

All URIs are relative to *https://api.infusionsoft.com/crm/rest/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AppointmentApi* | [**appointmentsUsingGET**](docs/Api/AppointmentApi.md#appointmentsusingget) | **GET** /appointments | List Appointments
*AppointmentApi* | [**createAppointmentUsingPOST**](docs/Api/AppointmentApi.md#createappointmentusingpost) | **POST** /appointments | Create an Appointment
*AppointmentApi* | [**loadAppointmentUsingGET**](docs/Api/AppointmentApi.md#loadappointmentusingget) | **GET** /appointments/{appointmentId} | Retrieve an Appointment
*AppointmentApi* | [**removeAppointmentUsingDELETE**](docs/Api/AppointmentApi.md#removeappointmentusingdelete) | **DELETE** /appointments/{appointmentId} | Delete an Appointment
*AppointmentApi* | [**replaceAppointmentUsingPUT**](docs/Api/AppointmentApi.md#replaceappointmentusingput) | **PUT** /appointments/{appointmentId} | Replace an Appointment
*AppointmentApi* | [**searchUsingGET**](docs/Api/AppointmentApi.md#searchusingget) | **GET** /appointments/search | Search Appointments
*AppointmentApi* | [**syncUsingGET**](docs/Api/AppointmentApi.md#syncusingget) | **GET** /appointments/sync | Retrieve Synced Appointments
*AppointmentApi* | [**updateAppointmentUsingPATCH**](docs/Api/AppointmentApi.md#updateappointmentusingpatch) | **PATCH** /appointments/{appointmentId} | Update an Appointment
*CampaignApi* | [**addContactsToCampaignSequenceUsingPOST**](docs/Api/CampaignApi.md#addcontactstocampaignsequenceusingpost) | **POST** /campaigns/{campaignId}/sequences/{sequenceId}/contacts/{contactId} | Add to Campaign Sequence
*CampaignApi* | [**addContactsToCampaignSequenceUsingPOST1**](docs/Api/CampaignApi.md#addcontactstocampaignsequenceusingpost1) | **POST** /campaigns/{campaignId}/sequences/{sequenceId}/contacts | Add Multiple to Campaign Sequence
*CampaignApi* | [**getAllCampaignsUsingGET**](docs/Api/CampaignApi.md#getallcampaignsusingget) | **GET** /campaigns | List Campaigns
*CampaignApi* | [**getCampaignUsingGET**](docs/Api/CampaignApi.md#getcampaignusingget) | **GET** /campaigns/{campaignId} | Retrieve a Campaign
*CampaignApi* | [**removeContactsFromCampaignSequenceUsingDELETE**](docs/Api/CampaignApi.md#removecontactsfromcampaignsequenceusingdelete) | **DELETE** /campaigns/{campaignId}/sequences/{sequenceId}/contacts/{contactId} | Remove from Campaign Sequence
*CampaignApi* | [**removeContactsFromCampaignSequenceUsingDELETE1**](docs/Api/CampaignApi.md#removecontactsfromcampaignsequenceusingdelete1) | **DELETE** /campaigns/{campaignId}/sequences/{sequenceId}/contacts | Remove Multiple from Campaign Sequence
*ContactApi* | [**applyTagsToContactIdUsingPOST**](docs/Api/ContactApi.md#applytagstocontactidusingpost) | **POST** /contacts/{contactId}/tags | Apply Tags
*ContactApi* | [**createContactUsingPOST**](docs/Api/ContactApi.md#createcontactusingpost) | **POST** /contacts | Create a Contact
*ContactApi* | [**createOrUpdateContactUsingPUT**](docs/Api/ContactApi.md#createorupdatecontactusingput) | **PUT** /contacts | Create or Update a Contact
*ContactApi* | [**deleteContactUsingDELETE**](docs/Api/ContactApi.md#deletecontactusingdelete) | **DELETE** /contacts/{contactId} | Delete a Contact
*ContactApi* | [**listAppliedTagsUsingGET**](docs/Api/ContactApi.md#listappliedtagsusingget) | **GET** /contacts/{contactId}/tags | List Applied Tags
*ContactApi* | [**listContactsUsingGET**](docs/Api/ContactApi.md#listcontactsusingget) | **GET** /contacts | List Contacts
*ContactApi* | [**listCustomFieldsUsingGET**](docs/Api/ContactApi.md#listcustomfieldsusingget) | **GET** /contactCustomFields | List Contact Custom Fields
*ContactApi* | [**loadUsingGET**](docs/Api/ContactApi.md#loadusingget) | **GET** /contacts/{contactId} | Retrieve a Contact
*ContactApi* | [**removeTagsFromContactUsingDELETE**](docs/Api/ContactApi.md#removetagsfromcontactusingdelete) | **DELETE** /contacts/{contactId}/tags/{tagId} | Remove Applied Tag
*ContactApi* | [**removeTagsFromContactUsingDELETE1**](docs/Api/ContactApi.md#removetagsfromcontactusingdelete1) | **DELETE** /contacts/{contactId}/tags | Remove Applied Tags
*ContactApi* | [**updateContactUsingPATCH**](docs/Api/ContactApi.md#updatecontactusingpatch) | **PATCH** /contacts/{contactId} | Update a Contact
*ECommerceApi* | [**loadOrderUsingGET**](docs/Api/ECommerceApi.md#loadorderusingget) | **GET** /orders/{orderId} | Retrieve an Order
*ECommerceApi* | [**searchUsingGET1**](docs/Api/ECommerceApi.md#searchusingget1) | **GET** /orders | List Orders
*ECommerceApi* | [**searchUsingGET2**](docs/Api/ECommerceApi.md#searchusingget2) | **GET** /transactions | List Transactions
*ECommerceApi* | [**transactionByIdUsingGET**](docs/Api/ECommerceApi.md#transactionbyidusingget) | **GET** /transactions/{transactionId} | Retrieve a Transaction
*ECommerceApi* | [**transactionsForOrderUsingGET**](docs/Api/ECommerceApi.md#transactionsfororderusingget) | **GET** /orders/{orderId}/transactions | Retrieve Order Transactions
*OpportunityApi* | [**createOpportunityUsingPOST**](docs/Api/OpportunityApi.md#createopportunityusingpost) | **POST** /opportunities | Create an Opportunity
*OpportunityApi* | [**getOpportunityUsingGET**](docs/Api/OpportunityApi.md#getopportunityusingget) | **GET** /opportunities/{opportunityId} | Retrieve an Opportunity
*OpportunityApi* | [**getStagePipelineUsingGET**](docs/Api/OpportunityApi.md#getstagepipelineusingget) | **GET** /opportunity/stage_pipeline | List Opportunity Stage Pipeline
*OpportunityApi* | [**listOpportunitiesUsingGET**](docs/Api/OpportunityApi.md#listopportunitiesusingget) | **GET** /opportunities | List Opportunities
*OpportunityApi* | [**replaceOpportunityUsingPUT**](docs/Api/OpportunityApi.md#replaceopportunityusingput) | **PUT** /opportunities | Replace an Opportunity
*OpportunityApi* | [**updateOpportunityUsingPATCH**](docs/Api/OpportunityApi.md#updateopportunityusingpatch) | **PATCH** /opportunities/{opportunityId} | Update an Opportunity
*ProductApi* | [**loadProductUsingGET**](docs/Api/ProductApi.md#loadproductusingget) | **GET** /products/{productId} | Retrieve a Product
*ProductApi* | [**searchUsingGET3**](docs/Api/ProductApi.md#searchusingget3) | **GET** /products/search | List Products
*ProductApi* | [**syncUsingGET1**](docs/Api/ProductApi.md#syncusingget1) | **GET** /products/sync | Retrieve Synced Products
*RESTHooksApi* | [**createAHookSubscription**](docs/Api/RESTHooksApi.md#createahooksubscription) | **POST** /hooks | Create a Hook Subscription
*RESTHooksApi* | [**deleteAHookSubscription**](docs/Api/RESTHooksApi.md#deleteahooksubscription) | **DELETE** /hooks/{key} | Delete a Hook Subscription
*RESTHooksApi* | [**listHookEventTypes**](docs/Api/RESTHooksApi.md#listhookeventtypes) | **GET** /hooks/event_keys | List Hook Event Types
*RESTHooksApi* | [**listStoredHookSubscriptions**](docs/Api/RESTHooksApi.md#liststoredhooksubscriptions) | **GET** /hooks | List Stored Hook Subscriptions
*RESTHooksApi* | [**retrieveAHookSubscription**](docs/Api/RESTHooksApi.md#retrieveahooksubscription) | **GET** /hooks/{key} | Retrieve a Hook Subscription
*RESTHooksApi* | [**updateAHookSubscription**](docs/Api/RESTHooksApi.md#updateahooksubscription) | **PUT** /hooks/{key} | Update a Hook Subscription
*RESTHooksApi* | [**verifyAHookSubscription**](docs/Api/RESTHooksApi.md#verifyahooksubscription) | **POST** /hooks/{key}/verify | Verify a Hook Subscription
*RESTHooksApi* | [**verifyAHookSubscriptionDelayed**](docs/Api/RESTHooksApi.md#verifyahooksubscriptiondelayed) | **POST** /hooks/{key}/delayedVerify | Verify a Hook Subscription, Delayed
*TagsApi* | [**applyTagToContactIdsUsingPOST**](docs/Api/TagsApi.md#applytagtocontactidsusingpost) | **POST** /tags/{tagId}/contacts | Apply Tag to Contacts
*TagsApi* | [**listContactsForTagIdUsingGET**](docs/Api/TagsApi.md#listcontactsfortagidusingget) | **GET** /tags/{tagId}/contacts | List Tagged Contacts
*TagsApi* | [**removeTagFromContactIdUsingDELETE**](docs/Api/TagsApi.md#removetagfromcontactidusingdelete) | **DELETE** /tags/{tagId}/contacts/{contactId} | Remove Tag from Contact
*TagsApi* | [**removeTagFromContactIdsUsingDELETE**](docs/Api/TagsApi.md#removetagfromcontactidsusingdelete) | **DELETE** /tags/{tagId}/contacts | Remove Tag from Contacts
*TaskApi* | [**createTaskUsingPOST**](docs/Api/TaskApi.md#createtaskusingpost) | **POST** /tasks | Create a Task
*TaskApi* | [**loadTaskUsingGET**](docs/Api/TaskApi.md#loadtaskusingget) | **GET** /tasks/{taskId} | Retrieve a Task
*TaskApi* | [**removeTaskUsingDELETE**](docs/Api/TaskApi.md#removetaskusingdelete) | **DELETE** /tasks/{taskId} | Delete a Task
*TaskApi* | [**replaceTaskUsingPUT**](docs/Api/TaskApi.md#replacetaskusingput) | **PUT** /tasks/{taskId} | Replace a Task
*TaskApi* | [**searchUsingGET4**](docs/Api/TaskApi.md#searchusingget4) | **GET** /tasks/search | Search Tasks
*TaskApi* | [**syncUsingGET2**](docs/Api/TaskApi.md#syncusingget2) | **GET** /tasks/sync | Retrieve Synced Tasks
*TaskApi* | [**tasksUsingGET**](docs/Api/TaskApi.md#tasksusingget) | **GET** /tasks | List Tasks
*TaskApi* | [**updateTaskUsingPATCH**](docs/Api/TaskApi.md#updatetaskusingpatch) | **PATCH** /tasks/{taskId} | Update a Task


## Documentation For Models

 - [Address](docs/Model/Address.md)
 - [Appointment](docs/Model/Appointment.md)
 - [Appointment1](docs/Model/Appointment1.md)
 - [Appointment2](docs/Model/Appointment2.md)
 - [AppointmentList](docs/Model/AppointmentList.md)
 - [AppointmentStatus](docs/Model/AppointmentStatus.md)
 - [AppointmentStatusList](docs/Model/AppointmentStatusList.md)
 - [BasicContact](docs/Model/BasicContact.md)
 - [Campaign](docs/Model/Campaign.md)
 - [CampaignList](docs/Model/CampaignList.md)
 - [CheckListItemDetails](docs/Model/CheckListItemDetails.md)
 - [Company](docs/Model/Company.md)
 - [Contact](docs/Model/Contact.md)
 - [Contact1](docs/Model/Contact1.md)
 - [Contact2](docs/Model/Contact2.md)
 - [ContactCustomFieldsOptions](docs/Model/ContactCustomFieldsOptions.md)
 - [ContactList](docs/Model/ContactList.md)
 - [ContactTag](docs/Model/ContactTag.md)
 - [ContactTagList](docs/Model/ContactTagList.md)
 - [CustomFieldMetaData](docs/Model/CustomFieldMetaData.md)
 - [CustomFieldOption](docs/Model/CustomFieldOption.md)
 - [CustomFieldValue](docs/Model/CustomFieldValue.md)
 - [EmailAddress](docs/Model/EmailAddress.md)
 - [EntryLongString_](docs/Model/EntryLongString_.md)
 - [Error](docs/Model/Error.md)
 - [FaxNumber](docs/Model/FaxNumber.md)
 - [FullContact](docs/Model/FullContact.md)
 - [Goal](docs/Model/Goal.md)
 - [HistoricalCounts](docs/Model/HistoricalCounts.md)
 - [Ids](docs/Model/Ids.md)
 - [Ids1](docs/Model/Ids1.md)
 - [Ids2](docs/Model/Ids2.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20010Contact](docs/Model/InlineResponse20010Contact.md)
 - [InlineResponse20010OrderItems](docs/Model/InlineResponse20010OrderItems.md)
 - [InlineResponse20010Orders](docs/Model/InlineResponse20010Orders.md)
 - [InlineResponse20010Product](docs/Model/InlineResponse20010Product.md)
 - [InlineResponse20010ShippingInformation](docs/Model/InlineResponse20010ShippingInformation.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20011Transactions](docs/Model/InlineResponse20011Transactions.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20012ProductOptions](docs/Model/InlineResponse20012ProductOptions.md)
 - [InlineResponse20012Products](docs/Model/InlineResponse20012Products.md)
 - [InlineResponse20012SubscriptionPlans](docs/Model/InlineResponse20012SubscriptionPlans.md)
 - [InlineResponse20012Values](docs/Model/InlineResponse20012Values.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013ProductStatuses](docs/Model/InlineResponse20013ProductStatuses.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20014Contact](docs/Model/InlineResponse20014Contact.md)
 - [InlineResponse20014Contacts](docs/Model/InlineResponse20014Contacts.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20015Tasks](docs/Model/InlineResponse20015Tasks.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20016TaskStatuses](docs/Model/InlineResponse20016TaskStatuses.md)
 - [InlineResponse2001AppointmentStatuses](docs/Model/InlineResponse2001AppointmentStatuses.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2002Campaigns](docs/Model/InlineResponse2002Campaigns.md)
 - [InlineResponse2002Goals](docs/Model/InlineResponse2002Goals.md)
 - [InlineResponse2002HistoricalContactCounts](docs/Model/InlineResponse2002HistoricalContactCounts.md)
 - [InlineResponse2002Items](docs/Model/InlineResponse2002Items.md)
 - [InlineResponse2002Paths](docs/Model/InlineResponse2002Paths.md)
 - [InlineResponse2002Sequences](docs/Model/InlineResponse2002Sequences.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2004Addresses](docs/Model/InlineResponse2004Addresses.md)
 - [InlineResponse2004Company](docs/Model/InlineResponse2004Company.md)
 - [InlineResponse2004Contacts](docs/Model/InlineResponse2004Contacts.md)
 - [InlineResponse2004CustomFields](docs/Model/InlineResponse2004CustomFields.md)
 - [InlineResponse2004EmailAddresses](docs/Model/InlineResponse2004EmailAddresses.md)
 - [InlineResponse2004FaxNumbers](docs/Model/InlineResponse2004FaxNumbers.md)
 - [InlineResponse2004PhoneNumbers](docs/Model/InlineResponse2004PhoneNumbers.md)
 - [InlineResponse2004Relationships](docs/Model/InlineResponse2004Relationships.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2005Tag](docs/Model/InlineResponse2005Tag.md)
 - [InlineResponse2005Tags](docs/Model/InlineResponse2005Tags.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2008Contact](docs/Model/InlineResponse2008Contact.md)
 - [InlineResponse2008Opportunities](docs/Model/InlineResponse2008Opportunities.md)
 - [InlineResponse2008Stage](docs/Model/InlineResponse2008Stage.md)
 - [InlineResponse2008StageDetails](docs/Model/InlineResponse2008StageDetails.md)
 - [InlineResponse2008StageDetailsCheckListItems](docs/Model/InlineResponse2008StageDetailsCheckListItems.md)
 - [InlineResponse2008User](docs/Model/InlineResponse2008User.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse200Appointments](docs/Model/InlineResponse200Appointments.md)
 - [Item](docs/Model/Item.md)
 - [Opportunity](docs/Model/Opportunity.md)
 - [Opportunity1](docs/Model/Opportunity1.md)
 - [Opportunity2](docs/Model/Opportunity2.md)
 - [OpportunityContact](docs/Model/OpportunityContact.md)
 - [OpportunityList](docs/Model/OpportunityList.md)
 - [Order](docs/Model/Order.md)
 - [OrderContactDetails](docs/Model/OrderContactDetails.md)
 - [OrderItem](docs/Model/OrderItem.md)
 - [OrderList](docs/Model/OrderList.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [Product](docs/Model/Product.md)
 - [ProductList](docs/Model/ProductList.md)
 - [ProductOption](docs/Model/ProductOption.md)
 - [ProductOptionValue](docs/Model/ProductOptionValue.md)
 - [ProductStatus](docs/Model/ProductStatus.md)
 - [ProductStatusList](docs/Model/ProductStatusList.md)
 - [Relationship](docs/Model/Relationship.md)
 - [RestHook](docs/Model/RestHook.md)
 - [RestHookRequest](docs/Model/RestHookRequest.md)
 - [RestHookRequest1](docs/Model/RestHookRequest1.md)
 - [SalesPipeline](docs/Model/SalesPipeline.md)
 - [Sequence](docs/Model/Sequence.md)
 - [SequencePath](docs/Model/SequencePath.md)
 - [SetOfIds](docs/Model/SetOfIds.md)
 - [ShippingInformation](docs/Model/ShippingInformation.md)
 - [SimpleOpportunityStage](docs/Model/SimpleOpportunityStage.md)
 - [SimpleProduct](docs/Model/SimpleProduct.md)
 - [SimpleTag](docs/Model/SimpleTag.md)
 - [SimpleUser](docs/Model/SimpleUser.md)
 - [StageDetails](docs/Model/StageDetails.md)
 - [SubscriptionPlan](docs/Model/SubscriptionPlan.md)
 - [TagId](docs/Model/TagId.md)
 - [TagIds](docs/Model/TagIds.md)
 - [TaggedContact](docs/Model/TaggedContact.md)
 - [TaggedContactList](docs/Model/TaggedContactList.md)
 - [Task](docs/Model/Task.md)
 - [Task1](docs/Model/Task1.md)
 - [Task2](docs/Model/Task2.md)
 - [TaskList](docs/Model/TaskList.md)
 - [TaskStatus](docs/Model/TaskStatus.md)
 - [TaskStatusList](docs/Model/TaskStatusList.md)
 - [Transaction](docs/Model/Transaction.md)
 - [TransactionList](docs/Model/TransactionList.md)
 - [UpsertContact](docs/Model/UpsertContact.md)


## Documentation For Authorization


## oauth2

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://accounts.infusionsoft.com/app/oauth/authorize
- **Scopes**: N/A


## Author




