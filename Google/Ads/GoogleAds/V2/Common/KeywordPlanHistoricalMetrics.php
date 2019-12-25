<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/keyword_plan_common.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Historical metrics.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.KeywordPlanHistoricalMetrics</code>
 */
class KeywordPlanHistoricalMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Average monthly searches for the past 12 months.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value avg_monthly_searches = 1;</code>
     */
    protected $avg_monthly_searches = null;
    /**
     * The competition level for the query.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.KeywordPlanCompetitionLevelEnum.KeywordPlanCompetitionLevel competition = 2;</code>
     */
    protected $competition = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $avg_monthly_searches
     *           Average monthly searches for the past 12 months.
     *     @type int $competition
     *           The competition level for the query.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\KeywordPlanCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * Average monthly searches for the past 12 months.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value avg_monthly_searches = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAvgMonthlySearches()
    {
        return $this->avg_monthly_searches;
    }

    /**
     * Returns the unboxed value from <code>getAvgMonthlySearches()</code>

     * Average monthly searches for the past 12 months.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value avg_monthly_searches = 1;</code>
     * @return int|string|null
     */
    public function getAvgMonthlySearchesUnwrapped()
    {
        return $this->readWrapperValue("avg_monthly_searches");
    }

    /**
     * Average monthly searches for the past 12 months.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value avg_monthly_searches = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAvgMonthlySearches($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->avg_monthly_searches = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Average monthly searches for the past 12 months.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value avg_monthly_searches = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAvgMonthlySearchesUnwrapped($var)
    {
        $this->writeWrapperValue("avg_monthly_searches", $var);
        return $this;}

    /**
     * The competition level for the query.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.KeywordPlanCompetitionLevelEnum.KeywordPlanCompetitionLevel competition = 2;</code>
     * @return int
     */
    public function getCompetition()
    {
        return $this->competition;
    }

    /**
     * The competition level for the query.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.KeywordPlanCompetitionLevelEnum.KeywordPlanCompetitionLevel competition = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCompetition($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\KeywordPlanCompetitionLevelEnum_KeywordPlanCompetitionLevel::class);
        $this->competition = $var;

        return $this;
    }

}
