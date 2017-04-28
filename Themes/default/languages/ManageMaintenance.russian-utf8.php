<?php
// Version: 2.0; ManageMaintenance

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['repair_zero_ids'] = 'Найти темы и (или) сообщения, ID которых равен 0.';
$txt['repair_missing_topics'] = 'Сообщение #%1$d в несуществующей теме #%2$d.';
$txt['repair_missing_messages'] = 'Тема #%1$d не содержит  фактических сообщений.';
$txt['repair_stats_topics_1'] = 'Тема #%1$d содержит первое сообщение с некорректным ID %2$d.';
$txt['repair_stats_topics_2'] = 'Тема #%1$d содержит последнее сообщение с некорректным ID %2$d.';
$txt['repair_stats_topics_3'] = 'Тема #%1$d содержит неправильное количество ответов, %2$d.';
$txt['repair_stats_topics_4'] = 'Тема #%1$d содержит неправильное количество неодобренных сообщений, %2$d.';
$txt['repair_stats_topics_5'] = 'Тема #%1$d содержит неправильное значение одобрения.';
$txt['repair_missing_boards'] = 'Тема #%1$d  на форуме #%2$d, не существует.';
$txt['repair_missing_categories'] = 'Раздел #%1$d  в категории #%2$d, не существует.';
$txt['repair_missing_posters'] = 'Сообщение #%1$d отправленное пользователем #%2$d, не существует.';
$txt['repair_missing_parents'] = 'В разделе #%1$d подраздела #%2$d, не существует.';
$txt['repair_missing_polls'] = 'В теме #%1$d голосования не найдено #%2$d.';
$txt['repair_polls_missing_topics'] = 'Голосование #%1$d связано с несуществующей темой #%2$d.';
$txt['repair_missing_calendar_topics'] = 'Событие #%1$d связано с несуществующей темой #%2$d.';
$txt['repair_missing_log_topics'] = 'Тема #%1$d отмеченная как прочитанная одним или более пользователем, отсутствует.';
$txt['repair_missing_log_topics_members'] = 'Пользователь #%1$d отметил одну или более тему как прочитанную, но она отсутствует.';
$txt['repair_missing_log_boards'] = 'Раздел #%1$d, отмеченный прочитанным одним или более пользователей, не существует.';
$txt['repair_missing_log_boards_members'] = 'Пользователь #%1$d, отметивший прочитанным один или более разделов, не существует.';
$txt['repair_missing_log_mark_read'] = 'Раздел #%1$d, отмеченный прочитанным одним или более пользователями, не существует.';
$txt['repair_missing_log_mark_read_members'] = 'Пользователь #%1$d, отметивший один или более разделов прочитанными, не существует.';
$txt['repair_missing_pms'] = 'Личное сообщение #%1$d, отосланное одному или более пользователям, не существует.';
$txt['repair_missing_recipients'] = 'Пользователь #%1$d, получивший одно или более личных сообщений, не существует.';
$txt['repair_missing_senders'] = 'Личное сообщение #%1$d, отосланное пользователем #%2$d, не существует.';
$txt['repair_missing_notify_members'] = 'Объекты уведомления, отмеченные пользователем #%2$d, не существуют.';
$txt['repair_missing_cached_subject'] = 'Название темы #%1$d не было сохранено.';
$txt['repair_missing_topic_for_cache'] = 'Словоформы \'%1$d\' ссылаются на несуществующую тему.';
$txt['repair_missing_log_poll_member'] = 'Голосование #%1$d было открыто пользователем #%2$d, который сейчас не существует.';
$txt['repair_missing_log_poll_vote'] = 'Пользователем был отдан голос #%1$d в несуществующем голосовании #%2$d.';
$txt['repair_missing_thumbnail_parent'] = 'Существует эскиз картинки с именем %1$s, но нет самой картинки.';
$txt['repair_report_missing_comments'] = 'Отчет #%1$d о теме: &quot;%s&quot; не содержит комментариев.';
$txt['repair_comments_missing_report'] = 'Комментарий к отчету #%1$d от %s не связан ни с одним отчетом.';
$txt['repair_group_request_missing_member'] = 'Запрос на членство в группе существует для удаленного пользователя #%1$d.';
$txt['repair_group_request_missing_group'] = 'Запрос на членство в группе существует для удаленной группы #%1$d.';

$txt['repair_currently_checking'] = 'Проверить: &quot;%1$s&quot;';
$txt['repair_currently_fixing'] = 'Исправить: &quot;%1$s&quot;';
$txt['repair_operation_zero_topics'] = 'Тема с id_topic некорректно установлена в 0';
$txt['repair_operation_zero_messages'] = 'Сообщение с id_msg некорректно установлено в 0';
$txt['repair_operation_missing_topics'] = 'Сообщения принадлежат несуществующей теме';
$txt['repair_operation_missing_messages'] = 'Тема без сообщений';
$txt['repair_operation_stats_topics'] = 'Темы с некорректными первым или последним сообщением';
$txt['repair_operation_stats_topics2'] = 'Тема с неверным количеством ответов в ней';
$txt['repair_operation_stats_topics3'] = 'Тема с неверным количеством неодобренных сообщений';
$txt['repair_operation_missing_boards'] = 'Тема принадлежит отсутствующему разделу';
$txt['repair_operation_missing_categories'] = 'Раздел принадлежит несуществующей категории';
$txt['repair_operation_missing_posters'] = 'Неверная ссылка на несуществующего пользователя';
$txt['repair_operation_missing_parents'] = 'Дочерний раздел не имеет родителя';
$txt['repair_operation_missing_polls'] = 'Тема привязана к отсутствующему голосованию';
$txt['repair_operation_missing_calendar_topics'] = 'Событие привязано к несуществующей теме';
$txt['repair_operation_missing_log_topics'] = 'Логи привязаны к несуществующему разделу';
$txt['repair_operation_missing_log_topics_members'] = 'Логи привязаны к несуществующему пользователю';
$txt['repair_operation_missing_log_boards'] = 'Логи привязаны к несуществующему разделу';
$txt['repair_operation_missing_log_boards_members'] = 'Лог привязаны к несуществующему пользователю';
$txt['repair_operation_missing_log_mark_read'] = 'Отметка прочтения привязана к несуществующему разделу';
$txt['repair_operation_missing_log_mark_read_members'] = 'Отметка прочтения привязана к несуществующим пользователям';
$txt['repair_operation_missing_pms'] = 'Отправитель сообщения личной почты отсутствует';
$txt['repair_operation_missing_recipients'] = 'Отправитель сообщения личной почты ссылается на несуществующего пользователя';
$txt['repair_operation_missing_senders'] = 'Сообщение принадлежит несуществующему пользователю';
$txt['repair_operation_missing_notify_members'] = 'Лог сообщений ссылается на несуществующего пользователя';
$txt['repair_operation_missing_cached_subject'] = 'Раздел отсутствует в поисковом кэше';
$txt['repair_operation_missing_topic_for_cache'] = 'Кэш поиска ссылается на несуществующий раздел';
$txt['repair_operation_missing_member_vote'] = 'поданные голоса ссылаются на несуществующего пользователя';
$txt['repair_operation_missing_log_poll_vote'] = 'Результаты голосования ссылаются на несуществующее голосование';
$txt['repair_operation_report_missing_comments'] = 'Отчет о теме без комментария';
$txt['repair_operation_comments_missing_report'] = 'Комментарий к отчету не связан ни с одним отчетом';
$txt['repair_operation_group_request_missing_member'] = 'Запрос на участие в группе от несуществующего пользователя';
$txt['repair_operation_group_request_missing_group'] = 'Запрос на участие в несуществующей группе';

$txt['salvaged_category_name'] = 'Восстановленные данные';
$txt['salvaged_category_error'] = 'Невозможно создать категорию "Восстановленные данные"!';
$txt['salvaged_board_name'] = 'Восстановленные темы';
$txt['salvaged_board_description'] = 'Темы, созданные для сообщений из несуществующих тем';
$txt['salvaged_board_error'] = 'Невозможно создать раздел "Восстановленные темы"!';
$txt['salvaged_poll_topic_name'] = 'Восстановленное голосование';
$txt['salvaged_poll_message_body'] = 'Это голосование не было связано ни с какой темой.';

$txt['database_optimize'] = 'Оптимизировать базу данных';
$txt['database_numb_tables'] = 'Ваша база данных содержит %1$d таблиц.';
$txt['database_optimize_attempt'] = 'Попытка оптимизировать базу данных...';
$txt['database_optimizing'] = 'Оптимизация %1$s... %2$f кб оптимизировано.';
$txt['database_already_optimized'] = 'Все таблицы были оптимизированы.';
$txt['database_opimize_unneeded'] = 'Нет необходимости оптимизировать таблицы.';
$txt['database_optimized'] = ' таблиц оптимизировано.';
$txt['database_no_id'] = 'такого ID пользователя не существует';

$txt['apply_filter'] = 'Применить фильтр';
$txt['applying_filter'] = 'Применяется фильтр';
$txt['filter_only_member'] = 'Показать сообщения об ошибках этого пользователя';
$txt['filter_only_ip'] = 'Показать сообщения об ошибках этого IP адреса';
$txt['filter_only_session'] = 'Показать сообщения об ошибках этой сессии';
$txt['filter_only_url'] = 'Показать сообщения об ошибках этого адреса(URL)';
$txt['filter_only_message'] = 'Показать ошибки только с теми сообщениями';
$txt['session'] = 'Сессия';
$txt['error_url'] = 'URL ошибка на странице';
$txt['error_message'] = 'Сообщение об ошибке';
$txt['clear_filter'] = 'Очистить фильтр';
$txt['remove_selection'] = 'Удалить выделенное';
$txt['remove_filtered_results'] = 'Удалить все результаты фильтрации';
$txt['sure_about_errorlog_remove'] = 'Хотите удалить все сообщения об ошибках?';
$txt['reverse_direction'] = 'Показать в обратном хронологическом порядке';
$txt['error_type'] = 'Тип ошибки';
$txt['filter_only_type'] = 'Отображать ошибки только этого типа';
$txt['filter_only_file'] = 'Отображать ошибки только этого файла';
$txt['apply_filter_of_type'] = 'Применить фильтр';

$txt['errortype_all'] = 'Все ошибки';
$txt['errortype_general'] = 'Общие';
$txt['errortype_general_desc'] = 'Общие ошибки которые не были отнесены к другим типам';
$txt['errortype_critical'] = '<span style="color:red;">Критические</span>';
$txt['errortype_critical_desc'] = 'Критические ошибки. Их желательно исправить как можно быстрее. Наличие таких ошибок может вызвать некорректную работу форума и стать причиной нарушения безопасности работы.';
$txt['errortype_database'] = 'База данных';
$txt['errortype_database_desc'] = 'Ошибки вызванные некорректными запросами. Должны быть рассмотрены и сообщены команде SMF.';
$txt['errortype_undefined_vars'] = 'Неопределенные';
$txt['errortype_undefined_vars_desc'] = 'Ошибки вызванные неправильной передачей параметров или их отсутствием.';
$txt['errortype_template'] = 'Шаблон';
$txt['errortype_template_desc'] = 'Ошибки вызванные загрузкой шаблонов.';
$txt['errortype_user'] = 'Пользователь';
$txt['errortype_user_desc'] = 'Ошибки вызванные пользователем.  Включают неправильный ввод пароля, попытки входа когда забанен, а также попытки доступа в различные разделы форума без права доступа.';

$txt['maintain_recount'] = 'Пересчитать все форумы и статистику';
$txt['maintain_recount_info'] = 'Пересчитывает количество тем и разделов, сообщений в них, количество писем в личных ящиках и т.п.';
$txt['maintain_errors'] = 'Найти и исправить любые ошибки';
$txt['maintain_errors_info'] = 'Если, к примеру, сообщения или темы отсутствуют после краха сервера, эта функция сможет помочь восстановить потерянные данные.';
$txt['maintain_logs'] = 'Удалить незначительные логи';
$txt['maintain_logs_info'] = 'Очищает ненужные логи, которые больше не нужны.';
$txt['maintain_cache'] = 'Очистить файл кэша';
$txt['maintain_cache_info'] = 'Используется для очистки кэша при модификации файлов форума или языковых строк, когда требуется чтобы форум "забыл" старые данные.';
$txt['maintain_optimize'] = 'Оптимизировать все таблицы.';
$txt['maintain_optimize_info'] = 'Эта функция используется для увеличения быстродействия форума, т.к. уничтожает все индексы таблиц и создает их заново на основании данных, находящихся в таблицах БД.';
$txt['maintain_version'] = 'Проверить версии используемых файлов';
$txt['maintain_version_info'] = 'Эта функция дает возможность сравнения текущих версий файлов движка форума с версиями, имеющимися у разработчика движка.';
$txt['maintain_run_now'] = 'Начать выполнение';
$txt['maintain_return'] = 'Вернутся в обслуживание форума';

$txt['maintain_backup'] = 'Резервные копии базы данных';
$txt['maintain_backup_info'] = 'Скачать резервную копию базы данных на случай аварийной ситуации.';
$txt['maintain_backup_struct'] = 'Сохранить структуру таблиц.';
$txt['maintain_backup_data'] = 'Сохранить все данные из таблиц (только самое важное).';
$txt['maintain_backup_gz'] = 'Сжать файл gzip.';
$txt['maintain_backup_save'] = 'Сохранить';

$txt['maintain_old'] = 'Удалить старые сообщения';
$txt['maintain_old_since_days1'] = 'Удалить все темы, в которых не было новых сообщений более  ';
$txt['maintain_old_since_days2'] = ' дней.';
$txt['maintain_old_nothing_else'] = 'Любой тип темы (включая голосования).';
$txt['maintain_old_are_moved'] = 'Уведомления о перемещении тем.';
$txt['maintain_old_are_locked'] = 'Закрытые темы.';
$txt['maintain_old_are_not_stickied'] = 'Не удалять прикрепленные темы.';
$txt['maintain_old_all'] = 'Все разделы (нажмите для выбора определенных)';
$txt['maintain_old_choose'] = 'Выбранные разделы (нажмите для выбора всех)';
$txt['maintain_old_remove'] = 'Удалить';
$txt['maintain_old_confirm'] = 'Хотите удалить старые сообщения?\\n\\nЭто не может быть отменено!';

$txt['maintain_members'] = 'Удалить неактивных пользователей';
$txt['maintain_members_ungrouped'] = 'Пользователи без групп <span class="smalltext">(Пользователи, не относящиеся ни к одной из групп)</span>';
$txt['maintain_members_since1'] = 'Удалить всех пользователей, которые не';
$txt['maintain_members_since2'] = 'в течение';
$txt['maintain_members_since3'] = ' дней.';
$txt['maintain_members_activated'] = 'активировали свои учетные записи';
$txt['maintain_members_logged_in'] = 'посещали форум';
$txt['maintain_members_all'] = 'Все группы пользователей';
$txt['maintain_members_choose'] = 'Выбранные группы';
$txt['maintain_members_confirm'] = 'Хотите удалить учетную запись данного пользователя?\\n\\nЭто действие нельзя будет отменить!';

$txt['utf8_title'] = 'Преобразовать базу данных и данные в UTF-8';
$txt['utf8_introduction'] = 'UTF-8 является международной кодировкой, охватывающей практически все языки мира. Преобразование базы данных в UTF-8 может облегчить поддержку многоязычности вашего форума. Это также может улучшить поиск и способность сортировки для языков с нелатинскими знаками.';
$txt['utf8_warning'] = 'Если хотите преобразовать базу данных в UTF-8, ознакомьтесь со следующей информацией:
<ul>
	<li>Преобразование в кодировку UTF-8 может быть <em>опасным</em> для ваших данных! Убедитесь в наличии резервной копии базы данных <i>заранее</i>.</li>
	<li>Поскольку кодировка UTF-8 не настолько богата, как большинство остальных, пути назад не будет, если вы вдруг решите использовать базу до начала преобразования.</li>
	<li>После преобразования базы данных в UTF-8 необходимо использовать языковые файлы в аналогичной кодировке.</li>
</ul>';
$txt['utf8_charset_not_supported'] = 'Преобразование из %1$s в UTF-8 не поддерживается.';
$txt['utf8_detected_charset'] = 'Кодировка языковых файлов по умолчанию (\'%1$s\'), кодировка ваших данных \'%2$s\'.';
$txt['utf8_already_utf8'] = 'Ваша база данных и данные уже преобразованы в UTF-8. Преобразования не требуется.';
$txt['utf8_source_charset'] = 'Кодировка данных';
$txt['utf8_proceed'] = 'Продолжить';
$txt['utf8_database_charset'] = 'Кодировка базы данных';
$txt['utf8_target_charset'] = 'Преобразовать данные и базу данных в';
$txt['utf8_utf8'] = 'UTF-8';
$txt['utf8_db_version_too_low'] = 'Версия MySQL, используемая на вашем сервере, не поддерживает кодировку UTF-8. Минимальная рекомендуемая версия — 4.1.2.';
$txt['utf8_cannot_convert_fulltext'] = 'В таблице messages используется полнотекстовый индекс (применяется при поиске). Вы не сможете продолжить конвертацию в UTF-8, пока не удалите этот индекс. После конвертации индекс можно будет создать повторно.';

$txt['entity_convert_title'] = 'Преобразовать элементы HTML в UTF-8';
$txt['entity_convert_only_utf8'] = 'Перед преобразованием HTML-элементов убедитесь, что база данных имеет формат UTF-8';
$txt['entity_convert_introduction'] = 'Эта функция преобразует все символы, сохраненные в базе данных в виде HTML-последовательностей, в кодировку UTF-8. Это особенно полезно после преобразования форума из кодировки ISO-8859-1, если в сообщениях использовались символы, отличные от латинских. В таких случаях браузер посылает все символы в виде HTML-элементов. Для примера, последовательность HTML &amp;#945; представляет греческий символ &#945; (альфа). Преобразование в кодировку UTF-8 улучшит поиск и сортировку текста и уменьшит размер базы.';
$txt['entity_convert_proceed'] = 'Выполнить';

// Move topics out.
$txt['move_topics_maintenance'] = 'Перенос тем';
$txt['move_topics_select_board'] = 'Выбрать раздел';
$txt['move_topics_from'] = 'Перенести темы из';
$txt['move_topics_to'] = 'в';
$txt['move_topics_now'] = 'Перенести';
$txt['move_topics_confirm'] = 'Хотите перенести ВСЕ темы из раздела &quot;%board_from%&quot; в раздел &quot;%board_to%&quot;?';

$txt['maintain_reattribute_posts'] = 'Присвоить сообщения пользователю';
$txt['reattribute_guest_posts'] = 'Присвоить сообщения гостя, опубликованные с';
$txt['reattribute_email'] = 'E-mail';
$txt['reattribute_username'] = 'Именем пользователя';
$txt['reattribute_current_member'] = 'Присвоить сообщения пользователю';
$txt['reattribute_increase_posts'] = 'Добавить количество сообщений пользователю';
$txt['reattribute'] = 'Присвоить';
// Don't use entities in the below string.
$txt['reattribute_confirm'] = 'Хотите присвоить все сообщения гостей с %type% "%find%" пользователю "%member_to%"?';
$txt['reattribute_confirm_username'] = 'имя пользователя';
$txt['reattribute_confirm_email'] = 'e-mail';
$txt['reattribute_cannot_find_member'] = 'Пользователь, которому нужно присвоить сообщения, не найден.';

?>