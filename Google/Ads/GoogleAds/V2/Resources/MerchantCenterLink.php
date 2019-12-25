<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/merchant_center_link.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A data sharing connection, proposed or in use,
 * between a Google Ads Customer and a Merchant Center account.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.MerchantCenterLink</code>
 */
class MerchantCenterLink extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the merchant center link.
     * Merchant center link resource names have the form:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     */
    protected $id = null;
    /**
     * The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue merchant_center_account_name = 4;</code>
     */
    protected $merchant_center_account_name = null;
    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the merchant center link.
     *           Merchant center link resource names have the form:
     *           `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the Merchant Center account.
     *           This field is readonly.
     *     @type \Google\Protobuf\StringValue $merchant_center_account_name
     *           The name of the Merchant Center account.
     *           This field is readonly.
     *     @type int $status
     *           The status of the link.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\MerchantCenterLink::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the merchant center link.
     * Merchant center link resource names have the form:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the merchant center link.
     * Merchant center link resource names have the form:
     * `customers/{customer_id}/merchantCenterLinks/{merchant_center_id}`
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

    /**
     * The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue merchant_center_account_name = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMerchantCenterAccountName()
    {
        return $this->merchant_center_account_name;
    }

    /**
     * Returns the unboxed value from <code>getMerchantCenterAccountName()</code>

     * The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue merchant_center_account_name = 4;</code>
     * @return string|null
     */
    public function getMerchantCenterAccountNameUnwrapped()
    {
        return $this->readWrapperValue("merchant_center_account_name");
    }

    /**
     * The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue merchant_center_account_name = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMerchantCenterAccountName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->merchant_center_account_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the Merchant Center account.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue merchant_center_account_name = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMerchantCenterAccountNameUnwrapped($var)
    {
        $this->writeWrapperValue("merchant_center_account_name", $var);
        return $this;}

    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * The status of the link.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.MerchantCenterLinkStatusEnum.MerchantCenterLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\MerchantCenterLinkStatusEnum_MerchantCenterLinkStatus::class);
        $this->status = $var;

        return $this;
    }

}
