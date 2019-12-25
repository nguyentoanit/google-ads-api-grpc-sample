<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/expanded_landing_page_view.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A landing page view with metrics aggregated at the expanded final URL
 * level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.ExpandedLandingPageView</code>
 */
class ExpandedLandingPageView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the expanded landing page view.
     * Expanded landing page view resource names have the form:
     * `customers/{customer_id}/expandedLandingPageViews/{expanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The final URL that clicks are directed to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_final_url = 2;</code>
     */
    protected $expanded_final_url = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the expanded landing page view.
     *           Expanded landing page view resource names have the form:
     *           `customers/{customer_id}/expandedLandingPageViews/{expanded_final_url_fingerprint}`
     *     @type \Google\Protobuf\StringValue $expanded_final_url
     *           The final URL that clicks are directed to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\ExpandedLandingPageView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the expanded landing page view.
     * Expanded landing page view resource names have the form:
     * `customers/{customer_id}/expandedLandingPageViews/{expanded_final_url_fingerprint}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the expanded landing page view.
     * Expanded landing page view resource names have the form:
     * `customers/{customer_id}/expandedLandingPageViews/{expanded_final_url_fingerprint}`
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
     * The final URL that clicks are directed to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_final_url = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getExpandedFinalUrl()
    {
        return $this->expanded_final_url;
    }

    /**
     * Returns the unboxed value from <code>getExpandedFinalUrl()</code>

     * The final URL that clicks are directed to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_final_url = 2;</code>
     * @return string|null
     */
    public function getExpandedFinalUrlUnwrapped()
    {
        return $this->readWrapperValue("expanded_final_url");
    }

    /**
     * The final URL that clicks are directed to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_final_url = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setExpandedFinalUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->expanded_final_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The final URL that clicks are directed to.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue expanded_final_url = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setExpandedFinalUrlUnwrapped($var)
    {
        $this->writeWrapperValue("expanded_final_url", $var);
        return $this;}

}

