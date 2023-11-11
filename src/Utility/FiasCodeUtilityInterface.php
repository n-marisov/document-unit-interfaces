<?php

namespace Maris\Interfaces\Document\Utility;


use Maris\Interfaces\Document\Formatter\FiasCodeFormatterInterface;
use Maris\Interfaces\Document\Model\FiasCodeInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с БИК.
 */
interface FiasCodeUtilityInterface extends UnitUtilityInterface, FiasCodeFormatterInterface
{
    /**
     * @inheritDoc
     * @return FiasCodeInterface|null
     */
    public function create(Stringable|string $number): ?FiasCodeInterface;
}