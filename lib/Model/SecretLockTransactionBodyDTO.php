<?php
/**
 * SecretLockTransactionBodyDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Catapult REST Endpoints
 *
 * OpenAPI Specification of catapult-rest
 *
 * The version of the OpenAPI document: 1.0.4
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SymbolRestClient\Model;

use \ArrayAccess;
use \SymbolRestClient\ObjectSerializer;

/**
 * SecretLockTransactionBodyDTO Class Doc Comment
 *
 * @category Class
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SecretLockTransactionBodyDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SecretLockTransactionBodyDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recipient_address' => 'string',
        'secret' => 'string',
        'mosaic_id' => 'string',
        'amount' => 'string',
        'duration' => 'string',
        'hash_algorithm' => '\SymbolRestClient\Model\LockHashAlgorithmEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recipient_address' => null,
        'secret' => 'hex',
        'mosaic_id' => 'hex',
        'amount' => null,
        'duration' => null,
        'hash_algorithm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'recipient_address' => false,
        'secret' => false,
        'mosaic_id' => false,
        'amount' => false,
        'duration' => false,
        'hash_algorithm' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'recipient_address' => 'recipientAddress',
        'secret' => 'secret',
        'mosaic_id' => 'mosaicId',
        'amount' => 'amount',
        'duration' => 'duration',
        'hash_algorithm' => 'hashAlgorithm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient_address' => 'setRecipientAddress',
        'secret' => 'setSecret',
        'mosaic_id' => 'setMosaicId',
        'amount' => 'setAmount',
        'duration' => 'setDuration',
        'hash_algorithm' => 'setHashAlgorithm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient_address' => 'getRecipientAddress',
        'secret' => 'getSecret',
        'mosaic_id' => 'getMosaicId',
        'amount' => 'getAmount',
        'duration' => 'getDuration',
        'hash_algorithm' => 'getHashAlgorithm'
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
        $this->setIfExists('recipient_address', $data ?? [], null);
        $this->setIfExists('secret', $data ?? [], null);
        $this->setIfExists('mosaic_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('hash_algorithm', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['recipient_address'] === null) {
            $invalidProperties[] = "'recipient_address' can't be null";
        }
        if ($this->container['secret'] === null) {
            $invalidProperties[] = "'secret' can't be null";
        }
        if ($this->container['mosaic_id'] === null) {
            $invalidProperties[] = "'mosaic_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['hash_algorithm'] === null) {
            $invalidProperties[] = "'hash_algorithm' can't be null";
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
     * Gets recipient_address
     *
     * @return string
     */
    public function getRecipientAddress()
    {
        return $this->container['recipient_address'];
    }

    /**
     * Sets recipient_address
     *
     * @param string $recipient_address Address expressed in Base32 format. If the bit 0 of byte 0 is not set (like in 0x90), then it is a regular address. Example: TAOXUJOTTW3W5XTBQMQEX3SQNA6MCUVGXLXR3TA.  Otherwise (e.g. 0x91) it represents a namespace id which starts at byte 1. Example: THBIMC3THGH5RUYAAAAAAAAAAAAAAAAAAAAAAAA
     *
     * @return self
     */
    public function setRecipientAddress($recipient_address)
    {
        if (is_null($recipient_address)) {
            throw new \InvalidArgumentException('non-nullable recipient_address cannot be null');
        }
        $this->container['recipient_address'] = $recipient_address;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret secret
     *
     * @return self
     */
    public function setSecret($secret)
    {
        if (is_null($secret)) {
            throw new \InvalidArgumentException('non-nullable secret cannot be null');
        }
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets mosaic_id
     *
     * @return string
     */
    public function getMosaicId()
    {
        return $this->container['mosaic_id'];
    }

    /**
     * Sets mosaic_id
     *
     * @param string $mosaic_id Mosaic identifier. If the most significant bit of byte 0 is set, a namespaceId (alias) is used instead of the real mosaic identifier.
     *
     * @return self
     */
    public function setMosaicId($mosaic_id)
    {
        if (is_null($mosaic_id)) {
            throw new \InvalidArgumentException('non-nullable mosaic_id cannot be null');
        }
        $this->container['mosaic_id'] = $mosaic_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount Absolute amount. An amount of 123456789 (absolute) for a mosaic with divisibility 6 means 123.456789 (relative).
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration Duration expressed in number of blocks.
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets hash_algorithm
     *
     * @return \SymbolRestClient\Model\LockHashAlgorithmEnum
     */
    public function getHashAlgorithm()
    {
        return $this->container['hash_algorithm'];
    }

    /**
     * Sets hash_algorithm
     *
     * @param \SymbolRestClient\Model\LockHashAlgorithmEnum $hash_algorithm hash_algorithm
     *
     * @return self
     */
    public function setHashAlgorithm($hash_algorithm)
    {
        if (is_null($hash_algorithm)) {
            throw new \InvalidArgumentException('non-nullable hash_algorithm cannot be null');
        }
        $this->container['hash_algorithm'] = $hash_algorithm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


