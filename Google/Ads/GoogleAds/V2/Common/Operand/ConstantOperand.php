<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/matching_function.proto

namespace Google\Ads\GoogleAds\V2\Common\Operand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A constant operand in a matching function.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.Operand.ConstantOperand</code>
 */
class ConstantOperand extends \Google\Protobuf\Internal\Message
{
    protected $constant_operand_value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $string_value
     *           String value of the operand if it is a string type.
     *     @type \Google\Protobuf\Int64Value $long_value
     *           Int64 value of the operand if it is a int64 type.
     *     @type \Google\Protobuf\BoolValue $boolean_value
     *           Boolean value of the operand if it is a boolean type.
     *     @type \Google\Protobuf\DoubleValue $double_value
     *           Double value of the operand if it is a double type.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * String value of the operand if it is a string type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getStringValue()
    {
        return $this->readOneof(1);
    }

    /**
     * Returns the unboxed value from <code>getStringValue()</code>

     * String value of the operand if it is a string type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 1;</code>
     * @return string|null
     */
    public function getStringValueUnwrapped()
    {
        return $this->readWrapperValue("string_value");
    }

    /**
     * String value of the operand if it is a string type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * String value of the operand if it is a string type.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue string_value = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setStringValueUnwrapped($var)
    {
        $this->writeWrapperValue("string_value", $var);
        return $this;}

    /**
     * Int64 value of the operand if it is a int64 type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value long_value = 2;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getLongValue()
    {
        return $this->readOneof(2);
    }

    /**
     * Returns the unboxed value from <code>getLongValue()</code>

     * Int64 value of the operand if it is a int64 type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value long_value = 2;</code>
     * @return int|string|null
     */
    public function getLongValueUnwrapped()
    {
        return $this->readWrapperValue("long_value");
    }

    /**
     * Int64 value of the operand if it is a int64 type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value long_value = 2;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setLongValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Int64 value of the operand if it is a int64 type.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value long_value = 2;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setLongValueUnwrapped($var)
    {
        $this->writeWrapperValue("long_value", $var);
        return $this;}

    /**
     * Boolean value of the operand if it is a boolean type.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getBooleanValue()
    {
        return $this->readOneof(3);
    }

    /**
     * Returns the unboxed value from <code>getBooleanValue()</code>

     * Boolean value of the operand if it is a boolean type.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     * @return bool|null
     */
    public function getBooleanValueUnwrapped()
    {
        return $this->readWrapperValue("boolean_value");
    }

    /**
     * Boolean value of the operand if it is a boolean type.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setBooleanValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Boolean value of the operand if it is a boolean type.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue boolean_value = 3;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setBooleanValueUnwrapped($var)
    {
        $this->writeWrapperValue("boolean_value", $var);
        return $this;}

    /**
     * Double value of the operand if it is a double type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 4;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getDoubleValue()
    {
        return $this->readOneof(4);
    }

    /**
     * Returns the unboxed value from <code>getDoubleValue()</code>

     * Double value of the operand if it is a double type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 4;</code>
     * @return float|null
     */
    public function getDoubleValueUnwrapped()
    {
        return $this->readWrapperValue("double_value");
    }

    /**
     * Double value of the operand if it is a double type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 4;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * Double value of the operand if it is a double type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue double_value = 4;</code>
     * @param float|null $var
     * @return $this
     */
    public function setDoubleValueUnwrapped($var)
    {
        $this->writeWrapperValue("double_value", $var);
        return $this;}

    /**
     * @return string
     */
    public function getConstantOperandValue()
    {
        return $this->whichOneof("constant_operand_value");
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConstantOperand::class, \Google\Ads\GoogleAds\V2\Common\Operand_ConstantOperand::class);

