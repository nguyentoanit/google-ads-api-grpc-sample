<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/media_file_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation to create media file.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.MediaFileOperation</code>
 */
class MediaFileOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Resources\MediaFile $create
     *           Create operation: No resource name is expected for the new media file.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Services\MediaFileService::initOnce();
        parent::__construct($data);
    }

    /**
     * Create operation: No resource name is expected for the new media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.MediaFile create = 1;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\MediaFile
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new media file.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.MediaFile create = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\MediaFile $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\MediaFile::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

