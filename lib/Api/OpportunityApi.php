<?php
/**
 * OpportunityApi
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
 * OpportunityApi Class Doc Comment
 *
 * @category Class
 * @package  CollingMedia\Infusionsoft
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OpportunityApi
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
     * @return OpportunityApi
     */
    public function setApiClient(\CollingMedia\Infusionsoft\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createOpportunityUsingPOST
     *
     * Create an Opportunity
     *
     * @param \CollingMedia\Infusionsoft\Model\Opportunity1 $opportunity opportunity (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities
     */
    public function createOpportunityUsingPOST($opportunity = null)
    {
        list($response) = $this->createOpportunityUsingPOSTWithHttpInfo($opportunity);
        return $response;
    }

    /**
     * Operation createOpportunityUsingPOSTWithHttpInfo
     *
     * Create an Opportunity
     *
     * @param \CollingMedia\Infusionsoft\Model\Opportunity1 $opportunity opportunity (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities, HTTP status code, HTTP response headers (array of strings)
     */
    public function createOpportunityUsingPOSTWithHttpInfo($opportunity = null)
    {
        // parse inputs
        $resourcePath = "/opportunities";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($opportunity)) {
            $_tempBody = $opportunity;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities',
                '/opportunities'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $e->getResponseHeaders());
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
            }

            throw $e;
        }
    }

    /**
     * Operation getOpportunityUsingGET
     *
     * Retrieve an Opportunity
     *
     * @param int $opportunity_id opportunityId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities
     */
    public function getOpportunityUsingGET($opportunity_id)
    {
        list($response) = $this->getOpportunityUsingGETWithHttpInfo($opportunity_id);
        return $response;
    }

    /**
     * Operation getOpportunityUsingGETWithHttpInfo
     *
     * Retrieve an Opportunity
     *
     * @param int $opportunity_id opportunityId (required)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOpportunityUsingGETWithHttpInfo($opportunity_id)
    {
        // verify the required parameter 'opportunity_id' is set
        if ($opportunity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $opportunity_id when calling getOpportunityUsingGET');
        }
        // parse inputs
        $resourcePath = "/opportunities/{opportunityId}";
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
        if ($opportunity_id !== null) {
            $resourcePath = str_replace(
                "{" . "opportunityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($opportunity_id),
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
                '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities',
                '/opportunities/{opportunityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $e->getResponseHeaders());
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
     * Operation getStagePipelineUsingGET
     *
     * List Opportunity Stage Pipeline
     *
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2009[]
     */
    public function getStagePipelineUsingGET()
    {
        list($response) = $this->getStagePipelineUsingGETWithHttpInfo();
        return $response;
    }

    /**
     * Operation getStagePipelineUsingGETWithHttpInfo
     *
     * List Opportunity Stage Pipeline
     *
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse2009[], HTTP status code, HTTP response headers (array of strings)
     */
    public function getStagePipelineUsingGETWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/opportunity/stage_pipeline";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


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
                '\CollingMedia\Infusionsoft\Model\InlineResponse2009[]',
                '/opportunity/stage_pipeline'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse2009[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse2009[]', $e->getResponseHeaders());
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
     * Operation listOpportunitiesUsingGET
     *
     * List Opportunities
     *
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param int $user_id Returns opportunities for the provided user id (optional)
     * @param int $stage_id Returns opportunities for the provided stage id (optional)
     * @param string $search_term Returns opportunities that match any of the contact&#39;s &#x60;given_name&#x60;, &#x60;family_name&#x60;, &#x60;company_name&#x60;, and &#x60;email_addresses&#x60; (searches &#x60;EMAIL1&#x60; only) fields as well as &#x60;opportunity_title&#x60; (optional)
     * @param string $order Attribute to order items by (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008
     */
    public function listOpportunitiesUsingGET($limit = null, $offset = null, $user_id = null, $stage_id = null, $search_term = null, $order = null)
    {
        list($response) = $this->listOpportunitiesUsingGETWithHttpInfo($limit, $offset, $user_id, $stage_id, $search_term, $order);
        return $response;
    }

    /**
     * Operation listOpportunitiesUsingGETWithHttpInfo
     *
     * List Opportunities
     *
     * @param int $limit Sets a total of items to return (optional)
     * @param int $offset Sets a beginning range of items to return (optional)
     * @param int $user_id Returns opportunities for the provided user id (optional)
     * @param int $stage_id Returns opportunities for the provided stage id (optional)
     * @param string $search_term Returns opportunities that match any of the contact&#39;s &#x60;given_name&#x60;, &#x60;family_name&#x60;, &#x60;company_name&#x60;, and &#x60;email_addresses&#x60; (searches &#x60;EMAIL1&#x60; only) fields as well as &#x60;opportunity_title&#x60; (optional)
     * @param string $order Attribute to order items by (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse2008, HTTP status code, HTTP response headers (array of strings)
     */
    public function listOpportunitiesUsingGETWithHttpInfo($limit = null, $offset = null, $user_id = null, $stage_id = null, $search_term = null, $order = null)
    {
        // parse inputs
        $resourcePath = "/opportunities";
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
        if ($user_id !== null) {
            $queryParams['user_id'] = $this->apiClient->getSerializer()->toQueryValue($user_id);
        }
        // query params
        if ($stage_id !== null) {
            $queryParams['stage_id'] = $this->apiClient->getSerializer()->toQueryValue($stage_id);
        }
        // query params
        if ($search_term !== null) {
            $queryParams['search_term'] = $this->apiClient->getSerializer()->toQueryValue($search_term);
        }
        // query params
        if ($order !== null) {
            $queryParams['order'] = $this->apiClient->getSerializer()->toQueryValue($order);
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
                '\CollingMedia\Infusionsoft\Model\InlineResponse2008',
                '/opportunities'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse2008', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse2008', $e->getResponseHeaders());
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
     * Operation replaceOpportunityUsingPUT
     *
     * Replace an Opportunity
     *
     * @param \CollingMedia\Infusionsoft\Model\Opportunity $opportunity opportunity (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities
     */
    public function replaceOpportunityUsingPUT($opportunity = null)
    {
        list($response) = $this->replaceOpportunityUsingPUTWithHttpInfo($opportunity);
        return $response;
    }

    /**
     * Operation replaceOpportunityUsingPUTWithHttpInfo
     *
     * Replace an Opportunity
     *
     * @param \CollingMedia\Infusionsoft\Model\Opportunity $opportunity opportunity (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities, HTTP status code, HTTP response headers (array of strings)
     */
    public function replaceOpportunityUsingPUTWithHttpInfo($opportunity = null)
    {
        // parse inputs
        $resourcePath = "/opportunities";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($opportunity)) {
            $_tempBody = $opportunity;
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
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities',
                '/opportunities'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $e->getResponseHeaders());
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
     * Operation updateOpportunityUsingPATCH
     *
     * Update an Opportunity
     *
     * @param int $opportunity_id opportunityId (required)
     * @param \CollingMedia\Infusionsoft\Model\Opportunity2 $opportunity opportunity (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities
     */
    public function updateOpportunityUsingPATCH($opportunity_id, $opportunity = null)
    {
        list($response) = $this->updateOpportunityUsingPATCHWithHttpInfo($opportunity_id, $opportunity);
        return $response;
    }

    /**
     * Operation updateOpportunityUsingPATCHWithHttpInfo
     *
     * Update an Opportunity
     *
     * @param int $opportunity_id opportunityId (required)
     * @param \CollingMedia\Infusionsoft\Model\Opportunity2 $opportunity opportunity (optional)
     * @throws \CollingMedia\Infusionsoft\ApiException on non-2xx response
     * @return array of \CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateOpportunityUsingPATCHWithHttpInfo($opportunity_id, $opportunity = null)
    {
        // verify the required parameter 'opportunity_id' is set
        if ($opportunity_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $opportunity_id when calling updateOpportunityUsingPATCH');
        }
        // parse inputs
        $resourcePath = "/opportunities/{opportunityId}";
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
        if ($opportunity_id !== null) {
            $resourcePath = str_replace(
                "{" . "opportunityId" . "}",
                $this->apiClient->getSerializer()->toPathValue($opportunity_id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($opportunity)) {
            $_tempBody = $opportunity;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities',
                '/opportunities/{opportunityId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\CollingMedia\Infusionsoft\Model\InlineResponse2008Opportunities', $e->getResponseHeaders());
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
