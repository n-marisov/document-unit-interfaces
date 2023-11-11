<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\OkatoAggregateInterface;
use Maris\Interfaces\Document\Unit\OkatoInterface;

/***
 * Интерфейс для форматирования объекта ОКАТО как в документе.
 */
interface OkatoFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param OkatoInterface|OkatoAggregateInterface $okato
     * @return string
     */
    public function format( OkatoInterface|OkatoAggregateInterface $okato ):string;
}