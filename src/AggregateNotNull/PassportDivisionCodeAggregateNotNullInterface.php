<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\PassportDivisionCodeAggregateInterface;
use Maris\Interfaces\Document\Model\PassportDivisionCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * код подразделения организации выдавшей паспорт
 * на основе собственных данных.
 */
interface PassportDivisionCodeAggregateNotNullInterface extends PassportDivisionCodeAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * НЕ может быть NULL.
     * @return PassportDivisionCodeInterface
     */
    public function getDivisionCodePassport(): PassportDivisionCodeInterface;
}