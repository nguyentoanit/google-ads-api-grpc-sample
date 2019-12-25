<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_group_criterion.proto

namespace Google\Ads\GoogleAds\V2\Resources\AdGroupCriterion;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A container for ad group criterion quality information.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.AdGroupCriterion.QualityInfo</code>
 */
class QualityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1;</code>
     */
    protected $quality_score = null;
    /**
     * The performance of the ad compared to other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket creative_quality_score = 2;</code>
     */
    protected $creative_quality_score = 0;
    /**
     * The quality score of the landing page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket post_click_quality_score = 3;</code>
     */
    protected $post_click_quality_score = 0;
    /**
     * The click-through rate compared to that of other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket search_predicted_ctr = 4;</code>
     */
    protected $search_predicted_ctr = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $quality_score
     *           The quality score.
     *           This field may not be populated if Google does not have enough
     *           information to determine a value.
     *     @type int $creative_quality_score
     *           The performance of the ad compared to other advertisers.
     *     @type int $post_click_quality_score
     *           The quality score of the landing page.
     *     @type int $search_predicted_ctr
     *           The click-through rate compared to that of other advertisers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\AdGroupCriterion::initOnce();
        parent::__construct($data);
    }

    /**
     * The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getQualityScore()
    {
        return $this->quality_score;
    }

    /**
     * Returns the unboxed value from <code>getQualityScore()</code>

     * The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1;</code>
     * @return int|null
     */
    public function getQualityScoreUnwrapped()
    {
        return $this->readWrapperValue("quality_score");
    }

    /**
     * The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setQualityScore($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->quality_score = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * The quality score.
     * This field may not be populated if Google does not have enough
     * information to determine a value.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value quality_score = 1;</code>
     * @param int|null $var
     * @return $this
     */
    public function setQualityScoreUnwrapped($var)
    {
        $this->writeWrapperValue("quality_score", $var);
        return $this;}

    /**
     * The performance of the ad compared to other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket creative_quality_score = 2;</code>
     * @return int
     */
    public function getCreativeQualityScore()
    {
        return $this->creative_quality_score;
    }

    /**
     * The performance of the ad compared to other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket creative_quality_score = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCreativeQualityScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\QualityScoreBucketEnum_QualityScoreBucket::class);
        $this->creative_quality_score = $var;

        return $this;
    }

    /**
     * The quality score of the landing page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket post_click_quality_score = 3;</code>
     * @return int
     */
    public function getPostClickQualityScore()
    {
        return $this->post_click_quality_score;
    }

    /**
     * The quality score of the landing page.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket post_click_quality_score = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPostClickQualityScore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\QualityScoreBucketEnum_QualityScoreBucket::class);
        $this->post_click_quality_score = $var;

        return $this;
    }

    /**
     * The click-through rate compared to that of other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket search_predicted_ctr = 4;</code>
     * @return int
     */
    public function getSearchPredictedCtr()
    {
        return $this->search_predicted_ctr;
    }

    /**
     * The click-through rate compared to that of other advertisers.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.QualityScoreBucketEnum.QualityScoreBucket search_predicted_ctr = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setSearchPredictedCtr($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\QualityScoreBucketEnum_QualityScoreBucket::class);
        $this->search_predicted_ctr = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QualityInfo::class, \Google\Ads\GoogleAds\V2\Resources\AdGroupCriterion_QualityInfo::class);

