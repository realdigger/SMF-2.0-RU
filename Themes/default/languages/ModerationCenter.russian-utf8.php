<?php
// Version: 2.0; ModerationCenter

global $scripturl;

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['moderation_center'] = 'Центр модерации';
$txt['mc_main'] = 'Главная';
$txt['mc_posts'] = 'Сообщения';
$txt['mc_groups'] = 'Группы';

$txt['mc_view_groups'] = 'Просмотр групп';

$txt['mc_description'] = 'Это ваш "Центр модерации". Здесь находятся все функции модерации, которые разрешены для вашего аккаунта администратором. Этот раздел отражает все последние события форума. Вы можете настроить его персонально для себя <a href="' . $scripturl . '?action=moderate;area=settings">здесь</a>.';
$txt['mc_group_requests'] = 'Запросы в группы';
$txt['mc_unapproved_posts'] = 'Неодобренные сообщения';
$txt['mc_watched_users'] = 'Пользователи под наблюдением';
$txt['mc_watched_topics'] = 'Темы под наблюдением';
$txt['mc_scratch_board'] = 'Панель управления модератора';
$txt['mc_latest_news'] = 'Последние новости Simple Machines';
$txt['mc_recent_reports'] = 'Последние отчеты о темах';
$txt['mc_warnings'] = 'Логи предупреждений';
$txt['mc_notes'] = 'Примечания для модераторов';

$txt['mc_cannot_connect_sm'] = 'Невозможно соединиться с simplemachines.org для получения последних новостей.';

$txt['mc_recent_reports_none'] = 'Отчетов нет';
$txt['mc_watched_users_none'] = 'В данный момент нет пользователей под наблюдением.';
$txt['mc_group_requests_none'] = 'В данный момент нет запросов в группы.';

$txt['mc_seen'] = '%1$s последний просмотр %2$s';
$txt['mc_seen_never'] = '%1$s не просмотрено';
$txt['mc_groupr_by'] = 'от';

$txt['mc_reported_posts_desc'] = 'Здесь можно просматривать все отчеты, присланные пользователями форума.';
$txt['mc_reportedp_active'] = 'Активные отчеты';
$txt['mc_reportedp_closed'] = 'Старые отчеты';
$txt['mc_reportedp_by'] = 'от';
$txt['mc_reportedp_reported_by'] = 'Отчеты от';
$txt['mc_reportedp_last_reported'] = 'Последние отчеты';
$txt['mc_reportedp_none_found'] = 'Отчетов нет';

$txt['mc_reportedp_details'] = 'Детали';
$txt['mc_reportedp_close'] = 'Закрыть';
$txt['mc_reportedp_open'] = 'Открыть';
$txt['mc_reportedp_ignore'] = 'Игнорировать';
$txt['mc_reportedp_unignore'] = 'Перестать игнорировать';
// Do not use numeric entries in the below string.
$txt['mc_reportedp_ignore_confirm'] = 'Уверены, что хотите игнорировать отчет об этом сообщении?\\n\\nЭто действие приведет к исключению отчета для всех модераторов форума.';
$txt['mc_reportedp_close_selected'] = 'Закрыть выделенные';

$txt['mc_groupr_group'] = 'Группа';
$txt['mc_groupr_member'] = 'Пользователь';
$txt['mc_groupr_reason'] = 'Причина';
$txt['mc_groupr_none_found'] = 'Запросов в группы нет.';
$txt['mc_groupr_submit'] = 'Отправить';
$txt['mc_groupr_reason_desc'] = 'Причина отклонения запроса %1$s на присоединение к &quot;%2$s&quot;';
$txt['mc_groups_reason_title'] = 'Причина отклонения';
$txt['with_selected'] = 'С выделенными';
$txt['mc_groupr_approve'] = 'Одобрить запрос';
$txt['mc_groupr_reject'] = 'Отклонить запрос (без указания причины)';
$txt['mc_groupr_reject_w_reason'] = 'Отклонить запрос, указав причину';
// Do not use numeric entries in the below string.
$txt['mc_groupr_warning'] = 'Вы действительно хотите сделать это?';

$txt['mc_unapproved_attachments_none_found'] = 'Неодобренных вложений не найдено!';
$txt['mc_unapproved_replies_none_found'] = 'Неодобренных сообщений не найдено!';
$txt['mc_unapproved_topics_none_found'] = 'Неодобренных тем не найдено!';
$txt['mc_unapproved_posts_desc'] = 'Здесь можно одобрить или удалить любые сообщения, ожидающие модерации.';
$txt['mc_unapproved_replies'] = 'Сообщений';
$txt['mc_unapproved_topics'] = 'Тем';
$txt['mc_unapproved_by'] = '';
$txt['mc_unapproved_sure'] = 'Уверены, что хотите сделать это?';
$txt['mc_unapproved_attach_name'] = 'Название вложения';
$txt['mc_unapproved_attach_size'] = 'Размер файла';
$txt['mc_unapproved_attach_poster'] = 'Автор';
$txt['mc_viewmodreport'] = 'Отчёт модератору %1$s от %2$s';
$txt['mc_modreport_summary'] = 'Всего %1$d отчетов, связанных с этим сообщением. Последний отчет %2$s.';
$txt['mc_modreport_whoreported_title'] = 'Пользователи, приславшие отчет о данном сообщении';
$txt['mc_modreport_whoreported_data'] = 'Отчет от %1$s на %2$s. Причина:';
$txt['mc_modreport_modactions'] = 'Действие выполнено другими модераторами';
$txt['mc_modreport_mod_comments'] = 'Комментарий модератора';
$txt['mc_modreport_no_mod_comment'] = 'Комментарии модератора отсутствуют';
$txt['mc_modreport_add_mod_comment'] = 'Добавить комментарий';

$txt['show_notice'] = 'Текст уведомления';
$txt['show_notice_subject'] = 'Тема';
$txt['show_notice_text'] = 'Текст';

$txt['mc_watched_users_title'] = 'Пользователи под наблюдением';
$txt['mc_watched_users_desc'] = 'Здесь можно отслеживать всех пользователей, находящихся под &quot;наблюдением&quot; модераторов и требующие одобрения сообщения от них. ';
$txt['mc_watched_users_post'] = 'По сообщениям';
$txt['mc_watched_users_warning'] = 'Уровень предупреждения';
$txt['mc_watched_users_last_login'] = 'Последняя активность';
$txt['mc_watched_users_last_post'] = 'Последнее сообщение';
$txt['mc_watched_users_no_posts'] = 'От пользователей под наблюдением сообщений нет.';
// Don't use entities in the two strings below.
$txt['mc_watched_users_delete_post'] = 'Уверены, что хотите удалить это сообщение?';
$txt['mc_watched_users_delete_posts'] = 'Уверены, что хотите удалить эти сообщения?';
$txt['mc_watched_users_posted'] = 'Сохранено';
$txt['mc_watched_users_member'] = 'По пользователям';

$txt['mc_warnings_description'] = 'В этом разделе находится список всех предупреждений, сделанных на форуме за последнее время. Вы можете добавить или изменить шаблоны, используемые для отсылки пользователям предупреждений.';
$txt['mc_warning_log'] = 'Логи предупреждений';
$txt['mc_warning_templates'] = 'Свои шаблоны';
$txt['mc_warning_log_title'] = 'Посмотреть лог предупреждений';
$txt['mc_warning_templates_title'] = 'Свои шаблоны предупреждений';

$txt['mc_warnings_none'] = 'Предупреждений нет!';
$txt['mc_warnings_recipient'] = 'Получатель';

$txt['mc_warning_templates_none'] = 'Нет своих шаблонов предупреждений';
$txt['mc_warning_templates_time'] = 'Время создания';
$txt['mc_warning_templates_name'] = 'Шаблон';
$txt['mc_warning_templates_creator'] = 'Кем создан';
$txt['mc_warning_template_add'] = 'Добавить шаблон';
$txt['mc_warning_template_modify'] = 'Изменить шаблон';
$txt['mc_warning_template_delete'] = 'Удалить выбранные';
$txt['mc_warning_template_delete_confirm'] = 'Уверены, что хотите удалить выбранные шаблоны?';

$txt['mc_warning_template_desc'] = 'Используйте эту страницу для заполнения детальной информации о шаблоне. Помните, что поле "Заголовок шаблона" не является частью шаблона. Помните, что уведомление отсылается в системе личных сообщений с использованием кодов BB, которые не описываются в шаблоне. Помните, что если используете переменную {MESSAGE}, то этот шаблон будет недоступен при использовании общих предупреждений (предупреждения не включаются в текст сообщения).';
$txt['mc_warning_template_title'] = 'Заголовок шаблона';
$txt['mc_warning_template_body_desc'] = 'Содержание уведомления. Вы можете использовать следующую ссылку для шаблона.<ul style="margin-top: 0px;"><li>{MEMBER} &mdash; Имя пользователя.</li><li>{MESSAGE} &mdash; присоединить модерируемое сообщение. (Если оно есть)</li><li>{FORUMNAME} &mdash; Имя форума.</li><li>{SCRIPTURL} &mdash; WEB-адрес форума.</li><li>{REGARDS} &mdash; стандартная подпись e-mail.</li></ul>';
$txt['mc_warning_template_body_default'] = '{MEMBER},' . "\n\n" . 'Вам выносится предупреждение за плохое поведение на форуме. Пожалуйста, прекратите нарушение правил форума во избежание применения к Вам административных санкций.' . "\n\n" . '{REGARDS}';
$txt['mc_warning_template_personal'] = 'Личный шаблон';
$txt['mc_warning_template_personal_desc'] = 'При выборе этой опции видеть шаблон, изменять и использовать сможете только Вы. Если эта опция не выбрана, видеть и использовать шаблон могут все модераторы.';
$txt['mc_warning_template_error_empty'] = 'Вы должны указать и заголовок, и тело сообщения.';

$txt['mc_prefs'] = 'Настройки';
$txt['mc_settings'] = 'Изменить настройки';
$txt['mc_prefs_title'] = 'Настройки модератора';
$txt['mc_prefs_desc'] = 'Этот раздел позволяет вам установить некоторые персональные настройки, такие как уведомления по e-mail, для слежения за деятельностью модераторов.';
$txt['mc_prefs_homepage'] = 'Элементы для отображения на странице модерации';
$txt['mc_prefs_latest_news'] = 'Новости с сайта simplemachines.org';
$txt['mc_prefs_show_reports'] = 'Показывать количество открытых отчетов в шапке форума';
$txt['mc_prefs_notify_report'] = 'Уведомлять об отчетах';
$txt['mc_prefs_notify_report_never'] = 'Никогда';
$txt['mc_prefs_notify_report_moderator'] = 'Только если я модерирую раздел';
$txt['mc_prefs_notify_report_always'] = 'Всегда';
$txt['mc_prefs_notify_approval'] = 'Уведомлять об ожидающих одобрения элементах';

// Use entities in the below string.
$txt['mc_click_add_note'] = 'Добавить новое примечание';
$txt['mc_add_note'] = 'Добавить';

?>