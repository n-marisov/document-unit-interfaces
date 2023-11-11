<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\PaymentAccountBankInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * Расчетный счет банка
 * на основе собственных данных.
 */
interface PaymentAccountBankAggregateInterface
{
    /***
     * Возвращает/генерирует Расчетный счет.
     * Может быть NULL.
     * @return PaymentAccountBankInterface|null
     */
    public function getPaymentAccount():?PaymentAccountBankInterface;
}