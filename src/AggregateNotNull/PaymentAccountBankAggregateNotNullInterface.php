<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\PaymentAccountBankAggregateInterface;
use Maris\Interfaces\Document\Unit\PaymentAccountBankInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 *  Расчетный счет банка
 * на основе собственных данных.
 */
interface PaymentAccountBankAggregateNotNullInterface extends PaymentAccountBankAggregateInterface
{
    /***
     * Возвращает/генерирует Расчетный счет банка.
     * НЕ может быть NULL.
     * @return PaymentAccountBankInterface
     */
    public function getPaymentAccount(): PaymentAccountBankInterface;
}