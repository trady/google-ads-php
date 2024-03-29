<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/product_link.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Resources;

class ProductLink
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v15/enums/linked_product_type.protogoogle.ads.googleads.v15.enums"�
LinkedProductTypeEnum"z
LinkedProductType
UNSPECIFIED 
UNKNOWN
DATA_PARTNER

GOOGLE_ADS
HOTEL_CENTER
MERCHANT_CENTERB�
"com.google.ads.googleads.v15.enumsBLinkedProductTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�

5google/ads/googleads/v15/resources/product_link.proto"google.ads.googleads.v15.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
ProductLinkC
resource_name (	B,�A�A&
$googleads.googleapis.com/ProductLink!
product_link_id (B�AH�Z
type (2G.google.ads.googleads.v15.enums.LinkedProductTypeEnum.LinkedProductTypeB�AV
data_partner (29.google.ads.googleads.v15.resources.DataPartnerIdentifierB�AH R

google_ads (27.google.ads.googleads.v15.resources.GoogleAdsIdentifierB�AH \\
merchant_center (2<.google.ads.googleads.v15.resources.MerchantCenterIdentifierB�AH :a�A^
$googleads.googleapis.com/ProductLink6customers/{customer_id}/productLinks/{product_link_id}B
linked_productB
_product_link_id"N
DataPartnerIdentifier!
data_partner_id (B�AH �B
_data_partner_id"d
GoogleAdsIdentifier@
customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �B
	_customer"W
MerchantCenterIdentifier$
merchant_center_id (B�AH �B
_merchant_center_idB�
&com.google.ads.googleads.v15.resourcesBProductLinkProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

