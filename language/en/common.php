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
	'STS_NEW_SUPPORT_TICKET'		=> 'New Support Ticket',
	'STS_PHPBBVERSION'				=> 'Your phpBB Version:',
	'STS_PHPBBTYPE'					=> 'Your phpBB Type:',
	'STS_STANDARD'					=> 'Standard phpBB',
	'STS_PREMOD'					=> 'Premodded phpBB',
	'STS_ANDDIST'					=> 'other phpBB Distribution',
	'STS_MODS'						=> 'Do you have Extensions installed at your forum?',
	'STS_MODS_SHORT'				=> 'Extensions installed:',
	'STS_YES'						=> 'Yes',
	'STS_NO'						=> 'No',
	'STS_KNOWLEDGE'					=> 'Your knowledge:',
	'STS_BEGINNER'					=> 'Beginner',
	'STS_BASICKNOW'					=> 'Basic Knowledge',
	'STS_EXTENDED'					=> 'Advanced Knowledge',
	'STS_PROFI'						=> 'Professional',
	'STS_BEFOREERR'					=> 'What have you done before the problem was there?',
	'STS_BOARDLINK'					=> 'Boardlink:',
	'STS_SELFSOLUTION'				=> 'What have you already tried to solve the problem?',
	'STS_PHPVER'					=> 'PHP Version:',
	'STS_SQLVER'					=> 'MySQL Version:',
	'STS_HEAD_MSG'					=> 'Description and Message',
	'STS_OPTIONAL'					=> 'not required',
	'STS_HEAD'						=> 'This Assistant helps you to give the supporters enough Information to help you. Please fill out as many fields you can. Only with these informations its possible to help you efficient and fast!',
	'STS_VERSION'					=> 'Version',
));
