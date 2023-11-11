<?php

namespace Maris\Interfaces\Document\Utility;


use Maris\Interfaces\Document\Formatter\OgrnNumberFormatterInterface;
use Maris\Interfaces\Document\Model\OgrnNumberInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с ОГРН.
 */
interface OgrnNumberUtilityInterface extends UnitUtilityInterface, OgrnNumberFormatterInterface
{
    /***
     * @inheritDoc
     * @return OgrnNumberInterface|null
     */
    public function create(Stringable|string $number): ?OgrnNumberInterface;
}