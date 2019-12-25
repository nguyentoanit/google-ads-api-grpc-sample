<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/click_location.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Location criteria associated with a click.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ClickLocation</code>
 */
class ClickLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     */
    protected $city = null;
    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     */
    protected $country = null;
    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     */
    protected $metro = null;
    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     */
    protected $most_specific = null;
    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     */
    protected $region = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $city
     *           The city location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $country
     *           The country location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $metro
     *           The metro location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $most_specific
     *           The most specific location criterion associated with the impression.
     *     @type \Google\Protobuf\StringValue $region
     *           The region location criterion associated with the impression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\ClickLocation::initOnce();
        parent::__construct($data);
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Returns the unboxed value from <code>getCity()</code>

     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @return string|null
     */
    public function getCityUnwrapped()
    {
        return $this->readWrapperValue("city");
    }

    /**
     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->city = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The city location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue city = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCityUnwrapped($var)
    {
        $this->writeWrapperValue("city", $var);
        return $this;}

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Returns the unboxed value from <code>getCountry()</code>

     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @return string|null
     */
    public function getCountryUnwrapped()
    {
        return $this->readWrapperValue("country");
    }

    /**
     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The country location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryUnwrapped($var)
    {
        $this->writeWrapperValue("country", $var);
        return $this;}

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMetro()
    {
        return $this->metro;
    }

    /**
     * Returns the unboxed value from <code>getMetro()</code>

     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @return string|null
     */
    public function getMetroUnwrapped()
    {
        return $this->readWrapperValue("metro");
    }

    /**
     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMetro($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->metro = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The metro location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue metro = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMetroUnwrapped($var)
    {
        $this->writeWrapperValue("metro", $var);
        return $this;}

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMostSpecific()
    {
        return $this->most_specific;
    }

    /**
     * Returns the unboxed value from <code>getMostSpecific()</code>

     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @return string|null
     */
    public function getMostSpecificUnwrapped()
    {
        return $this->readWrapperValue("most_specific");
    }

    /**
     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMostSpecific($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->most_specific = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The most specific location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue most_specific = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMostSpecificUnwrapped($var)
    {
        $this->writeWrapperValue("most_specific", $var);
        return $this;}

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Returns the unboxed value from <code>getRegion()</code>

     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @return string|null
     */
    public function getRegionUnwrapped()
    {
        return $this->readWrapperValue("region");
    }

    /**
     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->region = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The region location criterion associated with the impression.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue region = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setRegionUnwrapped($var)
    {
        $this->writeWrapperValue("region", $var);
        return $this;}

}

