<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/source.proto

namespace Google\Api\Expr\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A specific position in source.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.SourcePosition</code>
 */
class SourcePosition extends \Google\Protobuf\Internal\Message
{
    /**
     * The soucre location name (e.g. file name).
     *
     * Generated from protobuf field <code>string location = 1;</code>
     */
    protected $location = '';
    /**
     * The character offset.
     *
     * Generated from protobuf field <code>int32 offset = 2;</code>
     */
    protected $offset = 0;
    /**
     * The 1-based index of the starting line in the source text
     * where the issue occurs, or 0 if unknown.
     *
     * Generated from protobuf field <code>int32 line = 3;</code>
     */
    protected $line = 0;
    /**
     * The 0-based index of the starting position within the line of source text
     * where the issue occurs.  Only meaningful if line is nonzer..
     *
     * Generated from protobuf field <code>int32 column = 4;</code>
     */
    protected $column = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $location
     *           The soucre location name (e.g. file name).
     *     @type int $offset
     *           The character offset.
     *     @type int $line
     *           The 1-based index of the starting line in the source text
     *           where the issue occurs, or 0 if unknown.
     *     @type int $column
     *           The 0-based index of the starting position within the line of source text
     *           where the issue occurs.  Only meaningful if line is nonzer..
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Source::initOnce();
        parent::__construct($data);
    }

    /**
     * The soucre location name (e.g. file name).
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * The soucre location name (e.g. file name).
     *
     * Generated from protobuf field <code>string location = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->location = $var;

        return $this;
    }

    /**
     * The character offset.
     *
     * Generated from protobuf field <code>int32 offset = 2;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * The character offset.
     *
     * Generated from protobuf field <code>int32 offset = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * The 1-based index of the starting line in the source text
     * where the issue occurs, or 0 if unknown.
     *
     * Generated from protobuf field <code>int32 line = 3;</code>
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * The 1-based index of the starting line in the source text
     * where the issue occurs, or 0 if unknown.
     *
     * Generated from protobuf field <code>int32 line = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt32($var);
        $this->line = $var;

        return $this;
    }

    /**
     * The 0-based index of the starting position within the line of source text
     * where the issue occurs.  Only meaningful if line is nonzer..
     *
     * Generated from protobuf field <code>int32 column = 4;</code>
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * The 0-based index of the starting position within the line of source text
     * where the issue occurs.  Only meaningful if line is nonzer..
     *
     * Generated from protobuf field <code>int32 column = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkInt32($var);
        $this->column = $var;

        return $this;
    }

}

