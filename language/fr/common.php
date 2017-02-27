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
	'STS_SUPPORT_TICKET' 		=> 'Supportticket Système',
	'STS_NEW_SUPPORT_TICKET'	=> 'Nouveau ticket de support',
	'STS_ERRMESSAGE' 			=> 'Vous n’avez pas entré de titre pour votre message. S’il vous plaît appuyez sur le bouton Retour de votre navigateur pour corriger cela! ',
	'STS_PHPBBVERSION' 			=> 'Votre phpBB Version:',
	'STS_PHPBBTYPE' 			=> 'Votre phpBB Type:',
	'STS_STANDARD' 				=> 'Standard phpBB',
	'STS_PREMOD' 				=> 'Premodded phpBB',
	'STS_ANDDIST' 				=> 'autre distribution phpBB',
	'STS_MODS' 					=> 'Avez-vous des extensions installées sur votre forum?',
	'STS_MODS_SHORT' 			=> 'Extensions installées:',
	'STS_YES' 					=> 'Oui',
	'STS_NO' 					=> 'Non',
	'STS_KNOWLEDGE' 			=> 'Vos connaissances:',
	'STS_BEGINNER' 				=> 'Débutant',
	'STS_BASICKNOW' 			=> 'Connaissances de base',
	'STS_EXTENDED' 				=> 'Connaissances avancées',
	'STS_PROFI' 				=> 'Professionnel',
	'STS_BEFOREERR' 			=> 'Qu’avez-vous fait avant que le problème ne se soit produit?',
	'STS_BOARDLINK' 			=> 'Boardlink:',
	'STS_SELFSOLUTION' 			=> 'Qu’avez-vous déjà essayé de résoudre le problème?',
	'STS_PHPVER' 				=> 'Version PHP:',
	'STS_SQLVER' 				=> 'Version MySQL:',
	'STS_HEAD_MSG' 				=> 'Description et Message',
	'STS_OPTIONAL' 				=> 'pas nécessaire',
	'STS_HEAD' 					=> 'Cet assistant vous aide à donner suffisamment d’informations aux supporters pour vous aider. Veuillez remplir autant de champs que vous le pouvez. Seulement avec ces informations il est possible de vous aider efficacement et rapidement! ',
));