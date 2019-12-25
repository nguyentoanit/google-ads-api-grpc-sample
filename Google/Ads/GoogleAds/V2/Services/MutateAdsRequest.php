<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/ad_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [AdService.MutateAds][google.ads.googleads.v2.services.AdService.MutateAds].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.MutateAdsRequest</code>
 */
class MutateAdsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer whose ads are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The list of operations to perform on individual ads.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.services.AdOperation operations = 2;</code>
     */
    private $operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer whose ads are being modified.
     *     @type \Google\Ads\GoogleAds\V2\Services\AdOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           The list of operations to perform on individual ads.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\AdService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer whose ads are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer whose ads are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The list of operations to perform on individual ads.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.services.AdOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * The list of operations to perform on individual ads.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.services.AdOperation operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Services\AdOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Services\AdOperation::class);
        $this->operations = $arr;

        return $this;
    }

}
