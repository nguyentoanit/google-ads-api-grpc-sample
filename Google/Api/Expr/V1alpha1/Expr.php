<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1alpha1/syntax.proto

namespace Google\Api\Expr\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An abstract representation of a common expression.
 * Expressions are abstractly represented as a collection of identifiers,
 * select statements, function calls, literals, and comprehensions. All
 * operators with the exception of the '.' operator are modelled as function
 * calls. This makes it easy to represent new operators into the existing AST.
 * All references within expressions must resolve to a [Decl][google.api.expr.v1alpha1.Decl] provided at
 * type-check for an expression to be valid. A reference may either be a bare
 * identifier `name` or a qualified identifier `google.api.name`. References
 * may either refer to a value or a function declaration.
 * For example, the expression `google.api.name.startsWith('expr')` references
 * the declaration `google.api.name` within a [Expr.Select][google.api.expr.v1alpha1.Expr.Select] expression, and
 * the function declaration `startsWith`.
 *
 * Generated from protobuf message <code>google.api.expr.v1alpha1.Expr</code>
 */
class Expr extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. An id assigned to this node by the parser which is unique in a
     * given expression tree. This is used to associate type information and other
     * attributes to a node in the parse tree.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     */
    protected $id = 0;
    protected $expr_kind;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           Required. An id assigned to this node by the parser which is unique in a
     *           given expression tree. This is used to associate type information and other
     *           attributes to a node in the parse tree.
     *     @type \Google\Api\Expr\V1alpha1\Constant $const_expr
     *           A literal expression.
     *     @type \Google\Api\Expr\V1alpha1\Expr\Ident $ident_expr
     *           An identifier expression.
     *     @type \Google\Api\Expr\V1alpha1\Expr\Select $select_expr
     *           A field selection expression, e.g. `request.auth`.
     *     @type \Google\Api\Expr\V1alpha1\Expr\Call $call_expr
     *           A call expression, including calls to predefined functions and operators.
     *     @type \Google\Api\Expr\V1alpha1\Expr\CreateList $list_expr
     *           A list creation expression.
     *     @type \Google\Api\Expr\V1alpha1\Expr\CreateStruct $struct_expr
     *           A map or message creation expression.
     *     @type \Google\Api\Expr\V1alpha1\Expr\Comprehension $comprehension_expr
     *           A comprehension expression.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Alpha1\Syntax::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. An id assigned to this node by the parser which is unique in a
     * given expression tree. This is used to associate type information and other
     * attributes to a node in the parse tree.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Required. An id assigned to this node by the parser which is unique in a
     * given expression tree. This is used to associate type information and other
     * attributes to a node in the parse tree.
     *
     * Generated from protobuf field <code>int64 id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * A literal expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant const_expr = 3;</code>
     * @return \Google\Api\Expr\V1alpha1\Constant
     */
    public function getConstExpr()
    {
        return $this->readOneof(3);
    }

    /**
     * A literal expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Constant const_expr = 3;</code>
     * @param \Google\Api\Expr\V1alpha1\Constant $var
     * @return $this
     */
    public function setConstExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Constant::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * An identifier expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Ident ident_expr = 4;</code>
     * @return \Google\Api\Expr\V1alpha1\Expr\Ident
     */
    public function getIdentExpr()
    {
        return $this->readOneof(4);
    }

    /**
     * An identifier expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Ident ident_expr = 4;</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\Ident $var
     * @return $this
     */
    public function setIdentExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Expr_Ident::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A field selection expression, e.g. `request.auth`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Select select_expr = 5;</code>
     * @return \Google\Api\Expr\V1alpha1\Expr\Select
     */
    public function getSelectExpr()
    {
        return $this->readOneof(5);
    }

    /**
     * A field selection expression, e.g. `request.auth`.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Select select_expr = 5;</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\Select $var
     * @return $this
     */
    public function setSelectExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Expr_Select::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A call expression, including calls to predefined functions and operators.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Call call_expr = 6;</code>
     * @return \Google\Api\Expr\V1alpha1\Expr\Call
     */
    public function getCallExpr()
    {
        return $this->readOneof(6);
    }

    /**
     * A call expression, including calls to predefined functions and operators.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Call call_expr = 6;</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\Call $var
     * @return $this
     */
    public function setCallExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Expr_Call::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A list creation expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.CreateList list_expr = 7;</code>
     * @return \Google\Api\Expr\V1alpha1\Expr\CreateList
     */
    public function getListExpr()
    {
        return $this->readOneof(7);
    }

    /**
     * A list creation expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.CreateList list_expr = 7;</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\CreateList $var
     * @return $this
     */
    public function setListExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Expr_CreateList::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A map or message creation expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.CreateStruct struct_expr = 8;</code>
     * @return \Google\Api\Expr\V1alpha1\Expr\CreateStruct
     */
    public function getStructExpr()
    {
        return $this->readOneof(8);
    }

    /**
     * A map or message creation expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.CreateStruct struct_expr = 8;</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\CreateStruct $var
     * @return $this
     */
    public function setStructExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Expr_CreateStruct::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A comprehension expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Comprehension comprehension_expr = 9;</code>
     * @return \Google\Api\Expr\V1alpha1\Expr\Comprehension
     */
    public function getComprehensionExpr()
    {
        return $this->readOneof(9);
    }

    /**
     * A comprehension expression.
     *
     * Generated from protobuf field <code>.google.api.expr.v1alpha1.Expr.Comprehension comprehension_expr = 9;</code>
     * @param \Google\Api\Expr\V1alpha1\Expr\Comprehension $var
     * @return $this
     */
    public function setComprehensionExpr($var)
    {
        GPBUtil::checkMessage($var, \Google\Api\Expr\V1alpha1\Expr_Comprehension::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExprKind()
    {
        return $this->whichOneof("expr_kind");
    }

}

