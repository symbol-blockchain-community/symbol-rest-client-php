<?php
/**
 * MosaicGlobalRestrictionEntryRestrictionDTO
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
 * MosaicGlobalRestrictionEntryRestrictionDTO Class Doc Comment
 *
 * @category Class
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MosaicGlobalRestrictionEntryRestrictionDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MosaicGlobalRestrictionEntryRestrictionDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'reference_mosaic_id' => 'string',
        'restriction_value' => 'string',
        'restriction_type' => '\SymbolRestClient\Model\MosaicRestrictionTypeEnum'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'reference_mosaic_id' => 'hex',
        'restriction_value' => null,
        'restriction_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'reference_mosaic_id' => false,
        'restriction_value' => false,
        'restriction_type' => false
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
        'reference_mosaic_id' => 'referenceMosaicId',
        'restriction_value' => 'restrictionValue',
        'restriction_type' => 'restrictionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'reference_mosaic_id' => 'setReferenceMosaicId',
        'restriction_value' => 'setRestrictionValue',
        'restriction_type' => 'setRestrictionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'reference_mosaic_id' => 'getReferenceMosaicId',
        'restriction_value' => 'getRestrictionValue',
        'restriction_type' => 'getRestrictionType'
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
        $this->setIfExists('reference_mosaic_id', $data ?? [], null);
        $this->setIfExists('restriction_value', $data ?? [], null);
        $this->setIfExists('restriction_type', $data ?? [], null);
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

        if ($this->container['reference_mosaic_id'] === null) {
            $invalidProperties[] = "'reference_mosaic_id' can't be null";
        }
        if ($this->container['restriction_value'] === null) {
            $invalidProperties[] = "'restriction_value' can't be null";
        }
        if ($this->container['restriction_type'] === null) {
            $invalidProperties[] = "'restriction_type' can't be null";
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
     * Gets reference_mosaic_id
     *
     * @return string
     */
    public function getReferenceMosaicId()
    {
        return $this->container['reference_mosaic_id'];
    }

    /**
     * Sets reference_mosaic_id
     *
     * @param string $reference_mosaic_id Mosaic identifier.
     *
     * @return self
     */
    public function setReferenceMosaicId($reference_mosaic_id)
    {
        if (is_null($reference_mosaic_id)) {
            throw new \InvalidArgumentException('non-nullable reference_mosaic_id cannot be null');
        }
        $this->container['reference_mosaic_id'] = $reference_mosaic_id;

        return $this;
    }

    /**
     * Gets restriction_value
     *
     * @return string
     */
    public function getRestrictionValue()
    {
        return $this->container['restriction_value'];
    }

    /**
     * Sets restriction_value
     *
     * @param string $restriction_value Restriction value.
     *
     * @return self
     */
    public function setRestrictionValue($restriction_value)
    {
        if (is_null($restriction_value)) {
            throw new \InvalidArgumentException('non-nullable restriction_value cannot be null');
        }
        $this->container['restriction_value'] = $restriction_value;

        return $this;
    }

    /**
     * Gets restriction_type
     *
     * @return \SymbolRestClient\Model\MosaicRestrictionTypeEnum
     */
    public function getRestrictionType()
    {
        return $this->container['restriction_type'];
    }

    /**
     * Sets restriction_type
     *
     * @param \SymbolRestClient\Model\MosaicRestrictionTypeEnum $restriction_type restriction_type
     *
     * @return self
     */
    public function setRestrictionType($restriction_type)
    {
        if (is_null($restriction_type)) {
            throw new \InvalidArgumentException('non-nullable restriction_type cannot be null');
        }
        $this->container['restriction_type'] = $restriction_type;

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

