<?php

namespace Maris\Interfaces\Document\Utility;

use Maris\Interfaces\Document\Formatter\BikFormatterInterface;
use Maris\Interfaces\Document\Formatter\PostalIndexFormatterInterface;
use Maris\Interfaces\Document\Model\BikInterface;
use Maris\Interfaces\Document\Model\PostalIndexInterface;
use Maris\Interfaces\Document\UnitUtilityInterface;
use Stringable;

/**
 * Интерфейс утилиты для работы с почтовым индексом.
 */
interface PostalIndexUtilityInterface extends UnitUtilityInterface, PostalIndexFormatterInterface
{
    /**
     * @inheritDoc
     * @return BikInterface|null
     */
    public function create(Stringable|string $number): ?PostalIndexInterface;
}