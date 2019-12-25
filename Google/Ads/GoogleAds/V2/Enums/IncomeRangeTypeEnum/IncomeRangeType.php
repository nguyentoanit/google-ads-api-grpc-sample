<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/enums/income_range_type.proto

namespace Google\Ads\GoogleAds\V2\Enums\IncomeRangeTypeEnum;

use UnexpectedValueException;

/**
 * The type of demographic income ranges (e.g. between 0% to 50%).
 *
 * Protobuf type <code>google.ads.googleads.v2.enums.IncomeRangeTypeEnum.IncomeRangeType</code>
 */
class IncomeRangeType
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
     * 0%-50%.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_0_50 = 510001;</code>
     */
    const INCOME_RANGE_0_50 = 510001;
    /**
     * 50% to 60%.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_50_60 = 510002;</code>
     */
    const INCOME_RANGE_50_60 = 510002;
    /**
     * 60% to 70%.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_60_70 = 510003;</code>
     */
    const INCOME_RANGE_60_70 = 510003;
    /**
     * 70% to 80%.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_70_80 = 510004;</code>
     */
    const INCOME_RANGE_70_80 = 510004;
    /**
     * 80% to 90%.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_80_90 = 510005;</code>
     */
    const INCOME_RANGE_80_90 = 510005;
    /**
     * Greater than 90%.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_90_UP = 510006;</code>
     */
    const INCOME_RANGE_90_UP = 510006;
    /**
     * Undetermined income range.
     *
     * Generated from protobuf enum <code>INCOME_RANGE_UNDETERMINED = 510000;</code>
     */
    const INCOME_RANGE_UNDETERMINED = 510000;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INCOME_RANGE_0_50 => 'INCOME_RANGE_0_50',
        self::INCOME_RANGE_50_60 => 'INCOME_RANGE_50_60',
        self::INCOME_RANGE_60_70 => 'INCOME_RANGE_60_70',
        self::INCOME_RANGE_70_80 => 'INCOME_RANGE_70_80',
        self::INCOME_RANGE_80_90 => 'INCOME_RANGE_80_90',
        self::INCOME_RANGE_90_UP => 'INCOME_RANGE_90_UP',
        self::INCOME_RANGE_UNDETERMINED => 'INCOME_RANGE_UNDETERMINED',
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
class_alias(IncomeRangeType::class, \Google\Ads\GoogleAds\V2\Enums\IncomeRangeTypeEnum_IncomeRangeType::class);

