<?php
/**
 * ECommerceApi
 * PHP version 5
 *
 * @category Class
 * @package  CollingMedia\Infusionsoft
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infusionsoft
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: V1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CollingMedia\Infusionsoft\Api;

use \CollingMedia\Infusionsoft\ApiClient;
use \CollingMedia\Infusionsoft\ApiException;
use \CollingMedia\Infusionsoft\Configuration;
use \CollingMedia\Infusionsoft\ObjectSerializer;

/**
 * ECommerceApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Infusionsoft
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ECommerceApi
{
    /**
     * API Client
     *
     * @var \CollingMedia\Infusionsoft\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \CollingMedia\Infusionsoft\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\CollingMedia\Infusionsoft\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \CollingMedia\Infusionsoft\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \CollingMedia\Infusionsoft\ApiClient $apiClient set the API client
     *
     * @return ECommerceApi
     */
    public function setApiClient(\CollingMedia\Infusionsoft\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation loadOrderUsingGET
     *
     * Retrieve an Order
     *
     * @param int $order_id orderId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20010Orders
     */
    public function loadOrderUsingGET($order_id)
    {
        list($response) = $this->loadOrderUsingGETWithHttpInfo($order_id);
        return $response;
    }

    /**
     * Operation loadOrderUsingGETWithHttpInfo
     *
     * Retrieve an Order
     *
     * @param int $order_id orderId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20010Orders, HTTP status code, HTTP response headers (array of strings)
     */
    public function loadOrderUsingGETWithHttpInfo($order_id)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling loadOrderUsingGET');
        }
        // parse inputs
        $resourcePath = "/orders/{orderId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "orderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse20010Orders',
                '/orders/{orderId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20010Orders', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20010Orders', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation searchUsingGET1
     *
     * List Orders
     *
     * @param string $since Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param string $until Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param bool $paid Sets paid status of items to return (optional)
     * @param string $order Attribute to order items by (optional)
     * @param int $contact_id Returns orders for the provided contact id (optional)
     * @param int $product_id Returns orders containing the provided product id (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20010
     */
    public function searchUsingGET1($since = null, $until = null, $limit = null, $offset = null, $paid = null, $order = null, $contact_id = null, $product_id = null)
    {
        list($response) = $this->searchUsingGET1WithHttpInfo($since, $until, $limit, $offset, $paid, $order, $contact_id, $product_id);
        return $response;
    }

    /**
     * Operation searchUsingGET1WithHttpInfo
     *
     * List Orders
     *
     * @param string $since Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param string $until Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param bool $paid Sets paid status of items to return (optional)
     * @param string $order Attribute to order items by (optional)
     * @param int $contact_id Returns orders for the provided contact id (optional)
     * @param int $product_id Returns orders containing the provided product id (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20010, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUsingGET1WithHttpInfo($since = null, $until = null, $limit = null, $offset = null, $paid = null, $order = null, $contact_id = null, $product_id = null)
    {
        // parse inputs
        $resourcePath = "/orders";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($since !== null) {
            $queryParams['since'] = $this->apiClient->getSerializer()->toQueryValue($since);
        }
        // query params
        if ($until !== null) {
            $queryParams['until'] = $this->apiClient->getSerializer()->toQueryValue($until);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($paid !== null) {
            $queryParams['paid'] = $this->apiClient->getSerializer()->toQueryValue($paid);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
        }
        // query params
        if ($contact_id !== null) {
            $queryParams['contact_id'] = $this->apiClient->getSerializer()->toQueryValue($contact_id);
        }
        // query params
        if ($product_id !== null) {
            $queryParams['product_id'] = $this->apiClient->getSerializer()->toQueryValue($product_id);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse20010',
                '/orders'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20010', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20010', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation searchUsingGET2
     *
     * List Transactions
     *
     * @param string $since Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param string $until Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param int $contact_id Returns transactions for the provided contact id (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20011
     */
    public function searchUsingGET2($since = null, $until = null, $limit = null, $offset = null, $contact_id = null)
    {
        list($response) = $this->searchUsingGET2WithHttpInfo($since, $until, $limit, $offset, $contact_id);
        return $response;
    }

    /**
     * Operation searchUsingGET2WithHttpInfo
     *
     * List Transactions
     *
     * @param string $since Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param string $until Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param int $contact_id Returns transactions for the provided contact id (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20011, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUsingGET2WithHttpInfo($since = null, $until = null, $limit = null, $offset = null, $contact_id = null)
    {
        // parse inputs
        $resourcePath = "/transactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($since !== null) {
            $queryParams['since'] = $this->apiClient->getSerializer()->toQueryValue($since);
        }
        // query params
        if ($until !== null) {
            $queryParams['until'] = $this->apiClient->getSerializer()->toQueryValue($until);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($contact_id !== null) {
            $queryParams['contact_id'] = $this->apiClient->getSerializer()->toQueryValue($contact_id);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse20011',
                '/transactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20011', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20011', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation transactionByIdUsingGET
     *
     * Retrieve a Transaction
     *
     * @param int $transaction_id transactionId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions
     */
    public function transactionByIdUsingGET($transaction_id)
    {
        list($response) = $this->transactionByIdUsingGETWithHttpInfo($transaction_id);
        return $response;
    }

    /**
     * Operation transactionByIdUsingGETWithHttpInfo
     *
     * Retrieve a Transaction
     *
     * @param int $transaction_id transactionId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions, HTTP status code, HTTP response headers (array of strings)
     */
    public function transactionByIdUsingGETWithHttpInfo($transaction_id)
    {
        // verify the required parameter 'transaction_id' is set
        if ($transaction_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $transaction_id when calling transactionByIdUsingGET');
        }
        // parse inputs
        $resourcePath = "/transactions/{transactionId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($transaction_id !== null) {
            $resourcePath = str_replace(
                "{" . "transactionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($transaction_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions',
                '/transactions/{transactionId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20011Transactions', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation transactionsForOrderUsingGET
     *
     * Retrieve Order Transactions
     *
     * @param string $order_id orderId (required)
     * @param string $since Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param string $until Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param int $contact_id Returns transactions for the provided contact id (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20011
     */
    public function transactionsForOrderUsingGET($order_id, $since = null, $until = null, $limit = null, $offset = null, $contact_id = null)
    {
        list($response) = $this->transactionsForOrderUsingGETWithHttpInfo($order_id, $since, $until, $limit, $offset, $contact_id);
        return $response;
    }

    /**
     * Operation transactionsForOrderUsingGETWithHttpInfo
     *
     * Retrieve Order Transactions
     *
     * @param string $order_id orderId (required)
     * @param string $since Date to start searching from ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param string $until Date to search to ex. &#x60;2017-01-01T22:17:59.039Z&#x60; (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param int $contact_id Returns transactions for the provided contact id (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20011, HTTP status code, HTTP response headers (array of strings)
     */
    public function transactionsForOrderUsingGETWithHttpInfo($order_id, $since = null, $until = null, $limit = null, $offset = null, $contact_id = null)
    {
        // verify the required parameter 'order_id' is set
        if ($order_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling transactionsForOrderUsingGET');
        }
        // parse inputs
        $resourcePath = "/orders/{orderId}/transactions";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($since !== null) {
            $queryParams['since'] = $this->apiClient->getSerializer()->toQueryValue($since);
        }
        // query params
        if ($until !== null) {
            $queryParams['until'] = $this->apiClient->getSerializer()->toQueryValue($until);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($contact_id !== null) {
            $queryParams['contact_id'] = $this->apiClient->getSerializer()->toQueryValue($contact_id);
        }
        // path params
        if ($order_id !== null) {
            $resourcePath = str_replace(
                "{" . "orderId" . "}",
                $this->apiClient->getSerializer()->toPathValue($order_id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse20011',
                '/orders/{orderId}/transactions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20011', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20011', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}