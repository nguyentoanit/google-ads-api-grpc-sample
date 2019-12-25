<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/video.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.Video</code>
 */
class Video extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2;</code>
     */
    protected $id = null;
    /**
     * The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3;</code>
     */
    protected $channel_id = null;
    /**
     * The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4;</code>
     */
    protected $duration_millis = null;
    /**
     * The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5;</code>
     */
    protected $title = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the video.
     *           Video resource names have the form:
     *           `customers/{customer_id}/videos/{video_id}`
     *     @type \Google\Protobuf\StringValue $id
     *           The ID of the video.
     *     @type \Google\Protobuf\StringValue $channel_id
     *           The owner channel id of the video.
     *     @type \Google\Protobuf\Int64Value $duration_millis
     *           The duration of the video in milliseconds.
     *     @type \Google\Protobuf\StringValue $title
     *           The title of the video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\Video::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
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
     * The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2;</code>
     * @return string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * Returns the unboxed value from <code>getChannelId()</code>

     * The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3;</code>
     * @return string|null
     */
    public function getChannelIdUnwrapped()
    {
        return $this->readWrapperValue("channel_id");
    }

    /**
     * The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->channel_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setChannelIdUnwrapped($var)
    {
        $this->writeWrapperValue("channel_id", $var);
        return $this;}

    /**
     * The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getDurationMillis()
    {
        return $this->duration_millis;
    }

    /**
     * Returns the unboxed value from <code>getDurationMillis()</code>

     * The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4;</code>
     * @return int|string|null
     */
    public function getDurationMillisUnwrapped()
    {
        return $this->readWrapperValue("duration_millis");
    }

    /**
     * The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setDurationMillis($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->duration_millis = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setDurationMillisUnwrapped($var)
    {
        $this->writeWrapperValue("duration_millis", $var);
        return $this;}

    /**
     * The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the unboxed value from <code>getTitle()</code>

     * The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5;</code>
     * @return string|null
     */
    public function getTitleUnwrapped()
    {
        return $this->readWrapperValue("title");
    }

    /**
     * The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->title = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTitleUnwrapped($var)
    {
        $this->writeWrapperValue("title", $var);
        return $this;}

}

