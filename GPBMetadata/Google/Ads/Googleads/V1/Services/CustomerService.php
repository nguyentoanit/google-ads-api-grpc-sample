<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/customer_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Services;

class CustomerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\Customer::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aad0f0a37676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f637573746f6d65725f736572766963652e70726f746f" .
            "1220676f6f676c652e6164732e676f6f676c656164732e76312e73657276" .
            "696365731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70" .
            "726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61" .
            "736b2e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170" .
            "706572732e70726f746f222b0a12476574437573746f6d65725265717565" .
            "737412150a0d7265736f757263655f6e616d65180120012809228b010a15" .
            "4d7574617465437573746f6d65725265717565737412130a0b637573746f" .
            "6d65725f696418012001280912460a096f7065726174696f6e1804200128" .
            "0b32332e676f6f676c652e6164732e676f6f676c656164732e76312e7365" .
            "7276696365732e437573746f6d65724f7065726174696f6e12150a0d7661" .
            "6c69646174655f6f6e6c7918052001280822780a1b437265617465437573" .
            "746f6d6572436c69656e745265717565737412130a0b637573746f6d6572" .
            "5f696418012001280912440a0f637573746f6d65725f636c69656e741802" .
            "2001280b322b2e676f6f676c652e6164732e676f6f676c656164732e7631" .
            "2e7265736f75726365732e437573746f6d65722281010a11437573746f6d" .
            "65724f7065726174696f6e123b0a0675706461746518012001280b322b2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e7265736f7572" .
            "6365732e437573746f6d6572122f0a0b7570646174655f6d61736b180220" .
            "01280b321a2e676f6f676c652e70726f746f6275662e4669656c644d6173" .
            "6b22350a1c437265617465437573746f6d6572436c69656e74526573706f" .
            "6e736512150a0d7265736f757263655f6e616d6518022001280922600a16" .
            "4d7574617465437573746f6d6572526573706f6e736512460a0672657375" .
            "6c7418022001280b32362e676f6f676c652e6164732e676f6f676c656164" .
            "732e76312e73657276696365732e4d7574617465437573746f6d65725265" .
            "73756c74222d0a144d7574617465437573746f6d6572526573756c741215" .
            "0a0d7265736f757263655f6e616d6518012001280922200a1e4c69737441" .
            "636365737369626c65437573746f6d6572735265717565737422390a1f4c" .
            "69737441636365737369626c65437573746f6d657273526573706f6e7365" .
            "12160a0e7265736f757263655f6e616d6573180120032809328b060a0f43" .
            "7573746f6d6572536572766963651299010a0b476574437573746f6d6572" .
            "12342e676f6f676c652e6164732e676f6f676c656164732e76312e736572" .
            "76696365732e476574437573746f6d6572526571756573741a2b2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e7265736f7572636573" .
            "2e437573746f6d6572222782d3e4930221121f2f76312f7b7265736f7572" .
            "63655f6e616d653d637573746f6d6572732f2a7d12b4010a0e4d75746174" .
            "65437573746f6d657212372e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e73657276696365732e4d7574617465437573746f6d657252" .
            "6571756573741a382e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e73657276696365732e4d7574617465437573746f6d657252657370" .
            "6f6e7365222f82d3e493022922242f76312f637573746f6d6572732f7b63" .
            "7573746f6d65725f69643d2a7d3a6d75746174653a012a12cd010a174c69" .
            "737441636365737369626c65437573746f6d65727312402e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e73657276696365732e4c6973" .
            "7441636365737369626c65437573746f6d657273526571756573741a412e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "65732e4c69737441636365737369626c65437573746f6d65727352657370" .
            "6f6e7365222d82d3e493022712252f76312f637573746f6d6572733a6c69" .
            "737441636365737369626c65437573746f6d65727312d4010a1443726561" .
            "7465437573746f6d6572436c69656e74123d2e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e73657276696365732e4372656174654375" .
            "73746f6d6572436c69656e74526571756573741a3e2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e73657276696365732e4372656174" .
            "65437573746f6d6572436c69656e74526573706f6e7365223d82d3e49302" .
            "3722322f76312f637573746f6d6572732f7b637573746f6d65725f69643d" .
            "2a7d3a637265617465437573746f6d6572436c69656e743a012a42fb010a" .
            "24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76312e73" .
            "657276696365734214437573746f6d65725365727669636550726f746f50" .
            "015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f" .
            "676f6f676c65617069732f6164732f676f6f676c656164732f76312f7365" .
            "7276696365733b7365727669636573a20203474141aa0220476f6f676c65" .
            "2e4164732e476f6f676c654164732e56312e5365727669636573ca022047" .
            "6f6f676c655c4164735c476f6f676c654164735c56315c53657276696365" .
            "73ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a5631" .
            "3a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

