<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\OgrnNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\OgrnNumberInterface;

/***
 * Интерфейс для форматирования объекта ОГРН как в документе.
 */
interface OgrnNumberFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param OgrnNumberInterface|OgrnNumberAggregateInterface $bik
     * @return string
     */
    public function format(OgrnNumberInterface|OgrnNumberAggregateInterface $bik ):string;
}