<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\BikInterface;
use Maris\Interfaces\Document\Model\PassportDivisionCodeInterface;
use Maris\Interfaces\Document\Model\PassportSeriesNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * код подразделения организации выдавшей паспорт
 * на основе собственных данных.
 */
interface PassportDivisionCodeAggregateInterface
{
    /***
     * Возвращает/генерирует серию и номер паспорта.
     * Может быть NULL.
     * @return BikInterface|null
     */
    public function getDivisionCodePassport():?PassportDivisionCodeInterface;
}