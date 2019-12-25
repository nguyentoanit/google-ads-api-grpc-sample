<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/errors/asset_error.proto

namespace Google\Ads\GoogleAds\V2\Errors\AssetErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset errors.
 *
 * Protobuf type <code>google.ads.googleads.v2.errors.AssetErrorEnum.AssetError</code>
 */
class AssetError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The customer is not whitelisted for this asset type.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_WHITELISTED_FOR_ASSET_TYPE = 2;</code>
     */
    const CUSTOMER_NOT_WHITELISTED_FOR_ASSET_TYPE = 2;
    /**
     * Assets are duplicated across operations.
     *
     * Generated from protobuf enum <code>DUPLICATE_ASSET = 3;</code>
     */
    const DUPLICATE_ASSET = 3;
    /**
     * The asset name is duplicated, either across operations or with an
     * existing asset.
     *
     * Generated from protobuf enum <code>DUPLICATE_ASSET_NAME = 4;</code>
     */
    const DUPLICATE_ASSET_NAME = 4;
    /**
     * The Asset.asset_data oneof is empty.
     *
     * Generated from protobuf enum <code>ASSET_DATA_IS_MISSING = 5;</code>
     */
    const ASSET_DATA_IS_MISSING = 5;
    /**
     * The asset has a name which is different from an existing duplicate that
     * represents the same content.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_ASSET_NAME = 6;</code>
     */
    const CANNOT_MODIFY_ASSET_NAME = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CUSTOMER_NOT_WHITELISTED_FOR_ASSET_TYPE => 'CUSTOMER_NOT_WHITELISTED_FOR_ASSET_TYPE',
        self::DUPLICATE_ASSET => 'DUPLICATE_ASSET',
        self::DUPLICATE_ASSET_NAME => 'DUPLICATE_ASSET_NAME',
        self::ASSET_DATA_IS_MISSING => 'ASSET_DATA_IS_MISSING',
        self::CANNOT_MODIFY_ASSET_NAME => 'CANNOT_MODIFY_ASSET_NAME',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AssetError::class, \Google\Ads\GoogleAds\V2\Errors\AssetErrorEnum_AssetError::class);

