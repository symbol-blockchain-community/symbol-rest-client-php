<?php
/**
 * EmbeddedMosaicMetadataTransactionDTO
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
 * EmbeddedMosaicMetadataTransactionDTO Class Doc Comment
 *
 * @category Class
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EmbeddedMosaicMetadataTransactionDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EmbeddedMosaicMetadataTransactionDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'signer_public_key' => 'string',
        'version' => 'int',
        'network' => '\SymbolRestClient\Model\NetworkTypeEnum',
        'type' => 'int',
        'target_address' => 'string',
        'scoped_metadata_key' => 'string',
        'target_mosaic_id' => 'string',
        'value_size_delta' => 'int',
        'value_size' => 'int',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'signer_public_key' => 'hex',
        'version' => null,
        'network' => null,
        'type' => null,
        'target_address' => null,
        'scoped_metadata_key' => 'hex',
        'target_mosaic_id' => 'hex',
        'value_size_delta' => null,
        'value_size' => 'int64',
        'value' => 'hex'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'signer_public_key' => false,
        'version' => false,
        'network' => false,
        'type' => false,
        'target_address' => false,
        'scoped_metadata_key' => false,
        'target_mosaic_id' => false,
        'value_size_delta' => false,
        'value_size' => false,
        'value' => false
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
        'signer_public_key' => 'signerPublicKey',
        'version' => 'version',
        'network' => 'network',
        'type' => 'type',
        'target_address' => 'targetAddress',
        'scoped_metadata_key' => 'scopedMetadataKey',
        'target_mosaic_id' => 'targetMosaicId',
        'value_size_delta' => 'valueSizeDelta',
        'value_size' => 'valueSize',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signer_public_key' => 'setSignerPublicKey',
        'version' => 'setVersion',
        'network' => 'setNetwork',
        'type' => 'setType',
        'target_address' => 'setTargetAddress',
        'scoped_metadata_key' => 'setScopedMetadataKey',
        'target_mosaic_id' => 'setTargetMosaicId',
        'value_size_delta' => 'setValueSizeDelta',
        'value_size' => 'setValueSize',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signer_public_key' => 'getSignerPublicKey',
        'version' => 'getVersion',
        'network' => 'getNetwork',
        'type' => 'getType',
        'target_address' => 'getTargetAddress',
        'scoped_metadata_key' => 'getScopedMetadataKey',
        'target_mosaic_id' => 'getTargetMosaicId',
        'value_size_delta' => 'getValueSizeDelta',
        'value_size' => 'getValueSize',
        'value' => 'getValue'
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
        $this->setIfExists('signer_public_key', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('target_address', $data ?? [], null);
        $this->setIfExists('scoped_metadata_key', $data ?? [], null);
        $this->setIfExists('target_mosaic_id', $data ?? [], null);
        $this->setIfExists('value_size_delta', $data ?? [], null);
        $this->setIfExists('value_size', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
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

        if ($this->container['signer_public_key'] === null) {
            $invalidProperties[] = "'signer_public_key' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if ($this->container['network'] === null) {
            $invalidProperties[] = "'network' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['target_address'] === null) {
            $invalidProperties[] = "'target_address' can't be null";
        }
        if ($this->container['scoped_metadata_key'] === null) {
            $invalidProperties[] = "'scoped_metadata_key' can't be null";
        }
        if ($this->container['target_mosaic_id'] === null) {
            $invalidProperties[] = "'target_mosaic_id' can't be null";
        }
        if ($this->container['value_size_delta'] === null) {
            $invalidProperties[] = "'value_size_delta' can't be null";
        }
        if ($this->container['value_size'] === null) {
            $invalidProperties[] = "'value_size' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets signer_public_key
     *
     * @return string
     */
    public function getSignerPublicKey()
    {
        return $this->container['signer_public_key'];
    }

    /**
     * Sets signer_public_key
     *
     * @param string $signer_public_key Public key.
     *
     * @return self
     */
    public function setSignerPublicKey($signer_public_key)
    {
        if (is_null($signer_public_key)) {
            throw new \InvalidArgumentException('non-nullable signer_public_key cannot be null');
        }
        $this->container['signer_public_key'] = $signer_public_key;

        return $this;
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
     * @param int $version Entity version.
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
     * Gets network
     *
     * @return \SymbolRestClient\Model\NetworkTypeEnum
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     *
     * @param \SymbolRestClient\Model\NetworkTypeEnum $network network
     *
     * @return self
     */
    public function setNetwork($network)
    {
        if (is_null($network)) {
            throw new \InvalidArgumentException('non-nullable network cannot be null');
        }
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets target_address
     *
     * @return string
     */
    public function getTargetAddress()
    {
        return $this->container['target_address'];
    }

    /**
     * Sets target_address
     *
     * @param string $target_address Address expressed in Base32 format. If the bit 0 of byte 0 is not set (like in 0x90), then it is a regular address. Example: TAOXUJOTTW3W5XTBQMQEX3SQNA6MCUVGXLXR3TA.  Otherwise (e.g. 0x91) it represents a namespace id which starts at byte 1. Example: THBIMC3THGH5RUYAAAAAAAAAAAAAAAAAAAAAAAA
     *
     * @return self
     */
    public function setTargetAddress($target_address)
    {
        if (is_null($target_address)) {
            throw new \InvalidArgumentException('non-nullable target_address cannot be null');
        }
        $this->container['target_address'] = $target_address;

        return $this;
    }

    /**
     * Gets scoped_metadata_key
     *
     * @return string
     */
    public function getScopedMetadataKey()
    {
        return $this->container['scoped_metadata_key'];
    }

    /**
     * Sets scoped_metadata_key
     *
     * @param string $scoped_metadata_key Metadata key scoped to source, target and type expressed.
     *
     * @return self
     */
    public function setScopedMetadataKey($scoped_metadata_key)
    {
        if (is_null($scoped_metadata_key)) {
            throw new \InvalidArgumentException('non-nullable scoped_metadata_key cannot be null');
        }
        $this->container['scoped_metadata_key'] = $scoped_metadata_key;

        return $this;
    }

    /**
     * Gets target_mosaic_id
     *
     * @return string
     */
    public function getTargetMosaicId()
    {
        return $this->container['target_mosaic_id'];
    }

    /**
     * Sets target_mosaic_id
     *
     * @param string $target_mosaic_id Mosaic identifier. If the most significant bit of byte 0 is set, a namespaceId (alias) is used instead of the real mosaic identifier.
     *
     * @return self
     */
    public function setTargetMosaicId($target_mosaic_id)
    {
        if (is_null($target_mosaic_id)) {
            throw new \InvalidArgumentException('non-nullable target_mosaic_id cannot be null');
        }
        $this->container['target_mosaic_id'] = $target_mosaic_id;

        return $this;
    }

    /**
     * Gets value_size_delta
     *
     * @return int
     */
    public function getValueSizeDelta()
    {
        return $this->container['value_size_delta'];
    }

    /**
     * Sets value_size_delta
     *
     * @param int $value_size_delta Change in value size in bytes.
     *
     * @return self
     */
    public function setValueSizeDelta($value_size_delta)
    {
        if (is_null($value_size_delta)) {
            throw new \InvalidArgumentException('non-nullable value_size_delta cannot be null');
        }
        $this->container['value_size_delta'] = $value_size_delta;

        return $this;
    }

    /**
     * Gets value_size
     *
     * @return int
     */
    public function getValueSize()
    {
        return $this->container['value_size'];
    }

    /**
     * Sets value_size
     *
     * @param int $value_size A number that allows uint 32 values.
     *
     * @return self
     */
    public function setValueSize($value_size)
    {
        if (is_null($value_size)) {
            throw new \InvalidArgumentException('non-nullable value_size cannot be null');
        }
        $this->container['value_size'] = $value_size;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value Metadata value. If embedded in a transaction, this is calculated as xor(previous-value, value).
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

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

