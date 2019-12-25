<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a particular interest-based topic to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.UserInterestInfo</code>
 */
class UserInterestInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_category = 1;</code>
     */
    protected $user_interest_category = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $user_interest_category
     *           The UserInterest resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_category = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUserInterestCategory()
    {
        return $this->user_interest_category;
    }

    /**
     * Returns the unboxed value from <code>getUserInterestCategory()</code>

     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_category = 1;</code>
     * @return string|null
     */
    public function getUserInterestCategoryUnwrapped()
    {
        return $this->readWrapperValue("user_interest_category");
    }

    /**
     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_category = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUserInterestCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->user_interest_category = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The UserInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_interest_category = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUserInterestCategoryUnwrapped($var)
    {
        $this->writeWrapperValue("user_interest_category", $var);
        return $this;}

}

