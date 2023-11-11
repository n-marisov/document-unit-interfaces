<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\CorrespondentAccountBankAggregateInterface;
use Maris\Interfaces\Document\Unit\CorrespondentAccountBankInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface CorrespondentAccountBankAggregateNotNullInterface extends CorrespondentAccountBankAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * НЕ может быть NULL.
     * @return CorrespondentAccountBankInterface
     */
    public function getCorrespondentAccount(): CorrespondentAccountBankInterface;
}