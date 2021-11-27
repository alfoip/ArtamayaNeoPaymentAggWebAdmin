<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: client.proto

namespace Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Client.GRPCCreateClientResponse</code>
 */
class GRPCCreateClientResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string responseemail = 1;</code>
     */
    protected $responseemail = '';
    /**
     * Generated from protobuf field <code>string responsesessionid = 2;</code>
     */
    protected $responsesessionid = '';
    /**
     * Generated from protobuf field <code>string responseremoteipaddress = 3;</code>
     */
    protected $responseremoteipaddress = '';
    /**
     * Generated from protobuf field <code>string clientid = 4;</code>
     */
    protected $clientid = '';
    /**
     * Generated from protobuf field <code>string clientname = 5;</code>
     */
    protected $clientname = '';
    /**
     * Generated from protobuf field <code>string clientaddress = 6;</code>
     */
    protected $clientaddress = '';
    /**
     * Generated from protobuf field <code>string clientregion = 7;</code>
     */
    protected $clientregion = '';
    /**
     * Generated from protobuf field <code>string clientcountryid = 8;</code>
     */
    protected $clientcountryid = '';
    /**
     * Generated from protobuf field <code>string clientemail = 9;</code>
     */
    protected $clientemail = '';
    /**
     * Generated from protobuf field <code>string clientphone = 10;</code>
     */
    protected $clientphone = '';
    /**
     * Generated from protobuf field <code>string clientcurrency = 11;</code>
     */
    protected $clientcurrency = '';
    /**
     * Generated from protobuf field <code>string picname = 12;</code>
     */
    protected $picname = '';
    /**
     * Generated from protobuf field <code>string picemail = 13;</code>
     */
    protected $picemail = '';
    /**
     * Generated from protobuf field <code>string picphone = 14;</code>
     */
    protected $picphone = '';
    /**
     * Generated from protobuf field <code>bool isactive = 15;</code>
     */
    protected $isactive = false;
    /**
     * Generated from protobuf field <code>string status = 16;</code>
     */
    protected $status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $responseemail
     *     @type string $responsesessionid
     *     @type string $responseremoteipaddress
     *     @type string $clientid
     *     @type string $clientname
     *     @type string $clientaddress
     *     @type string $clientregion
     *     @type string $clientcountryid
     *     @type string $clientemail
     *     @type string $clientphone
     *     @type string $clientcurrency
     *     @type string $picname
     *     @type string $picemail
     *     @type string $picphone
     *     @type bool $isactive
     *     @type string $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Client::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string responseemail = 1;</code>
     * @return string
     */
    public function getResponseemail()
    {
        return $this->responseemail;
    }

    /**
     * Generated from protobuf field <code>string responseemail = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResponseemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->responseemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string responsesessionid = 2;</code>
     * @return string
     */
    public function getResponsesessionid()
    {
        return $this->responsesessionid;
    }

    /**
     * Generated from protobuf field <code>string responsesessionid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setResponsesessionid($var)
    {
        GPBUtil::checkString($var, True);
        $this->responsesessionid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string responseremoteipaddress = 3;</code>
     * @return string
     */
    public function getResponseremoteipaddress()
    {
        return $this->responseremoteipaddress;
    }

    /**
     * Generated from protobuf field <code>string responseremoteipaddress = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setResponseremoteipaddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->responseremoteipaddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientid = 4;</code>
     * @return string
     */
    public function getClientid()
    {
        return $this->clientid;
    }

    /**
     * Generated from protobuf field <code>string clientid = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClientid($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientname = 5;</code>
     * @return string
     */
    public function getClientname()
    {
        return $this->clientname;
    }

    /**
     * Generated from protobuf field <code>string clientname = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setClientname($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientaddress = 6;</code>
     * @return string
     */
    public function getClientaddress()
    {
        return $this->clientaddress;
    }

    /**
     * Generated from protobuf field <code>string clientaddress = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setClientaddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientaddress = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientregion = 7;</code>
     * @return string
     */
    public function getClientregion()
    {
        return $this->clientregion;
    }

    /**
     * Generated from protobuf field <code>string clientregion = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setClientregion($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientregion = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientcountryid = 8;</code>
     * @return string
     */
    public function getClientcountryid()
    {
        return $this->clientcountryid;
    }

    /**
     * Generated from protobuf field <code>string clientcountryid = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setClientcountryid($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientcountryid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientemail = 9;</code>
     * @return string
     */
    public function getClientemail()
    {
        return $this->clientemail;
    }

    /**
     * Generated from protobuf field <code>string clientemail = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setClientemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientphone = 10;</code>
     * @return string
     */
    public function getClientphone()
    {
        return $this->clientphone;
    }

    /**
     * Generated from protobuf field <code>string clientphone = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setClientphone($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientphone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string clientcurrency = 11;</code>
     * @return string
     */
    public function getClientcurrency()
    {
        return $this->clientcurrency;
    }

    /**
     * Generated from protobuf field <code>string clientcurrency = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setClientcurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->clientcurrency = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picname = 12;</code>
     * @return string
     */
    public function getPicname()
    {
        return $this->picname;
    }

    /**
     * Generated from protobuf field <code>string picname = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPicname($var)
    {
        GPBUtil::checkString($var, True);
        $this->picname = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picemail = 13;</code>
     * @return string
     */
    public function getPicemail()
    {
        return $this->picemail;
    }

    /**
     * Generated from protobuf field <code>string picemail = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setPicemail($var)
    {
        GPBUtil::checkString($var, True);
        $this->picemail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string picphone = 14;</code>
     * @return string
     */
    public function getPicphone()
    {
        return $this->picphone;
    }

    /**
     * Generated from protobuf field <code>string picphone = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setPicphone($var)
    {
        GPBUtil::checkString($var, True);
        $this->picphone = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool isactive = 15;</code>
     * @return bool
     */
    public function getIsactive()
    {
        return $this->isactive;
    }

    /**
     * Generated from protobuf field <code>bool isactive = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsactive($var)
    {
        GPBUtil::checkBool($var);
        $this->isactive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 16;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}

