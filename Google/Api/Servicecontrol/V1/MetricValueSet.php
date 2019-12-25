<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/metric_value.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a set of metric values in the same metric.
 * Each metric value in the set should have a unique combination of start time,
 * end time, and label values.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.MetricValueSet</code>
 */
class MetricValueSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The metric name defined in the service configuration.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     */
    protected $metric_name = '';
    /**
     * The values in this metric.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     */
    private $metric_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $metric_name
     *           The metric name defined in the service configuration.
     *     @type \Google\Api\Servicecontrol\V1\MetricValue[]|\Google\Protobuf\Internal\RepeatedField $metric_values
     *           The values in this metric.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\MetricValue::initOnce();
        parent::__construct($data);
    }

    /**
     * The metric name defined in the service configuration.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @return string
     */
    public function getMetricName()
    {
        return $this->metric_name;
    }

    /**
     * The metric name defined in the service configuration.
     *
     * Generated from protobuf field <code>string metric_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMetricName($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_name = $var;

        return $this;
    }

    /**
     * The values in this metric.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricValues()
    {
        return $this->metric_values;
    }

    /**
     * The values in this metric.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValue metric_values = 2;</code>
     * @param \Google\Api\Servicecontrol\V1\MetricValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Servicecontrol\V1\MetricValue::class);
        $this->metric_values = $arr;

        return $this;
    }

}

