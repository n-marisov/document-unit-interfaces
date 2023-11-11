<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\PassportDivisionCodeFormatterInterface;
use Maris\Interfaces\Document\Model\PassportDivisionCodeInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с БИК.
 */
interface PassportDivisionCodeUtilityInterface extends UnitUtilityInterface, PassportDivisionCodeFormatterInterface
{
    /**
     * @inheritDoc
     * @return PassportDivisionCodeInterface|null
     */
    public function create(Stringable|string $number): ?PassportDivisionCodeInterface;
}