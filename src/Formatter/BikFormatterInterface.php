<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\BikAggregateInterface;
use Maris\Interfaces\Document\Model\BikInterface;

/***
 * Интерфейс для форматирования объекта БИК как в документе.
 */
interface BikFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param BikInterface|BikAggregateInterface $bik
     * @return string
     */
    public function format( BikInterface|BikAggregateInterface $bik ):string;
}