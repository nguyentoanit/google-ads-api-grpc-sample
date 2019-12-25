<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V2\Services\ApplyRecommendationOperation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters to use when applying a campaign budget recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.ApplyRecommendationOperation.CampaignBudgetParameters</code>
 */
class CampaignBudgetParameters extends \Google\Protobuf\Internal\Message
{
    /**
     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_budget_amount_micros = 1;</code>
     */
    protected $new_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $new_budget_amount_micros
     *           New budget amount to set for target budget resource. This is a required
     *           field.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_budget_amount_micros = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getNewBudgetAmountMicros()
    {
        return $this->new_budget_amount_micros;
    }

    /**
     * Returns the unboxed value from <code>getNewBudgetAmountMicros()</code>

     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_budget_amount_micros = 1;</code>
     * @return int|string|null
     */
    public function getNewBudgetAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("new_budget_amount_micros");
    }

    /**
     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_budget_amount_micros = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setNewBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->new_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * New budget amount to set for target budget resource. This is a required
     * field.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value new_budget_amount_micros = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setNewBudgetAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("new_budget_amount_micros", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CampaignBudgetParameters::class, \Google\Ads\GoogleAds\V2\Services\ApplyRecommendationOperation_CampaignBudgetParameters::class);

