<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\AggregateNotNull\InnNumberAggregateNotNullInterface;
use Maris\Interfaces\Document\Formatter\InnNumberFormatterInterface;
use Maris\Interfaces\Document\Model\InnNumberInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с ИНН.
 */
interface InnNumberUtilityInterface extends UnitUtilityInterface, InnNumberFormatterInterface
{
    /**
     * @inheritDoc
     * @return InnNumberInterface|null
     */
    public function create(Stringable|string $number): ?InnNumberInterface;

    /***
     * Указывает что ИНН принадлежит физическому лицу или ИП.
     * @param InnNumberInterface|InnNumberAggregateNotNullInterface $inn
     * @return bool
     */
    public function isPerson( InnNumberInterface|InnNumberAggregateNotNullInterface $inn ):bool;

    /***
     * Указывает что ИНН принадлежит организации.
     * @param InnNumberInterface|InnNumberAggregateNotNullInterface $inn
     * @return bool
     */
    public function isLegal( InnNumberInterface|InnNumberAggregateNotNullInterface $inn ):bool;

    /***
     * Указывает что ИНН принадлежит субъекту Российской организации.
     * Иными словами принадлежит не зарубежной организации.
     * Возвращает правильный результат для Юр лиц получивших
     * ИНН не раньше 01.01.2005г.
     * @param InnNumberInterface|InnNumberAggregateNotNullInterface $inn
     * @return bool
     */
    public function isRussian(  InnNumberInterface|InnNumberAggregateNotNullInterface $inn ):bool;

    /**
     * Возвращает код подразделение ФНС выдавшего ИНН.
     * Первые четыре цифры.
     * Для иностранного юр лица "9909".
     * @param InnNumberInterface|InnNumberAggregateNotNullInterface $inn
     * @return string
     */
    public function fnsCode( InnNumberInterface|InnNumberAggregateNotNullInterface $inn ):string;

    /***
     * Возвращает порядковый номер постановки на учет.
     * Для ФИ и ИП с 5 по 10 включительно цифры.
     * Для Юр лица с 5 по 9 включительно цифры.
     * @param InnNumberInterface|InnNumberAggregateNotNullInterface $inn
     * @return string
     */
    public function position( InnNumberInterface|InnNumberAggregateNotNullInterface $inn ):string;
}