<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A text ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.TextAdInfo</code>
 */
class TextAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     */
    protected $headline = null;
    /**
     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 2;</code>
     */
    protected $description1 = null;
    /**
     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 3;</code>
     */
    protected $description2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $headline
     *           The headline of the ad.
     *     @type \Google\Protobuf\StringValue $description1
     *           The first line of the ad's description.
     *     @type \Google\Protobuf\StringValue $description2
     *           The second line of the ad's description.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Returns the unboxed value from <code>getHeadline()</code>

     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return string|null
     */
    public function getHeadlineUnwrapped()
    {
        return $this->readWrapperValue("headline");
    }

    /**
     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The headline of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlineUnwrapped($var)
    {
        $this->writeWrapperValue("headline", $var);
        return $this;}

    /**
     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription1()
    {
        return $this->description1;
    }

    /**
     * Returns the unboxed value from <code>getDescription1()</code>

     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 2;</code>
     * @return string|null
     */
    public function getDescription1Unwrapped()
    {
        return $this->readWrapperValue("description1");
    }

    /**
     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description1 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The first line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description1 = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescription1Unwrapped($var)
    {
        $this->writeWrapperValue("description1", $var);
        return $this;}

    /**
     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Returns the unboxed value from <code>getDescription2()</code>

     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 3;</code>
     * @return string|null
     */
    public function getDescription2Unwrapped()
    {
        return $this->readWrapperValue("description2");
    }

    /**
     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The second line of the ad's description.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescription2Unwrapped($var)
    {
        $this->writeWrapperValue("description2", $var);
        return $this;}

}

