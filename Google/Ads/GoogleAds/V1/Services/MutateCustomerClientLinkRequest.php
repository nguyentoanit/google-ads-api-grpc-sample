<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/customer_client_link_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CustomerClientLinkService.MutateCustomerClientLink][google.ads.googleads.v1.services.CustomerClientLinkService.MutateCustomerClientLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.MutateCustomerClientLinkRequest</code>
 */
class MutateCustomerClientLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer whose customer link are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The operation to perform on the individual CustomerClientLink.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.CustomerClientLinkOperation operation = 2;</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer whose customer link are being modified.
     *     @type \Google\Ads\GoogleAds\V1\Services\CustomerClientLinkOperation $operation
     *           The operation to perform on the individual CustomerClientLink.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Services\CustomerClientLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer whose customer link are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer whose customer link are being modified.
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
     * The operation to perform on the individual CustomerClientLink.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.CustomerClientLinkOperation operation = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Services\CustomerClientLinkOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * The operation to perform on the individual CustomerClientLink.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.services.CustomerClientLinkOperation operation = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\CustomerClientLinkOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Services\CustomerClientLinkOperation::class);
        $this->operation = $var;

        return $this;
    }

}

