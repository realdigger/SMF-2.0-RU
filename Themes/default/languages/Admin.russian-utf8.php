<?php
// Version: 2.0; Admin

global $settings, $scripturl;

$txt['admin_boards'] = 'Разделы форума';
$txt['admin_users'] = 'Пользователи';
$txt['admin_newsletters'] = 'Рассылки';
$txt['admin_edit_news'] = 'Новости';
$txt['admin_groups'] = 'Группы пользователей';
$txt['admin_members'] = 'Управление пользователями';
$txt['admin_members_list'] = 'Ниже приведен список всех зарегистрированных пользователей форума.';
$txt['admin_next'] = 'Продолжить';
$txt['admin_censored_words'] = 'Нецензурные слова';
$txt['admin_censored_where'] = 'Напишите в левом поле нецензурное слово, а в правом &mdash; его замену.';
$txt['admin_censored_desc'] = 'В силу того, что форум является общественным, возможно, есть некоторые слова, которые хотелось бы запретить к использованию пользователями. Ниже можно указать эти слова.<br />Пустое поле справа удалит слово.';
$txt['admin_reserved_names'] = 'Зарезервированные имена';
$txt['admin_template_edit'] = 'Редактировать темы оформления вашего форума';
$txt['admin_modifications'] = 'Настройки модов';
$txt['admin_security_moderation'] = 'Безопасность и модерация';
$txt['admin_server_settings'] = 'Настройки сервера';
$txt['admin_reserved_set'] = 'Зарезервированные имена';
$txt['admin_reserved_line'] = 'Одно зарезервированное имя в строке.';
$txt['admin_basic_settings'] = 'На этой странице можно изменить основные настройки форума. Будьте очень осторожны, поскольку неправильные настройки могут привести форум в нерабочее состояние.  Также обратите внимание, что некоторые из этих настроек (такие, как формат времени) устанавливаются по умолчанию для всех пользователей или только для гостей.';
$txt['admin_maintain'] = 'Поставить форум на техобслуживание';
$txt['admin_title'] = 'Название форума';
$txt['admin_url'] = 'URL-адрес форума';
$txt['cookie_name'] = 'Имя Cookie';
$txt['admin_webmaster_email'] = 'E-mail веб-мастера';
$txt['boarddir'] = 'Абсолютный путь к директории с форумом';
$txt['sourcesdir'] = 'Абсолютный путь к директории Sources';
$txt['cachedir'] = 'Директория для кэша';
$txt['admin_news'] = 'Отображать новости';
$txt['admin_guest_post'] = 'Разрешить гостям оставлять сообщения';
$txt['admin_manage_members'] = 'Пользователи';
$txt['admin_main'] = 'Начало';
$txt['admin_config'] = 'Конфигурация';
$txt['admin_version_check'] = 'Детальная проверка версии';
$txt['admin_smffile'] = 'SMF файл';
$txt['admin_smfpackage'] = 'SMF пакет';
$txt['admin_maintenance'] = 'Обслуживание';
$txt['admin_image_text'] = 'Показывать кнопки вместо текста';
$txt['admin_credits'] = 'Благодарности';
$txt['admin_agreement'] = 'Показывать и требовать принятия регистрационного соглашения';
$txt['admin_agreement_default'] = 'По умолчанию';
$txt['admin_agreement_select_language'] = 'Язык для редактирования';
$txt['admin_agreement_select_language_change'] = 'Изменить';
$txt['admin_delete_members'] = 'Удалить выбранных пользователей';
$txt['admin_repair'] = 'Восстановить все разделы и темы';
$txt['admin_main_welcome'] = '<div style="margin-top: 1ex;">Это ваш &laquo;%1$s&raquo;. Здесь можно управлять настройками и обслуживанием форума, просматривать логи, устанавливать пакеты модификаций, изменять темы оформления и многое другое. При возникновении проблем, пожалуйста, посетите страницу &laquo;Поддержка и благодарности&raquo;. Если эта информация не помогла, попробуйте обратиться со своей проблемой на <a href="http://www.simplemachines.org/community/index.php" target="_blank">официальный форум поддержки</a>. Кроме того, можно получить подсказку, нажав на значок <img src="' . $settings['images_url'] . '/helptopics.gif" alt="%2$s" title="%3$s" /> рядом с соответствующей опцией.</div>';
$txt['admin_news_desc'] = 'Пожалуйста, размещайте в каждой ячейке только одну новость. Некоторые BB-теги &mdash; такие как <span title="Жирный">[b]</span>, <span title="Наклонный">[i]</span> и <span title="Подчеркнутый">[u]</span>, а также смайлы &mdash; разрешены в новостях.<br />Чтобы убрать новость, просто удалите текст в соответствующей ячейке и сохраните изменения.';
$txt['administrators'] = 'Администраторы форума';
$txt['admin_reserved_desc'] = 'Зарезервированные имена нельзя будет использовать при регистрации пользователей или же при выборе отображаемого имени. Выберите настройки, которые будете использовать, перед тем как принять изменения.';
$txt['admin_activation_email'] = 'Отправлять e-mail с кодом активации новым пользователям после регистрации';
$txt['admin_match_whole'] = 'Полное совпадение слова.';
$txt['admin_match_case'] = 'C учетом регистра.';
$txt['admin_check_user'] = 'Проверять имя пользователя.';
$txt['admin_check_display'] = 'Проверять отображаемое имя.';
$txt['admin_newsletter_send'] = 'На этой странице можно отправить письмо любому пользователю. Адреса выбранных пользователей будут показаны ниже, но их можно добавлять или удалять по своему желанию. Убедитесь в том, что каждый адрес разделен, как это показано на примере: \'адрес1; адрес2\'.';
$txt['admin_fader_delay'] = 'Задержка между показами новостей в новостной ленте';
$txt['admin_bbc'] = 'Показывать кнопки для вставки BB-тегов на страницах отсылки сообщений и ЛС';

$txt['admin_backup_fail'] = 'Невозможно создать резервную копию Settings.php &mdash; убедитесь, что файл Settings_bak.php существует и является записываемым.';
$txt['modSettings_info'] = 'Изменение или установка различных настроек форума.';
$txt['database_server'] = 'Сервер базы данных MySQL';
$txt['database_user'] = 'Имя пользователя базы данных';
$txt['database_password'] = 'Пароль базы данных';
$txt['database_name'] = 'Имя базы данных';
$txt['registration_agreement'] = 'Регистрационное соглашение';
$txt['registration_agreement_desc'] = 'Это соглашение показывается пользователям при регистрации на форуме и должно быть принято, прежде чем пользователи смогут продолжить регистрацию.';
$txt['database_prefix'] = 'Префикс таблиц базы данных';
$txt['errors_list'] = 'Просмотр ошибок форума';
$txt['errors_found'] = 'Обнаружены следующие ошибки';
$txt['errors_fix'] = 'Хотите исправить эти ошибки';
$txt['errors_do_recount'] = 'Все ошибки исправлены, был создан раздел для потерянных сообщений! Пожалуйста, нажмите на кнопку ниже, чтобы пересчитать некоторые ключевые данные статистики.';
$txt['errors_recount_now'] = 'Пересчитать статистику';
$txt['errors_fixing'] = 'Исправление ошибок форума';
$txt['errors_fixed'] = 'Все ошибки исправлены! Пожалуйста, проверьте любые созданные категории, форумы или темы.';
$txt['attachments_avatars'] = 'Вложения и аватары';
$txt['attachments_desc'] = 'Здесь можно администрировать вложенные файлы. Можно удалять вложения по размеру, по дате публикации. Статистика по вложениям предоставлена ниже.';
$txt['attachment_stats'] = 'Статистика вложенных файлов';
$txt['attachment_integrity_check'] = 'Проверка вложенных файлов';
$txt['attachment_integrity_check_desc'] = 'Эта функция проверяет целостность и размеры вложений, а также имена файлов, перечисленные в базе данных. При необходимости найденные ошибки исправляются.';
$txt['attachment_check_now'] = 'Запустить проверку';
$txt['attachment_pruning'] = 'Удаление вложений';
$txt['attachment_pruning_message'] = 'Текст будет добавлен в сообщение';
$txt['attachment_pruning_warning'] = 'Уверены в том, что хотите удалить эти вложения?\\nДействие не может быть отменено!';
$txt['attachment_total'] = 'Всего вложений';
$txt['attachmentdir_size'] = 'Общий размер папки вложений';
$txt['attachmentdir_size_current'] = 'Общий размер текущей папки вложений';
$txt['attachment_space'] = 'Всего доступного места в папке вложений';
$txt['attachment_space_current'] = 'Всего доступного места в текущей папке вложений';
$txt['attachment_options'] = 'Управление вложенными файлами';
$txt['attachment_log'] = 'Логи вложений';
$txt['attachment_remove_old'] = 'Удалить вложения с датой создания, превышающей';
$txt['attachment_remove_size'] = 'Удалить вложения с размером более';
$txt['attachment_name'] = 'Имя файла';
$txt['attachment_file_size'] = 'Размер файла';
$txt['attachmentdir_size_not_set'] = 'Максимальный размер папки не установлен';
$txt['attachment_delete_admin'] = '[вложение удалено администратором]';
$txt['live'] = 'Новости с Simple Machines...';
$txt['remove_all'] = 'Удалить все';
$txt['approve_new_members'] = 'Администратор должен одобрить всех новых пользователей';
$txt['agreement_not_writable'] = 'Внимание &mdash; agreement.txt не доступен для записи, любые произведённые изменения НЕ будут сохранены.';

$txt['version_check_desc'] = 'Здесь показываются текущие версии установленных файлов, а напротив &mdash; их последние версии. Если любой из этих файлов устарел, необходимо обновить его до последней версии с <a href="http://www.simplemachines.org/" target="_blank">www.simplemachines.org</a>.';
$txt['version_check_more'] = '(подробнее)';

$txt['lfyi'] = 'Невозможно соединиться с simplemachines.org для получения последних новостей.';

$txt['manage_calendar'] = 'Календарь';
$txt['manage_search'] = 'Поиск';

$txt['smileys_manage'] = 'Смайлы и иконки';
$txt['smileys_manage_info'] = 'Установка и добавление новых смайлов, а также управление иконками сообщений.';
$txt['package_info'] = 'Установка дополнений, предоставляющих новые или расширенные возможности.';
$txt['theme_admin'] = 'Темы оформления';
$txt['theme_admin_info'] = 'Установка, настройка и управление темами оформления.';
$txt['registration_center'] = 'Регистрация';
$txt['member_center_info'] = 'Просмотр списка пользователей, поиск и управление пользователями.';

$txt['viewmembers_name'] = 'Имя пользователя (отображаемое)';
$txt['viewmembers_online'] = 'Последний визит';
$txt['viewmembers_today'] = 'Сегодня';
$txt['viewmembers_day_ago'] = 'день назад';
$txt['viewmembers_days_ago'] = 'дней назад';

$txt['display_name'] = 'Отображаемое имя';
$txt['email_address'] = 'E-mail';
$txt['ip_address'] = 'IP адрес';
$txt['member_id'] = 'ID';

$txt['unknown'] = 'неизвестно';
$txt['security_wrong'] = 'Попытка войти под администратором!' . "\n" . 'Referer: %1$s' . "\n" . 'User agent: %2$s' . "\n" . 'IP: %3$s';

$txt['email_as_html'] = 'Отправить в HTML-формате (с помощью данной опции возможна отправка e-mail в виде обычного HTML-текста).';
$txt['email_parsed_html'] = 'Добавить &lt;br /&gt; и &amp;nbsp теги в это сообщение.';
$txt['email_variables'] = 'В этом сообщении можно использовать некоторые &quot;специальные&quot; переменные. Нажмите <a href="' . $scripturl . '?action=helpadmin;help=emailmembers" onclick="return reqWin(this.href);" class="help">здесь</a> для просмотра подробной информации.';
$txt['email_force'] = 'Отправить сообщение даже тем пользователям, которые отказались от получения новостей.';
$txt['email_as_pms'] = 'Отправить сообщение этим группам через систему ЛС.';
$txt['email_continue'] = 'Продолжить';
$txt['email_done'] = 'готово.';

$txt['ban_title'] = 'Список банов';
$txt['ban_ip'] = 'Бан по IP: (пример 192.168.12.213 или 128.0.*.*) &mdash; одно значение на строку';
$txt['ban_email'] = 'Бан по e-mail: (пример badguy@somewhere.com) &mdash; одно значение на строку';
$txt['ban_username'] = 'Бан по имени пользователя: (пример l33tuser) &mdash; одно значение на строку';

$txt['ban_description'] = 'Здесь можно блокировать пользователей по IP, имени хоста, имени пользователя или по e-mail.';
$txt['ban_add_new'] = 'Добавить бан';
$txt['ban_banned_entity'] = 'Забаненные объекты';
$txt['ban_on_ip'] = 'Бан по IP (пример 192.168.10-20.*)';
$txt['ban_on_hostname'] = 'Бан по имени хоста (пример *.mil)';
$txt['ban_on_email'] = 'Бан по e-mail (пример *@badsite.com)';
$txt['ban_on_username'] = 'Бан по имени пользователя';
$txt['ban_notes'] = 'Примечания';
$txt['ban_restriction'] = 'Тип бана';
$txt['ban_full_ban'] = 'Полный бан';
$txt['ban_partial_ban'] = 'Частичный бан';
$txt['ban_cannot_post'] = 'Нельзя оставлять сообщения';
$txt['ban_cannot_register'] = 'Нельзя регистрироваться';
$txt['ban_cannot_login'] = 'Нельзя входить';
$txt['ban_add'] = 'Добавить';
$txt['ban_edit_list'] = 'Список банов';
$txt['ban_type'] = 'Тип банов';
$txt['ban_days'] = 'день (дней)';
$txt['ban_will_expire_within'] = 'Бан истекает через';
$txt['ban_added'] = 'Добавлено';
$txt['ban_expires'] = 'Заканчивается';
$txt['ban_hits'] = 'Хитов';
$txt['ban_actions'] = 'Действия';
$txt['ban_expiration'] = 'Заканчивается';
$txt['ban_reason_desc'] = 'Описание бана, отображается заблокированному пользователю.';
$txt['ban_notes_desc'] = 'Примечание может помочь другим пользователям, имеющим доступ к управлению банами.';
$txt['ban_remove_selected'] = 'Удалить выбранное';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_confirm'] = 'Хотите удалить выделенные баны?';
$txt['ban_modify'] = 'Изменить';
$txt['ban_name'] = 'Имя';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_edit'] = 'Редактировать бан';
$txt['ban_add_notes'] = '<strong>Примечание</strong>: после создания бана в него можно добавить дополнительные параметры, такие как IP, имя хоста, e-mail.';
$txt['ban_expired'] = 'Срок истек/отменен';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_restriction_empty'] = 'Ограничение не выбрано.';

$txt['ban_triggers'] = 'Параметры';
$txt['ban_add_trigger'] = 'Добавить параметры бана';
$txt['ban_add_trigger_submit'] = 'Добавить';
$txt['ban_edit_trigger'] = 'Изменить';
$txt['ban_edit_trigger_title'] = 'Редактировать бан';
$txt['ban_edit_trigger_submit'] = 'Изменить';
$txt['ban_remove_selected_triggers'] = 'Удалить выделенные параметры банов';
$txt['ban_no_entries'] = 'В настоящее время нет ни одного действующего бана.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['ban_remove_selected_triggers_confirm'] = 'Уверены, что хотите удалить выбранные баны?';
$txt['ban_trigger_browse'] = 'Параметры бана';
$txt['ban_trigger_browse_description'] = 'Здесь показаны все элементы бана, сгруппированные по IP, имени хоста, e-mail и по имени пользователя.';

$txt['ban_log'] = 'Логи банов';
$txt['ban_log_description'] = 'В логах бана показаны все элементы, какие заблокированные пользователи входили на форум  (\'полный бан\' и \'без возможности зарегистрироваться\' только эти баны).';
$txt['ban_log_no_entries'] = 'Записей не найдено.';
$txt['ban_log_ip'] = 'IP адрес';
$txt['ban_log_email'] = 'E-mail';
$txt['ban_log_member'] = 'Пользователь';
$txt['ban_log_date'] = 'Дата';
$txt['ban_log_remove_all'] = 'Удалить все';
$txt['ban_log_remove_all_confirm'] = 'Уверены, что хотите удалить все логи бана?';
$txt['ban_log_remove_selected'] = 'Удалить выделенное';
$txt['ban_log_remove_selected_confirm'] = 'Уверены, что хотите удалить выделенные логи бана?';
$txt['ban_no_triggers'] = 'Нет параметров бана.';

$txt['settings_not_writable'] = 'Эти настройки не могут быть изменены, потому что Settings.php доступен только для чтения.';

$txt['maintain_title'] = 'Обслуживание форума';
$txt['maintain_info'] = 'Оптимизация таблиц в базе данных, создание резервных копий, проверка на ошибки и очистка форума.';
$txt['maintain_sub_database'] = 'База данных';
$txt['maintain_sub_routine'] = 'Ремонт';
$txt['maintain_sub_members'] = 'Пользователи';
$txt['maintain_sub_topics'] = 'Удаление и перенос тем';
$txt['maintain_done'] = 'Задача \'%1$s\' успешно выполнена.';
$txt['maintain_no_errors'] = 'Ошибок не найдено!';

$txt['maintain_tasks'] = 'Диспетчер задач';
$txt['maintain_tasks_desc'] = 'Управление всеми задачами SMF.';

$txt['scheduled_log'] = 'Логи диспетчера задач';
$txt['scheduled_log_desc'] = 'Список логов выполненных задач';
$txt['admin_log'] = 'Логи администрирования';
$txt['admin_log_desc'] = 'Список административных действий, выполненных администраторами форума.';
$txt['moderation_log'] = 'Логи модерации';
$txt['moderation_log_desc'] = 'Список модераторских действий, выполненных модераторами форума.';
$txt['spider_log_desc'] = 'Обзор записей, относящихся к деятельности пауков на данном форуме.';
$txt['pruning_log_desc'] = 'Используйте эти инструменты для очистки от старых записей в различных журналах логов.';

$txt['mailqueue_title'] = 'Очередь сообщений';

$txt['db_error_send'] = 'Уведомлять об ошибках соединения с MySQL';
$txt['db_persist'] = 'Использовать постоянное соединение с MySQL';
$txt['ssi_db_user'] = 'Имя пользователя базы данных для SSI:';
$txt['ssi_db_passwd'] = 'Пароль базы данных для SSI:';

$txt['default_language'] = 'Язык форума по умолчанию:';

$txt['maintenance_subject'] = 'Заголовок';
$txt['maintenance_message'] = 'Сообщение';

$txt['errlog_desc'] = 'Журнал ошибок содержит записи обо всех обнаруженных ошибках на этом форуме. Для удаления любых ошибок из базы данных выделите ошибку и нажмите кнопку <strong>%s</strong>.';
$txt['errlog_no_entries'] = 'Записей не найдено.';

$txt['theme_settings'] = 'Свойства темы оформления';
$txt['theme_current_settings'] = 'Текущая тема оформления';

$txt['dvc_your'] = 'Ваша версия';
$txt['dvc_current'] = 'Последняя версия';
$txt['dvc_sources'] = 'Sources';
$txt['dvc_default'] = 'Версия темы оформления по умолчанию';
$txt['dvc_templates'] = 'Текущая версия темы оформления';
$txt['dvc_languages'] = 'Языковые файлы';

$txt['smileys_default_set_for_theme'] = 'Выбрать смайлы по умолчанию для этой темы';
$txt['smileys_no_default'] = '(использовать смайлы по умолчанию)';

$txt['censor_test'] = 'Тестировать нецензурные слова';
$txt['censor_test_save'] = 'Тестировать';
$txt['censor_case'] = 'Не учитывать регистр букв';
$txt['censor_whole_words'] = 'Только слова целиком';

$txt['admin_confirm_password'] = '(повторите пароль)';
$txt['admin_incorrect_password'] = 'Некорректный пароль';

$txt['date_format'] = '(ГГГГ-ММ-ДД)';
$txt['undefined_gender'] = 'не указан';
$txt['age'] = 'Возраст пользователя';
$txt['activation_status'] = 'Статус активации';
$txt['activated'] = 'Активирован';
$txt['not_activated'] = 'Не активирован';
$txt['primary'] = 'Основная';
$txt['additional'] = 'Добавочная';
$txt['messenger_address'] = 'Адрес';
$txt['wild_cards_allowed'] = 'символы  * и ? разрешены';
$txt['search_for'] = 'Поиск';
$txt['member_part_of_these_membergroups'] = 'Пользователь входит в группу';
$txt['membergroups'] = 'Группы пользователей';
$txt['confirm_delete_members'] = 'Уверены, что хотите удалить выбранных пользователей?';

$txt['support_credits_title'] = 'Поддержка и благодарности';
$txt['support_credits_info'] = 'Обратитесь к поддержке, получите информацию по выпускам и версиям форума, если у вас возникли проблемы.';
$txt['support_title'] = 'Информационная поддержка';
$txt['support_versions_current'] = 'Последняя версия SMF';
$txt['support_versions_forum'] = 'Версия форума';
$txt['support_versions_php'] = 'Версия PHP';
$txt['support_versions_db'] = 'Версия %1$s';
$txt['support_versions_server'] = 'Версия Web сервера';
$txt['support_versions_gd'] = 'Версия GD';
$txt['support_versions'] = 'Информация о версиях';
$txt['support_resources'] = 'Средства поддержки';
$txt['support_resources_p1'] = 'Наша <a href="%1$s">онлайн-документация</a> содержит основные сведения обо всех особенностях SMF, включая <a href="%2$s">возможности</a>, <a href="%3$s">настройки</a>, <a href="%4$s">темы оформления</a>, <a href="%5$s">модификации</a> и другие разделы. Данное руководство охватывает все аспекты использования SMF и позволяет быстро получить ответы на большинство вопросов.';
$txt['support_resources_p2'] = 'Если не смогли найти ответы на свои вопросы в онлайн-документации, можете воспользоваться поиском по нашему <a href="%1$s">форуму поддержки</a> или обратиться за помощью в <a href="%2$s">англоязычный</a> или один из множества <a href="%3$s">интернациональных</a> разделов поддержки. Сообщество поддержки SMF может использоваться для получения ответов на вопросы, связанные с <a href="%4$s">использованием SMF</a>, <a href="%5$s">работой и созданием модификаций</a> и многими другими темами (обсуждение SMF, поиск хостинга, общение с другими администраторами форумов&nbsp;и&nbsp;т.&nbsp;д.).';

$txt['support_latest'] = 'Поддержка и выпуски форума';
$txt['support_latest_fetch'] = 'Получение информации о поддержке...';

$txt['edit_permissions_info'] = 'Изменение ограничений и доступных возможностей глобально или для каждого раздела.';
$txt['membergroups_members'] = 'Обычные пользователи';
$txt['membergroups_guests'] = 'Гости';
$txt['membergroups_guests_na'] = 'нет';
$txt['membergroups_add_group'] = 'Добавить группу';
$txt['membergroups_permissions'] = 'Права доступа';

$txt['permitgroups_restrict'] = 'Ограниченный';
$txt['permitgroups_standard'] = 'Стандартный';
$txt['permitgroups_moderator'] = 'Модератор';
$txt['permitgroups_maintenance'] = 'Технический';
$txt['permitgroups_inherit'] = 'Наследовать';

$txt['confirm_delete_attachments_all'] = 'Уверены, что хотите удалить все вложения?';
$txt['confirm_delete_attachments'] = 'Уверены, что хотите удалить все выделенные вложения?';
$txt['attachment_manager_browse_files'] = 'Просмотр файлов';
$txt['attachment_manager_repair'] = 'Обслуживание';
$txt['attachment_manager_avatars'] = 'Аватары';
$txt['attachment_manager_attachments'] = 'Вложения';
$txt['attachment_manager_thumbs'] = 'Эскизы';
$txt['attachment_manager_last_active'] = 'Последняя активность';
$txt['attachment_manager_member'] = 'Пользователь';
$txt['attachment_manager_avatars_older'] = 'Удалить аватары пользователей, неактивных на протяжении более';
$txt['attachment_manager_total_avatars'] = 'Всего аватаров';

$txt['attachment_manager_avatars_no_entries'] = 'Аватар нет.';
$txt['attachment_manager_attachments_no_entries'] = 'Вложений нет.';
$txt['attachment_manager_thumbs_no_entries'] = 'Эскизов нет.';

$txt['attachment_manager_settings'] = 'Свойства вложений';
$txt['attachment_manager_avatar_settings'] = 'Свойства аватаров';
$txt['attachment_manager_browse'] = 'Просмотр файлов';
$txt['attachment_manager_maintenance'] = 'Обслуживание файлов';
$txt['attachment_manager_save'] = 'Сохранить';

$txt['attachmentEnable'] = 'Вложения';
$txt['attachmentEnable_deactivate'] = 'Запретить вложения';
$txt['attachmentEnable_enable_all'] = 'Разрешить все вложения';
$txt['attachmentEnable_disable_new'] = 'Запретить новые вложения';
$txt['attachmentCheckExtensions'] = 'Проверять расширения вложений';
$txt['attachmentExtensions'] = 'Доступные расширения вложений';
$txt['attachmentRecodeLineEndings'] = 'Перекодировать символы конца строки в текстовых вложениях';
$txt['attachmentShowImages'] = 'Отображать миниатюры вложений под сообщением';
$txt['attachmentEncryptFilenames'] = 'Шифровать имена закаченных файлов';
$txt['attachmentUploadDir'] = 'Папка вложений <div class="smalltext"><a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">Настройка нескольких папок вложений</a></div>';
$txt['attachmentUploadDir_multiple'] = 'Папка вложений';
$txt['attachmentUploadDir_multiple_configure'] = '<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=attachpaths">[Настройка нескольких папок вложений]</a>';
$txt['attachmentDirSizeLimit'] = 'Максимальный размер папки вложений';
$txt['attachmentPostLimit'] = 'Максимальный размер всех вложений в одном сообщении';
$txt['attachmentSizeLimit'] = 'Максимальный размер вложения';
$txt['attachmentNumPerPostLimit'] = 'Максимальное количество вложений в сообщении';
$txt['attachment_gd_warning'] = 'На вашем сервере не установлен GD-модуль, поэтому обработка изображений невозможна.';
$txt['attachment_image_reencode'] = 'Обрабатывать потенциально опасные прикрепленные изображения';
$txt['attachment_image_reencode_note'] = '(требуется GD-модуль)';
$txt['attachment_image_paranoid_warning'] = 'Данная функция может привести к большому количеству непринятых вложений!';
$txt['attachment_image_paranoid'] = 'Выполнять экстенсивную проверку загружаемых вложений';
$txt['attachmentThumbnails'] = 'Изменять размер изображения, при отображении под сообщением';
$txt['attachment_thumb_png'] = 'Сохранять миниатюры в формате PNG';
$txt['attachmentThumbWidth'] = 'Максимальная ширина эскиза';
$txt['attachmentThumbHeight'] = 'Максимальная высота эскиза';

$txt['attach_dir_does_not_exist'] = 'Не существует';
$txt['attach_dir_not_writable'] = 'Незаписываемая';
$txt['attach_dir_files_missing'] = 'Файлы потеряны ((<a href="' . $scripturl . '?action=admin;area=manageattachments;sa=repair;%2$s=%1$s">Восстановить</a>)';
$txt['attach_dir_unused'] = 'Не используется';
$txt['attach_dir_ok'] = 'ОК';

$txt['attach_path_manage'] = 'Управление путями папки вложений';
$txt['attach_paths'] = 'Путь папки вложений';
$txt['attach_current_dir'] = 'Текущая папка';
$txt['attach_path'] = 'Путь';
$txt['attach_current_size'] = 'Текущий размер (КБ)';
$txt['attach_num_files'] = 'Файлов';
$txt['attach_dir_status'] = 'Статус';
$txt['attach_add_path'] = 'Добавить путь';
$txt['attach_path_current_bad'] = 'Текущий путь папки вложений не существует.';

$txt['mods_cat_avatars'] = 'Аватары';
$txt['avatar_directory'] = 'Папка аватаров (локальный путь)';
$txt['avatar_url'] = 'URL-адрес папки аватаров';
$txt['avatar_dimension_note'] = '(0 = без лимита)';
$txt['avatar_max_width_external'] = 'Максимальная ширина внешнего аватара';
$txt['avatar_max_height_external'] = 'Максимальная высота внешнего аватара';
$txt['avatar_action_too_large'] = 'Если аватар слишком большой...';
$txt['option_refuse'] = 'Запретить отображение';
$txt['option_html_resize'] = 'Разрешить изменение размеров средствами HTML';
$txt['option_js_resize'] = 'Изменить размер при помощи JavaScript';
$txt['option_download_and_resize'] = 'Загрузить и изменить размер (требуется GD-модуль)';
$txt['avatar_max_width_upload'] = 'Максимальная ширина загруженного аватара';
$txt['avatar_max_height_upload'] = 'Максимальная высота загруженного аватара';
$txt['avatar_resize_upload'] = 'Изменять размеры больших аватаров';
$txt['avatar_resize_upload_note'] = '(требуется GD-модуль)';
$txt['avatar_download_png'] = 'Использовать формат PNG для аватара с измененными размерами';
$txt['avatar_gd_warning'] = 'GD-модуль не установлен. Некоторые аватары запрещены.';
$txt['avatar_external'] = 'Внешние аватары';
$txt['avatar_upload'] = 'Загружаемые аватары';
$txt['avatar_server_stored'] = 'Аватары, расположенные на сервере';
$txt['avatar_server_stored_groups'] = 'Группы пользователей, которым разрешено устанавливать аватары с сервера';
$txt['avatar_upload_groups'] = 'Группы пользователей, которым разрешено закачивать аватары на сервер';
$txt['avatar_external_url_groups'] = 'Группы пользователей, которым разрешено загружать аватары с внешнего URL-адреса';
$txt['avatar_select_permission'] = 'Выбор групп';
$txt['avatar_download_external'] = 'Загрузка аватаров с внешних источников (URL)';
$txt['custom_avatar_enabled'] = 'Загружать аватары в:';
$txt['option_attachment_dir'] = 'Папку вложений';
$txt['option_specified_dir'] = 'Другую папку';
$txt['custom_avatar_dir'] = 'Папка загрузки';
$txt['custom_avatar_dir_desc'] = 'Не должна совпадать с папкой на сервере.';
$txt['custom_avatar_url'] = 'URL-адрес загрузки';
$txt['custom_avatar_check_empty'] = 'Выбранная директория для аватаров, возможно, пуста или задана неверно. Пожалуйста, проверьте правильность указанных данных.';
$txt['avatar_reencode'] = 'Обрабатывать потенциально опасные аватары';
$txt['avatar_reencode_note'] = '(требуется GD-модуль)';
$txt['avatar_paranoid_warning'] = 'Данная функция может привести к большому количеству непринятых аватаров!';
$txt['avatar_paranoid'] = 'Выполнять экстенсивную проверку загружаемых аватаров';

$txt['repair_attachments'] = 'Обслуживание вложений';
$txt['repair_attachments_complete'] = 'Обслуживание закончено';
$txt['repair_attachments_complete_desc'] = 'Все выделенные ошибки были исправлены';
$txt['repair_attachments_no_errors'] = 'Ошибок не найдено!';
$txt['repair_attachments_error_desc'] = 'В ходе обслуживания были найдены ошибки. Выделите те из них, которые хотите исправить, и нажмите "Продолжить".';
$txt['repair_attachments_continue'] = 'Продолжить';
$txt['repair_attachments_cancel'] = 'Отмена';
$txt['attach_repair_missing_thumbnail_parent'] = 'Эскизов, не ассоциированных со своими полноразмерными изображениями: %1$d';
$txt['attach_repair_parent_missing_thumbnail'] = 'Изображений, не имеющих эскизов (хотя указано обратное): %1$d';
$txt['attach_repair_file_missing_on_disk'] = 'Вложений/аватаров, имеющих ассоциативные ссылки, но отсутствующих на сервере: %1$d';
$txt['attach_repair_file_wrong_size'] = 'Вложений/аватаров с неправильным размером: %1$d';
$txt['attach_repair_file_size_of_zero'] = 'Вложений/аватаров с нулевым размером: %1$d (подлежат удалению)';
$txt['attach_repair_attachment_no_msg'] = 'Вложений, не ассоциированных с сообщением: %1$d';
$txt['attach_repair_avatar_no_member'] = 'Аватаров, не ассоциированных с пользователем: %1$d';
$txt['attach_repair_wrong_folder'] = 'Вложений в несуществующей папке: %1$d';

$txt['news_title'] = 'Новости и рассылка';
$txt['news_settings_desc'] = 'Здесь можно изменить настройки и права доступа для новостей и рассылок.';
$txt['news_settings_submit'] = 'Сохранить';
$txt['news_mailing_desc'] = 'Здесь можно отправлять сообщения всем зарегистрированным пользователям. Можно настроить список рассылки или отправить сообщение всем. Полезно для рассылки важной информации и новостей.';
$txt['groups_edit_news'] = 'Группы, которым разрешено редактировать новости';
$txt['groups_send_mail'] = 'Группы, которым разрешено рассылать новостные сообщения с форума';
$txt['xmlnews_enable'] = 'Разрешить XML/RSS новости';
$txt['xmlnews_maxlen'] = 'Максимальная длина сообщения:<div class="smalltext">(0 &mdash; без ограничений, но это плохая идея)</div>';
$txt['editnews_clickadd'] = 'Нажмите сюда для добавления другого пункта.';
$txt['editnews_remove_selected'] = 'Удалить выделенные';
$txt['editnews_remove_confirm'] = 'Уверены, что хотите удалить выделенные новости?';
$txt['censor_clickadd'] = 'Нажмите сюда для добавления другого слова.';

$txt['layout_controls'] = 'Форум';
$txt['logs'] = 'Логи';
$txt['generate_reports'] = 'Генератор отчетов';

$txt['update_available'] = 'Доступно обновление!';
$txt['update_message'] = 'Вы используете устаревшую версию SMF, содержащую некоторые ошибки, которые уже исправлены в новой версии.
Рекомендуем <a href="" id="update-link">обновить форум</a> до последней версии. Это займет всего несколько минут!';

$txt['manageposts'] = 'Сообщения и темы';
$txt['manageposts_title'] = 'Управление сообщениями и темами';
$txt['manageposts_description'] = 'Здесь можно управлять всеми настройками, связанными с темами и сообщениями.';

$txt['manageposts_seconds'] = 'секунд';
$txt['manageposts_minutes'] = 'минут';
$txt['manageposts_characters'] = 'знаков';
$txt['manageposts_days'] = 'дней';
$txt['manageposts_posts'] = 'сообщений';
$txt['manageposts_topics'] = 'тем';

$txt['manageposts_settings'] = 'Настройки сообщений';
$txt['manageposts_settings_description'] = 'Здесь можно настроить всё, что связано с сообщениями и их отправкой.';
$txt['manageposts_settings_submit'] = 'Сохранить';

$txt['manageposts_bbc_settings'] = 'BB-теги';
$txt['manageposts_bbc_settings_description'] = 'BB-код может использоваться для оформления сообщений. Пример жирного выделения слова \'лошадь\': можно написать так: [b]лошадь[/b]. Все BB-теги обрамлены квадратными скобками (\'[\' и \']\').';
$txt['manageposts_bbc_settings_title'] = 'Настройка BB кода';
$txt['manageposts_bbc_settings_submit'] = 'Сохранить';

$txt['manageposts_topic_settings'] = 'Настройки тем';
$txt['manageposts_topic_settings_description'] = 'Здесь можно установить все настройки, касающиеся тем.';
$txt['manageposts_topic_settings_submit'] = 'Сохранить';

$txt['removeNestedQuotes'] = 'Удалять вложенные цитаты при отправке сообщения';
$txt['enableEmbeddedFlash'] = 'Разрешить Flash в сообщениях';
$txt['enableEmbeddedFlash_warning'] = 'Может возникнуть угроза безопасности!';
$txt['enableSpellChecking'] = 'Разрешить проверку орфографии';
$txt['enableSpellChecking_warning'] = 'работает не на всех серверах!';
$txt['disable_wysiwyg'] = 'Запретить редактор WYSIWYG';
$txt['max_messageLength'] = 'Максимальный размер сообщения';
$txt['max_messageLength_zero'] = '0 &mdash; без ограничений';
$txt['fixLongWords'] = 'Разбивать слова, длина которых превышает';
$txt['fixLongWords_zero'] = '0 &mdash; запрещено';
$txt['fixLongWords_warning'] = '(работает не на всех серверах!)';
$txt['topicSummaryPosts'] = 'Количество отображаемых сообщений под полной формой ответа';
$txt['spamWaitTime'] = 'Время между отправкой сообщений с одного IP';
$txt['edit_wait_time'] = 'Время редактирования сообщения';
$txt['edit_disable_time'] = 'Время, в течение которого разрешено редактировать сообщение';
$txt['edit_disable_time_zero'] = '0 &mdash; без ограничений';

$txt['enableBBC'] = 'Разрешить BB-теги';
$txt['enablePostHTML'] = 'Разрешить <em>основной</em> HTML в сообщениях';
$txt['autoLinkUrls'] = 'Автоматически вставлять ссылки URL';
$txt['disabledBBC'] = 'Разрешенные BB-теги';
$txt['bbcTagsToUse'] = 'Разрешить BB-теги';
$txt['bbcTagsToUse_select'] = 'Выберите теги, которые можно использовать';
$txt['bbcTagsToUse_select_all'] = 'Выбрать все теги';

$txt['enableStickyTopics'] = 'Разрешить прикрепленные темы';
$txt['enableParticipation'] = 'Показывать специальные иконки напротив тем с сообщениями пользователя';
$txt['oldTopicDays'] = 'Время, после которого тема считается устаревшей';
$txt['oldTopicDays_zero'] = '0 &mdash; отключено';
$txt['defaultMaxTopics'] = 'Количество тем на странице';
$txt['defaultMaxMessages'] = 'Количество сообщений на странице темы';
$txt['hotTopicPosts'] = 'Количество сообщений для популярной темы';
$txt['hotTopicVeryPosts'] = 'Количество сообщений для очень популярной темы';
$txt['enableAllMessages'] = 'Максимальный размер темы для отображения &quot;всех&quot; сообщений';
$txt['enableAllMessages_zero'] = '0 никогда не показывать &quot;Все&quot;';
$txt['disableCustomPerPage'] = 'Запретить индивидуальную настройку кол-ва тем/сообщений на странице';
$txt['enablePreviousNext'] = 'Показывать ссылки &laquo;предыдущая тема/следующая тема&raquo;';

$txt['not_done_title'] = 'Не готово!';
$txt['not_done_reason'] = 'Чтобы избежать перегрузки сервера, процесс временно приостановлен. Все запустится через несколько секунд. Если это не произошло нажмите на кнопку &quot;Продолжить&quot;.';
$txt['not_done_continue'] = 'Продолжить';

$txt['general_settings'] = 'Общие';
$txt['database_paths_settings'] = 'База данных и пути';
$txt['cookies_sessions_settings'] = 'Плюшки и сессии';
$txt['caching_settings'] = 'Кэширование';
$txt['load_balancing_settings'] = 'Балансировка нагрузки';

$txt['language_configuration'] = 'Настройка языков';
$txt['language_description'] = 'В этом разделе можно редактировать установленные языки и устанавливать новые, скачанные с сайта разработчиков.';
$txt['language_edit'] = 'Изменить язык';
$txt['language_add'] = 'Добавить язык';
$txt['language_settings'] = 'Настройки';

$txt['advanced'] = 'Расширенный';
$txt['simple'] = 'Простой';

$txt['admin_news_select_recipients'] = 'Пожалуйста, выберите тех, кому должны быть отправлены новости';
$txt['admin_news_select_group'] = 'Группы пользователей';
$txt['admin_news_select_group_desc'] = 'Пожалуйста, отметьте группы пользователей, которые должны получить новости.';
$txt['admin_news_select_members'] = 'Пользователи';
$txt['admin_news_select_members_desc'] = 'Дополнительные пользователи, которым будут отправлены новости.';
$txt['admin_news_select_excluded_members'] = 'За исключением пользователей';
$txt['admin_news_select_excluded_members_desc'] = 'Пользователи, которые не должны получать новости.';
$txt['admin_news_select_excluded_groups'] = 'За исключением групп';
$txt['admin_news_select_excluded_groups_desc'] = 'Выберите группы пользователей, которые не должны получать новости.';
$txt['admin_news_select_email'] = 'E-mail';
$txt['admin_news_select_email_desc'] = 'Адреса, на которые отправляется сообщение, должны быть разделены точкой с запятой (адрес1; адрес2)';
$txt['admin_news_select_override_notify'] = 'Отправить сообщение всем пользователям, без исключения';
// Use entities in below.
$txt['admin_news_cannot_pm_emails_js'] = 'Вы не можете отправить личное сообщение на e-mail. Если продолжите, все введенные адреса будут проигнорированы.\\n\\nУверены, что хотите сделать это?';

$txt['mailqueue_browse'] = 'Обзор очереди';
$txt['mailqueue_settings'] = 'Настройки почты';

$txt['admin_search'] = 'Быстрый поиск';
$txt['admin_search_type_internal'] = 'Задача/Настройка';
$txt['admin_search_type_member'] = 'Пользователь';
$txt['admin_search_type_online'] = 'Документация онлайн';
$txt['admin_search_go'] = 'Искать';
$txt['admin_search_results'] = 'Результаты поиска';
$txt['admin_search_results_desc'] = 'Результаты для поиска: &quot;%1$s&quot;';
$txt['admin_search_results_again'] = 'Искать снова';
$txt['admin_search_results_none'] = 'Результатов не найдено!';

$txt['admin_search_section_sections'] = 'Секция';
$txt['admin_search_section_settings'] = 'Настройки';

$txt['core_settings_title'] = 'Основные настройки';
$txt['mods_cat_features'] = 'Общие настройки';
$txt['mods_cat_security_general'] = 'Общие настройки';
$txt['antispam_title'] = 'Антиспам';
$txt['mods_cat_modifications_misc'] = 'Настройки модификаций';
$txt['mods_cat_layout'] = 'Отображение';
$txt['karma'] = 'Карма';
$txt['moderation_settings_short'] = 'Предупреждения';
$txt['signature_settings_short'] = 'Подписи';
$txt['custom_profile_shorttitle'] = 'Поля профиля';
$txt['pruning_title'] = 'Очистка логов';

$txt['boardsEdit'] = 'Управление разделами';
$txt['mboards_new_cat'] = 'Создать новую категорию';
$txt['manage_holidays'] = 'Управление праздниками';
$txt['calendar_settings'] = 'Настройки календаря';
$txt['search_weights'] = 'Параметры поиска';
$txt['search_method'] = 'Поисковое индексирование';

$txt['smiley_sets'] = 'Установленные смайлы';
$txt['smileys_add'] = 'Добавить смайлы';
$txt['smileys_edit'] = 'Изменить смайлы';
$txt['smileys_set_order'] = 'Порядок смайлов';
$txt['icons_edit_message_icons'] = 'Иконки сообщений';

$txt['membergroups_new_group'] = 'Добавить группу';
$txt['membergroups_edit_groups'] = 'Редактирование групп';
$txt['permissions_groups'] = 'Права доступа по группам';
$txt['permissions_boards'] = 'Права доступа по разделам';
$txt['permissions_profiles'] = 'Изменение профилей';
$txt['permissions_post_moderation'] = 'Премодерация сообщений';

$txt['browse_packages'] = 'Обзор пакетов';
$txt['download_packages'] = 'Загрузка пакетов';
$txt['installed_packages'] = 'Установленные пакеты';
$txt['package_file_perms'] = 'Права доступа на файлы';
$txt['package_settings'] = 'Настройки';
$txt['themeadmin_admin_title'] = 'Управление и установка';
$txt['themeadmin_list_title'] = 'Настройки тем оформления';
$txt['themeadmin_reset_title'] = 'Настройки пользователей';
$txt['themeadmin_edit_title'] = 'Изменение темы оформления';
$txt['admin_browse_register_new'] = 'Регистрация нового пользователя';

$txt['search_engines'] = 'Поисковые системы';
$txt['spiders'] = 'Пауки';
$txt['spider_logs'] = 'Логи пауков';
$txt['spider_stats'] = 'Статистика';

$txt['paid_subscriptions'] = 'Платная подписка';
$txt['paid_subs_view'] = 'Просмотр подписки';

?>