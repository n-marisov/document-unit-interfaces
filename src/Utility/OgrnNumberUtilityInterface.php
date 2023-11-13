<?php

namespace Maris\Interfaces\Document\Utility;


use DateTimeInterface;
use Maris\Interfaces\Document\AggregateNotNull\OgrnNumberAggregateNotNullInterface;
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

    /***
     * Указывает, является ли ОГРН -> ОГРНИП
     * @param OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn
     * @return bool
     */
    public function isIndividual( OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn ):bool;

    /***
     * Указывает, является ли ОГРН -> ОГРНЮЛ
     * @param OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn
     * @return bool
     */
    public function isLegal( OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn ):bool;

    /***
     * Возвращает год внесения записи в государственный реестр.
     * @param OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn
     * @return DateTimeInterface
     */
    public function yearEntry( OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn ): DateTimeInterface;

    /***
     * Возвращает код субъекта РФ в котором зарегистрирована ОГРН.
     * Первые 2 цифры
     * @param OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn
     * @return string
     */
    public function regionCode( OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn ):string;

    /**
     * Возвращает код подразделения ФНС, в котором произвели учет.
     * Третья и четвертая цифра
     * Не может определить ФНС для ИП.
     * @param OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn
     * @return int|false
     */
    public function fnsCode( OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn ):string|false;

    /***
     * Номер записи в течение года.
     * Возвращает значение int потому что
     * порядковый номер записи интерпретируется
     * как число и с ним возможны сравнения на  (>|<|=).
     * @param OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn
     * @return int
     */
    public function position( OgrnNumberInterface|OgrnNumberAggregateNotNullInterface $ogrn ):int;
}