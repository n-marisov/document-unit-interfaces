<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\CorrespondentAccountBankInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * Корреспондентский счет банка
 * на основе собственных данных.
 */
interface CorrespondentAccountBankAggregateInterface
{
    /***
     * Возвращает/генерирует Корреспондентский счет.
     * Может быть NULL.
     * @return CorrespondentAccountBankInterface|null
     */
    public function getCorrespondentAccount():?CorrespondentAccountBankInterface;
}