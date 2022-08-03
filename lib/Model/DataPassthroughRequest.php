<?php
/**
 * DataPassthroughRequest
 *
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * DataPassthroughRequest Class Doc Comment
 *
 * @category Class
 * @description # The DataPassthrough Object ### Description The &#x60;DataPassthrough&#x60; object is used to send information to an otherwise-unsupported third-party endpoint.  ### Usage Example Create a &#x60;DataPassthrough&#x60; to get team hierarchies from your Rippling integration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class DataPassthroughRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DataPassthroughRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'method' => 'MethodEnum',
        'path' => 'string',
        'baseUrlOverride' => 'string',
        'data' => 'string',
        'multipartFormData' => '\OpenAPI\Client\Model\MultipartFormFieldRequest[]',
        'headers' => 'array<string,mixed>',
        'requestFormat' => 'RequestFormatEnum',
        'normalizeResponse' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'method' => null,
        'path' => null,
        'baseUrlOverride' => null,
        'data' => null,
        'multipartFormData' => null,
        'headers' => null,
        'requestFormat' => null,
        'normalizeResponse' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'method' => 'method',
        'path' => 'path',
        'baseUrlOverride' => 'base_url_override',
        'data' => 'data',
        'multipartFormData' => 'multipart_form_data',
        'headers' => 'headers',
        'requestFormat' => 'request_format',
        'normalizeResponse' => 'normalize_response'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'method' => 'setMethod',
        'path' => 'setPath',
        'baseUrlOverride' => 'setBaseUrlOverride',
        'data' => 'setData',
        'multipartFormData' => 'setMultipartFormData',
        'headers' => 'setHeaders',
        'requestFormat' => 'setRequestFormat',
        'normalizeResponse' => 'setNormalizeResponse'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'method' => 'getMethod',
        'path' => 'getPath',
        'baseUrlOverride' => 'getBaseUrlOverride',
        'data' => 'getData',
        'multipartFormData' => 'getMultipartFormData',
        'headers' => 'getHeaders',
        'requestFormat' => 'getRequestFormat',
        'normalizeResponse' => 'getNormalizeResponse'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['method'] = $data['method'] ?? null;
        $this->container['path'] = $data['path'] ?? null;
        $this->container['baseUrlOverride'] = $data['baseUrlOverride'] ?? null;
        $this->container['data'] = $data['data'] ?? null;
        $this->container['multipartFormData'] = $data['multipartFormData'] ?? null;
        $this->container['headers'] = $data['headers'] ?? null;
        $this->container['requestFormat'] = $data['requestFormat'] ?? null;
        $this->container['normalizeResponse'] = $data['normalizeResponse'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['path'] === null) {
            $invalidProperties[] = "'path' can't be null";
        }
        if ((mb_strlen($this->container['path']) < 1)) {
            $invalidProperties[] = "invalid value for 'path', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['baseUrlOverride']) && (mb_strlen($this->container['baseUrlOverride']) < 1)) {
            $invalidProperties[] = "invalid value for 'baseUrlOverride', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['data']) && (mb_strlen($this->container['data']) < 1)) {
            $invalidProperties[] = "invalid value for 'data', the character length must be bigger than or equal to 1.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets method
     *
     * @return MethodEnum
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param MethodEnum $method method
     *
     * @return self
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
     * Sets path
     *
     * @param string $path path
     *
     * @return self
     */
    public function setPath($path)
    {

        if ((mb_strlen($path) < 1)) {
            throw new \InvalidArgumentException('invalid length for $path when calling DataPassthroughRequest., must be bigger than or equal to 1.');
        }

        $this->container['path'] = $path;

        return $this;
    }

    /**
     * Gets baseUrlOverride
     *
     * @return string|null
     */
    public function getBaseUrlOverride()
    {
        return $this->container['baseUrlOverride'];
    }

    /**
     * Sets baseUrlOverride
     *
     * @param string|null $baseUrlOverride baseUrlOverride
     *
     * @return self
     */
    public function setBaseUrlOverride($baseUrlOverride)
    {

        if (!is_null($baseUrlOverride) && (mb_strlen($baseUrlOverride) < 1)) {
            throw new \InvalidArgumentException('invalid length for $baseUrlOverride when calling DataPassthroughRequest., must be bigger than or equal to 1.');
        }

        $this->container['baseUrlOverride'] = $baseUrlOverride;

        return $this;
    }

    /**
     * Gets data
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param string|null $data data
     *
     * @return self
     */
    public function setData($data)
    {

        if (!is_null($data) && (mb_strlen($data) < 1)) {
            throw new \InvalidArgumentException('invalid length for $data when calling DataPassthroughRequest., must be bigger than or equal to 1.');
        }

        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets multipartFormData
     *
     * @return \OpenAPI\Client\Model\MultipartFormFieldRequest[]|null
     */
    public function getMultipartFormData()
    {
        return $this->container['multipartFormData'];
    }

    /**
     * Sets multipartFormData
     *
     * @param \OpenAPI\Client\Model\MultipartFormFieldRequest[]|null $multipartFormData Pass an array of `MultipartFormField` objects in here instead of using the `data` param if `request_format` is set to `MULTIPART`.
     *
     * @return self
     */
    public function setMultipartFormData($multipartFormData)
    {
        $this->container['multipartFormData'] = $multipartFormData;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return array<string,mixed>|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param array<string,mixed>|null $headers The headers to use for the request (Merge will handle the account's authorization headers). `Content-Type` header is required for passthrough. Choose content type corresponding to expected format of receiving server.
     *
     * @return self
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets requestFormat
     *
     * @return RequestFormatEnum|null
     */
    public function getRequestFormat()
    {
        return $this->container['requestFormat'];
    }

    /**
     * Sets requestFormat
     *
     * @param RequestFormatEnum|null $requestFormat requestFormat
     *
     * @return self
     */
    public function setRequestFormat($requestFormat)
    {
        $this->container['requestFormat'] = $requestFormat;

        return $this;
    }

    /**
     * Gets normalizeResponse
     *
     * @return bool|null
     */
    public function getNormalizeResponse()
    {
        return $this->container['normalizeResponse'];
    }

    /**
     * Sets normalizeResponse
     *
     * @param bool|null $normalizeResponse normalizeResponse
     *
     * @return self
     */
    public function setNormalizeResponse($normalizeResponse)
    {
        $this->container['normalizeResponse'] = $normalizeResponse;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

