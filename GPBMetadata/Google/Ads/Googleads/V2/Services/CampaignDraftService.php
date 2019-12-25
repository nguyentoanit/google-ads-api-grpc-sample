<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/campaign_draft_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Services;

class CampaignDraftService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\CampaignDraft::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acd120a3d676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f63616d706169676e5f64726166745f73657276696365" .
            "2e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e73657276696365731a1c676f6f676c652f6170692f616e6e6f746174" .
            "696f6e732e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e67" .
            "2f6f7065726174696f6e732e70726f746f1a20676f6f676c652f70726f74" .
            "6f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f" .
            "7270632f7374617475732e70726f746f1a17676f6f676c652f6170692f63" .
            "6c69656e742e70726f746f22300a1747657443616d706169676e44726166" .
            "745265717565737412150a0d7265736f757263655f6e616d651801200128" .
            "0922b0010a1b4d757461746543616d706169676e44726166747352657175" .
            "65737412130a0b637573746f6d65725f6964180120012809124c0a0a6f70" .
            "65726174696f6e7318022003280b32382e676f6f676c652e6164732e676f" .
            "6f676c656164732e76322e73657276696365732e43616d706169676e4472" .
            "6166744f7065726174696f6e12170a0f7061727469616c5f6661696c7572" .
            "6518032001280812150a0d76616c69646174655f6f6e6c79180420012808" .
            "22350a1b50726f6d6f746543616d706169676e4472616674526571756573" .
            "7412160a0e63616d706169676e5f647261667418012001280922f0010a16" .
            "43616d706169676e44726166744f7065726174696f6e122f0a0b75706461" .
            "74655f6d61736b18042001280b321a2e676f6f676c652e70726f746f6275" .
            "662e4669656c644d61736b12420a0663726561746518012001280b32302e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e7265736f7572" .
            "6365732e43616d706169676e4472616674480012420a0675706461746518" .
            "022001280b32302e676f6f676c652e6164732e676f6f676c656164732e76" .
            "322e7265736f75726365732e43616d706169676e4472616674480012100a" .
            "0672656d6f76651803200128094800420b0a096f7065726174696f6e229f" .
            "010a1c4d757461746543616d706169676e447261667473526573706f6e73" .
            "6512310a157061727469616c5f6661696c7572655f6572726f7218032001" .
            "280b32122e676f6f676c652e7270632e537461747573124c0a0772657375" .
            "6c747318022003280b323b2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e73657276696365732e4d757461746543616d706169676e44" .
            "72616674526573756c7422320a194d757461746543616d706169676e4472" .
            "616674526573756c7412150a0d7265736f757263655f6e616d6518012001" .
            "280922630a234c69737443616d706169676e44726166744173796e634572" .
            "726f72735265717565737412150a0d7265736f757263655f6e616d651801" .
            "2001280912120a0a706167655f746f6b656e18022001280912110a097061" .
            "67655f73697a6518032001280522630a244c69737443616d706169676e44" .
            "726166744173796e634572726f7273526573706f6e736512220a06657272" .
            "6f727318012003280b32122e676f6f676c652e7270632e53746174757312" .
            "170a0f6e6578745f706167655f746f6b656e1802200128093298070a1443" .
            "616d706169676e44726166745365727669636512b9010a1047657443616d" .
            "706169676e447261667412392e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76322e73657276696365732e47657443616d706169676e447261" .
            "6674526571756573741a302e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e7265736f75726365732e43616d706169676e447261667422" .
            "3882d3e493023212302f76322f7b7265736f757263655f6e616d653d6375" .
            "73746f6d6572732f2a2f63616d706169676e4472616674732f2a7d12d501" .
            "0a144d757461746543616d706169676e447261667473123d2e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e73657276696365732e4d75" .
            "7461746543616d706169676e447261667473526571756573741a3e2e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e7365727669636573" .
            "2e4d757461746543616d706169676e447261667473526573706f6e736522" .
            "3e82d3e493023822332f76322f637573746f6d6572732f7b637573746f6d" .
            "65725f69643d2a7d2f63616d706169676e4472616674733a6d7574617465" .
            "3a012a12d4010a1450726f6d6f746543616d706169676e4472616674123d" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e7365727669" .
            "6365732e50726f6d6f746543616d706169676e4472616674526571756573" .
            "741a1d2e676f6f676c652e6c6f6e6772756e6e696e672e4f706572617469" .
            "6f6e225e82d3e493023e22392f76322f7b63616d706169676e5f64726166" .
            "743d637573746f6d6572732f2a2f63616d706169676e4472616674732f2a" .
            "7d3a70726f6d6f74653a012aca41170a15676f6f676c652e70726f746f62" .
            "75662e456d70747912f7010a1c4c69737443616d706169676e4472616674" .
            "4173796e634572726f727312452e676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e73657276696365732e4c69737443616d706169676e44" .
            "726166744173796e634572726f7273526571756573741a462e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e73657276696365732e4c69" .
            "737443616d706169676e44726166744173796e634572726f727352657370" .
            "6f6e7365224882d3e493024212402f76322f7b7265736f757263655f6e61" .
            "6d653d637573746f6d6572732f2a2f63616d706169676e4472616674732f" .
            "2a7d3a6c6973744173796e634572726f72731a1bca4118676f6f676c6561" .
            "64732e676f6f676c65617069732e636f6d4280020a24636f6d2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e73657276696365734219" .
            "43616d706169676e44726166745365727669636550726f746f50015a4867" .
            "6f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f67" .
            "6c65617069732f6164732f676f6f676c656164732f76322f736572766963" .
            "65733b7365727669636573a20203474141aa0220476f6f676c652e416473" .
            "2e476f6f676c654164732e56322e5365727669636573ca0220476f6f676c" .
            "655c4164735c476f6f676c654164735c56325c5365727669636573ea0224" .
            "476f6f676c653a3a4164733a3a476f6f676c654164733a3a56323a3a5365" .
            "727669636573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
