<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/ad_group_extension_setting_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Services;

class AdGroupExtensionSettingService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\AdGroupExtensionSetting::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa00e0a49676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f61645f67726f75705f657874656e73696f6e5f736574" .
            "74696e675f736572766963652e70726f746f1220676f6f676c652e616473" .
            "2e676f6f676c656164732e76322e73657276696365731a1c676f6f676c65" .
            "2f6170692f616e6e6f746174696f6e732e70726f746f1a20676f6f676c65" .
            "2f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a17676f" .
            "6f676c652f7270632f7374617475732e70726f746f1a17676f6f676c652f" .
            "6170692f636c69656e742e70726f746f223a0a21476574416447726f7570" .
            "457874656e73696f6e53657474696e675265717565737412150a0d726573" .
            "6f757263655f6e616d6518012001280922c4010a254d7574617465416447" .
            "726f7570457874656e73696f6e53657474696e6773526571756573741213" .
            "0a0b637573746f6d65725f696418012001280912560a0a6f706572617469" .
            "6f6e7318022003280b32422e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e73657276696365732e416447726f7570457874656e73696f" .
            "6e53657474696e674f7065726174696f6e12170a0f7061727469616c5f66" .
            "61696c75726518032001280812150a0d76616c69646174655f6f6e6c7918" .
            "0420012808228e020a20416447726f7570457874656e73696f6e53657474" .
            "696e674f7065726174696f6e122f0a0b7570646174655f6d61736b180420" .
            "01280b321a2e676f6f676c652e70726f746f6275662e4669656c644d6173" .
            "6b124c0a0663726561746518012001280b323a2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76322e7265736f75726365732e416447726f75" .
            "70457874656e73696f6e53657474696e674800124c0a0675706461746518" .
            "022001280b323a2e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e7265736f75726365732e416447726f7570457874656e73696f6e5365" .
            "7474696e67480012100a0672656d6f76651803200128094800420b0a096f" .
            "7065726174696f6e22b3010a264d7574617465416447726f757045787465" .
            "6e73696f6e53657474696e6773526573706f6e736512310a157061727469" .
            "616c5f6661696c7572655f6572726f7218032001280b32122e676f6f676c" .
            "652e7270632e53746174757312560a07726573756c747318022003280b32" .
            "452e676f6f676c652e6164732e676f6f676c656164732e76322e73657276" .
            "696365732e4d7574617465416447726f7570457874656e73696f6e536574" .
            "74696e67526573756c74223c0a234d7574617465416447726f7570457874" .
            "656e73696f6e53657474696e67526573756c7412150a0d7265736f757263" .
            "655f6e616d6518012001280932a1040a1e416447726f7570457874656e73" .
            "696f6e53657474696e675365727669636512e1010a1a476574416447726f" .
            "7570457874656e73696f6e53657474696e6712432e676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e73657276696365732e476574416447" .
            "726f7570457874656e73696f6e53657474696e67526571756573741a3a2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e7265736f7572" .
            "6365732e416447726f7570457874656e73696f6e53657474696e67224282" .
            "d3e493023c123a2f76322f7b7265736f757263655f6e616d653d63757374" .
            "6f6d6572732f2a2f616447726f7570457874656e73696f6e53657474696e" .
            "67732f2a7d12fd010a1e4d7574617465416447726f7570457874656e7369" .
            "6f6e53657474696e677312472e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76322e73657276696365732e4d7574617465416447726f757045" .
            "7874656e73696f6e53657474696e6773526571756573741a482e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e73657276696365732e4d" .
            "7574617465416447726f7570457874656e73696f6e53657474696e677352" .
            "6573706f6e7365224882d3e4930242223d2f76322f637573746f6d657273" .
            "2f7b637573746f6d65725f69643d2a7d2f616447726f7570457874656e73" .
            "696f6e53657474696e67733a6d75746174653a012a1a1bca4118676f6f67" .
            "6c656164732e676f6f676c65617069732e636f6d428a020a24636f6d2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e73657276696365" .
            "734223416447726f7570457874656e73696f6e53657474696e6753657276" .
            "69636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f" .
            "67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c65" .
            "6164732f76322f73657276696365733b7365727669636573a20203474141" .
            "aa0220476f6f676c652e4164732e476f6f676c654164732e56322e536572" .
            "7669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56" .
            "325c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f67" .
            "6c654164733a3a56323a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

