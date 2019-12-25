<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/campaign_experiment_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for campaign experiment graduate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GraduateCampaignExperimentResponse</code>
 */
class GraduateCampaignExperimentResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the campaign from the graduated experiment.
     * This campaign is the same one as CampaignExperiment.experiment_campaign.
     *
     * Generated from protobuf field <code>string graduated_campaign = 1;</code>
     */
    protected $graduated_campaign = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $graduated_campaign
     *           The resource name of the campaign from the graduated experiment.
     *           This campaign is the same one as CampaignExperiment.experiment_campaign.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Services\CampaignExperimentService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the campaign from the graduated experiment.
     * This campaign is the same one as CampaignExperiment.experiment_campaign.
     *
     * Generated from protobuf field <code>string graduated_campaign = 1;</code>
     * @return string
     */
    public function getGraduatedCampaign()
    {
        return $this->graduated_campaign;
    }

    /**
     * The resource name of the campaign from the graduated experiment.
     * This campaign is the same one as CampaignExperiment.experiment_campaign.
     *
     * Generated from protobuf field <code>string graduated_campaign = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGraduatedCampaign($var)
    {
        GPBUtil::checkString($var, True);
        $this->graduated_campaign = $var;

        return $this;
    }

}

