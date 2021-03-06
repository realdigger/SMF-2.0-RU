# SMF 2.0 Russian Edition
* **License:** BSD License
* **UTF-8:** Yes

## Описание
Дистрибутив SMF 2.0 с интегрированной русификацией (Russian-utf8).

### Отличия от оригинальной версии
* Интегрирована локализация Russian-utf8
* В установщике по умолчанию выбрано использование кодировки utf-8 (SMF не работает корректно с кириллицей без utf-8 на PHP старше версии 5.3)
* Исправлена ошибка в установщике из-за которой на некоторых серверах неверно прописывались пути к теме оформления, смайлам и аватарам (http://127.0.0.1/smf/...)
* Для личных сообщений по умолчанию задан режим диалога
* Для настройки "Уведомлять по e-mail о появлении новых сообщений" по умолчанию выбрано значение "Всегда"
* В список пауков поисковых систем добавлены: Yandex, Nigma, Sape, Sputnik, Mail.ru
* Для настройки "Отображение пауков в списке Кто онлайн" задано значение "Показывать всю инфу, но только админам"
* Для настройки количества последних сообщений установленных на главной задано значение 10
* Включены по умолчанию в настройках для пользователей:  
"Использовать боковое меню вместо выпадающего, при возможности",    
"Возвращаться в тему после ответа",  
"Показывать новые личные сообщения сверху",  
"Всплывающее окно при появлении нового сообщения",  
"Cохранять копии отправленных ЛС в папке Исходящие",    
"Первый день недели в календаре - Понедельник",  
"Быстрое модерирование в виде ячеек"
* Включены по умолчанию в основных настройках:  
"Календарь",  
"Расширенные поля профиля",  
"Логи модерации",  
"Генератор отчетов",  
"Поисковые системы"
* Включены по умолчанию в свойствах и параметрах:    
"Разрешить функцию "Сегодня" - "Сегодня и Вчера",  
"Отображать кнопки ВВЕРХ/ВНИЗ",  
"Отображать статус онлайн/оффлайн в сообщениях пользователей"   
* Удалены оригинальные праздники из календаря, добавлено некоторое количество международных и Российских
* Аватары загружаются в отдельную папку и отдаются напрямую как статические файлы, вместо вложений по умолчанию

## Description
SMF 2.0 distributive with Russian-utf8 localization integrated.

### Features
* Russian-utf8 localization integrated.
* Set utf-8 as default for install script (SMF does not work correctly with Cyrillic languages on PHP above 5.3)
* Add force opcache invalidate for Settings.php file to fix issue with http://127.0.0.1/smf/... url for themes, smiles and avatars
* Set default PM mode as a conversation
* Set "Notify by email every time you receive a personal message" option to "Always" by default
* Add Russian search engines spider's user-agents: Yandex, Nigma, Sape, Sputnik, Mail.ru
* Set "Show spiders in the online list" option to "Show spider names - admin only" by default
* Set "Number recent posts" option value to 10 by default
* Set enabled by default for member settings:   
"Use sidebar menus instead of dropdown menus when possible",  
"Return to topics after posting by default",  
"Show most recent personal messages at top",  
"Show a popup when I receive new messages",  
"Save a copy of each personal message in my sent items by default",   
"Set First day of the week on the calendar - Monday",  
"Show quick-moderation as checkboxes"
* Set enabled by default for core features:  
"Calendar",  
"Advanced Profile Fields",  
"Moderation, Administration and User Logs Report Generation",  
"Search Engine Tracking"
* Set enabled by default Features and Options:    
"Show online/offline in posts and PMs",  
"Enable Go Up/Go Down buttons",  
"Enable shorthand date display - Today & Yesterday"
* Original holidays removed, some international and Russian ones added
* Avatar default settings changed to custom upload directory
