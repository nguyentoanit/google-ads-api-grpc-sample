<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_group_ad_asset_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between an AdGroupAd and an Asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.AdGroupAdAssetView</code>
 */
class AdGroupAdAssetView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form:
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5;</code>
     */
    protected $ad_group_ad = null;
    /**
     * The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6;</code>
     */
    protected $asset = null;
    /**
     * Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2;</code>
     */
    protected $field_type = 0;
    /**
     * Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.AdGroupAdAssetPolicySummary policy_summary = 3;</code>
     */
    protected $policy_summary = null;
    /**
     * Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4;</code>
     */
    protected $performance_label = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group ad asset view.
     *           Ad group ad asset view resource names have the form:
     *           `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *     @type \Google\Protobuf\StringValue $ad_group_ad
     *           The ad group ad to which the asset is linked.
     *     @type \Google\Protobuf\StringValue $asset
     *           The asset which is linked to the ad group ad.
     *     @type int $field_type
     *           Role that the asset takes in the ad.
     *     @type \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary $policy_summary
     *           Policy information for the ad group ad asset.
     *     @type int $performance_label
     *           Performance of an asset linkage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\AdGroupAdAssetView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form:
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form:
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
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
     * The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupAd()</code>

     * The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5;</code>
     * @return string|null
     */
    public function getAdGroupAdUnwrapped()
    {
        return $this->readWrapperValue("ad_group_ad");
    }

    /**
     * The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupAdUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_ad", $var);
        return $this;}

    /**
     * The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Returns the unboxed value from <code>getAsset()</code>

     * The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6;</code>
     * @return string|null
     */
    public function getAssetUnwrapped()
    {
        return $this->readWrapperValue("asset");
    }

    /**
     * The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->asset = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAssetUnwrapped($var)
    {
        $this->writeWrapperValue("asset", $var);
        return $this;}

    /**
     * Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2;</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFieldType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\AssetFieldTypeEnum_AssetFieldType::class);
        $this->field_type = $var;

        return $this;
    }

    /**
     * Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.AdGroupAdAssetPolicySummary policy_summary = 3;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary
     */
    public function getPolicySummary()
    {
        return $this->policy_summary;
    }

    /**
     * Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.AdGroupAdAssetPolicySummary policy_summary = 3;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary $var
     * @return $this
     */
    public function setPolicySummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary::class);
        $this->policy_summary = $var;

        return $this;
    }

    /**
     * Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4;</code>
     * @return int
     */
    public function getPerformanceLabel()
    {
        return $this->performance_label;
    }

    /**
     * Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setPerformanceLabel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\AssetPerformanceLabelEnum_AssetPerformanceLabel::class);
        $this->performance_label = $var;

        return $this;
    }

}

