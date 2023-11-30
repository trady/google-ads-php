<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/conversion_action.proto

namespace Google\Ads\GoogleAds\V15\Resources\ConversionAction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings related to a third party app analytics conversion action.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.ConversionAction.ThirdPartyAppAnalyticsSettings</code>
 */
class ThirdPartyAppAnalyticsSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The event name of a third-party app analytics conversion.
     *
     * Generated from protobuf field <code>optional string event_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $event_name = null;
    /**
     * Output only. Name of the third-party app analytics provider.
     *
     * Generated from protobuf field <code>string provider_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $provider_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_name
     *           Output only. The event name of a third-party app analytics conversion.
     *     @type string $provider_name
     *           Output only. Name of the third-party app analytics provider.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\ConversionAction::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The event name of a third-party app analytics conversion.
     *
     * Generated from protobuf field <code>optional string event_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getEventName()
    {
        return isset($this->event_name) ? $this->event_name : '';
    }

    public function hasEventName()
    {
        return isset($this->event_name);
    }

    public function clearEventName()
    {
        unset($this->event_name);
    }

    /**
     * Output only. The event name of a third-party app analytics conversion.
     *
     * Generated from protobuf field <code>optional string event_name = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setEventName($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_name = $var;

        return $this;
    }

    /**
     * Output only. Name of the third-party app analytics provider.
     *
     * Generated from protobuf field <code>string provider_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProviderName()
    {
        return $this->provider_name;
    }

    /**
     * Output only. Name of the third-party app analytics provider.
     *
     * Generated from protobuf field <code>string provider_name = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProviderName($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider_name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ThirdPartyAppAnalyticsSettings::class, \Google\Ads\GoogleAds\V15\Resources\ConversionAction_ThirdPartyAppAnalyticsSettings::class);

