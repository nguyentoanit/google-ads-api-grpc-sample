<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/operating_system_version_constant_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [OperatingSystemVersionConstantService.GetOperatingSystemVersionConstant][google.ads.googleads.v2.services.OperatingSystemVersionConstantService.GetOperatingSystemVersionConstant].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GetOperatingSystemVersionConstantRequest</code>
 */
class GetOperatingSystemVersionConstantRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of the OS version to fetch.
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
     *           Resource name of the OS version to fetch.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\OperatingSystemVersionConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of the OS version to fetch.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Resource name of the OS version to fetch.
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

