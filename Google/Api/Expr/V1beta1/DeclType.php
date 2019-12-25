<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/decl.proto

namespace Google\Api\Expr\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The declared type of a variable.
 * Extends runtime type values with extra information used for type checking
 * and dispatching.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.DeclType</code>
 */
class DeclType extends \Google\Protobuf\Internal\Message
{
    /**
     * The expression id of the declared type, if applicable.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     */
    protected $id = 0;
    /**
     * The type name, e.g. 'int', 'my.type.Type' or 'T'
     *
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';
    /**
     * An ordered list of type parameters, e.g. `<string, int>`.
     * Only applies to a subset of types, e.g. `map`, `list`.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.DeclType type_params = 4;</code>
     */
    private $type_params;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $id
     *           The expression id of the declared type, if applicable.
     *     @type string $type
     *           The type name, e.g. 'int', 'my.type.Type' or 'T'
     *     @type \Google\Api\Expr\V1beta1\DeclType[]|\Google\Protobuf\Internal\RepeatedField $type_params
     *           An ordered list of type parameters, e.g. `<string, int>`.
     *           Only applies to a subset of types, e.g. `map`, `list`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Decl::initOnce();
        parent::__construct($data);
    }

    /**
     * The expression id of the declared type, if applicable.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * The expression id of the declared type, if applicable.
     *
     * Generated from protobuf field <code>int32 id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt32($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The type name, e.g. 'int', 'my.type.Type' or 'T'
     *
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type name, e.g. 'int', 'my.type.Type' or 'T'
     *
     * Generated from protobuf field <code>string type = 2;</code>
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
     * An ordered list of type parameters, e.g. `<string, int>`.
     * Only applies to a subset of types, e.g. `map`, `list`.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.DeclType type_params = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypeParams()
    {
        return $this->type_params;
    }

    /**
     * An ordered list of type parameters, e.g. `<string, int>`.
     * Only applies to a subset of types, e.g. `map`, `list`.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.DeclType type_params = 4;</code>
     * @param \Google\Api\Expr\V1beta1\DeclType[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypeParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1beta1\DeclType::class);
        $this->type_params = $arr;

        return $this;
    }

}

