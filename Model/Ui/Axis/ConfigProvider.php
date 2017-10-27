<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Ccmt\Payment\Model\Ui\Axis;

use Ccmt\Payment\Gateway\Config\Axis\Config;
use Magento\Checkout\Model\ConfigProviderInterface;
use Ccmt\Payment\Model\Adapter\Axis\AxisBankAdapter;

/**
 * Class ConfigProvider
 */
final class ConfigProvider implements ConfigProviderInterface
{
   const AXIS_CODE = 'axis';

   /**
     * @var Config
     */
   private $config;


   /**
    * @var AxisBankAdapter
    */
   private $adapter;

   public function __construct(
        Config $config,
        AxisBankAdapter $adapter
    ) {
        $this->config = $config;
        $this->adapter = $adapter;
    }



    public function getConfig()
    {
        return [
            'payment' => [
                self::AXIS_CODE => [
                    'isActive' => $this->config->isActive(),
                   // 'clientToken' => $this->getClientToken(),
                   // 'ccTypesMapper' => $this->config->getCctypesMapper(),
                   // 'sdkUrl' => $this->config->getSdkUrl(),
                    //'countrySpecificCardTypes' => $this->config->getCountrySpecificCardTypeConfig(),
                   // 'availableCardTypes' => $this->config->getAvailableCardTypes(),
                   // 'useCvv' => $this->config->isCvvEnabled(),
                    'environment' => $this->config->getEnvironment(),
                   // 'kountMerchantId' => $this->config->getKountMerchantId(),
                   // 'hasFraudProtection' => $this->config->hasFraudProtection(),
                    'merchantId' => $this->config->getMerchantId(),
                   // 'ccVaultCode' => self::CC_VAULT_CODE
                ],
               
            ]
        ];
    }

    /**
     * Generate a new client token if necessary
     * @return string
     */
   /* public function getClientToken()
    {
        if (empty($this->clientToken)) {
            $params = [];

            $merchantAccountId = $this->config->getMerchantAccountId();
            if (!empty($merchantAccountId)) {
                $params[PaymentDataBuilder::MERCHANT_ACCOUNT_ID] = $merchantAccountId;
            }

            $this->clientToken = $this->adapter->generate($params);
        }

        return $this->clientToken;
    }*/


}
