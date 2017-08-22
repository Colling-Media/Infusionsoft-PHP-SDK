## Table of contents

- [\CollingMedia\Infusionsoft\Campaigns](#class-collingmediainfusionsoftcampaigns)
- [\CollingMedia\Infusionsoft\ECommerce](#class-collingmediainfusionsoftecommerce)
- [\CollingMedia\Infusionsoft\Authorize](#class-collingmediainfusionsoftauthorize)
- [\CollingMedia\Infusionsoft\Contact](#class-collingmediainfusionsoftcontact)
- [\CollingMedia\Infusionsoft\Infusionsoft](#class-collingmediainfusionsoftinfusionsoft)
- [\CollingMedia\Infusionsoft\Contacts](#class-collingmediainfusionsoftcontacts)

<hr />

### Class: \CollingMedia\Infusionsoft\Campaigns

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em><br /><em>Campaigns constructor.</em> |
| public | <strong>addContactToCampaignSequence(</strong><em>\string</em> <strong>$campaignId</strong>, <em>\string</em> <strong>$sequenceId</strong>, <em>\string</em> <strong>$contactId</strong>)</strong> : <em>mixed</em><br /><em>Add Contacts to Campaign Sequence Add contacts to a campaign sequence based on the Contact ID, Campaign ID, and Sequence ID.</em> |
| public | <strong>addContactsToCampaignSequence(</strong><em>\string</em> <strong>$campaignId</strong>, <em>\string</em> <strong>$sequenceId</strong>, <em>array</em> <strong>$contactIds</strong>)</strong> : <em>mixed</em><br /><em>Add Contacts to Campaign Sequence Add contacts to a campaign sequence based on the Contact ID, Campaign ID, and Sequence ID.</em> |
| public | <strong>getCampaign(</strong><em>mixed</em> <strong>$campaignId</strong>)</strong> : <em>mixed</em><br /><em>Get Campaign Get a specific campaign from Infusionsoft, seeing more details than you would through the List Campaigns function.</em> |
| public | <strong>listCampaigns(</strong><em>int</em> <strong>$limit=1000</strong>, <em>null</em> <strong>$offset=null</strong>)</strong> : <em>mixed</em><br /><em>List Campaigns Get a list of all of the campaigns in Infusionsoft, paginated. The max is 1000 records per page. Offset is the number of records you want to skip at the beginning, for instance, if your limit is 100, and you have 200 campaigns, the offset for page 2 should be 100.</em> |
| public | <strong>removeContactFromCampaignSequence(</strong><em>\string</em> <strong>$campaignId</strong>, <em>\string</em> <strong>$sequenceId</strong>, <em>\string</em> <strong>$contactId</strong>)</strong> : <em>mixed</em><br /><em>Remove Contact from a Campaign Sequence Remove a contact from a campaign sequence, based on Contact ID, Campaign ID, and Sequence ID.</em> |
| public | <strong>removeContactsFromCampaignSequence(</strong><em>\string</em> <strong>$campaignId</strong>, <em>\string</em> <strong>$sequenceId</strong>, <em>array</em> <strong>$contactIds</strong>)</strong> : <em>mixed</em><br /><em>Remove Contacts from a Campaign Sequence Remove contacts from a campaign sequence, based on Contact IDs, Campaign ID, and Sequence ID.</em> |

*This class extends [\CollingMedia\Infusionsoft\Infusionsoft](#class-collingmediainfusionsoftinfusionsoft)*

<hr />

### Class: \CollingMedia\Infusionsoft\ECommerce

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em><br /><em>Campaigns constructor.</em> |
| public | <strong>getOrder(</strong><em>mixed</em> <strong>$orderId</strong>)</strong> : <em>mixed</em><br /><em>Get Order Get a specific order from Infusionsoft, seeing more details than you would through the List Orders function.</em> |
| public | <strong>getTransaction(</strong><em>\string</em> <strong>$transactionId</strong>)</strong> : <em>mixed</em><br /><em>Get Transaction Get a specific transaction from Infusionsoft, seeing more details than you would through the List Transactions function.</em> |
| public | <strong>listOrderTransactions(</strong><em>\string</em> <strong>$orderId</strong>, <em>\string</em> <strong>$since=null</strong>, <em>\string</em> <strong>$until=null</strong>, <em>int</em> <strong>$limit=1000</strong>, <em>\string</em> <strong>$offset=null</strong>, <em>\string</em> <strong>$contactId=null</strong>)</strong> : <em>mixed</em><br /><em>List Order Transactions Get a list of all of the transactions for a specific order from Infusionsoft, paginated. The max is 1000 records per page. Offset is the number of records you want to skip at the beginning, for instance, if your limit is 100, and you have 200 transactions, the offset for page 2 should be 100.</em> |
| public | <strong>listOrders(</strong><em>\string</em> <strong>$since=null</strong>, <em>\string</em> <strong>$until=null</strong>, <em>int</em> <strong>$limit=1000</strong>, <em>\string</em> <strong>$offset=null</strong>, <em>\boolean</em> <strong>$paid=null</strong>, <em>\string</em> <strong>$order=null</strong>, <em>\string</em> <strong>$contactId=null</strong>, <em>\string</em> <strong>$productId=null</strong>)</strong> : <em>mixed</em><br /><em>List Orders Get a list of all of the orders in Infusionsoft, paginated. The max is 1000 records per page. Offset is the number of records you want to skip at the beginning, for instance, if your limit is 100, and you have 200 orders, the offset for page 2 should be 100.</em> |
| public | <strong>listTransactions(</strong><em>\string</em> <strong>$since=null</strong>, <em>\string</em> <strong>$until=null</strong>, <em>int</em> <strong>$limit=1000</strong>, <em>\string</em> <strong>$offset=null</strong>, <em>\string</em> <strong>$contactId=null</strong>)</strong> : <em>mixed</em><br /><em>List Transactions Get a list of all of the transactions in Infusionsoft, paginated. The max is 1000 records per page. Offset is the number of records you want to skip at the beginning, for instance, if your limit is 100, and you have 200 transactions, the offset for page 2 should be 100.</em> |

*This class extends [\CollingMedia\Infusionsoft\Infusionsoft](#class-collingmediainfusionsoftinfusionsoft)*

<hr />

### Class: \CollingMedia\Infusionsoft\Authorize

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em><br /><em>Authorize constructor.</em> |
| public | <strong>getAuthorizationUrl(</strong><em>string</em> <strong>$scopes=`'full'`</strong>)</strong> : <em>string</em><br /><em>Get Authorization URL Returns the URL required to go through the oAuth process, requesting access to 'full' scopes by default. * 'full' scope is currently the only one available		@param string $scopes</em> |
| public | <strong>getToken(</strong><em>mixed</em> <strong>$code</strong>)</strong> : <em>mixed</em><br /><em>Get Token Exchange the `code` you receive from Infusionsoft in the return from the oAuth process, for an access token to be used on future calls.</em> |
| public | <strong>refreshToken(</strong><em>mixed</em> <strong>$token</strong>)</strong> : <em>mixed</em><br /><em>Refresh Token Refresh the access token you have by automatically requesting the new token. This is based on the array passed in the constructor. YOU SHOULD SAVE THE NEW TOKEN ARRAY IN PLACE OF THE OLD ONE</em> |

*This class extends [\CollingMedia\Infusionsoft\Infusionsoft](#class-collingmediainfusionsoftinfusionsoft)*

<hr />

### Class: \CollingMedia\Infusionsoft\Contact

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$accessToken=array()</strong>, <em>\string</em> <strong>$contactId</strong>)</strong> : <em>void</em><br /><em>Contacts constructor.</em> |
| public | <strong>applyTags(</strong><em>array</em> <strong>$tagIds</strong>)</strong> : <em>mixed</em><br /><em>Apply Tags Apply tags to the contact.</em> |
| public | <strong>deleteTag(</strong><em>\string</em> <strong>$tagId</strong>)</strong> : <em>mixed</em><br /><em>Remove Applied Tag Removes a tag from the contact specified.</em> |
| public | <strong>deleteTags(</strong><em>array</em> <strong>$tagIds</strong>)</strong> : <em>mixed</em><br /><em>Remove Applied Tags Removes a list of tags from the contact specified.</em> |
| public | <strong>get()</strong> : <em>mixed</em><br /><em>Get Contact Get the contact from Infusionsoft with any information you can get.</em> |
| public | <strong>listTags()</strong> : <em>void</em><br /><em>List Tags Lists applied tags from the contact.</em> |

*This class extends [\CollingMedia\Infusionsoft\Infusionsoft](#class-collingmediainfusionsoftinfusionsoft)*

<hr />

### Class: \CollingMedia\Infusionsoft\Infusionsoft

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$options=array()</strong>)</strong> : <em>void</em><br /><em>Infusionsoft constructor.</em> |
| public | <strong>authorize()</strong> : <em>[\CollingMedia\Infusionsoft\Authorize](#class-collingmediainfusionsoftauthorize)</em> |
| public | <strong>campaigns()</strong> : <em>[\CollingMedia\Infusionsoft\Campaigns](#class-collingmediainfusionsoftcampaigns)</em> |
| public | <strong>contact(</strong><em>\string</em> <strong>$contactId</strong>)</strong> : <em>[\CollingMedia\Infusionsoft\Contact](#class-collingmediainfusionsoftcontact)</em> |
| public | <strong>contacts()</strong> : <em>[\CollingMedia\Infusionsoft\Contacts](#class-collingmediainfusionsoftcontacts)</em> |
| public | <strong>ecommerce()</strong> : <em>[\CollingMedia\Infusionsoft\ECommerce](#class-collingmediainfusionsoftecommerce)</em> |
| protected | <strong>send(</strong><em>\string</em> <strong>$method</strong>, <em>\string</em> <strong>$url</strong>, <em>array</em> <strong>$options</strong>, <em>bool</em> <strong>$json=true</strong>)</strong> : <em>mixed</em> |

<hr />

### Class: \CollingMedia\Infusionsoft\Contacts

| Visibility | Function |
|:-----------|:---------|
| public | <strong>__construct(</strong><em>array</em> <strong>$accessToken=array()</strong>)</strong> : <em>void</em><br /><em>Contacts constructor.</em> |
| public | <strong>createContact(</strong><em>array</em> <strong>$contact</strong>)</strong> : <em>mixed</em><br /><em>Create a contact in Infusionsoft ** THIS CREATES, NOT UPDATES **</em> |
| public | <strong>customFields()</strong> : <em>mixed</em><br /><em>Custom Fields Get the custom fields that a contact can have assigned to it.</em> |
| public | <strong>deleteContact(</strong><em>mixed</em> <strong>$contactId</strong>)</strong> : <em>mixed</em><br /><em>Delete Contact Delete a contact from Infusionsoft based on the Contact ID.</em> |
| public | <strong>listContacts(</strong><em>int</em> <strong>$limit=1000</strong>, <em>null</em> <strong>$offset=null</strong>, <em>null</em> <strong>$email=null</strong>, <em>null</em> <strong>$given_name=null</strong>, <em>null</em> <strong>$family_name=null</strong>, <em>null</em> <strong>$order=null</strong>)</strong> : <em>mixed</em><br /><em>List all contacts in Infusionsoft</em> |
| public | <strong>updateContact(</strong><em>\string</em> <strong>$contactId</strong>, <em>array</em> <strong>$contact</strong>)</strong> : <em>mixed</em><br /><em>Update a contact based on Contact ID</em> |

*This class extends [\CollingMedia\Infusionsoft\Infusionsoft](#class-collingmediainfusionsoftinfusionsoft)*

