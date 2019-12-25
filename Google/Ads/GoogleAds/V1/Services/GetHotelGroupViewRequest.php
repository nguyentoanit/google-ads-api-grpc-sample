<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/hotel_group_view_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [HotelGroupViewService.GetHotelGroupView][google.ads.googleads.v1.services.HotelGroupViewService.GetHotelGroupView].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GetHotelGroupViewRequest</code>
 */
class GetHotelGroupViewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the Hotel Group View to fetch.
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
     *           Resource name of the Hotel Group View to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Services\HotelGroupViewService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the Hotel Group View to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Resource name of the Hotel Group View to fetch.
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

