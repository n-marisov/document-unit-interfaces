<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\PassportSeriesNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\PassportSeriesNumberInterface;

/***
 * Интерфейс для форматирования объекта БИК как в документе.
 */
interface PassportSeriesNumberFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param PassportSeriesNumberInterface|PassportSeriesNumberAggregateInterface $seriesNumber
     * @return string
     */
    public function format( PassportSeriesNumberInterface|PassportSeriesNumberAggregateInterface $seriesNumber ):string;
}