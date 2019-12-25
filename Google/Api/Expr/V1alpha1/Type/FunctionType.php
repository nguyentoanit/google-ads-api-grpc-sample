<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1\Type;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Function type with result and arg types.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Type.FunctionType</code>
 */
class FunctionType extends \Google\Protobuf\Internal\Message
{
    /**
     * Result type of the function.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type result_type = 1;</code>
     */
    protected $result_type = null;
    /**
     * Argument types of the function.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Type arg_types = 2;</code>
     */
    private $arg_types;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1alpha1\Type $result_type
     *           Result type of the function.
     *     @type \Google\Api\Expr\V1alpha1\Type[]|\Google\Protobuf\Internal\RepeatedField $arg_types
     *           Argument types of the function.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * Result type of the function.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type result_type = 1;</code>
     * @return \Google\Api\Expr\V1alpha1\Type
     */
    public function getResultType()
    {
        return $this->result_type;
    }

    /**
     * Result type of the function.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type result_type = 1;</code>
     * @param \Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setResultType($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Type::class);
        $this->result_type = $var;

        return $this;
    }

    /**
     * Argument types of the function.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Type arg_types = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgTypes()
    {
        return $this->arg_types;
    }

    /**
     * Argument types of the function.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1alpha1.Type arg_types = 2;</code>
     * @param \Google\Api\Expr\V1alpha1\Type[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgTypes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1alpha1\Type::class);
        $this->arg_types = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FunctionType::class, \Google\Api\Expr\V1alpha1\Type_FunctionType::class);

