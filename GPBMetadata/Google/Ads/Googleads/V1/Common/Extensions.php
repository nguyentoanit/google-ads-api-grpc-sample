<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/extensions.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Common;

class Extensions
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V1\Common\CustomParameter::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Common\FeedCommon::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\AppStore::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\CallConversionReportingState::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PriceExtensionPriceQualifier::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PriceExtensionPriceUnit::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PriceExtensionType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PromotionExtensionDiscountModifier::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PromotionExtensionOccasion::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a822c0a2f676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f657874656e73696f6e732e70726f746f121e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e636f6d6d6f6e1a30676f6f67" .
            "6c652f6164732f676f6f676c656164732f76312f636f6d6d6f6e2f666565" .
            "645f636f6d6d6f6e2e70726f746f1a2d676f6f676c652f6164732f676f6f" .
            "676c656164732f76312f656e756d732f6170705f73746f72652e70726f74" .
            "6f1a43676f6f676c652f6164732f676f6f676c656164732f76312f656e75" .
            "6d732f63616c6c5f636f6e76657273696f6e5f7265706f7274696e675f73" .
            "746174652e70726f746f1a43676f6f676c652f6164732f676f6f676c6561" .
            "64732f76312f656e756d732f70726963655f657874656e73696f6e5f7072" .
            "6963655f7175616c69666965722e70726f746f1a3e676f6f676c652f6164" .
            "732f676f6f676c656164732f76312f656e756d732f70726963655f657874" .
            "656e73696f6e5f70726963655f756e69742e70726f746f1a38676f6f676c" .
            "652f6164732f676f6f676c656164732f76312f656e756d732f7072696365" .
            "5f657874656e73696f6e5f747970652e70726f746f1a49676f6f676c652f" .
            "6164732f676f6f676c656164732f76312f656e756d732f70726f6d6f7469" .
            "6f6e5f657874656e73696f6e5f646973636f756e745f6d6f646966696572" .
            "2e70726f746f1a40676f6f676c652f6164732f676f6f676c656164732f76" .
            "312f656e756d732f70726f6d6f74696f6e5f657874656e73696f6e5f6f63" .
            "636173696f6e2e70726f746f1a1c676f6f676c652f6170692f616e6e6f74" .
            "6174696f6e732e70726f746f1a1e676f6f676c652f70726f746f6275662f" .
            "77726170706572732e70726f746f22e5030a0b417070466565644974656d" .
            "122f0a096c696e6b5f7465787418012001280b321c2e676f6f676c652e70" .
            "726f746f6275662e537472696e6756616c7565122c0a066170705f696418" .
            "022001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c756512470a096170705f73746f726518032001280e32342e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e656e756d732e417070" .
            "53746f7265456e756d2e41707053746f726512300a0a66696e616c5f7572" .
            "6c7318042003280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512370a1166696e616c5f6d6f62696c655f75726c7318" .
            "052003280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c7565123b0a15747261636b696e675f75726c5f74656d706c617465" .
            "18062001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565124e0a1575726c5f637573746f6d5f706172616d65746572" .
            "7318072003280b322f2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e636f6d6d6f6e2e437573746f6d506172616d6574657212360a10" .
            "66696e616c5f75726c5f73756666697818082001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756522be030a0c43616c" .
            "6c466565644974656d12320a0c70686f6e655f6e756d6265721801200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512320a0c636f756e7472795f636f646518022001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512390a1563616c" .
            "6c5f747261636b696e675f656e61626c656418032001280b321a2e676f6f" .
            "676c652e70726f746f6275662e426f6f6c56616c7565123c0a1663616c6c" .
            "5f636f6e76657273696f6e5f616374696f6e18042001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512450a216361" .
            "6c6c5f636f6e76657273696f6e5f747261636b696e675f64697361626c65" .
            "6418052001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c" .
            "56616c75651285010a1f63616c6c5f636f6e76657273696f6e5f7265706f" .
            "7274696e675f737461746518062001280e325c2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e656e756d732e43616c6c436f6e766572" .
            "73696f6e5265706f7274696e675374617465456e756d2e43616c6c436f6e" .
            "76657273696f6e5265706f7274696e67537461746522450a0f43616c6c6f" .
            "7574466565644974656d12320a0c63616c6c6f75745f7465787418012001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756522aa030a104c6f636174696f6e466565644974656d12330a0d627573" .
            "696e6573735f6e616d6518012001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512340a0e616464726573735f6c69" .
            "6e655f3118022001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756512340a0e616464726573735f6c696e655f321803" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c7565122a0a046369747918042001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565122e0a0870726f76696e6365" .
            "18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512310a0b706f7374616c5f636f646518062001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756512320a" .
            "0c636f756e7472795f636f646518072001280b321c2e676f6f676c652e70" .
            "726f746f6275662e537472696e6756616c756512320a0c70686f6e655f6e" .
            "756d62657218082001280b321c2e676f6f676c652e70726f746f6275662e" .
            "537472696e6756616c75652294040a19416666696c696174654c6f636174" .
            "696f6e466565644974656d12330a0d627573696e6573735f6e616d651801" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512340a0e616464726573735f6c696e655f3118022001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651234" .
            "0a0e616464726573735f6c696e655f3218032001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565122a0a0463697479" .
            "18042001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565122e0a0870726f76696e636518052001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512310a0b706f" .
            "7374616c5f636f646518062001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512320a0c636f756e7472795f636f64" .
            "6518072001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c756512320a0c70686f6e655f6e756d62657218082001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "2d0a08636861696e5f696418092001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74363456616c756512300a0a636861696e5f6e616d65" .
            "180a2001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c75652294020a13546578744d657373616765466565644974656d" .
            "12330a0d627573696e6573735f6e616d6518012001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e537472696e6756616c756512320a0c636f75" .
            "6e7472795f636f646518022001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756512320a0c70686f6e655f6e756d6265" .
            "7218032001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c7565122a0a047465787418042001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512340a0e657874656e" .
            "73696f6e5f7465787418052001280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c756522cd030a0d50726963654665656449" .
            "74656d12560a047479706518012001280e32482e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e656e756d732e5072696365457874656e" .
            "73696f6e54797065456e756d2e5072696365457874656e73696f6e547970" .
            "6512750a0f70726963655f7175616c696669657218022001280e325c2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e656e756d732e50" .
            "72696365457874656e73696f6e50726963655175616c6966696572456e75" .
            "6d2e5072696365457874656e73696f6e50726963655175616c6966696572" .
            "123b0a15747261636b696e675f75726c5f74656d706c6174651803200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512330a0d6c616e67756167655f636f646518042001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c756512430a0f7072" .
            "6963655f6f66666572696e677318052003280b322a2e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e636f6d6d6f6e2e50726963654f66" .
            "66657212360a1066696e616c5f75726c5f73756666697818062001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756522" .
            "f0020a0a50726963654f66666572122c0a0668656164657218012001280b" .
            "321c2e676f6f676c652e70726f746f6275662e537472696e6756616c7565" .
            "12310a0b6465736372697074696f6e18022001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c756512340a057072696365" .
            "18032001280b32252e676f6f676c652e6164732e676f6f676c656164732e" .
            "76312e636f6d6d6f6e2e4d6f6e657912600a04756e697418042001280e32" .
            "522e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d" .
            "732e5072696365457874656e73696f6e5072696365556e6974456e756d2e" .
            "5072696365457874656e73696f6e5072696365556e697412300a0a66696e" .
            "616c5f75726c7318052003280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512370a1166696e616c5f6d6f62696c655f" .
            "75726c7318062003280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c756522b2080a1150726f6d6f74696f6e466565644974" .
            "656d12360a1070726f6d6f74696f6e5f74617267657418012001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651283" .
            "010a11646973636f756e745f6d6f64696669657218022001280e32682e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e656e756d732e50" .
            "726f6d6f74696f6e457874656e73696f6e446973636f756e744d6f646966" .
            "696572456e756d2e50726f6d6f74696f6e457874656e73696f6e44697363" .
            "6f756e744d6f646966696572123a0a1470726f6d6f74696f6e5f73746172" .
            "745f6461746518072001280b321c2e676f6f676c652e70726f746f627566" .
            "2e537472696e6756616c756512380a1270726f6d6f74696f6e5f656e645f" .
            "6461746518082001280b321c2e676f6f676c652e70726f746f6275662e53" .
            "7472696e6756616c7565126a0a086f63636173696f6e18092001280e3258" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d73" .
            "2e50726f6d6f74696f6e457874656e73696f6e4f63636173696f6e456e75" .
            "6d2e50726f6d6f74696f6e457874656e73696f6e4f63636173696f6e1230" .
            "0a0a66696e616c5f75726c73180a2003280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756512370a1166696e616c5f6d6f" .
            "62696c655f75726c73180b2003280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c7565123b0a15747261636b696e675f7572" .
            "6c5f74656d706c617465180c2001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c7565124e0a1575726c5f637573746f6d" .
            "5f706172616d6574657273180d2003280b322f2e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e636f6d6d6f6e2e437573746f6d506172" .
            "616d6574657212360a1066696e616c5f75726c5f737566666978180e2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c" .
            "756512330a0d6c616e67756167655f636f6465180f2001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512320a0b70" .
            "657263656e745f6f666618032001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c7565480012410a106d6f6e65795f616d6f" .
            "756e745f6f666618042001280b32252e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e636f6d6d6f6e2e4d6f6e6579480012360a0e7072" .
            "6f6d6f74696f6e5f636f646518052001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565480112430a126f7264657273" .
            "5f6f7665725f616d6f756e7418062001280b32252e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e636f6d6d6f6e2e4d6f6e6579480142" .
            "0f0a0d646973636f756e745f7479706542130a1170726f6d6f74696f6e5f" .
            "7472696767657222770a1953747275637475726564536e69707065744665" .
            "65644974656d122c0a0668656164657218012001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c7565122c0a0676616c75" .
            "657318022003280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756522cd030a10536974656c696e6b466565644974656d12" .
            "2f0a096c696e6b5f7465787418012001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c7565122b0a056c696e6531180220" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c7565122b0a056c696e653218032001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756512300a0a66696e616c5f7572" .
            "6c7318042003280b321c2e676f6f676c652e70726f746f6275662e537472" .
            "696e6756616c756512370a1166696e616c5f6d6f62696c655f75726c7318" .
            "052003280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c7565123b0a15747261636b696e675f75726c5f74656d706c617465" .
            "18062001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565124e0a1575726c5f637573746f6d5f706172616d65746572" .
            "7318072003280b322f2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e636f6d6d6f6e2e437573746f6d506172616d6574657212360a10" .
            "66696e616c5f75726c5f73756666697818082001280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756542ea010a22636f6d" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f" .
            "6e420f457874656e73696f6e7350726f746f50015a44676f6f676c652e67" .
            "6f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f" .
            "6164732f676f6f676c656164732f76312f636f6d6d6f6e3b636f6d6d6f6e" .
            "a20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e" .
            "56312e436f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c6541" .
            "64735c56315c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f" .
            "6f676c654164733a3a56313a3a436f6d6d6f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

