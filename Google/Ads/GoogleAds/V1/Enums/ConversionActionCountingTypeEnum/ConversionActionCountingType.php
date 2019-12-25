<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/conversion_action_counting_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\ConversionActionCountingTypeEnum;

use UnexpectedValueException;

/**
 * Indicates how conversions for this action will be counted. For more
 * information, see https://support.google.com/google-ads/answer/3438531.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ConversionActionCountingTypeEnum.ConversionActionCountingType</code>
 */
class ConversionActionCountingType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Count only one conversion per click.
     *
     * Generated from protobuf enum <code>ONE_PER_CLICK = 2;</code>
     */
    const ONE_PER_CLICK = 2;
    /**
     * Count all conversions per click.
     *
     * Generated from protobuf enum <code>MANY_PER_CLICK = 3;</code>
     */
    const MANY_PER_CLICK = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ONE_PER_CLICK => 'ONE_PER_CLICK',
        self::MANY_PER_CLICK => 'MANY_PER_CLICK',
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
class_alias(ConversionActionCountingType::class, \Google\Ads\GoogleAds\V1\Enums\ConversionActionCountingTypeEnum_ConversionActionCountingType::class);

