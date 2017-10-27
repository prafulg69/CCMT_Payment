<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Ccmt\Payment\Gateway\Request\Axis;

use Magento\Payment\Gateway\Request\BuilderInterface;
use Ccmt\Payment\Gateway\Config\Axis\Config;

/**
 * Class DescriptorDataBuilder
 */
class DescriptorDataBuilder implements BuilderInterface
{
    /**
     * @var string
     */
    private static $descriptorKey = 'descriptor';

    /**
     * @var Config
     */
    private $config;

    /**
     * DescriptorDataBuilder constructor.
     * @param Config $config
     */
    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * @inheritdoc
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function build(array $buildSubject)
    {
        $values = $this->config->getDynamicDescriptors();
        return !empty($values) ? [self::$descriptorKey => $values] : [];
    }
}
