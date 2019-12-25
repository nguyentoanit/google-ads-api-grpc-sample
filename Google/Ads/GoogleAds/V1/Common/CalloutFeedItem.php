<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/extensions.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a callout extension.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.CalloutFeedItem</code>
 */
class CalloutFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue callout_text = 1;</code>
     */
    protected $callout_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $callout_text
     *           The callout text.
     *           The length of this string should be between 1 and 25, inclusive.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue callout_text = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCalloutText()
    {
        return $this->callout_text;
    }

    /**
     * Returns the unboxed value from <code>getCalloutText()</code>

     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue callout_text = 1;</code>
     * @return string|null
     */
    public function getCalloutTextUnwrapped()
    {
        return $this->readWrapperValue("callout_text");
    }

    /**
     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue callout_text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCalloutText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->callout_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The callout text.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue callout_text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCalloutTextUnwrapped($var)
    {
        $this->writeWrapperValue("callout_text", $var);
        return $this;}

}

