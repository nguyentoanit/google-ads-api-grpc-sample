<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/account_budget.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Resources;

class AccountBudget
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\AccountBudgetProposalType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\AccountBudgetStatus::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\SpendingLimitType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\TimeType::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a91180a36676f6f676c652f6164732f676f6f676c656164732f76322f72" .
            "65736f75726365732f6163636f756e745f6275646765742e70726f746f12" .
            "21676f6f676c652e6164732e676f6f676c656164732e76322e7265736f75" .
            "726365731a39676f6f676c652f6164732f676f6f676c656164732f76322f" .
            "656e756d732f6163636f756e745f6275646765745f7374617475732e7072" .
            "6f746f1a37676f6f676c652f6164732f676f6f676c656164732f76322f65" .
            "6e756d732f7370656e64696e675f6c696d69745f747970652e70726f746f" .
            "1a2d676f6f676c652f6164732f676f6f676c656164732f76322f656e756d" .
            "732f74696d655f747970652e70726f746f1a1e676f6f676c652f70726f74" .
            "6f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170" .
            "692f616e6e6f746174696f6e732e70726f746f22c8130a0d4163636f756e" .
            "7442756467657412150a0d7265736f757263655f6e616d65180120012809" .
            "12270a02696418022001280b321b2e676f6f676c652e70726f746f627566" .
            "2e496e74363456616c756512330a0d62696c6c696e675f73657475701803" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c7565125a0a0673746174757318042001280e324a2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e656e756d732e4163636f756e74" .
            "427564676574537461747573456e756d2e4163636f756e74427564676574" .
            "537461747573122a0a046e616d6518052001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c7565123e0a1870726f706f73" .
            "65645f73746172745f646174655f74696d6518062001280b321c2e676f6f" .
            "676c652e70726f746f6275662e537472696e6756616c7565123e0a186170" .
            "70726f7665645f73746172745f646174655f74696d6518072001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c7565123d" .
            "0a18746f74616c5f61646a7573746d656e74735f6d6963726f7318122001" .
            "280b321b2e676f6f676c652e70726f746f6275662e496e74363456616c75" .
            "6512390a14616d6f756e745f7365727665645f6d6963726f731813200128" .
            "0b321b2e676f6f676c652e70726f746f6275662e496e74363456616c7565" .
            "123b0a1570757263686173655f6f726465725f6e756d6265721814200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "65122b0a056e6f74657318152001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c756512670a1070656e64696e675f7072" .
            "6f706f73616c18162001280b324d2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e7265736f75726365732e4163636f756e7442756467" .
            "65742e50656e64696e674163636f756e7442756467657450726f706f7361" .
            "6c123e0a1670726f706f7365645f656e645f646174655f74696d65180820" .
            "01280b321c2e676f6f676c652e70726f746f6275662e537472696e675661" .
            "6c7565480012560a1670726f706f7365645f656e645f74696d655f747970" .
            "6518092001280e32342e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e656e756d732e54696d6554797065456e756d2e54696d65547970" .
            "654800123e0a16617070726f7665645f656e645f646174655f74696d6518" .
            "0a2001280b321c2e676f6f676c652e70726f746f6275662e537472696e67" .
            "56616c7565480112560a16617070726f7665645f656e645f74696d655f74" .
            "797065180b2001280e32342e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e656e756d732e54696d6554797065456e756d2e54696d6554" .
            "797065480112450a1e70726f706f7365645f7370656e64696e675f6c696d" .
            "69745f6d6963726f73180c2001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c75654802126e0a1c70726f706f7365645f73" .
            "70656e64696e675f6c696d69745f74797065180d2001280e32462e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e656e756d732e537065" .
            "6e64696e674c696d697454797065456e756d2e5370656e64696e674c696d" .
            "697454797065480212450a1e617070726f7665645f7370656e64696e675f" .
            "6c696d69745f6d6963726f73180e2001280b321b2e676f6f676c652e7072" .
            "6f746f6275662e496e74363456616c75654803126e0a1c617070726f7665" .
            "645f7370656e64696e675f6c696d69745f74797065180f2001280e32462e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e" .
            "5370656e64696e674c696d697454797065456e756d2e5370656e64696e67" .
            "4c696d697454797065480312450a1e61646a75737465645f7370656e6469" .
            "6e675f6c696d69745f6d6963726f7318102001280b321b2e676f6f676c65" .
            "2e70726f746f6275662e496e74363456616c75654804126e0a1c61646a75" .
            "737465645f7370656e64696e675f6c696d69745f7479706518112001280e" .
            "32462e676f6f676c652e6164732e676f6f676c656164732e76322e656e75" .
            "6d732e5370656e64696e674c696d697454797065456e756d2e5370656e64" .
            "696e674c696d69745479706548041a9c060a1c50656e64696e674163636f" .
            "756e7442756467657450726f706f73616c123d0a176163636f756e745f62" .
            "75646765745f70726f706f73616c18012001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c7565126d0a0d70726f706f73" .
            "616c5f7479706518022001280e32562e676f6f676c652e6164732e676f6f" .
            "676c656164732e76322e656e756d732e4163636f756e7442756467657450" .
            "726f706f73616c54797065456e756d2e4163636f756e7442756467657450" .
            "726f706f73616c54797065122a0a046e616d6518032001280b321c2e676f" .
            "6f676c652e70726f746f6275662e537472696e6756616c756512350a0f73" .
            "746172745f646174655f74696d6518042001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c7565123b0a15707572636861" .
            "73655f6f726465725f6e756d62657218092001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c7565122b0a056e6f746573" .
            "180a2001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c756512380a126372656174696f6e5f646174655f74696d65180b" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512350a0d656e645f646174655f74696d6518052001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c7565480012" .
            "4d0a0d656e645f74696d655f7479706518062001280e32342e676f6f676c" .
            "652e6164732e676f6f676c656164732e76322e656e756d732e54696d6554" .
            "797065456e756d2e54696d65547970654800123c0a157370656e64696e67" .
            "5f6c696d69745f6d6963726f7318072001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c7565480112650a137370656e6469" .
            "6e675f6c696d69745f7479706518082001280e32462e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e656e756d732e5370656e64696e67" .
            "4c696d697454797065456e756d2e5370656e64696e674c696d6974547970" .
            "654801420a0a08656e645f74696d6542100a0e7370656e64696e675f6c69" .
            "6d697442130a1170726f706f7365645f656e645f74696d6542130a116170" .
            "70726f7665645f656e645f74696d6542190a1770726f706f7365645f7370" .
            "656e64696e675f6c696d697442190a17617070726f7665645f7370656e64" .
            "696e675f6c696d697442190a1761646a75737465645f7370656e64696e67" .
            "5f6c696d697442ff010a25636f6d2e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76322e7265736f757263657342124163636f756e74427564" .
            "67657450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f" .
            "67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c65" .
            "6164732f76322f7265736f75726365733b7265736f7572636573a2020347" .
            "4141aa0221476f6f676c652e4164732e476f6f676c654164732e56322e52" .
            "65736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164" .
            "735c56325c5265736f7572636573ea0225476f6f676c653a3a4164733a3a" .
            "476f6f676c654164733a3a56323a3a5265736f7572636573620670726f74" .
            "6f33"
        ), true);

        static::$is_initialized = true;
    }
}
