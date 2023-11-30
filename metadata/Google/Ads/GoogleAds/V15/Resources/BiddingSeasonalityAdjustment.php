<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/bidding_seasonality_adjustment.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Resources;

class BiddingSeasonalityAdjustment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
<google/ads/googleads/v15/enums/seasonality_event_scope.protogoogle.ads.googleads.v15.enums"{
SeasonalityEventScopeEnum"^
SeasonalityEventScope
UNSPECIFIED 
UNKNOWN
CUSTOMER
CAMPAIGN
CHANNELB�
"com.google.ads.googleads.v15.enumsBSeasonalityEventScopeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
=google/ads/googleads/v15/enums/seasonality_event_status.protogoogle.ads.googleads.v15.enums"n
SeasonalityEventStatusEnum"P
SeasonalityEventStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v15.enumsBSeasonalityEventStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
=google/ads/googleads/v15/enums/advertising_channel_type.protogoogle.ads.googleads.v15.enums"�
AdvertisingChannelTypeEnum"�
AdvertisingChannelType
UNSPECIFIED 
UNKNOWN

SEARCH
DISPLAY
SHOPPING	
HOTEL	
VIDEO
MULTI_CHANNEL	
LOCAL	
SMART	
PERFORMANCE_MAX

LOCAL_SERVICES
	DISCOVERY

TRAVELB�
"com.google.ads.googleads.v15.enumsBAdvertisingChannelTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
+google/ads/googleads/v15/enums/device.protogoogle.ads.googleads.v15.enums"v

DeviceEnum"h
Device
UNSPECIFIED 
UNKNOWN

MOBILE

TABLET
DESKTOP
CONNECTED_TV	
OTHERB�
"com.google.ads.googleads.v15.enumsBDeviceProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Ggoogle/ads/googleads/v15/resources/bidding_seasonality_adjustment.proto"google.ads.googleads.v15.resources+google/ads/googleads/v15/enums/device.proto<google/ads/googleads/v15/enums/seasonality_event_scope.proto=google/ads/googleads/v15/enums/seasonality_event_status.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
BiddingSeasonalityAdjustmentT
resource_name (	B=�A�A7
5googleads.googleapis.com/BiddingSeasonalityAdjustment&
seasonality_adjustment_id (B�A^
scope (2O.google.ads.googleads.v15.enums.SeasonalityEventScopeEnum.SeasonalityEventScopef
status (2Q.google.ads.googleads.v15.enums.SeasonalityEventStatusEnum.SeasonalityEventStatusB�A
start_date_time (	B�A
end_date_time (	B�A
name (	
description (	B
devices	 (21.google.ads.googleads.v15.enums.DeviceEnum.Device 
conversion_rate_modifier
 (9
	campaigns (	B&�A#
!googleads.googleapis.com/Campaignt
advertising_channel_types (2Q.google.ads.googleads.v15.enums.AdvertisingChannelTypeEnum.AdvertisingChannelType:��A�
5googleads.googleapis.com/BiddingSeasonalityAdjustmentLcustomers/{customer_id}/biddingSeasonalityAdjustments/{seasonality_event_id}B�
&com.google.ads.googleads.v15.resourcesB!BiddingSeasonalityAdjustmentProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

