<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A language criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.LanguageInfo</code>
 */
class LanguageInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The language constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_constant = 1;</code>
     */
    protected $language_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $language_constant
     *           The language constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The language constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageConstant()
    {
        return $this->language_constant;
    }

    /**
     * Returns the unboxed value from <code>getLanguageConstant()</code>

     * The language constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_constant = 1;</code>
     * @return string|null
     */
    public function getLanguageConstantUnwrapped()
    {
        return $this->readWrapperValue("language_constant");
    }

    /**
     * The language constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The language constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_constant = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageConstantUnwrapped($var)
    {
        $this->writeWrapperValue("language_constant", $var);
        return $this;}

}

