<?php

namespace Maris\Interfaces\Document\AggregateNotNull;

use Maris\Interfaces\Document\Aggregate\InnNumberAggregateInterface;
use Maris\Interfaces\Document\Unit\InnNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ИНН
 * на основе собственных данных.
 */
interface InnNumberAggregateNotNullInterface extends InnNumberAggregateInterface
{
    /***
     * Возвращает/генерирует ИНН.
     * НЕ может быть NULL.
     * @return InnNumberInterface
     */
    public function getBik(): InnNumberInterface;
}