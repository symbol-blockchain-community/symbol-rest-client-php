<?php
/**
 * NodeIdentityEqualityStrategy
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
use \SymbolRestClient\ObjectSerializer;

/**
 * NodeIdentityEqualityStrategy Class Doc Comment
 *
 * @category Class
 * @description Node equality strategy. Defines if the identifier for the node must be its public key or host.
 * @package  SymbolRestClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NodeIdentityEqualityStrategy
{
    /**
     * Possible values of this enum
     */
    public const HOST = 'host';

    public const PUBLIC_KEY = 'public-key';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::HOST,
            self::PUBLIC_KEY
        ];
    }
}

