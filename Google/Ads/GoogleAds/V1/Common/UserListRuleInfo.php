<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/user_lists.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A client defined rule based on custom parameters sent by web sites or
 * uploaded by the advertiser.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.UserListRuleInfo</code>
 */
class UserListRuleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Rule type is used to determine how to group rule items.
     * The default is OR of ANDs (disjunctive normal form).
     * That is, rule items will be ANDed together within rule item groups and the
     * groups themselves will be ORed together.
     * Currently AND of ORs (conjunctive normal form) is only supported for
     * ExpressionRuleUserList.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.UserListRuleTypeEnum.UserListRuleType rule_type = 1;</code>
     */
    protected $rule_type = 0;
    /**
     * List of rule item groups that defines this rule.
     * Rule item groups are grouped together based on rule_type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.UserListRuleItemGroupInfo rule_item_groups = 2;</code>
     */
    private $rule_item_groups;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $rule_type
     *           Rule type is used to determine how to group rule items.
     *           The default is OR of ANDs (disjunctive normal form).
     *           That is, rule items will be ANDed together within rule item groups and the
     *           groups themselves will be ORed together.
     *           Currently AND of ORs (conjunctive normal form) is only supported for
     *           ExpressionRuleUserList.
     *     @type \Google\Ads\GoogleAds\V1\Common\UserListRuleItemGroupInfo[]|\Google\Protobuf\Internal\RepeatedField $rule_item_groups
     *           List of rule item groups that defines this rule.
     *           Rule item groups are grouped together based on rule_type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Rule type is used to determine how to group rule items.
     * The default is OR of ANDs (disjunctive normal form).
     * That is, rule items will be ANDed together within rule item groups and the
     * groups themselves will be ORed together.
     * Currently AND of ORs (conjunctive normal form) is only supported for
     * ExpressionRuleUserList.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.UserListRuleTypeEnum.UserListRuleType rule_type = 1;</code>
     * @return int
     */
    public function getRuleType()
    {
        return $this->rule_type;
    }

    /**
     * Rule type is used to determine how to group rule items.
     * The default is OR of ANDs (disjunctive normal form).
     * That is, rule items will be ANDed together within rule item groups and the
     * groups themselves will be ORed together.
     * Currently AND of ORs (conjunctive normal form) is only supported for
     * ExpressionRuleUserList.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.UserListRuleTypeEnum.UserListRuleType rule_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRuleType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\UserListRuleTypeEnum_UserListRuleType::class);
        $this->rule_type = $var;

        return $this;
    }

    /**
     * List of rule item groups that defines this rule.
     * Rule item groups are grouped together based on rule_type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.UserListRuleItemGroupInfo rule_item_groups = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuleItemGroups()
    {
        return $this->rule_item_groups;
    }

    /**
     * List of rule item groups that defines this rule.
     * Rule item groups are grouped together based on rule_type.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.UserListRuleItemGroupInfo rule_item_groups = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\UserListRuleItemGroupInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuleItemGroups($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\UserListRuleItemGroupInfo::class);
        $this->rule_item_groups = $arr;

        return $this;
    }

}

