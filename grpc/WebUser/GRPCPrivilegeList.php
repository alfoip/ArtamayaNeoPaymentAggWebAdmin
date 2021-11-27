<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: webuser.proto

namespace WebUser;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>WebUser.GRPCPrivilegeList</code>
 */
class GRPCPrivilegeList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string privilegeid = 1;</code>
     */
    protected $privilegeid = '';
    /**
     * Generated from protobuf field <code>string privilegedescription = 2;</code>
     */
    protected $privilegedescription = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $privilegeid
     *     @type string $privilegedescription
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Webuser::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string privilegeid = 1;</code>
     * @return string
     */
    public function getPrivilegeid()
    {
        return $this->privilegeid;
    }

    /**
     * Generated from protobuf field <code>string privilegeid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivilegeid($var)
    {
        GPBUtil::checkString($var, True);
        $this->privilegeid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string privilegedescription = 2;</code>
     * @return string
     */
    public function getPrivilegedescription()
    {
        return $this->privilegedescription;
    }

    /**
     * Generated from protobuf field <code>string privilegedescription = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivilegedescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->privilegedescription = $var;

        return $this;
    }

}
