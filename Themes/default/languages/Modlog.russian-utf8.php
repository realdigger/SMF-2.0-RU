<?php
// Version: 2.0; Modlog

global $scripturl;

$txt['modlog_date'] = 'Дата';
$txt['modlog_member'] = 'Пользователь';
$txt['modlog_position'] = 'Группа';
$txt['modlog_action'] = 'Действие';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Результаты поиска';
$txt['modlog_total_entries'] = 'Всего записей';
$txt['modlog_ac_approve_topic'] = 'Одобрена тема &quot;{topic}&quot; от пользователя &quot;{member}&quot;';
$txt['modlog_ac_approve'] = 'Одобрено сообщение &quot;{subject}&quot; в теме &quot;{topic}&quot; от пользователя &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Заблокирована тема &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = 'Пользователь {member} получил предупреждение за &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Разблокирована тема &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Прикреплена тема &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Откреплена тема &quot;{topic}&quot;';
$txt['modlog_ac_delete'] = 'Удалено сообщение &quot;{subject}&quot; от пользователя &quot;{member}&quot; из темы &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Удален пользователь &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Удалена тема &quot;{topic}&quot; из раздела &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Отредактировано сообщение &quot;{message}&quot; от пользователя &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Объединены темы в &quot;{topic}&quot;';
$txt['modlog_ac_split'] = 'Разделена тема &quot;{topic}&quot; новая тема &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = 'Перенесена тема &quot;{topic}&quot; из раздела &quot;{board_from}&quot; в раздел &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Отредактирован профиль';
$txt['modlog_ac_pruned'] = 'Удалено несколько сообщений с возрастом более {days} дней';
$txt['modlog_ac_news'] = 'Изменены новости';
$txt['modlog_enter_comment'] = 'Ввести комментарий';
$txt['modlog_moderation_log'] = 'Лог модерации';
$txt['modlog_moderation_log_desc'] = 'Ниже показан список всех действий, произведенных модераторами форума.<br /><strong>Обратите внимание:</strong> Записи не могут быть удалены из списка логов, пока не пройдет 24 часа.';
$txt['modlog_no_entries_found'] = 'Записей не найдено';
$txt['modlog_remove'] = 'Удалить';
$txt['modlog_removeall'] = 'Удалить все';
$txt['modlog_go'] = 'Поиск';
$txt['modlog_add'] = 'Добавить';
$txt['modlog_search'] = 'Быстрый поиск';
$txt['modlog_by'] = 'по имени';
$txt['modlog_id'] = '<em>(Удалено - ID:%1$d)</em>';

$txt['modlog_ac_add_warn_template'] = 'Добавлен шаблон предупреждения: &quot;{template}&quot;';
$txt['modlog_ac_modify_warn_template'] = 'Отредактирован шаблон предупреждения : &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = 'Удален шаблон предупреждения: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Добавлены параметры бана:';
$txt['modlog_ac_ban_trigger_member'] = ' <em>Пользователь:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>Email:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = ' <em>Имя хоста:</em> {hostname}';

$txt['modlog_admin_log'] = 'Логи администрирования';
$txt['modlog_admin_log_desc'] = 'Ниже показан список всех действий администраторов форума.<br /><strong>Обратите внимание:</strong> Записи не могут быть удалены из списка логов, пока не пройдет 24 часа.';
$txt['modlog_admin_log_no_entries_found'] = 'Записей не найдено.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = 'Форум обновлен до версии {version}';
$txt['modlog_ac_install'] = 'Установлена версия {version}';
$txt['modlog_ac_add_board'] = 'Добавлен новый раздел: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = 'Изменен раздел &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = 'Удален раздел &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = 'Добавлена новая категория, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = 'Изменена категория &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = 'Удалена категория &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = 'Удалена группа &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = 'Добавлена группа &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = 'Изменена группа &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = 'Пользователь &quot;{member}&quot; добавлен в группу &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = 'Пользователь &quot;{member}&quot; удален из группы &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = 'Пользователь &quot;{member}&quot; удален из всех групп';

$txt['modlog_ac_remind_member'] = 'Отправлено уведомление пользователю &quot;{member}&quot; для активации учётной записи';
$txt['modlog_ac_approve_member'] = 'Одобрена/Активирована учётная запись пользователя &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Произведена рассылка';

$txt['modlog_ac_install_package'] = 'Установлен мод: &quot;{package}&quot;, версия {version}';
$txt['modlog_ac_upgrade_package'] = 'Обновлен мод: &quot;{package}&quot; до версии {version}';
$txt['modlog_ac_uninstall_package'] = 'Удален мод: &quot;{package}&quot;, версия {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = 'Восстановлена тема &quot;{topic}&quot; из раздела &quot;{board}&quot; в раздел &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Восстановлены сообщения из темы &quot;{subject}&quot; в тему &quot;{topic}&quot; в раздел &quot;{board}&quot;.';

$txt['modlog_parameter_guest'] = '<em>Гость</em>';

?>