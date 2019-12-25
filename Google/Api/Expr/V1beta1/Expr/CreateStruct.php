<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto

namespace Google\Api\Expr\V1beta1\Expr;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A map or message creation expression.
 * Maps are constructed as `{'key_name': 'value'}`. Message construction is
 * similar, but prefixed with a type name and composed of field ids:
 * `types.MyType{field_id: 'value'}`.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.Expr.CreateStruct</code>
 */
class CreateStruct extends \Google\Protobuf\Internal\Message
{
    /**
     * The type name of the message to be created, empty when creating map
     * literals.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * The entries in the creation expression.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr.CreateStruct.Entry entries = 2;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           The type name of the message to be created, empty when creating map
     *           literals.
     *     @type \Google\Api\Expr\V1beta1\Expr\CreateStruct\Entry[]|\Google\Protobuf\Internal\RepeatedField $entries
     *           The entries in the creation expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Expr::initOnce();
        parent::__construct($data);
    }

    /**
     * The type name of the message to be created, empty when creating map
     * literals.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type name of the message to be created, empty when creating map
     * literals.
     *
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * The entries in the creation expression.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr.CreateStruct.Entry entries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * The entries in the creation expression.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Expr.CreateStruct.Entry entries = 2;</code>
     * @param \Google\Api\Expr\V1beta1\Expr\CreateStruct\Entry[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1beta1\Expr\CreateStruct\Entry::class);
        $this->entries = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CreateStruct::class, \Google\Api\Expr\V1beta1\Expr_CreateStruct::class);

