<?php

namespace Maris\Interfaces\Document;

use Stringable;

/***
 * Парсер для поиска номеров документов в строке.
 */
interface UnitParserInterface
{
    /***
     * Парсит строку с номерами документов.
     * Возвращает лист со всеми найденными номерами объектов.
     * @param string|Stringable $parsed
     * @return iterable<UnitInterface>
     */
    public function parse( string|Stringable $parsed ):iterable;
}