<?php

namespace Maris\Interfaces\Document;

/***
 * Утилита для работы с номером документа.
 * Является одновременно фабрикой валидатором и парсером объекта.
 */
interface UnitUtilityInterface extends UnitFactoryInterface , UnitParserInterface, UnitValidatorInterface
{

}