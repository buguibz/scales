<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wpherbsservit');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '$788qnRr+Gge=rkc-Dlu!lTO<pz#TS}^%6{H{SK->7nX_fm]e-yj8ft@39-9e}FX');
define('SECURE_AUTH_KEY', '$|$F/8a_]17V<&yof|}c!(o)s{$y-VGkLSXUpr=lc/hVr}-5}Ey2N,-+P9dPbmLg');
define('LOGGED_IN_KEY', 'gt22~s^9+D;9!k3LvW$)0_n&s+YF^5M3ig+^7mOxi!okJw1O_sx#N1N3+;,l0LJH');
define('NONCE_KEY', 'r+Mk!rtB%A4jiR@7}Bj_u&l9zmFMv%c(|`Z*^?JXXbxY?g&*g~G#`_0YR|J#t*x_');
define('AUTH_SALT', 'CVP.N/`D$%+BDuqJ~:/S7f|P2.&T-?`Sw+@>]+M;D0}vkR=LnBr975,d(= d65IW');
define('SECURE_AUTH_SALT', 'uwHYN$KuRuA9?|SGif#9U0`~*oHbvpd%%|>DMWgoY,BWWJO0!|,_w4xKC)-ES]h`');
define('LOGGED_IN_SALT', 'o)m;~qc-P|5924Mv-0>&*l-jY9Y0lVyne*+ite+Cckro<k&F.7jD<Kwan_ vvM`U');
define('NONCE_SALT', 'a<EA,Z?LJK&yHt_~!2*1^2>#+,|wPwSM}d4(&?XY>`Oun>Y>}W=K>Jh=+44`Ni,e');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

