<?php
// GENERATED CODE -- DO NOT EDIT!

namespace WebUser;

/**
 */
class WebUserServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \WebUser\GRPCCreateWebUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCCreateWebUser(\WebUser\GRPCCreateWebUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebUser.WebUserService/DoGRPCCreateWebUser',
        $argument,
        ['\WebUser\GRPCCreateWebUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \WebUser\GRPCReadWebUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCReadWebUser(\WebUser\GRPCReadWebUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebUser.WebUserService/DoGRPCReadWebUser',
        $argument,
        ['\WebUser\GRPCReadWebUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \WebUser\GRPCUpdateWebUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUpdateWebUser(\WebUser\GRPCUpdateWebUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebUser.WebUserService/DoGRPCUpdateWebUser',
        $argument,
        ['\WebUser\GRPCUpdateWebUserResponse', 'decode'],
        $metadata, $options);
    }


    /**
     * @param \WebUser\GRPCDeleteWebUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCDeleteWebUser(\WebUser\GRPCDeleteWebUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebUser.WebUserService/DoGRPCDeleteWebUser',
        $argument,
        ['\WebUser\GRPCDeleteWebUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \WebUser\GRPCUpdateWebUserStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUpdateWebUserStatus(\WebUser\GRPCUpdateWebUserStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebUser.WebUserService/DoGRPCUpdateWebUserStatus',
        $argument,
        ['\WebUser\GRPCUpdateWebUserStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \WebUser\GRPCReadPrivilegeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCReadPrivilege(\WebUser\GRPCReadPrivilegeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/WebUser.WebUserService/DoGRPCReadPrivilege',
        $argument,
        ['\WebUser\GRPCReadPrivilegeResponse', 'decode'],
        $metadata, $options);
    }

}
