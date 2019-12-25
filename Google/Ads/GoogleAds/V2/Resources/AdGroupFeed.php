<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_group_feed.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An ad group feed.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.AdGroupFeed</code>
 */
class AdGroupFeed extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group feed.
     * Ad group feed resource names have the form:
     * `customers/{customer_id}/adGroupFeeds/{ad_group_id}~{feed_id}
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The feed being linked to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     */
    protected $feed = null;
    /**
     * The ad group being linked to the feed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     */
    protected $ad_group = null;
    /**
     * Indicates which placeholder types the feed may populate under the connected
     * ad group. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.enums.PlaceholderTypeEnum.PlaceholderType placeholder_types = 4;</code>
     */
    private $placeholder_types;
    /**
     * Matching function associated with the AdGroupFeed.
     * The matching function is used to filter the set of feed items selected.
     * Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.MatchingFunction matching_function = 5;</code>
     */
    protected $matching_function = null;
    /**
     * Status of the ad group feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedLinkStatusEnum.FeedLinkStatus status = 6;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group feed.
     *           Ad group feed resource names have the form:
     *           `customers/{customer_id}/adGroupFeeds/{ad_group_id}~{feed_id}
     *     @type \Google\Protobuf\StringValue $feed
     *           The feed being linked to the ad group.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group being linked to the feed.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $placeholder_types
     *           Indicates which placeholder types the feed may populate under the connected
     *           ad group. Required.
     *     @type \Google\Ads\GoogleAds\V2\Common\MatchingFunction $matching_function
     *           Matching function associated with the AdGroupFeed.
     *           The matching function is used to filter the set of feed items selected.
     *           Required.
     *     @type int $status
     *           Status of the ad group feed.
     *           This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\AdGroupFeed::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group feed.
     * Ad group feed resource names have the form:
     * `customers/{customer_id}/adGroupFeeds/{ad_group_id}~{feed_id}
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group feed.
     * Ad group feed resource names have the form:
     * `customers/{customer_id}/adGroupFeeds/{ad_group_id}~{feed_id}
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
     * The feed being linked to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeed()
    {
        return $this->feed;
    }

    /**
     * Returns the unboxed value from <code>getFeed()</code>

     * The feed being linked to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @return string|null
     */
    public function getFeedUnwrapped()
    {
        return $this->readWrapperValue("feed");
    }

    /**
     * The feed being linked to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The feed being linked to the ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedUnwrapped($var)
    {
        $this->writeWrapperValue("feed", $var);
        return $this;}

    /**
     * The ad group being linked to the feed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The ad group being linked to the feed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * The ad group being linked to the feed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ad group being linked to the feed.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * Indicates which placeholder types the feed may populate under the connected
     * ad group. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.enums.PlaceholderTypeEnum.PlaceholderType placeholder_types = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlaceholderTypes()
    {
        return $this->placeholder_types;
    }

    /**
     * Indicates which placeholder types the feed may populate under the connected
     * ad group. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.enums.PlaceholderTypeEnum.PlaceholderType placeholder_types = 4;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlaceholderTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Ads\GoogleAds\V2\Enums\PlaceholderTypeEnum\PlaceholderType::class);
        $this->placeholder_types = $arr;

        return $this;
    }

    /**
     * Matching function associated with the AdGroupFeed.
     * The matching function is used to filter the set of feed items selected.
     * Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.MatchingFunction matching_function = 5;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\MatchingFunction
     */
    public function getMatchingFunction()
    {
        return $this->matching_function;
    }

    /**
     * Matching function associated with the AdGroupFeed.
     * The matching function is used to filter the set of feed items selected.
     * Required.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.MatchingFunction matching_function = 5;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\MatchingFunction $var
     * @return $this
     */
    public function setMatchingFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\MatchingFunction::class);
        $this->matching_function = $var;

        return $this;
    }

    /**
     * Status of the ad group feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedLinkStatusEnum.FeedLinkStatus status = 6;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the ad group feed.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.FeedLinkStatusEnum.FeedLinkStatus status = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\FeedLinkStatusEnum_FeedLinkStatus::class);
        $this->status = $var;

        return $this;
    }

}

