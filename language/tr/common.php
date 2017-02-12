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
	'STS_SUPPORT_TICKET'			=> 'Destek Bildirim Sistemi',
	'STS_NEW_SUPPORT_TICKET'		=> 'Yeni destek bildirimi',
	'STS_ERRMESSAGE'				=> 'Mesajınız için bir başlık girmediniz. Başlık girmek için lütfen tarayıcınızda geri düğmesine basın!',
	'STS_PHPBBVERSION'				=> 'phpBB Versiyonunuz:',
	'STS_PHPBBTYPE'					=> 'phpBB Türünüz:',
	'STS_STANDARD'					=> 'Standart phpBB',
	'STS_PREMOD'					=> 'Premod phpBB',
	'STS_ANDDIST'					=> 'Diğer phpBB türleri',
	'STS_MODS'						=> 'Forumunuzda kurduğunuz eklenti var mı?',
	'STS_MODS_SHORT'				=> 'Kurduğunuz eklentiler:',
	'STS_YES'						=> 'Evet',
	'STS_NO'						=> 'Hayır',
	'STS_KNOWLEDGE'					=> 'Bilgi seviyeniz:',
	'STS_BEGINNER'					=> 'Başlangıç',
	'STS_BASICKNOW'					=> 'Temel',
	'STS_EXTENDED'					=> 'Gelişmiş',
	'STS_PROFI'						=> 'Profesyonel',
	'STS_BEFOREERR'					=> 'En son ne yaptınız?',
	'STS_BOARDLINK'					=> 'Forum adresiniz:',
	'STS_SELFSOLUTION'				=> 'Sorunu çözmek için herhangi birşey yaptınız mı, ne yaptınız?',
	'STS_PHPVER'					=> 'PHP Versiyon:',
	'STS_SQLVER'					=> 'MySQL Versiyon:',
	'STS_HEAD_MSG'					=> 'Açıklama ve Mesaj',
	'STS_OPTIONAL'					=> 'gerekli değil',
	'STS_HEAD'						=> 'Bu formu doldurmanız size yardımcı olacak kişi veya kişilere yeterli bilgiyi vermenize yardımcı olacaktır. Lütfen mümkün olduğunca çok alan doldurun. Ancak bu bilgilerle size etkin ve hızlı bir şekilde yardımcı olunabilir!',
));
