<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A responsive display ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.ResponsiveDisplayAdInfo</code>
 */
class ResponsiveDisplayAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     * be 1.91:1 (+-1%). At least one marketing_image is required. Combined with
     * square_marketing_images the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset marketing_images = 1;</code>
     */
    private $marketing_images;
    /**
     * Square marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     * be 1:1 (+-1%). At least one square marketing_image is required. Combined
     * with marketing_images the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset square_marketing_images = 2;</code>
     */
    private $square_marketing_images;
    /**
     * Logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     * be 4:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset logo_images = 3;</code>
     */
    private $logo_images;
    /**
     * Square logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     * be 1:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset square_logo_images = 4;</code>
     */
    private $square_logo_images;
    /**
     * Short format headlines for the ad. The maximum length is 30 characters.
     * At least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset headlines = 5;</code>
     */
    private $headlines;
    /**
     * A required long format headline. The maximum length is 90 characters.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AdTextAsset long_headline = 6;</code>
     */
    protected $long_headline = null;
    /**
     * Descriptive texts for the ad. The maximum length is 90 characters. At
     * least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset descriptions = 7;</code>
     */
    private $descriptions;
    /**
     * Optional YouTube vidoes for the ad. A maximum of 5 videos can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdVideoAsset youtube_videos = 8;</code>
     */
    private $youtube_videos;
    /**
     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 9;</code>
     */
    protected $business_name = null;
    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 10;</code>
     */
    protected $main_color = null;
    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 11;</code>
     */
    protected $accent_color = null;
    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 12;</code>
     */
    protected $allow_flexible_color = null;
    /**
     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 13;</code>
     */
    protected $call_to_action_text = null;
    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     */
    protected $price_prefix = null;
    /**
     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     */
    protected $promo_text = null;
    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 16;</code>
     */
    protected $format_setting = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $marketing_images
     *           Marketing images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     *           be 1.91:1 (+-1%). At least one marketing_image is required. Combined with
     *           square_marketing_images the maximum is 15.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $square_marketing_images
     *           Square marketing images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     *           be 1:1 (+-1%). At least one square marketing_image is required. Combined
     *           with marketing_images the maximum is 15.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $logo_images
     *           Logo images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     *           be 4:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $square_logo_images
     *           Square logo images to be used in the ad. Valid image types are GIF,
     *           JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     *           be 1:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $headlines
     *           Short format headlines for the ad. The maximum length is 30 characters.
     *           At least 1 and max 5 headlines can be specified.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdTextAsset $long_headline
     *           A required long format headline. The maximum length is 90 characters.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $descriptions
     *           Descriptive texts for the ad. The maximum length is 90 characters. At
     *           least 1 and max 5 headlines can be specified.
     *     @type \Google\Ads\GoogleAds\V2\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $youtube_videos
     *           Optional YouTube vidoes for the ad. A maximum of 5 videos can be specified.
     *     @type \Google\Protobuf\StringValue $business_name
     *           The advertiser/brand name. Maximum display width is 25.
     *     @type \Google\Protobuf\StringValue $main_color
     *           The main color of the ad in hexadecimal, e.g. #ffffff for white.
     *           If one of main_color and accent_color is set, the other is required as
     *           well.
     *     @type \Google\Protobuf\StringValue $accent_color
     *           The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     *           If one of main_color and accent_color is set, the other is required as
     *           well.
     *     @type \Google\Protobuf\BoolValue $allow_flexible_color
     *           Advertiser's consent to allow flexible color. When true, the ad may be
     *           served with different color if necessary. When false, the ad will be served
     *           with the specified colors or a neutral color.
     *           The default value is true.
     *           Must be true if main_color and accent_color are not set.
     *     @type \Google\Protobuf\StringValue $call_to_action_text
     *           The call-to-action text for the ad. Maximum display width is 30.
     *     @type \Google\Protobuf\StringValue $price_prefix
     *           Prefix before price. E.g. 'as low as'.
     *     @type \Google\Protobuf\StringValue $promo_text
     *           Promotion text used for dyanmic formats of responsive ads. For example
     *           'Free two-day shipping'.
     *     @type int $format_setting
     *           Specifies which format the ad will be served in. Default is ALL_FORMATS.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\Googleads\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     * be 1.91:1 (+-1%). At least one marketing_image is required. Combined with
     * square_marketing_images the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset marketing_images = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMarketingImages()
    {
        return $this->marketing_images;
    }

    /**
     * Marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 600x314 and the aspect ratio must
     * be 1.91:1 (+-1%). At least one marketing_image is required. Combined with
     * square_marketing_images the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset marketing_images = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMarketingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdImageAsset::class);
        $this->marketing_images = $arr;

        return $this;
    }

    /**
     * Square marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     * be 1:1 (+-1%). At least one square marketing_image is required. Combined
     * with marketing_images the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset square_marketing_images = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSquareMarketingImages()
    {
        return $this->square_marketing_images;
    }

    /**
     * Square marketing images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 300x300 and the aspect ratio must
     * be 1:1 (+-1%). At least one square marketing_image is required. Combined
     * with marketing_images the maximum is 15.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset square_marketing_images = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSquareMarketingImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdImageAsset::class);
        $this->square_marketing_images = $arr;

        return $this;
    }

    /**
     * Logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     * be 4:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset logo_images = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogoImages()
    {
        return $this->logo_images;
    }

    /**
     * Logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 512x128 and the aspect ratio must
     * be 4:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset logo_images = 3;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogoImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdImageAsset::class);
        $this->logo_images = $arr;

        return $this;
    }

    /**
     * Square logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     * be 1:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset square_logo_images = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSquareLogoImages()
    {
        return $this->square_logo_images;
    }

    /**
     * Square logo images to be used in the ad. Valid image types are GIF,
     * JPEG, and PNG. The minimum size is 128x128 and the aspect ratio must
     * be 1:1 (+-1%). Combined with square_logo_images the maximum is 5.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdImageAsset square_logo_images = 4;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdImageAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSquareLogoImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdImageAsset::class);
        $this->square_logo_images = $arr;

        return $this;
    }

    /**
     * Short format headlines for the ad. The maximum length is 30 characters.
     * At least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset headlines = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeadlines()
    {
        return $this->headlines;
    }

    /**
     * Short format headlines for the ad. The maximum length is 30 characters.
     * At least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset headlines = 5;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeadlines($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdTextAsset::class);
        $this->headlines = $arr;

        return $this;
    }

    /**
     * A required long format headline. The maximum length is 90 characters.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AdTextAsset long_headline = 6;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\AdTextAsset
     */
    public function getLongHeadline()
    {
        return $this->long_headline;
    }

    /**
     * A required long format headline. The maximum length is 90 characters.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.AdTextAsset long_headline = 6;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdTextAsset $var
     * @return $this
     */
    public function setLongHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\AdTextAsset::class);
        $this->long_headline = $var;

        return $this;
    }

    /**
     * Descriptive texts for the ad. The maximum length is 90 characters. At
     * least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset descriptions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * Descriptive texts for the ad. The maximum length is 90 characters. At
     * least 1 and max 5 headlines can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdTextAsset descriptions = 7;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdTextAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdTextAsset::class);
        $this->descriptions = $arr;

        return $this;
    }

    /**
     * Optional YouTube vidoes for the ad. A maximum of 5 videos can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdVideoAsset youtube_videos = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getYoutubeVideos()
    {
        return $this->youtube_videos;
    }

    /**
     * Optional YouTube vidoes for the ad. A maximum of 5 videos can be specified.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v2.common.AdVideoAsset youtube_videos = 8;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\AdVideoAsset[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setYoutubeVideos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V2\Common\AdVideoAsset::class);
        $this->youtube_videos = $arr;

        return $this;
    }

    /**
     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Returns the unboxed value from <code>getBusinessName()</code>

     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 9;</code>
     * @return string|null
     */
    public function getBusinessNameUnwrapped()
    {
        return $this->readWrapperValue("business_name");
    }

    /**
     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The advertiser/brand name. Maximum display width is 25.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBusinessNameUnwrapped($var)
    {
        $this->writeWrapperValue("business_name", $var);
        return $this;}

    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 10;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getMainColor()
    {
        return $this->main_color;
    }

    /**
     * Returns the unboxed value from <code>getMainColor()</code>

     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 10;</code>
     * @return string|null
     */
    public function getMainColorUnwrapped()
    {
        return $this->readWrapperValue("main_color");
    }

    /**
     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 10;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setMainColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->main_color = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The main color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue main_color = 10;</code>
     * @param string|null $var
     * @return $this
     */
    public function setMainColorUnwrapped($var)
    {
        $this->writeWrapperValue("main_color", $var);
        return $this;}

    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 11;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAccentColor()
    {
        return $this->accent_color;
    }

    /**
     * Returns the unboxed value from <code>getAccentColor()</code>

     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 11;</code>
     * @return string|null
     */
    public function getAccentColorUnwrapped()
    {
        return $this->readWrapperValue("accent_color");
    }

    /**
     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 11;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAccentColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->accent_color = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The accent color of the ad in hexadecimal, e.g. #ffffff for white.
     * If one of main_color and accent_color is set, the other is required as
     * well.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue accent_color = 11;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAccentColorUnwrapped($var)
    {
        $this->writeWrapperValue("accent_color", $var);
        return $this;}

    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 12;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getAllowFlexibleColor()
    {
        return $this->allow_flexible_color;
    }

    /**
     * Returns the unboxed value from <code>getAllowFlexibleColor()</code>

     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 12;</code>
     * @return bool|null
     */
    public function getAllowFlexibleColorUnwrapped()
    {
        return $this->readWrapperValue("allow_flexible_color");
    }

    /**
     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 12;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setAllowFlexibleColor($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->allow_flexible_color = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Advertiser's consent to allow flexible color. When true, the ad may be
     * served with different color if necessary. When false, the ad will be served
     * with the specified colors or a neutral color.
     * The default value is true.
     * Must be true if main_color and accent_color are not set.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue allow_flexible_color = 12;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setAllowFlexibleColorUnwrapped($var)
    {
        $this->writeWrapperValue("allow_flexible_color", $var);
        return $this;}

    /**
     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 13;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallToActionText()
    {
        return $this->call_to_action_text;
    }

    /**
     * Returns the unboxed value from <code>getCallToActionText()</code>

     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 13;</code>
     * @return string|null
     */
    public function getCallToActionTextUnwrapped()
    {
        return $this->readWrapperValue("call_to_action_text");
    }

    /**
     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 13;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallToActionText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->call_to_action_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The call-to-action text for the ad. Maximum display width is 30.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_to_action_text = 13;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCallToActionTextUnwrapped($var)
    {
        $this->writeWrapperValue("call_to_action_text", $var);
        return $this;}

    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPricePrefix()
    {
        return $this->price_prefix;
    }

    /**
     * Returns the unboxed value from <code>getPricePrefix()</code>

     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     * @return string|null
     */
    public function getPricePrefixUnwrapped()
    {
        return $this->readWrapperValue("price_prefix");
    }

    /**
     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPricePrefix($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->price_prefix = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Prefix before price. E.g. 'as low as'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue price_prefix = 14;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPricePrefixUnwrapped($var)
    {
        $this->writeWrapperValue("price_prefix", $var);
        return $this;}

    /**
     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPromoText()
    {
        return $this->promo_text;
    }

    /**
     * Returns the unboxed value from <code>getPromoText()</code>

     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     * @return string|null
     */
    public function getPromoTextUnwrapped()
    {
        return $this->readWrapperValue("promo_text");
    }

    /**
     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPromoText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->promo_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Promotion text used for dyanmic formats of responsive ads. For example
     * 'Free two-day shipping'.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue promo_text = 15;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPromoTextUnwrapped($var)
    {
        $this->writeWrapperValue("promo_text", $var);
        return $this;}

    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 16;</code>
     * @return int
     */
    public function getFormatSetting()
    {
        return $this->format_setting;
    }

    /**
     * Specifies which format the ad will be served in. Default is ALL_FORMATS.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.DisplayAdFormatSettingEnum.DisplayAdFormatSetting format_setting = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setFormatSetting($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\DisplayAdFormatSettingEnum_DisplayAdFormatSetting::class);
        $this->format_setting = $var;

        return $this;
    }

}

