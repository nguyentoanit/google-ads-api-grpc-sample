<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/campaign_extension_setting_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Services;

class CampaignExtensionSettingService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\CampaignExtensionSetting::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab30e0a49676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f63616d706169676e5f657874656e73696f6e5f736574" .
            "74696e675f736572766963652e70726f746f1220676f6f676c652e616473" .
            "2e676f6f676c656164732e76322e73657276696365731a1c676f6f676c65" .
            "2f6170692f616e6e6f746174696f6e732e70726f746f1a20676f6f676c65" .
            "2f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a17676f" .
            "6f676c652f7270632f7374617475732e70726f746f1a17676f6f676c652f" .
            "6170692f636c69656e742e70726f746f223b0a2247657443616d70616967" .
            "6e457874656e73696f6e53657474696e675265717565737412150a0d7265" .
            "736f757263655f6e616d6518012001280922c6010a264d75746174654361" .
            "6d706169676e457874656e73696f6e53657474696e677352657175657374" .
            "12130a0b637573746f6d65725f696418012001280912570a0a6f70657261" .
            "74696f6e7318022003280b32432e676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e73657276696365732e43616d706169676e457874656e" .
            "73696f6e53657474696e674f7065726174696f6e12170a0f706172746961" .
            "6c5f6661696c75726518032001280812150a0d76616c69646174655f6f6e" .
            "6c791804200128082291020a2143616d706169676e457874656e73696f6e" .
            "53657474696e674f7065726174696f6e122f0a0b7570646174655f6d6173" .
            "6b18042001280b321a2e676f6f676c652e70726f746f6275662e4669656c" .
            "644d61736b124d0a0663726561746518012001280b323b2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76322e7265736f75726365732e4361" .
            "6d706169676e457874656e73696f6e53657474696e674800124d0a067570" .
            "6461746518022001280b323b2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76322e7265736f75726365732e43616d706169676e457874656e" .
            "73696f6e53657474696e67480012100a0672656d6f766518032001280948" .
            "00420b0a096f7065726174696f6e22b5010a274d757461746543616d7061" .
            "69676e457874656e73696f6e53657474696e6773526573706f6e73651231" .
            "0a157061727469616c5f6661696c7572655f6572726f7218032001280b32" .
            "122e676f6f676c652e7270632e53746174757312570a07726573756c7473" .
            "18022003280b32462e676f6f676c652e6164732e676f6f676c656164732e" .
            "76322e73657276696365732e4d757461746543616d706169676e45787465" .
            "6e73696f6e53657474696e67526573756c74223d0a244d75746174654361" .
            "6d706169676e457874656e73696f6e53657474696e67526573756c741215" .
            "0a0d7265736f757263655f6e616d6518012001280932aa040a1f43616d70" .
            "6169676e457874656e73696f6e53657474696e675365727669636512e501" .
            "0a1b47657443616d706169676e457874656e73696f6e53657474696e6712" .
            "442e676f6f676c652e6164732e676f6f676c656164732e76322e73657276" .
            "696365732e47657443616d706169676e457874656e73696f6e5365747469" .
            "6e67526571756573741a3b2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e7265736f75726365732e43616d706169676e457874656e73" .
            "696f6e53657474696e67224382d3e493023d123b2f76322f7b7265736f75" .
            "7263655f6e616d653d637573746f6d6572732f2a2f63616d706169676e45" .
            "7874656e73696f6e53657474696e67732f2a7d1281020a1f4d7574617465" .
            "43616d706169676e457874656e73696f6e53657474696e677312482e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e7365727669636573" .
            "2e4d757461746543616d706169676e457874656e73696f6e53657474696e" .
            "6773526571756573741a492e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e73657276696365732e4d757461746543616d706169676e45" .
            "7874656e73696f6e53657474696e6773526573706f6e7365224982d3e493" .
            "0243223e2f76322f637573746f6d6572732f7b637573746f6d65725f6964" .
            "3d2a7d2f63616d706169676e457874656e73696f6e53657474696e67733a" .
            "6d75746174653a012a1a1bca4118676f6f676c656164732e676f6f676c65" .
            "617069732e636f6d428b020a24636f6d2e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e7365727669636573422443616d706169676e45" .
            "7874656e73696f6e53657474696e675365727669636550726f746f50015a" .
            "48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6164732f676f6f676c656164732f76322f73657276" .
            "696365733b7365727669636573a20203474141aa0220476f6f676c652e41" .
            "64732e476f6f676c654164732e56322e5365727669636573ca0220476f6f" .
            "676c655c4164735c476f6f676c654164735c56325c5365727669636573ea" .
            "0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a" .
            "5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

