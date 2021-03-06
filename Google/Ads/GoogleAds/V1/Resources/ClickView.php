<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/click_view.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A click view with metrics aggregated at each click level, including both
 * valid and invalid clicks. For non-Search campaigns, metrics.clicks
 * represents the number of valid and invalid interactions.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.ClickView</code>
 */
class ClickView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the click view.
     * Click view resource names have the form:
     * `customers/{customer_id}/clickViews/{date (yyyy-MM-dd)}~{gclid}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The Google Click ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 2;</code>
     */
    protected $gclid = null;
    /**
     * The location criteria matching the area of interest associated with the
     * impression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ClickLocation area_of_interest = 3;</code>
     */
    protected $area_of_interest = null;
    /**
     * The location criteria matching the location of presence associated with the
     * impression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ClickLocation location_of_presence = 4;</code>
     */
    protected $location_of_presence = null;
    /**
     * Page number in search results where the ad was shown.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value page_number = 5;</code>
     */
    protected $page_number = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the click view.
     *           Click view resource names have the form:
     *           `customers/{customer_id}/clickViews/{date (yyyy-MM-dd)}~{gclid}`
     *     @type \Google\Protobuf\StringValue $gclid
     *           The Google Click ID.
     *     @type \Google\Ads\GoogleAds\V1\Common\ClickLocation $area_of_interest
     *           The location criteria matching the area of interest associated with the
     *           impression.
     *     @type \Google\Ads\GoogleAds\V1\Common\ClickLocation $location_of_presence
     *           The location criteria matching the location of presence associated with the
     *           impression.
     *     @type \Google\Protobuf\Int64Value $page_number
     *           Page number in search results where the ad was shown.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\ClickView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the click view.
     * Click view resource names have the form:
     * `customers/{customer_id}/clickViews/{date (yyyy-MM-dd)}~{gclid}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the click view.
     * Click view resource names have the form:
     * `customers/{customer_id}/clickViews/{date (yyyy-MM-dd)}~{gclid}`
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
     * The Google Click ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGclid()
    {
        return $this->gclid;
    }

    /**
     * Returns the unboxed value from <code>getGclid()</code>

     * The Google Click ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 2;</code>
     * @return string|null
     */
    public function getGclidUnwrapped()
    {
        return $this->readWrapperValue("gclid");
    }

    /**
     * The Google Click ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->gclid = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Google Click ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setGclidUnwrapped($var)
    {
        $this->writeWrapperValue("gclid", $var);
        return $this;}

    /**
     * The location criteria matching the area of interest associated with the
     * impression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ClickLocation area_of_interest = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ClickLocation
     */
    public function getAreaOfInterest()
    {
        return $this->area_of_interest;
    }

    /**
     * The location criteria matching the area of interest associated with the
     * impression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ClickLocation area_of_interest = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ClickLocation $var
     * @return $this
     */
    public function setAreaOfInterest($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ClickLocation::class);
        $this->area_of_interest = $var;

        return $this;
    }

    /**
     * The location criteria matching the location of presence associated with the
     * impression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ClickLocation location_of_presence = 4;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\ClickLocation
     */
    public function getLocationOfPresence()
    {
        return $this->location_of_presence;
    }

    /**
     * The location criteria matching the location of presence associated with the
     * impression.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.ClickLocation location_of_presence = 4;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\ClickLocation $var
     * @return $this
     */
    public function setLocationOfPresence($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\ClickLocation::class);
        $this->location_of_presence = $var;

        return $this;
    }

    /**
     * Page number in search results where the ad was shown.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value page_number = 5;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }

    /**
     * Returns the unboxed value from <code>getPageNumber()</code>

     * Page number in search results where the ad was shown.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value page_number = 5;</code>
     * @return int|string|null
     */
    public function getPageNumberUnwrapped()
    {
        return $this->readWrapperValue("page_number");
    }

    /**
     * Page number in search results where the ad was shown.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value page_number = 5;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setPageNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->page_number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Page number in search results where the ad was shown.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value page_number = 5;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setPageNumberUnwrapped($var)
    {
        $this->writeWrapperValue("page_number", $var);
        return $this;}

}

