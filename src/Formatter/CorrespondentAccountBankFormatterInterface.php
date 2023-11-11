<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\CorrespondentAccountBankAggregateInterface;
use Maris\Interfaces\Document\Unit\CorrespondentAccountBankInterface;

/***
 * Интерфейс для форматирования объекта БИК как в документе.
 */
interface CorrespondentAccountBankFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param CorrespondentAccountBankInterface|CorrespondentAccountBankAggregateInterface $correspondentAccount
     * @return string
     */
    public function format( CorrespondentAccountBankInterface|CorrespondentAccountBankAggregateInterface $correspondentAccount ):string;
}