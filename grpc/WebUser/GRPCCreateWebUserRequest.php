<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: webuser.proto

namespace WebUser;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>WebUser.GRPCCreateWebUserRequest</code>
 */
class GRPCCreateWebUserRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string clientid = 4;</code>
     */
    protected $clientid = '';
    /**
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string email = 6;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string password = 7;</code>
     */
    protected $password = '';
    /**
     * Generated from protobuf field <code>string privilege = 8;</code>
     */
    protected $privilege = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $requestemail
     *     @type string $requestsessionid
     *     @type string $requestremoteipaddress
     *     @type string $clientid
     *     @type string $name
     *     @type string $email
     *     @type string $password
     *     @type string $privilege
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Webuser::initOnce();
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
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 6;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 7;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privilege = 8;</code>
     * @return string
     */
    public function getPrivilege()
    {
        return $this->privilege;
    }

    /**
     * Generated from protobuf field <code>string privilege = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivilege($var)
    {
        GPBUtil::checkString($var, True);
        $this->privilege = $var;

        return $this;
    }

}

