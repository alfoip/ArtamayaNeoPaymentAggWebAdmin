<?php
// GENERATED CODE -- DO NOT EDIT!

namespace UserAPI;

/**
 */
class UserAPIServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \UserAPI\GRPCCreateUserAPIRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCCreateUserAPI(\UserAPI\GRPCCreateUserAPIRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserAPI.UserAPIService/DoGRPCCreateUserAPI',
        $argument,
        ['\UserAPI\GRPCCreateUserAPIResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \UserAPI\ReadUserAPIRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCReadUserAPI(\UserAPI\GRPCReadUserAPIRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserAPI.UserAPIService/DoGRPCReadUserAPI',
        $argument,
        ['\UserAPI\GRPCReadUserAPIResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \UserAPI\GRPCUpdateUserAPIRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUpdateUserAPI(\UserAPI\GRPCUpdateUserAPIRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserAPI.UserAPIService/DoGRPCUpdateUserAPI',
        $argument,
        ['\UserAPI\GRPCUpdateUserAPIResponse', 'decode'],
        $metadata, $options);
    }


    /**
     * @param \UserAPI\GRPCDeleteUserAPIRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCDeleteUserAPI(\UserAPI\GRPCDeleteUserAPIRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserAPI.UserAPIService/DoGRPCDeleteUserAPI',
        $argument,
        ['\UserAPI\GRPCDeleteUserAPIResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \UserAPI\GRPCUpdateUserAPIStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUpdateUserAPIStatus(\UserAPI\GRPCUpdateUserAPIStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserAPI.UserAPIService/DoGRPCUpdateUserAPIStatus',
        $argument,
        ['\UserAPI\GRPCUpdateUserAPIStatusResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \UserAPI\GRPCResetUserAPIRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCResetUserAPI(\UserAPI\GRPCResetUserAPIRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/UserAPI.UserAPIService/DoGRPCResetUserAPI',
        $argument,
        ['\UserAPI\GRPCResetUserAPIResponse', 'decode'],
        $metadata, $options);
    }

}
