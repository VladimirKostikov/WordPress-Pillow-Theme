<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'Bar1234@' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UvlnOgC${JA<b3=$+o+oy< wsCzY#>RZ2@`F.g/#|wmKJVGh^`wE[rIi;/]P1p+!' );
define( 'SECURE_AUTH_KEY',  '9i|p5FLR$pdqgpDqA>~xGI`ruEYPe=3RK@,smO4[-#@_-{&:$HS/|, DpaE>@C1N' );
define( 'LOGGED_IN_KEY',    '}$x+@{`;:xCi6!e1tOXfTp=fSi&>_ml|U[Df5k3dKq,7F_Hc|g5/<swVi-amCT)>' );
define( 'NONCE_KEY',        '.sti?107f;GVlX kxOel(!?H&U.XU04Q0a~[C3!WYL!DEW d(67U@K=0i8CxQ?5h' );
define( 'AUTH_SALT',        'Frff]dt~8uEMb8Pj^IH&Q2*H;rtf?.kQ^Q;;)qsNr]y[yka6G:7<IiK@oMf4[!|%' );
define( 'SECURE_AUTH_SALT', 'y)l,-onlcrPSWg^l_^}spLYC-@le}B.Y#b]ZvUq;Zt+4+39~~[487L4DvaO%N&mv' );
define( 'LOGGED_IN_SALT',   'Y}G)&-5I| WQb61|x.{8YasBV`,Ni7. @ ({XX>1O<!k0Cvr0kInf]A2WS~6SzDp' );
define( 'NONCE_SALT',       'XGA)Wi[QT8ldk9PF#LNt3H4mf+AxuhiMY&!vIF$PL7vB[C!H1v$/8jJ#q&|{nK p' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD','direct');