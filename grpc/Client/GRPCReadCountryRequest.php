<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: client.proto

namespace Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Client.GRPCReadCountryRequest</code>
 */
class GRPCReadCountryRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string requestemail = 1;</code>
     */
    protected $requestemail = '';
    /**
     * Generated from protobuf field <code>string requestsessionid = 2;</code>
     */
    protected $requestsessionid = '';
    /**
     * Generated from protobuf field <code>string requestremoteipaddress = 3;</code>
     */
    protected $requestremoteipaddress = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $requestemail
     *     @type string $requestsessionid
     *     @type string $requestremoteipaddress
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string requestemail = 1;</code>
     * @return string
     */
    public function getRequestemail()
    {
        return $this->requestemail;
    }

    /**
     * Generated from protobuf field <code>string requestemail = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string requestsessionid = 2;</code>
     * @return string
     */
    public function getRequestsessionid()
    {
        return $this->requestsessionid;
    }

    /**
     * Generated from protobuf field <code>string requestsessionid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestsessionid($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestsessionid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string requestremoteipaddress = 3;</code>
     * @return string
     */
    public function getRequestremoteipaddress()
    {
        return $this->requestremoteipaddress;
    }

    /**
     * Generated from protobuf field <code>string requestremoteipaddress = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestremoteipaddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->requestremoteipaddress = $var;

        return $this;
    }

}

