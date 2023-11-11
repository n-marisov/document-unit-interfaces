<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\KladrCodeInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать КЛАДР код
 * на основе собственных данных.
 */
interface KladrCodeAggregateInterface
{
    /***
     * Возвращает/генерирует КЛАДР код.
     * Может быть NULL.
     * @return KladrCodeInterface|null
     */
    public function getKladrDode():?KladrCodeInterface;
}