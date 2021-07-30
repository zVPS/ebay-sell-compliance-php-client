<?php
/**
 * CorrectiveRecommendations
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Ebay\Sell\Compliance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Compliance API
 *
 * Service for providing information to sellers about their listings being non-compliant, or at risk for becoming non-compliant, against eBay listing policies.
 *
 * The version of the OpenAPI document: 1.4.1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ebay\Sell\Compliance\Model;

use \ArrayAccess;
use \Ebay\Sell\Compliance\ObjectSerializer;

/**
 * CorrectiveRecommendations Class Doc Comment
 *
 * @category Class
 * @description This type is used by the &lt;strong&gt;correctiveRecommendations&lt;/strong&gt; container, which is returned if eBay has suggestions for how to correct the given violation.
 * @package  Ebay\Sell\Compliance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CorrectiveRecommendations implements ModelInterface, ArrayAccess, \JsonSerializable
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CorrectiveRecommendations';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product_recommendation' => '\Ebay\Sell\Compliance\Model\ProductRecommendation',
        'aspect_recommendations' => '\Ebay\Sell\Compliance\Model\AspectRecommendations[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product_recommendation' => null,
        'aspect_recommendations' => null
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
        'product_recommendation' => 'productRecommendation',
        'aspect_recommendations' => 'aspectRecommendations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_recommendation' => 'setProductRecommendation',
        'aspect_recommendations' => 'setAspectRecommendations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_recommendation' => 'getProductRecommendation',
        'aspect_recommendations' => 'getAspectRecommendations'
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
        $this->container['product_recommendation'] = isset($data['product_recommendation']) ? $data['product_recommendation'] : null;
        $this->container['aspect_recommendations'] = isset($data['aspect_recommendations']) ? $data['aspect_recommendations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets product_recommendation
     *
     * @return \Ebay\Sell\Compliance\Model\ProductRecommendation|null
     */
    public function getProductRecommendation()
    {
        return $this->container['product_recommendation'];
    }

    /**
     * Sets product_recommendation
     *
     * @param \Ebay\Sell\Compliance\Model\ProductRecommendation|null $product_recommendation product_recommendation
     *
     * @return self
     */
    public function setProductRecommendation($product_recommendation)
    {
        $this->container['product_recommendation'] = $product_recommendation;

        return $this;
    }

    /**
     * Gets aspect_recommendations
     *
     * @return \Ebay\Sell\Compliance\Model\AspectRecommendations[]|null
     */
    public function getAspectRecommendations()
    {
        return $this->container['aspect_recommendations'];
    }

    /**
     * Sets aspect_recommendations
     *
     * @param \Ebay\Sell\Compliance\Model\AspectRecommendations[]|null $aspect_recommendations This container is returned for ASPECTS_ADOPTION violations if eBay has found one or more item aspect name-value pairs that may be appropriate for the seller's product. In many cases, the missing or invalid item aspect(s) shown under the corresponding violationData array, will also show up under this array with suggested value(s).
     *
     * @return self
     */
    public function setAspectRecommendations($aspect_recommendations)
    {
        $this->container['aspect_recommendations'] = $aspect_recommendations;

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
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
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


