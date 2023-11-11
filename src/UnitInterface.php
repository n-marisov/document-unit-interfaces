<?php

namespace Maris\Interfaces\Document;

use Stringable;

/**
 * Реализует собой объект строкового представления номера документа.
 * Служит для однозначного определения принадлежности стоки номеру документа.
 */
interface UnitInterface extends Stringable
{
    /***
     * Возвращает строковое представление номера документа.
     * Не обязан быть форматирован как в документе.
     * @return string
     */
    public function __toString(): string;
}