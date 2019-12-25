<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/customer_pay_per_conversion_eligibility_failure_reason.proto

namespace Google\Ads\GoogleAds\V1\Enums\CustomerPayPerConversionEligibilityFailureReasonEnum;

use UnexpectedValueException;

/**
 * Enum describing possible reasons a customer is not eligible to use
 * PaymentMode.CONVERSIONS.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.CustomerPayPerConversionEligibilityFailureReasonEnum.CustomerPayPerConversionEligibilityFailureReason</code>
 */
class CustomerPayPerConversionEligibilityFailureReason
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
     * Customer does not have enough conversions.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_CONVERSIONS = 2;</code>
     */
    const NOT_ENOUGH_CONVERSIONS = 2;
    /**
     * Customer's conversion lag is too high.
     *
     * Generated from protobuf enum <code>CONVERSION_LAG_TOO_HIGH = 3;</code>
     */
    const CONVERSION_LAG_TOO_HIGH = 3;
    /**
     * Customer uses shared budgets.
     *
     * Generated from protobuf enum <code>HAS_CAMPAIGN_WITH_SHARED_BUDGET = 4;</code>
     */
    const HAS_CAMPAIGN_WITH_SHARED_BUDGET = 4;
    /**
     * Customer has conversions with ConversionActionType.UPLOAD_CLICKS.
     *
     * Generated from protobuf enum <code>HAS_UPLOAD_CLICKS_CONVERSION = 5;</code>
     */
    const HAS_UPLOAD_CLICKS_CONVERSION = 5;
    /**
     * Customer's average daily spend is too high.
     *
     * Generated from protobuf enum <code>AVERAGE_DAILY_SPEND_TOO_HIGH = 6;</code>
     */
    const AVERAGE_DAILY_SPEND_TOO_HIGH = 6;
    /**
     * Customer's eligibility has not yet been calculated by the Google Ads
     * backend. Check back soon.
     *
     * Generated from protobuf enum <code>ANALYSIS_NOT_COMPLETE = 7;</code>
     */
    const ANALYSIS_NOT_COMPLETE = 7;
    /**
     * Customer is not eligible due to other reasons.
     *
     * Generated from protobuf enum <code>OTHER = 8;</code>
     */
    const OTHER = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NOT_ENOUGH_CONVERSIONS => 'NOT_ENOUGH_CONVERSIONS',
        self::CONVERSION_LAG_TOO_HIGH => 'CONVERSION_LAG_TOO_HIGH',
        self::HAS_CAMPAIGN_WITH_SHARED_BUDGET => 'HAS_CAMPAIGN_WITH_SHARED_BUDGET',
        self::HAS_UPLOAD_CLICKS_CONVERSION => 'HAS_UPLOAD_CLICKS_CONVERSION',
        self::AVERAGE_DAILY_SPEND_TOO_HIGH => 'AVERAGE_DAILY_SPEND_TOO_HIGH',
        self::ANALYSIS_NOT_COMPLETE => 'ANALYSIS_NOT_COMPLETE',
        self::OTHER => 'OTHER',
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
class_alias(CustomerPayPerConversionEligibilityFailureReason::class, \Google\Ads\GoogleAds\V1\Enums\CustomerPayPerConversionEligibilityFailureReasonEnum_CustomerPayPerConversionEligibilityFailureReason::class);

