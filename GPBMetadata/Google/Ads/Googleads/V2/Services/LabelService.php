<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/label_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Services;

class LabelService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\Label::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab50b0a34676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f6c6162656c5f736572766963652e70726f746f122067" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e73657276696365" .
            "731a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f74" .
            "6f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e" .
            "70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f" .
            "1a17676f6f676c652f6170692f636c69656e742e70726f746f22280a0f47" .
            "65744c6162656c5265717565737412150a0d7265736f757263655f6e616d" .
            "6518012001280922a0010a134d75746174654c6162656c73526571756573" .
            "7412130a0b637573746f6d65725f696418012001280912440a0a6f706572" .
            "6174696f6e7318022003280b32302e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e73657276696365732e4c6162656c4f706572617469" .
            "6f6e12170a0f7061727469616c5f6661696c75726518032001280812150a" .
            "0d76616c69646174655f6f6e6c7918042001280822d8010a0e4c6162656c" .
            "4f7065726174696f6e122f0a0b7570646174655f6d61736b18042001280b" .
            "321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b123a" .
            "0a0663726561746518012001280b32282e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e7265736f75726365732e4c6162656c4800123a" .
            "0a0675706461746518022001280b32282e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e7265736f75726365732e4c6162656c48001210" .
            "0a0672656d6f76651803200128094800420b0a096f7065726174696f6e22" .
            "8f010a144d75746174654c6162656c73526573706f6e736512310a157061" .
            "727469616c5f6661696c7572655f6572726f7218032001280b32122e676f" .
            "6f676c652e7270632e53746174757312440a07726573756c747318022003" .
            "280b32332e676f6f676c652e6164732e676f6f676c656164732e76322e73" .
            "657276696365732e4d75746174654c6162656c526573756c74222a0a114d" .
            "75746174654c6162656c526573756c7412150a0d7265736f757263655f6e" .
            "616d6518012001280932ff020a0c4c6162656c536572766963651299010a" .
            "084765744c6162656c12312e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e73657276696365732e4765744c6162656c52657175657374" .
            "1a282e676f6f676c652e6164732e676f6f676c656164732e76322e726573" .
            "6f75726365732e4c6162656c223082d3e493022a12282f76322f7b726573" .
            "6f757263655f6e616d653d637573746f6d6572732f2a2f6c6162656c732f" .
            "2a7d12b5010a0c4d75746174654c6162656c7312352e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e73657276696365732e4d75746174" .
            "654c6162656c73526571756573741a362e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e73657276696365732e4d75746174654c616265" .
            "6c73526573706f6e7365223682d3e4930230222b2f76322f637573746f6d" .
            "6572732f7b637573746f6d65725f69643d2a7d2f6c6162656c733a6d7574" .
            "6174653a012a1a1bca4118676f6f676c656164732e676f6f676c65617069" .
            "732e636f6d42f8010a24636f6d2e676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e736572766963657342114c6162656c53657276696365" .
            "50726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f6164732f676f6f676c65616473" .
            "2f76322f73657276696365733b7365727669636573a20203474141aa0220" .
            "476f6f676c652e4164732e476f6f676c654164732e56322e536572766963" .
            "6573ca0220476f6f676c655c4164735c476f6f676c654164735c56325c53" .
            "65727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c6541" .
            "64733a3a56323a3a5365727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

