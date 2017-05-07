<?php
/**
*
* @version $Id: common.php 102 2017-05-06 20:46:57Z Scanialady $
* @package phpBB Extension - Support Ticket (deutsch)
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
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'STS_NEW_SUPPORT_TICKET'		=> 'Neues Support Ticket',
	'STS_PHPBBVERSION'				=> 'Deine phpBB Version:',
	'STS_PHPBBTYPE'					=> 'Dein phpBB Typ:',
	'STS_STANDARD'					=> 'Standard phpBB',
	'STS_PREMOD'					=> 'Premodded phpBB',
	'STS_ANDDIST'					=> 'andere phpBB Distribution',
	'STS_MODS'						=> 'Hast du in deinem Forum Extensionen installiert?',
	'STS_MODS_SHORT'				=> 'Installierte Extensionen:',
	'STS_YES'						=> 'Ja',
	'STS_NO'						=> 'Nein',
	'STS_KNOWLEDGE'					=> 'Dein Wissensstand:',
	'STS_BEGINNER'					=> 'Anfänger',
	'STS_BASICKNOW'					=> 'Grundwissen',
	'STS_EXTENDED'					=> 'Fortgeschrittenes Wissen',
	'STS_PROFI'						=> 'Professionell',
	'STS_BEFOREERR'					=> 'Was hast du getan, ehe das Problem auftrat?',
	'STS_BOARDLINK'					=> 'Boardlink:',
	'STS_SELFSOLUTION'				=> 'Was hast du schon versucht, um das Problem zu lösen?',
	'STS_PHPVER'					=> 'PHP Version:',
	'STS_SQLVER'					=> 'MySQL Version:',
	'STS_HEAD_MSG'					=> 'Beschreibung und Nachricht',
	'STS_OPTIONAL'					=> 'nicht erforderlich',
	'STS_HEAD'						=> 'Dieser Assistent hilft dir, den Supportern ausreichend Informationen zu geben, damit man dir helfen kann. Bitte fülle so viele Felder aus, wie du kannst. Nur mit diesen Informationen kann dir schnell und effizient geholfen werden!',
	'STS_VERSION'					=> 'Version',
));
