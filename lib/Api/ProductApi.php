<?php
/**
 * ProductApi
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
 * ProductApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Infusionsoft
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductApi
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
     * @return ProductApi
     */
    public function setApiClient(\CollingMedia\Infusionsoft\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation loadProductUsingGET
     *
     * Retrieve a Product
     *
     * @param int $product_id productId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20012Products
     */
    public function loadProductUsingGET($product_id)
    {
        list($response) = $this->loadProductUsingGETWithHttpInfo($product_id);
        return $response;
    }

    /**
     * Operation loadProductUsingGETWithHttpInfo
     *
     * Retrieve a Product
     *
     * @param int $product_id productId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20012Products, HTTP status code, HTTP response headers (array of strings)
     */
    public function loadProductUsingGETWithHttpInfo($product_id)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling loadProductUsingGET');
        }
        // parse inputs
        $resourcePath = "/products/{productId}";
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
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "productId" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
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
                '\CollingMedia\Infusionsoft\Model\InlineResponse20012Products',
                '/products/{productId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20012Products', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20012Products', $e->getResponseHeaders());
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
     * Operation searchUsingGET3
     *
     * List Products
     *
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param bool $active Sets status of items to return (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20012
     */
    public function searchUsingGET3($limit = null, $offset = null, $active = null)
    {
        list($response) = $this->searchUsingGET3WithHttpInfo($limit, $offset, $active);
        return $response;
    }

    /**
     * Operation searchUsingGET3WithHttpInfo
     *
     * List Products
     *
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param bool $active Sets status of items to return (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20012, HTTP status code, HTTP response headers (array of strings)
     */
    public function searchUsingGET3WithHttpInfo($limit = null, $offset = null, $active = null)
    {
        // parse inputs
        $resourcePath = "/products/search";
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
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // query params
        if ($active !== null) {
            $queryParams['active'] = $this->apiClient->getSerializer()->toQueryValue($active);
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
                '\CollingMedia\Infusionsoft\Model\InlineResponse20012',
                '/products/search'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20012', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20012', $e->getResponseHeaders());
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
     * Operation syncUsingGET1
     *
     * Retrieve Synced Products
     *
     * @param string $sync_token sync_token (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse20013
     */
    public function syncUsingGET1($sync_token = null, $limit = null, $offset = null)
    {
        list($response) = $this->syncUsingGET1WithHttpInfo($sync_token, $limit, $offset);
        return $response;
    }

    /**
     * Operation syncUsingGET1WithHttpInfo
     *
     * Retrieve Synced Products
     *
     * @param string $sync_token sync_token (optional)
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse20013, HTTP status code, HTTP response headers (array of strings)
     */
    public function syncUsingGET1WithHttpInfo($sync_token = null, $limit = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/products/sync";
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
        if ($sync_token !== null) {
            $queryParams['sync_token'] = $this->apiClient->getSerializer()->toQueryValue($sync_token);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
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
                '\CollingMedia\Infusionsoft\Model\InlineResponse20013',
                '/products/sync'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse20013', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse20013', $e->getResponseHeaders());
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