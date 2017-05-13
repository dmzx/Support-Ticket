<?php
/**
*
* @package phpBB Extension - Support Ticket
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'STS_NEW_SUPPORT_TICKET'		=> 'Nuevo Soporte Técnico',
	'STS_PHPBBVERSION'				=> 'Su versión de phpBB:',
	'STS_PHPBBTYPE'					=> 'Su tipo de phpBB:',
	'STS_STANDARD'					=> 'phpBB estandard',
	'STS_PREMOD'					=> 'phpBB modificado',
	'STS_ANDDIST'					=> 'Otra distribución de phpBB',
	'STS_MODS'						=> '¿Tiene Extensiones instaladas en su foro?',
	'STS_MODS_SHORT'				=> 'Extensiones instaladas:',
	'STS_YES'						=> 'Si',
	'STS_NO'						=> 'No',
	'STS_KNOWLEDGE'					=> 'Sus conocimientos:',
	'STS_BEGINNER'					=> 'Principiante',
	'STS_BASICKNOW'					=> 'Conocimiento básico',
	'STS_EXTENDED'					=> 'Conocimiento avanzado',
	'STS_PROFI'						=> 'Profesional',
	'STS_BEFOREERR'					=> '¿Qué ha realziado antes de que el problema apareciera?',
	'STS_BOARDLINK'					=> 'Enlace al foro:',
	'STS_SELFSOLUTION'				=> '¿Qué ha realizado para intentar resolver el problema?',
	'STS_PHPVER'					=> 'Versión de PHP:',
	'STS_SQLVER'					=> 'Versión de MySQL:',
	'STS_HEAD_MSG'					=> 'Descripción y mensaje',
	'STS_OPTIONAL'					=> 'no requerido',
	'STS_HEAD'						=> 'Este asistente le ayuda a dar a los miembros de Soporte suficiente información para poder ayudarle. Por favor, rellene todos los campos que pueda. ¡Sólo con está información es posible ayudarle de un modo más eficiente y rápido!',
	'STS_VERSION'					=> 'Versión'
));
