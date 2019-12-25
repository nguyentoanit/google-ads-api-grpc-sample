<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/criteria.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An age range criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.AgeRangeInfo</code>
 */
class AgeRangeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Type of the age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AgeRangeTypeEnum.AgeRangeType type = 1;</code>
     */
    protected $type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           Type of the age range.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Type of the age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AgeRangeTypeEnum.AgeRangeType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the age range.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AgeRangeTypeEnum.AgeRangeType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\AgeRangeTypeEnum_AgeRangeType::class);
        $this->type = $var;

        return $this;
    }

}

