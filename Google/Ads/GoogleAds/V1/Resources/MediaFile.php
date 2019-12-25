<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/media_file.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A media file.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.MediaFile</code>
 */
class MediaFile extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the media file.
     * Media file resource names have the form:
     * `customers/{customer_id}/mediaFiles/{media_file_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     */
    protected $id = null;
    /**
     * Type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.MediaTypeEnum.MediaType type = 5;</code>
     */
    protected $type = 0;
    /**
     * The mime type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.MimeTypeEnum.MimeType mime_type = 6;</code>
     */
    protected $mime_type = 0;
    /**
     * The URL of where the original media file was downloaded from (or a file
     * name).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7;</code>
     */
    protected $source_url = null;
    /**
     * The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8;</code>
     */
    protected $name = null;
    /**
     * The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9;</code>
     */
    protected $file_size = null;
    protected $mediatype;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the media file.
     *           Media file resource names have the form:
     *           `customers/{customer_id}/mediaFiles/{media_file_id}`
     *     @type \Google\Protobuf\Int64Value $id
     *           The ID of the media file.
     *     @type int $type
     *           Type of the media file.
     *     @type int $mime_type
     *           The mime type of the media file.
     *     @type \Google\Protobuf\StringValue $source_url
     *           The URL of where the original media file was downloaded from (or a file
     *           name).
     *     @type \Google\Protobuf\StringValue $name
     *           The name of the media file. The name can be used by clients to help
     *           identify previously uploaded media.
     *     @type \Google\Protobuf\Int64Value $file_size
     *           The size of the media file in bytes.
     *     @type \Google\Ads\GoogleAds\V1\Resources\MediaImage $image
     *           Encapsulates an Image.
     *     @type \Google\Ads\GoogleAds\V1\Resources\MediaBundle $media_bundle
     *           A ZIP archive media the content of which contains HTML5 assets.
     *     @type \Google\Ads\GoogleAds\V1\Resources\MediaAudio $audio
     *           Encapsulates an Audio.
     *     @type \Google\Ads\GoogleAds\V1\Resources\MediaVideo $video
     *           Encapsulates a Video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the media file.
     * Media file resource names have the form:
     * `customers/{customer_id}/mediaFiles/{media_file_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the media file.
     * Media file resource names have the form:
     * `customers/{customer_id}/mediaFiles/{media_file_id}`
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
     * The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @return int|string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The ID of the media file.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value id = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.MediaTypeEnum.MediaType type = 5;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.MediaTypeEnum.MediaType type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\MediaTypeEnum_MediaType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The mime type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.MimeTypeEnum.MimeType mime_type = 6;</code>
     * @return int
     */
    public function getMimeType()
    {
        return $this->mime_type;
    }

    /**
     * The mime type of the media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.MimeTypeEnum.MimeType mime_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMimeType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\MimeTypeEnum_MimeType::class);
        $this->mime_type = $var;

        return $this;
    }

    /**
     * The URL of where the original media file was downloaded from (or a file
     * name).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSourceUrl()
    {
        return $this->source_url;
    }

    /**
     * Returns the unboxed value from <code>getSourceUrl()</code>

     * The URL of where the original media file was downloaded from (or a file
     * name).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7;</code>
     * @return string|null
     */
    public function getSourceUrlUnwrapped()
    {
        return $this->readWrapperValue("source_url");
    }

    /**
     * The URL of where the original media file was downloaded from (or a file
     * name).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSourceUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->source_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The URL of where the original media file was downloaded from (or a file
     * name).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue source_url = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSourceUrlUnwrapped($var)
    {
        $this->writeWrapperValue("source_url", $var);
        return $this;}

    /**
     * The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the unboxed value from <code>getName()</code>

     * The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8;</code>
     * @return string|null
     */
    public function getNameUnwrapped()
    {
        return $this->readWrapperValue("name");
    }

    /**
     * The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The name of the media file. The name can be used by clients to help
     * identify previously uploaded media.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue name = 8;</code>
     * @param string|null $var
     * @return $this
     */
    public function setNameUnwrapped($var)
    {
        $this->writeWrapperValue("name", $var);
        return $this;}

    /**
     * The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * Returns the unboxed value from <code>getFileSize()</code>

     * The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9;</code>
     * @return int|string|null
     */
    public function getFileSizeUnwrapped()
    {
        return $this->readWrapperValue("file_size");
    }

    /**
     * The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setFileSize($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->file_size = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The size of the media file in bytes.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value file_size = 9;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setFileSizeUnwrapped($var)
    {
        $this->writeWrapperValue("file_size", $var);
        return $this;}

    /**
     * Encapsulates an Image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaImage image = 3;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\MediaImage
     */
    public function getImage()
    {
        return $this->readOneof(3);
    }

    /**
     * Encapsulates an Image.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaImage image = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\MediaImage $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\MediaImage::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * A ZIP archive media the content of which contains HTML5 assets.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaBundle media_bundle = 4;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\MediaBundle
     */
    public function getMediaBundle()
    {
        return $this->readOneof(4);
    }

    /**
     * A ZIP archive media the content of which contains HTML5 assets.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaBundle media_bundle = 4;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\MediaBundle $var
     * @return $this
     */
    public function setMediaBundle($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\MediaBundle::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Encapsulates an Audio.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaAudio audio = 10;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\MediaAudio
     */
    public function getAudio()
    {
        return $this->readOneof(10);
    }

    /**
     * Encapsulates an Audio.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaAudio audio = 10;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\MediaAudio $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\MediaAudio::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Encapsulates a Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaVideo video = 11;</code>
     * @return \Google\Ads\GoogleAds\V1\Resources\MediaVideo
     */
    public function getVideo()
    {
        return $this->readOneof(11);
    }

    /**
     * Encapsulates a Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.resources.MediaVideo video = 11;</code>
     * @param \Google\Ads\GoogleAds\V1\Resources\MediaVideo $var
     * @return $this
     */
    public function setVideo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Resources\MediaVideo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMediatype()
    {
        return $this->whichOneof("mediatype");
    }

}

