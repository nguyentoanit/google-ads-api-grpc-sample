<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/metrics.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Common;

class Metrics
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\InteractionEventType::initOnce();
        \GPBMetadata\Google\Ads\Googleads\V1\Enums\QualityScoreBucket::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aee3c0a2c676f6f676c652f6164732f676f6f676c656164732f76312f63" .
            "6f6d6d6f6e2f6d6574726963732e70726f746f121e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e636f6d6d6f6e1a38676f6f676c652f" .
            "6164732f676f6f676c656164732f76312f656e756d732f7175616c697479" .
            "5f73636f72655f6275636b65742e70726f746f1a1c676f6f676c652f6170" .
            "692f616e6e6f746174696f6e732e70726f746f1a1e676f6f676c652f7072" .
            "6f746f6275662f77726170706572732e70726f746f22b3390a074d657472" .
            "69637312480a226162736f6c7574655f746f705f696d7072657373696f6e" .
            "5f70657263656e74616765185f2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512350a0f6163746976655f7669" .
            "65775f63706d18012001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512350a0f6163746976655f766965775f6374" .
            "72184f2001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c7565123c0a176163746976655f766965775f696d7072657373" .
            "696f6e7318022001280b321b2e676f6f676c652e70726f746f6275662e49" .
            "6e74363456616c7565123f0a196163746976655f766965775f6d65617375" .
            "726162696c69747918602001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512470a226163746976655f766965775f" .
            "6d656173757261626c655f636f73745f6d6963726f7318032001280b321b" .
            "2e676f6f676c652e70726f746f6275662e496e74363456616c756512470a" .
            "226163746976655f766965775f6d656173757261626c655f696d70726573" .
            "73696f6e7318042001280b321b2e676f6f676c652e70726f746f6275662e" .
            "496e74363456616c7565123d0a176163746976655f766965775f76696577" .
            "6162696c69747918612001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c7565124c0a26616c6c5f636f6e76657273696f" .
            "6e735f66726f6d5f696e746572616374696f6e735f726174651841200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "65123b0a15616c6c5f636f6e76657273696f6e735f76616c756518422001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512350a0f616c6c5f636f6e76657273696f6e7318072001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c756512440a" .
            "1e616c6c5f636f6e76657273696f6e735f76616c75655f7065725f636f73" .
            "74183e2001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c756512480a22616c6c5f636f6e76657273696f6e735f66726f" .
            "6d5f636c69636b5f746f5f63616c6c18762001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e446f75626c6556616c756512450a1f616c6c5f63" .
            "6f6e76657273696f6e735f66726f6d5f646972656374696f6e7318772001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "7565125d0a37616c6c5f636f6e76657273696f6e735f66726f6d5f696e74" .
            "6572616374696f6e735f76616c75655f7065725f696e746572616374696f" .
            "6e18432001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c7565123f0a19616c6c5f636f6e76657273696f6e735f66726f" .
            "6d5f6d656e7518782001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512400a1a616c6c5f636f6e76657273696f6e" .
            "735f66726f6d5f6f7264657218792001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e446f75626c6556616c7565124b0a25616c6c5f636f6e76" .
            "657273696f6e735f66726f6d5f6f746865725f656e676167656d656e7418" .
            "7a2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c756512460a20616c6c5f636f6e76657273696f6e735f66726f6d5f" .
            "73746f72655f7669736974187b2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512480a22616c6c5f636f6e7665" .
            "7273696f6e735f66726f6d5f73746f72655f77656273697465187c200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "6512320a0c617665726167655f636f737418082001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c756512310a0b617665" .
            "726167655f63706318092001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512310a0b617665726167655f63706518" .
            "622001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c756512310a0b617665726167655f63706d180a2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756512310a0b" .
            "617665726167655f637076180b2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512370a11617665726167655f66" .
            "72657175656e6379180c2001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512380a12617665726167655f70616765" .
            "5f766965777318632001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512360a10617665726167655f706f73697469" .
            "6f6e180d2001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c7565123a0a14617665726167655f74696d655f6f6e5f7369" .
            "746518542001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c7565123f0a1962656e63686d61726b5f617665726167655f" .
            "6d61785f637063180e2001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756512330a0d62656e63686d61726b5f637472" .
            "184d2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c" .
            "6556616c756512310a0b626f756e63655f72617465180f2001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c7565122b0a" .
            "06636c69636b7318132001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74363456616c756512340a0f636f6d62696e65645f636c69636b" .
            "7318732001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565123f0a19636f6d62696e65645f636c69636b735f7065725f" .
            "717565727918742001280b321c2e676f6f676c652e70726f746f6275662e" .
            "446f75626c6556616c756512350a10636f6d62696e65645f717565726965" .
            "7318752001280b321b2e676f6f676c652e70726f746f6275662e496e7436" .
            "3456616c7565124a0a24636f6e74656e745f6275646765745f6c6f73745f" .
            "696d7072657373696f6e5f736861726518142001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c7565123e0a18636f6e74" .
            "656e745f696d7072657373696f6e5f736861726518152001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756512500a2a" .
            "636f6e76657273696f6e5f6c6173745f72656365697665645f7265717565" .
            "73745f646174655f74696d6518492001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e537472696e6756616c756512450a1f636f6e7665727369" .
            "6f6e5f6c6173745f636f6e76657273696f6e5f64617465184a2001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e537472696e6756616c756512" .
            "480a22636f6e74656e745f72616e6b5f6c6f73745f696d7072657373696f" .
            "6e5f736861726518162001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756512480a22636f6e76657273696f6e735f66" .
            "726f6d5f696e746572616374696f6e735f7261746518452001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c756512370a" .
            "11636f6e76657273696f6e735f76616c756518462001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512400a1a636f" .
            "6e76657273696f6e735f76616c75655f7065725f636f737418472001280b" .
            "321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c7565" .
            "12590a33636f6e76657273696f6e735f66726f6d5f696e74657261637469" .
            "6f6e735f76616c75655f7065725f696e746572616374696f6e1848200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "6512310a0b636f6e76657273696f6e7318192001280b321c2e676f6f676c" .
            "652e70726f746f6275662e446f75626c6556616c756512300a0b636f7374" .
            "5f6d6963726f73181a2001280b321b2e676f6f676c652e70726f746f6275" .
            "662e496e74363456616c7565123e0a18636f73745f7065725f616c6c5f63" .
            "6f6e76657273696f6e7318442001280b321c2e676f6f676c652e70726f74" .
            "6f6275662e446f75626c6556616c756512390a13636f73745f7065725f63" .
            "6f6e76657273696f6e181c2001280b321c2e676f6f676c652e70726f746f" .
            "6275662e446f75626c6556616c756512520a2c636f73745f7065725f6375" .
            "7272656e745f6d6f64656c5f617474726962757465645f636f6e76657273" .
            "696f6e186a2001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c7565123e0a1863726f73735f6465766963655f636f6e76" .
            "657273696f6e73181d2001280b321c2e676f6f676c652e70726f746f6275" .
            "662e446f75626c6556616c756512290a03637472181e2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c7565124a0a24" .
            "63757272656e745f6d6f64656c5f617474726962757465645f636f6e7665" .
            "7273696f6e7318652001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512610a3b63757272656e745f6d6f64656c5f" .
            "617474726962757465645f636f6e76657273696f6e735f66726f6d5f696e" .
            "746572616374696f6e735f7261746518662001280b321c2e676f6f676c65" .
            "2e70726f746f6275662e446f75626c6556616c756512720a4c6375727265" .
            "6e745f6d6f64656c5f617474726962757465645f636f6e76657273696f6e" .
            "735f66726f6d5f696e746572616374696f6e735f76616c75655f7065725f" .
            "696e746572616374696f6e18672001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512500a2a63757272656e745f6d" .
            "6f64656c5f617474726962757465645f636f6e76657273696f6e735f7661" .
            "6c756518682001280b321c2e676f6f676c652e70726f746f6275662e446f" .
            "75626c6556616c756512590a3363757272656e745f6d6f64656c5f617474" .
            "726962757465645f636f6e76657273696f6e735f76616c75655f7065725f" .
            "636f737418692001280b321c2e676f6f676c652e70726f746f6275662e44" .
            "6f75626c6556616c756512350a0f656e676167656d656e745f7261746518" .
            "1f2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c65" .
            "56616c756512300a0b656e676167656d656e747318202001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512450a1f68" .
            "6f74656c5f617665726167655f6c6561645f76616c75655f6d6963726f73" .
            "184b2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c" .
            "6556616c756512730a21686973746f726963616c5f63726561746976655f" .
            "7175616c6974795f73636f726518502001280e32482e676f6f676c652e61" .
            "64732e676f6f676c656164732e76312e656e756d732e5175616c69747953" .
            "636f72654275636b6574456e756d2e5175616c69747953636f7265427563" .
            "6b657412770a25686973746f726963616c5f6c616e64696e675f70616765" .
            "5f7175616c6974795f73636f726518512001280e32482e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e656e756d732e5175616c697479" .
            "53636f72654275636b6574456e756d2e5175616c69747953636f72654275" .
            "636b6574123d0a18686973746f726963616c5f7175616c6974795f73636f" .
            "726518522001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c756512710a1f686973746f726963616c5f7365617263685f70" .
            "72656469637465645f63747218532001280e32482e676f6f676c652e6164" .
            "732e676f6f676c656164732e76312e656e756d732e5175616c6974795363" .
            "6f72654275636b6574456e756d2e5175616c69747953636f72654275636b" .
            "657412330a0e676d61696c5f666f72776172647318552001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c756512300a0b67" .
            "6d61696c5f736176657318562001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c7565123b0a16676d61696c5f7365636f6e" .
            "646172795f636c69636b7318572001280b321b2e676f6f676c652e70726f" .
            "746f6275662e496e74363456616c756512350a10696d7072657373696f6e" .
            "5f726561636818242001280b321b2e676f6f676c652e70726f746f627566" .
            "2e496e74363456616c756512410a1c696d7072657373696f6e735f66726f" .
            "6d5f73746f72655f7265616368187d2001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c756512300a0b696d707265737369" .
            "6f6e7318252001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c756512360a10696e746572616374696f6e5f726174651826" .
            "2001280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556" .
            "616c756512310a0c696e746572616374696f6e7318272001280b321b2e67" .
            "6f6f676c652e70726f746f6275662e496e74363456616c7565126d0a1769" .
            "6e746572616374696f6e5f6576656e745f747970657318642003280e324c" .
            "2e676f6f676c652e6164732e676f6f676c656164732e76312e656e756d73" .
            "2e496e746572616374696f6e4576656e7454797065456e756d2e496e7465" .
            "72616374696f6e4576656e745479706512380a12696e76616c69645f636c" .
            "69636b5f7261746518282001280b321c2e676f6f676c652e70726f746f62" .
            "75662e446f75626c6556616c756512330a0e696e76616c69645f636c6963" .
            "6b7318292001280b321b2e676f6f676c652e70726f746f6275662e496e74" .
            "363456616c756512470a216d6f62696c655f667269656e646c795f636c69" .
            "636b735f70657263656e74616765186d2001280b321c2e676f6f676c652e" .
            "70726f746f6275662e446f75626c6556616c756512330a0e6f7267616e69" .
            "635f636c69636b73186e2001280b321b2e676f6f676c652e70726f746f62" .
            "75662e496e74363456616c7565123e0a186f7267616e69635f636c69636b" .
            "735f7065725f7175657279186f2001280b321c2e676f6f676c652e70726f" .
            "746f6275662e446f75626c6556616c756512380a136f7267616e69635f69" .
            "6d7072657373696f6e7318702001280b321b2e676f6f676c652e70726f74" .
            "6f6275662e496e74363456616c756512430a1d6f7267616e69635f696d70" .
            "72657373696f6e735f7065725f717565727918712001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512340a0f6f72" .
            "67616e69635f7175657269657318722001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c7565123a0a1470657263656e745f" .
            "6e65775f76697369746f7273182a2001280b321c2e676f6f676c652e7072" .
            "6f746f6275662e446f75626c6556616c756512300a0b70686f6e655f6361" .
            "6c6c73182b2001280b321b2e676f6f676c652e70726f746f6275662e496e" .
            "74363456616c756512360a1170686f6e655f696d7072657373696f6e7318" .
            "2c2001280b321b2e676f6f676c652e70726f746f6275662e496e74363456" .
            "616c756512380a1270686f6e655f7468726f7567685f72617465182d2001" .
            "280b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c" .
            "756512320a0c72656c61746976655f637472182e2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c7565124a0a247365" .
            "617263685f6162736f6c7574655f746f705f696d7072657373696f6e5f73" .
            "68617265184e2001280b321c2e676f6f676c652e70726f746f6275662e44" .
            "6f75626c6556616c756512560a307365617263685f6275646765745f6c6f" .
            "73745f6162736f6c7574655f746f705f696d7072657373696f6e5f736861" .
            "726518582001280b321c2e676f6f676c652e70726f746f6275662e446f75" .
            "626c6556616c756512490a237365617263685f6275646765745f6c6f7374" .
            "5f696d7072657373696f6e5f7368617265182f2001280b321c2e676f6f67" .
            "6c652e70726f746f6275662e446f75626c6556616c7565124d0a27736561" .
            "7263685f6275646765745f6c6f73745f746f705f696d7072657373696f6e" .
            "5f736861726518592001280b321c2e676f6f676c652e70726f746f627566" .
            "2e446f75626c6556616c756512380a127365617263685f636c69636b5f73" .
            "6861726518302001280b321c2e676f6f676c652e70726f746f6275662e44" .
            "6f75626c6556616c756512490a237365617263685f65786163745f6d6174" .
            "63685f696d7072657373696f6e5f736861726518312001280b321c2e676f" .
            "6f676c652e70726f746f6275662e446f75626c6556616c7565123d0a1773" .
            "65617263685f696d7072657373696f6e5f736861726518322001280b321c" .
            "2e676f6f676c652e70726f746f6275662e446f75626c6556616c75651254" .
            "0a2e7365617263685f72616e6b5f6c6f73745f6162736f6c7574655f746f" .
            "705f696d7072657373696f6e5f7368617265185a2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512470a217365" .
            "617263685f72616e6b5f6c6f73745f696d7072657373696f6e5f73686172" .
            "6518332001280b321c2e676f6f676c652e70726f746f6275662e446f7562" .
            "6c6556616c7565124b0a257365617263685f72616e6b5f6c6f73745f746f" .
            "705f696d7072657373696f6e5f7368617265185b2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c756512410a1b7365" .
            "617263685f746f705f696d7072657373696f6e5f7368617265185c200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "6512300a0b73706565645f73636f7265186b2001280b321b2e676f6f676c" .
            "652e70726f746f6275662e496e74363456616c7565123f0a19746f705f69" .
            "6d7072657373696f6e5f70657263656e74616765185d2001280b321c2e67" .
            "6f6f676c652e70726f746f6275662e446f75626c6556616c756512560a30" .
            "76616c69645f616363656c6572617465645f6d6f62696c655f7061676573" .
            "5f636c69636b735f70657263656e74616765186c2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c7565123f0a197661" .
            "6c75655f7065725f616c6c5f636f6e76657273696f6e7318342001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512" .
            "3a0a1476616c75655f7065725f636f6e76657273696f6e18352001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512" .
            "530a2d76616c75655f7065725f63757272656e745f6d6f64656c5f617474" .
            "726962757465645f636f6e76657273696f6e185e2001280b321c2e676f6f" .
            "676c652e70726f746f6275662e446f75626c6556616c7565123d0a177669" .
            "64656f5f7175617274696c655f3130305f7261746518362001280b321c2e" .
            "676f6f676c652e70726f746f6275662e446f75626c6556616c7565123c0a" .
            "16766964656f5f7175617274696c655f32355f7261746518372001280b32" .
            "1c2e676f6f676c652e70726f746f6275662e446f75626c6556616c756512" .
            "3c0a16766964656f5f7175617274696c655f35305f726174651838200128" .
            "0b321c2e676f6f676c652e70726f746f6275662e446f75626c6556616c75" .
            "65123c0a16766964656f5f7175617274696c655f37355f72617465183920" .
            "01280b321c2e676f6f676c652e70726f746f6275662e446f75626c655661" .
            "6c756512350a0f766964656f5f766965775f72617465183a2001280b321c" .
            "2e676f6f676c652e70726f746f6275662e446f75626c6556616c75651230" .
            "0a0b766964656f5f7669657773183b2001280b321b2e676f6f676c652e70" .
            "726f746f6275662e496e74363456616c7565123d0a18766965775f746872" .
            "6f7567685f636f6e76657273696f6e73183c2001280b321b2e676f6f676c" .
            "652e70726f746f6275662e496e74363456616c756542e7010a22636f6d2e" .
            "676f6f676c652e6164732e676f6f676c656164732e76312e636f6d6d6f6e" .
            "420c4d65747269637350726f746f50015a44676f6f676c652e676f6c616e" .
            "672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f" .
            "676f6f676c656164732f76312f636f6d6d6f6e3b636f6d6d6f6ea2020347" .
            "4141aa021e476f6f676c652e4164732e476f6f676c654164732e56312e43" .
            "6f6d6d6f6eca021e476f6f676c655c4164735c476f6f676c654164735c56" .
            "315c436f6d6d6f6eea0222476f6f676c653a3a4164733a3a476f6f676c65" .
            "4164733a3a56313a3a436f6d6d6f6e620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

