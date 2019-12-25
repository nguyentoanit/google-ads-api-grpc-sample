<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/feed.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Resources;

class Feed
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\AffiliateLocationFeedRelationshipType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\FeedAttributeType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\FeedOrigin::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V2\Enums\FeedStatus::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abe130a2c676f6f676c652f6164732f676f6f676c656164732f76322f72" .
            "65736f75726365732f666565642e70726f746f1221676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e7265736f75726365731a37676f6f67" .
            "6c652f6164732f676f6f676c656164732f76322f656e756d732f66656564" .
            "5f6174747269627574655f747970652e70726f746f1a2f676f6f676c652f" .
            "6164732f676f6f676c656164732f76322f656e756d732f666565645f6f72" .
            "6967696e2e70726f746f1a2f676f6f676c652f6164732f676f6f676c6561" .
            "64732f76322f656e756d732f666565645f7374617475732e70726f746f1a" .
            "1e676f6f676c652f70726f746f6275662f77726170706572732e70726f74" .
            "6f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f74" .
            "6f22ba0b0a044665656412150a0d7265736f757263655f6e616d65180120" .
            "01280912270a02696418022001280b321b2e676f6f676c652e70726f746f" .
            "6275662e496e74363456616c7565122a0a046e616d6518032001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c75651244" .
            "0a0a6174747269627574657318042003280b32302e676f6f676c652e6164" .
            "732e676f6f676c656164732e76322e7265736f75726365732e4665656441" .
            "747472696275746512570a146174747269627574655f6f7065726174696f" .
            "6e7318092003280b32392e676f6f676c652e6164732e676f6f676c656164" .
            "732e76322e7265736f75726365732e466565644174747269627574654f70" .
            "65726174696f6e12480a066f726967696e18052001280e32382e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e656e756d732e46656564" .
            "4f726967696e456e756d2e466565644f726967696e12480a067374617475" .
            "7318082001280e32382e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e656e756d732e46656564537461747573456e756d2e4665656453" .
            "746174757312630a19706c616365735f6c6f636174696f6e5f666565645f" .
            "6461746118062001280b323e2e676f6f676c652e6164732e676f6f676c65" .
            "6164732e76322e7265736f75726365732e466565642e506c616365734c6f" .
            "636174696f6e4665656444617461480012690a1c616666696c696174655f" .
            "6c6f636174696f6e5f666565645f6461746118072001280b32412e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e7265736f7572636573" .
            "2e466565642e416666696c696174654c6f636174696f6e46656564446174" .
            "6148001ac9040a16506c616365734c6f636174696f6e4665656444617461" .
            "125c0a0a6f617574685f696e666f18012001280b32482e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e7265736f75726365732e466565" .
            "642e506c616365734c6f636174696f6e46656564446174612e4f41757468" .
            "496e666f12330a0d656d61696c5f6164647265737318022001280b321c2e" .
            "676f6f676c652e70726f746f6275662e537472696e6756616c756512390a" .
            "13627573696e6573735f6163636f756e745f6964180a2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c7565123a0a14" .
            "627573696e6573735f6e616d655f66696c74657218042001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c756512360a10" .
            "63617465676f72795f66696c7465727318052003280b321c2e676f6f676c" .
            "652e70726f746f6275662e537472696e6756616c756512330a0d6c616265" .
            "6c5f66696c7465727318062003280b321c2e676f6f676c652e70726f746f" .
            "6275662e537472696e6756616c75651ab7010a094f41757468496e666f12" .
            "310a0b687474705f6d6574686f6418012001280b321c2e676f6f676c652e" .
            "70726f746f6275662e537472696e6756616c756512360a10687474705f72" .
            "6571756573745f75726c18022001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e537472696e6756616c7565123f0a19687474705f617574686f" .
            "72697a6174696f6e5f68656164657218032001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e537472696e6756616c75651ad7010a1941666669" .
            "6c696174654c6f636174696f6e4665656444617461122e0a09636861696e" .
            "5f69647318012003280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c75651289010a1172656c6174696f6e736869705f747970" .
            "6518022001280e326e2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76322e656e756d732e416666696c696174654c6f636174696f6e466565" .
            "6452656c6174696f6e7368697054797065456e756d2e416666696c696174" .
            "654c6f636174696f6e4665656452656c6174696f6e736869705479706542" .
            "1d0a1b73797374656d5f666565645f67656e65726174696f6e5f64617461" .
            "22ee010a0d4665656441747472696275746512270a02696418012001280b" .
            "321b2e676f6f676c652e70726f746f6275662e496e74363456616c756512" .
            "2a0a046e616d6518022001280b321c2e676f6f676c652e70726f746f6275" .
            "662e537472696e6756616c756512540a047479706518032001280e32462e" .
            "676f6f676c652e6164732e676f6f676c656164732e76322e656e756d732e" .
            "4665656441747472696275746554797065456e756d2e4665656441747472" .
            "69627574655479706512320a0e69735f706172745f6f665f6b6579180420" .
            "01280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75" .
            "6522e2010a16466565644174747269627574654f7065726174696f6e1254" .
            "0a086f70657261746f7218012001280e32422e676f6f676c652e6164732e" .
            "676f6f676c656164732e76322e7265736f75726365732e46656564417474" .
            "7269627574654f7065726174696f6e2e4f70657261746f72123f0a057661" .
            "6c756518022001280b32302e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76322e7265736f75726365732e4665656441747472696275746522" .
            "310a084f70657261746f72120f0a0b554e5350454349464945441000120b" .
            "0a07554e4b4e4f574e100112070a03414444100242f6010a25636f6d2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e7265736f757263" .
            "657342094665656450726f746f50015a4a676f6f676c652e676f6c616e67" .
            "2e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f67" .
            "6f6f676c656164732f76322f7265736f75726365733b7265736f75726365" .
            "73a20203474141aa0221476f6f676c652e4164732e476f6f676c65416473" .
            "2e56322e5265736f7572636573ca0221476f6f676c655c4164735c476f6f" .
            "676c654164735c56325c5265736f7572636573ea0225476f6f676c653a3a" .
            "4164733a3a476f6f676c654164733a3a56323a3a5265736f757263657362" .
            "0670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

