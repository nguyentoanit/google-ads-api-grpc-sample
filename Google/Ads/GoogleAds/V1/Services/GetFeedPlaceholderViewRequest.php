<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/feed_placeholder_view_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [FeedPlaceholderViewService.GetFeedPlaceholderView][google.ads.googleads.v1.services.FeedPlaceholderViewService.GetFeedPlaceholderView].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GetFeedPlaceholderViewRequest</code>
 */
class GetFeedPlaceholderViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the feed placeholder view to fetch.
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
     *           The resource name of the feed placeholder view to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Services\FeedPlaceholderViewService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the feed placeholder view to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the feed placeholder view to fetch.
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

