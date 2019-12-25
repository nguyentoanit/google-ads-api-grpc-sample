<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V1\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The move unused budget recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Recommendation.MoveUnusedBudgetRecommendation</code>
 */
class MoveUnusedBudgetRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * The excess budget's resource_name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue excess_campaign_budget = 1;</code>
     */
    protected $excess_campaign_budget = null;
    /**
     * The recommendation for the constrained budget to increase.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.CampaignBudgetRecommendation budget_recommendation = 2;</code>
     */
    protected $budget_recommendation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $excess_campaign_budget
     *           The excess budget's resource_name.
     *     @type \Google\Ads\GoogleAds\V1\Resources\Recommendation\CampaignBudgetRecommendation $budget_recommendation
     *           The recommendation for the constrained budget to increase.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * The excess budget's resource_name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue excess_campaign_budget = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getExcessCampaignBudget()
    {
        return $this->excess_campaign_budget;
    }

    /**
     * Returns the unboxed value from <code>getExcessCampaignBudget()</code>

     * The excess budget's resource_name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue excess_campaign_budget = 1;</code>
     * @return string|null
     */
    public function getExcessCampaignBudgetUnwrapped()
    {
        return $this->readWrapperValue("excess_campaign_budget");
    }

    /**
     * The excess budget's resource_name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue excess_campaign_budget = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setExcessCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->excess_campaign_budget = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The excess budget's resource_name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue excess_campaign_budget = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setExcessCampaignBudgetUnwrapped($var)
    {
        $this->writeWrapperValue("excess_campaign_budget", $var);
        return $this;}

    /**
     * The recommendation for the constrained budget to increase.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.CampaignBudgetRecommendation budget_recommendation = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\Recommendation\CampaignBudgetRecommendation
     */
    public function getBudgetRecommendation()
    {
        return $this->budget_recommendation;
    }

    /**
     * The recommendation for the constrained budget to increase.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.Recommendation.CampaignBudgetRecommendation budget_recommendation = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\Recommendation\CampaignBudgetRecommendation $var
     * @return $this
     */
    public function setBudgetRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\Recommendation_CampaignBudgetRecommendation::class);
        $this->budget_recommendation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MoveUnusedBudgetRecommendation::class, \Google\Ads\GoogleAds\V1\Resources\Recommendation_MoveUnusedBudgetRecommendation::class);

