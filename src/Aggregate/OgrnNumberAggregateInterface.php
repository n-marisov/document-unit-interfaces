<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\OgrnNumberInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать БИК
 * на основе собственных данных.
 */
interface OgrnNumberAggregateInterface
{
    /***
     * Возвращает/генерирует БИК.
     * Может быть NULL.
     * @return OgrnNumberInterface|null
     */
    public function getOgrn():?OgrnNumberInterface;
}