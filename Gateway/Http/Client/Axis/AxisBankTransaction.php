<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Ccmt\Payment\Gateway\Http\Client\Axis;

use Ccmt\Payment\Model\Adapter\Axis\AxisBankAdapter;
use Ccmt\Payment\Gateway\Http\Client\AbstractTransaction;

/**
 * Class TransactionSale
 */
class AxisBankTransaction extends AbstractTransaction 
{
    const SUCCESS = 1;
    const FAILURE = 0;
		// *
  //    * @var AxisBankAdapter
     
    protected $adapter;

    /**
     * @inheritdoc
     */
    protected function process(array $data)
    {
        return $this->adapter->processRequest($data);
    }
}
