### Набор интерфейсов для работы с номерами документов РФ.


#### Основные понятия

- Model: Объект номера документа, каждый. Должен имплементировать UnitInterface.
- Factory: Фабрика для создания объекта номера.  Должен имплементировать UnitFactoryInterface.
- Parser: Парсер для поиска номеров в строке. Должен имплементировать UnitParserInterface.
- Formatter: Форматирует объект номера как в документе. Должен имплементировать UnitFormatterInterface.
- Utility: Утилита для работы с номером. Является сразу Factory, Parser, Formatter. Также каждая утилита обладает дополнительными методами для работы со своей Unit.

### Model::name Название модели, например интерфейс для Model::name === InnNumber будет InnNumberInterface

#### Каждый Unit имеет:

- Агрегатор {Model::name}AggregateInterface
- Агрегатор не способный возвращать NULL {Unit::name}AggregateNotNullInterface
- Собственный форматер {Unit::name}FormatterInterface
- Собственную утилиту {Unit::name}UtilityInterface


#### Список Unit:

- InnNumberInterface: Интерфейс номера ИНН.
- OgrnNumberInterface: Интерфейс номера ОГРН.
- KppInterface: Интерфейс номера КПП.
- BikInterface: Интерфейс номера БИК.
- FiasCodeInterface: Интерфейс ФИАС кода.
- KladrCodeInterface: Интерфейс КЛАДР кода.
- OkatoInterface: Интерфейс ОКАТО.
- OktmoInterface: Интерфейс ОКТМО.
- OkvedCodeInterface: Интерфейс кода ОКВЕД.
- SnilsNumberInterface: Интерфейс номера СНИЛС.
- IsoCodeInterface: ISO-код страны/региона.
- PostalIndex: Почтовый индекс.
- CorrespondentAccountBankInterface: Корреспондентский счет банка.
- PaymentAccountBankInterface: Расчетный счет в банке.

#### Интерфейс {Unit::name}AggregateNotNullInterface импортируется в модель, что бы запретить возврат NULL в тех случаях когда модель обязана иметь значение.
