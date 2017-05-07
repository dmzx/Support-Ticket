<?php
/**
*
* @package phpBB Extension - Support Ticket
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>
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
	'STS_NEW_SUPPORT_TICKET'		=> 'Nieuw Support Ticket',
	'STS_PHPBBVERSION'				=> 'Jouw phpBB versie:',
	'STS_PHPBBTYPE'					=> 'Jouw phpBB Type:',
	'STS_STANDARD'					=> 'Standaard phpBB',
	'STS_PREMOD'					=> 'Premodded phpBB',
	'STS_ANDDIST'					=> 'andere phpBB Distributies',
	'STS_MODS'						=> 'Heb je extensies geïnstalleerd op je forum?',
	'STS_MODS_SHORT'				=> 'Geïnstalleerde extensies:',
	'STS_YES'						=> 'Ja',
	'STS_NO'						=> 'Nee',
	'STS_KNOWLEDGE'					=> 'Jouw kennis:',
	'STS_BEGINNER'					=> 'Beginner',
	'STS_BASICKNOW'					=> 'Basic Kennis',
	'STS_EXTENDED'					=> 'Geavanceerde kennis',
	'STS_PROFI'						=> 'Professioneel',
	'STS_BEFOREERR'					=> 'Wat heb je gedaan voor het probleem er was?',
	'STS_BOARDLINK'					=> 'Forum link:',
	'STS_SELFSOLUTION'				=> 'Wat heb je al geprobeerd om het probleem op de lossen?',
	'STS_PHPVER'					=> 'PHP Versie:',
	'STS_SQLVER'					=> 'MySQL Versie:',
	'STS_HEAD_MSG'					=> 'Beschrijving en bericht',
	'STS_OPTIONAL'					=> 'niet verplicht',
	'STS_HEAD'						=> 'Deze assistent helpt je om het support team genoeg informatie te geven om je te kunnen helpen. Gelieve zoveel mogelijk velden in te vullen. Enkel met deze informatie is het mogelijk om je snel en efficiënt te helpen!',
));
