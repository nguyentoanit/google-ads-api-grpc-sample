<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/feed_item_validation_error.proto

namespace GPBMetadata\Google\Ads\Googleads\V1\Errors;

class FeedItemValidationError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9a1c0a3f676f6f676c652f6164732f676f6f676c656164732f76312f65" .
            "72726f72732f666565645f6974656d5f76616c69646174696f6e5f657272" .
            "6f722e70726f746f121e676f6f676c652e6164732e676f6f676c65616473" .
            "2e76312e6572726f727322b4190a1b466565644974656d56616c69646174" .
            "696f6e4572726f72456e756d2294190a17466565644974656d56616c6964" .
            "6174696f6e4572726f72120f0a0b554e5350454349464945441000120b0a" .
            "07554e4b4e4f574e100112140a10535452494e475f544f4f5f53484f5254" .
            "100212130a0f535452494e475f544f4f5f4c4f4e47100312170a1356414c" .
            "55455f4e4f545f535045434946494544100412280a24494e56414c49445f" .
            "444f4d45535449435f50484f4e455f4e554d4245525f464f524d41541005" .
            "12180a14494e56414c49445f50484f4e455f4e554d4245521006122a0a26" .
            "50484f4e455f4e554d4245525f4e4f545f535550504f525445445f464f52" .
            "5f434f554e545259100712230a1f5052454d49554d5f524154455f4e554d" .
            "4245525f4e4f545f414c4c4f5745441008121a0a16444953414c4c4f5745" .
            "445f4e554d4245525f54595045100912160a1256414c55455f4f55545f4f" .
            "465f52414e4745100a122a0a2643414c4c545241434b494e475f4e4f545f" .
            "535550504f525445445f464f525f434f554e545259100b122d0a29435553" .
            "544f4d45525f4e4f545f57484954454c49535445445f464f525f43414c4c" .
            "545241434b494e47100c12180a14494e56414c49445f434f554e5452595f" .
            "434f4445100d12120a0e494e56414c49445f4150505f4944100e12210a1d" .
            "4d495353494e475f415454524942555445535f464f525f4649454c445310" .
            "0f12130a0f494e56414c49445f545950455f4944101012190a15494e5641" .
            "4c49445f454d41494c5f41444452455353101112150a11494e56414c4944" .
            "5f48545450535f55524c1012121c0a184d495353494e475f44454c495645" .
            "52595f414444524553531013121d0a1953544152545f444154455f414654" .
            "45525f454e445f44415445101412200a1c4d495353494e475f464545445f" .
            "4954454d5f53544152545f54494d451015121e0a1a4d495353494e475f46" .
            "4545445f4954454d5f454e445f54494d45101612180a144d495353494e47" .
            "5f464545445f4954454d5f4944101712230a1f56414e4954595f50484f4e" .
            "455f4e554d4245525f4e4f545f414c4c4f574544101812240a20494e5641" .
            "4c49445f5245564945575f455854454e53494f4e5f534e49505045541019" .
            "12190a15494e56414c49445f4e554d4245525f464f524d4154101a12170a" .
            "13494e56414c49445f444154455f464f524d4154101b12180a14494e5641" .
            "4c49445f50524943455f464f524d4154101c121d0a19554e4b4e4f574e5f" .
            "504c414345484f4c4445525f4649454c44101d122e0a2a4d495353494e47" .
            "5f454e48414e4345445f534954454c494e4b5f4445534352495054494f4e" .
            "5f4c494e45101e12260a225245564945575f455854454e53494f4e5f534f" .
            "555243455f494e454c494749424c45101f12270a2348595048454e535f49" .
            "4e5f5245564945575f455854454e53494f4e5f534e49505045541020122d" .
            "0a29444f55424c455f51554f5445535f494e5f5245564945575f45585445" .
            "4e53494f4e5f534e4950504554102112260a2251554f5445535f494e5f52" .
            "45564945575f455854454e53494f4e5f534e49505045541022121f0a1b49" .
            "4e56414c49445f464f524d5f454e434f4445445f504152414d531023121e" .
            "0a1a494e56414c49445f55524c5f504152414d455445525f4e414d451024" .
            "12170a134e4f5f47454f434f44494e475f524553554c54102512280a2453" .
            "4f555243455f4e414d455f494e5f5245564945575f455854454e53494f4e" .
            "5f544558541026122d0a29434152524945525f53504543494649435f5348" .
            "4f52545f4e554d4245525f4e4f545f414c4c4f574544102712200a1c494e" .
            "56414c49445f504c414345484f4c4445525f4649454c445f494410281213" .
            "0a0f494e56414c49445f55524c5f544147102912110a0d4c4953545f544f" .
            "4f5f4c4f4e47102a12220a1e494e56414c49445f41545452494255544553" .
            "5f434f4d42494e4154494f4e102b12140a104455504c49434154455f5641" .
            "4c554553102c12250a21494e56414c49445f43414c4c5f434f4e56455253" .
            "494f4e5f414354494f4e5f4944102d12210a1d43414e4e4f545f5345545f" .
            "574954484f55545f46494e414c5f55524c53102e12240a204150505f4944" .
            "5f444f45534e545f45584953545f494e5f4150505f53544f5245102f1215" .
            "0a11494e56414c49445f46494e414c5f55524c103012180a14494e56414c" .
            "49445f545241434b494e475f55524c1031122a0a26494e56414c49445f46" .
            "494e414c5f55524c5f464f525f4150505f444f574e4c4f41445f55524c10" .
            "3212120a0e4c4953545f544f4f5f53484f5254103312170a13494e56414c" .
            "49445f555345525f414354494f4e103412150a11494e56414c49445f5459" .
            "50455f4e414d451035121f0a1b494e56414c49445f4556454e545f434841" .
            "4e47455f5354415455531036121b0a17494e56414c49445f534e49505045" .
            "54535f4845414445521037121c0a18494e56414c49445f414e44524f4944" .
            "5f4150505f4c494e4b1038123b0a374e554d4245525f545950455f574954" .
            "485f43414c4c545241434b494e475f4e4f545f535550504f525445445f46" .
            "4f525f434f554e5452591039121a0a1652455345525645445f4b4559574f" .
            "52445f4f54484552103a121b0a174455504c49434154455f4f5054494f4e" .
            "5f4c4142454c53103b121d0a194455504c49434154455f4f5054494f4e5f" .
            "50524546494c4c53103c12180a14554e455155414c5f4c4953545f4c454e" .
            "47544853103d121f0a1b494e434f4e53495354454e545f43555252454e43" .
            "595f434f444553103e122a0a2650524943455f455854454e53494f4e5f48" .
            "41535f4455504c4943415445445f48454144455253103f122e0a2a495445" .
            "4d5f4841535f4455504c4943415445445f4845414445525f414e445f4445" .
            "534352495054494f4e104012250a2150524943455f455854454e53494f4e" .
            "5f4841535f544f4f5f4645575f4954454d53104112150a11554e53555050" .
            "4f525445445f56414c55451042121c0a18494e56414c49445f46494e414c" .
            "5f4d4f42494c455f55524c104312250a21494e56414c49445f4b4559574f" .
            "52444c4553535f41445f52554c455f4c4142454c104412270a2356414c55" .
            "455f545241434b5f504152414d455445525f4e4f545f535550504f525445" .
            "441045122a0a26554e535550504f525445445f56414c55455f494e5f5345" .
            "4c45435445445f4c414e4755414745104612180a14494e56414c49445f49" .
            "4f535f4150505f4c494e4b1047122c0a284d495353494e475f494f535f41" .
            "50505f4c494e4b5f4f525f494f535f4150505f53544f52455f4944104812" .
            "1a0a1650524f4d4f54494f4e5f494e56414c49445f54494d45104912390a" .
            "3550524f4d4f54494f4e5f43414e4e4f545f5345545f50455243454e545f" .
            "4f46465f414e445f4d4f4e45595f414d4f554e545f4f4646104a123e0a3a" .
            "50524f4d4f54494f4e5f43414e4e4f545f5345545f50524f4d4f54494f4e" .
            "5f434f44455f414e445f4f52444552535f4f5645525f414d4f554e54104b" .
            "12250a21544f4f5f4d414e595f444543494d414c5f504c414345535f5350" .
            "45434946494544104c121e0a1a41445f435553544f4d495a4552535f4e4f" .
            "545f414c4c4f574544104d12190a15494e56414c49445f4c414e47554147" .
            "455f434f4445104e12180a14554e535550504f525445445f4c414e475541" .
            "4745104f121b0a1749465f46554e4354494f4e5f4e4f545f414c4c4f5745" .
            "441050121c0a18494e56414c49445f46494e414c5f55524c5f5355464649" .
            "58105112230a1f494e56414c49445f5441475f494e5f46494e414c5f5552" .
            "4c5f535546464958105212230a1f494e56414c49445f46494e414c5f5552" .
            "4c5f5355464649585f464f524d4154105312300a2c435553544f4d45525f" .
            "434f4e53454e545f464f525f43414c4c5f5245434f5244494e475f524551" .
            "5549524544105412270a234f4e4c595f4f4e455f44454c49564552595f4f" .
            "5054494f4e5f49535f414c4c4f5745441055121d0a194e4f5f44454c4956" .
            "4552595f4f5054494f4e5f49535f534554105612260a22494e56414c4944" .
            "5f434f4e56455253494f4e5f5245504f5254494e475f5354415445105712" .
            "140a10494d4147455f53495a455f57524f4e471058122b0a27454d41494c" .
            "5f44454c49564552595f4e4f545f415641494c41424c455f494e5f434f55" .
            "4e545259105912270a234155544f5f5245504c595f4e4f545f415641494c" .
            "41424c455f494e5f434f554e545259105a121a0a16494e56414c49445f4c" .
            "415449545544455f56414c5545105b121b0a17494e56414c49445f4c4f4e" .
            "4749545544455f56414c5545105c12130a0f544f4f5f4d414e595f4c4142" .
            "454c53105d12150a11494e56414c49445f494d4147455f55524c105e121a" .
            "0a164d495353494e475f4c415449545544455f56414c5545105f121b0a17" .
            "4d495353494e475f4c4f4e4749545544455f56414c5545106042f7010a22" .
            "636f6d2e676f6f676c652e6164732e676f6f676c656164732e76312e6572" .
            "726f7273421c466565644974656d56616c69646174696f6e4572726f7250" .
            "726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70" .
            "726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f" .
            "76312f6572726f72733b6572726f7273a20203474141aa021e476f6f676c" .
            "652e4164732e476f6f676c654164732e56312e4572726f7273ca021e476f" .
            "6f676c655c4164735c476f6f676c654164735c56315c4572726f7273ea02" .
            "22476f6f676c653a3a4164733a3a476f6f676c654164733a3a56313a3a45" .
            "72726f7273620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

