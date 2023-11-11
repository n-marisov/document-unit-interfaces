<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\InnNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ИНН
 * на основе собственных данных.
 */
interface InnNumberAggregateInterface
{
    /***
     * Возвращает/генерирует ИНН.
     * Может быть NULL.
     * @return InnNumberInterface|null
     */
    public function getInn():?InnNumberInterface;
}