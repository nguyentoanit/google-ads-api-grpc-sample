<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/customer_client_link_service.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Services;

class CustomerClientLinkService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V2\Resources\CustomerClientLink::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa50c0a43676f6f676c652f6164732f676f6f676c656164732f76322f73" .
            "657276696365732f637573746f6d65725f636c69656e745f6c696e6b5f73" .
            "6572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c" .
            "656164732e76322e73657276696365731a1c676f6f676c652f6170692f61" .
            "6e6e6f746174696f6e732e70726f746f1a20676f6f676c652f70726f746f" .
            "6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f61" .
            "70692f636c69656e742e70726f746f22350a1c476574437573746f6d6572" .
            "436c69656e744c696e6b5265717565737412150a0d7265736f757263655f" .
            "6e616d651801200128092288010a1f4d7574617465437573746f6d657243" .
            "6c69656e744c696e6b5265717565737412130a0b637573746f6d65725f69" .
            "6418012001280912500a096f7065726174696f6e18022001280b323d2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76322e73657276696365" .
            "732e437573746f6d6572436c69656e744c696e6b4f7065726174696f6e22" .
            "ed010a1b437573746f6d6572436c69656e744c696e6b4f7065726174696f" .
            "6e122f0a0b7570646174655f6d61736b18042001280b321a2e676f6f676c" .
            "652e70726f746f6275662e4669656c644d61736b12470a06637265617465" .
            "18012001280b32352e676f6f676c652e6164732e676f6f676c656164732e" .
            "76322e7265736f75726365732e437573746f6d6572436c69656e744c696e" .
            "6b480012470a0675706461746518022001280b32352e676f6f676c652e61" .
            "64732e676f6f676c656164732e76322e7265736f75726365732e43757374" .
            "6f6d6572436c69656e744c696e6b4800420b0a096f7065726174696f6e22" .
            "740a204d7574617465437573746f6d6572436c69656e744c696e6b526573" .
            "706f6e736512500a06726573756c7418012001280b32402e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76322e73657276696365732e4d7574" .
            "617465437573746f6d6572436c69656e744c696e6b526573756c7422370a" .
            "1e4d7574617465437573746f6d6572436c69656e744c696e6b526573756c" .
            "7412150a0d7265736f757263655f6e616d6518012001280932f1030a1943" .
            "7573746f6d6572436c69656e744c696e6b5365727669636512cd010a1547" .
            "6574437573746f6d6572436c69656e744c696e6b123e2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e73657276696365732e47657443" .
            "7573746f6d6572436c69656e744c696e6b526571756573741a352e676f6f" .
            "676c652e6164732e676f6f676c656164732e76322e7265736f7572636573" .
            "2e437573746f6d6572436c69656e744c696e6b223d82d3e493023712352f" .
            "76322f7b7265736f757263655f6e616d653d637573746f6d6572732f2a2f" .
            "637573746f6d6572436c69656e744c696e6b732f2a7d12e6010a184d7574" .
            "617465437573746f6d6572436c69656e744c696e6b12412e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76322e73657276696365732e4d7574" .
            "617465437573746f6d6572436c69656e744c696e6b526571756573741a42" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76322e7365727669" .
            "6365732e4d7574617465437573746f6d6572436c69656e744c696e6b5265" .
            "73706f6e7365224382d3e493023d22382f76322f637573746f6d6572732f" .
            "7b637573746f6d65725f69643d2a7d2f637573746f6d6572436c69656e74" .
            "4c696e6b733a6d75746174653a012a1a1bca4118676f6f676c656164732e" .
            "676f6f676c65617069732e636f6d4285020a24636f6d2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76322e7365727669636573421e437573" .
            "746f6d6572436c69656e744c696e6b5365727669636550726f746f50015a" .
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

