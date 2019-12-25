<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/keyword_view.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A keyword view.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.KeywordView</code>
 */
class KeywordView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the keyword view.
     * Keyword view resource names have the form:
     * `customers/{customer_id}/keywordViews/{ad_group_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the keyword view.
     *           Keyword view resource names have the form:
     *           `customers/{customer_id}/keywordViews/{ad_group_id}~{criterion_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\KeywordView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the keyword view.
     * Keyword view resource names have the form:
     * `customers/{customer_id}/keywordViews/{ad_group_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the keyword view.
     * Keyword view resource names have the form:
     * `customers/{customer_id}/keywordViews/{ad_group_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

}

