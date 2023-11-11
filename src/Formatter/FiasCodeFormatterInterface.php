<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\FiasCodeAggregateInterface;
use Maris\Interfaces\Document\Model\FiasCodeInterface;

/***
 * Интерфейс для форматирования объекта ФИАС как в документе.
 */
interface FiasCodeFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param FiasCodeInterface|FiasCodeAggregateInterface $fiasCode
     * @return string
     */
    public function format( FiasCodeInterface|FiasCodeAggregateInterface $fiasCode ):string;
}