<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/asset_types.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Text asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.TextAsset</code>
 */
class TextAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Text content of the text asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     */
    protected $text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $text
     *           Text content of the text asset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Text content of the text asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * Text content of the text asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * Text content of the text asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Text content of the text asset.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

}

