<?php

namespace Maris\Interfaces\Document;

use Stringable;

/***
 * Интерфейс фабрики для создания документа/номера документа.
 */
interface UnitFactoryInterface
{
    /***
     * Принимает строковое представление номера документа
     * и создает объект этого документа.
     * В случае невозможности создания номера документа возвращает NULL.
     * @param string|Stringable $number
     * @return UnitInterface|null
     */
    public function create( string|Stringable $number ):?UnitInterface;
}