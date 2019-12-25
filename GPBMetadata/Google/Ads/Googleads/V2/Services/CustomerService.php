<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/customer_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Services;

class CustomerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\AccessRole::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\Customer::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a110a37676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f637573746f6d65725f736572766963652e70726f746f" .
            "1220676f6f676c652e6164732e676f6f676c656164732e76322e73657276" .
            "696365731a30676f6f676c652f6164732f676f6f676c656164732f76322f" .
            "7265736f75726365732f637573746f6d65722e70726f746f1a1c676f6f67" .
            "6c652f6170692f616e6e6f746174696f6e732e70726f746f1a20676f6f67" .
            "6c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a1e" .
            "676f6f676c652f70726f746f6275662f77726170706572732e70726f746f" .
            "1a17676f6f676c652f6170692f636c69656e742e70726f746f222b0a1247" .
            "6574437573746f6d65725265717565737412150a0d7265736f757263655f" .
            "6e616d65180120012809228b010a154d7574617465437573746f6d657252" .
            "65717565737412130a0b637573746f6d65725f696418012001280912460a" .
            "096f7065726174696f6e18042001280b32332e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e73657276696365732e437573746f6d6572" .
            "4f7065726174696f6e12150a0d76616c69646174655f6f6e6c7918052001" .
            "280822fc010a1b437265617465437573746f6d6572436c69656e74526571" .
            "7565737412130a0b637573746f6d65725f696418012001280912440a0f63" .
            "7573746f6d65725f636c69656e7418022001280b322b2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e7265736f75726365732e437573" .
            "746f6d657212330a0d656d61696c5f6164647265737318032001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c7565124d" .
            "0a0b6163636573735f726f6c6518042001280e32382e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e656e756d732e416363657373526f" .
            "6c65456e756d2e416363657373526f6c652281010a11437573746f6d6572" .
            "4f7065726174696f6e123b0a0675706461746518012001280b322b2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e7265736f75726365" .
            "732e437573746f6d6572122f0a0b7570646174655f6d61736b1802200128" .
            "0b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b22" .
            "350a1c437265617465437573746f6d6572436c69656e74526573706f6e73" .
            "6512150a0d7265736f757263655f6e616d6518022001280922600a164d75" .
            "74617465437573746f6d6572526573706f6e736512460a06726573756c74" .
            "18022001280b32362e676f6f676c652e6164732e676f6f676c656164732e" .
            "76322e73657276696365732e4d7574617465437573746f6d657252657375" .
            "6c74222d0a144d7574617465437573746f6d6572526573756c7412150a0d" .
            "7265736f757263655f6e616d6518012001280922200a1e4c697374416363" .
            "65737369626c65437573746f6d6572735265717565737422390a1f4c6973" .
            "7441636365737369626c65437573746f6d657273526573706f6e73651216" .
            "0a0e7265736f757263655f6e616d657318012003280932a8060a0f437573" .
            "746f6d6572536572766963651299010a0b476574437573746f6d65721234" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e7365727669" .
            "6365732e476574437573746f6d6572526571756573741a2b2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e7265736f75726365732e43" .
            "7573746f6d6572222782d3e4930221121f2f76322f7b7265736f75726365" .
            "5f6e616d653d637573746f6d6572732f2a7d12b4010a0e4d757461746543" .
            "7573746f6d657212372e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e73657276696365732e4d7574617465437573746f6d6572526571" .
            "756573741a382e676f6f676c652e6164732e676f6f676c656164732e7632" .
            "2e73657276696365732e4d7574617465437573746f6d6572526573706f6e" .
            "7365222f82d3e493022922242f76322f637573746f6d6572732f7b637573" .
            "746f6d65725f69643d2a7d3a6d75746174653a012a12cd010a174c697374" .
            "41636365737369626c65437573746f6d65727312402e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e73657276696365732e4c69737441" .
            "636365737369626c65437573746f6d657273526571756573741a412e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e7365727669636573" .
            "2e4c69737441636365737369626c65437573746f6d657273526573706f6e" .
            "7365222d82d3e493022712252f76322f637573746f6d6572733a6c697374" .
            "41636365737369626c65437573746f6d65727312d4010a14437265617465" .
            "437573746f6d6572436c69656e74123d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e73657276696365732e43726561746543757374" .
            "6f6d6572436c69656e74526571756573741a3e2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76322e73657276696365732e43726561746543" .
            "7573746f6d6572436c69656e74526573706f6e7365223d82d3e493023722" .
            "322f76322f637573746f6d6572732f7b637573746f6d65725f69643d2a7d" .
            "3a637265617465437573746f6d6572436c69656e743a012a1a1bca411867" .
            "6f6f676c656164732e676f6f676c65617069732e636f6d42fb010a24636f" .
            "6d2e676f6f676c652e6164732e676f6f676c656164732e76322e73657276" .
            "696365734214437573746f6d65725365727669636550726f746f50015a48" .
            "676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f" .
            "676c65617069732f6164732f676f6f676c656164732f76322f7365727669" .
            "6365733b7365727669636573a20203474141aa0220476f6f676c652e4164" .
            "732e476f6f676c654164732e56322e5365727669636573ca0220476f6f67" .
            "6c655c4164735c476f6f676c654164735c56325c5365727669636573ea02" .
            "24476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a53" .
            "65727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

