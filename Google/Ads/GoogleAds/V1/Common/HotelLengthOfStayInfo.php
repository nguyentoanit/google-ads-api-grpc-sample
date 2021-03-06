<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Criterion for length of hotel stay in nights.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.HotelLengthOfStayInfo</code>
 */
class HotelLengthOfStayInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     */
    protected $min_nights = null;
    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     */
    protected $max_nights = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $min_nights
     *           Low end of the number of nights in the stay.
     *     @type \Google\Protobuf\Int64Value $max_nights
     *           High end of the number of nights in the stay.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getMinNights()
    {
        return $this->min_nights;
    }

    /**
     * Returns the unboxed value from <code>getMinNights()</code>

     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @return int|string|null
     */
    public function getMinNightsUnwrapped()
    {
        return $this->readWrapperValue("min_nights");
    }

    /**
     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMinNights($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->min_nights = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Low end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value min_nights = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMinNightsUnwrapped($var)
    {
        $this->writeWrapperValue("min_nights", $var);
        return $this;}

    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getMaxNights()
    {
        return $this->max_nights;
    }

    /**
     * Returns the unboxed value from <code>getMaxNights()</code>

     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @return int|string|null
     */
    public function getMaxNightsUnwrapped()
    {
        return $this->readWrapperValue("max_nights");
    }

    /**
     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setMaxNights($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->max_nights = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * High end of the number of nights in the stay.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value max_nights = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setMaxNightsUnwrapped($var)
    {
        $this->writeWrapperValue("max_nights", $var);
        return $this;}

}

