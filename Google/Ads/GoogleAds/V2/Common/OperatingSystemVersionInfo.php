<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an operating system version to be targeted.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.OperatingSystemVersionInfo</code>
 */
class OperatingSystemVersionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_version_constant = 1;</code>
     */
    protected $operating_system_version_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $operating_system_version_constant
     *           The operating system version constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_version_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getOperatingSystemVersionConstant()
    {
        return $this->operating_system_version_constant;
    }

    /**
     * Returns the unboxed value from <code>getOperatingSystemVersionConstant()</code>

     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_version_constant = 1;</code>
     * @return string|null
     */
    public function getOperatingSystemVersionConstantUnwrapped()
    {
        return $this->readWrapperValue("operating_system_version_constant");
    }

    /**
     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_version_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setOperatingSystemVersionConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->operating_system_version_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The operating system version constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue operating_system_version_constant = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setOperatingSystemVersionConstantUnwrapped($var)
    {
        $this->writeWrapperValue("operating_system_version_constant", $var);
        return $this;}

}

