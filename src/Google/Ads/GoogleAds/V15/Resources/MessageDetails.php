<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/local_services_lead_conversation.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents details of text message in case of email, message or SMS.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.MessageDetails</code>
 */
class MessageDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Textual content of the message.
     *
     * Generated from protobuf field <code>string text = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $text = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $text
     *           Output only. Textual content of the message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\LocalServicesLeadConversation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Textual content of the message.
     *
     * Generated from protobuf field <code>string text = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Output only. Textual content of the message.
     *
     * Generated from protobuf field <code>string text = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

}
