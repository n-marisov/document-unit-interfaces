<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\KppAggregateInterface;
use Maris\Interfaces\Document\Model\KppInterface;

/***
 * Интерфейс для форматирования объекта КПП как в документе.
 */
interface KppFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param KppInterface|KppAggregateInterface $bik
     * @return string
     */
    public function format( KppInterface|KppAggregateInterface $bik ):string;
}