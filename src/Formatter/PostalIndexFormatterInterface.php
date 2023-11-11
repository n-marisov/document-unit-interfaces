<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\PostalIndexAggregateInterface;
use Maris\Interfaces\Document\Model\PostalIndexInterface;

/***
 * Интерфейс для форматирования объекта почтовый индекс как в документе.
 */
interface PostalIndexFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param PostalIndexInterface|PostalIndexAggregateInterface $postalIndex
     * @return string
     */
    public function format( PostalIndexInterface|PostalIndexAggregateInterface $postalIndex ):string;
}