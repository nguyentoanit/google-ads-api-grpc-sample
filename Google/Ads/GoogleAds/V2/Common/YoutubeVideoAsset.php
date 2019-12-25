<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/asset_types.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A YouTube asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.YoutubeVideoAsset</code>
 */
class YoutubeVideoAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 1;</code>
     */
    protected $youtube_video_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $youtube_video_id
     *           YouTube video id. This is the 11 character string value used in the
     *           YouTube video URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getYoutubeVideoId()
    {
        return $this->youtube_video_id;
    }

    /**
     * Returns the unboxed value from <code>getYoutubeVideoId()</code>

     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 1;</code>
     * @return string|null
     */
    public function getYoutubeVideoIdUnwrapped()
    {
        return $this->readWrapperValue("youtube_video_id");
    }

    /**
     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setYoutubeVideoId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->youtube_video_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * YouTube video id. This is the 11 character string value used in the
     * YouTube video URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue youtube_video_id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setYoutubeVideoIdUnwrapped($var)
    {
        $this->writeWrapperValue("youtube_video_id", $var);
        return $this;}

}

