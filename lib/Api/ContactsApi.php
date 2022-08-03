<?php
/**
 * ContactsApi
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
 * ContactsApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactsApi
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
     * Operation contactsList
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
     * @return \OpenAPI\Client\Model\PaginatedContactList
     */
    public function contactsList($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        list($response) = $this->contactsListWithHttpInfo($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);
        return $response;
    }

    /**
     * Operation contactsListWithHttpInfo
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
     * @return array of \OpenAPI\Client\Model\PaginatedContactList, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactsListWithHttpInfo($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        $request = $this->contactsListRequest($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);

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
                    if ('\OpenAPI\Client\Model\PaginatedContactList' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\PaginatedContactList', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\PaginatedContactList';
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
                        '\OpenAPI\Client\Model\PaginatedContactList',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contactsListAsync
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
    public function contactsListAsync($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        return $this->contactsListAsyncWithHttpInfo($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactsListAsyncWithHttpInfo
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
    public function contactsListAsyncWithHttpInfo($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        $returnType = '\OpenAPI\Client\Model\PaginatedContactList';
        $request = $this->contactsListRequest($xAccountToken, $createdAfter, $createdBefore, $cursor, $includeDeletedData, $includeRemoteData, $modifiedAfter, $modifiedBefore, $pageSize, $remoteId);

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
     * Create request for operation 'contactsList'
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
    public function contactsListRequest($xAccountToken, $createdAfter = null, $createdBefore = null, $cursor = null, $includeDeletedData = null, $includeRemoteData = null, $modifiedAfter = null, $modifiedBefore = null, $pageSize = null, $remoteId = null)
    {
        // verify the required parameter 'xAccountToken' is set
        if ($xAccountToken === null || (is_array($xAccountToken) && count($xAccountToken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xAccountToken when calling contactsList'
            );
        }

        $resourcePath = '/contacts';
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
     * Operation contactsRetrieve
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \OpenAPI\Client\Model\Contact
     */
    public function contactsRetrieve($xAccountToken, $id, $includeRemoteData = null)
    {
        list($response) = $this->contactsRetrieveWithHttpInfo($xAccountToken, $id, $includeRemoteData);
        return $response;
    }

    /**
     * Operation contactsRetrieveWithHttpInfo
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \OpenAPI\Client\Model\Contact, HTTP status code, HTTP response headers (array of strings)
     */
    public function contactsRetrieveWithHttpInfo($xAccountToken, $id, $includeRemoteData = null)
    {
        $request = $this->contactsRetrieveRequest($xAccountToken, $id, $includeRemoteData);

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
                    if ('\OpenAPI\Client\Model\Contact' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\OpenAPI\Client\Model\Contact', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\OpenAPI\Client\Model\Contact';
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
                        '\OpenAPI\Client\Model\Contact',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation contactsRetrieveAsync
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contactsRetrieveAsync($xAccountToken, $id, $includeRemoteData = null)
    {
        return $this->contactsRetrieveAsyncWithHttpInfo($xAccountToken, $id, $includeRemoteData)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation contactsRetrieveAsyncWithHttpInfo
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function contactsRetrieveAsyncWithHttpInfo($xAccountToken, $id, $includeRemoteData = null)
    {
        $returnType = '\OpenAPI\Client\Model\Contact';
        $request = $this->contactsRetrieveRequest($xAccountToken, $id, $includeRemoteData);

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
     * Create request for operation 'contactsRetrieve'
     *
     * @param  string $xAccountToken Token identifying the end user. (required)
     * @param  string $id (required)
     * @param  bool $includeRemoteData Whether to include the original data Merge fetched from the third-party to produce these models. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function contactsRetrieveRequest($xAccountToken, $id, $includeRemoteData = null)
    {
        // verify the required parameter 'xAccountToken' is set
        if ($xAccountToken === null || (is_array($xAccountToken) && count($xAccountToken) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xAccountToken when calling contactsRetrieve'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling contactsRetrieve'
            );
        }

        $resourcePath = '/contacts/{id}';
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
