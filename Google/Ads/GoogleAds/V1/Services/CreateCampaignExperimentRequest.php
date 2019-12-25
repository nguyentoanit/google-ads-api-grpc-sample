<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/campaign_experiment_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CampaignExperimentService.CreateCampaignExperiment][google.ads.googleads.v1.services.CampaignExperimentService.CreateCampaignExperiment].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.CreateCampaignExperimentRequest</code>
 */
class CreateCampaignExperimentRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer whose campaign experiment is being created.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The campaign experiment to be created.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.CampaignExperiment campaign_experiment = 2;</code>
     */
    protected $campaign_experiment = null;
    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    protected $validate_only = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer whose campaign experiment is being created.
     *     @type \Google\Ads\GoogleAds\V1\Resources\CampaignExperiment $campaign_experiment
     *           The campaign experiment to be created.
     *     @type bool $validate_only
     *           If true, the request is validated but not executed. Only errors are
     *           returned, not results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Services\CampaignExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer whose campaign experiment is being created.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer whose campaign experiment is being created.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * The campaign experiment to be created.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.CampaignExperiment campaign_experiment = 2;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\CampaignExperiment
     */
    public function getCampaignExperiment()
    {
        return $this->campaign_experiment;
    }

    /**
     * The campaign experiment to be created.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.CampaignExperiment campaign_experiment = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\CampaignExperiment $var
     * @return $this
     */
    public function setCampaignExperiment($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\CampaignExperiment::class);
        $this->campaign_experiment = $var;

        return $this;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, the request is validated but not executed. Only errors are
     * returned, not results.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

}

