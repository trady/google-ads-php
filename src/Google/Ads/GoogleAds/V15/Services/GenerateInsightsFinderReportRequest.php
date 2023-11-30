<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [AudienceInsightsService.GenerateInsightsFinderReport][google.ads.googleads.v15.services.AudienceInsightsService.GenerateInsightsFinderReport].
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.GenerateInsightsFinderReportRequest</code>
 */
class GenerateInsightsFinderReportRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. A baseline audience for this report, typically all people in a
     * region.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BasicInsightsAudience baseline_audience = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $baseline_audience = null;
    /**
     * Required. The specific audience of interest for this report.  The insights
     * in the report will be based on attributes more prevalent in this audience
     * than in the report's baseline audience.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BasicInsightsAudience specific_audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $specific_audience = null;
    /**
     * The name of the customer being planned for.  This is a user-defined value.
     *
     * Generated from protobuf field <code>string customer_insights_group = 4;</code>
     */
    protected $customer_insights_group = '';

    /**
     * @param string                                                   $customerId       Required. The ID of the customer.
     * @param \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $baselineAudience Required. A baseline audience for this report, typically all people in a
     *                                                                                   region.
     * @param \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $specificAudience Required. The specific audience of interest for this report.  The insights
     *                                                                                   in the report will be based on attributes more prevalent in this audience
     *                                                                                   than in the report's baseline audience.
     *
     * @return \Google\Ads\GoogleAds\V15\Services\GenerateInsightsFinderReportRequest
     *
     * @experimental
     */
    public static function build(string $customerId, \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $baselineAudience, \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $specificAudience): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setBaselineAudience($baselineAudience)
            ->setSpecificAudience($specificAudience);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $baseline_audience
     *           Required. A baseline audience for this report, typically all people in a
     *           region.
     *     @type \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $specific_audience
     *           Required. The specific audience of interest for this report.  The insights
     *           in the report will be based on attributes more prevalent in this audience
     *           than in the report's baseline audience.
     *     @type string $customer_insights_group
     *           The name of the customer being planned for.  This is a user-defined value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. A baseline audience for this report, typically all people in a
     * region.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BasicInsightsAudience baseline_audience = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience|null
     */
    public function getBaselineAudience()
    {
        return $this->baseline_audience;
    }

    public function hasBaselineAudience()
    {
        return isset($this->baseline_audience);
    }

    public function clearBaselineAudience()
    {
        unset($this->baseline_audience);
    }

    /**
     * Required. A baseline audience for this report, typically all people in a
     * region.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BasicInsightsAudience baseline_audience = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $var
     * @return $this
     */
    public function setBaselineAudience($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience::class);
        $this->baseline_audience = $var;

        return $this;
    }

    /**
     * Required. The specific audience of interest for this report.  The insights
     * in the report will be based on attributes more prevalent in this audience
     * than in the report's baseline audience.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BasicInsightsAudience specific_audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience|null
     */
    public function getSpecificAudience()
    {
        return $this->specific_audience;
    }

    public function hasSpecificAudience()
    {
        return isset($this->specific_audience);
    }

    public function clearSpecificAudience()
    {
        unset($this->specific_audience);
    }

    /**
     * Required. The specific audience of interest for this report.  The insights
     * in the report will be based on attributes more prevalent in this audience
     * than in the report's baseline audience.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.services.BasicInsightsAudience specific_audience = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience $var
     * @return $this
     */
    public function setSpecificAudience($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V15\Services\BasicInsightsAudience::class);
        $this->specific_audience = $var;

        return $this;
    }

    /**
     * The name of the customer being planned for.  This is a user-defined value.
     *
     * Generated from protobuf field <code>string customer_insights_group = 4;</code>
     * @return string
     */
    public function getCustomerInsightsGroup()
    {
        return $this->customer_insights_group;
    }

    /**
     * The name of the customer being planned for.  This is a user-defined value.
     *
     * Generated from protobuf field <code>string customer_insights_group = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerInsightsGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_insights_group = $var;

        return $this;
    }

}

