<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign.proto

namespace Google\Ads\GoogleAds\V1\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The setting for controlling Dynamic Search Ads (DSA).
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Campaign.DynamicSearchAdsSetting</code>
 */
class DynamicSearchAdsSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     */
    protected $domain_name = null;
    /**
     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     */
    protected $language_code = null;
    /**
     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     */
    protected $use_supplied_urls_only = null;
    /**
     * The list of page feeds associated with the campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue feeds = 5;</code>
     */
    private $feeds;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $domain_name
     *           The Internet domain name that this setting represents, e.g., "google.com"
     *           or "www.google.com".
     *     @type \Google\Protobuf\StringValue $language_code
     *           The language code specifying the language of the domain, e.g., "en".
     *     @type \Google\Protobuf\BoolValue $use_supplied_urls_only
     *           Whether the campaign uses advertiser supplied URLs exclusively.
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $feeds
     *           The list of page feeds associated with the campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * Returns the unboxed value from <code>getDomainName()</code>

     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     * @return string|null
     */
    public function getDomainNameUnwrapped()
    {
        return $this->readWrapperValue("domain_name");
    }

    /**
     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->domain_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Internet domain name that this setting represents, e.g., "google.com"
     * or "www.google.com".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue domain_name = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDomainNameUnwrapped($var)
    {
        $this->writeWrapperValue("domain_name", $var);
        return $this;}

    /**
     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Returns the unboxed value from <code>getLanguageCode()</code>

     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @return string|null
     */
    public function getLanguageCodeUnwrapped()
    {
        return $this->readWrapperValue("language_code");
    }

    /**
     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->language_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The language code specifying the language of the domain, e.g., "en".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue language_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLanguageCodeUnwrapped($var)
    {
        $this->writeWrapperValue("language_code", $var);
        return $this;}

    /**
     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getUseSuppliedUrlsOnly()
    {
        return $this->use_supplied_urls_only;
    }

    /**
     * Returns the unboxed value from <code>getUseSuppliedUrlsOnly()</code>

     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     * @return bool|null
     */
    public function getUseSuppliedUrlsOnlyUnwrapped()
    {
        return $this->readWrapperValue("use_supplied_urls_only");
    }

    /**
     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setUseSuppliedUrlsOnly($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->use_supplied_urls_only = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Whether the campaign uses advertiser supplied URLs exclusively.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue use_supplied_urls_only = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setUseSuppliedUrlsOnlyUnwrapped($var)
    {
        $this->writeWrapperValue("use_supplied_urls_only", $var);
        return $this;}

    /**
     * The list of page feeds associated with the campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue feeds = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFeeds()
    {
        return $this->feeds;
    }

    /**
     * The list of page feeds associated with the campaign.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue feeds = 5;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFeeds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->feeds = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DynamicSearchAdsSetting::class, \Google\Ads\GoogleAds\V1\Resources\Campaign_DynamicSearchAdsSetting::class);

