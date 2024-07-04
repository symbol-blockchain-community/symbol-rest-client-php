<?php
/**
 * NodeKeyLinkTransactionDTO
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
 * NodeKeyLinkTransactionDTO Class Doc Comment
 *
 * @category Class
 * @description Transaction to link a public key to an account. TLS uses the linked public key to create sessions. Required for node operators.
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NodeKeyLinkTransactionDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NodeKeyLinkTransactionDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'size' => 'int',
        'signature' => 'string',
        'signer_public_key' => 'string',
        'version' => 'int',
        'network' => '\SymbolRestClient\Model\NetworkTypeEnum',
        'type' => 'int',
        'max_fee' => 'string',
        'deadline' => 'string',
        'linked_public_key' => 'string',
        'link_action' => '\SymbolRestClient\Model\LinkActionEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'size' => 'int64',
        'signature' => null,
        'signer_public_key' => 'hex',
        'version' => null,
        'network' => null,
        'type' => null,
        'max_fee' => null,
        'deadline' => null,
        'linked_public_key' => 'hex',
        'link_action' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'size' => false,
        'signature' => false,
        'signer_public_key' => false,
        'version' => false,
        'network' => false,
        'type' => false,
        'max_fee' => false,
        'deadline' => false,
        'linked_public_key' => false,
        'link_action' => false
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
        'size' => 'size',
        'signature' => 'signature',
        'signer_public_key' => 'signerPublicKey',
        'version' => 'version',
        'network' => 'network',
        'type' => 'type',
        'max_fee' => 'maxFee',
        'deadline' => 'deadline',
        'linked_public_key' => 'linkedPublicKey',
        'link_action' => 'linkAction'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'size' => 'setSize',
        'signature' => 'setSignature',
        'signer_public_key' => 'setSignerPublicKey',
        'version' => 'setVersion',
        'network' => 'setNetwork',
        'type' => 'setType',
        'max_fee' => 'setMaxFee',
        'deadline' => 'setDeadline',
        'linked_public_key' => 'setLinkedPublicKey',
        'link_action' => 'setLinkAction'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'size' => 'getSize',
        'signature' => 'getSignature',
        'signer_public_key' => 'getSignerPublicKey',
        'version' => 'getVersion',
        'network' => 'getNetwork',
        'type' => 'getType',
        'max_fee' => 'getMaxFee',
        'deadline' => 'getDeadline',
        'linked_public_key' => 'getLinkedPublicKey',
        'link_action' => 'getLinkAction'
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
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('signature', $data ?? [], null);
        $this->setIfExists('signer_public_key', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('network', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('max_fee', $data ?? [], null);
        $this->setIfExists('deadline', $data ?? [], null);
        $this->setIfExists('linked_public_key', $data ?? [], null);
        $this->setIfExists('link_action', $data ?? [], null);
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

        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['signature'] === null) {
            $invalidProperties[] = "'signature' can't be null";
        }
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
        if ($this->container['max_fee'] === null) {
            $invalidProperties[] = "'max_fee' can't be null";
        }
        if ($this->container['deadline'] === null) {
            $invalidProperties[] = "'deadline' can't be null";
        }
        if ($this->container['linked_public_key'] === null) {
            $invalidProperties[] = "'linked_public_key' can't be null";
        }
        if ($this->container['link_action'] === null) {
            $invalidProperties[] = "'link_action' can't be null";
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
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size A number that allows uint 32 values.
     *
     * @return self
     */
    public function setSize($size)
    {
        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return string
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param string $signature Entity's signature generated by the signer.
     *
     * @return self
     */
    public function setSignature($signature)
    {
        if (is_null($signature)) {
            throw new \InvalidArgumentException('non-nullable signature cannot be null');
        }
        $this->container['signature'] = $signature;

        return $this;
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
     * Gets max_fee
     *
     * @return string
     */
    public function getMaxFee()
    {
        return $this->container['max_fee'];
    }

    /**
     * Sets max_fee
     *
     * @param string $max_fee Absolute amount. An amount of 123456789 (absolute) for a mosaic with divisibility 6 means 123.456789 (relative).
     *
     * @return self
     */
    public function setMaxFee($max_fee)
    {
        if (is_null($max_fee)) {
            throw new \InvalidArgumentException('non-nullable max_fee cannot be null');
        }
        $this->container['max_fee'] = $max_fee;

        return $this;
    }

    /**
     * Gets deadline
     *
     * @return string
     */
    public function getDeadline()
    {
        return $this->container['deadline'];
    }

    /**
     * Sets deadline
     *
     * @param string $deadline Duration expressed in number of blocks.
     *
     * @return self
     */
    public function setDeadline($deadline)
    {
        if (is_null($deadline)) {
            throw new \InvalidArgumentException('non-nullable deadline cannot be null');
        }
        $this->container['deadline'] = $deadline;

        return $this;
    }

    /**
     * Gets linked_public_key
     *
     * @return string
     */
    public function getLinkedPublicKey()
    {
        return $this->container['linked_public_key'];
    }

    /**
     * Sets linked_public_key
     *
     * @param string $linked_public_key Public key.
     *
     * @return self
     */
    public function setLinkedPublicKey($linked_public_key)
    {
        if (is_null($linked_public_key)) {
            throw new \InvalidArgumentException('non-nullable linked_public_key cannot be null');
        }
        $this->container['linked_public_key'] = $linked_public_key;

        return $this;
    }

    /**
     * Gets link_action
     *
     * @return \SymbolRestClient\Model\LinkActionEnum
     */
    public function getLinkAction()
    {
        return $this->container['link_action'];
    }

    /**
     * Sets link_action
     *
     * @param \SymbolRestClient\Model\LinkActionEnum $link_action link_action
     *
     * @return self
     */
    public function setLinkAction($link_action)
    {
        if (is_null($link_action)) {
            throw new \InvalidArgumentException('non-nullable link_action cannot be null');
        }
        $this->container['link_action'] = $link_action;

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


