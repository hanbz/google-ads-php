<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/google_ads_field.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V4\Resources;

class GoogleAdsField
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae6030a3d676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f676f6f676c655f6164735f6669656c645f63617465676f72792e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73228a010a1a476f6f676c654164734669656c6443617465676f7279456e756d226c0a16476f6f676c654164734669656c6443617465676f7279120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120c0a085245534f555243451002120d0a094154545249425554451003120b0a075345474d454e541005120a0a064d4554524943100642f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73421b476f6f676c654164734669656c6443617465676f727950726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330ab8040a3e676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f676f6f676c655f6164735f6669656c645f646174615f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76342e656e756d7322db010a1a476f6f676c654164734669656c644461746154797065456e756d22bc010a16476f6f676c654164734669656c644461746154797065120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001120b0a07424f4f4c45414e100212080a04444154451003120a0a06444f55424c45100412080a04454e554d100512090a05464c4f4154100612090a05494e543332100712090a05494e5436341008120b0a074d455353414745100912110a0d5245534f555243455f4e414d45100a120a0a06535452494e47100b120a0a0655494e543634100c42f0010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d73421b476f6f676c654164734669656c64446174615479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56342e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56345c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a456e756d73620670726f746f330af80b0a38676f6f676c652f6164732f676f6f676c656164732f76342f7265736f75726365732f676f6f676c655f6164735f6669656c642e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365731a3e676f6f676c652f6164732f676f6f676c656164732f76342f656e756d732f676f6f676c655f6164735f6669656c645f646174615f747970652e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1e676f6f676c652f70726f746f6275662f77726170706572732e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f22d3070a0e476f6f676c654164734669656c6412460a0d7265736f757263655f6e616d65180120012809422fe04103fa41290a27676f6f676c656164732e676f6f676c65617069732e636f6d2f476f6f676c654164734669656c64122f0a046e616d6518022001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312670a0863617465676f727918032001280e32502e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e476f6f676c654164734669656c6443617465676f7279456e756d2e476f6f676c654164734669656c6443617465676f72794203e0410312330a0a73656c65637461626c6518042001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e0410312330a0a66696c74657261626c6518052001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e0410312310a08736f727461626c6518062001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e04103123a0a0f73656c65637461626c655f7769746818072003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e04103123e0a136174747269627574655f7265736f757263657318082003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312320a076d65747269637318092003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312330a087365676d656e7473180a2003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312360a0b656e756d5f76616c756573180b2003280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312680a09646174615f74797065180c2001280e32502e676f6f676c652e6164732e676f6f676c656164732e76342e656e756d732e476f6f676c654164734669656c644461746154797065456e756d2e476f6f676c654164734669656c6444617461547970654203e0410312330a08747970655f75726c180d2001280b321c2e676f6f676c652e70726f746f6275662e537472696e6756616c75654203e0410312340a0b69735f7265706561746564180e2001280b321a2e676f6f676c652e70726f746f6275662e426f6f6c56616c75654203e041033a50ea414d0a27676f6f676c656164732e676f6f676c65617069732e636f6d2f476f6f676c654164734669656c641222676f6f676c654164734669656c64732f7b676f6f676c655f6164735f6669656c647d4280020a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76342e7265736f75726365734213476f6f676c654164734669656c6450726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76342f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56342e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56345c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56343a3a5265736f7572636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}
