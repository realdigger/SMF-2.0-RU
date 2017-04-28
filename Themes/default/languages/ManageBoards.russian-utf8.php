<?php
// Version: 2.0; ManageBoards

// Important! Before editing these language files please read the text at the top of index.english.php.
$txt['boards_and_cats'] = 'Управление разделами и категориями';
$txt['order'] = 'Расположение';
$txt['full_name'] = 'Название';
$txt['name_on_display'] = 'Будет отображаться на главной странице.';
$txt['boards_and_cats_desc'] = 'Здесь можно редактировать разделы и категории форума. Модераторы разделов прописываются в список через запятую, например <em>&quot;username&quot;, &quot;username&quot;</em> (указывайте реальные имена пользователей, а не отображаемые).<br />Для создания нового раздела нажмите кнопку "Добавить раздел". Для создания подраздела форума выберите пункт "Подраздел..." в раскрывающемся списке "Расположение".';
$txt['parent_members_only'] = 'Обычные пользователи';
$txt['parent_guests_only'] = 'Гости';
$txt['catConfirm'] = 'Вы действительно хотите удалить эту категорию?';
$txt['boardConfirm'] = 'Вы действительно хотите удалить этот раздел?';

$txt['catEdit'] = 'Редактировать категорию';
$txt['collapse_enable'] = 'Сворачиваемая';
$txt['collapse_desc'] = 'Позволить пользователям сворачивать эту категорию';
$txt['catModify'] = '(изменить)';

$txt['mboards_order_after'] = 'После ';
$txt['mboards_order_inside'] = 'В ';
$txt['mboards_order_first'] = 'На первом месте';

$txt['mboards_new_board'] = 'Добавить раздел';
$txt['mboards_new_cat_name'] = 'Новая категория';
$txt['mboards_add_cat_button'] = 'Добавить категорию';
$txt['mboards_new_board_name'] = 'Новый раздел';

$txt['mboards_name'] = 'Название';
$txt['mboards_modify'] = 'изменить';
$txt['mboards_permissions'] = 'права';
// Don't use entities in the below string.
$txt['mboards_permissions_confirm'] = 'Уверены, что хотите переключить данный раздел на локальные права доступа?';

$txt['mboards_delete_cat'] = 'Удалить категорию';
$txt['mboards_delete_board'] = 'Удалить раздел';

$txt['mboards_delete_cat_contains'] = 'Удаление этой категории приведёт к удалению содержащихся в ней разделов, а также тем, сообщений и вложений';
$txt['mboards_delete_option1'] = 'Удалить категорию и все разделы, находящиеся в ней.';
$txt['mboards_delete_option2'] = 'Удалить категорию и перенести все разделы в';
$txt['mboards_delete_board_contains'] = 'Удаление этого раздела перенесёт подразделы, включая все темы, сообщения и вложения, находящиеся внутри';
$txt['mboards_delete_board_option1'] = 'Удалить раздел и конвертировать его подразделы в разделы (все подразделы будут подняты на уровень выше).';
$txt['mboards_delete_board_option2'] = 'Удалить раздел и переместить его подразделы в';
$txt['mboards_delete_what_do'] = 'Пожалуйста, выберите действия, которые будут произведены с этими разделами';
$txt['mboards_delete_confirm'] = 'Подтвердить';
$txt['mboards_delete_cancel'] = 'Отмена';

$txt['mboards_category'] = 'Категория';
$txt['mboards_description'] = 'Описание';
$txt['mboards_description_desc'] = 'Небольшое пояснение к тематике раздела.';
$txt['mboards_groups'] = 'Группы пользователей';
$txt['mboards_groups_desc'] = '<em>Отметьте нужные группы галочкой.</em>';
$txt['mboards_groups_regular_members'] = 'В эту группу входят все, у кого не задана основная группа.';
$txt['mboards_groups_post_group'] = 'Эта группа основана на количестве сообщений.';
$txt['mboards_moderators'] = 'Модераторы';
$txt['mboards_moderators_desc'] = 'Пользователи, имеющие специальные привилегии в данном разделе.<br />Помните, что администраторов добавлять не требуется.';
$txt['mboards_count_posts'] = 'Подсчитывать сообщения';
$txt['mboards_count_posts_desc'] = 'Сообщения, оставленные в этом разделе, будут прибавляться к общему количеству.';
$txt['mboards_unchanged'] = 'По умолчанию';
$txt['mboards_theme'] = 'Тема оформления';
$txt['mboards_theme_desc'] = 'Эта функция позволяет изменить тему оформления только для данного раздела.';
$txt['mboards_theme_default'] = '(оставить по умолчанию.)';
$txt['mboards_override_theme'] = 'Заменять тему оформления пользователя';
$txt['mboards_override_theme_desc'] = 'При заходе в этот раздел у всех пользователей будет меняться тема оформления.';

$txt['mboards_redirect'] = 'Перенаправлять на веб-адрес';
$txt['mboards_redirect_desc'] = 'Перенаправление пользователей, входящих в раздел, на другой адрес.';
$txt['mboards_redirect_url'] = 'URL-адрес перенаправления';
$txt['mboards_redirect_url_desc'] = 'Пример: &quot;http://www.simplemachines.ru&quot;.';
$txt['mboards_redirect_reset'] = 'Сбросить счетчик переходов';
$txt['mboards_redirect_reset_desc'] = 'При выборе счётчик переходов будет сброшен на 0.';
$txt['mboards_current_redirects'] = 'Текущее количество переходов: %1$s';
$txt['mboards_redirect_disabled'] = 'Эту функцию можно включить только для пустого раздела.';
$txt['mboards_redirect_disabled_recycle'] = 'В разделе для удаленных тем перенаправление включить нельзя.';

$txt['mboards_order_before'] = 'До';
$txt['mboards_order_child_of'] = 'Подраздел';
$txt['mboards_order_in_category'] = 'В категории';
$txt['mboards_current_position'] = 'Текущая позиция';
$txt['no_valid_parent'] = 'Раздел %1$s не имеет правильной корневой категории. Используйте функцию \'поиск и устранение ошибок\' для устранения этой ошибки.';

$txt['mboards_recycle_disabled_delete'] = 'Примечание: перед тем как удалить этот раздел, необходимо выбрать другой, для хранения удаленных сообщений.';

$txt['mboards_settings_desc'] = 'Редактировать общие настройки разделов и категорий.';
$txt['groups_manage_boards'] = 'Группы, которым разрешено редактировать разделы и категории';
$txt['mboards_settings_submit'] = 'Сохранить';
$txt['recycle_enable'] = 'Разрешить восстановление удаленных тем';
$txt['recycle_board'] = 'Раздел для удаленных тем';
$txt['recycle_board_unselected_notice'] = 'Вы включили возможность восстановления удаленных темы не указав раздел для их хранения. Эта функция не будет включена до тех пор, пока не укажете раздел для хранения удаленных тем.';
$txt['countChildPosts'] = 'Добавлять количество сообщений в подразделах к статистике родительского раздела';
$txt['allow_ignore_boards'] = 'Разрешить игнорирование разделов';

$txt['mboards_select_destination'] = 'Выберите назначение для раздела \'<strong>%1$s</strong>\'';
$txt['mboards_cancel_moving'] = 'Отменить перемещение';
$txt['mboards_move'] = 'переместить';

$txt['mboards_no_cats'] = 'Не создано ни одной категории или раздела.';

?>