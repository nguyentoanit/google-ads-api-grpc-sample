<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/ad_group_criterion_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Errors;

class AdGroupCriterionError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab90f0a3d676f6f676c652f6164732f676f6f676c656164732f76312f65" .
            "72726f72732f61645f67726f75705f637269746572696f6e5f6572726f72" .
            "2e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76" .
            "312e6572726f727322d70c0a19416447726f7570437269746572696f6e45" .
            "72726f72456e756d22b90c0a15416447726f7570437269746572696f6e45" .
            "72726f72120f0a0b554e5350454349464945441000120b0a07554e4b4e4f" .
            "574e1001122b0a2741445f47524f55505f435249544552494f4e5f4c4142" .
            "454c5f444f45535f4e4f545f45584953541002122b0a2741445f47524f55" .
            "505f435249544552494f4e5f4c4142454c5f414c52454144595f45584953" .
            "54531003122a0a2643414e4e4f545f4144445f4c4142454c5f544f5f4e45" .
            "4741544956455f435249544552494f4e100412170a13544f4f5f4d414e59" .
            "5f4f5045524154494f4e53100512180a1443414e545f5550444154455f4e" .
            "454741544956451006121a0a16434f4e43524554455f545950455f524551" .
            "5549524544100712210a1d4249445f494e434f4d50415449424c455f5749" .
            "54485f414447524f55501008121d0a1943414e4e4f545f5441524745545f" .
            "414e445f4558434c5544451009120f0a0b494c4c4547414c5f55524c100a" .
            "12180a14494e56414c49445f4b4559574f52445f54455854100b121b0a17" .
            "494e56414c49445f44455354494e4154494f4e5f55524c100c121f0a1b4d" .
            "495353494e475f44455354494e4154494f4e5f55524c5f544147100d1231" .
            "0a2d4b4559574f52445f4c4556454c5f4249445f4e4f545f535550504f52" .
            "5445445f464f525f4d414e55414c43504d100e12170a13494e56414c4944" .
            "5f555345525f535441545553100f121c0a1843414e4e4f545f4144445f43" .
            "524954455249415f54595045101012200a1c43414e4e4f545f4558434c55" .
            "44455f43524954455249415f54595045101112350a3143414d504149474e" .
            "5f545950455f4e4f545f434f4d50415449424c455f574954485f50415254" .
            "49414c5f4641494c555245101b122d0a294f5045524154494f4e535f464f" .
            "525f544f4f5f4d414e595f53484f5050494e475f414447524f555053101c" .
            "12340a3043414e4e4f545f4d4f444946595f55524c5f4649454c44535f57" .
            "4954485f4455504c49434154455f454c454d454e5453101d12210a1d4341" .
            "4e4e4f545f5345545f574954484f55545f46494e414c5f55524c53101e12" .
            "360a3243414e4e4f545f434c4541525f46494e414c5f55524c535f49465f" .
            "46494e414c5f4d4f42494c455f55524c535f4558495354101f12330a2f43" .
            "414e4e4f545f434c4541525f46494e414c5f55524c535f49465f46494e41" .
            "4c5f4150505f55524c535f45584953541020123b0a3743414e4e4f545f43" .
            "4c4541525f46494e414c5f55524c535f49465f545241434b494e475f5552" .
            "4c5f54454d504c4154455f4558495354531021123a0a3643414e4e4f545f" .
            "434c4541525f46494e414c5f55524c535f49465f55524c5f435553544f4d" .
            "5f504152414d45544552535f4558495354102212320a2e43414e4e4f545f" .
            "5345545f424f54485f44455354494e4154494f4e5f55524c5f414e445f46" .
            "494e414c5f55524c531023123d0a3943414e4e4f545f5345545f424f5448" .
            "5f44455354494e4154494f4e5f55524c5f414e445f545241434b494e475f" .
            "55524c5f54454d504c4154451024122f0a2b46494e414c5f55524c535f4e" .
            "4f545f535550504f525445445f464f525f435249544552494f4e5f545950" .
            "45102512360a3246494e414c5f4d4f42494c455f55524c535f4e4f545f53" .
            "5550504f525445445f464f525f435249544552494f4e5f54595045102612" .
            "230a1f494e56414c49445f4c495354494e475f47524f55505f4849455241" .
            "524348591027122b0a274c495354494e475f47524f55505f554e49545f43" .
            "414e4e4f545f484156455f4348494c4452454e102812320a2e4c49535449" .
            "4e475f47524f55505f5355424449564953494f4e5f52455155495245535f" .
            "4f54484552535f434153451029123a0a364c495354494e475f47524f5550" .
            "5f52455155495245535f53414d455f44494d454e53494f4e5f545950455f" .
            "41535f5349424c494e4753102a12200a1c4c495354494e475f47524f5550" .
            "5f414c52454144595f455849535453102b12200a1c4c495354494e475f47" .
            "524f55505f444f45535f4e4f545f4558495354102c12230a1f4c49535449" .
            "4e475f47524f55505f43414e4e4f545f42455f52454d4f564544102d121e" .
            "0a1a494e56414c49445f4c495354494e475f47524f55505f54595045102e" .
            "122a0a264c495354494e475f47524f55505f4144445f4d41595f4f4e4c59" .
            "5f5553455f54454d505f4944102f42f5010a22636f6d2e676f6f676c652e" .
            "6164732e676f6f676c656164732e76312e6572726f7273421a416447726f" .
            "7570437269746572696f6e4572726f7250726f746f50015a44676f6f676c" .
            "652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c656170" .
            "69732f6164732f676f6f676c656164732f76312f6572726f72733b657272" .
            "6f7273a20203474141aa021e476f6f676c652e4164732e476f6f676c6541" .
            "64732e56312e4572726f7273ca021e476f6f676c655c4164735c476f6f67" .
            "6c654164735c56315c4572726f7273ea0222476f6f676c653a3a4164733a" .
            "3a476f6f676c654164733a3a56313a3a4572726f7273620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

