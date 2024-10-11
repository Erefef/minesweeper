# Проект "Сапер" (Minesweeper)

## Описание проекта

Проект включает разработку игры "Сапер" (Minesweeper) с использованием реляционной базы данных для сохранения результатов игр. Игра реализована на языке PHP с использованием базы данных SQLite. Пользователям предоставляется возможность просматривать историю игр и воспроизводить ранее сыгранные партии.

Цель игры - открыть все ячейки, не содержащие мины. Если игрок открывает ячейку с миной, он проигрывает. Если ячейка не заминирована, в ней отображается количество мин, соседствующих с этой ячейкой.

### Правила игры

- Игрок открывает ячейки, избегая мин. Открыв мину, игрок проигрывает.
- Если мины нет, ячейка отображает число соседних заминированных ячеек.
- Если рядом с открытой ячейкой нет мин, открывается область незаминированных ячеек до тех пор, пока не встретится ячейка с цифрой.

### Требования

- **Размер поля и количество мин**: Вводятся пользователем перед началом игры.
- **Сохранение данных**: Вся информация об играх и ходах сохраняется в базе данных SQLite.
- **Хранение данных**:
  - Дата игры
  - Имя игрока
  - Размер поля и количество мин
  - Расположение мин
  - Исход игры
  - Запись ходов в формате: `номер хода | координаты ячейки | результат (мимо/взорвался/выиграл)`
- **Режимы игры**:
  - Новая игра
  - Просмотр списка сохраненных игр
  - Повтор сохраненной партии (воспроизведение ходов)

---

## Игровой процесс

### Начало игры

Перед началом партии пользователю будет предложено ввести следующие параметры:

1. **Размер поля**: Укажите размер игрового поля в формате `ширина высота` (например, `10 10` для поля 10x10).
2. **Количество мин**: Укажите общее количество мин на поле (например, `20`).

### Ввод координат

Игрок открывает ячейки, вводя координаты в формате `X Y`, где:

- `X` — номер столбца (от 1 до ширины поля).
- `Y` — номер строки (от 1 до высоты поля).

Пример ввода координат для открытия ячейки на позиции (3, 7):

```bash
3 7
```

### Игровые действия

- **Открытие ячейки**: Введите координаты ячейки, чтобы открыть её.
- **Проигрыш**: Если игрок открыл ячейку с миной, игра заканчивается, и выводится сообщение о проигрыше.
- **Выигрыш**: Игра завершается, когда все ячейки без мин открыты.

### Просмотр сохраненных игр

После завершения игры пользователю будет предложено:

- Просмотреть список сохраненных игр, в котором будут указаны дата игры, имя игрока и исход.
- Повторить ранее сыгранную партию, вводя номер соответствующей игры из списка.

---

## Окружение и требования для запуска

1. **PHP**:
   - Версия: 7.4 или выше.
   - Настройки в `php.ini`:
     - Включите SQLite (`extension=sqlite3`).
     - Убедитесь, что настройки отображения ошибок (`display_errors`) включены в режиме разработки.

2. **SQLite**:
   - Версия: 3.x.
   - Проверьте наличие прав записи в каталоге, где находятся файлы баз данных.

3. **Composer**:
   - Composer должен быть установлен глобально.
   - Используйте команду `composer` для управления зависимостями.
   - Для установки Composer следуйте [официальной документации](https://getcomposer.org/doc/00-intro.md).

---

## Установка и запуск проекта

1. **Склонируйте репозиторий**:
   ```bash
   git clone https://github.com/Erefef/minesweeper.git
   ```

2. **Перейдите в каталог проекта**:
   ```bash
   cd C:\...\minesweeper
   ```

3. **Установите зависимости через Composer**:
   ```bash
   composer install
   ```

4. **Запуск игры: Выполните команду для запуска игры**:
   ```bash
   php bin/minesweeper.php
   ```

   - Или если ваш пакет опубликован на Packagist, установите его глобально:

   ```bash
   composer global require morsel/minesweeper
   ```

   - И затем выполните команду:

   ```bash
   minesweeper
   ```

## Примечания

- Проверьте права на запись в каталог с базой данных SQLite.

- Дополнительную информацию можно найти в документации PHP, SQLite и Composer:

- [SQLite Documentation](https://www.sqlite.org/docs.html)
- [PHP Documentation](https://www.php.net/docs.php)
- [Composer Documentation](https://getcomposer.org/doc/)

## Ссылки на пакеты
- [Packagist пакет Minesweeper](https://packagist.org/packages/morsel/minesweeper)