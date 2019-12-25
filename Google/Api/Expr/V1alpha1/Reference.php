<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/checked.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes a resolved reference to a declaration.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Reference</code>
 */
class Reference extends \Google\Protobuf\Internal\Message
{
    /**
     * The fully qualified name of the declaration.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * For references to functions, this is a list of `Overload.overload_id`
     * values which match according to typing rules.
     * If the list has more than one element, overload resolution among the
     * presented candidates must happen at runtime because of dynamic types. The
     * type checker attempts to narrow down this list as much as possible.
     * Empty if this is not a reference to a [Decl.FunctionDecl][google.api.expr.v1alpha1.Decl.FunctionDecl].
     *
     * Generated from protobuf field <code>repeated string overload_id = 3;</code>
     */
    private $overload_id;
    /**
     * For references to constants, this may contain the value of the
     * constant if known at compile time.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant value = 4;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The fully qualified name of the declaration.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $overload_id
     *           For references to functions, this is a list of `Overload.overload_id`
     *           values which match according to typing rules.
     *           If the list has more than one element, overload resolution among the
     *           presented candidates must happen at runtime because of dynamic types. The
     *           type checker attempts to narrow down this list as much as possible.
     *           Empty if this is not a reference to a [Decl.FunctionDecl][google.api.expr.v1alpha1.Decl.FunctionDecl].
     *     @type \Google\Api\Expr\V1alpha1\Constant $value
     *           For references to constants, this may contain the value of the
     *           constant if known at compile time.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Checked::initOnce();
        parent::__construct($data);
    }

    /**
     * The fully qualified name of the declaration.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The fully qualified name of the declaration.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * For references to functions, this is a list of `Overload.overload_id`
     * values which match according to typing rules.
     * If the list has more than one element, overload resolution among the
     * presented candidates must happen at runtime because of dynamic types. The
     * type checker attempts to narrow down this list as much as possible.
     * Empty if this is not a reference to a [Decl.FunctionDecl][google.api.expr.v1alpha1.Decl.FunctionDecl].
     *
     * Generated from protobuf field <code>repeated string overload_id = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOverloadId()
    {
        return $this->overload_id;
    }

    /**
     * For references to functions, this is a list of `Overload.overload_id`
     * values which match according to typing rules.
     * If the list has more than one element, overload resolution among the
     * presented candidates must happen at runtime because of dynamic types. The
     * type checker attempts to narrow down this list as much as possible.
     * Empty if this is not a reference to a [Decl.FunctionDecl][google.api.expr.v1alpha1.Decl.FunctionDecl].
     *
     * Generated from protobuf field <code>repeated string overload_id = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOverloadId($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->overload_id = $arr;

        return $this;
    }

    /**
     * For references to constants, this may contain the value of the
     * constant if known at compile time.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant value = 4;</code>
     * @return \Google\Api\Expr\V1alpha1\Constant
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * For references to constants, this may contain the value of the
     * constant if known at compile time.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant value = 4;</code>
     * @param \Google\Api\Expr\V1alpha1\Constant $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Constant::class);
        $this->value = $var;

        return $this;
    }

}

