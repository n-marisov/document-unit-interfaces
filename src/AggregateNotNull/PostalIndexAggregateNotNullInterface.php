<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\PostalIndexAggregateInterface;
use Maris\Interfaces\Document\Unit\PostalIndexInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать
 * почтовый индекс
 * на основе собственных данных.
 */
interface PostalIndexAggregateNotNullInterface extends PostalIndexAggregateInterface
{
    /***
     * Возвращает/генерирует почтовый индекс.
     * НЕ может быть NULL.
     * @return PostalIndexInterface
     */
    public function getPostalIndex(): PostalIndexInterface;
}