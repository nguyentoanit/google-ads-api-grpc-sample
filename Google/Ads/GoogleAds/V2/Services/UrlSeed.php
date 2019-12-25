<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Url Seed
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.UrlSeed</code>
 */
class UrlSeed extends \Google\Protobuf\Internal\Message
{
    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     */
    protected $url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $url
     *           The URL to crawl in order to generate keyword ideas.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Returns the unboxed value from <code>getUrl()</code>

     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @return string|null
     */
    public function getUrlUnwrapped()
    {
        return $this->readWrapperValue("url");
    }

    /**
     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The URL to crawl in order to generate keyword ideas.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue url = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUrlUnwrapped($var)
    {
        $this->writeWrapperValue("url", $var);
        return $this;}

}

