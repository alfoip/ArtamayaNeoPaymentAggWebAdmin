<?php
// GENERATED CODE -- DO NOT EDIT!

namespace XXX;

/**
 */
class AuthServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \XXX\AdminLoginRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoAdminLogin(\XXX\AdminLoginRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/XXX.AuthService/DoAdminLogin',
        $argument,
        ['\XXX\AdminLoginResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \XXX\AdminCheckSessionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoAdminCheckSession(\XXX\AdminCheckSessionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/XXX.AuthService/DoAdminCheckSession',
        $argument,
        ['\XXX\AdminCheckSessionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \XXX\AdminLogoutRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoAdminLogout(\XXX\AdminLogoutRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/XXX.AuthService/DoAdminLogout',
        $argument,
        ['\XXX\AdminLogoutResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \XXX\AdminRegisterClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoRegisterNewClientAccount(\XXX\AdminRegisterClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/XXX.AuthService/DoRegisterNewClientAccount',
        $argument,
        ['\XXX\AdminRegisterClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \XXX\AdminRegisterAdminRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoRegisterNewAdminAccount(\XXX\AdminRegisterAdminRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/XXX.AuthService/DoRegisterNewAdminAccount',
        $argument,
        ['\XXX\AdminRegisterAdminResponse', 'decode'],
        $metadata, $options);
    }

}
