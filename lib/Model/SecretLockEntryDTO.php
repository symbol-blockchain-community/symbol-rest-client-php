<?php
/**
 * SecretLockEntryDTO
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
 * SecretLockEntryDTO Class Doc Comment
 *
 * @category Class
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SecretLockEntryDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SecretLockEntryDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'version' => 'int',
        'owner_address' => 'string',
        'mosaic_id' => 'string',
        'amount' => 'string',
        'end_height' => 'string',
        'status' => '\SymbolRestClient\Model\LockStatus',
        'hash_algorithm' => '\SymbolRestClient\Model\LockHashAlgorithmEnum',
        'secret' => 'string',
        'recipient_address' => 'string',
        'composite_hash' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'version' => null,
        'owner_address' => null,
        'mosaic_id' => 'hex',
        'amount' => null,
        'end_height' => null,
        'status' => null,
        'hash_algorithm' => null,
        'secret' => 'hex',
        'recipient_address' => null,
        'composite_hash' => 'hex'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'version' => false,
        'owner_address' => false,
        'mosaic_id' => false,
        'amount' => false,
        'end_height' => false,
        'status' => false,
        'hash_algorithm' => false,
        'secret' => false,
        'recipient_address' => false,
        'composite_hash' => false
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
        'version' => 'version',
        'owner_address' => 'ownerAddress',
        'mosaic_id' => 'mosaicId',
        'amount' => 'amount',
        'end_height' => 'endHeight',
        'status' => 'status',
        'hash_algorithm' => 'hashAlgorithm',
        'secret' => 'secret',
        'recipient_address' => 'recipientAddress',
        'composite_hash' => 'compositeHash'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'version' => 'setVersion',
        'owner_address' => 'setOwnerAddress',
        'mosaic_id' => 'setMosaicId',
        'amount' => 'setAmount',
        'end_height' => 'setEndHeight',
        'status' => 'setStatus',
        'hash_algorithm' => 'setHashAlgorithm',
        'secret' => 'setSecret',
        'recipient_address' => 'setRecipientAddress',
        'composite_hash' => 'setCompositeHash'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'version' => 'getVersion',
        'owner_address' => 'getOwnerAddress',
        'mosaic_id' => 'getMosaicId',
        'amount' => 'getAmount',
        'end_height' => 'getEndHeight',
        'status' => 'getStatus',
        'hash_algorithm' => 'getHashAlgorithm',
        'secret' => 'getSecret',
        'recipient_address' => 'getRecipientAddress',
        'composite_hash' => 'getCompositeHash'
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
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('owner_address', $data ?? [], null);
        $this->setIfExists('mosaic_id', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('end_height', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('hash_algorithm', $data ?? [], null);
        $this->setIfExists('secret', $data ?? [], null);
        $this->setIfExists('recipient_address', $data ?? [], null);
        $this->setIfExists('composite_hash', $data ?? [], null);
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

        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['owner_address'] === null) {
            $invalidProperties[] = "'owner_address' can't be null";
        }
        if ($this->container['mosaic_id'] === null) {
            $invalidProperties[] = "'mosaic_id' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['end_height'] === null) {
            $invalidProperties[] = "'end_height' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['hash_algorithm'] === null) {
            $invalidProperties[] = "'hash_algorithm' can't be null";
        }
        if ($this->container['secret'] === null) {
            $invalidProperties[] = "'secret' can't be null";
        }
        if ($this->container['recipient_address'] === null) {
            $invalidProperties[] = "'recipient_address' can't be null";
        }
        if ($this->container['composite_hash'] === null) {
            $invalidProperties[] = "'composite_hash' can't be null";
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
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version of the state
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets owner_address
     *
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->container['owner_address'];
    }

    /**
     * Sets owner_address
     *
     * @param string $owner_address Address encoded using a 32-character set.
     *
     * @return self
     */
    public function setOwnerAddress($owner_address)
    {
        if (is_null($owner_address)) {
            throw new \InvalidArgumentException('non-nullable owner_address cannot be null');
        }
        $this->container['owner_address'] = $owner_address;

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
     * @param string $mosaic_id Mosaic identifier.
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
     * Gets end_height
     *
     * @return string
     */
    public function getEndHeight()
    {
        return $this->container['end_height'];
    }

    /**
     * Sets end_height
     *
     * @param string $end_height Height of the blockchain.
     *
     * @return self
     */
    public function setEndHeight($end_height)
    {
        if (is_null($end_height)) {
            throw new \InvalidArgumentException('non-nullable end_height cannot be null');
        }
        $this->container['end_height'] = $end_height;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SymbolRestClient\Model\LockStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SymbolRestClient\Model\LockStatus $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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
     * @param string $secret Secret.
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
     * @param string $recipient_address Address encoded using a 32-character set.
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
     * Gets composite_hash
     *
     * @return string
     */
    public function getCompositeHash()
    {
        return $this->container['composite_hash'];
    }

    /**
     * Sets composite_hash
     *
     * @param string $composite_hash composite_hash
     *
     * @return self
     */
    public function setCompositeHash($composite_hash)
    {
        if (is_null($composite_hash)) {
            throw new \InvalidArgumentException('non-nullable composite_hash cannot be null');
        }
        $this->container['composite_hash'] = $composite_hash;

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


