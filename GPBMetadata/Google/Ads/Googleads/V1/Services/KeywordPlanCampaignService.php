<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/keyword_plan_campaign_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Services;

class KeywordPlanCampaignService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V1\Resources\KeywordPlanCampaign::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab90d0a44676f6f676c652f6164732f676f6f676c656164732f76312f73" .
            "657276696365732f6b6579776f72645f706c616e5f63616d706169676e5f" .
            "736572766963652e70726f746f1220676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365731a1c676f6f676c652f6170692f" .
            "616e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f74" .
            "6f6275662f6669656c645f6d61736b2e70726f746f1a1e676f6f676c652f" .
            "70726f746f6275662f77726170706572732e70726f746f1a17676f6f676c" .
            "652f7270632f7374617475732e70726f746f22360a1d4765744b6579776f" .
            "7264506c616e43616d706169676e5265717565737412150a0d7265736f75" .
            "7263655f6e616d6518012001280922bc010a214d75746174654b6579776f" .
            "7264506c616e43616d706169676e735265717565737412130a0b63757374" .
            "6f6d65725f696418012001280912520a0a6f7065726174696f6e73180220" .
            "03280b323e2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "73657276696365732e4b6579776f7264506c616e43616d706169676e4f70" .
            "65726174696f6e12170a0f7061727469616c5f6661696c75726518032001" .
            "280812150a0d76616c69646174655f6f6e6c791804200128082282020a1c" .
            "4b6579776f7264506c616e43616d706169676e4f7065726174696f6e122f" .
            "0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c652e70" .
            "726f746f6275662e4669656c644d61736b12480a06637265617465180120" .
            "01280b32362e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "7265736f75726365732e4b6579776f7264506c616e43616d706169676e48" .
            "0012480a0675706461746518022001280b32362e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e7265736f75726365732e4b6579776f72" .
            "64506c616e43616d706169676e480012100a0672656d6f76651803200128" .
            "094800420b0a096f7065726174696f6e22ab010a224d75746174654b6579" .
            "776f7264506c616e43616d706169676e73526573706f6e736512310a1570" .
            "61727469616c5f6661696c7572655f6572726f7218032001280b32122e67" .
            "6f6f676c652e7270632e53746174757312520a07726573756c7473180220" .
            "03280b32412e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "73657276696365732e4d75746174654b6579776f7264506c616e43616d70" .
            "6169676e526573756c7422380a1f4d75746174654b6579776f7264506c61" .
            "6e43616d706169676e526573756c7412150a0d7265736f757263655f6e61" .
            "6d6518012001280932e0030a1a4b6579776f7264506c616e43616d706169" .
            "676e5365727669636512d1010a164765744b6579776f7264506c616e4361" .
            "6d706169676e123f2e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e73657276696365732e4765744b6579776f7264506c616e43616d70" .
            "6169676e526571756573741a362e676f6f676c652e6164732e676f6f676c" .
            "656164732e76312e7265736f75726365732e4b6579776f7264506c616e43" .
            "616d706169676e223e82d3e493023812362f76312f7b7265736f75726365" .
            "5f6e616d653d637573746f6d6572732f2a2f6b6579776f7264506c616e43" .
            "616d706169676e732f2a7d12ed010a1a4d75746174654b6579776f726450" .
            "6c616e43616d706169676e7312432e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e73657276696365732e4d75746174654b6579776f72" .
            "64506c616e43616d706169676e73526571756573741a442e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e73657276696365732e4d7574" .
            "6174654b6579776f7264506c616e43616d706169676e73526573706f6e73" .
            "65224482d3e493023e22392f76312f637573746f6d6572732f7b63757374" .
            "6f6d65725f69643d2a7d2f6b6579776f7264506c616e43616d706169676e" .
            "733a6d75746174653a012a4286020a24636f6d2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e7365727669636573421f4b6579776f72" .
            "64506c616e43616d706169676e5365727669636550726f746f50015a4867" .
            "6f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f67" .
            "6c65617069732f6164732f676f6f676c656164732f76312f736572766963" .
            "65733b7365727669636573a20203474141aa0220476f6f676c652e416473" .
            "2e476f6f676c654164732e56312e5365727669636573ca0220476f6f676c" .
            "655c4164735c476f6f676c654164735c56315c5365727669636573ea0224" .
            "476f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a5365" .
            "727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

