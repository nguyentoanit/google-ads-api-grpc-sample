<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/policy.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Common;

class Policy
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PolicyTopicEntryType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PolicyTopicEvidenceDestinationMismatchUrlType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\PolicyTopicEvidenceDestinationNotWorkingDevice::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab8190a2b676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f706f6c6963792e70726f746f121e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e636f6d6d6f6e1a57676f6f676c652f61" .
            "64732f676f6f676c656164732f76312f656e756d732f706f6c6963795f74" .
            "6f7069635f65766964656e63655f64657374696e6174696f6e5f6d69736d" .
            "617463685f75726c5f747970652e70726f746f1a58676f6f676c652f6164" .
            "732f676f6f676c656164732f76312f656e756d732f706f6c6963795f746f" .
            "7069635f65766964656e63655f64657374696e6174696f6e5f6e6f745f77" .
            "6f726b696e675f6465766963652e70726f746f1a1c676f6f676c652f6170" .
            "692f616e6e6f746174696f6e732e70726f746f1a1e676f6f676c652f7072" .
            "6f746f6275662f77726170706572732e70726f746f227d0a12506f6c6963" .
            "7956696f6c6174696f6e4b657912310a0b706f6c6963795f6e616d651801" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756" .
            "616c756512340a0e76696f6c6174696e675f7465787418022001280b321c" .
            "2e676f6f676c652e70726f746f6275662e537472696e6756616c756522b4" .
            "010a19506f6c69637956616c69646174696f6e506172616d65746572123d" .
            "0a1769676e6f7261626c655f706f6c6963795f746f706963731801200328" .
            "0b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75" .
            "6512580a1c6578656d70745f706f6c6963795f76696f6c6174696f6e5f6b" .
            "65797318022003280b32322e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e636f6d6d6f6e2e506f6c69637956696f6c6174696f6e4b65" .
            "7922af020a10506f6c696379546f706963456e747279122b0a05746f7069" .
            "6318012001280b321c2e676f6f676c652e70726f746f6275662e53747269" .
            "6e6756616c7565125a0a047479706518022001280e324c2e676f6f676c65" .
            "2e6164732e676f6f676c656164732e76312e656e756d732e506f6c696379" .
            "546f706963456e74727954797065456e756d2e506f6c696379546f706963" .
            "456e7472795479706512460a0965766964656e63657318032003280b3233" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f" .
            "6e2e506f6c696379546f70696345766964656e6365124a0a0b636f6e7374" .
            "7261696e747318042003280b32352e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e636f6d6d6f6e2e506f6c696379546f706963436f6e" .
            "73747261696e7422880a0a13506f6c696379546f70696345766964656e63" .
            "6512300a09687474705f636f646518022001280b321b2e676f6f676c652e" .
            "70726f746f6275662e496e74333256616c7565480012570a0c7765627369" .
            "74655f6c69737418032001280b323f2e676f6f676c652e6164732e676f6f" .
            "676c656164732e76312e636f6d6d6f6e2e506f6c696379546f7069634576" .
            "6964656e63652e576562736974654c697374480012510a09746578745f6c" .
            "69737418042001280b323c2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e636f6d6d6f6e2e506f6c696379546f70696345766964656e" .
            "63652e546578744c697374480012350a0d6c616e67756167655f636f6465" .
            "18052001280b321c2e676f6f676c652e70726f746f6275662e537472696e" .
            "6756616c7565480012680a1564657374696e6174696f6e5f746578745f6c" .
            "69737418062001280b32472e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e636f6d6d6f6e2e506f6c696379546f70696345766964656e" .
            "63652e44657374696e6174696f6e546578744c697374480012670a146465" .
            "7374696e6174696f6e5f6d69736d6174636818072001280b32472e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e506f" .
            "6c696379546f70696345766964656e63652e44657374696e6174696f6e4d" .
            "69736d617463684800126c0a1764657374696e6174696f6e5f6e6f745f77" .
            "6f726b696e6718082001280b32492e676f6f676c652e6164732e676f6f67" .
            "6c656164732e76312e636f6d6d6f6e2e506f6c696379546f706963457669" .
            "64656e63652e44657374696e6174696f6e4e6f74576f726b696e6748001a" .
            "370a08546578744c697374122b0a05746578747318012003280b321c2e67" .
            "6f6f676c652e70726f746f6275662e537472696e6756616c75651a3d0a0b" .
            "576562736974654c697374122e0a08776562736974657318012003280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c75651a" .
            "4e0a1344657374696e6174696f6e546578744c69737412370a1164657374" .
            "696e6174696f6e5f746578747318012003280b321c2e676f6f676c652e70" .
            "726f746f6275662e537472696e6756616c75651aa9010a1344657374696e" .
            "6174696f6e4d69736d617463681291010a0975726c5f7479706573180120" .
            "03280e327e2e676f6f676c652e6164732e676f6f676c656164732e76312e" .
            "656e756d732e506f6c696379546f70696345766964656e63654465737469" .
            "6e6174696f6e4d69736d6174636855726c54797065456e756d2e506f6c69" .
            "6379546f70696345766964656e636544657374696e6174696f6e4d69736d" .
            "6174636855726c547970651a9d020a1544657374696e6174696f6e4e6f74" .
            "576f726b696e6712320a0c657870616e6465645f75726c18032001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "91010a0664657669636518042001280e3280012e676f6f676c652e616473" .
            "2e676f6f676c656164732e76312e656e756d732e506f6c696379546f7069" .
            "6345766964656e636544657374696e6174696f6e4e6f74576f726b696e67" .
            "446576696365456e756d2e506f6c696379546f70696345766964656e6365" .
            "44657374696e6174696f6e4e6f74576f726b696e67446576696365123c0a" .
            "166c6173745f636865636b65645f646174655f74696d6518052001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756542" .
            "070a0576616c75652293060a15506f6c696379546f706963436f6e737472" .
            "61696e74126e0a17636f756e7472795f636f6e73747261696e745f6c6973" .
            "7418012001280b324b2e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e636f6d6d6f6e2e506f6c696379546f706963436f6e7374726169" .
            "6e742e436f756e747279436f6e73747261696e744c697374480012670a13" .
            "726573656c6c65725f636f6e73747261696e7418022001280b32482e676f" .
            "6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e50" .
            "6f6c696379546f706963436f6e73747261696e742e526573656c6c657243" .
            "6f6e73747261696e744800127a0a2363657274696669636174655f6d6973" .
            "73696e675f696e5f636f756e7472795f6c69737418032001280b324b2e67" .
            "6f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e2e" .
            "506f6c696379546f706963436f6e73747261696e742e436f756e74727943" .
            "6f6e73747261696e744c69737448001282010a2b63657274696669636174" .
            "655f646f6d61696e5f6d69736d617463685f696e5f636f756e7472795f6c" .
            "69737418042001280b324b2e676f6f676c652e6164732e676f6f676c6561" .
            "64732e76312e636f6d6d6f6e2e506f6c696379546f706963436f6e737472" .
            "61696e742e436f756e747279436f6e73747261696e744c69737448001ab2" .
            "010a15436f756e747279436f6e73747261696e744c697374123d0a18746f" .
            "74616c5f74617267657465645f636f756e747269657318012001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74333256616c7565125a0a" .
            "09636f756e747269657318022003280b32472e676f6f676c652e6164732e" .
            "676f6f676c656164732e76312e636f6d6d6f6e2e506f6c696379546f7069" .
            "63436f6e73747261696e742e436f756e747279436f6e73747261696e741a" .
            "140a12526573656c6c6572436f6e73747261696e741a4c0a11436f756e74" .
            "7279436f6e73747261696e7412370a11636f756e7472795f637269746572" .
            "696f6e18012001280b321c2e676f6f676c652e70726f746f6275662e5374" .
            "72696e6756616c756542070a0576616c756542e6010a22636f6d2e676f6f" .
            "676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e420b50" .
            "6f6c69637950726f746f50015a44676f6f676c652e676f6c616e672e6f72" .
            "672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f67" .
            "6c656164732f76312f636f6d6d6f6e3b636f6d6d6f6ea20203474141aa02" .
            "1e476f6f676c652e4164732e476f6f676c654164732e56312e436f6d6d6f" .
            "6eca021e476f6f676c655c4164735c476f6f676c654164735c56315c436f" .
            "6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c654164733a" .
            "3a56313a3a436f6d6d6f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

