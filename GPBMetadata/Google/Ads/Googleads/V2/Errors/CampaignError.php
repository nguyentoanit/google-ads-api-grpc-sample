<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/errors/campaign_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V2\Errors;

class CampaignError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e100a33676f6f676c652f6164732f676f6f676c656164732f76322f65" .
            "72726f72732f63616d706169676e5f6572726f722e70726f746f121e676f" .
            "6f676c652e6164732e676f6f676c656164732e76322e6572726f727322be" .
            "0d0a1143616d706169676e4572726f72456e756d22a80d0a0d43616d7061" .
            "69676e4572726f72120f0a0b554e5350454349464945441000120b0a0755" .
            "4e4b4e4f574e100112210a1d43414e4e4f545f5441524745545f434f4e54" .
            "454e545f4e4554574f524b100312200a1c43414e4e4f545f544152474554" .
            "5f5345415243485f4e4554574f524b100412360a3243414e4e4f545f5441" .
            "524745545f5345415243485f4e4554574f524b5f574954484f55545f474f" .
            "4f474c455f534541524348100512300a2c43414e4e4f545f544152474554" .
            "5f474f4f474c455f5345415243485f464f525f43504d5f43414d50414947" .
            "4e1006122d0a2943414d504149474e5f4d5553545f5441524745545f4154" .
            "5f4c454153545f4f4e455f4e4554574f524b100712280a2443414e4e4f54" .
            "5f5441524745545f504152544e45525f5345415243485f4e4554574f524b" .
            "1008124b0a4743414e4e4f545f5441524745545f434f4e54454e545f4e45" .
            "54574f524b5f4f4e4c595f574954485f43524954455249415f4c4556454c" .
            "5f42494444494e475f5354524154454759100912360a3243414d50414947" .
            "4e5f4455524154494f4e5f4d5553545f434f4e5441494e5f414c4c5f5255" .
            "4e4e41424c455f545249414c53100a12240a2043414e4e4f545f4d4f4449" .
            "46595f464f525f545249414c5f43414d504149474e100b121b0a17445550" .
            "4c49434154455f43414d504149474e5f4e414d45100c121f0a1b494e434f" .
            "4d50415449424c455f43414d504149474e5f4649454c44100d12190a1549" .
            "4e56414c49445f43414d504149474e5f4e414d45100e122a0a26494e5641" .
            "4c49445f41445f53455256494e475f4f5054494d495a4154494f4e5f5354" .
            "41545553100f12180a14494e56414c49445f545241434b494e475f55524c" .
            "1010123e0a3a43414e4e4f545f5345545f424f54485f545241434b494e47" .
            "5f55524c5f54454d504c4154455f414e445f545241434b494e475f534554" .
            "54494e47101112200a1c4d41585f494d5052455353494f4e535f4e4f545f" .
            "494e5f52414e47451012121b0a1754494d455f554e49545f4e4f545f5355" .
            "50504f52544544101312310a2d494e56414c49445f4f5045524154494f4e" .
            "5f49465f53455256494e475f5354415455535f4841535f454e4445441014" .
            "121b0a174255444745545f43414e4e4f545f42455f534841524544101512" .
            "250a2143414d504149474e5f43414e4e4f545f5553455f5348415245445f" .
            "425544474554101612300a2c43414e4e4f545f4348414e47455f42554447" .
            "45545f4f4e5f43414d504149474e5f574954485f545249414c5310171221" .
            "0a1d43414d504149474e5f4c4142454c5f444f45535f4e4f545f45584953" .
            "54101812210a1d43414d504149474e5f4c4142454c5f414c52454144595f" .
            "4558495354531019121c0a184d495353494e475f53484f5050494e475f53" .
            "455454494e47101a12220a1e494e56414c49445f53484f5050494e475f53" .
            "414c45535f434f554e545259101b122a0a264d495353494e475f554e4956" .
            "455253414c5f4150505f43414d504149474e5f53455454494e47101e123b" .
            "0a374144564552544953494e475f4348414e4e454c5f545950455f4e4f54" .
            "5f415641494c41424c455f464f525f4143434f554e545f54595045101f12" .
            "280a24494e56414c49445f4144564552544953494e475f4348414e4e454c" .
            "5f5355425f545950451020122c0a2841545f4c454153545f4f4e455f434f" .
            "4e56455253494f4e5f4d5553545f42455f53454c45435445441021121f0a" .
            "1b43414e4e4f545f5345545f41445f524f544154494f4e5f4d4f44451022" .
            "122f0a2b43414e4e4f545f4d4f444946595f53544152545f444154455f49" .
            "465f414c52454144595f535441525445441023121b0a1743414e4e4f545f" .
            "5345545f444154455f544f5f504153541024121f0a1b4d495353494e475f" .
            "484f54454c5f435553544f4d45525f4c494e4b1025121f0a1b494e56414c" .
            "49445f484f54454c5f435553544f4d45525f4c494e4b102612190a154d49" .
            "5353494e475f484f54454c5f53455454494e47102712420a3e43414e4e4f" .
            "545f5553455f5348415245445f43414d504149474e5f4255444745545f57" .
            "48494c455f504152545f4f465f43414d504149474e5f47524f5550102812" .
            "110a0d4150505f4e4f545f464f554e44102912390a3553484f5050494e47" .
            "5f454e41424c455f4c4f43414c5f4e4f545f535550504f525445445f464f" .
            "525f43414d504149474e5f54595045102a12330a2f4d45524348414e545f" .
            "4e4f545f414c4c4f5745445f464f525f434f4d50415249534f4e5f4c4953" .
            "54494e475f414453102b12230a1f494e53554646494349454e545f415050" .
            "5f494e5354414c4c535f434f554e54102c42ed010a22636f6d2e676f6f67" .
            "6c652e6164732e676f6f676c656164732e76322e6572726f727342124361" .
            "6d706169676e4572726f7250726f746f50015a44676f6f676c652e676f6c" .
            "616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164" .
            "732f676f6f676c656164732f76322f6572726f72733b6572726f7273a202" .
            "03474141aa021e476f6f676c652e4164732e476f6f676c654164732e5632" .
            "2e4572726f7273ca021e476f6f676c655c4164735c476f6f676c65416473" .
            "5c56325c4572726f7273ea0222476f6f676c653a3a4164733a3a476f6f67" .
            "6c654164733a3a56323a3a4572726f7273620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

