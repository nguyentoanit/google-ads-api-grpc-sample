<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/quota_controller.proto

namespace Google\Api\Servicecontrol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents error information for
 * [QuotaOperation][google.api.servicecontrol.v1.QuotaOperation].
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.QuotaError</code>
 */
class QuotaError extends \Google\Protobuf\Internal\Message
{
    /**
     * Error code.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.QuotaError.Code code = 1;</code>
     */
    protected $code = 0;
    /**
     * Subject to whom this error applies. See the specific enum for more details
     * on this field. For example, "clientip:<ip address of client>" or
     * "project:<Google developer project id>".
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     */
    protected $subject = '';
    /**
     * Free-form text that provides details on the cause of the error.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    protected $description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           Error code.
     *     @type string $subject
     *           Subject to whom this error applies. See the specific enum for more details
     *           on this field. For example, "clientip:<ip address of client>" or
     *           "project:<Google developer project id>".
     *     @type string $description
     *           Free-form text that provides details on the cause of the error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\QuotaController::initOnce();
        parent::__construct($data);
    }

    /**
     * Error code.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.QuotaError.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Error code.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.QuotaError.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Api\Servicecontrol\V1\QuotaError_Code::class);
        $this->code = $var;

        return $this;
    }

    /**
     * Subject to whom this error applies. See the specific enum for more details
     * on this field. For example, "clientip:<ip address of client>" or
     * "project:<Google developer project id>".
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Subject to whom this error applies. See the specific enum for more details
     * on this field. For example, "clientip:<ip address of client>" or
     * "project:<Google developer project id>".
     *
     * Generated from protobuf field <code>string subject = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

    /**
     * Free-form text that provides details on the cause of the error.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Free-form text that provides details on the cause of the error.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

}

