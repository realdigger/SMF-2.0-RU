<?php
// Version: 2.0; ManagePermissions

$txt['permissions_title'] = 'Управление правами доступа пользователей';
$txt['permissions_modify'] = 'Изменить';
$txt['permissions_view'] = 'Просмотр';
$txt['permissions_allowed'] = 'Разрешить';
$txt['permissions_denied'] = 'Запретить';
$txt['permission_cannot_edit'] = '<strong>Обратите внимание:</strong> нельзя редактировать данный профиль прав доступа, поскольку это предопределенный профиль, включенный в состав программного обеспечения форума. Для изменения прав доступа в данном профиле необходимо создать дубликат данного профиля. Для выполнения данной задачи нажмите <a href="%1$s">здесь</a>.';

$txt['permissions_for_profile'] = 'Права доступа для профиля';
$txt['permissions_boards_desc'] = 'Ниже показан список прав доступа для каждого раздела форума. Можно изменить назначенные профиля прав доступа нажав на название раздела или выбрав &quot;изменить все&quot; вверху страницы. Для изменения профиля просто нажмите на название профиля.';
$txt['permissions_board_all'] = 'Изменить все';
$txt['permission_profile'] = 'Профиль прав доступа';
$txt['permission_profile_desc'] = '<a href="%1$s">Установить права доступа</a> на раздел.';
$txt['permission_profile_inherit'] = 'Наследуются от родительского раздела';

$txt['permissions_profile'] = 'Профиль';
$txt['permissions_profiles_desc'] = 'Профили прав доступа назначаются индивидуально для каждого раздела для упрощения управления настройками безопасности. В данном разделе можно создавать, редактировать и удалять профили прав доступа.';
$txt['permissions_profiles_change_for_board'] = 'Изменить профиль прав доступа для: &quot;%1$s&quot;';
$txt['permissions_profile_default'] = 'По умолчанию';
$txt['permissions_profile_no_polls'] = 'Без голосований';
$txt['permissions_profile_reply_only'] = 'Только ответы';
$txt['permissions_profile_read_only'] = 'Только для чтения';

$txt['permissions_profile_rename'] = 'Переименовать';
$txt['permissions_profile_edit'] = 'Изменить профили';
$txt['permissions_profile_new'] = 'Новый профиль';
$txt['permissions_profile_new_create'] = 'Создать';
$txt['permissions_profile_name'] = 'Название профиля';
$txt['permissions_profile_used_by'] = 'Используется в';
$txt['permissions_profile_used_by_one'] = 'В одном разделе';
$txt['permissions_profile_used_by_many'] = '%1$d разделах';
$txt['permissions_profile_used_by_none'] = 'Не используется разделами';
$txt['permissions_profile_do_edit'] = 'Изменить';
$txt['permissions_profile_do_delete'] = 'Удалить';
$txt['permissions_profile_copy_from'] = 'Копировать права доступа из';

$txt['permissions_includes_inherited'] = 'Наследуемые группы';

$txt['permissions_all'] = 'все';
$txt['permissions_none'] = 'нет';
$txt['permissions_set_permissions'] = 'Установить';

$txt['permissions_advanced_options'] = 'Расширенные настройки';
$txt['permissions_with_selection'] = 'С выделенным';
$txt['permissions_apply_pre_defined'] = 'Применить предустановленный профиль прав доступа';
$txt['permissions_select_pre_defined'] = 'Выберите профиль';
$txt['permissions_copy_from_board'] = 'Копировать права доступа с этого раздела';
$txt['permissions_select_board'] = 'Выберите раздел';
$txt['permissions_like_group'] = 'Установить права доступа как у этой группы';
$txt['permissions_select_membergroup'] = 'Выбрать группу';
$txt['permissions_add'] = 'Разрешить';
$txt['permissions_remove'] = 'Сбросить права доступа';
$txt['permissions_deny'] = 'Запретить';
$txt['permissions_select_permission'] = 'Выберите права доступа';

// All of the following block of strings should not use entities, instead use \\" for &quot; etc.
$txt['permissions_only_one_option'] = 'Вы можете выбрать только одно действие при изменении прав доступа';
$txt['permissions_no_action'] = 'Действие не выбрано';
$txt['permissions_deny_dangerous'] = 'Вы собираетесь запретить одно или несколько действий.\\nЕщё раз всё проверьте, чтобы случайно не урезать кому-нибудь права.\\n\\nХотите продолжить?';

$txt['permissions_modify_group'] = 'Изменение прав пользователей';
$txt['permissions_general'] = 'Основные права';
$txt['permissions_board'] = 'Права для разделов с глобальными привилегиями';
$txt['permissions_board_desc'] = '<strong>Обратите внимание</strong>: изменение прав доступа для данного раздела затронет все разделы, которые используют профиль прав доступа &quot;По умолчанию&quot;. Остальных разделов эти изменения НЕ коснутся.';
$txt['permissions_commit'] = 'Сохранить';
$txt['permissions_on'] = 'в профиле';
$txt['permissions_local_for'] = 'Локальные права доступа для группы';
$txt['permissions_option_on'] = 'A';
$txt['permissions_option_off'] = 'X';
$txt['permissions_option_deny'] = 'D';
$txt['permissions_option_desc'] = 'В качестве прав доступа можно установить \'Разрешить\' (A), \'Отклонить\' (X), или <span style="color: red;">\'Запретить\' (D)</span>.<br /><br />Помните, что если запретили права, любой пользователь &mdash; даже модератор или кто угодно, находящийся в этой группе, лишится этих прав.<br />Поэтому, следует пользоваться запретом прав с осторожностью, только когда это <strong>необходимо</strong>. Отклонение прав, в свою очередь, запрещает, если не перекрывается другим правом.';
$txt['permissions_change_view'] = 'Изменить вид';
$txt['permissions_view_simple'] = 'Простой';
$txt['permissions_view_classic'] = 'Классический';

$txt['permissiongroup_general'] = 'Общие';
$txt['permissionname_view_stats'] = 'Просмотр статистики форума';
$txt['permissionhelp_view_stats'] = 'Статистика пользователей отображает общую информацию о форуме, такую как, общее количество пользователей, количество оставленных сообщений, созданных тем&nbsp;и&nbsp;т.&nbsp;д.';
$txt['permissionname_view_mlist'] = 'Просмотр списков пользователей и групп';
$txt['permissionhelp_view_mlist'] = 'Список пользователей показывает всех пользователей, зарегистрированных на форуме. К списку может быть применена сортировка и поиск. Список пользователей доступен с главной страницы и со страницы со статистикой форума. Также, страницы групп пользователей являются мини списками пользователей входящих в них.';
$txt['permissionname_who_view'] = 'Просмотр списка "Сейчас на форуме"';
$txt['permissionhelp_who_view'] = 'В списке "Сейчас на форуме" отображаются пользователи, которые в данный момент находятся на форуме, а также их текущие действия или местоположение. Эти права доступа будут работать только если включить их в общих настройках форума. Чтобы просмотреть этот список, нажмите на ссылку <strong>Сейчас на форуме</strong>, на главной странице. Если запретить, пользователи смогут просматривать список, но не будут видеть, где находятся и что делают остальные пользователи.';
$txt['permissionname_search_posts'] = 'Поиск сообщений и тем';
$txt['permissionhelp_search_posts'] = 'Данные права позволяют пользователям использовать функцию поиска по форуму. Если разрешить эту функцию, на главной странице пользователи увидят кнопку ПОИСК.';
$txt['permissionname_karma_edit'] = 'Изменение кармы пользователей';
$txt['permissionhelp_karma_edit'] = 'Карма &mdash; это дополнительная возможность форума, которая отображает популярность пользователя на форуме. Данные права доступа будут работать, только если включить функцию Кармы, в настройках форума. Для гостей данные права доступа установить невозможно.';

$txt['permissiongroup_pm'] = 'Личные сообщения';
$txt['permissionname_pm_read'] = 'Чтение личных сообщений';
$txt['permissionhelp_pm_read'] = 'Данные права доступа дают пользователям доступ в раздел личных сообщений. Без этих прав, пользователи не смогут читать личные сообщения.';
$txt['permissionname_pm_send'] = 'Отправка личных сообщений';
$txt['permissionhelp_pm_send'] = 'Возможность отправки личных сообщений другим пользователям форума. Необходимы права для чтения личных сообщений.';

$txt['permissiongroup_calendar'] = 'Календарь';
$txt['permissionname_calendar_view'] = 'Просмотр календаря';
$txt['permissionhelp_calendar_view'] = 'Для каждого месяца года в календаре отображаются дни рождения, праздники или соответствующие события. Эти права доступа дают возможность просматривать календарь. При наличии данных прав пользователи увидят кнопку &laquo;Календарь&raquo; в главном меню форума. Не забудьте включить функцию календаря в настройках форума (Конфигурация => Основные настройки).';
$txt['permissionname_calendar_post'] = 'Создание событий в календаре';
$txt['permissionhelp_calendar_post'] = 'Событие это созданная тема, которая привязана к определенному дню календаря. Событие может быть создано, если пользователь имеет права создания новых тем на форуме.';
$txt['permissionname_calendar_edit'] = 'Редактирование событий в календаре';
$txt['permissionhelp_calendar_edit'] = 'Событие &mdash; это дата, связанная с определенной датой или диапазоном дат. Любое событие можно отредактировать, нажав на красную звездочку (*) рядом с ним. Для этого пользователь должен иметь право на редактирование первого сообщения в соответствующей теме.';
$txt['permissionname_calendar_edit_own'] = 'Собственные события';
$txt['permissionname_calendar_edit_any'] = 'Любые события';

$txt['permissiongroup_maintenance'] = 'Администрирование форума';
$txt['permissionname_admin_forum'] = 'Администрирование форума и базы данных';
$txt['permissionhelp_admin_forum'] = 'Это право позволяет пользователю:<ul><li>изменять настройки форума, базы данных и тем оформления </li><li>управлять пакетами модификаций</li><li> использовать функцию обслуживания форума</li><li> просматривать ошибки форума и лог модераторских действий</li></ul> Используйте эти права доступа с осторожностью. Оно дает очень большие привилегии на форуме.';
$txt['permissionname_manage_boards'] = 'Управление разделами и категориями';
$txt['permissionhelp_manage_boards'] = 'Эти права доступа позволяют пользователям создавать, редактировать и удалять разделы и категории на форуме.';
$txt['permissionname_manage_attachments'] = 'Управление вложениями и аватарами';
$txt['permissionhelp_manage_attachments'] = 'Эти права доступа позволяют пользователям управлять вложениями и аватарами на форуме.';
$txt['permissionname_manage_smileys'] = 'Управление смайлами и иконками сообщений';
$txt['permissionhelp_manage_smileys'] = 'Эти права доступа позволяют пользователям управлять смайлами форума. Удалять, добавлять, редактировать смайлы и их наборы. Если разрешены дополнительные иконки сообщений, то добавлять и изменять их, тоже.';
$txt['permissionname_edit_news'] = 'Редактирование новостей';
$txt['permissionhelp_edit_news'] = 'Это право позволяет пользователям управлять новостями форума. Функция новостей должна быть включена в настройках форума.';
$txt['permissionname_access_mod_center'] = 'Доступ в центр модерации';
$txt['permissionhelp_access_mod_center'] = 'С данным правом доступа пользователи этой группы получат доступ в центр модерации, где будут иметь доступ ко всему функционалу. Обратите внимание данное право не даст привилегии модератора.';

$txt['permissiongroup_member_admin'] = 'Администрирование пользователей';
$txt['permissionname_moderate_forum'] = 'Управление пользователями форума';
$txt['permissionhelp_moderate_forum'] = 'Эти права доступа включают все важные функции модерирования, такие как:<ul class="normallist"><li>доступ к настройке регистрации</li><li>просмотр и удаление пользователей</li><li>просмотр информации пользователей, включающий проверку IP адреса и (скрытый) онлайн статус</li><li>активацию учетных записей</li><li>получение уведомлений об одобрении учетной записи и возможность одобрить учетную запись</li><li>отправку личных сообщений пользователям, которые отказались от получения личных сообщений</li><li>некоторые другие функции</li></ul>';
$txt['permissionname_manage_membergroups'] = 'Управление группами пользователей';
$txt['permissionhelp_manage_membergroups'] = 'Возможность редактировать группы пользователей, а также включать пользователей в эти группы.';
$txt['permissionname_manage_permissions'] = 'Управление правами доступа';
$txt['permissionhelp_manage_permissions'] = 'Это право позволяет пользователям менять права доступа у групп пользователей.';
$txt['permissionname_manage_bans'] = 'Редактирование списка банов';
$txt['permissionhelp_manage_bans'] = 'Это право позволяет пользователям редактировать список банов. Есть возможность очищать лог попыток обращения к форуму от забаненных пользователей.';
$txt['permissionname_send_mail'] = 'Отправка писем пользователям';
$txt['permissionhelp_send_mail'] = 'Это право позволяет делать массовую рассылку сообщений пользователям, либо некоторым группам пользователей. Можно отправлять электронные или личные сообщения.';
$txt['permissionname_issue_warning'] = 'Делать предупреждения пользователям';
$txt['permissionhelp_issue_warning'] = 'Это право позволяет делать предупреждения пользователям форума и изменять уровень предупреждения. Требуется включение системы предупреждений.';

$txt['permissiongroup_profile'] = 'Профили пользователей';
$txt['permissionname_profile_view'] = 'Просмотр профилей пользователей';
$txt['permissionhelp_profile_view'] = 'Это право позволяет просматривать профили зарегистрированных на форуме пользователей. Смотреть общую информацию, статистику и все сообщения пользователя.';
$txt['permissionname_profile_view_own'] = 'Собственный профиль';
$txt['permissionname_profile_view_any'] = 'Любой профиль';
$txt['permissionname_profile_identity'] = 'Изменение настроек учетной записи';
$txt['permissionhelp_profile_identity'] = 'Настройки учетной записи включают в себя основные настройки, такие как изменение пароля, e-mail, языка&nbsp;и&nbsp;т.&nbsp;д.';
$txt['permissionname_profile_identity_own'] = 'Собственный профиль';
$txt['permissionname_profile_identity_any'] = 'Любой профиль';
$txt['permissionname_profile_extra'] = 'Редактирование дополнительных настроек профиля';
$txt['permissionhelp_profile_extra'] = 'Дополнительные настройки учетной записи включают в себя настройку аватара, тем оформления, уведомлений и личных сообщений.';
$txt['permissionname_profile_extra_own'] = 'Собственный профиль';
$txt['permissionname_profile_extra_any'] = 'Любой профиль';
$txt['permissionname_profile_title'] = 'Установка надписи над аватаром';
$txt['permissionhelp_profile_title'] = 'Данная надпись отображается в каждой теме, над профилем каждого пользователя, естественно, если это поле не было оставлено пустым.';
$txt['permissionname_profile_title_own'] = 'Собственный профиль';
$txt['permissionname_profile_title_any'] = 'Любой профиль';
$txt['permissionname_profile_remove'] = 'Удаление учетной записи';
$txt['permissionhelp_profile_remove'] = 'Это право позволяет пользователям удалять собственные учетные записи с форума.';
$txt['permissionname_profile_remove_own'] = 'Собственный';
$txt['permissionname_profile_remove_any'] = 'Любой';
$txt['permissionname_profile_server_avatar'] = 'Использование аватаров форума';
$txt['permissionhelp_profile_server_avatar'] = 'Это право позволяет пользователям использовать аватары, установленные на форуме.';
$txt['permissionname_profile_upload_avatar'] = 'Загрузка аватаров на сервер';
$txt['permissionhelp_profile_upload_avatar'] = 'Это право позволяет пользователям загружать собственные аватары на сервер.';
$txt['permissionname_profile_remote_avatar'] = 'Установка удаленных аватаров';
$txt['permissionhelp_profile_remote_avatar'] = 'Это право позволит пользователям указывать ссылки на аватары, расположенные на другом сервере. В целях безопасности, не стоит разрешать использовать данную функцию непроверенным пользователям.';

$txt['permissiongroup_general_board'] = 'Общие';
$txt['permissionname_moderate_board'] = 'Модерирование раздела';
$txt['permissionhelp_moderate_board'] = 'Это право добавляет некоторые небольшие функции модерирования в разделах. Например, ответ в закрытую тему, изменение времени окончания голосования и просмотр результатов голосования.';

$txt['permissiongroup_topic'] = 'Темы';
$txt['permissionname_post_new'] = 'Создание новых тем';
$txt['permissionhelp_post_new'] = 'Это право позволяет пользователям создавать новые темы. По умолчанию, оно не позволяет отвечать в темы. То есть если у пользователя нет прав отвечать в теме, он сможет только ее создать.';
$txt['permissionname_merge_any'] = 'Объединение тем';
$txt['permissionhelp_merge_any'] = 'Это право позволяет пользователям объединять две темы в одну. Главной темой получится та, у которой первое сообщение создано раньше по времени.';
$txt['permissionname_split_any'] = 'Разделение тем';
$txt['permissionhelp_split_any'] = 'Это право позволяет пользователям разделять темы';
$txt['permissionname_send_topic'] = 'Отправка ссылок на темы друзьям и знакомым';
$txt['permissionhelp_send_topic'] = 'Это право позволяет пользователям отправлять ссылку на тему своим друзьям.';
$txt['permissionname_make_sticky'] = 'Прикрепление тем';
$txt['permissionhelp_make_sticky'] = 'Это право позволяет пользователям прикреплять темы.';
$txt['permissionname_move'] = 'Перемещение тем';
$txt['permissionhelp_move'] = 'Это право позволяет перемещать тему из одного раздела в другой.';
$txt['permissionname_move_own'] = 'Собственная тема';
$txt['permissionname_move_any'] = 'Любая тема';
$txt['permissionname_lock'] = 'Закрытие тем';
$txt['permissionhelp_lock'] = 'Это право позволяет пользователям закрывать темы. После этого в них могут отписываться только модераторы или администратор.';
$txt['permissionname_lock_own'] = 'Собственная тема';
$txt['permissionname_lock_any'] = 'Любая тема';
$txt['permissionname_remove'] = 'Удаление тем';
$txt['permissionhelp_remove'] = 'Это право позволяет пользователям удалять темы.';
$txt['permissionname_remove_own'] = 'Собственная тема';
$txt['permissionname_remove_any'] = 'Любая тема';
$txt['permissionname_post_reply'] = 'Отправка сообщений в тему';
$txt['permissionhelp_post_reply'] = 'Это право позволяет пользователям отвечать в темы';
$txt['permissionname_post_reply_own'] = 'Собственная тема';
$txt['permissionname_post_reply_any'] = 'Любая тема';
$txt['permissionname_modify_replies'] = 'Редактирование любых ответов в собственной теме';
$txt['permissionhelp_modify_replies'] = 'Это право позволяет автору темы изменять ответы в собственной теме.';
$txt['permissionname_delete_replies'] = 'Удаление любых ответов в собственной теме';
$txt['permissionhelp_delete_replies'] = 'Это право позволяет автору темы удалять ответы в собственной теме.';
$txt['permissionname_announce_topic'] = 'Объявление пользователей о теме';
$txt['permissionhelp_announce_topic'] = 'Это право позволяет отправлять уведомления о теме по e-mail зарегистрированным пользователям или только выбранным группам пользователей.';

$txt['permissiongroup_post'] = 'Сообщения';
$txt['permissionname_delete'] = 'Удаление сообщений';
$txt['permissionhelp_delete'] = 'Это право позволяет пользователям удалять сообщение в темах, кроме самого первого сообщения.';
$txt['permissionname_delete_own'] = 'Собственное сообщение';
$txt['permissionname_delete_any'] = 'Любое сообщение';
$txt['permissionname_modify'] = 'Редактирование сообщений';
$txt['permissionhelp_modify'] = 'Редактирование сообщений';
$txt['permissionname_modify_own'] = 'Собственное сообщение';
$txt['permissionname_modify_any'] = 'Любое сообщение';
$txt['permissionname_report_any'] = 'Оповещение модераторов';
$txt['permissionhelp_report_any'] = 'Это право предоставляет в каждом ответе ссылку для оповещения модераторов. После оповещения все модераторы раздела получат уведомление на e-mail со ссылкой на тему и вашим комментарием.';

$txt['permissiongroup_poll'] = 'Голосования';
$txt['permissionname_poll_view'] = 'Просмотр голосований';
$txt['permissionhelp_poll_view'] = 'Это право позволяет пользователям просматривать голосования. Без этого права они увидят одну тему (без голосования).';
$txt['permissionname_poll_vote'] = 'Возможность голосовать';
$txt['permissionhelp_poll_vote'] = 'Это право позволяет зарегистрированным пользователям голосовать в голосованиях.';
$txt['permissionname_poll_post'] = 'Создание голосований';
$txt['permissionhelp_poll_post'] = 'Это право позволяет пользователю создавать голосования. Пользователь также должен иметь право на создание новых тем. ';
$txt['permissionname_poll_add'] = 'Добавление голосований в тему';
$txt['permissionhelp_poll_add'] = 'Это право позволяет добавлять голосование в тему, которая уже была создана. Это право требует права редактирования первого сообщения в теме.';
$txt['permissionname_poll_add_own'] = 'Собственная тема';
$txt['permissionname_poll_add_any'] = 'Любая тема';
$txt['permissionname_poll_edit'] = 'Редактирование голосований';
$txt['permissionhelp_poll_edit'] = 'Это право позволяет редактировать варианты ответов в голосовании и сбрасывать счетчик голосов. Для установки количества максимальных сообщений и время голосования пользователь должен иметь права на  \'Модерирование раздела\'.';
$txt['permissionname_poll_edit_own'] = 'Собственное голосование';
$txt['permissionname_poll_edit_any'] = 'Любое голосование';
$txt['permissionname_poll_lock'] = 'Закрытие голосований';
$txt['permissionhelp_poll_lock'] = 'Это право позволяет пользователям закрывать голосования.';
$txt['permissionname_poll_lock_own'] = 'Собственное голосование';
$txt['permissionname_poll_lock_any'] = 'Любое голосование';
$txt['permissionname_poll_remove'] = 'Удаление голосований';
$txt['permissionhelp_poll_remove'] = 'Это право позволяет пользователям удалять голосования.';
$txt['permissionname_poll_remove_own'] = 'Собственное голосование';
$txt['permissionname_poll_remove_any'] = 'Любое голосование';

$txt['permissiongroup_approval'] = 'Премодерация сообщений';
$txt['permissionname_approve_posts'] = 'Одобрение элементов, ожидающих проверки';
$txt['permissionhelp_approve_posts'] = 'Это право позволяет пользователю одобрять все элементы в разделе, требующие проверки.';
$txt['permissionname_post_unapproved_replies'] = 'Оставлять сообщения в неодобренных темах';
$txt['permissionhelp_post_unapproved_replies'] = 'Это право позволяет пользователям оставлять сообщения в темах. Ответы не будут отображаться, пока их не одобрит модератор.';
$txt['permissionname_post_unapproved_replies_own'] = 'Собственная тема';
$txt['permissionname_post_unapproved_replies_any'] = 'Любая тема';
$txt['permissionname_post_unapproved_topics'] = 'Создание тем, требующих одобрения';
$txt['permissionhelp_post_unapproved_topics'] = 'Это право позволяет пользователю создавать новые темы, требующие одобрения перед публикацией на форуме.';
$txt['permissionname_post_unapproved_attachments'] = 'Оставлять вложения, требующие одобрения';
$txt['permissionhelp_post_unapproved_attachments'] = 'Это право позволяет пользователю оставлять вложения в своих сообщения. Прикрепленные файлы будут требовать одобрения, перед тем как другие пользователи смогут их увидеть.';

$txt['permissiongroup_notification'] = 'Уведомления';
$txt['permissionname_mark_any_notify'] = 'Получение уведомлений о новых ответах';
$txt['permissionhelp_mark_any_notify'] = 'Это право позволяет пользователям получать уведомления о новых сообщениях в теме.';
$txt['permissionname_mark_notify'] = 'Получение уведомлений о новых темах';
$txt['permissionhelp_mark_notify'] = 'Это право позволяет пользователям получать уведомления о новых темах.';

$txt['permissiongroup_attachment'] = 'Вложения';
$txt['permissionname_view_attachments'] = 'Просмотр вложений';
$txt['permissionhelp_view_attachments'] = 'Вложения &mdash; это файлы, прикрепленные пользователями к своим сообщениям. Данную функцию можно включить и настроить в разделе <em>Вложения и аватары</em>. Поскольку вложения не доступны напрямую, их можно защитить от скачивания пользователями без соответствующих полномочий.';
$txt['permissionname_post_attachment'] = 'Отправка вложений';
$txt['permissionhelp_post_attachment'] = 'Вложения &mdash; это файлы, которые пользователь прикрепил к своему сообщению. Это право позволят прикреплять вложения к сообщению. В одном сообщении может быть несколько вложений.';

$txt['permissiongroup_simple_view_basic_info'] = 'Использование основных функций форума';
$txt['permissiongroup_simple_use_pm_system'] = 'Использование личных сообщений для общения с пользователями';
$txt['permissiongroup_simple_post_calendar'] = 'Создание событий в календаре';
$txt['permissiongroup_simple_edit_profile'] = 'Настройка своего профиля';
$txt['permissiongroup_simple_delete_account'] = 'Удаление своей учетной записи';
$txt['permissiongroup_simple_use_avatar'] = 'Выбор или загрузка аватара';
$txt['permissiongroup_simple_moderate_general'] = 'Модерация форума';
$txt['permissiongroup_simple_administrate'] = 'Администрирование форума';

$txt['permissionname_simple_calendar_edit_own'] = 'Изменение своих событий в календаре';
$txt['permissionname_simple_calendar_edit_any'] = 'Изменений событий всех пользователей';
$txt['permissionname_simple_profile_view_own'] = 'Просмотр собственного профиля';
$txt['permissionname_simple_profile_view_any'] = 'Просмотр профилей пользователей';
$txt['permissionname_simple_profile_identity_own'] = 'Изменение настроек своей учетной записи';
$txt['permissionname_simple_profile_identity_any'] = 'Изменение настроек учетных записей всех пользователей';
$txt['permissionname_simple_profile_extra_own'] = 'Изменение дополнительных настроек своей учетной записи';
$txt['permissionname_simple_profile_extra_any'] = 'Изменение дополнительных настроек учетных записей всех пользователей';
$txt['permissionname_simple_profile_title_own'] = 'Изменение своей надписи над аватаром';
$txt['permissionname_simple_profile_title_any'] = 'Изменение надписи над аватаром всех пользователей';
$txt['permissionname_simple_profile_remove_own'] = 'Удаление своей учетной записи';
$txt['permissionname_simple_profile_remove_any'] = 'Удаление учетной записи любого пользователя';

$txt['permissiongroup_simple_make_unapproved_posts'] = 'Публикация тем и сообщений в разделе <span style="text-decoration: underline">только</span> после одобрения';
$txt['permissiongroup_simple_make_posts'] = 'Создание тем и сообщений';
$txt['permissiongroup_simple_post_polls'] = 'Создание голосований';
$txt['permissiongroup_simple_participate'] = 'Просмотр дополнительной информации в разделе';
$txt['permissiongroup_simple_modify'] = 'Изменение своих сообщений';
$txt['permissiongroup_simple_notification'] = 'Запрос уведомлений';
$txt['permissiongroup_simple_attach'] = 'Отправка вложений';
$txt['permissiongroup_simple_moderate'] = 'Модерация раздела';

$txt['permissionname_simple_post_unapproved_replies_own'] = 'Оставлять сообщения в своей теме &mdash; требовать одобрения';
$txt['permissionname_simple_post_unapproved_replies_any'] = 'Оставлять сообщения в любой теме &mdash; требовать одобрения';
$txt['permissionname_simple_post_reply_own'] = 'Оставлять сообщения в собственной теме';
$txt['permissionname_simple_post_reply_any'] = 'Оставлять сообщения в любой теме';
$txt['permissionname_simple_move_own'] = 'Перенос своей темы';
$txt['permissionname_simple_move_any'] = 'Перенос любой темы';
$txt['permissionname_simple_lock_own'] = 'Закрытие своей темы';
$txt['permissionname_simple_lock_any'] = 'Закрытие любой темы';
$txt['permissionname_simple_remove_own'] = 'Удаление своей темы';
$txt['permissionname_simple_remove_any'] = 'Удаление любой темы';
$txt['permissionname_simple_delete_own'] = 'Удаление своего сообщения';
$txt['permissionname_simple_delete_any'] = 'Удаление любого сообщения';
$txt['permissionname_simple_modify_own'] = 'Изменение своего сообщения';
$txt['permissionname_simple_modify_any'] = 'Изменение любого сообщения';
$txt['permissionname_simple_poll_add_own'] = 'Добавление голосования в свою тему';
$txt['permissionname_simple_poll_add_any'] = 'Добавление голосования в любую тему';
$txt['permissionname_simple_poll_edit_own'] = 'Изменение своего голосования';
$txt['permissionname_simple_poll_edit_any'] = 'Изменение любого голосования';
$txt['permissionname_simple_poll_lock_own'] = 'Закрытие своего голосования';
$txt['permissionname_simple_poll_lock_any'] = 'Закрытие любого голосования';
$txt['permissionname_simple_poll_remove_own'] = 'Удаление своего голосования';
$txt['permissionname_simple_poll_remove_any'] = 'Удаление любого голосования';

$txt['permissionicon'] = '';

$txt['permission_settings_title'] = 'Настройка прав доступа';
$txt['groups_manage_permissions'] = 'Группа пользователей, имеющая право изменять права доступа';
$txt['permission_settings_submit'] = 'Сохранить';
$txt['permission_settings_enable_deny'] = 'Включить использование запрещающих прав для групп';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_deny_warning'] = 'Выключение этой функции сбросит все запрещающие права пользователей.';
$txt['permission_by_board_desc'] = 'Здесь можно установить какие права будет использовать раздел, глобальные или локальные. Использование локальных разрешений подразумевает, что для групп пользователей в этом разделе действуют свои определенные права, возможно отличающиеся от глобальных.';
$txt['permission_settings_desc'] = 'Здесь можно выбрать, кто имеет право изменять права в разделах.';
$txt['permission_settings_enable_postgroups'] = 'Включить использование прав для групп, основанных на количестве сообщений';
// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['permission_disable_postgroups_warning'] = 'Выключение этой функции сбросит все выставленные права доступа для групп, основанных на количестве сообщений.';

$txt['permissions_post_moderation_desc'] = 'На этой странице можно выбрать, сообщения пользователей из каких групп должны премодерироваться  в соответствии с выбранным профилем разрешений.';
$txt['permissions_post_moderation_deny_note'] = 'Обратите внимание, что хотя включены расширенные права доступа, нельзя применять &quot;запрещающие&quot; права на этой странице. Пожалуйста, отредактируйте нужные права напрямую.';
$txt['permissions_post_moderation_select'] = 'Выбрать профиль';
$txt['permissions_post_moderation_new_topics'] = 'Новые темы';
$txt['permissions_post_moderation_replies_own'] = 'Свои сообщения';
$txt['permissions_post_moderation_replies_any'] = 'Любые сообщения';
$txt['permissions_post_moderation_attachments'] = 'Вложения';
$txt['permissions_post_moderation_legend'] = 'История';
$txt['permissions_post_moderation_allow'] = 'Возможность создать';
$txt['permissions_post_moderation_moderate'] = 'Возможность создать, но требует одобрения';
$txt['permissions_post_moderation_disallow'] = 'Создать нельзя';
$txt['permissions_post_moderation_group'] = 'Группа';

$txt['auto_approve_topics'] = 'Создание новых тем, без запроса на одобрение';
$txt['auto_approve_replies'] = 'Создание сообщений, без запроса на одобрение';
$txt['auto_approve_attachments'] = 'Оставлять вложения, без запроса на одобрение';

?>