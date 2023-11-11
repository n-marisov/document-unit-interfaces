<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\PaymentAccountBankAggregateInterface;
use Maris\Interfaces\Document\Model\PaymentAccountBankInterface;

/***
 * Интерфейс для форматирования объекта Расчетный счет как в документе.
 */
interface PaymentAccountBankFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param PaymentAccountBankInterface|PaymentAccountBankAggregateInterface $correspondentAccount
     * @return string
     */
    public function format( PaymentAccountBankInterface|PaymentAccountBankAggregateInterface $correspondentAccount ):string;
}