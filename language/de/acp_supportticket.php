<?php
/**
*
* @version $Id: acp_supportticket.php 102 2017-05-06 20:46:57Z Scanialady $
* @package phpBB Extension - Support Ticket (deutsch)
* @copyright (c) 2015 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

// Create the lang array if it does not already exist
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
	'STS_ENABLE'			=> 'Aktiviere den Support Ticket Assistenten',
	'STS_COLOUR'			=> 'Support Ticket Farbe',
	'STS_COLOUR_EXPLAIN'	=> 'Wähle eine Farbe für das Template.',
	'STS_FONT_SIZE'			=> 'Support Ticket Schriftgröße',
	'STS_FONT_SIZE_EXPLAIN'	=> 'Wähle die Schriftgröße für das Template. Der Wert kann zwischen 100 und 200 liegen.',
));
