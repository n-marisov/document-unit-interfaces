<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Unit\OkatoInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ОКАТО
 * на основе собственных данных.
 */
interface OkatoAggregateInterface
{
    /***
     * Возвращает/генерирует ОКАТО.
     * Может быть NULL.
     * @return OkatoInterface|null
     */
    public function getOKato():?OkatoInterface;
}