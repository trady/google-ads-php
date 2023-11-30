<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/metric_goal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Common;

class MetricGoal
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
6google/ads/googleads/v15/enums/experiment_metric.protogoogle.ads.googleads.v15.enums"�
ExperimentMetricEnum"�
ExperimentMetric
UNSPECIFIED 
UNKNOWN

CLICKS
IMPRESSIONS
COST$
 CONVERSIONS_PER_INTERACTION_RATE
COST_PER_CONVERSION
CONVERSIONS_VALUE_PER_COST
AVERAGE_CPC
CTR	
INCREMENTAL_CONVERSIONS

COMPLETED_VIDEO_VIEWS
CUSTOM_ALGORITHMS
CONVERSIONS
CONVERSION_VALUEB�
"com.google.ads.googleads.v15.enumsBExperimentMetricProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
@google/ads/googleads/v15/enums/experiment_metric_direction.protogoogle.ads.googleads.v15.enums"�
ExperimentMetricDirectionEnum"�
ExperimentMetricDirection
UNSPECIFIED 
UNKNOWN
	NO_CHANGE
INCREASE
DECREASE
NO_CHANGE_OR_INCREASE
NO_CHANGE_OR_DECREASEB�
"com.google.ads.googleads.v15.enumsBExperimentMetricDirectionProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
1google/ads/googleads/v15/common/metric_goal.protogoogle.ads.googleads.v15.common@google/ads/googleads/v15/enums/experiment_metric_direction.proto"�

MetricGoalU
metric (2E.google.ads.googleads.v15.enums.ExperimentMetricEnum.ExperimentMetricj
	direction (2W.google.ads.googleads.v15.enums.ExperimentMetricDirectionEnum.ExperimentMetricDirectionB�
#com.google.ads.googleads.v15.commonBMetricGoalProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v15/common;common�GAA�Google.Ads.GoogleAds.V15.Common�Google\\Ads\\GoogleAds\\V15\\Common�#Google::Ads::GoogleAds::V15::Commonbproto3'
        , true);
        static::$is_initialized = true;
    }
}

