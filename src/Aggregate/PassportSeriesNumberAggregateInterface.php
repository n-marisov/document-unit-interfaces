<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\BikInterface;
use Maris\Interfaces\Document\Model\PassportSeriesNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * серию и номер паспорта
 * на основе собственных данных.
 */
interface PassportSeriesNumberAggregateInterface
{
    /***
     * Возвращает/генерирует серию и номер паспорта.
     * Может быть NULL.
     * @return BikInterface|null
     */
    public function getSeriesNumberPassport():?PassportSeriesNumberInterface;
}