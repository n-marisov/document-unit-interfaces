<?php

namespace Maris\Interfaces\Document;

use Stringable;

/**
 * Валидатор для номера документа.
 */
interface UnitValidatorInterface
{

    /**
     * Проверяет номер документа на валидность.
     * Номер считается валидным если он форматирован как
     * в документе или как значение соответствующего объекта.
     * @param string|Stringable $number
     * @return bool
     */
    public function valid( string|Stringable $number ):bool;
}