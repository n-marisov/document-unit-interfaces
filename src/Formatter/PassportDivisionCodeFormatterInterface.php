<?php

namespace Maris\Interfaces\Document\Formatter;

use Maris\Interfaces\Document\Aggregate\PassportDivisionCodeAggregateInterface;
use Maris\Interfaces\Document\Unit\PassportDivisionCodeInterface;

/***
 * Интерфейс для форматирования объекта БИК как в документе.
 */
interface PassportDivisionCodeFormatterInterface
{
    /***
     * Форматирует объект или его агрегатор как в документе.
     * @param PassportDivisionCodeInterface|PassportDivisionCodeAggregateInterface $divisionCode
     * @return string
     */
    public function format( PassportDivisionCodeInterface|PassportDivisionCodeAggregateInterface $divisionCode ):string;
}