<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/geo_target_constant_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A geo target constant suggestion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.GeoTargetConstantSuggestion</code>
 */
class GeoTargetConstantSuggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 1;</code>
     */
    protected $locale = null;
    /**
     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reach = 2;</code>
     */
    protected $reach = null;
    /**
     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 3;</code>
     */
    protected $search_term = null;
    /**
     * The GeoTargetConstant result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.GeoTargetConstant geo_target_constant = 4;</code>
     */
    protected $geo_target_constant = null;
    /**
     * The list of parents of the geo target constant.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.resources.GeoTargetConstant geo_target_constant_parents = 5;</code>
     */
    private $geo_target_constant_parents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $locale
     *           The language this GeoTargetConstantSuggestion is currently translated to.
     *           It affects the name of geo target fields. For example, if locale=en, then
     *           name=Spain. If locale=es, then name=España. The default locale will be
     *           returned if no translation exists for the locale in the request.
     *     @type \Google\Protobuf\Int64Value $reach
     *           Approximate user population that will be targeted, rounded to the
     *           nearest 100.
     *     @type \Google\Protobuf\StringValue $search_term
     *           If the request searched by location name, this is the location name that
     *           matched the geo target.
     *     @type \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant $geo_target_constant
     *           The GeoTargetConstant result.
     *     @type \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant[]|\Google\Protobuf\Internal\RepeatedField $geo_target_constant_parents
     *           The list of parents of the geo target constant.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\GeoTargetConstantService::initOnce();
        parent::__construct($data);
    }

    /**
     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Returns the unboxed value from <code>getLocale()</code>

     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 1;</code>
     * @return string|null
     */
    public function getLocaleUnwrapped()
    {
        return $this->readWrapperValue("locale");
    }

    /**
     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLocale($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->locale = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The language this GeoTargetConstantSuggestion is currently translated to.
     * It affects the name of geo target fields. For example, if locale=en, then
     * name=Spain. If locale=es, then name=España. The default locale will be
     * returned if no translation exists for the locale in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue locale = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLocaleUnwrapped($var)
    {
        $this->writeWrapperValue("locale", $var);
        return $this;}

    /**
     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reach = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getReach()
    {
        return $this->reach;
    }

    /**
     * Returns the unboxed value from <code>getReach()</code>

     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reach = 2;</code>
     * @return int|string|null
     */
    public function getReachUnwrapped()
    {
        return $this->readWrapperValue("reach");
    }

    /**
     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reach = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setReach($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->reach = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Approximate user population that will be targeted, rounded to the
     * nearest 100.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value reach = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setReachUnwrapped($var)
    {
        $this->writeWrapperValue("reach", $var);
        return $this;}

    /**
     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSearchTerm()
    {
        return $this->search_term;
    }

    /**
     * Returns the unboxed value from <code>getSearchTerm()</code>

     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 3;</code>
     * @return string|null
     */
    public function getSearchTermUnwrapped()
    {
        return $this->readWrapperValue("search_term");
    }

    /**
     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->search_term = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * If the request searched by location name, this is the location name that
     * matched the geo target.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSearchTermUnwrapped($var)
    {
        $this->writeWrapperValue("search_term", $var);
        return $this;}

    /**
     * The GeoTargetConstant result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.GeoTargetConstant geo_target_constant = 4;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant
     */
    public function getGeoTargetConstant()
    {
        return $this->geo_target_constant;
    }

    /**
     * The GeoTargetConstant result.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.GeoTargetConstant geo_target_constant = 4;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant::class);
        $this->geo_target_constant = $var;

        return $this;
    }

    /**
     * The list of parents of the geo target constant.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.resources.GeoTargetConstant geo_target_constant_parents = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGeoTargetConstantParents()
    {
        return $this->geo_target_constant_parents;
    }

    /**
     * The list of parents of the geo target constant.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.resources.GeoTargetConstant geo_target_constant_parents = 5;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGeoTargetConstantParents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Resources\GeoTargetConstant::class);
        $this->geo_target_constant_parents = $arr;

        return $this;
    }

}

