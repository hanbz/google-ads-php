<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/budget_type.proto

namespace Google\Ads\GoogleAds\V3\Enums\BudgetTypeEnum;

use UnexpectedValueException;

/**
 * Possible Budget types.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.BudgetTypeEnum.BudgetType</code>
 */
class BudgetType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Budget type for standard Google Ads usage.
     * Caps daily spend at two times the specified budget amount.
     * Full details: https://support.google.com/google-ads/answer/6385083
     *
     * Generated from protobuf enum <code>STANDARD = 2;</code>
     */
    const STANDARD = 2;
    /**
     * Budget type for Hotels Ads commission program.
     * Full details: https://support.google.com/google-ads/answer/9243945
     * This type is only supported by campaigns with
     * AdvertisingChannelType.HOTEL, BiddingStrategyType.COMMISSION and
     * PaymentMode.CONVERSION_VALUE.
     *
     * Generated from protobuf enum <code>HOTEL_ADS_COMMISSION = 3;</code>
     */
    const HOTEL_ADS_COMMISSION = 3;
    /**
     * Budget type with a fixed cost-per-acquisition (conversion).
     * Full details: https://support.google.com/google-ads/answer/7528254
     * This type is only supported by campaigns with
     * AdvertisingChannelType.DISPLAY (excluding
     * AdvertisingChannelSubType.DISPLAY_GMAIL),
     * BiddingStrategyType.TARGET_CPA and PaymentMode.CONVERSIONS.
     *
     * Generated from protobuf enum <code>FIXED_CPA = 4;</code>
     */
    const FIXED_CPA = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::STANDARD => 'STANDARD',
        self::HOTEL_ADS_COMMISSION => 'HOTEL_ADS_COMMISSION',
        self::FIXED_CPA => 'FIXED_CPA',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BudgetType::class, \Google\Ads\GoogleAds\V3\Enums\BudgetTypeEnum_BudgetType::class);

