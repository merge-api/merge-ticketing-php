<?php
/**
 * TeamsApi
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
 * TeamsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TeamsApi
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
     * Operation teamsList
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  \DateTime $createdAfter If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $createdBefore If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $includeDeletedData Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modifiedAfter If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modifiedBefore If provided, will only return objects modified before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $remoteId The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\PaginatedTeamList
     */
    public function teamsList($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        list($response) = $this->teamsListWithHttpInfo($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);
        return $response;
    }

    /**
     * Operation teamsListWithHttpInfo
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  \DateTime $createdAfter If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $createdBefore If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $includeDeletedData Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modifiedAfter If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modifiedBefore If provided, will only return objects modified before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $remoteId The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\PaginatedTeamList, HTTP status code, HTTP response headers (array of strings)
     */
    public function teamsListWithHttpInfo($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        $request = $this->teamsListRequest($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);

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
                    if ('\OpenAPI\Client\Model\PaginatedTeamList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\PaginatedTeamList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\PaginatedTeamList';
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
                        '\OpenAPI\Client\Model\PaginatedTeamList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation teamsListAsync
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  \DateTime $createdAfter If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $createdBefore If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $includeDeletedData Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modifiedAfter If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modifiedBefore If provided, will only return objects modified before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $remoteId The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamsListAsync($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        return $this->teamsListAsyncWithHttpInfo($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation teamsListAsyncWithHttpInfo
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  \DateTime $createdAfter If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $createdBefore If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $includeDeletedData Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modifiedAfter If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modifiedBefore If provided, will only return objects modified before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $remoteId The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamsListAsyncWithHttpInfo($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        $returnType = '\OpenAPI\Client\Model\PaginatedTeamList';
        $request = $this->teamsListRequest($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);

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
     * Create request for operation 'teamsList'
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  \DateTime $createdAfter If provided, will only return objects created after this datetime. (optional)
     * @param  \DateTime $createdBefore If provided, will only return objects created before this datetime. (optional)
     * @param  string $cursor The pagination cursor value. (optional)
     * @param  bool $includeDeletedData Whether to include data that was marked as deleted by third party webhooks. (optional)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     * @param  \DateTime $modifiedAfter If provided, will only return objects modified after this datetime. (optional)
     * @param  \DateTime $modifiedBefore If provided, will only return objects modified before this datetime. (optional)
     * @param  int $pageSize Number of results to return per page. (optional)
     * @param  string $remoteId The API provider&#39;s ID for the given object. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function teamsListRequest($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        // verify the required parameter 'xAccountToken' is set
        if ($xAccountToken === null || (is_array($xAccountToken) && count($xAccountToken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xAccountToken when calling teamsList'
            );
        }

        $resourcePath = '/teams';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($createdAfter !== null) {
            if('form' === 'form' && is_array($createdAfter)) {
                foreach($createdAfter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['created_after'] = $createdAfter;
            }
        }
        // query params
        if ($createdBefore !== null) {
            if('form' === 'form' && is_array($createdBefore)) {
                foreach($createdBefore as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['created_before'] = $createdBefore;
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
        if ($includeDeletedData !== null) {
            if('form' === 'form' && is_array($includeDeletedData)) {
                foreach($includeDeletedData as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_deleted_data'] = $includeDeletedData;
            }
        }
        // query params
        if ($includeRemoteData !== null) {
            if('form' === 'form' && is_array($includeRemoteData)) {
                foreach($includeRemoteData as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_remote_data'] = $includeRemoteData;
            }
        }
        // query params
        if ($modifiedAfter !== null) {
            if('form' === 'form' && is_array($modifiedAfter)) {
                foreach($modifiedAfter as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['modified_after'] = $modifiedAfter;
            }
        }
        // query params
        if ($modifiedBefore !== null) {
            if('form' === 'form' && is_array($modifiedBefore)) {
                foreach($modifiedBefore as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['modified_before'] = $modifiedBefore;
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
        if ($remoteId !== null) {
            if('form' === 'form' && is_array($remoteId)) {
                foreach($remoteId as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['remote_id'] = $remoteId;
            }
        }

        // header params
        if ($xAccountToken !== null) {
            $headerParams['X-Account-Token'] = ObjectSerializer::toHeaderValue($xAccountToken);
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
     * Operation teamsRetrieve
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Team
     */
    public function teamsRetrieve($xAccountToken, $id, $includeRemoteData = null)
    {
        list($response) = $this->teamsRetrieveWithHttpInfo($xAccountToken, $id, $includeRemoteData);
        return $response;
    }

    /**
     * Operation teamsRetrieveWithHttpInfo
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Team, HTTP status code, HTTP response headers (array of strings)
     */
    public function teamsRetrieveWithHttpInfo($xAccountToken, $id, $includeRemoteData = null)
    {
        $request = $this->teamsRetrieveRequest($xAccountToken, $id, $includeRemoteData);

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
                    if ('\OpenAPI\Client\Model\Team' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Team', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\Team';
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
                        '\OpenAPI\Client\Model\Team',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation teamsRetrieveAsync
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamsRetrieveAsync($xAccountToken, $id, $includeRemoteData = null)
    {
        return $this->teamsRetrieveAsyncWithHttpInfo($xAccountToken, $id, $includeRemoteData)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation teamsRetrieveAsyncWithHttpInfo
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function teamsRetrieveAsyncWithHttpInfo($xAccountToken, $id, $includeRemoteData = null)
    {
        $returnType = '\OpenAPI\Client\Model\Team';
        $request = $this->teamsRetrieveRequest($xAccountToken, $id, $includeRemoteData);

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
     * Create request for operation 'teamsRetrieve'
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function teamsRetrieveRequest($xAccountToken, $id, $includeRemoteData = null)
    {
        // verify the required parameter 'xAccountToken' is set
        if ($xAccountToken === null || (is_array($xAccountToken) && count($xAccountToken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xAccountToken when calling teamsRetrieve'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling teamsRetrieve'
            );
        }

        $resourcePath = '/teams/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($includeRemoteData !== null) {
            if('form' === 'form' && is_array($includeRemoteData)) {
                foreach($includeRemoteData as $key => $value) {
                    $queryParams[$key] = $value;
                }
            }
            else {
                $queryParams['include_remote_data'] = $includeRemoteData;
            }
        }

        // header params
        if ($xAccountToken !== null) {
            $headerParams['X-Account-Token'] = ObjectSerializer::toHeaderValue($xAccountToken);
        }

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
