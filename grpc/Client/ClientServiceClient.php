<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Client;

/**
 */
class ClientServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Client\GRPCCreateClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCCreateClient(\Client\GRPCCreateClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCCreateClient',
        $argument,
        ['\Client\GRPCCreateClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Client\GRPCReadClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCReadClient(\Client\GRPCReadClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCReadClient',
        $argument,
        ['\Client\GRPCReadClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Client\GRPCUpdateClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUpdateClient(\Client\GRPCUpdateClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCUpdateClient',
        $argument,
        ['\Client\GRPCUpdateClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Client\GRPCDeleteClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCDeleteClient(\Client\GRPCDeleteClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCDeleteClient',
        $argument,
        ['\Client\GRPCDeleteClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Client\GRPCUnDeleteClientRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUnDeleteClient(\Client\GRPCUnDeleteClientRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCUnDeleteClient',
        $argument,
        ['\Client\GRPCUnDeleteClientResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Client\GRPCReadCountryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCReadCountry(\Client\GRPCReadCountryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCReadCountry',
        $argument,
        ['\Client\GRPCReadCountryResponse', 'decode'],
        $metadata, $options);
    }

        /**
     * @param \Client\GRPCReadCurrencyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCReadCurrency(\Client\GRPCReadCurrencyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCReadCurrency',
        $argument,
        ['\Client\GRPCReadCurrencyResponse', 'decode'],
        $metadata, $options);
    }


      /**
     * @param \Client\GRPCUpdateClientStatusRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DoGRPCUpdateClientStatus(\Client\GRPCUpdateClientStatusRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/Client.ClientService/DoGRPCUpdateClientStatus',
        $argument,
        ['\Client\GRPCUpdateClientStatusResponse', 'decode'],
        $metadata, $options);
    }

}
