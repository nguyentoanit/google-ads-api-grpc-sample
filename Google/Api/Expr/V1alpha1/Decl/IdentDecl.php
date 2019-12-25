<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1\Decl;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifier declaration which specifies its type and optional `Expr` value.
 * An identifier without a value is a declaration that must be provided at
 * evaluation time. An identifier with a value should resolve to a constant,
 * but may be used in conjunction with other identifiers bound at evaluation
 * time.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Decl.IdentDecl</code>
 */
class IdentDecl extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The type of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type type = 1;</code>
     */
    protected $type = null;
    /**
     * The constant value of the identifier. If not specified, the identifier
     * must be supplied at evaluation time.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant value = 2;</code>
     */
    protected $value = null;
    /**
     * Documentation string for the identifier.
     *
     * Generated from protobuf field <code>string doc = 3;</code>
     */
    protected $doc = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1alpha1\Type $type
     *           Required. The type of the identifier.
     *     @type \Google\Api\Expr\V1alpha1\Constant $value
     *           The constant value of the identifier. If not specified, the identifier
     *           must be supplied at evaluation time.
     *     @type string $doc
     *           Documentation string for the identifier.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The type of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type type = 1;</code>
     * @return \Google\Api\Expr\V1alpha1\Type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. The type of the identifier.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Type type = 1;</code>
     * @param \Google\Api\Expr\V1alpha1\Type $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The constant value of the identifier. If not specified, the identifier
     * must be supplied at evaluation time.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant value = 2;</code>
     * @return \Google\Api\Expr\V1alpha1\Constant
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * The constant value of the identifier. If not specified, the identifier
     * must be supplied at evaluation time.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant value = 2;</code>
     * @param \Google\Api\Expr\V1alpha1\Constant $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Constant::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Documentation string for the identifier.
     *
     * Generated from protobuf field <code>string doc = 3;</code>
     * @return string
     */
    public function getDoc()
    {
        return $this->doc;
    }

    /**
     * Documentation string for the identifier.
     *
     * Generated from protobuf field <code>string doc = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDoc($var)
    {
        GPBUtil::checkString($var, True);
        $this->doc = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IdentDecl::class, \Google\Api\Expr\V1alpha1\Decl_IdentDecl::class);

