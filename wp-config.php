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
define('DB_NAME', 'mysite');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'vano2806');

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
define('AUTH_KEY',         'tM.|2>9rf2E%M;6W`33MA3Rc[?-K1bY)7-R(Q}QmXjYNyc_(?!?-)^/+Vp9/Il<n');
define('SECURE_AUTH_KEY',  'IBAP19-<k|8SxKPThg+>+xIWi8;qf;-`f]P;7Vx4m2{/`|5@G[6MLPbureXYbGe,');
define('LOGGED_IN_KEY',    'RKx7Yf3tY~jGVy2`tiw_8!ZG;}gzyl2u8WK->03g&,o!kRvAhjH>jr+sD0v]@6G/');
define('NONCE_KEY',        'T@$i?K|#TZ<>iI*e~f=]mi{&[$%z+z8k7N;MD+z[B5Dz*92zd1B..)xYfn}7-@Ws');
define('AUTH_SALT',        'iL/hAY7VRI%;/>UO-Y*_6c*!uJ?tX-CvO Cxz},<A^5Nm8;qjr*(0$_H<E7EZQTL');
define('SECURE_AUTH_SALT', 'OIgy)IH0eY{MtuO8M[3yb<@5TS1Q0>=Yk00d|r|E.(]+vs|t.U,Orj-{{AVKDOx+');
define('LOGGED_IN_SALT',   '*eHluPxJ5cY5|R+e.jEaD+R!6-QCgyF(%Ts&X0{Raog+F4lFe+-%5=W|f)<MN#mt');
define('NONCE_SALT',       '96Cf`ZM:z$<qh:7:t@txL?++A>wJ=U-HgA=gW:i*%4fp<Z24m5EPT|PU4*3Se-X,');

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
