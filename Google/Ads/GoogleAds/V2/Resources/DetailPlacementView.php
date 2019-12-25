<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/detail_placement_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A view with metrics aggregated by ad group and URL or YouTube video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.DetailPlacementView</code>
 */
class DetailPlacementView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     */
    protected $placement = null;
    /**
     * The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     */
    protected $display_name = null;
    /**
     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4;</code>
     */
    protected $group_placement_target_url = null;
    /**
     * URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5;</code>
     */
    protected $target_url = null;
    /**
     * Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlacementTypeEnum.PlacementType placement_type = 6;</code>
     */
    protected $placement_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the detail placement view.
     *           Detail placement view resource names have the form:
     *           `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *     @type \Google\Protobuf\StringValue $placement
     *           The automatic placement string at detail level, e. g. website URL, mobile
     *           application ID, or a YouTube video ID.
     *     @type \Google\Protobuf\StringValue $display_name
     *           The display name is URL name for websites, YouTube video name for YouTube
     *           videos, and translated mobile app name for mobile apps.
     *     @type \Google\Protobuf\StringValue $group_placement_target_url
     *           URL of the group placement, e.g. domain, link to the mobile application in
     *           app store, or a YouTube channel URL.
     *     @type \Google\Protobuf\StringValue $target_url
     *           URL of the placement, e.g. website, link to the mobile application in app
     *           store, or a YouTube video URL.
     *     @type int $placement_type
     *           Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\DetailPlacementView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the detail placement view.
     * Detail placement view resource names have the form:
     * `customers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}`
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
     * The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
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

     * The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue placement = 2;</code>
     * @return string|null
     */
    public function getPlacementUnwrapped()
    {
        return $this->readWrapperValue("placement");
    }

    /**
     * The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
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

     * The automatic placement string at detail level, e. g. website URL, mobile
     * application ID, or a YouTube video ID.
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
     * The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
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

     * The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue display_name = 3;</code>
     * @return string|null
     */
    public function getDisplayNameUnwrapped()
    {
        return $this->readWrapperValue("display_name");
    }

    /**
     * The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
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

     * The display name is URL name for websites, YouTube video name for YouTube
     * videos, and translated mobile app name for mobile apps.
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
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGroupPlacementTargetUrl()
    {
        return $this->group_placement_target_url;
    }

    /**
     * Returns the unboxed value from <code>getGroupPlacementTargetUrl()</code>

     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4;</code>
     * @return string|null
     */
    public function getGroupPlacementTargetUrlUnwrapped()
    {
        return $this->readWrapperValue("group_placement_target_url");
    }

    /**
     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGroupPlacementTargetUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->group_placement_target_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * URL of the group placement, e.g. domain, link to the mobile application in
     * app store, or a YouTube channel URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue group_placement_target_url = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setGroupPlacementTargetUrlUnwrapped($var)
    {
        $this->writeWrapperValue("group_placement_target_url", $var);
        return $this;}

    /**
     * URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTargetUrl()
    {
        return $this->target_url;
    }

    /**
     * Returns the unboxed value from <code>getTargetUrl()</code>

     * URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5;</code>
     * @return string|null
     */
    public function getTargetUrlUnwrapped()
    {
        return $this->readWrapperValue("target_url");
    }

    /**
     * URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5;</code>
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

     * URL of the placement, e.g. website, link to the mobile application in app
     * store, or a YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue target_url = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTargetUrlUnwrapped($var)
    {
        $this->writeWrapperValue("target_url", $var);
        return $this;}

    /**
     * Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlacementTypeEnum.PlacementType placement_type = 6;</code>
     * @return int
     */
    public function getPlacementType()
    {
        return $this->placement_type;
    }

    /**
     * Type of the placement, e.g. Website, YouTube Video, and Mobile Application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.PlacementTypeEnum.PlacementType placement_type = 6;</code>
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
