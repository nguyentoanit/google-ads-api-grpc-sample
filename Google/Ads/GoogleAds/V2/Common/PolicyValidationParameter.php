<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/policy.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameter for controlling how policy exemption is done. Ignorable policy
 * topics are only usable with expanded text ads and responsive search ads. All
 * other ad types must use policy violation keys.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.PolicyValidationParameter</code>
 */
class PolicyValidationParameter extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of policy topics that should not cause a PolicyFindingError to
     * be reported. This field is currently only compatible with Enhanced Text Ad.
     * It corresponds to the PolicyTopicEntry.topic field.
     * Resources violating these policies will be saved, but will not be eligible
     * to serve. They may begin serving at a later time due to a change in
     * policies, re-review of the resource, or a change in advertiser
     * certificates.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue ignorable_policy_topics = 1;</code>
     */
    private $ignorable_policy_topics;
    /**
     * The list of policy violation keys that should not cause a
     * PolicyViolationError to be reported. Not all policy violations are
     * exemptable, please refer to the is_exemptible field in the returned
     * PolicyViolationError.
     * Resources violating these polices will be saved, but will not be eligible
     * to serve. They may begin serving at a later time due to a change in
     * policies, re-review of the resource, or a change in advertiser
     * certificates.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.PolicyViolationKey exempt_policy_violation_keys = 2;</code>
     */
    private $exempt_policy_violation_keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $ignorable_policy_topics
     *           The list of policy topics that should not cause a PolicyFindingError to
     *           be reported. This field is currently only compatible with Enhanced Text Ad.
     *           It corresponds to the PolicyTopicEntry.topic field.
     *           Resources violating these policies will be saved, but will not be eligible
     *           to serve. They may begin serving at a later time due to a change in
     *           policies, re-review of the resource, or a change in advertiser
     *           certificates.
     *     @type \Google\Ads\GoogleAds\V2\Common\PolicyViolationKey[]|\Google\Protobuf\Internal\RepeatedField $exempt_policy_violation_keys
     *           The list of policy violation keys that should not cause a
     *           PolicyViolationError to be reported. Not all policy violations are
     *           exemptable, please refer to the is_exemptible field in the returned
     *           PolicyViolationError.
     *           Resources violating these polices will be saved, but will not be eligible
     *           to serve. They may begin serving at a later time due to a change in
     *           policies, re-review of the resource, or a change in advertiser
     *           certificates.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of policy topics that should not cause a PolicyFindingError to
     * be reported. This field is currently only compatible with Enhanced Text Ad.
     * It corresponds to the PolicyTopicEntry.topic field.
     * Resources violating these policies will be saved, but will not be eligible
     * to serve. They may begin serving at a later time due to a change in
     * policies, re-review of the resource, or a change in advertiser
     * certificates.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue ignorable_policy_topics = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIgnorablePolicyTopics()
    {
        return $this->ignorable_policy_topics;
    }

    /**
     * The list of policy topics that should not cause a PolicyFindingError to
     * be reported. This field is currently only compatible with Enhanced Text Ad.
     * It corresponds to the PolicyTopicEntry.topic field.
     * Resources violating these policies will be saved, but will not be eligible
     * to serve. They may begin serving at a later time due to a change in
     * policies, re-review of the resource, or a change in advertiser
     * certificates.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue ignorable_policy_topics = 1;</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIgnorablePolicyTopics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->ignorable_policy_topics = $arr;

        return $this;
    }

    /**
     * The list of policy violation keys that should not cause a
     * PolicyViolationError to be reported. Not all policy violations are
     * exemptable, please refer to the is_exemptible field in the returned
     * PolicyViolationError.
     * Resources violating these polices will be saved, but will not be eligible
     * to serve. They may begin serving at a later time due to a change in
     * policies, re-review of the resource, or a change in advertiser
     * certificates.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.PolicyViolationKey exempt_policy_violation_keys = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExemptPolicyViolationKeys()
    {
        return $this->exempt_policy_violation_keys;
    }

    /**
     * The list of policy violation keys that should not cause a
     * PolicyViolationError to be reported. Not all policy violations are
     * exemptable, please refer to the is_exemptible field in the returned
     * PolicyViolationError.
     * Resources violating these polices will be saved, but will not be eligible
     * to serve. They may begin serving at a later time due to a change in
     * policies, re-review of the resource, or a change in advertiser
     * certificates.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.PolicyViolationKey exempt_policy_violation_keys = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\PolicyViolationKey[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExemptPolicyViolationKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\PolicyViolationKey::class);
        $this->exempt_policy_violation_keys = $arr;

        return $this;
    }

}

