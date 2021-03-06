<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [KeywordPlanService.GenerateForecastMetrics][google.ads.googleads.v2.services.KeywordPlanService.GenerateForecastMetrics].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GenerateForecastMetricsRequest</code>
 */
class GenerateForecastMetricsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the keyword plan to be forecasted.
     *
     * Generated from protobuf field <code>string keyword_plan = 1;</code>
     */
    protected $keyword_plan = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $keyword_plan
     *           The resource name of the keyword plan to be forecasted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the keyword plan to be forecasted.
     *
     * Generated from protobuf field <code>string keyword_plan = 1;</code>
     * @return string
     */
    public function getKeywordPlan()
    {
        return $this->keyword_plan;
    }

    /**
     * The resource name of the keyword plan to be forecasted.
     *
     * Generated from protobuf field <code>string keyword_plan = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlan($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan = $var;

        return $this;
    }

}

