<?php
/**
 * IssuesApi
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Merge Ticketing API
 *
 * The unified API for building rich integrations with multiple Ticketing platforms.
 *
 * The version of the OpenAPI document: 1.0
 * Contact: hello@merge.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * IssuesApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IssuesApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation issuesList
     *
     * @param  string $accountToken accountToken (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $endDate If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $endUserOrganizationName endUserOrganizationName (optional)
     * @param  \DateTime $firstIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $firstIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $includeMuted If True, will include muted issues (optional)
     * @param  string $integrationName integrationName (optional)
     * @param  \DateTime $lastIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $lastIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $startDate If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status status (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\PaginatedIssueList
     */
    public function issuesList($accountToken = null, $cursor = null, $endDate = null, $endUserOrganizationName = null, $firstIncidentTimeAfter = null, $firstIncidentTimeBefore = null, $includeMuted = null, $integrationName = null, $lastIncidentTimeAfter = null, $lastIncidentTimeBefore = null, $pageSize = null, $startDate = null, $status = null)
    {
        list($response) = $this->issuesListWithHttpInfo($accountToken, $cursor, $endDate, $endUserOrganizationName, $firstIncidentTimeAfter, $firstIncidentTimeBefore, $includeMuted, $integrationName, $lastIncidentTimeAfter, $lastIncidentTimeBefore, $pageSize, $startDate, $status);
        return $response;
    }

    /**
     * Operation issuesListWithHttpInfo
     *
     * @param  string $accountToken (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $endDate If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $endUserOrganizationName (optional)
     * @param  \DateTime $firstIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $firstIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $includeMuted If True, will include muted issues (optional)
     * @param  string $integrationName (optional)
     * @param  \DateTime $lastIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $lastIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $startDate If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\PaginatedIssueList, HTTP status code, HTTP response headers (array of strings)
     */
    public function issuesListWithHttpInfo($accountToken = null, $cursor = null, $endDate = null, $endUserOrganizationName = null, $firstIncidentTimeAfter = null, $firstIncidentTimeBefore = null, $includeMuted = null, $integrationName = null, $lastIncidentTimeAfter = null, $lastIncidentTimeBefore = null, $pageSize = null, $startDate = null, $status = null)
    {
        $request = $this->issuesListRequest($accountToken, $cursor, $endDate, $endUserOrganizationName, $firstIncidentTimeAfter, $firstIncidentTimeBefore, $includeMuted, $integrationName, $lastIncidentTimeAfter, $lastIncidentTimeBefore, $pageSize, $startDate, $status);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\PaginatedIssueList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\PaginatedIssueList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\PaginatedIssueList';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\PaginatedIssueList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation issuesListAsync
     *
     * @param  string $accountToken (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $endDate If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $endUserOrganizationName (optional)
     * @param  \DateTime $firstIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $firstIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $includeMuted If True, will include muted issues (optional)
     * @param  string $integrationName (optional)
     * @param  \DateTime $lastIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $lastIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $startDate If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesListAsync($accountToken = null, $cursor = null, $endDate = null, $endUserOrganizationName = null, $firstIncidentTimeAfter = null, $firstIncidentTimeBefore = null, $includeMuted = null, $integrationName = null, $lastIncidentTimeAfter = null, $lastIncidentTimeBefore = null, $pageSize = null, $startDate = null, $status = null)
    {
        return $this->issuesListAsyncWithHttpInfo($accountToken, $cursor, $endDate, $endUserOrganizationName, $firstIncidentTimeAfter, $firstIncidentTimeBefore, $includeMuted, $integrationName, $lastIncidentTimeAfter, $lastIncidentTimeBefore, $pageSize, $startDate, $status)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation issuesListAsyncWithHttpInfo
     *
     * @param  string $accountToken (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $endDate If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $endUserOrganizationName (optional)
     * @param  \DateTime $firstIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $firstIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $includeMuted If True, will include muted issues (optional)
     * @param  string $integrationName (optional)
     * @param  \DateTime $lastIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $lastIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $startDate If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesListAsyncWithHttpInfo($accountToken = null, $cursor = null, $endDate = null, $endUserOrganizationName = null, $firstIncidentTimeAfter = null, $firstIncidentTimeBefore = null, $includeMuted = null, $integrationName = null, $lastIncidentTimeAfter = null, $lastIncidentTimeBefore = null, $pageSize = null, $startDate = null, $status = null)
    {
        $returnType = '\OpenAPI\Client\Model\PaginatedIssueList';
        $request = $this->issuesListRequest($accountToken, $cursor, $endDate, $endUserOrganizationName, $firstIncidentTimeAfter, $firstIncidentTimeBefore, $includeMuted, $integrationName, $lastIncidentTimeAfter, $lastIncidentTimeBefore, $pageSize, $startDate, $status);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'issuesList'
     *
     * @param  string $accountToken (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  string $endDate If included, will only include issues whose most recent action occurred before this time (optional)
     * @param  string $endUserOrganizationName (optional)
     * @param  \DateTime $firstIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $firstIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  string $includeMuted If True, will include muted issues (optional)
     * @param  string $integrationName (optional)
     * @param  \DateTime $lastIncidentTimeAfter If provided, will only return issues whose first incident time was after this datetime. (optional)
     * @param  \DateTime $lastIncidentTimeBefore If provided, will only return issues whose first incident time was before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $startDate If included, will only include issues whose most recent action occurred after this time (optional)
     * @param  string $status (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function issuesListRequest($accountToken = null, $cursor = null, $endDate = null, $endUserOrganizationName = null, $firstIncidentTimeAfter = null, $firstIncidentTimeBefore = null, $includeMuted = null, $integrationName = null, $lastIncidentTimeAfter = null, $lastIncidentTimeBefore = null, $pageSize = null, $startDate = null, $status = null)
    {

        $resourcePath = '/issues';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($accountToken !== null) {
            if('form' === 'form' && is_array($accountToken)) {
                foreach($accountToken as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['account_token'] = $accountToken;
            }
        }
        // query params
        if ($cursor !== null) {
            if('form' === 'form' && is_array($cursor)) {
                foreach($cursor as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['cursor'] = $cursor;
            }
        }
        // query params
        if ($endDate !== null) {
            if('form' === 'form' && is_array($endDate)) {
                foreach($endDate as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_date'] = $endDate;
            }
        }
        // query params
        if ($endUserOrganizationName !== null) {
            if('form' === 'form' && is_array($endUserOrganizationName)) {
                foreach($endUserOrganizationName as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['end_user_organization_name'] = $endUserOrganizationName;
            }
        }
        // query params
        if ($firstIncidentTimeAfter !== null) {
            if('form' === 'form' && is_array($firstIncidentTimeAfter)) {
                foreach($firstIncidentTimeAfter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['first_incident_time_after'] = $firstIncidentTimeAfter;
            }
        }
        // query params
        if ($firstIncidentTimeBefore !== null) {
            if('form' === 'form' && is_array($firstIncidentTimeBefore)) {
                foreach($firstIncidentTimeBefore as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['first_incident_time_before'] = $firstIncidentTimeBefore;
            }
        }
        // query params
        if ($includeMuted !== null) {
            if('form' === 'form' && is_array($includeMuted)) {
                foreach($includeMuted as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_muted'] = $includeMuted;
            }
        }
        // query params
        if ($integrationName !== null) {
            if('form' === 'form' && is_array($integrationName)) {
                foreach($integrationName as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['integration_name'] = $integrationName;
            }
        }
        // query params
        if ($lastIncidentTimeAfter !== null) {
            if('form' === 'form' && is_array($lastIncidentTimeAfter)) {
                foreach($lastIncidentTimeAfter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['last_incident_time_after'] = $lastIncidentTimeAfter;
            }
        }
        // query params
        if ($lastIncidentTimeBefore !== null) {
            if('form' === 'form' && is_array($lastIncidentTimeBefore)) {
                foreach($lastIncidentTimeBefore as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['last_incident_time_before'] = $lastIncidentTimeBefore;
            }
        }
        // query params
        if ($pageSize !== null) {
            if('form' === 'form' && is_array($pageSize)) {
                foreach($pageSize as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['page_size'] = $pageSize;
            }
        }
        // query params
        if ($startDate !== null) {
            if('form' === 'form' && is_array($startDate)) {
                foreach($startDate as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['start_date'] = $startDate;
            }
        }
        // query params
        if ($status !== null) {
            if('form' === 'form' && is_array($status)) {
                foreach($status as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['status'] = $status;
            }
        }




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation issuesRetrieve
     *
     * @param  string $id id (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Issue
     */
    public function issuesRetrieve($id)
    {
        list($response) = $this->issuesRetrieveWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation issuesRetrieveWithHttpInfo
     *
     * @param  string $id (required)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Issue, HTTP status code, HTTP response headers (array of strings)
     */
    public function issuesRetrieveWithHttpInfo($id)
    {
        $request = $this->issuesRetrieveRequest($id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\OpenAPI\Client\Model\Issue' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Issue', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\Issue';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\OpenAPI\Client\Model\Issue',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation issuesRetrieveAsync
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesRetrieveAsync($id)
    {
        return $this->issuesRetrieveAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation issuesRetrieveAsyncWithHttpInfo
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function issuesRetrieveAsyncWithHttpInfo($id)
    {
        $returnType = '\OpenAPI\Client\Model\Issue';
        $request = $this->issuesRetrieveRequest($id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'issuesRetrieve'
     *
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function issuesRetrieveRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling issuesRetrieve'
            );
        }

        $resourcePath = '/issues/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
