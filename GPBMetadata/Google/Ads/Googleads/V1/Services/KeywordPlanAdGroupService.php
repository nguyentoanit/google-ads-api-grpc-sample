<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_ad_group_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Services;

class KeywordPlanAdGroupService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\KeywordPlanAdGroup::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa60d0a44676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f6b6579776f72645f706c616e5f61645f67726f75705f" .
            "736572766963652e70726f746f1220676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365731a1c676f6f676c652f6170692f" .
            "616e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f74" .
            "6f6275662f6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f" .
            "70726f746f6275662f77726170706572732e70726f746f1a17676f6f676c" .
            "652f7270632f7374617475732e70726f746f22350a1c4765744b6579776f" .
            "7264506c616e416447726f75705265717565737412150a0d7265736f7572" .
            "63655f6e616d6518012001280922ba010a204d75746174654b6579776f72" .
            "64506c616e416447726f7570735265717565737412130a0b637573746f6d" .
            "65725f696418012001280912510a0a6f7065726174696f6e731802200328" .
            "0b323d2e676f6f676c652e6164732e676f6f676c656164732e76312e7365" .
            "7276696365732e4b6579776f7264506c616e416447726f75704f70657261" .
            "74696f6e12170a0f7061727469616c5f6661696c75726518032001280812" .
            "150a0d76616c69646174655f6f6e6c7918042001280822ff010a1b4b6579" .
            "776f7264506c616e416447726f75704f7065726174696f6e122f0a0b7570" .
            "646174655f6d61736b18042001280b321a2e676f6f676c652e70726f746f" .
            "6275662e4669656c644d61736b12470a0663726561746518012001280b32" .
            "352e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f" .
            "75726365732e4b6579776f7264506c616e416447726f7570480012470a06" .
            "75706461746518022001280b32352e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e7265736f75726365732e4b6579776f7264506c616e" .
            "416447726f7570480012100a0672656d6f76651803200128094800420b0a" .
            "096f7065726174696f6e22a9010a214d75746174654b6579776f7264506c" .
            "616e416447726f757073526573706f6e736512310a157061727469616c5f" .
            "6661696c7572655f6572726f7218032001280b32122e676f6f676c652e72" .
            "70632e53746174757312510a07726573756c747318022003280b32402e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e73657276696365" .
            "732e4d75746174654b6579776f7264506c616e416447726f757052657375" .
            "6c7422370a1e4d75746174654b6579776f7264506c616e416447726f7570" .
            "526573756c7412150a0d7265736f757263655f6e616d6518012001280932" .
            "d7030a194b6579776f7264506c616e416447726f75705365727669636512" .
            "cd010a154765744b6579776f7264506c616e416447726f7570123e2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e7365727669636573" .
            "2e4765744b6579776f7264506c616e416447726f7570526571756573741a" .
            "352e676f6f676c652e6164732e676f6f676c656164732e76312e7265736f" .
            "75726365732e4b6579776f7264506c616e416447726f7570223d82d3e493" .
            "023712352f76312f7b7265736f757263655f6e616d653d637573746f6d65" .
            "72732f2a2f6b6579776f7264506c616e416447726f7570732f2a7d12e901" .
            "0a194d75746174654b6579776f7264506c616e416447726f75707312422e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e736572766963" .
            "65732e4d75746174654b6579776f7264506c616e416447726f7570735265" .
            "71756573741a432e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e73657276696365732e4d75746174654b6579776f7264506c616e4164" .
            "47726f757073526573706f6e7365224382d3e493023d22382f76312f6375" .
            "73746f6d6572732f7b637573746f6d65725f69643d2a7d2f6b6579776f72" .
            "64506c616e416447726f7570733a6d75746174653a012a4285020a24636f" .
            "6d2e676f6f676c652e6164732e676f6f676c656164732e76312e73657276" .
            "69636573421e4b6579776f7264506c616e416447726f7570536572766963" .
            "6550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f6765" .
            "6e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164" .
            "732f76312f73657276696365733b7365727669636573a20203474141aa02" .
            "20476f6f676c652e4164732e476f6f676c654164732e56312e5365727669" .
            "636573ca0220476f6f676c655c4164735c476f6f676c654164735c56315c" .
            "5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c65" .
            "4164733a3a56313a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

