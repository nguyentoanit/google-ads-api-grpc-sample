<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Forecast metrics.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.ForecastMetrics</code>
 */
class ForecastMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Impressions
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     */
    protected $impressions = null;
    /**
     * Ctr
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue ctr = 2;</code>
     */
    protected $ctr = null;
    /**
     * AVG cpc
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value average_cpc = 3;</code>
     */
    protected $average_cpc = null;
    /**
     * Clicks
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 5;</code>
     */
    protected $clicks = null;
    /**
     * Cost
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 6;</code>
     */
    protected $cost_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\DoubleValue $impressions
     *           Impressions
     *     @type \Google\Protobuf\DoubleValue $ctr
     *           Ctr
     *     @type \Google\Protobuf\Int64Value $average_cpc
     *           AVG cpc
     *     @type \Google\Protobuf\DoubleValue $clicks
     *           Clicks
     *     @type \Google\Protobuf\Int64Value $cost_micros
     *           Cost
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Services\KeywordPlanService::initOnce();
        parent::__construct($data);
    }

    /**
     * Impressions
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Returns the unboxed value from <code>getImpressions()</code>

     * Impressions
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @return float|null
     */
    public function getImpressionsUnwrapped()
    {
        return $this->readWrapperValue("impressions");
    }

    /**
     * Impressions
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setImpressions($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->impressions = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Impressions
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue impressions = 1;</code>
     * @param float|null $var
     * @return $this
     */
    public function setImpressionsUnwrapped($var)
    {
        $this->writeWrapperValue("impressions", $var);
        return $this;}

    /**
     * Ctr
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue ctr = 2;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getCtr()
    {
        return $this->ctr;
    }

    /**
     * Returns the unboxed value from <code>getCtr()</code>

     * Ctr
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue ctr = 2;</code>
     * @return float|null
     */
    public function getCtrUnwrapped()
    {
        return $this->readWrapperValue("ctr");
    }

    /**
     * Ctr
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue ctr = 2;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setCtr($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->ctr = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Ctr
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue ctr = 2;</code>
     * @param float|null $var
     * @return $this
     */
    public function setCtrUnwrapped($var)
    {
        $this->writeWrapperValue("ctr", $var);
        return $this;}

    /**
     * AVG cpc
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value average_cpc = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAverageCpc()
    {
        return $this->average_cpc;
    }

    /**
     * Returns the unboxed value from <code>getAverageCpc()</code>

     * AVG cpc
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value average_cpc = 3;</code>
     * @return int|string|null
     */
    public function getAverageCpcUnwrapped()
    {
        return $this->readWrapperValue("average_cpc");
    }

    /**
     * AVG cpc
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value average_cpc = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAverageCpc($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->average_cpc = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * AVG cpc
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value average_cpc = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAverageCpcUnwrapped($var)
    {
        $this->writeWrapperValue("average_cpc", $var);
        return $this;}

    /**
     * Clicks
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 5;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * Returns the unboxed value from <code>getClicks()</code>

     * Clicks
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 5;</code>
     * @return float|null
     */
    public function getClicksUnwrapped()
    {
        return $this->readWrapperValue("clicks");
    }

    /**
     * Clicks
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 5;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setClicks($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->clicks = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Clicks
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue clicks = 5;</code>
     * @param float|null $var
     * @return $this
     */
    public function setClicksUnwrapped($var)
    {
        $this->writeWrapperValue("clicks", $var);
        return $this;}

    /**
     * Cost
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 6;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCostMicros()
    {
        return $this->cost_micros;
    }

    /**
     * Returns the unboxed value from <code>getCostMicros()</code>

     * Cost
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 6;</code>
     * @return int|string|null
     */
    public function getCostMicrosUnwrapped()
    {
        return $this->readWrapperValue("cost_micros");
    }

    /**
     * Cost
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 6;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCostMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cost_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Cost
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cost_micros = 6;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCostMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("cost_micros", $var);
        return $this;}

}

