<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/group_placement_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A group placement view.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.GroupPlacementView</code>
 */
class GroupPlacementView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the group placement view.
     * Group placement view resource names have the form:
     * `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     */
    protected $placement = null;
    /**
     * Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     */
    protected $display_name = null;
    /**
     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4;</code>
     */
    protected $target_url = null;
    /**
     * Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlacementTypeEnum.PlacementType placement_type = 5;</code>
     */
    protected $placement_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the group placement view.
     *           Group placement view resource names have the form:
     *           `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
     *     @type \Google\Protobuf\StringValue $placement
     *           The automatic placement string at group level, e. g. web domain, mobile
     *           app ID, or a YouTube channel ID.
     *     @type \Google\Protobuf\StringValue $display_name
     *           Domain name for websites and YouTube channel name for YouTube channels.
     *     @type \Google\Protobuf\StringValue $target_url
     *           URL of the group placement, e.g. domain, link to the mobile application in
     *           app store, or a YouTube channel URL.
     *     @type int $placement_type
     *           Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\GroupPlacementView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the group placement view.
     * Group placement view resource names have the form:
     * `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the group placement view.
     * Group placement view resource names have the form:
     * `customers/{customer_id}/groupPlacementViews/{ad_group_id}~{base64_placement}`
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
     * The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPlacement()
    {
        return $this->placement;
    }

    /**
     * Returns the unboxed value from <code>getPlacement()</code>

     * The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     * @return string|null
     */
    public function getPlacementUnwrapped()
    {
        return $this->readWrapperValue("placement");
    }

    /**
     * The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->placement = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The automatic placement string at group level, e. g. web domain, mobile
     * app ID, or a YouTube channel ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPlacementUnwrapped($var)
    {
        $this->writeWrapperValue("placement", $var);
        return $this;}

    /**
     * Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Returns the unboxed value from <code>getDisplayName()</code>

     * Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     * @return string|null
     */
    public function getDisplayNameUnwrapped()
    {
        return $this->readWrapperValue("display_name");
    }

    /**
     * Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Domain name for websites and YouTube channel name for YouTube channels.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDisplayNameUnwrapped($var)
    {
        $this->writeWrapperValue("display_name", $var);
        return $this;}

    /**
     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetUrl()
    {
        return $this->target_url;
    }

    /**
     * Returns the unboxed value from <code>getTargetUrl()</code>

     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4;</code>
     * @return string|null
     */
    public function getTargetUrlUnwrapped()
    {
        return $this->readWrapperValue("target_url");
    }

    /**
     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTargetUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->target_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetUrlUnwrapped($var)
    {
        $this->writeWrapperValue("target_url", $var);
        return $this;}

    /**
     * Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlacementTypeEnum.PlacementType placement_type = 5;</code>
     * @return int
     */
    public function getPlacementType()
    {
        return $this->placement_type;
    }

    /**
     * Type of the placement, e.g. Website, YouTube Channel, Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlacementTypeEnum.PlacementType placement_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setPlacementType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\PlacementTypeEnum_PlacementType::class);
        $this->placement_type = $var;

        return $this;
    }

}
