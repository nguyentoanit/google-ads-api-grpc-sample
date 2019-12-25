<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/ad_group_criterion_simulation.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group criterion simulation. Supported combinations of advertising
 * channel type, criterion type, simulation type, and simulation modification
 * method are detailed below respectively.
 * SEARCH  KEYWORD  CPC_BID  UNIFORM
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.AdGroupCriterionSimulation</code>
 */
class AdGroupCriterionSimulation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group criterion simulation.
     * Ad group criterion simulation resource names have the form:
     * `customers/{customer_id}/adGroupCriterionSimulations/{ad_group_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * AdGroup ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_group_id = 2;</code>
     */
    protected $ad_group_id = null;
    /**
     * Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     */
    protected $criterion_id = null;
    /**
     * The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SimulationTypeEnum.SimulationType type = 4;</code>
     */
    protected $type = 0;
    /**
     * How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 5;</code>
     */
    protected $modification_method = 0;
    /**
     * First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 6;</code>
     */
    protected $start_date = null;
    /**
     * Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 7;</code>
     */
    protected $end_date = null;
    protected $point_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group criterion simulation.
     *           Ad group criterion simulation resource names have the form:
     *           `customers/{customer_id}/adGroupCriterionSimulations/{ad_group_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *     @type \Google\Protobuf\Int64Value $ad_group_id
     *           AdGroup ID of the simulation.
     *     @type \Google\Protobuf\Int64Value $criterion_id
     *           Criterion ID of the simulation.
     *     @type int $type
     *           The field that the simulation modifies.
     *     @type int $modification_method
     *           How the simulation modifies the field.
     *     @type \Google\Protobuf\StringValue $start_date
     *           First day on which the simulation is based, in YYYY-MM-DD format.
     *     @type \Google\Protobuf\StringValue $end_date
     *           Last day on which the simulation is based, in YYYY-MM-DD format.
     *     @type \Google\Ads\GoogleAds\V1\Common\CpcBidSimulationPointList $cpc_bid_point_list
     *           Simulation points if the simulation type is CPC_BID.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\AdGroupCriterionSimulation::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group criterion simulation.
     * Ad group criterion simulation resource names have the form:
     * `customers/{customer_id}/adGroupCriterionSimulations/{ad_group_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group criterion simulation.
     * Ad group criterion simulation resource names have the form:
     * `customers/{customer_id}/adGroupCriterionSimulations/{ad_group_id}~{criterion_id}~{type}~{modification_method}~{start_date}~{end_date}`
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
     * AdGroup ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_group_id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAdGroupId()
    {
        return $this->ad_group_id;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupId()</code>

     * AdGroup ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_group_id = 2;</code>
     * @return int|string|null
     */
    public function getAdGroupIdUnwrapped()
    {
        return $this->readWrapperValue("ad_group_id");
    }

    /**
     * AdGroup ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_group_id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAdGroupId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->ad_group_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * AdGroup ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_group_id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAdGroupIdUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_id", $var);
        return $this;}

    /**
     * Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCriterionId()
    {
        return $this->criterion_id;
    }

    /**
     * Returns the unboxed value from <code>getCriterionId()</code>

     * Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @return int|string|null
     */
    public function getCriterionIdUnwrapped()
    {
        return $this->readWrapperValue("criterion_id");
    }

    /**
     * Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCriterionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->criterion_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Criterion ID of the simulation.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCriterionIdUnwrapped($var)
    {
        $this->writeWrapperValue("criterion_id", $var);
        return $this;}

    /**
     * The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SimulationTypeEnum.SimulationType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The field that the simulation modifies.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SimulationTypeEnum.SimulationType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\SimulationTypeEnum_SimulationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 5;</code>
     * @return int
     */
    public function getModificationMethod()
    {
        return $this->modification_method;
    }

    /**
     * How the simulation modifies the field.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SimulationModificationMethodEnum.SimulationModificationMethod modification_method = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setModificationMethod($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\SimulationModificationMethodEnum_SimulationModificationMethod::class);
        $this->modification_method = $var;

        return $this;
    }

    /**
     * First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Returns the unboxed value from <code>getStartDate()</code>

     * First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 6;</code>
     * @return string|null
     */
    public function getStartDateUnwrapped()
    {
        return $this->readWrapperValue("start_date");
    }

    /**
     * First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * First day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue start_date = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStartDateUnwrapped($var)
    {
        $this->writeWrapperValue("start_date", $var);
        return $this;}

    /**
     * Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Returns the unboxed value from <code>getEndDate()</code>

     * Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 7;</code>
     * @return string|null
     */
    public function getEndDateUnwrapped()
    {
        return $this->readWrapperValue("end_date");
    }

    /**
     * Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->end_date = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Last day on which the simulation is based, in YYYY-MM-DD format.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue end_date = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setEndDateUnwrapped($var)
    {
        $this->writeWrapperValue("end_date", $var);
        return $this;}

    /**
     * Simulation points if the simulation type is CPC_BID.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CpcBidSimulationPointList cpc_bid_point_list = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\CpcBidSimulationPointList
     */
    public function getCpcBidPointList()
    {
        return $this->readOneof(8);
    }

    /**
     * Simulation points if the simulation type is CPC_BID.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.CpcBidSimulationPointList cpc_bid_point_list = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\CpcBidSimulationPointList $var
     * @return $this
     */
    public function setCpcBidPointList($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\CpcBidSimulationPointList::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPointList()
    {
        return $this->whichOneof("point_list");
    }

}

