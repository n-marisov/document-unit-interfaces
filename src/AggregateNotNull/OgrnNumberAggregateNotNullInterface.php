<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\OgrnNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\OgrnNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ОРГН
 * на основе собственных данных.
 */
interface OgrnNumberAggregateNotNullInterface extends OgrnNumberAggregateInterface
{
    /***
     * Возвращает/генерирует ОГРН.
     * НЕ может быть NULL.
     * @return OgrnNumberInterface
     */
    public function getBik(): OgrnNumberInterface;
}