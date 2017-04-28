<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Следующие темы ожидают одобрения:';
$txt['scheduled_approval_email_msg'] = 'Следующие сообщения ожидают сообщения:';
$txt['scheduled_approval_email_attach'] = 'Следующие вложения ожидают одобрения:';
$txt['scheduled_approval_email_event'] = 'Следующие события ожидают одобрения:';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONCODE:  The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. Если забыли свой пароль, можете восстановить его по этой ссылке => {FORGOTPASSWORDLINK}.

Для активации своей учётной записи, пожалуйста, перейдите по ссылке:

{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME:  The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Ваш запрос о регистрации на форуме {FORUMNAME} принят, {REALNAME}.

Имя регистрируемого пользователя {USERNAME}.

Когда ваш запрос одобрят, придет другое письмо с данного адреса, и Вы сможете войти на форум.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Запрос на вступление в группу',
		'body' => '{USERNAME},

Ваш запрос на вступление в группу "{GROUPNAME}" на форуме {FORUMNAME} одобрен. Ваша учётная запись обновлена.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Запрос на вступление в группу отклонен',
		'body' => '{USERNAME},

Ваш запрос на вступление в группу "{GROUPNAME}" на форуме {FORUMNAME} отклонен.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => 'Запрос на вступление в группу отклонен',
		'body' => '{USERNAME},

Ваш запрос на вступление в группу "{GROUPNAME}" на {FORUMNAME} отклонен.

Это произошло по следующей причине: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Добро пожаловать, {NAME}!

Ваша учётная запись была активирована, теперь можно пользоваться форумом. Ваше имя пользователя: {USERNAME}. Если забыли свой пароль, можете изменить его {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Добро пожаловать, {USERNAME}!

Ваша учётная запись на {FORUMNAME} была одобрена, теперь её нужно активировать. Для активации, пожалуйста, перейдите по ссылке:

{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Регистрация отклонена',
		'body' => '{USERNAME},

Вам отказано в регистрации на {FORUMNAME}.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Удаление учётной записи',
		'body' => '{USERNAME},

Ваша учётная запись на форуме {FORUMNAME} была удалена. Возможная причина: учётная запись так и не была активирована. Но можно зарегистрироваться снова.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Напоминание о регистрации',
		'body' => '{USERNAME},
Вы до сих пор не активировали свою учётную запись на форуме {FORUMNAME}.

Для активации, пожалуйста, перейдите по ссылке:
{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK:  The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя: {USERNAME}, пароль: {PASSWORD}.

Теперь необходимо активировать свою учётную запись. Пожалуйста, перейдите по ссылке:

{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя  {USERNAME}, Ваш пароль {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => 'Новое объявление: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Чтобы не получать такие объявления, пожалуйста, войдите на форум и снимите галочку с пункта "Получать новости и важные объявления форума на email" в своем профиле.

Полный текст объявления можно просмотреть, пройдя по этой ссылке:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Новая тема: {TOPICSUBJECT}',
		'body' => 'В разделе, на который Вы подписаны, была создана новая тема  \'{TOPICSUBJECT}\'.

Вы можете просмотреть её, перейдя по ссылке
{TOPICLINK}

В разделе может быть создано много новых тем, но Вы не будете получать о них уведомления до тех пор, пока не посетите этот раздел и не прочитаете какие-нибудь из них.

Содержание темы показано ниже:
{MESSAGE}

Чтобы отказаться от уведомления о новых темах в этом разделе, нажмите сюда:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Новая тема: {TOPICSUBJECT}',
		'body' => 'В разделе, на который Вы подписаны, была создана новая тема  \'{TOPICSUBJECT}\'.

Вы можете просмотреть её, перейдя по ссылке
{TOPICLINK}

В разделе может быть создано много новых тем, но Вы не будете получать о них уведомления до тех пор, пока не посетите этот раздел и не прочитаете какие-нибудь из них.

Чтобы отказаться от уведомления о новых темах в этом разделе, нажмите сюда:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Новая тема: {TOPICSUBJECT}',
		'body' => 'В разделе, на который Вы подписаны, была создана новая тема  \'{TOPICSUBJECT}\'.

Вы можете просмотреть её, перейдя по ссылке
{TOPICLINK}

Содержание темы показано ниже:
{MESSAGE}

Чтобы отказаться от уведомления о новых темах в этом разделе, нажмите сюда:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Новая тема: {TOPICSUBJECT}',
		'body' => 'В разделе, на который Вы подписаны, была создана новая тема  \'{TOPICSUBJECT}\'.

Вы можете просмотреть её, перейдя по ссылке
{TOPICLINK}

Чтобы отказаться от уведомления о новых темах в этом разделе, нажмите сюда:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => 'Запрос на вступление в группу.',
		'body' => '{RECPNAME},

{APPYNAME} послал запрос на вступление в группу "{GROUPNAME}". Пользователь указал следующие причины для вступления в группу:

{REASON}

Вы можете отклонить или принять данный запрос, пройдя по ссылке:

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => 'Заканчивается платная подписка на форуме {FORUMNAME}',
		'body' => '{REALNAME},

Срок вашей платной подписки на {FORUMNAME} заканчивается. Если при оплате подписки было включено автопродление, то не требуется выполнять никаких действий, в противном случае следует заказать подписку заново. Детали указаны ниже:

Название подписки: {SUBSCRIPTION}
Заканчивается: {END_DATE}

Вы можете изменить свои подписки, пройдя по ссылке:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Для перепроверки электронного адреса ваша учётная запись была деактивирована. Для повторной активации, пожалуйста, пройдите по ссылке:
{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => 'Новый пароль для авторизации на форуме {FORUMNAME}',
		'body' => 'Уважаемый {REALNAME},
Вы воспользовались функцией \'восстановления пароля\' для своей учётной записи. Для установки нового пароля перейдите по ссылке:
{REMINDLINK}

IP: {IP}
Имя пользователя: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => 'Напоминание OpenID для авторизации на форуме {FORUMNAME}',
		'body' => 'Уважаемый {REALNAME},
Вы воспользовались функцией \'восстановления OpenID\' для своей учётной записи. Ниже указан ваш OpenID:
{OPENID}

IP: {IP}
Имя пользователя: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'Опубликованные сообщения ожидают одобрения на форуме {FORUMNAME}',
		'body' => 'Это письмо содержит список всех элементов, ожидающих одобрения на форуме {FORUMNAME}.

{BODY}

Пожалуйста, войдите на форум для просмотра данных элементов.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => 'Тема: {TOPICSUBJECT} (Отправитель: {SENDERNAME})',
		'body' => 'Уважаемый {RECPNAME},
Предлагаю ознакомиться с темой "{TOPICSUBJECT}" на {FORUMNAME}.  Для просмотра перейдите по ссылке:

{TOPICLINK}

Спасибо,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => 'Тема: {TOPICSUBJECT} (Отправитель: {SENDERNAME})',
		'body' => 'Уважаемый {RECPNAME},
Предлагаю ознакомиться с темой "{TOPICSUBJECT}" на {FORUMNAME}.  Для просмотра перейдите по ссылке:

{TOPICLINK}

Также к данной теме был добавлен комментарий:
{COMMENT}

Спасибо,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => 'Уведомление о сообщении: {TOPICSUBJECT} от {POSTERNAME}',
		'body' => '{REPORTERNAME} сообщил Вам об ответе, который, возможно, необходимо отредактировать "{TOPICSUBJECT}" от {POSTERNAME}. Вы получили это уведомление, так как являетесь модератором раздела:

Тема: {TOPICLINK}
Центр модерации: {REPORTLINK}

Пользователь оставил следующий комментарий:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => 'Информация о новом пароле',
		'body' => 'Здравствуйте, {USERNAME}!

Информация для входа на {FORUMNAME} была изменена и пароль сброшен. Ниже приведена новая информация для входа.

Ваше имя пользователя "{USERNAME}", пароль: "{PASSWORD}".

Пароль можно изменить в настройках своего профиля, посетив эту страницу после входа:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. Если забыли свой пароль, можете восстановить его, посетив {FORGOTPASSWORDLINK}.

Но сначала необходимо активировать свою учётную запись. Для этого, пожалуйста, перейдите по ссылке:

{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK:  The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE:  The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. Вы выбрали авторизацию со следующим идентификатором OpenID:
{OPENID}

Но сначала необходимо активировать свою учётную запись. Для этого, пожалуйста,  перейдите по ссылке:

{ACTIVATIONLINK}

При возникновении каких-либо проблем с активацией перейдите на страницу {ACTIVATIONLINKWITHOUTCODE} и введите код "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK:  The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. Если забыли свой пароль, можете восстановить его, посетив {FORGOTPASSWORDLINK}.

Перед тем как сможете войти, администрации требуется разрешение ваших родителей/опекунов для регистрации на форуме. Дополнительную информацию можно получить, перейдя по ссылке:

{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK:  The url link to the coppa form.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. 

Вы выбрали авторизацию со следующим идентификатором OpenID:
{OPENID}

Перед тем как сможете войти, администрации требуется разрешение ваших родителей/опекунов для регистрации на форуме. Дополнительную информацию можно получить, перейдя по ссылке:

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. Если забыли свой пароль, можете восстановить его, посетив {FORGOTPASSWORDLINK}.

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Спасибо за регистрацию на форуме {FORUMNAME}. Ваше имя пользователя {USERNAME}. 

Вы выбрали авторизацию со следующим идентификатором OpenID:
{OPENID}

Для настройки своего профиля посетите эту страницу после входа:

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Ваш запрос о регистрации на форуме {FORUMNAME} принят, {REALNAME}.

Ваше имя пользователя {USERNAME}. Если забыли свой пароль, можете восстановить его, посетив {FORGOTPASSWORDLINK}.

Подождите, пока ваш запрос одобрят. Когда это произойдет, придет другое письмо с данного адреса, и Вы сможете войти на форум.

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Добро пожаловать на форум {FORUMNAME}',
		'body' => 'Ваш запрос о регистрации на форуме {FORUMNAME} принят, {REALNAME}.

Ваше имя пользователя {USERNAME}.

Вы выбрали авторизацию со следующим идентификатором OpenID:
{OPENID}

Подождите, пока ваш запрос одобрят. Когда это произойдет, придет другое письмо с данного адреса, и Вы сможете войти на форум.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Ответ в теме: {TOPICSUBJECT}',
		'body' => 'Появился ответ от {POSTERNAME} в теме, на которую Вы подписаны.

Прочитать ответ: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Ответ в теме: {TOPICSUBJECT}',
		'body' => 'Появился ответ от {POSTERNAME} в теме, на которую Вы подписаны.

Прочитать ответ: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

Содержание ответа показано ниже:
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Ответ в теме: {TOPICSUBJECT}',
		'body' => 'Появился ответ от {POSTERNAME} в теме, на которую Вы подписаны.

Прочитать ответ: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

В теме может быть оставлено много новых ответов, но уведомления о них не будут поступать, пока Вы не просмотрите сообщение, о котором уже были уведомлены.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Ответ в теме: {TOPICSUBJECT}',
		'body' => 'Появился ответ от {POSTERNAME} в теме, на которую Вы подписаны.

Прочитать ответ: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

Содержание ответа показано ниже:
{MESSAGE}

В теме может быть оставлено много новых ответов, но уведомления о них не будут поступать, пока Вы не просмотрите сообщение, о котором уже были уведомлены.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'Тема прикреплена: {TOPICSUBJECT}',
		'body' => 'Тема, на которую Вы подписаны, была прикреплена пользователем {POSTERNAME}.

Просмотреть тему: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Тема заблокирована: {TOPICSUBJECT}',
		'body' => 'Тема, на которую Вы подписаны, была заблокирована пользователем {POSTERNAME}.

Просмотреть тему: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Тема разблокирована: {TOPICSUBJECT}',
		'body' => 'Тема, на которую Вы подписаны, была разблокирована пользователем {POSTERNAME}.

Просмотреть тему: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Тема удалена: {TOPICSUBJECT}',
		'body' => 'Тема, на которую Вы подписаны, была удалена пользователем {POSTERNAME}.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Тема перемещена: {TOPICSUBJECT}',
		'body' => 'Тема, на которую Вы подписаны, была перемещена пользователем {POSTERNAME}.

Просмотреть тему: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Тема объединена: {TOPICSUBJECT}',
		'body' => 'Тема на которую Вы подписаны, была объединена с другой темой пользователем {POSTERNAME}.

Просмотреть новую тему: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Тема разделена: {TOPICSUBJECT}',
		'body' => 'Тема, на которую Вы подписаны, была разделена на две или более пользователем {POSTERNAME}.

Просмотреть остаток темы: {TOPICLINK}

Чтобы отказаться от уведомлений, нажмите сюда: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => 'Зарегистрирован новый пользователь',
		'body' => 'На вашем форуме зарегистрирован новый пользователь: {USERNAME}. Нажмите на ссылку, чтобы просмотреть его профиль.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => 'Зарегистрирован новый пользователь',
		'body' => 'На вашем форуме зарегистрирован новый пользователь: {USERNAME}. Нажмите на ссылку, чтобы просмотреть его профиль.
{PROFILELINK}

Прежде чем пользователь сможет отправлять сообщения, учётная запись должна быть одобрена. Для этого нажмите на ссылку:
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'Срочно! Папка вложений почти заполнена',
		'body' => '{REALNAME},

Папка вложений на форуме {FORUMNAME} почти заполнена. Пожалуйста, посетите форум и решите эту проблему.

Когда размер папки вложений достигнет максимально разрешенного, пользователи не смогут присоединять вложения к сообщениям и загружать аватары (Если разрешено).

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Продлена платная подписка',
		'body' => '{REALNAME},

Пользователь прислал продление платной подписки. Ниже указаны детали этой подписки:

	Название подписки: {NAME}
	Имя пользователя: {REFUNDNAME} ({REFUNDUSER})
	Дата: {DATE}

Вы можете просмотреть профиль этого пользователя, перейдя по ссылке:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Новая платная подписка',
		'body' => '{REALNAME},

Пользователь заказал новую платную подписку. Ниже указаны детали этой подписки:

	Название подписки: {NAME}
	Имя пользователя: {SUBNAME} ({SUBUSER})
	Email пользователя: {SUBEMAIL}
	Цена: {PRICE}
	Дата: {DATE}

Вы можете просмотреть профиль этого пользователя, перейдя по ссылке:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => 'Произошла ошибка платной подписки',
		'body' => '{REALNAME},

При обработке платной подписки возникла следующая ошибка
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => 'С днем рождения от {FORUMNAME}.',
		'body' => 'Уважаемый {REALNAME},

Администрация {FORUMNAME} поздравляет Вас с днем рождения. Пусть этот день и год принесут Вам радость.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>',
	),
	'karlbenson1' => array(
		'subject' => 'В ваш день рождения...',
		'body' => 'Мы могли бы прислать Вам поздравительную открытку. Мы могли бы прислать Вам букет цветов или праздничный торт.

Но мы этого не сделали.

Мы могли бы послать Вам одно из автоматически сгенерированных сообщений с наилучшими пожеланиями ко дню рождения, где всего лишь нужно было бы вставить имя.

Но мы этого не сделали.

Мы написали это поздравление специально для Вас.

Мы желаем Вам от всего сердца необычного дня рождения.

{REGARDS}

//:: Данное письмо сгенерировано автоматически :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
	'nite0859' => array(
		'subject' => 'С днём рождения!',
		'body' => 'Ваши друзья на форуме {FORUMNAME} желают Вам всего самого наилучшего в ваш день рождения, {REALNAME}. Если Вы давно не были на форуме, загляните к нам, чтобы заново встретиться со своими друзьями.

Сегодня у Вас день рождения, {REALNAME}, ваше присутствие на этом форуме самый большой подарок для нас.

С наилучшими пожеланиями,
Команда форума {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>',
	),
	'zwaldowski' => array(
		'subject' => 'Поздравления с днём рождения {REALNAME}',
		'body' => 'Дорогой {REALNAME},

Вот и прошел ещё один год.  Администрация форума {FORUMNAME} надеется, что это был хороший год для Вас и желает Вам счастья и удачи.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>',
	),
	'geezmo' => array(
		'subject' => 'С днём рождения, {REALNAME}!',
		'body' => 'Вы знаете, у кого сегодня день рождения, {REALNAME}?

Мы знаем ... у Вас!

С днём рождения!

Вы стали на один год старше и мы надеемся, что прошедший год был для Вас счастливым.

Сегодня ваш день, {REALNAME}, будьте счастливы!

- С наилучшими пожеланиями от форума {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>',
	),
	'karlbenson2' => array(
		'subject' => 'Поздравляем с днем рождения',
		'body' => 'Мы надеемся, что ваш день рождения будет ярким, солнечным и запомнится Вам надолго.
Желаем Вам большого торта, много друзей вокруг и удачно проведенного дня! Если наши пожелания хотя бы немного сбылись - мы будем рады узнать об этом.

Мы надеемся, что Вы сохраните хорошее настроение на весь год до нашего поздравления в следующем году.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>',
	),
);

?>