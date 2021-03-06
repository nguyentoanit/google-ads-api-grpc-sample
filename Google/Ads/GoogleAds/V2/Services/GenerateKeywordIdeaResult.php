<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/keyword_plan_idea_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of generating keyword ideas.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GenerateKeywordIdeaResult</code>
 */
class GenerateKeywordIdeaResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 2;</code>
     */
    protected $text = null;
    /**
     * The historical metrics for the keyword
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics keyword_idea_metrics = 3;</code>
     */
    protected $keyword_idea_metrics = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $text
     *           Text of the keyword idea.
     *           As in Keyword Plan historical metrics, this text may not be an actual
     *           keyword, but the canonical form of multiple keywords.
     *           See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *     @type \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics $keyword_idea_metrics
     *           The historical metrics for the keyword
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\KeywordPlanIdeaService::initOnce();
        parent::__construct($data);
    }

    /**
     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 2;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Text of the keyword idea.
     * As in Keyword Plan historical metrics, this text may not be an actual
     * keyword, but the canonical form of multiple keywords.
     * See KeywordPlanKeywordHistoricalMetrics message in KeywordPlanService.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * The historical metrics for the keyword
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics keyword_idea_metrics = 3;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics
     */
    public function getKeywordIdeaMetrics()
    {
        return $this->keyword_idea_metrics;
    }

    /**
     * The historical metrics for the keyword
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics keyword_idea_metrics = 3;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics $var
     * @return $this
     */
    public function setKeywordIdeaMetrics($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\KeywordPlanHistoricalMetrics::class);
        $this->keyword_idea_metrics = $var;

        return $this;
    }

}

