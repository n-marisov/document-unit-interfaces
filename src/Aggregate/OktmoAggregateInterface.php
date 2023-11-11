<?php

namespace Maris\Interfaces\Document\Aggregate;

use Maris\Interfaces\Document\Model\OktmoInterface;

/***
 * Интерфейс объекта которой может хранить или генерировать ОКТМО
 * на основе собственных данных.
 */
interface OktmoAggregateInterface
{
    /***
     * Возвращает/генерирует ОКТМО.
     * Может быть NULL.
     * @return OktmoInterface|null
     */
    public function getOktmo():?OktmoInterface;
}