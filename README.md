1.Перечислите список composer-пакетов, которые использует фреймворк Laravel после установки.
"require-dev": {
        "fakerphp/faker": "^1.23",
        "laravel/pint": "^1.13",
        "laravel/sail": "^1.26",
        "mockery/mockery": "^1.6",
        "nunomaduro/collision": "^8.0",
        "phpunit/phpunit": "^11.0.1",
        "spatie/laravel-ignition": "^2.4"
    },
2.Изучите директорию config и опишите какие файлы хранятся в этой директории.
1. **app.php**: Основной файл конфигурации приложения Laravel.
2. **database.php**: Конфигурация базы данных.
3. **mail.php**: Конфигурация для отправки почты.
4. **queue.php**: Конфигурация очередей.
5. **filesystems.php**: Конфигурация для работы с файловой системой.
6. **cache.php**: Конфигурация кэширования.
7. **session.php**: Конфигурация сессий.
8. **auth.php**: Конфигурация аутентификации.
9. **services.php**: Конфигурация сторонних сервисов.
10. **logger.php**: Конфигурация для логгирования.
3.В какой директории хранятся основные файлы (классы) с бизнес-логикой приложения?
**app**
1.Для чего нужны миграции? Какую роль они играют или какую проблему решают?
Миграции - это способ управления структурой базы данных с помощью кода. Они представляют собой набор файлов, в которых определены изменения структуры базы данных.

Роль миграций:
- **Управление версиями базы данных**: Миграции позволяют отслеживать изменения в структуре базы данных, записывая каждое изменение в отдельный файл миграции. Это облегчает совместную работу в команде и обновление базы данных на разных серверах.
- **Удобство и переносимость**: Миграции позволяют определить структуру базы данных с помощью кода, что делает ее более гибкой и переносимой. Вы можете использовать миграции для воссоздания базы данных на другом сервере без необходимости вручную создавать таблицы и индексы.
- **Откат изменений**: Миграции поддерживают откат изменений, что позволяет отменить последние изменения в базе данных или откатиться к предыдущим версиям.
2.Для чего нужен Eloquent ORM?
Eloquent - это ORM (Object-Relational Mapping), предоставляемый Laravel. Он представляет собой интуитивно понятный способ взаимодействия с базой данных с помощью объектно-ориентированного подхода.

Роль Eloquent ORM:
- **Простота в использовании**: Eloquent позволяет вам работать с данными в базе данных, используя объекты и методы, что делает код более понятным и легким для поддержки.
- **Отношения между моделями**: Eloquent позволяет определять отношения между моделями, такие как один к одному, один ко многим и многие к одному, что упрощает работу с данными и их связями.
- **Запросы на языке PHP**: Eloquent позволяет строить запросы к базе данных, используя язык PHP, что делает код более читаемым и понятным.
- **Удобство тестирования**: Eloquent позволяет легко тестировать код, использующий базу данных, благодаря его объектно-ориентированной природе.
