<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\InnNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\InnNumberInterface;

/***
 * Интерфейс для форматирования объекта ИНН как в документе.
 */
interface InnNumberFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param InnNumberInterface|InnNumberAggregateInterface $bik
     * @return string
     */
    public function format(InnNumberInterface|InnNumberAggregateInterface $bik ):string;
}