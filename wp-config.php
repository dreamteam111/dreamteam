<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'dreamteam');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[ ^<3W}0S$r5KbF|# 9nXkqopN U=cO5L?(HA2L9B@2+N$JCA-RYPrg0I`eAJ}Gi');
define('SECURE_AUTH_KEY',  'TNy5-+gmjgA&$4D]ucvpHZ+CIAhs<OCOmcR.FCCb3?98RD<<Be2A$[8F:rjw>F|v');
define('LOGGED_IN_KEY',    '+1bWJZ- X6aa$yRr?zXoSnD$N2Cb#rg/.KCDMAd-q=lP=aeQlB~Odxm>k*R)ayNF');
define('NONCE_KEY',        '5K>uwaq3%^?V@=oPiSf92eTTxW0] ht>t#M^gMUPE6?U*A4iu+2/9K ATY>geZng');
define('AUTH_SALT',        'qs`mE7:/DF1 nG8)Sp= k@Xi8D}<t(o;t+S4(`i}uwJ})K5EfhaV[e|yW|6J=1e7');
define('SECURE_AUTH_SALT', '~@7jOXqc ;,^rL:lRM+=|Lj%t:TN3.?},]f^=G@?-|.so-Y4n-m++Sc/knA8sZWp');
define('LOGGED_IN_SALT',   ' NL~g]X53gAP|,-]yC.?R=KtC71#d1^)z=b+;+X+hR2CDuw>*%+TwUF{r Fiie^z');
define('NONCE_SALT',       'gm*%RxeNq-,=6s.+3qjP(_hrasoQUNu<R3acei9#v/W?sR$f}:22/>FzgNM4dBIB');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
