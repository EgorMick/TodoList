# TodoList

## Описание

Приложение **TodoList** на базе Laravel 12+ предоставляет простой веб-интерфейс для управления задачами:

- Создание новых задач
- Просмотр списка задач
- Обновление статуса задачи (выполнена/не выполнена)
- Редактирование и удаление задач

## Возможности

1. CRUD для задач (create, read, update, delete)
2. Фильтрация по статусу (все, активные, выполненные)
3. Модели и миграции для удобного хранения данных
4. Очереди (официальная поддержка Redis/RabbitMQ)

## Требования

- PHP ^8.2
- Composer
- Node.js & npm (или Yarn)
- PostgreSQL (или другая СУБД, поддерживаемая Laravel)
- Redis (для очередей) (опционально)
- Docker (опционально)

## Установка

1. Клонируйте репозиторий:

   ```bash
   git clone https://github.com/EgorMick/TodoList.git
   cd TodoList
   ```
2. Установить Composer-зависимости:
   ```bash
   composer install
   ```
3. Выполнить миграции:
    ```bash
    cp .env.example .env
    ```
4. Создать .env файл:
   ```bash
   php artisan key:generate
   ```
5. Создать ключ приложения:
   ```bash
   php artisan migrate
   ```
6. Запустите проект:
   ```bash
   php artisan serve
   ```
7. Перейти на адресс:
   ```bash
   http://127.0.0.1:8000/todos
   ```
